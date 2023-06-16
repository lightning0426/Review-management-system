<?php
  
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\PrefectureRegion;
use App\Models\City;
use App\Models\Facility;
use App\Models\User;

use App\Models\Qualification;
use Hash;
use Illuminate\Support\Str;
use Mail; 
  
class HomeController extends Controller
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
      $dockyoData = City::select()->where('prefecture_id', 15)->get();
      $data2 = compact('prefectureData');
      $data1 = compact('prefectureData', 'facilityData','dockyoData');

      return view('home', $data1)
        ->with('title', 'Home');
    }

   

    public function getPrefectureRegions(){
      $prefectureData = PrefectureRegion::select('id','main_id', 'name', 'en_name')->get();
      $data = compact('prefectureData');
      return response()->json($data);
    }

    public function getCitiesByPrefecture($prefectureId)
    {
      $cities = City::where('prefecture_id', $prefectureId)->get();
      $data = compact('cities');
      return response()->json($data);
    }

    public function getQualifications(){
      $qualificationData = Qualification::select('id', 'name')->get();
      $data = compact('qualificationData');
      return response()->json($data);
    }
}