<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserAPIController;
use App\Http\Controllers\SeriesAPIController;
use App\Http\Controllers\AdminAPIController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//view
//--------------------------------------------------------------------------------------------------
Route::get('/index',[UserAPIController::class,'index'])->name('home');
Route::get('/',[UserAPIController::class,'login'])->name('login');
Route::get('/registration',[UserAPIController::class,'registration'])->name('registration');

//Reg_login
//--------------------------------------------------------------------------------------------------
Route::post('/registration',[UserAPIController::class,'registrationsubmit'])->name('registration.submit');
Route::post('/login',[UserAPIController::class,'loginsubmit'])->name('login.submit');
Route::get('/logout',[UserAPIController::class,'logout'])->name('logout');

//AboutUs
//--------------------------------------------------------------------------------------------------
Route::get('/aboutus',[UserAPIController::class,'aboutus'])->name('aboutus');
Route::get('/contactus',[UserAPIController::class,'contactus'])->name('contactus');

//Series
//--------------------------------------------------------------------------------------------------
Route::get('/series/create',[SeriesAPIController::class,'create']);
Route::get('/series/edit',[SeriesAPIController::class,'edit']);
Route::get('/series/get/{id}',[SeriesAPIController::class,'get'])->name('series.details');
Route::get('/list',[SeriesAPIController::class,'list'])->name('series.list');
Route::get("/search", [SeriesAPIController::class,'search'])->name('search');
Route::get('/series/upload',[SeriesAPIController::class,'series_upload'])->name('upload');
Route::get('/series/exisitingWebseriesEpisode',[SeriesAPIController::class,'exist_episode'])->name('ex_ep_upload');
Route::post('/series/episdeUpload',[SeriesAPIController::class,'ep_upload'])->name('ep_upload');
Route::get('/series/seriesUpload',[SeriesAPIController::class,'s_upload'])->name('series_upload');
Route::post('/series/SeriesUpload',[SeriesAPIController::class,'ser_upload'])->name('ser.upload');
Route::get('/episode/get/{id}',[SeriesAPIController::class,'get_ep'])->name('episode.details');
//User
//--------------------------------------------------------------------------------------------------
Route::get('/user/get/{id}',[UserAPIController::class,'get'])->name('user.details');

Route::get('/user/edit/{id}',[UserAPIController::class,'get_user'])->name('user_profile_edit');
Route::post("/user/update",[UserAPIController::class,'user_update'])->name('user.update');

//Admin
//--------------------------------------------------------------------------------------------------
Route::get("/admin/viewallusers",[AdminAPIController::class,'all_users'])->name('all_users');
Route::get("/admin/user/details/{id}",[AdminAPIController::class,'user_details'])->name('user_details');
Route::get("/admin/user/delete/{id}",[AdminAPIController::class,'user_delete'])->name('user_delete');
Route::get("/admin/user/Edit/{id}",[AdminAPIController::class,'user_edit'])->name('user_edit');
Route::post("/admin/user/update",[AdminAPIController::class,'user_update'])->name('user_update');
