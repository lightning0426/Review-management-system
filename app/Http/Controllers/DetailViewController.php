<?php
  
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\PrefectureRegion;
use App\Models\Facility;
use App\Models\Qualification;
use Hash;
use Illuminate\Support\Str;
use Mail; 
  
class DetailViewController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
      $prefectureData = PrefectureRegion::select('id','main_id', 'name', 'en_name')->get();
      $facilityData = Facility::select('id', 'name')->get();

      $data2 = compact('prefectureData');
      $data1 = compact('prefectureData', 'facilityData');

      return view('home', $data1)
        ->with('title', 'Home');
    }


    public function showByPrefecture(Request $request, $prefecture){
      print_r($prefecture);
      return view('detailview')->with(' ', 'hello');
    }
}