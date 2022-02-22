<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
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

Route::get('/index',[PagesController::class,'index'])->name('home');
Route::get('/login',[PagesController::class,'login'])->name('login');
Route::get('/registration',[PagesController::class,'registration'])->name('registration');

Route::get('/student/create',[StudentController::class,'create']);
Route::get('/student/edit',[StudentController::class,'edit']);
Route::get('/student/get/{id}',[StudentController::class,'get'])->name('student.details');
Route::get('/list',[StudentController::class,'list'])->name('student.list');

//->middleware('auth.user')
Route::post('/registration',[PagesController::class,'registrationsubmit'])->name('registration.submit');
Route::post('/login',[PagesController::class,'loginsubmit'])->name('login.submit');
Route::get('/logout',[PagesController::class,'logout'])->name('logout');


Route::get('/department/list',[DepartmentController::class,'list'])->name('department.list');
Route::get('/department/details/{id}',[DepartmentController::class,'details'])->name('department.details');

Route::get('/teacher/list',[TeacherController::class,'list'])->name('teacher.list');
Route::get('/teacher/details/{id}',[TeacherController::class,'details'])->name('teacher.details');
Route::get('/teacher/teacherstudent/{id}',[TeacherController::class,'studentlist'])->name('teacherstudent.details');