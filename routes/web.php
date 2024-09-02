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
    Route::get('/admin/edit_customer/{id}', [AdminController::class, 'editCustomer'])->name('admin.edit_customer');
    Route::put('/admin/update_customer/{id}', [AdminController::class, 'updateCustomer'])->name('admin.update_customer');
    Route::delete('/admin/delete_customer/{id}', [AdminController::class, 'deleteCustomer'])->name('admin.delete_customer');
    Route::get('/admin/view_customer/{id}', [AdminController::class, 'viewCustomer'])->name('admin.view_customer');
    Route::get('/admin/create_customer', [AdminController::class, 'createCustomer'])->name('admin.create_customer');
    Route::post('/admin/store_customer', [AdminController::class, 'storeCustomer'])->name('admin.store_customer');

    Route::get('/admin/manage_handymans', [AdminController::class, 'showHandymans'])->name('admin.manage_handymans');
    Route::get('/admin/edit_handyman/{id}', [AdminController::class, 'editHandyman'])->name('admin.edit_handyman');
    Route::put('/admin/update_handyman/{id}', [AdminController::class, 'updateHandyman'])->name('admin.update_handyman');
    Route::delete('/admin/delete_handyman/{id}', [AdminController::class, 'deleteHandyman'])->name('admin.delete_handyman');
    Route::get('/admin/view_handyman/{id}', [AdminController::class, 'viewHandyman'])->name('admin.view_handyman');
    Route::get('/admin/create_handyman', [AdminController::class, 'createHandyman'])->name('admin.create_handyman');
    Route::post('/admin/store_handyman', [AdminController::class, 'storeHandyman'])->name('admin.store_handyman');

    // Route::get('/admin/customer/{id}/edit', [AdminController::class, 'editCustomer'])->name('customer.edit');
    // Route::put('/admin/customer/{id}', [AdminController::class, 'updateCustomer'])->name('customer.update');


    Route::get('/admin/notification', [AdminController::class, 'notification'])->name('admin.notification');

    // Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    // Add more admin routes here
});