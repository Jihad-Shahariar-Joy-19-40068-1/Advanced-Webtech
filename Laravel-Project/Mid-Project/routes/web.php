<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\TeacherController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', function () {
//     return view('home.login');
// });
// Route::get('/registration', function () {
//     return view('home.registration');
// });
//Route::get('/login','PagesSontroller@login');

Route::get('/index',[UserController::class,'index'])->name('home');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::get('/registration',[UserController::class,'registration'])->name('registration');
//--------------------------------------------------------------------------------------------------
Route::post('/registration',[UserController::class,'registrationsubmit'])->name('registration.submit');
Route::post('/login',[UserController::class,'loginsubmit'])->name('login.submit');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
//--------------------------------------------------------------------------------------------------
Route::get('/aboutus',[UserController::class,'aboutus'])->name('aboutus');
Route::get('/contactus',[UserController::class,'contactus'])->name('contactus');
//--------------------------------------------------------------------------------------------------
Route::get('/series/create',[SeriesController::class,'create']);
Route::get('/series/edit',[SeriesController::class,'edit']);
Route::get('/series/get/{id}',[SeriesController::class,'get'])->name('series.details');
Route::get('/list',[SeriesController::class,'list'])->name('series.list');
//--------------------------------------------------------------------------------------------------
Route::get('/user/get/{id}',[UserController::class,'get'])->name('user.details');
Route::get('/episode/get/{id}',[SeriesController::class,'get_ep'])->name('episode.details');

Route::get("/search", [SeriesController::class,'search'])->name('search');