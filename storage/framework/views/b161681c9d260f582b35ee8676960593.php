<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kaf Mueen - Handyman Multipurpose Repairing Services </title>
    <meta name="author" content="Rakar">
    <meta name="description" content="Rakar - Handyman Multipurpose Repairing Services HTML Template">
    <meta name="keywords" content="Rakar - Handyman Multipurpose Repairing Services HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(asset('assets/img/favicons/apple-icon-57x57.png')); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(asset('assets/img/favicons/apple-icon-60x60.png')); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(asset('assets/img/favicons/apple-icon-72x72.png')); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('assets/img/favicons/apple-icon-76x76.png')); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(asset('assets/img/favicons/apple-icon-114x114.png')); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('assets/img/favicons/apple-icon-120x120.png')); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(asset('assets/img/favicons/apple-icon-144x144.png')); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('assets/img/favicons/apple-icon-152x152.png')); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('assets/img/favicons/apple-icon-180x180.png')); ?>">
    <link rel="icon" type="image/png" sizes="192x192"
        href="<?php echo e(asset('assets/img/favicons/android-icon-192x192.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('assets/img/favicons/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(asset('assets/img/favicons/favicon-96x96.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets/img/favicons/favicon-16x16.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset('assets/img/favicons/manifest.json')); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo e(asset('assets/img/favicons/ms-icon-144x144.png')); ?>">
    <meta name="theme-color" content="#ffffff">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!--==============================
 Google Fonts
 ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">

    <!--==============================
 All CSS File
 ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/fontawesome.min.css')); ?>">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.min.css')); ?>">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/swiper-bundle.min.css')); ?>">
    <!-- Theme Custom CSS -->
    <?php if(app()->getLocale() == 'en'): ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/indexstyle.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/responsiveStyle.css')); ?>">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/indexstyle.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/responsiveStyle.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('assets/css/languageStyle.css')); ?>">
    <?php endif; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




</head>

<body>



    <!--********************************
        Code Start From Here
 ******************************** -->

    <!--==============================
  Preloader
==============================-->
    <div class="preloader ">
        <button class="th-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    



    <!-- ======= Navbar======= -->
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Navbar -->




    <?php echo $__env->yieldContent('content'); ?>


    <!-- ======= Footer ======= -->
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Footer -->











    <!--********************************
        Code End  Here
******************************** -->

    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>

    <!--==============================
All Js File
============================== -->
    <!-- Jquery -->
    <script src="<?php echo e(asset('assets/js/vendor/jquery-3.7.1.min.js')); ?>"></script>
    <!-- Swiper Js -->
    <script src="<?php echo e(asset('assets/js/swiper-bundle.min.js')); ?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <!-- Magnific Popup -->
    <script src="<?php echo e(asset('assets/js/jquery.magnific-popup.min.js')); ?>"></script>
    <!-- Counter Up -->
    <script src="<?php echo e(asset('assets/js/jquery.counterup.min.js')); ?>"></script>
    <!-- Tilt -->
    <script src="<?php echo e(asset('assets/js/tilt.jquery.min.js')); ?>"></script>
    <!-- Isotope Filter -->
    <script src="<?php echo e(asset('assets/js/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/isotope.pkgd.min.js')); ?>"></script>

    <!-- Main Js File -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/layouts/guest_master.blade.php ENDPATH**/ ?>