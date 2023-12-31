<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OnshiftController;
use App\http\Controllers\SalaryController;
use App\Http\Controllers\Setdata\SetdataController;
use App\Http\Controllers\Setdata\CompanyController;
use App\Http\Controllers\Setdata\EmployeeController;
use App\Http\Controllers\Setdata\PeriodController;

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


Route::get('/login',[AuthController::class,'login']);
Route::post('/login_func',[AuthController::class,'admin_login']);
Route::get('/logout',[AuthController::class, 'logout']);
// admin page
route::group(['middleware'=>['checklogin']], function(){
    Route::get('/',[AdminController::class,'index']);
    Route::get('/admin',[AdminController::class,'index']);
    Route::post('/admin/create_user',[AdminController::class,'create_admin']);
    Route::post('/admin/update_user',[AdminController::class,'update_admin']);
    Route::get('/admin/delete_user/{id}',[AdminController::class, 'delete_admin']);

    Route::get('/Working_time',);
});


//Setdata page
Route::get('/Setdata',[SetdataController::class,'index']);
    //Company
    Route::get('/Company',[CompanyController::class,'index']);
    Route::post('/Company/create',[CompanyController::class,'create']);
    Route::post('/Company/update',[CompanyController::class,'update']);
    Route::get('/Company/delete/{id}',[CompanyController::class, 'delete']);

    //Employee
    Route::get('/Employee',[EmployeeController::class,'index']);
    Route::post('/Employee/create',[EmployeeController::class,'create']);
    Route::post('/Employee/update',[EmployeeController::class,'update']);
    Route::get('/Employee/delete/{id}',[EmployeeController::class, 'delete']);

    //Period
    Route::get('/Period',[PeriodController::class,'index']);
    Route::post('/Period/create',[PeriodController::class,'create']);
    Route::post('/Period/update',[PeriodController::class,'update']);
    Route::get('/Period/delete/{id}',[PeriodController::class, 'delete']);

//Setdata page

// Data page
Route::get('/Data',[DataController::class,'index']);
Route::post('/Data/create',[DataController::class,'create']);
Route::post('/Data/update',[DataController::class,'update']);
Route::get('/Data/delete/{id}',[DataController::class, 'delete']);

//Payment
Route::get('/Payment',[PaymentController::class,'index']);

//Receipt Page
Route::get('/Receipt',[ReceiptController::class,'index']);

Route::get('cal_salary',[SalaryController::class,'cal_salary']);
Route::get('time_check',[SalaryController::class,'time_check']);

Route::get('/salary',[SalaryController::class,'salary']);
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
  });
