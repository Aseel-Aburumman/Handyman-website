<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DI2NYA8xL9xBnYwa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'aboutUs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/allhandymen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'handymen.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/allhandymen/filter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'handymen.filterHandymen',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'terms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/btasker' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'b.tasker',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/handyman/agreement/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'handyman.agreement.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/handyman/apply' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'handyman.apply',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'handyman.apply.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bstoreowner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'b.storeowner',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/storeowner/agreement/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeowner.agreement.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/storeowner/apply' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeowner.apply',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'storeowner.apply.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact/store-ticket' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact.storeTicket',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search-services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search.services',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gig/step1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gig.storeStep1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gig/step2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gig.step2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gig.storeStep2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gig/filter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gig.filterHandymen',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gig/step3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gig.step3B',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gig.storeStep3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gig/step3/get-availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gig.getAvailability',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gig/step4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gig.step4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gig.storeStep4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notification',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/storeowner/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeowner.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'storeowner.dashboard.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/storeowner/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeowner.products.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/storeowner/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeowner.Home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer.dashboard.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.Home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/mytask' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.myTask',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/handyman/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'handyman.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'handyman.dashboard.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/handyman/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'handyman.Home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/handyman/add-skill' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'handyman.addSkill',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/allgigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'handyman.allgigs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/allgigs/filter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'handymen.filtergigs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'checkout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-deliveryinfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'save.deliveryinfo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/place-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'place.order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/handyman/report/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.gig.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gig/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reviews.clienttohandyman',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gig/reviews-cliient' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reviews.handymantoclient',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/allshops' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shops.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/allproducts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reviews.product',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/addsmaller' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.addsmaller',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.clear',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/reset-and-add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.resetAndAdd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SFzeQ9Pak32BXf2X',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/signup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'registerUser',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_portal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.main',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_portal/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admin_login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin_portal/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Admin_register',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/agreements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.agreements.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/agreements/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.agreements.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/agreements/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.agreements.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/applications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.applications.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage_customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage_customers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create_customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.create_customer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store_customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store_customer',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage_handymans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage_handymans',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create_handyman' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.create_handyman',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store_handyman' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store_handyman',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage_store_owners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage_store_owners',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/create_store_owner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.create_store_owner',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/store_store_owner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.store_store_owner',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage_tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage_tickets',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chat/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'chat.sendadmin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manage-gigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.manage_gigs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gigs-overview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gigs_overview',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/all-gigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.all_gigs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reported-gigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reported_gigs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gig-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.gig_categories',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/handyman-performance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.handyman_performance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gig-policies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gig-policies.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gig-policies.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/gig-policies/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gig-policies.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/communication-center' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.communication_center',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'manage_gigs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store_control_center' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_control_center.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store_control_center/all-stores' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_control_center.all_stores',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reported-stores' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_control_center.reported_stores',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notification',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/lang/([^/]++)(*:21)|/s(?|t(?|ep\\-one/([^/]++)/([^/]++)(*:62)|ore(?|owner/(?|products/([^/]++)(?|(*:104)|/edit(*:117)|(*:125))|sale/([^/]++)/update(*:154))|/(?|suspend/([^/]++)(*:183)|unsuspend/([^/]++)(*:209))))|hops/([^/]++)(*:233))|/handyman/([^/]++)(?|/(?|accept(*:273)|suspend(*:288)|unsuspend(*:305))|(*:314))|/gig(?|s/(?|open/([^/]++)(*:348)|([^/]++)/proposal(*:373))|/([^/]++)(?|/(?|update\\-status/([^/]++)(*:421)|payment(?|(*:439)|/cancel(*:454))|edit(*:467)|cancel(*:481))|(*:490)))|/pro(?|posal/([^/]++)/(?|u(?|pdate(*:534)|nreject(*:549))|reject(*:564)|award(*:577))|duct/([^/]++)(*:599))|/mygig/([^/]++)(*:623)|/task/([^/]++)(*:645)|/a(?|ssigned\\-task/([^/]++)(*:680)|dmin/(?|agreements/(?|edit/([^/]++)(*:723)|update/([^/]++)(*:746)|delete/([^/]++)(*:769))|edit_(?|customer/([^/]++)(*:803)|handyman/([^/]++)(*:828)|store_owner/([^/]++)(*:856))|update_(?|customer/([^/]++)(*:892)|handyman/([^/]++)(*:917)|store_owner/([^/]++)(*:945)|ticket_status/([^/]++)(*:975))|delete_(?|customer/([^/]++)(*:1011)|handyman/([^/]++)(*:1037)|store_owner/([^/]++)(*:1066))|view_(?|customer/([^/]++)(*:1101)|handyman/([^/]++)(*:1127)|store_owner/([^/]++)(*:1156)|ticket/([^/]++)(*:1180))|c(?|hat/(?|([^/]++)/([^/]++)(*:1218)|fetch/([^/]++)(*:1241))|onversation/([^/]++)/([^/]++)(*:1280))|gig(?|\\-policies/(?|([^/]++)(?|/edit(*:1326)|(*:1335))|search(*:1351))|s/resolve/([^/]++)(*:1379))|store(?|_control_center/resolve/([^/]++)(*:1429)|/([^/]++)/clearReport(*:1459)))|pplications/(?|handyman/([^/]++)(?|(*:1505)|/(?|approve(*:1525)|reject(?|(*:1543))))|storeowner/([^/]++)(?|(*:1577)|/(?|approve(*:1597)|reject(?|(*:1615)))))|ll\\-stores/([^/]++)(?|(*:1650)|/edit(*:1664)|(*:1673)))|/c(?|hat/(?|([^/]++)(*:1704)|send(*:1717)|fetch/([^/]++)(*:1740))|ategory/([^/]++)(?|/edit(*:1774)|(*:1783)))|/update\\-gig\\-status/([^/]++)(*:1823)|/reported\\-gigs/resolve/([^/]++)(*:1864))/?$}sDu',
    ),
    3 => 
    array (
      21 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3XqqVXJmpg8nSUsP',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      62 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'step.one',
          ),
          1 => 
          array (
            0 => 'categoryId',
            1 => 'serviceId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      104 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeowner.products.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeowner.products.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      125 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeowner.products.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      154 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storeowner.sale.update',
          ),
          1 => 
          array (
            0 => 'saleId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_control_center.suspend_store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      209 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_control_center.unsuspend_store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Oneshops',
          ),
          1 => 
          array (
            0 => 'shopId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'handyman.accept',
          ),
          1 => 
          array (
            0 => 'gigId',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      288 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.suspend_handyman',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      305 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.unsuspend_handyman',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      314 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Onehandyman_clientVeiw',
          ),
          1 => 
          array (
            0 => 'handymanId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'handyman.opengig',
          ),
          1 => 
          array (
            0 => 'gigId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'handyman.submitProposal',
          ),
          1 => 
          array (
            0 => 'gigId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      421 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gig.updateStatus',
          ),
          1 => 
          array (
            0 => 'gigId',
            1 => 'status',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.process',
          ),
          1 => 
          array (
            0 => 'gigId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gig.update.repot.paymet',
          ),
          1 => 
          array (
            0 => 'paymentId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit_gig',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      481 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cancel_gig',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.view_gig',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update_gig',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete_gig',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      534 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'handyman.updateProposal',
          ),
          1 => 
          array (
            0 => 'proposalId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      549 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'proposal.unreject',
          ),
          1 => 
          array (
            0 => 'proposalId',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'proposal.reject',
          ),
          1 => 
          array (
            0 => 'proposalId',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      577 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'proposal.award',
          ),
          1 => 
          array (
            0 => 'proposalId',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product',
          ),
          1 => 
          array (
            0 => 'productId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'handyman.assigned.task',
          ),
          1 => 
          array (
            0 => 'gigId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      645 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Onegig',
          ),
          1 => 
          array (
            0 => 'gigId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'assigned.task',
          ),
          1 => 
          array (
            0 => 'gigId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.agreements.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      746 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.agreements.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      769 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.agreements.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      803 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit_customer',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit_handyman',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      856 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit_store_owner',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update_customer',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update_handyman',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      945 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update_store_owner',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      975 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update_ticket_status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1011 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete_customer',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1037 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete_handyman',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1066 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete_store_owner',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1101 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.view_customer',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1127 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.view_handyman',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.view_store_owner',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1180 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.view_ticket',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'chatadmin',
          ),
          1 => 
          array (
            0 => 'receiverId',
            1 => 'ticketId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1241 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'chat.fetchadmin',
          ),
          1 => 
          array (
            0 => 'receiverId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1280 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6jOwzCbvHVdFDMpP',
          ),
          1 => 
          array (
            0 => 'senderId',
            1 => 'receiverId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1326 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gig-policies.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1335 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gig-policies.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gig-policies.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gig-policies.search',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1379 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.resolve_gig',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.resolve_store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1459 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_control_center.clearReportStore',
          ),
          1 => 
          array (
            0 => 'storeId',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1505 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.showHandyman',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1525 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.approveHandyman',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1543 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rejectHandymanForm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rejectHandyman',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1577 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.showStoreOwner',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.approveStoreOwner',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1615 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rejectStoreOwnerForm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.rejectStoreOwner',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1650 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_control_center.view_store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_control_center.edit_store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1673 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_control_center.update_store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'store_control_center.delete_store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1704 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'chat',
          ),
          1 => 
          array (
            0 => 'receiverId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'chat.send',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1740 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'chat.fetch',
          ),
          1 => 
          array (
            0 => 'receiverId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1774 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.edit_category',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1783 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update_category',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete_category',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1823 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update_gig_status',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1864 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.resolve',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DI2NYA8xL9xBnYwa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003730000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DI2NYA8xL9xBnYwa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3XqqVXJmpg8nSUsP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang/{locale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:396:"function ($locale) {
    if (\\in_array($locale, [\'en\', \'ar\'])) {
        \\session([\'locale\' => $locale]); // Set locale in session
        \\Illuminate\\Support\\Facades\\Log::info(\'Locale stored in session: \' . $locale);
    } else {
        \\Illuminate\\Support\\Facades\\Log::info(\'Invalid locale: \' . $locale);
    }
    return \\redirect()->route(\'home\'); // or another route that you know is safe
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000003750000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3XqqVXJmpg8nSUsP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@index',
        'controller' => 'App\\Http\\Controllers\\MasterController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@service',
        'controller' => 'App\\Http\\Controllers\\MasterController@service',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'aboutUs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@aboutUs',
        'controller' => 'App\\Http\\Controllers\\MasterController@aboutUs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'aboutUs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'handymen.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'allhandymen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@indexHandymen',
        'controller' => 'App\\Http\\Controllers\\MasterController@indexHandymen',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'handymen.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'handymen.filterHandymen' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'allhandymen/filter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@indexHandymen',
        'controller' => 'App\\Http\\Controllers\\MasterController@indexHandymen',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'handymen.filterHandymen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'terms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@terms',
        'controller' => 'App\\Http\\Controllers\\MasterController@terms',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'terms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'b.tasker' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'btasker',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@btasker',
        'controller' => 'App\\Http\\Controllers\\MasterController@btasker',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'b.tasker',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'handyman.agreement.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'handyman/agreement/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@confirmAgreement',
        'controller' => 'App\\Http\\Controllers\\MasterController@confirmAgreement',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'handyman.agreement.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'handyman.apply' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'handyman/apply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@showApplicationForm',
        'controller' => 'App\\Http\\Controllers\\MasterController@showApplicationForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'handyman.apply',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'handyman.apply.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'handyman/apply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@storeApplication',
        'controller' => 'App\\Http\\Controllers\\MasterController@storeApplication',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'handyman.apply.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'b.storeowner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bstoreowner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@bstoreowner',
        'controller' => 'App\\Http\\Controllers\\MasterController@bstoreowner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'b.storeowner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeowner.agreement.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'storeowner/agreement/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@confirmAgreement_storeowner',
        'controller' => 'App\\Http\\Controllers\\MasterController@confirmAgreement_storeowner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'storeowner.agreement.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeowner.apply' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'storeowner/apply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@showApplicationForm_storeowner',
        'controller' => 'App\\Http\\Controllers\\MasterController@showApplicationForm_storeowner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'storeowner.apply',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeowner.apply.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'storeowner/apply',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@storeApplication_storeowner',
        'controller' => 'App\\Http\\Controllers\\MasterController@storeApplication_storeowner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'storeowner.apply.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@contact',
        'controller' => 'App\\Http\\Controllers\\MasterController@contact',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact.storeTicket' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact/store-ticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@storeTicket',
        'controller' => 'App\\Http\\Controllers\\MasterController@storeTicket',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact.storeTicket',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search.services' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search-services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@search',
        'controller' => 'App\\Http\\Controllers\\ServiceController@search',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'search.services',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'step.one' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'step-one/{categoryId}/{serviceId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@stepOne',
        'controller' => 'App\\Http\\Controllers\\ServiceController@stepOne',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'step.one',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig.storeStep1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gig/step1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@storeStep1',
        'controller' => 'App\\Http\\Controllers\\ServiceController@storeStep1',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig.storeStep1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig.step2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gig/step2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@showStep2',
        'controller' => 'App\\Http\\Controllers\\ServiceController@showStep2',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig.step2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig.storeStep2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gig/step2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@storeStep2',
        'controller' => 'App\\Http\\Controllers\\ServiceController@storeStep2',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig.storeStep2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig.filterHandymen' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gig/filter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@showStep2',
        'controller' => 'App\\Http\\Controllers\\ServiceController@showStep2',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig.filterHandymen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig.step3B' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gig/step3',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@showStep3',
        'controller' => 'App\\Http\\Controllers\\ServiceController@showStep3',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig.step3B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig.getAvailability' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gig/step3/get-availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@getAvailability',
        'controller' => 'App\\Http\\Controllers\\ServiceController@getAvailability',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig.getAvailability',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig.storeStep3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gig/step3',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@storeStep3',
        'controller' => 'App\\Http\\Controllers\\ServiceController@storeStep3',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig.storeStep3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig.step4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gig/step4',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@showStep4',
        'controller' => 'App\\Http\\Controllers\\ServiceController@showStep4',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig.step4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig.storeStep4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gig/step4',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@storeStep4',
        'controller' => 'App\\Http\\Controllers\\ServiceController@storeStep4',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig.storeStep4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@notification',
        'controller' => 'App\\Http\\Controllers\\MasterController@notification',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.notification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeowner.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'storeowner/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:3',
        ),
        'uses' => 'App\\Http\\Controllers\\StoreOwnerController@dashboard',
        'controller' => 'App\\Http\\Controllers\\StoreOwnerController@dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'storeowner.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeowner.dashboard.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'storeowner/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:3',
        ),
        'uses' => 'App\\Http\\Controllers\\StoreOwnerController@dashboard',
        'controller' => 'App\\Http\\Controllers\\StoreOwnerController@dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'storeowner.dashboard.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeowner.products.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'storeowner/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:3',
        ),
        'uses' => 'App\\Http\\Controllers\\StoreOwnerController@storeProduct',
        'controller' => 'App\\Http\\Controllers\\StoreOwnerController@storeProduct',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'storeowner.products.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeowner.products.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'storeowner/products/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:3',
        ),
        'uses' => 'App\\Http\\Controllers\\StoreOwnerController@destroyProduct',
        'controller' => 'App\\Http\\Controllers\\StoreOwnerController@destroyProduct',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'storeowner.products.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeowner.products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'storeowner/products/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:3',
        ),
        'uses' => 'App\\Http\\Controllers\\StoreOwnerController@editProduct',
        'controller' => 'App\\Http\\Controllers\\StoreOwnerController@editProduct',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'storeowner.products.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeowner.products.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'storeowner/products/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:3',
        ),
        'uses' => 'App\\Http\\Controllers\\StoreOwnerController@updateProduct',
        'controller' => 'App\\Http\\Controllers\\StoreOwnerController@updateProduct',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'storeowner.products.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeowner.sale.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'storeowner/sale/{saleId}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:3',
        ),
        'uses' => 'App\\Http\\Controllers\\StoreOwnerController@updateSaleStatus',
        'controller' => 'App\\Http\\Controllers\\StoreOwnerController@updateSaleStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'storeowner.sale.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeowner.Home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'storeowner/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:3',
        ),
        'uses' => 'App\\Http\\Controllers\\StoreOwnerController@index',
        'controller' => 'App\\Http\\Controllers\\StoreOwnerController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'storeowner.Home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:2',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomerController@dashboard',
        'controller' => 'App\\Http\\Controllers\\CustomerController@dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.dashboard.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:2',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomerController@dashboard',
        'controller' => 'App\\Http\\Controllers\\CustomerController@dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.dashboard.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.Home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:2',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomerController@index',
        'controller' => 'App\\Http\\Controllers\\CustomerController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.Home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.myTask' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/mytask',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:2',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomerController@myTask',
        'controller' => 'App\\Http\\Controllers\\CustomerController@myTask',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.myTask',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'handyman.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'handyman/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:4',
        ),
        'uses' => 'App\\Http\\Controllers\\HandymanController@dashboard',
        'controller' => 'App\\Http\\Controllers\\HandymanController@dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'handyman.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'handyman.dashboard.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'handyman/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:4',
        ),
        'uses' => 'App\\Http\\Controllers\\HandymanController@dashboard',
        'controller' => 'App\\Http\\Controllers\\HandymanController@dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'handyman.dashboard.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'handyman.Home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'handyman/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:4',
        ),
        'uses' => 'App\\Http\\Controllers\\HandymanController@index',
        'controller' => 'App\\Http\\Controllers\\HandymanController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'handyman.Home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'handyman.accept' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'handyman/{gigId}/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:4',
        ),
        'uses' => 'App\\Http\\Controllers\\HandymanController@accept',
        'controller' => 'App\\Http\\Controllers\\HandymanController@accept',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'handyman.accept',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'handyman.opengig' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gigs/open/{gigId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\HandymanController@showOpenGig',
        'controller' => 'App\\Http\\Controllers\\HandymanController@showOpenGig',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'handyman.opengig',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'handyman.submitProposal' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gigs/{gigId}/proposal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\HandymanController@submitProposal',
        'controller' => 'App\\Http\\Controllers\\HandymanController@submitProposal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'handyman.submitProposal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'handyman.updateProposal' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'proposal/{proposalId}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\HandymanController@updateProposal',
        'controller' => 'App\\Http\\Controllers\\HandymanController@updateProposal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'handyman.updateProposal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'handyman.assigned.task' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mygig/{gigId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\HandymanController@showAssignedGig',
        'controller' => 'App\\Http\\Controllers\\HandymanController@showAssignedGig',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'handyman.assigned.task',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'handyman.addSkill' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'handyman/add-skill',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\HandymanController@addSkill',
        'controller' => 'App\\Http\\Controllers\\HandymanController@addSkill',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'handyman.addSkill',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'handyman.allgigs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'allgigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@allgigs',
        'controller' => 'App\\Http\\Controllers\\MasterController@allgigs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'handyman.allgigs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'handymen.filtergigs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'allgigs/filter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\MasterController@allgigs',
        'controller' => 'App\\Http\\Controllers\\MasterController@allgigs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'handymen.filtergigs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopsController@getCart',
        'controller' => 'App\\Http\\Controllers\\ShopsController@getCart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cart/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopsController@updateCart',
        'controller' => 'App\\Http\\Controllers\\ShopsController@updateCart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cart.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cart/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopsController@removeFromCart',
        'controller' => 'App\\Http\\Controllers\\ShopsController@removeFromCart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cart.remove',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart/checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopsController@checkout',
        'controller' => 'App\\Http\\Controllers\\ShopsController@checkout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'checkout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'save.deliveryinfo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-deliveryinfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopsController@saveDeliveryInfo',
        'controller' => 'App\\Http\\Controllers\\ShopsController@saveDeliveryInfo',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'save.deliveryinfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'place.order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'place-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopsController@placeOrder',
        'controller' => 'App\\Http\\Controllers\\ShopsController@placeOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'place.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Onegig' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'task/{gigId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@getOne',
        'controller' => 'App\\Http\\Controllers\\TaskController@getOne',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'Onegig',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'handyman/report/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@store',
        'controller' => 'App\\Http\\Controllers\\TaskController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'proposal.reject' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'proposal/{proposalId}/reject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:2',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@reject',
        'controller' => 'App\\Http\\Controllers\\TaskController@reject',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'proposal.reject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'proposal.unreject' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'proposal/{proposalId}/unreject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:2',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@unreject',
        'controller' => 'App\\Http\\Controllers\\TaskController@unreject',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'proposal.unreject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'proposal.award' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'proposal/{proposalId}/award',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:2',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@award',
        'controller' => 'App\\Http\\Controllers\\TaskController@award',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'proposal.award',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'assigned.task' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'assigned-task/{gigId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@showAssignedGig',
        'controller' => 'App\\Http\\Controllers\\TaskController@showAssignedGig',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'assigned.task',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig.updateStatus' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gig/{gigId}/update-status/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@updateGigStatus',
        'controller' => 'App\\Http\\Controllers\\TaskController@updateGigStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig.updateStatus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.process' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gig/{gigId}/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@processPayment',
        'controller' => 'App\\Http\\Controllers\\TaskController@processPayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.process',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig.update.repot.paymet' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gig/{paymentId}/payment/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@cancelPayment',
        'controller' => 'App\\Http\\Controllers\\TaskController@cancelPayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig.update.repot.paymet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payment/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@createPayment',
        'controller' => 'App\\Http\\Controllers\\TaskController@createPayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.gig.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'role:2',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@storeReportGig',
        'controller' => 'App\\Http\\Controllers\\TaskController@storeReportGig',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.gig.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reviews.clienttohandyman' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gig/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@storeReview',
        'controller' => 'App\\Http\\Controllers\\TaskController@storeReview',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reviews.clienttohandyman',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reviews.handymantoclient' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gig/reviews-cliient',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\TaskController@storeReviewHandyman',
        'controller' => 'App\\Http\\Controllers\\TaskController@storeReviewHandyman',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reviews.handymantoclient',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'chat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'chat/{receiverId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ChatController@index',
        'controller' => 'App\\Http\\Controllers\\ChatController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'chat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'chat.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chat/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ChatController@sendMessage',
        'controller' => 'App\\Http\\Controllers\\ChatController@sendMessage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'chat.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'chat.fetch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'chat/fetch/{receiverId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ChatController@fetchMessages',
        'controller' => 'App\\Http\\Controllers\\ChatController@fetchMessages',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'chat.fetch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shops.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'allshops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopsController@index',
        'controller' => 'App\\Http\\Controllers\\ShopsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shops.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'allproducts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopsController@indexProducts',
        'controller' => 'App\\Http\\Controllers\\ShopsController@indexProducts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'products.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Oneshops' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shops/{shopId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopsController@getOne',
        'controller' => 'App\\Http\\Controllers\\ShopsController@getOne',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'Oneshops',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/{productId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopsController@getOneProduct',
        'controller' => 'App\\Http\\Controllers\\ShopsController@getOneProduct',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reviews.product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopsController@storeReview',
        'controller' => 'App\\Http\\Controllers\\ShopsController@storeReview',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reviews.product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cart/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopsController@addToCart',
        'controller' => 'App\\Http\\Controllers\\ShopsController@addToCart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cart.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart.addsmaller' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cart/addsmaller',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopsController@addToCartSmaller',
        'controller' => 'App\\Http\\Controllers\\ShopsController@addToCartSmaller',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cart.addsmaller',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart.clear' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cart/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopsController@clearCart',
        'controller' => 'App\\Http\\Controllers\\ShopsController@clearCart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cart.clear',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart.resetAndAdd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cart/reset-and-add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ShopsController@resetCartAndAdd',
        'controller' => 'App\\Http\\Controllers\\ShopsController@resetCartAndAdd',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cart.resetAndAdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Onehandyman_clientVeiw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'handyman/{handymanId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HandymanController@getOne_Client',
        'controller' => 'App\\Http\\Controllers\\HandymanController@getOne_Client',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'Onehandyman_clientVeiw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\AuthController@showLoginForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SFzeQ9Pak32BXf2X' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\AuthController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SFzeQ9Pak32BXf2X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@showRegisterForm',
        'controller' => 'App\\Http\\Controllers\\AuthController@showRegisterForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'registerUser' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@register',
        'controller' => 'App\\Http\\Controllers\\AuthController@register',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'registerUser',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.main' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_portal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@main',
        'controller' => 'App\\Http\\Controllers\\AdminController@main',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.main',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_portal/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthAdminController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\AuthAdminController@showLoginForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admin_login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthAdminController@login',
        'controller' => 'App\\Http\\Controllers\\AuthAdminController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'Admin_login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin_portal/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthAdminController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\AuthAdminController@showRegistrationForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'Admin_register' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthAdminController@register',
        'controller' => 'App\\Http\\Controllers\\AuthAdminController@register',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'Admin_register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.agreements.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agreements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAgreementController@index',
        'controller' => 'App\\Http\\Controllers\\AdminAgreementController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.agreements.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.agreements.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agreements/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAgreementController@create',
        'controller' => 'App\\Http\\Controllers\\AdminAgreementController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.agreements.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.agreements.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/agreements/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAgreementController@store',
        'controller' => 'App\\Http\\Controllers\\AdminAgreementController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.agreements.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.agreements.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/agreements/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAgreementController@edit',
        'controller' => 'App\\Http\\Controllers\\AdminAgreementController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.agreements.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.agreements.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/agreements/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAgreementController@update',
        'controller' => 'App\\Http\\Controllers\\AdminAgreementController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.agreements.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.agreements.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/agreements/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminAgreementController@destroy',
        'controller' => 'App\\Http\\Controllers\\AdminAgreementController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.agreements.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.applications.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'applications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminApplicationController@index',
        'controller' => 'App\\Http\\Controllers\\AdminApplicationController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.applications.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.showHandyman' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'applications/handyman/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminApplicationController@showHandyman',
        'controller' => 'App\\Http\\Controllers\\AdminApplicationController@showHandyman',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.showHandyman',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.showStoreOwner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'applications/storeowner/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminApplicationController@showStoreOwner',
        'controller' => 'App\\Http\\Controllers\\AdminApplicationController@showStoreOwner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.showStoreOwner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.approveHandyman' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'applications/handyman/{id}/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminApplicationController@approveHandyman',
        'controller' => 'App\\Http\\Controllers\\AdminApplicationController@approveHandyman',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.approveHandyman',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.approveStoreOwner' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'applications/storeowner/{id}/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminApplicationController@approveStoreOwner',
        'controller' => 'App\\Http\\Controllers\\AdminApplicationController@approveStoreOwner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.approveStoreOwner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rejectHandymanForm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'applications/handyman/{id}/reject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminApplicationController@showRejectHandymanForm',
        'controller' => 'App\\Http\\Controllers\\AdminApplicationController@showRejectHandymanForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.rejectHandymanForm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rejectHandyman' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'applications/handyman/{id}/reject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminApplicationController@rejectHandyman',
        'controller' => 'App\\Http\\Controllers\\AdminApplicationController@rejectHandyman',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.rejectHandyman',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rejectStoreOwnerForm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'applications/storeowner/{id}/reject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminApplicationController@showRejectStoreOwnerForm',
        'controller' => 'App\\Http\\Controllers\\AdminApplicationController@showRejectStoreOwnerForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.rejectStoreOwnerForm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.rejectStoreOwner' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'applications/storeowner/{id}/reject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminApplicationController@rejectStoreOwner',
        'controller' => 'App\\Http\\Controllers\\AdminApplicationController@rejectStoreOwner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.rejectStoreOwner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthAdminController@logout',
        'controller' => 'App\\Http\\Controllers\\AuthAdminController@logout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@dashboard',
        'controller' => 'App\\Http\\Controllers\\AdminController@dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage_customers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage_customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@showCustomers',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@showCustomers',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.manage_customers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit_customer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit_customer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@editCustomer',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@editCustomer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.edit_customer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update_customer' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update_customer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@updateCustomer',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@updateCustomer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.update_customer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete_customer' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete_customer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@deleteCustomer',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@deleteCustomer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.delete_customer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.view_customer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/view_customer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@viewCustomer',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@viewCustomer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.view_customer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.create_customer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create_customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@createCustomer',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@createCustomer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.create_customer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.store_customer' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store_customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@storeCustomer',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@storeCustomer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.store_customer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage_handymans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage_handymans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@showHandymans',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@showHandymans',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.manage_handymans',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit_handyman' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit_handyman/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@editHandyman',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@editHandyman',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.edit_handyman',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update_handyman' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update_handyman/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@updateHandyman',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@updateHandyman',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.update_handyman',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete_handyman' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete_handyman/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@deleteHandyman',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@deleteHandyman',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.delete_handyman',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.view_handyman' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/view_handyman/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@viewHandyman',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@viewHandyman',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.view_handyman',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.create_handyman' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create_handyman',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@createHandyman',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@createHandyman',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.create_handyman',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.store_handyman' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store_handyman',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@storeHandyman',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@storeHandyman',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.store_handyman',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage_store_owners' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage_store_owners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@showStoreOwners',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@showStoreOwners',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.manage_store_owners',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit_store_owner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/edit_store_owner/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@editStoreOwner',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@editStoreOwner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.edit_store_owner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update_store_owner' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update_store_owner/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@updateStoreOwner',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@updateStoreOwner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.update_store_owner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete_store_owner' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/delete_store_owner/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@deleteStoreOwner',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@deleteStoreOwner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.delete_store_owner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.view_store_owner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/view_store_owner/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@viewStoreOwner',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@viewStoreOwner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.view_store_owner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.create_store_owner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/create_store_owner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@createStoreOwner',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@createStoreOwner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.create_store_owner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.store_store_owner' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store_store_owner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@storeStoreOwner',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@storeStoreOwner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.store_store_owner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage_tickets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage_tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@manageTickets',
        'controller' => 'App\\Http\\Controllers\\AdminController@manageTickets',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.manage_tickets',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update_ticket_status' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/update_ticket_status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@updateTicketStatus',
        'controller' => 'App\\Http\\Controllers\\AdminController@updateTicketStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.update_ticket_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.view_ticket' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/view_ticket/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@viewTicket',
        'controller' => 'App\\Http\\Controllers\\AdminController@viewTicket',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.view_ticket',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'chatadmin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chat/{receiverId}/{ticketId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@indexmessageUser',
        'controller' => 'App\\Http\\Controllers\\AdminController@indexmessageUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'chatadmin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'chat.sendadmin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chat/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@sendMessage',
        'controller' => 'App\\Http\\Controllers\\AdminController@sendMessage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'chat.sendadmin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'chat.fetchadmin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chat/fetch/{receiverId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@fetchMessages',
        'controller' => 'App\\Http\\Controllers\\AdminController@fetchMessages',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'chat.fetchadmin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.manage_gigs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manage-gigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@manageGigs',
        'controller' => 'App\\Http\\Controllers\\AdminController@manageGigs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.manage_gigs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update_gig_status' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-gig-status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@updateGigStatus',
        'controller' => 'App\\Http\\Controllers\\AdminController@updateGigStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.update_gig_status',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gigs_overview' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gigs-overview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@gigsOverview',
        'controller' => 'App\\Http\\Controllers\\GigController@gigsOverview',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.gigs_overview',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.all_gigs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'all-gigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@allGigs',
        'controller' => 'App\\Http\\Controllers\\GigController@allGigs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.all_gigs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reported_gigs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reported-gigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@reportedGigs',
        'controller' => 'App\\Http\\Controllers\\GigController@reportedGigs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.reported_gigs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.gig_categories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gig-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@gigCategories',
        'controller' => 'App\\Http\\Controllers\\GigController@gigCategories',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.gig_categories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.handyman_performance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'handyman-performance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@handymanPerformance',
        'controller' => 'App\\Http\\Controllers\\GigController@handymanPerformance',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.handyman_performance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig-policies.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gig-policies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@indexPolicy',
        'controller' => 'App\\Http\\Controllers\\GigController@indexPolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig-policies.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig-policies.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gig-policies/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@createPolicy',
        'controller' => 'App\\Http\\Controllers\\GigController@createPolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig-policies.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig-policies.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gig-policies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@storePolicy',
        'controller' => 'App\\Http\\Controllers\\GigController@storePolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig-policies.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig-policies.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/gig-policies/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@editPolicy',
        'controller' => 'App\\Http\\Controllers\\GigController@editPolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig-policies.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig-policies.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/gig-policies/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@updatePolicy',
        'controller' => 'App\\Http\\Controllers\\GigController@updatePolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig-policies.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig-policies.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/gig-policies/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@destroyPolicy',
        'controller' => 'App\\Http\\Controllers\\GigController@destroyPolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig-policies.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gig-policies.search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gig-policies/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@searchPolicy',
        'controller' => 'App\\Http\\Controllers\\GigController@searchPolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gig-policies.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.communication_center' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/communication-center',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\CommunicationController@communicationCenter',
        'controller' => 'App\\Http\\Controllers\\CommunicationController@communicationCenter',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.communication_center',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6jOwzCbvHVdFDMpP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/conversation/{senderId}/{receiverId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\CommunicationController@getConversation',
        'controller' => 'App\\Http\\Controllers\\CommunicationController@getConversation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6jOwzCbvHVdFDMpP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'manage_gigs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@index',
        'controller' => 'App\\Http\\Controllers\\GigController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'manage_gigs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.view_gig' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gig/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@view',
        'controller' => 'App\\Http\\Controllers\\GigController@view',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.view_gig',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit_gig' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gig/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@edit',
        'controller' => 'App\\Http\\Controllers\\GigController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.edit_gig',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update_gig' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'gig/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@update',
        'controller' => 'App\\Http\\Controllers\\GigController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.update_gig',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete_gig' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'gig/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@destroy',
        'controller' => 'App\\Http\\Controllers\\GigController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.delete_gig',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.resolve_gig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/gigs/resolve/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@resolveGig',
        'controller' => 'App\\Http\\Controllers\\GigController@resolveGig',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.resolve_gig',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cancel_gig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gig/{id}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@cancelGig',
        'controller' => 'App\\Http\\Controllers\\GigController@cancelGig',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.cancel_gig',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.resolve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reported-gigs/resolve/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\GigController@resolve',
        'controller' => 'App\\Http\\Controllers\\GigController@resolve',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.resolve',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.edit_category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@editCategory',
        'controller' => 'App\\Http\\Controllers\\AdminController@editCategory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.edit_category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update_category' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@updateCategory',
        'controller' => 'App\\Http\\Controllers\\AdminController@updateCategory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.update_category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete_category' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@destroyCategory',
        'controller' => 'App\\Http\\Controllers\\AdminController@destroyCategory',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.delete_category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.suspend_handyman' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'handyman/{id}/suspend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@suspendHandyman',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@suspendHandyman',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.suspend_handyman',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.unsuspend_handyman' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'handyman/{id}/unsuspend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\UserControlCenter@unsuspendHandyman',
        'controller' => 'App\\Http\\Controllers\\UserControlCenter@unsuspendHandyman',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.unsuspend_handyman',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_control_center.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store_control_center',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\StoresController@dashboard',
        'controller' => 'App\\Http\\Controllers\\StoresController@dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store_control_center.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_control_center.all_stores' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'store_control_center/all-stores',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\StoresController@allStores',
        'controller' => 'App\\Http\\Controllers\\StoresController@allStores',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store_control_center.all_stores',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_control_center.view_store' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'all-stores/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\StoresController@viewStore',
        'controller' => 'App\\Http\\Controllers\\StoresController@viewStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store_control_center.view_store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_control_center.edit_store' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'all-stores/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\StoresController@edit',
        'controller' => 'App\\Http\\Controllers\\StoresController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store_control_center.edit_store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_control_center.update_store' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'all-stores/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\StoresController@update',
        'controller' => 'App\\Http\\Controllers\\StoresController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store_control_center.update_store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_control_center.delete_store' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'all-stores/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\StoresController@destroy',
        'controller' => 'App\\Http\\Controllers\\StoresController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store_control_center.delete_store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_control_center.suspend_store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/suspend/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\StoresController@suspendStore',
        'controller' => 'App\\Http\\Controllers\\StoresController@suspendStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store_control_center.suspend_store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_control_center.unsuspend_store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store/unsuspend/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\StoresController@unsuspendStore',
        'controller' => 'App\\Http\\Controllers\\StoresController@unsuspendStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store_control_center.unsuspend_store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_control_center.reported_stores' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reported-stores',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\StoresController@reportedStores',
        'controller' => 'App\\Http\\Controllers\\StoresController@reportedStores',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store_control_center.reported_stores',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.resolve_store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/store_control_center/resolve/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\StoresController@resolveStore',
        'controller' => 'App\\Http\\Controllers\\StoresController@resolveStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.resolve_store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store_control_center.clearReportStore' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/store/{storeId}/clearReport',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\StoresController@clearReportStore',
        'controller' => 'App\\Http\\Controllers\\StoresController@clearReportStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store_control_center.clearReportStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@showProfile',
        'controller' => 'App\\Http\\Controllers\\AdminController@showProfile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'profile/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\AdminController@updateProfile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'authAdmin',
          2 => 'admin',
          3 => 'share.notifications',
          4 => 'share.messages',
          5 => 'share.admindata',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminController@notification',
        'controller' => 'App\\Http\\Controllers\\AdminController@notification',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.notification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
