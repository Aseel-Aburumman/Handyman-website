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
                        <li><a href="<?php echo e(route('customer.dashboard')); ?>"><?php echo e(__('messages.Dashboard')); ?></a></li>
                    <?php elseif(Auth::user()->role_id == 3): ?>
                        <!-- Store Owner Dashboard -->
                        <li><a href="<?php echo e(route('storeowner.dashboard')); ?>"><?php echo e(__('messages.Dashboard')); ?></a></li>
                    <?php elseif(Auth::user()->role_id == 4): ?>
                        <!-- Handyman Dashboard -->
                        <li><a href="<?php echo e(route('handyman.dashboard')); ?>"><?php echo e(__('messages.Dashboard')); ?></a></li>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>
                    <li><a href="<?php echo e(route('register')); ?>"><?php echo e(__('messages.Register')); ?></a></li>
                <?php endif; ?>
                <li>
                    <a href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.Home')); ?></a>

                </li>
                <li><a href="<?php echo e(route('aboutUs')); ?>"><?php echo e(__('messages.AboutUs')); ?></a></li>
                <?php if(auth()->guard()->check()): ?>
                    <?php if(Auth::user()->role_id == 2): ?>
                        <!-- Customer Dashboard -->
                        <li><a href="<?php echo e(route('service')); ?>"><?php echo e(__('messages.OurService')); ?></a></li>
                    <?php elseif(Auth::user()->role_id == 4): ?>
                        <!-- Store Owner Dashboard -->
                        <li><a href="<?php echo e(route('handyman.allgigs')); ?>"><?php echo e(__('messages.GigsMarket')); ?></a></li>
                    <?php elseif(Auth::user()->role_id == 3): ?>
                        <!-- Handyman Dashboard -->
                        
                    <?php endif; ?>
                <?php endif; ?>
                <li><a href="<?php echo e(route('shops.index')); ?>"><?php echo e(__('messages.Shops')); ?></a></li>
                <li><a href="<?php echo e(route('products.index')); ?>"><?php echo e(__('messages.Products')); ?></a></li>
                <li><a href="<?php echo e(route('handymen.index')); ?>"><?php echo e(__('messages.Handymen')); ?></a></li>

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
                            <li><i class="fas fa-clock"></i> 24 / 7 <?php echo e(__('messages.OnlineSupport')); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <?php if(auth()->guard()->check()): ?>
                                <?php if(Auth::user()->role_id == 2): ?>
                                    <!-- Customer Dashboard -->
                                    <li class="d-none d-md-inline-block"><i class="fa-solid fa-wrench"></i> <a
                                            href="<?php echo e(route('b.tasker')); ?>"><?php echo e(__('messages.BecomeHandyman')); ?></a></li>

                                    <li class="d-none d-md-inline-block"><i class="fa-solid fa-shop"></i> <a
                                            href="<?php echo e(route('b.storeowner')); ?>"><?php echo e(__('messages.BecomeStoreOwner')); ?></a>
                                    </li>
                                    
                                <?php endif; ?>
                            <?php endif; ?>
                            <li>
                                <i class="fas fa-headset"></i> <a
                                    href="<?php echo e(route('contact')); ?>"><?php echo e(__('messages.Support')); ?> &nbsp</a>
                            </li>
                            <li><a href="<?php echo e(route('cart')); ?>">Cart
                                </a></li>
                            <?php if(auth()->guard()->guest()): ?>

                                <li><i class="fas fa-user"></i> <a
                                        href="<?php echo e(route('login')); ?>">&nbsp<?php echo e(__('messages.SignIn')); ?>&nbsp</a><a
                                        href="<?php echo e(route('register')); ?>"><?php echo e(__('messages.Register')); ?></a></li>
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
                                        <?php echo e(__('messages.LogOut')); ?>

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
                                        <a href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.Home')); ?></a>

                                    </li>
                                <?php endif; ?>
                                <?php if(auth()->guard()->check()): ?>
                                    <?php if(Auth::user()->role_id == 2): ?>
                                        <!-- Customer Dashboard -->
                                        <li>
                                            <a href="<?php echo e(route('customer.Home')); ?>"><?php echo e(__('messages.Home')); ?>

                                            </a>
                                        </li>
                                    <?php elseif(Auth::user()->role_id == 3): ?>
                                        <!-- Store Owner Dashboard -->
                                        <li>
                                            <a href="<?php echo e(route('storeowner.Home')); ?>"><?php echo e(__('messages.Home')); ?>

                                            </a>
                                        </li>
                                    <?php elseif(Auth::user()->role_id == 4): ?>
                                        <!-- Handyman Dashboard -->
                                        <li>
                                            <a href="<?php echo e(route('handyman.Home')); ?>"><?php echo e(__('messages.Home')); ?>

                                            </a>
                                        </li>
                                    <?php endif; ?>

                                <?php endif; ?>
                                <li><a href="<?php echo e(route('aboutUs')); ?>"><?php echo e(__('messages.AboutUs')); ?></a></li>
                                <?php if(auth()->guard()->check()): ?>
                                    <?php if(Auth::user()->role_id == 2): ?>
                                        <!-- Customer Dashboard -->
                                        <li><a href="<?php echo e(route('service')); ?>"><?php echo e(__('messages.OurService')); ?></a></li>
                                    <?php elseif(Auth::user()->role_id == 4): ?>
                                        <!-- Store Owner Dashboard -->
                                        <li><a href="<?php echo e(route('handyman.allgigs')); ?>"><?php echo e(__('messages.GigsMarket')); ?></a>
                                        </li>
                                    <?php elseif(Auth::user()->role_id == 3): ?>
                                        <!-- Handyman Dashboard -->
                                        
                                    <?php endif; ?>
                                <?php endif; ?> <li><a href="<?php echo e(route('shops.index')); ?>"><?php echo e(__('messages.Shops')); ?></a></li>
                                <li><a href="<?php echo e(route('products.index')); ?>"><?php echo e(__('messages.Products')); ?></a></li>
                                <li><a href="<?php echo e(route('handymen.index')); ?>"><?php echo e(__('messages.Handymen')); ?></a></li>
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
                                                <?php echo e(__('messages.notificationPart1')); ?>

                                                <?php echo e($adminNotifications->where('is_read', 0)->count()); ?><?php echo e(__('messages.notificationPart2')); ?>



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
                                                        <h4 style="font-size: 0.9rem;">
                                                            <?php if(App::getLocale() == 'ar'): ?>
                                                                <?php echo e($notification->message_ar); ?>

                                                            <?php else: ?>
                                                                <?php echo e($notification->message); ?>

                                                            <?php endif; ?>
                                                        </h4>
                                                        <p style="font-size: 0.7rem;">
                                                            <?php echo e($notification->created_at->diffForHumans()); ?></p>
                                                    </div>
                                                </li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <li class="notification-item">
                                                    <div>
                                                        <h4><?php echo e(__('messages.notificationNo')); ?>

                                                        </h4>
                                                    </div>
                                                </li>
                                            <?php endif; ?>

                                            <li class="dropdown-footer">
                                                <a href="<?php echo e(route('user.notification')); ?>"><?php echo e(__('messages.notificationAll')); ?>

                                                </a>
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
                            <a href="<?php echo e(route('register')); ?>" class="th-btn style3"><?php echo e(__('messages.Register')); ?>


                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if(auth()->guard()->check()): ?>
                        <div class="col-auto d-none d-xxl-block">
                            <?php if(Auth::user()->role_id == 2): ?>
                                <!-- Customer Dashboard -->
                                <a href="<?php echo e(route('customer.dashboard')); ?>"
                                    class="th-btn style3"><?php echo e(__('messages.Dashboard')); ?>


                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            <?php elseif(Auth::user()->role_id == 3): ?>
                                <!-- Store Owner Dashboard -->
                                <a href="<?php echo e(route('storeowner.dashboard')); ?>"
                                    class="th-btn style3"><?php echo e(__('messages.Dashboard')); ?>


                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            <?php elseif(Auth::user()->role_id == 4): ?>
                                <!-- Handyman Dashboard -->
                                <a href="<?php echo e(route('handyman.dashboard')); ?>"
                                    class="th-btn style3"><?php echo e(__('messages.Dashboard')); ?>


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