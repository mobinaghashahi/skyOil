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
Route::get('/login',[loginController::class, 'viewLoginForm'])->middleware(['guest'])->name('login');;
Route::post('/login',[loginController::class, 'login']);

Route::get('/dashboard',[Dashboard::class,'viewDashboard'])->middleware('auth');

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/addCustomer',[admin::class,'showAddCostumerForm']);
    Route::post('/addCustomer',[admin::class,'addCostumer']);
    Route::post('/editPanelCustomer',[admin::class,'editPanelCustomer']);
    Route::get('/customerEditSearch',[admin::class,'customerEditSearch']);
    Route::get('/editCustomer/{id}',[admin::class,'showEditCustomer']);
    Route::post('/editCustomer/{id}',[admin::class,'editCustomer']);
    Route::delete('/deleteCustomer/{id}',[admin::class,'deleteCustomer']);
    Route::get('/reportCustomers',[admin::class,'reportCustomers']);

    Route::get('/customerOilChangeSearch',[admin::class,'customerOilChangeSearch']);
    Route::post('/oilPanelSearch',[admin::class,'oilPanelSearch']);
    Route::post('/oilChange/{id}',[admin::class,'oilChange']);
    Route::post('/oilChangeUpdate/{id}',[admin::class,'oilChangeUpdate']);

    Route::get('/reward',[admin::class,'rewardView']);
    Route::post('/reward',[admin::class,'addReward']);
    Route::post('/reportPanelCustomer',[admin::class,'reportPanelCustomer']);
    Route::post('/reportCustomer/{id}',[admin::class,'reportCustomer']);
    Route::get('/customerReportSearch',[admin::class,'customerReportSearch']);
});
