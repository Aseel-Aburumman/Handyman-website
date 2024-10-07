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



            </ul>
        </div>
    </div>
</div><!--==============================
 Header Area
==============================-->
<header class="th-header header-layout2 ">
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
                            <li><i class="fas fa-user"></i> <a href="<?php echo e(route('login')); ?>">Sign In / </a><a
                                    href="<?php echo e(route('register')); ?>">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="sticky-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('assets/img/logoHorizantal.png')); ?>"
                                    alt="Rakar"></a>

                            
                        </div>
                    </div>
                    <div class="col">
                        <div class="menu-area">
                            <nav class="navbarTest main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li>
                                        <a href="<?php echo e(route('home')); ?>">Home</a>

                                    </li>
                                    <li><a href="<?php echo e(route('aboutUs')); ?>">About Us</a></li>
                                    <li><a href="<?php echo e(route('service')); ?>">Our Services</a></li>
                                    <li><a href="<?php echo e(route('shops.index')); ?>">Shops</a></li>
                                    <li><a href="<?php echo e(route('products.index')); ?>">Products</a></li>
                                    <li><a href="<?php echo e(route('handymen.index')); ?>">Handymen</a></li>



                                </ul>
                                <?php if(auth()->guard()->check()): ?>
                                    <ul style="margin-right:10px;">
                                        <li><a href="<?php echo e(route('cart')); ?>"><i class="fa-solid fa-cart-shopping fa-lg"
                                                    style="top:50%;color: #f47629;"></i>
                                            </a></li>
                                    </ul>
                                <?php endif; ?>


                            </nav>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i
                                    class="fa-solid fa-bars"></i></button>

                        </div>
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
<?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/partials/navbar.blade.php ENDPATH**/ ?>