<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BillingPageController;
use App\Http\Controllers\ClockController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/tables/projects', [TablesController::class, 'projects'])->name('dashboard.tables.projects');
Route::get('/dashboard/tables/orders', [TablesController::class, 'orders'])->name('dashboard.tables.orders');
Route::get('/billing', [BillingPageController::class, 'showBillingPage'])->name('billing.page');
Route::get('/clock', [ClockController::class, 'showClockPage'])->name('clock.page');
Route::post('/clock-in', [ClockController::class, 'clockIn'])->name('clock.in');
Route::post('/clock-out', [ClockController::class, 'clockOut'])->name('clock.out');
