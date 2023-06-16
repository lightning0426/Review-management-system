<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\PrefectureRegion;
use App\Models\City;
use App\Models\Qual_User;
use App\Models\Users;

class AnswerController extends Controller
{
    public function index()
    {
  
        return view('answer');
    }  
    public function answer()
    {
  
        return view('answer');
    }  
    //
}
