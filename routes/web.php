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

Route::group(['prefix' => 'student'],function(){    
    Route::get('/',[StudentController::class , 'index']);
    Route::get('/insert',[StudentController::class , 'insert']);
    Route::post('/store',[StudentController::class , 'store']);
    Route::get('/delete/{id}',[StudentController::class , 'delete']);
    Route::get('/edit/{id}',[StudentController::class , 'edit']);
    Route::post('/update/{id}',[StudentController::class , 'update']);
    Route::get('/view/{id}',[StudentController::class , 'view']);
    Route::get('/trash',[StudentController::class , 'trash']);
    Route::get('/deleteper/{id}',[StudentController::class , 'deleteper']);
    Route::get('/restore/{id}',[StudentController::class , 'restore']);
});

Route::group(['prefix' => 'department'],function(){
    Route::get('/',[DepartmentController::class , 'index']);
    Route::get('/insert',[DepartmentController::class , 'insert']);
    Route::post('/store',[DepartmentController::class , 'store']);
    Route::get('/edit/{id}',[DepartmentController::class , 'edit']);
    Route::post('/update/{id}',[DepartmentController::class , 'update']);
    Route::get('/delete/{id}',[DepartmentController::class , 'delete']);
});

Route::get('/employee',[EmployeeController::class , 'index']);
Route::get('/employee/insert',[EmployeeController::class , 'insert']);
Route::post('/employee/store',[EmployeeController::class , 'store']);
Route::get('/employee/edit/{id}',[EmployeeController::class , 'edit']);
Route::post('/employee/update/{id}',[EmployeeController::class , 'update']);
Route::get('/employee/delete/{id}',[EmployeeController::class , 'delete']);