<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\DetailViewController;

use App\Http\Controllers\Auth\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('post-registrater', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('get-prefecture-region',[HomeController::class, 'getPrefectureRegions'])->name('get.prefecture.name');
Route::get('/get-cities-by-prefecture-id', [AuthController::class, 'getCitiesByPrefectureID']);

Route::get('get-qualification',[HomeController::class, 'getQualifications'])->name('get.qualification');

// Route::get('/{prefecture}', [DetailViewController::class, 'showByPrefecture']); 
Route::get('/cities/{prefectureId}', [AuthController::class, 'getCitiesByPrefecture']);

Route::get('dashboard', [AuthController::class, 'dashboard'])->middleware(['auth', 'is_verify_email']); 
Route::get('account/verify/{token}', [AuthController::class, 'verifyAccount'])->name('user.verify'); 

// Route::get('confirm',[UserController::class, 'postRegistration'])->name('comfirm.post');

Route::get('answer', [AnswerController::class, 'answer'])->name('answer');
// Route::post('post-registrater', [AuthController::class, 'postRegistration'])->name('register.post'); 
