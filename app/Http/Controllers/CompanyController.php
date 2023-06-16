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

class CompanyController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */

     public function showCompanies(Request $request) {
      $keyword = $request->input('keyword');

      $query = DB::table('tbl_cooperate')
                ->select('tbl_cooperate.id', 'tbl_cooperate.name', 'tbl_cooperate.address', 'tbl_cooperate.postcode','tbl_prefecture_region.name as prefecture_name', 'tbl_city_region.name as city_name', 'tbl_nursery.id AS nursery_id', DB::raw('AVG(tbl_review.rating) AS review_rating'), DB::raw('COUNT(tbl_review.rating) AS review_count'))
                ->join('tbl_nursery', 'tbl_nursery.cooperate_id', '=', 'tbl_cooperate.id')
                ->join('tbl_city_region', 'tbl_cooperate.city_id', '=', 'tbl_city_region.id')
                ->join('tbl_prefecture_region', 'tbl_city_region.prefecture_id', '=', 'tbl_prefecture_region.id')
                ->leftJoin('tbl_review_relation', 'tbl_nursery.id', '=', 'tbl_review_relation.nursery_id')
                ->leftJoin('tbl_review', 'tbl_review_relation.id', '=', 'tbl_review.review_id');
      if($keyword) {
        $query->where('tbl_cooperate.name', 'like', '%' . $keyword . '%');
      }      
      $data = $query->groupBy('tbl_cooperate.id', 'tbl_nursery.id')
                    ->get();

      $arrayData = $data->groupBy('id')->map(function($item){
        $count = 0;
        $rating = 0;
        $first = $item->first();
        $fake_count = 0;
        foreach($item as $detail) {
          $count+=$detail->review_count;
          $rating+=$detail->review_rating;
          if($detail->review_rating) $fake_count++;
        }
        if($fake_count!=0)$rating/=$fake_count;
        $rating = number_format($rating, 1);
        $new_array['id'] = $item->first()->id;
        $new_array['name'] = $item->first()->name;
        $new_array['address'] = $item->first()->address;
        $new_array['postcode'] = $item->first()->postcode;
        $new_array['prefecture_name'] = $item->first()->prefecture_name;
        $new_array['city_name'] = $item->first()->city_name;
        $new_array['nursery_count'] = $item->count();
        $new_array['review_count'] = $count;
        $new_array['review_rating'] = $rating;

        return $new_array;
      });

      $prefectureData = PrefectureRegion::select('id','main_id', 'name', 'en_name')->get();
      $facilityData = Facility::select('id', 'name')->get();

      $companyData = $this->arrayPaginator($arrayData, $request);

      return view('company', compact('companyData', 'prefectureData', 'facilityData', 'keyword'));
     }

     public function getPopularCompany(){
      $data = DB::table('tbl_cooperate')
                ->select('tbl_cooperate.id', 'tbl_cooperate.name', 'tbl_cooperate.address', 'tbl_cooperate.postcode','tbl_prefecture_region.name as prefecture_name', 'tbl_city_region.name as city_name', 'tbl_nursery.id AS nursery_id', DB::raw('AVG(tbl_review.rating) AS review_rating'), DB::raw('COUNT(tbl_review.rating) AS review_count'))
                ->join('tbl_nursery', 'tbl_nursery.cooperate_id', '=', 'tbl_cooperate.id')
                ->join('tbl_city_region', 'tbl_cooperate.city_id', '=', 'tbl_city_region.id')
                ->join('tbl_prefecture_region', 'tbl_city_region.prefecture_id', '=', 'tbl_prefecture_region.id')
                ->leftJoin('tbl_review_relation', 'tbl_nursery.id', '=', 'tbl_review_relation.nursery_id')
                ->leftJoin('tbl_review', 'tbl_review_relation.id', '=', 'tbl_review.review_id')
                ->groupBy('tbl_cooperate.id', 'tbl_nursery.id')
                ->get();

      $arrayData = $data->groupBy('id')->map(function($item){
        $count = 0;
        $rating = 0;
        $first = $item->first();
        $fake_count = 0;
        foreach($item as $detail) {
          $count+=$detail->review_count;
          $rating+=$detail->review_rating;
          if($detail->review_rating) $fake_count++;
        }
        if($fake_count!=0)$rating/=$fake_count;
        $rating = number_format($rating, 1);
        $new_array['id'] = $item->first()->id;
        $new_array['name'] = $item->first()->name;
        $new_array['address'] = $item->first()->address;
        $new_array['postcode'] = $item->first()->postcode;
        $new_array['prefecture_name'] = $item->first()->prefecture_name;
        $new_array['city_name'] = $item->first()->city_name;
        $new_array['nursery_count'] = $item->count();
        $new_array['review_count'] = $count;
        $new_array['review_rating'] = $rating;

        return $new_array;
      });

      $sortedResults = $arrayData->sortByDesc('review_rating')->take(3);

      return $sortedResults;
     }

     public function getReviewsByCompanyId($id) {
      $query = DB::table('tbl_cooperate')
                ->select('tbl_review.id', 'tbl_nursery.name', 'tbl_nursery.id as nursery_id', 'tbl_review.employment', 'tbl_review.workperiod', 'tbl_review.review_type', 'tbl_review.content', 'tbl_review.rating', 'users.name as user_name')
                ->join('tbl_nursery', 'tbl_nursery.cooperate_id', '=', 'tbl_cooperate.id')
                ->join('tbl_review_relation', 'tbl_nursery.id', '=', 'tbl_review_relation.nursery_id')
                ->join('tbl_review', 'tbl_review_relation.id', '=', 'tbl_review.review_id')
                ->join('users', 'users.id', '=', 'tbl_review_relation.user_id')
                ->where('tbl_cooperate.id', $id);
      $data = $query->get();   

      return $data;  
    }

     public function showCompanyById($id, Request $request) {
      
      $data = DB::table('tbl_cooperate')
                ->select('tbl_cooperate.id', 'tbl_cooperate.name', 'tbl_cooperate.address', 'tbl_cooperate.postcode','tbl_prefecture_region.name as prefecture_name', 'tbl_city_region.name as city_name', 'tbl_nursery.id AS nursery_id', DB::raw('AVG(tbl_review.rating) AS review_rating'), DB::raw('COUNT(tbl_review.rating) AS review_count'))
                ->join('tbl_nursery', 'tbl_nursery.cooperate_id', '=', 'tbl_cooperate.id')
                ->join('tbl_city_region', 'tbl_cooperate.city_id', '=', 'tbl_city_region.id')
                ->join('tbl_prefecture_region', 'tbl_city_region.prefecture_id', '=', 'tbl_prefecture_region.id')
                ->leftJoin('tbl_review_relation', 'tbl_nursery.id', '=', 'tbl_review_relation.nursery_id')
                ->leftJoin('tbl_review', 'tbl_review_relation.id', '=', 'tbl_review.review_id')
                ->where('tbl_cooperate.id', $id)
                ->groupBy('tbl_cooperate.id', 'tbl_nursery.id')
                ->get();

      $arrayData = $data->groupBy('id')->map(function($item){
        $count = 0;
        $rating = 0;
        $first = $item->first();
        $fake_count = 0;
        foreach($item as $detail) {
          $count+=$detail->review_count;
          $rating+=$detail->review_rating;
          if($detail->review_rating) $fake_count++;
        }
        if($fake_count!=0)$rating/=$fake_count;
        $rating = number_format($rating, 1);
        $new_array['id'] = $item->first()->id;
        $new_array['name'] = $item->first()->name;
        $new_array['address'] = $item->first()->address;
        $new_array['postcode'] = $item->first()->postcode;
        $new_array['prefecture_name'] = $item->first()->prefecture_name;
        $new_array['city_name'] = $item->first()->city_name;
        $new_array['nursery_count'] = $item->count();
        $new_array['review_count'] = $count;
        $new_array['review_rating'] = $rating;

        return $new_array;
      });


      $query = Nursery::join('tbl_nursery_facility', 'tbl_nursery.id', '=', 'tbl_nursery_facility.nursery_id')
                        ->join('tbl_facility', 'tbl_facility.id', '=', 'tbl_nursery_facility.facility_id')
                        ->join('tbl_cooperate', 'tbl_nursery.cooperate_id', '=', 'tbl_cooperate.id')
                        ->join('tbl_city_region', 'tbl_nursery.city_id', '=', 'tbl_city_region.id')
                        ->join('tbl_prefecture_region', 'tbl_city_region.prefecture_id', '=', 'tbl_prefecture_region.id')
                        ->where('tbl_cooperate.id', $id);
      
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

      $cardData = $this->arrayPaginator($merged, $request);

      $prefectureData = PrefectureRegion::select('id','main_id', 'name', 'en_name')->get();
      $facilityData = Facility::select('id', 'name')->get();
      $companyData = $this->arrayPaginator($arrayData, $request);
      $popularData = $this->getPopularCompany();
      $reviewData = $this->getReviewsByCompanyId($id);

      return view('companydetail', compact('companyData', 'cardData', 'prefectureData', 'facilityData', 'popularData', 'reviewData'));
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
