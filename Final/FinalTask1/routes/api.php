<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentAPIController;

use App\Http\Controllers\DeptAPIController;
use App\Http\Controllers\CourseAPIController;
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

Route::get('/student/all',[StudentAPIController::class,'getall']);
Route::get('/student/{id}',[StudentAPIController::class,'get']);
Route::post('/student/add',[StudentAPIController::class,'add']);


Route::get('/courses/all', [CourseAPIController::class, 'getAll']);
Route::get('/courses/{id}', [CourseAPIController::class, 'get']);
Route::post('/courses/add', [CourseAPIController::class, 'add']);
Route::put('/courses/update/{id}', [CourseAPIController::class, 'update']);
Route::delete('/courses/delete/{id}', [CourseAPIController::class, 'delete']);

Route::get('/departments/all', [DeptAPIController::class, 'getAll']);
Route::get('/departments/{id}', [DeptAPIController::class, 'get']);
Route::post('/departments/add', [DeptAPIController::class, 'add']);
Route::put('/departments/update/{id}', [DeptAPIController::class, 'update']);
Route::delete('/departments/delete/{id}', [DeptAPIController::class, 'delete']);

Route::post('/login', [StudentAPIController::class, 'login']);
