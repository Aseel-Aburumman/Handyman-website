<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserControlCenter;
use App\Http\Controllers\GigController;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\AuthAdminController;



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

Route::get('/admin_portal', [AdminController::class, 'main'])->name('admin.main');
Route::get('/admin_portal/login', [AuthAdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/login', [AuthAdminController::class, 'login'])->name('Admin_login');


Route::get('/admin_portal//register', [AuthAdminController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/register', [AuthAdminController::class, 'register'])->name('Admin_register');


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    // 'middleware' => ['web','auth', 'admin', 'share.notifications', 'share.messages', 'share.admindata'],
    'middleware' => ['authAdmin', 'admin', 'share.notifications', 'share.messages', 'share.admindata'],  // Apply the 'auth', 'admin', and 'share.notifications' middleware

    // 'middleware' => ['auth', 'admin']  // Apply the 'admin' middleware
], function () {


    Route::post('/admin/logout', [AuthAdminController::class, 'logout'])->name('admin.logout');

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
    // Gig Policy Routes
    Route::get('/admin/gig-policies', [GigController::class, 'indexPolicy'])->name('gig-policies.index');
    Route::get('/admin/gig-policies/create', [GigController::class, 'createPolicy'])->name('gig-policies.create');
    Route::post('/admin/gig-policies', [GigController::class, 'storePolicy'])->name('gig-policies.store');
    Route::get('/admin/gig-policies/{id}/edit', [GigController::class, 'editPolicy'])->name('gig-policies.edit');
    Route::put('/admin/gig-policies/{id}', [GigController::class, 'updatePolicy'])->name('gig-policies.update');
    Route::delete('/admin/gig-policies/{id}', [GigController::class, 'destroyPolicy'])->name('gig-policies.destroy');
    Route::post('/admin/gig-policies/search', [GigController::class, 'searchPolicy'])->name('gig-policies.search');

    // Communication center route
    Route::get('/admin/communication-center', [CommunicationController::class, 'communicationCenter'])->name('admin.communication_center');

    // Route to get the conversation between sender and receiver
    Route::get('/admin/conversation/{senderId}/{receiverId}', [CommunicationController::class, 'getConversation']);



    Route::get('gigs', [GigController::class, 'index'])->name('manage_gigs');
    Route::get('gig/{id}', [GigController::class, 'view'])->name('admin.view_gig');
    Route::get('gig/{id}/edit', [GigController::class, 'edit'])->name('admin.edit_gig');
    Route::put('gig/{id}', [GigController::class, 'update'])->name('admin.update_gig');
    Route::delete('gig/{id}', [GigController::class, 'destroy'])->name('admin.delete_gig');

    Route::post('/admin/gigs/resolve/{id}', [GigController::class, 'resolveGig'])->name('admin.resolve_gig');

    // Route::post('gig/{id}/resolve', [GigController::class, 'resolveGig'])->name('admin.resolve_gig');
    Route::post('gig/{id}/cancel', [GigController::class, 'cancelGig'])->name('admin.cancel_gig');
    Route::post('reported-gigs/resolve/{id}', [GigController::class, 'resolve'])->name('admin.resolve');


    Route::get('category/{id}/edit', [AdminController::class, 'editCategory'])->name('admin.edit_category');
    Route::put('category/{id}', [AdminController::class, 'updateCategory'])->name('admin.update_category');
    Route::delete('category/{id}', [AdminController::class, 'destroyCategory'])->name('admin.delete_category');


    Route::post('handyman/{id}/suspend', [UserControlCenter::class, 'suspendHandyman'])->name('admin.suspend_handyman');
    Route::post('handyman/{id}/unsuspend', [UserControlCenter::class, 'unsuspendHandyman'])->name('admin.unsuspend_handyman');



    Route::get('store_control_center', [StoresController::class, 'dashboard'])->name('store_control_center.dashboard');
    Route::get('store_control_center/all-stores', [StoresController::class, 'allStores'])->name('store_control_center.all_stores');
    Route::get('all-stores/{id}', [StoresController::class, 'viewStore'])->name('store_control_center.view_store');
    Route::get('all-stores/{id}/edit', [StoresController::class, 'edit'])->name('store_control_center.edit_store');
    Route::put('all-stores/{id}', [StoresController::class, 'update'])->name('store_control_center.update_store');
    Route::delete('all-stores/{id}', [StoresController::class, 'destroy'])->name('store_control_center.delete_store');
    Route::post('store/suspend/{id}', [StoresController::class, 'suspendStore'])->name('store_control_center.suspend_store');
    Route::post('store/unsuspend/{id}', [StoresController::class, 'unsuspendStore'])->name('store_control_center.unsuspend_store');
    Route::get('/reported-stores', [StoresController::class, 'reportedStores'])->name('store_control_center.reported_stores');
    Route::post('/admin/store_control_center/resolve/{id}', [StoresController::class, 'resolveStore'])->name('admin.resolve_store');
    Route::delete('admin/store/{storeId}/clearReport', [StoresController::class, 'clearReportStore'])->name('store_control_center.clearReportStore');


    Route::get('profile', [AdminController::class, 'showProfile'])->name('admin.profile');
    Route::post('profile/update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');


    // Route::get('/admin/customer/{id}/edit', [AdminController::class, 'editCustomer'])->name('customer.edit');
    // Route::put('/admin/customer/{id}', [AdminController::class, 'updateCustomer'])->name('customer.update');


    Route::get('/admin/notification', [AdminController::class, 'notification'])->name('admin.notification');

    // Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    // Add more admin routes here
});
