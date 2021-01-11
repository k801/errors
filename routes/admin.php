<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;

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

// Route::get('/', function () {
//     return view('admin.dashboard');
// });


    Route::get('admin/getLogin',[LoginController::class,'adminLogin']);
    Route::post('admin/checkLogin',[LoginController::class,'checkLogin']);


    Route::get('admin/dashboard',[LoginController::class,'getDashboard']);






