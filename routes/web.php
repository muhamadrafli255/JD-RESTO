<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\WaiterController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;

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
    return view('home');
});

Route::get('/home',[DashboardController::class,'index']);
Route::get('/cashier',[CashierController::class,'index']);
Route::get('/chef',[ChefController::class,'index']);
Route::get('/waiter',[WaiterController::class,'index']);
Route::get('/categories',[CategoryController::class,'index']);
Route::get('/menu',[MenuController::class,'index']);
Route::get('/tables',[TableController::class,'index']);
Route::get('/transaction',[TransactionController::class,'index']);
Route::get('/report',[ReportController::class,'index']);
Route::get('/myaccount',[ProfileController::class,'index']);