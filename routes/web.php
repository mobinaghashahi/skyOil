<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\admin;

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
Route::get('/',[loginController::class,'test']);

Route::get('/logout',[loginController::class,'logout']);
Route::get('/login',[loginController::class, 'viewLoginForm'])->middleware(['guest']);;
Route::post('/login',[loginController::class, 'login']);

Route::get('/dashboard',[Dashboard::class,'viewDashboard'])->middleware('auth');

Route::prefix('/admin')->group(function () {
    Route::get('/addCustomer',[admin::class,'showAddCostumerForm']);
    Route::post('/addCustomer',[admin::class,'addCostumer']);
});
