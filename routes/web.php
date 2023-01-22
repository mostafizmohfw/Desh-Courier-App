<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\BackEndController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\ShipmentController;

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

Route::get('/', [HomeController::class, 'index'])->name('front.index');
Route::get('/login', [BackEndController::class, 'login'])->name('admin.login');
Route::get('/dashboard', [BackEndController::class, 'index'])->name('admin.dashboard');
Route::get('/dashboard/settings', [BackEndController::class, 'index'])->name('settings');
Route::get('/logout', [BackEndController::class, 'index'])->name('logout');
Route::get('/dashboard/location', [BackEndController::class, 'location'])->name('location');
Route::get('/dashboard/shipment', [ShipmentController::class, 'index'])->name('shipment');
Route::get('/dashboard/employee', [EmployeeController::class, 'index'])->name('employee');
Route::get('/dashboard/vehicles', [EmployeeController::class, 'vehicles'])->name('vehicles');
Route::get('/dashboard/payment', [PaymentController::class, 'index'])->name('payment');

Route::get('/dashboard/profile', [BackEndController::class, 'profile'])->name('profile');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
