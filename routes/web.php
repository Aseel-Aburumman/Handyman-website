<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserControlCenter;
use App\Http\Controllers\GigController;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AuthAdminController;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;

use App\Http\Controllers\StoreOwnerController;
use App\Http\Controllers\HandymanController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\TaskController;


use App\Http\Controllers\MasterController;



// language routs
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        session(['locale' => $locale]); // Set locale in session
        Log::info('Locale stored in session: ' . $locale);
    } else {
        Log::info('Invalid locale: ' . $locale);
    }
    return redirect()->route('home'); // or another route that you know is safe
});



// Main structure routs


Route::get('/', [MasterController::class, 'index'])->name('home');
Route::get('/service', [MasterController::class, 'service'])->name('service');
Route::get('/about-us', [MasterController::class, 'aboutUs'])->name('aboutUs');
Route::get('/allhandymen', [MasterController::class, 'indexHandymen'])->name('handymen.index');
Route::get('/allhandymen/filter', [MasterController::class, 'indexHandymen'])->name('handymen.filterHandymen');

Route::get('/btasker', [MasterController::class, 'btasker'])->name('b.tasker');

Route::get('/bstoreowner', [MasterController::class, 'bstoreowner'])->name('b.storeowner');
Route::post('/become/storeowner', [MasterController::class, 'new_storeowner'])->name('storeowner.new');

Route::get('/contact', [MasterController::class, 'contact'])->name('contact');



Route::get('/search-services', [ServiceController::class, 'search'])->name('search.services');

Route::get('/step-one/{categoryId}/{serviceId}', [ServiceController::class, 'stepOne'])->name('step.one');

// Route::get('/gig/step1', [ServiceController::class, 'showStep1'])->name('gig.step1');
Route::post('/gig/step1', [ServiceController::class, 'storeStep1'])->name('gig.storeStep1');

Route::get('/gig/step2', [ServiceController::class, 'showStep2'])->name('gig.step2');
Route::post('/gig/step2', [ServiceController::class, 'storeStep2'])->name('gig.storeStep2');

Route::get('/gig/filter', [ServiceController::class, 'showStep2'])->name('gig.filterHandymen');


// Route::get('/gig/step3', [ServiceController::class, 'showStep3'])->name('gig.step3');
Route::get('/gig/step3', [ServiceController::class, 'showStep3'])->name('gig.step3B');
Route::post('/gig/step3/get-availability', [ServiceController::class, 'getAvailability'])->name('gig.getAvailability');

Route::post('/gig/step3', [ServiceController::class, 'storeStep3'])->name('gig.storeStep3');

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['auth'],  // Apply the 'auth'

], function () {

    Route::get('/gig/step4', [ServiceController::class, 'showStep4'])->name('gig.step4');
    Route::post('/gig/step4', [ServiceController::class, 'storeStep4'])->name('gig.storeStep4');

    Route::get('/notification', [MasterController::class, 'notification'])->name('user.notification');


    Route::get('/storeowner/dashboard', [StoreOwnerController::class, 'dashboard'])->name('storeowner.dashboard')->middleware('role:3');
    Route::post('/storeowner/dashboard', [StoreOwnerController::class, 'dashboard'])->name('storeowner.dashboard.update')->middleware('role:3');
    Route::post('/storeowner/products', [StoreOwnerController::class, 'storeProduct'])->name('storeowner.products.store')->middleware('role:3');
    Route::delete('/storeowner/products/{id}', [StoreOwnerController::class, 'destroyProduct'])->name('storeowner.products.destroy')->middleware('role:3');
    Route::get('/storeowner/products/{id}/edit', [StoreOwnerController::class, 'editProduct'])->name('storeowner.products.edit')->middleware('role:3');
    Route::post('/storeowner/products/{id}', [StoreOwnerController::class, 'updateProduct'])->name('storeowner.products.update')->middleware('role:3');
    Route::post('/storeowner/sale/{saleId}/update', [StoreOwnerController::class, 'updateSaleStatus'])->name('storeowner.sale.update')->middleware('role:3');

    Route::get('/storeowner/home', [StoreOwnerController::class, 'index'])->name('storeowner.Home')->middleware('role:3');

    Route::get('/customer/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard')->middleware('role:2');
    Route::post('/customer/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard.update')->middleware('role:2');

    Route::get('/customer/home', [CustomerController::class, 'index'])->name('customer.Home')->middleware('role:2');
    Route::get('/customer/mytask', [CustomerController::class, 'myTask'])->name('customer.myTask')->middleware('role:2');
    // Route::post('/profile/update', [CustomerController::class, 'updateProfile'])->name('profile.update')->middleware('role:2');

    Route::get('/handyman/dashboard', [HandymanController::class, 'dashboard'])->name('handyman.dashboard')->middleware('role:4');
    Route::post('/handyman/dashboard', [HandymanController::class, 'dashboard'])->name('handyman.dashboard.update')->middleware('role:4');

    Route::get('/handyman/home', [HandymanController::class, 'index'])->name('handyman.Home')->middleware('role:4');
    Route::patch('/handyman/{gigId}/accept', [HandymanController::class, 'accept'])->name('handyman.accept')->middleware('role:4');
    Route::get('/gigs/open/{gigId}', [HandymanController::class, 'showOpenGig'])->name('handyman.opengig');
    Route::post('/gigs/{gigId}/proposal', [HandymanController::class, 'submitProposal'])->name('handyman.submitProposal');
    Route::post('/proposal/{proposalId}/update', [HandymanController::class, 'updateProposal'])->name('handyman.updateProposal');

    Route::get('/mygig/{gigId}', [HandymanController::class, 'showAssignedGig'])->name('handyman.assigned.task');
    Route::post('/handyman/add-skill', [HandymanController::class, 'addSkill'])->name('handyman.addSkill');
    Route::get('/allgigs', [MasterController::class, 'allgigs'])->name('handyman.allgigs');
    Route::get('/allgigs/filter', [MasterController::class, 'allgigs'])->name('handymen.filtergigs');



    Route::get('/cart', [ShopsController::class, 'getCart'])->name('cart');
    Route::post('/cart/update', [ShopsController::class, 'updateCart'])->name('cart.update');
    Route::post('/cart/remove', [ShopsController::class, 'removeFromCart'])->name('cart.remove');
    Route::get('/cart/checkout', [ShopsController::class, 'checkout'])->name('checkout');
    Route::post('/save-deliveryinfo', [ShopsController::class, 'saveDeliveryInfo'])->name('save.deliveryinfo');
    Route::post('/place-order', [ShopsController::class, 'placeOrder'])->name('place.order');


    Route::get('/task/{gigId}', [TaskController::class, 'getOne'])->name('Onegig');
    Route::post('/handyman/report/store', [TaskController::class, 'store'])->name('report.store');
    Route::patch('/proposal/{proposalId}/reject', [TaskController::class, 'reject'])->name('proposal.reject')->middleware('role:2');
    Route::patch('/proposal/{proposalId}/unreject', [TaskController::class, 'unreject'])->name('proposal.unreject')->middleware('role:2');
    Route::patch('/proposal/{proposalId}/award', [TaskController::class, 'award'])->name('proposal.award')->middleware('role:2');

    Route::get('/assigned-task/{gigId}', [TaskController::class, 'showAssignedGig'])->name('assigned.task');
    Route::post('/gig/{gigId}/update-status/{status}', [TaskController::class, 'updateGigStatus'])->name('gig.updateStatus');
    Route::post('/gig/{gigId}/payment', [TaskController::class, 'processPayment'])->name('payment.process');
    Route::post('/gig/{paymentId}/payment/cancel', [TaskController::class, 'cancelPayment'])->name('gig.update.repot.paymet');
    // Route::post('/gig-payment', [TaskController::class, 'processPayment'])->name('place.order');
    Route::post('/payment/create', [TaskController::class, 'createPayment'])->name('payment.create');


    Route::post('/report/store', [TaskController::class, 'storeReportGig'])->name('report.gig.store')->middleware('role:2');
    Route::post('/gig/reviews', [TaskController::class, 'storeReview'])->name('reviews.clienttohandyman');
    Route::post('/gig/reviews-cliient', [TaskController::class, 'storeReviewHandyman'])->name('reviews.handymantoclient');



    Route::get('/chat/{receiverId}', [ChatController::class, 'index'])->name('chat');
    Route::post('/chat/send', [ChatController::class, 'sendMessage'])->name('chat.send');
    Route::get('/chat/fetch/{receiverId}', [ChatController::class, 'fetchMessages'])->name('chat.fetch');
});

Route::get('/allshops', [ShopsController::class, 'index'])->name('shops.index');
Route::get('/allproducts', [ShopsController::class, 'indexProducts'])->name('products.index');


Route::get('/shops/{shopId}', [ShopsController::class, 'getOne'])->name('Oneshops');
Route::get('/product/{productId}', [ShopsController::class, 'getOneProduct'])->name('product');
Route::post('/reviews', [ShopsController::class, 'storeReview'])->name('reviews.product');
Route::post('/cart/add', [ShopsController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/addsmaller', [ShopsController::class, 'addToCartSmaller'])->name('cart.addsmaller');
Route::post('/cart/clear', [ShopsController::class, 'clearCart'])->name('cart.clear');

Route::post('/cart/reset-and-add', [ShopsController::class, 'resetCartAndAdd'])->name('cart.resetAndAdd');

Route::get('/handyman/{handymanId}', [HandymanController::class, 'getOne_Client'])->name('Onehandyman_clientVeiw');




Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');





Route::get('/admin_portal', [AdminController::class, 'main'])->name('admin.main');
Route::get('/admin_portal/login', [AuthAdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthAdminController::class, 'login'])->name('Admin_login');


Route::get('/admin_portal//register', [AuthAdminController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/register', [AuthAdminController::class, 'register'])->name('Admin_register');


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['authAdmin', 'admin', 'share.notifications', 'share.messages', 'share.admindata'],  // Apply the 'auth', 'admin', and 'share.notifications' middleware

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




    Route::get('/admin/notification', [AdminController::class, 'notification'])->name('admin.notification');
});
