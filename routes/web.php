<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OnshiftController;
use App\http\Controllers\SalaryController;
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

// Data page
Route::get('/Data',[DataController::class,'index']);

//Payment
Route::get('/Payment',[PaymentController::class,'index']);

//Receipt Page
Route::get('/Receipt',[ReceiptController::class,'index']);

Route::get('cal_salary',[SalaryController::class,'cal_salary']);
Route::get('time_check',[SalaryController::class,'time_check']);
