<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/student',[StudentController::class , 'index']);
Route::get('/student/insert',[StudentController::class , 'insert']);
Route::post('/student/store',[StudentController::class , 'store']);
Route::get('/student/delete/{id}',[StudentController::class , 'delete']);
Route::get('/student/edit/{id}',[StudentController::class , 'edit']);
Route::post('/student/update/{id}',[StudentController::class , 'update']);
Route::get('/student/view/{id}',[StudentController::class , 'view']);


Route::get('/department',[DepartmentController::class , 'index']);
Route::get('/department/insert',[DepartmentController::class , 'insert']);
Route::post('/department/store',[DepartmentController::class , 'store']);
Route::get('/department/edit/{id}',[DepartmentController::class , 'edit']);
Route::post('/department/update/{id}',[DepartmentController::class , 'update']);
Route::get('/department/delete/{id}',[DepartmentController::class , 'delete']);

Route::get('/employee',[EmployeeController::class , 'index']);
Route::get('/employee/insert',[EmployeeController::class , 'insert']);