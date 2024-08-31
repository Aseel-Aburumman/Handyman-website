<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\AdminController;

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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['web', 'share.notifications', 'share.messages'],
    // 'middleware' => ['auth', 'admin', 'share.notifications', 'share.messages'],  // Apply the 'auth', 'admin', and 'share.notifications' middleware

    // 'middleware' => ['auth', 'admin']  // Apply the 'admin' middleware
], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'navbar'])->name('admin.dashboard');
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/admin/manage_customers', [AdminController::class, 'showCustomers'])->name('admin.manage_customers');

    Route::get('/admin/notification', [AdminController::class, 'notification'])->name('admin.notification');

    // Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    // Add more admin routes here
});
