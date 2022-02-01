<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login',function(){
//     return view('Test.login');
// });

// Route::get('/registration',function(){
//     return view('Test.registration');
// });

//Route::get('/login','PagesController@index');

Route::get('/index',[PagesController::class,'index']);
Route::get('/login',[PagesController::class,'login']);
Route::get('/registration',[PagesController::class,'registration']);
Route::get('/contactUs',[PagesController::class,'contactUs']);
Route::get('/login1',[PagesController::class,'login1']);
Route::get('/home',[PagesController::class,'home']);


Route::get('/student/create',[StudentController::class,'create']);
Route::get('/student/edit',[StudentController::class,'edit']);
Route::get('/student/get',[StudentController::class,'get']);