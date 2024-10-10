<!--==============================
    Mobile Menu
  ============================== -->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('assets/img/logoHorizantal.svg')); ?>" alt="Rakar"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <?php if(auth()->guard()->check()): ?>
                    <?php if(Auth::user()->role_id == 2): ?>
                        <!-- Customer Dashboard -->
                        <li><a href="<?php echo e(route('customer.dashboard')); ?>">Dashboard</a></li>
                    <?php elseif(Auth::user()->role_id == 3): ?>
                        <!-- Store Owner Dashboard -->
                        <li><a href="<?php echo e(route('storeowner.dashboard')); ?>">Dashboard</a></li>
                    <?php elseif(Auth::user()->role_id == 4): ?>
                        <!-- Handyman Dashboard -->
                        <li><a href="<?php echo e(route('handyman.dashboard')); ?>">Dashboard</a></li>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>
                    <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                <?php endif; ?>
                <li>
                    <a href="<?php echo e(route('home')); ?>">Home</a>

                </li>
                <li><a href="<?php echo e(route('aboutUs')); ?>">About Us</a></li>
                <li><a href="<?php echo e(route('service')); ?>">Our Services</a></li>
                <li><a href="<?php echo e(route('shops.index')); ?>">Shops</a></li>
                <li><a href="<?php echo e(route('products.index')); ?>">Products</a></li>
                <li><a href="<?php echo e(route('handymen.index')); ?>">Handymen</a></li>

            </ul>f47629
        </div>
    </div>
</div><!--==============================
 Header Area
==============================-->
<header class="th-header header-layout1 ">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="fas fa-globe"></i>
                                <a href="<?php echo e(url('lang/en')); ?>">English |</a>
                                <a href="<?php echo e(url('lang/ar')); ?>">العربية</a>
                            </li>
                            <li><i class="fas fa-clock"></i> 24/7 Online Support </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li class="d-none d-md-inline-block"><i class="fa-solid fa-messages"></i> <a
                                    href="<?php echo e(route('faq')); ?>">FAQ</a></li>
                            <li><i class="fas fa-headset"></i> <a href="<?php echo e(route('contact')); ?>">Support</a></li>

                            <?php if(auth()->guard()->guest()): ?>

                                <li><i class="fas fa-user"></i> <a href="<?php echo e(route('login')); ?>">Sign In / </a><a
                                        href="<?php echo e(route('register')); ?>">Register</a></li>
                            <?php endif; ?>

                            <?php if(auth()->guard()->check()): ?>
                                <li>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                        style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                    <i class="fas fa-user"></i>
                                    <a href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Log Out
                                    </a>
                                </li>
                            <?php endif; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="container">
            <div class="menu-area">
                <div class="row align-items-center justify-content-between flex-nowrap">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="<?php echo e(route('home')); ?>"><img style="width: 230px;"
                                    src="<?php echo e(asset('assets/img/logoHorizantal.png')); ?>" alt="Rakar"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <?php if(auth()->guard()->guest()): ?>

                                    <li>
                                        <a href="<?php echo e(route('home')); ?>">Home</a>

                                    </li>
                                <?php endif; ?>
                                <?php if(auth()->guard()->check()): ?>
                                    <?php if(Auth::user()->role_id == 2): ?>
                                        <!-- Customer Dashboard -->
                                        <li>
                                            <a href="<?php echo e(route('customer.Home')); ?>">Home
                                            </a>
                                        </li>
                                    <?php elseif(Auth::user()->role_id == 3): ?>
                                        <!-- Store Owner Dashboard -->
                                        <li>
                                            <a href="<?php echo e(route('storeowner.Home')); ?>">Home
                                            </a>
                                        </li>
                                    <?php elseif(Auth::user()->role_id == 4): ?>
                                        <!-- Handyman Dashboard -->
                                        <li>
                                            <a href="<?php echo e(route('handyman.Home')); ?>">Home
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                <?php endif; ?>
                                <li><a href="<?php echo e(route('aboutUs')); ?>">About Us</a></li>
                                <li><a href="<?php echo e(route('service')); ?>">Our Services</a></li>
                                <li><a href="<?php echo e(route('shops.index')); ?>">Shops</a></li>
                                <li><a href="<?php echo e(route('products.index')); ?>">Products</a></li>
                                <li><a href="<?php echo e(route('handymen.index')); ?>">Handymen</a></li>
                                <?php if(auth()->guard()->check()): ?>
                                    <li><a href="<?php echo e(route('cart')); ?>"><i class="fa-solid fa-cart-shopping fa-lg"
                                                style="margin-right:10px; top:50%;color: #f47629;"></i>
                                        </a></li>


                                    <li class="menu-item-has-children">
                                        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                                            <i class="fa-solid fa-bell fa-lg" style="top: 20px; color: #f47629;"></i> <span
                                                style="background-color:#F47629;"
                                                class="badge  badge-number"><?php echo e($adminNotifications->where('is_read', 0)->count()); ?></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="dropdown-header">
                                                You have <?php echo e($adminNotifications->where('is_read', 0)->count()); ?> new
                                                notifications

                                            </li>
                                            <li>
                                                <hr>
                                            </li>
                                            <?php $__empty_1 = true; $__currentLoopData = $adminNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <li style="display: flex;" class="notification-item">
                                                    <?php if($notification->category == 'primary'): ?>
                                                        <i class="bi bi-exclamation-circle text-primary"></i>
                                                    <?php elseif($notification->category == 'success'): ?>
                                                        <i class="bi bi-check-circle text-success"></i>
                                                    <?php elseif($notification->category == 'danger'): ?>
                                                        <i class="bi bi-x-circle text-danger"></i>
                                                    <?php elseif($notification->category == 'warning'): ?>
                                                        <i class="bi bi-info-circle text-warning"></i>
                                                    <?php endif; ?>
                                                    <div style="margin-left: 10px;">
                                                        <h4 style="font-size: 0.9rem;"> <?php echo e($notification->message); ?></h4>
                                                        <p style="font-size: 0.7rem;">
                                                            <?php echo e($notification->created_at->diffForHumans()); ?></p>
                                                    </div>
                                                </li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <li class="notification-item">
                                                    <div>
                                                        <h4>No new notifications</h4>
                                                    </div>
                                                </li>
                                            <?php endif; ?>

                                            <li class="dropdown-footer">
                                                <a href="<?php echo e(route('user.notification')); ?>">Show all notifications</a>
                                            </li>
                                        </ul>
                                    </li>



                                <?php endif; ?>
                            </ul>


                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-lg-none"><i
                                class="fa-solid fa-bars"></i></button>

                    </div>
                    <?php if(auth()->guard()->guest()): ?>
                        <div class="col-auto d-none d-xxl-block">
                            <a href="<?php echo e(route('register')); ?>" class="th-btn style3">Register
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if(auth()->guard()->check()): ?>
                        <div class="col-auto d-none d-xxl-block">
                            <?php if(Auth::user()->role_id == 2): ?>
                                <!-- Customer Dashboard -->
                                <a href="<?php echo e(route('customer.dashboard')); ?>" class="th-btn style3">Dashboard
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            <?php elseif(Auth::user()->role_id == 3): ?>
                                <!-- Store Owner Dashboard -->
                                <a href="<?php echo e(route('storeowner.dashboard')); ?>" class="th-btn style3">Dashboard
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            <?php elseif(Auth::user()->role_id == 4): ?>
                                <!-- Handyman Dashboard -->
                                <a href="<?php echo e(route('handyman.dashboard')); ?>" class="th-btn style3">Dashboard
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>
<!--==============================
<?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/partials/navbar_inside.blade.php ENDPATH**/ ?>