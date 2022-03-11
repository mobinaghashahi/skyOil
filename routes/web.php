<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\admin;
use App\Http\Controllers\sendSMS;

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

Route::get('/checkSendSMS',[sendSMS::class,'dailyCheck']);

Route::get('/',[loginController::class,'showIndex']);

Route::get('/logout',[loginController::class,'logout']);
Route::get('/login',[loginController::class, 'viewLoginForm'])->middleware(['guest']);;
Route::post('/login',[loginController::class, 'login']);

Route::get('/dashboard',[Dashboard::class,'viewDashboard'])->middleware('auth');

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/addCustomer',[admin::class,'showAddCostumerForm']);
    Route::post('/addCustomer',[admin::class,'addCostumer']);
    Route::get('/editPanelCustomer',[admin::class,'editPanelCustomer']);
    Route::get('/editCustomer/{id}',[admin::class,'showEditCustomer']);
    Route::post('/editCustomer/{id}',[admin::class,'editCustomer']);
    Route::delete('/deleteCustomer/{id}',[admin::class,'deleteCustomer']);
    Route::get('/reportCustomers',[admin::class,'reportCustomers']);
    Route::get('/oilChange',[admin::class,'oilChangeView']);
    Route::post('/oilChangeUpdate',[admin::class,'oilChangeUpdate']);
});
