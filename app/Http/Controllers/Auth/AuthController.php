<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\PrefectureRegion;
use App\Models\City;
use App\Models\Qual_User;
use App\Models\Users;

use App\Models\UserVerify;
use Hash;
use Illuminate\Support\Str;
use Mail; 
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
  
        return view('auth.login');

    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function getPrefectureRegions(){
        $prefectureData = PrefectureRegion::select('id','main_id', 'name', 'en_name')->get();
        $data = compact('prefectureData');
        return response()->json($data);
      }
  
      public function getCitiesByPrefectureID(Request $request)
      {
        // $cities = City::where('prefecture_id', $prefectureId)->get();
        // $data = compact('cities');
        // return response()->json($data);
        
        $prefecture_id = $request->input('prefecture_id');
        $cities = City::select('id', 'name','prefecture_id')
                ->where('prefecture_id', $prefecture_id)
                ->get();
   
        return response()->json($cities);
      }

    public function registration()
    {
        $prefectureData  = PrefectureRegion::select('id','main_id', 'name', 'en_name')->get();
        $cityData  = City::select('id', 'name', 'prefecture_id')->get();

        $data1 = compact('prefectureData','cityData');
  
        return view('auth.registration',$data1);
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {  
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:6',
        // ]);
           
        $data = $request->all();
        $createUser = $this->create($data);
  
        // $token = Str::random(64);
  
        // UserVerify::create([
        //       'user_id' => $createUser->id, 
        //       'token' => $token
        //     ]);
  
        // Mail::send('email.emailVerificationEmail', ['token' => $token], function($message) use($request){
        //       $message->to($request->email);
        //       $message->subject('Email Verification Mail');
        //   });
         
        return redirect("")->withSuccess('Great! You have Successfully loggedin');
    }
     public function create(array $data)
    {        

        $birthYear = $data['birthday_year'];
        $birthMonth = str_pad($data['birthday_month'], 2, '0', STR_PAD_LEFT);
        $birthDay = str_pad($data['birthday_day'], 2, '0', STR_PAD_LEFT);
        $birthdate = $birthYear . "-" . $birthMonth . "-" . $birthDay;

        $qualifications = [];
        foreach ($data['qualifications'] as $qualification) {
            $qualifications[] = $qualification;
        }
        
        // $data['qualifications'] = $qualifications;
        $createUser = Users::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'birth' => $birthdate,
            'prefecture_id' => $data['prefecture_id'],
            'city_id' => $data['city_id'],
        ]);

        foreach ($data['qualifications'] as $qualification) {
            Qual_User::create([
                'user' => $createUser->id,
                'qualification_id' => $qualification
            ]);            
        }
        return $createUser;
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    
    /**
     * Write code on Method
     *
     * @return response()
     */
   
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();
  
        $message = 'Sorry your email cannot be identified.';
  
        if(!is_null($verifyUser) ){
            $user = $verifyUser->user;
              
            if(!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }
  
      return redirect()->route('login')->with('message', $message);
    }
}