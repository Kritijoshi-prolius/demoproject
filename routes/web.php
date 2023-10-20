<?php
use Illuminate\support\facades\Route;

use App\Employee; 
 
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\EmployeeController;
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
Route::get ('/',function(){
    return view('index');
});


Route::get('/register',[RegistrationController::class,'index']);
Route::post('/register',[RegistrationController::class,'register']);

Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
Route::get('/employee/add', [EmployeeController::class, 'create'])->name('employee.create');
Route::get('/employee/delete/{id}',[EmployeeController::class,'delete'])->name('employee.delete');




Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('employee.edit');
Route::post('/employee/update/{id}',[EmployeeController::class,'update'])->name('employee.update');
Route::get('/employee',[EmployeeController::class,'view']);
Route::post('/employee',[EmployeeController::class,'store']);
Route::get('/employee/search',[EmployeeController::class,'search'])->name('employee.search');;

Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/upload', [EmployeeController::class, 'showUploadForm'])->name('upload.form');
Route::post('/upload', [EmployeeController::class, 'upload'])->name('upload.process');