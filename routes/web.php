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

Route::get('/',[loginController::class,'showIndex'])->name('home');

Route::get('/logout',[loginController::class,'logout'])->name('logOut');
Route::get('/login',[loginController::class, 'viewLoginForm'])->middleware(['guest'])->name('login');;
Route::post('/login',[loginController::class, 'login']);

Route::get('/dashboard',[Dashboard::class,'viewDashboard'])->middleware('auth')->name('dashboard');

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/addCustomer',[admin::class,'showAddCostumerForm'])->name('showAddCustomerForm');
    Route::post('/addCustomer',[admin::class,'addCostumer'])->name('addCustomer');
    Route::post('/editPanelCustomer',[admin::class,'editPanelCustomer'])->name('editPanelCustomer');
    Route::get('/customerEditSearch',[admin::class,'customerEditSearch'])->name('customerEditSearch');;
    Route::get('/editCustomer/{id}',[admin::class,'showEditCustomer']);
    Route::post('/editCustomer/{id}',[admin::class,'editCustomer']);
    Route::delete('/deleteCustomer/{id}',[admin::class,'deleteCustomer']);
    Route::get('/reportCustomers',[admin::class,'reportCustomers']);

    Route::get('/customerOilChangeSearch',[admin::class,'customerOilChangeSearch']);
    Route::post('/oilPanelSearch',[admin::class,'oilPanelSearch']);
    Route::post('/oilChange/{id}',[admin::class,'oilChange']);
    Route::post('/oilChangeUpdate/{id}',[admin::class,'oilChangeUpdate']);

    Route::get('/reward',[admin::class,'rewardView']);
    Route::get('/customerRewardSearch',[admin::class,'customerRewardSearch']);
    Route::post('/rewardPanelCustomer',[admin::class,'rewardPanelCustomer']);
    Route::post('/reward/{id}',[admin::class,'reward']);
    Route::post('/addReward',[admin::class,'addReward']);

    Route::post('/reportPanelCustomer',[admin::class,'reportPanelCustomer']);
    Route::post('/reportCustomer/{id}',[admin::class,'reportCustomer']);
    Route::get('/customerReportSearch',[admin::class,'customerReportSearch']);
});
