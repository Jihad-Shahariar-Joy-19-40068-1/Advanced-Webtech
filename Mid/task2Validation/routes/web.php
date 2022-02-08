<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductsController;
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

Route::get('/index',[PagesController::class,'index']);
Route::get('/login',[PagesController::class,'login'])->name('login');
Route::get('/registration',[PagesController::class,'registration'])->name('registration');

Route::get('/student/create',[StudentController::class,'create']);
Route::get('/student/edit',[StudentController::class,'edit']);
Route::get('/student/get/{id}/{name}/{dob}',[StudentController::class,'get'])->name('student.details');
Route::get('/student/list',[StudentController::class,'list'])->name('student.list');


Route::post('/registration',[PagesController::class,'registrationsubmit'])->name('registration.submit');


Route::get('/productCRUD',[ProductsController::class,'productCRUD'])->name('productCRUD');
Route::post('/productCRUD',[ProductsController::class,'productsubmit'])->name('product.submit');