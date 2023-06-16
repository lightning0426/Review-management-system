<?php
  
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\PrefectureRegion;
use App\Models\Facility;
use App\Models\Qualification;
use App\Models\Nursery;
use Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Mail; 
use Illuminate\Pagination\LengthAwarePaginator;
  

class DetailViewController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function showByPrefecture(Request $request, $prefecture){
      print_r($prefecture);
      return view('detailview')->with('selectedPrefectureName', 'hello');
    }

    public function showNurseries(Request $request) {
      $keyword = $request->input('keyword');
      $facility_ids = $request->input('facility_type_ids', []);
      $prefecture_id = $request->input('prefecture_id');
      $city_ids = $request->input('city_ids', []);
      $order_type = $request->input('order_type');

      $query = Nursery::join('tbl_nursery_facility', 'tbl_nursery.id', '=', 'tbl_nursery_facility.nursery_id')
                        ->join('tbl_facility', 'tbl_facility.id', '=', 'tbl_nursery_facility.facility_id')
                        ->join('tbl_cooperate', 'tbl_nursery.cooperate_id', '=', 'tbl_cooperate.id')
                        ->join('tbl_city_region', 'tbl_nursery.city_id', '=', 'tbl_city_region.id')
                        ->join('tbl_prefecture_region', 'tbl_city_region.prefecture_id', '=', 'tbl_prefecture_region.id');
      if($facility_ids){
        $query->whereIn('tbl_nursery_facility.facility_id', $facility_ids);
      }
      if($keyword) {
        $query->where('tbl_nursery.name', 'like', '%' . $keyword . '%');
      }
      if($city_ids){
        $query->whereIn('tbl_nursery.city_id', $city_ids);
      }
      if($prefecture_id && $prefecture_id != "") {
        $query->where('tbl_prefecture_region.id', $prefecture_id);
      }
      $result = $query->select('tbl_nursery.*', 'tbl_prefecture_region.name as prefecture_name', 'tbl_cooperate.name as cooperate_name', 'tbl_city_region.name as city_name', 'tbl_facility.name as facility_name', 'tbl_nursery_facility.facility_id')->get();
      $grouped = $result->groupBy('id')->map(function ($item) {
        $first = $item->first();
        $nursery = $first->toArray();
        $nursery['facility_id'] = $item->pluck('facility_id')->toArray();
        $nursery['facility_name'] = $item->pluck('facility_name')->toArray();
        return $nursery;
      });
      $statistics = DB::table('tbl_review_relation')->join('tbl_review', 'tbl_review.review_id', '=', 'tbl_review_relation.id')
                                   ->groupBy('nursery_id')
                                   ->select('tbl_review_relation.nursery_id', 'tbl_review.content', DB::raw('avg(tbl_review.rating) as review_rating'), DB::raw('count(*) as review_count'))
                                   ->get();
      $merged = $grouped->map(function ($item) use ($statistics) {
        $id = $item['id'];
        $stat = $statistics->where('nursery_id', $id)->first();
    
        return [
            'id' => $id,
            'name' => $item['name'],
            'cooperate_name' => $item['cooperate_name'],
            'address' => $item['prefecture_name'].$item['city_name'].$item['address'],
            'facility_id' => $item['facility_id'],
            'facility_name' => $item['facility_name'],
            'content' => $stat ? $stat->content : "",
            'review_rating' => $stat ? number_format($stat->review_rating, 1) : 0,
            'review_count' => $stat ? $stat->review_count : 0,
        ];
      });

      if($order_type == "byRating") $merged = $merged->sortByDesc('review_rating');
      else if($order_type == "byCount") $merged = $merged->sortByDesc('review_count');

      $cardData = $this->arrayPaginator($merged, $request);

      $prefectureData = PrefectureRegion::select('id','main_id', 'name', 'en_name')->get();
      $facilityData = Facility::select('id', 'name')->get();
      $selectedPrefectureName = $prefecture_id!="" ? PrefectureRegion::select('name')->where('id', $prefecture_id)->first()['name'] : "指定なし";
      $selectedCityNames = "指定なし";
      if($city_ids){
        $selectedCityNames = "";
        $cityRows = DB::table('tbl_city_region')->whereIn('id', $city_ids)->select('name')->get();
        for($i = 0;$i<count($cityRows); $i++){
          if($i != count($cityRows)-1){
            $selectedCityNames .= $cityRows[$i]->name;
            $selectedCityNames .= ",";
          }
          else
            $selectedCityNames .= $cityRows[$i]->name;
        }
      } 

      $selectedFacilityNames = "指定なし";
      if($facility_ids){
        $selectedFacilityNames = "";
        $facilityRows = DB::table('tbl_facility')->whereIn('id', $facility_ids)->select('name')->get();
        for($i = 0;$i<count($facilityRows); $i++){
          if($i != count($facilityRows)-1){
            $selectedFacilityNames .= $facilityRows[$i]->name;
            $selectedFacilityNames .= ",";
          }
          else 
            $selectedFacilityNames .= $facilityRows[$i]->name;
        }
      } 
      $data = compact('cardData', 'prefectureData', 'facilityData', 'keyword', 'facility_ids', 'prefecture_id', 'city_ids', 'selectedPrefectureName','selectedCityNames', 'selectedFacilityNames', 'order_type');
      return view('nursery', $data);
    }

    public function getByPrefectures(Request $request) {
      $keyword = $request->input('keyword');
      $prefecture_id = $request->input('prefecture_id');

      $query = Nursery::groupBy('tbl_nursery.city_id')
                 ->select('tbl_nursery.city_id', DB::raw('count(*) as nursery_count'))
                 ->rightJoin('tbl_city_region', 'tbl_city_region.id', '=', 'tbl_nursery.city_id')
                 ->join('tbl_prefecture_region', 'tbl_city_region.prefecture_id', '=', 'tbl_prefecture_region.id');
      if($prefecture_id && $prefecture_id != "") {
        $query->where('tbl_prefecture_region.id', $prefecture_id);
      }
      if($keyword) {
        $query->where('tbl_nursery.name', 'like', '%' . $keyword . '%');
      }

      $cityDetail = $query->groupBy('tbl_city_region.id')
                 ->select('tbl_city_region.id', 'tbl_city_region.name', DB::raw('count(tbl_nursery.city_id) as nursery_count'))
                 ->orderBy('tbl_city_region.id')
                 ->get();

      $query = Nursery::join('tbl_city_region', 'tbl_city_region.id', '=', 'tbl_nursery.city_id')
                        ->join('tbl_prefecture_region', 'tbl_city_region.prefecture_id', '=', 'tbl_prefecture_region.id');
      if($prefecture_id && $prefecture_id != "") {
        $query->where('tbl_prefecture_region.id', $prefecture_id);
      }
      if($keyword) {
        $query->where('tbl_nursery.name', 'like', '%' . $keyword . '%');
      }
      
      $merged = $query->join('tbl_nursery_facility', 'tbl_nursery.id', '=', 'tbl_nursery_facility.nursery_id')
                ->select('tbl_nursery_facility.facility_id', DB::raw('count(tbl_nursery_facility.nursery_id) as facility_count'))
                ->groupBy('tbl_nursery_facility.facility_id')
                ->get();
      $facilities = Facility::get();
      
      $facilityDetail = $facilities->map(function ($item) use ($merged) {
        $id = $item['id'];
        $stat = $merged->where('facility_id', $id)->first();
    
        return [
            'id' => $id,
            'name' => $item['name'],
            'facility_count' => $stat ? $stat->facility_count : 0,
        ];
      });

      $detail['cityDetail'] = [];
      if($prefecture_id && $prefecture_id != "")  $detail['cityDetail'] = $cityDetail;
      $detail['facilityDetail'] = $facilityDetail;

      return response()->json($detail);
    }

    public function arrayPaginator($collection, $request) {
      $page = $request->input('page') ?? 1;
      $perPage = 20;
      $offset = ($page * $perPage) - $perPage;

      return new LengthAwarePaginator(
          $collection->forPage($page, $perPage),
          $collection->count(),
          $perPage,
          $page,
          ['path' => $request->url(), 'query' => $request->query()]
      );
    }
}