<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserControlCenter;
use App\Http\Controllers\GigController;


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

use App\Http\Controllers\Admin\AdminCategoryController;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['web', 'share.notifications', 'share.messages'],
    // 'middleware' => ['auth', 'admin', 'share.notifications', 'share.messages'],  // Apply the 'auth', 'admin', and 'share.notifications' middleware

    // 'middleware' => ['auth', 'admin']  // Apply the 'admin' middleware
], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/admin/manage_customers', [UserControlCenter::class, 'showCustomers'])->name('admin.manage_customers');
    Route::get('/admin/edit_customer/{id}', [UserControlCenter::class, 'editCustomer'])->name('admin.edit_customer');
    Route::put('/admin/update_customer/{id}', [UserControlCenter::class, 'updateCustomer'])->name('admin.update_customer');
    Route::delete('/admin/delete_customer/{id}', [UserControlCenter::class, 'deleteCustomer'])->name('admin.delete_customer');
    Route::get('/admin/view_customer/{id}', [UserControlCenter::class, 'viewCustomer'])->name('admin.view_customer');
    Route::get('/admin/create_customer', [UserControlCenter::class, 'createCustomer'])->name('admin.create_customer');
    Route::post('/admin/store_customer', [UserControlCenter::class, 'storeCustomer'])->name('admin.store_customer');

    Route::get('/admin/manage_handymans', [UserControlCenter::class, 'showHandymans'])->name('admin.manage_handymans');
    Route::get('/admin/edit_handyman/{id}', [UserControlCenter::class, 'editHandyman'])->name('admin.edit_handyman');
    Route::put('/admin/update_handyman/{id}', [UserControlCenter::class, 'updateHandyman'])->name('admin.update_handyman');
    Route::delete('/admin/delete_handyman/{id}', [UserControlCenter::class, 'deleteHandyman'])->name('admin.delete_handyman');
    Route::get('/admin/view_handyman/{id}', [UserControlCenter::class, 'viewHandyman'])->name('admin.view_handyman');
    Route::get('/admin/create_handyman', [UserControlCenter::class, 'createHandyman'])->name('admin.create_handyman');
    Route::post('/admin/store_handyman', [UserControlCenter::class, 'storeHandyman'])->name('admin.store_handyman');

    Route::get('/admin/manage_store_owners', [UserControlCenter::class, 'showStoreOwners'])->name('admin.manage_store_owners');
    Route::get('/admin/edit_store_owner/{id}', [UserControlCenter::class, 'editStoreOwner'])->name('admin.edit_store_owner');
    Route::put('/admin/update_store_owner/{id}', [UserControlCenter::class, 'updateStoreOwner'])->name('admin.update_store_owner');
    Route::delete('/admin/delete_store_owner/{id}', [UserControlCenter::class, 'deleteStoreOwner'])->name('admin.delete_store_owner');
    Route::get('/admin/view_store_owner/{id}', [UserControlCenter::class, 'viewStoreOwner'])->name('admin.view_store_owner');
    Route::get('/admin/create_store_owner', [UserControlCenter::class, 'createStoreOwner'])->name('admin.create_store_owner');
    Route::post('/admin/store_store_owner', [UserControlCenter::class, 'storeStoreOwner'])->name('admin.store_store_owner');

    Route::get('/admin/manage_tickets', [AdminController::class, 'manageTickets'])->name('admin.manage_tickets');
    Route::put('/admin/update_ticket_status/{id}', [AdminController::class, 'updateTicketStatus'])->name('admin.update_ticket_status');
    Route::get('/admin/view_ticket/{id}', [AdminController::class, 'viewTicket'])->name('admin.view_ticket');
    Route::get('/admin/message_user/{user_id}/{ticketId}', [AdminController::class, 'messageUser'])->name('admin.message_user');

    Route::post('/admin/send_message/{user_id}', [AdminController::class, 'sendMessage'])->name('admin.send_message');

    Route::get('/manage-gigs', [AdminController::class, 'manageGigs'])->name('admin.manage_gigs');
    Route::put('/update-gig-status/{id}', [AdminController::class, 'updateGigStatus'])->name('admin.update_gig_status');

    Route::get('/gigs-overview', [GigController::class, 'gigsOverview'])->name('admin.gigs_overview');
    Route::get('/all-gigs', [GigController::class, 'allGigs'])->name('admin.all_gigs');
    Route::get('/reported-gigs', [GigController::class, 'reportedGigs'])->name('admin.reported_gigs');
    Route::get('/gig-categories', [GigController::class, 'gigCategories'])->name('admin.gig_categories');
    Route::get('/handyman-performance', [GigController::class, 'handymanPerformance'])->name('admin.handyman_performance');
    Route::get('/gig-policy', [GigController::class, 'gigPolicy'])->name('admin.gig_policy');
    Route::get('/communication-center', [GigController::class, 'communicationCenter'])->name('admin.communication_center');

    Route::get('gigs', [GigController::class, 'index'])->name('manage_gigs');
    Route::get('gig/{id}', [GigController::class, 'view'])->name('admin.view_gig');
    Route::get('gig/{id}/edit', [GigController::class, 'edit'])->name('admin.edit_gig');
    Route::put('gig/{id}', [GigController::class, 'update'])->name('admin.update_gig');
    Route::delete('gig/{id}', [GigController::class, 'destroy'])->name('admin.delete_gig');

    Route::post('gig/{id}/resolve', [GigController::class, 'resolveGig'])->name('admin.resolve_gig');
    Route::post('gig/{id}/cancel', [GigController::class, 'cancelGig'])->name('admin.cancel_gig');

    
    Route::get('category/{id}/edit', [AdminController::class, 'editCategory'])->name('admin.edit_category');
    Route::put('category/{id}', [AdminController::class, 'updateCategory'])->name('admin.update_category');
    Route::delete('category/{id}', [AdminController::class, 'destroyCategory'])->name('admin.delete_category');

    // Route::get('/admin/customer/{id}/edit', [AdminController::class, 'editCustomer'])->name('customer.edit');
    // Route::put('/admin/customer/{id}', [AdminController::class, 'updateCustomer'])->name('customer.update');


    Route::get('/admin/notification', [AdminController::class, 'notification'])->name('admin.notification');

    // Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    // Add more admin routes here
});
