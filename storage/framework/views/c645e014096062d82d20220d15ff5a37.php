<?php $__env->startSection('content'); ?>
    <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Breadcumb
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">

        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Book A Gig</h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li>Book A Gig</li>

                    <li>Step 2</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="overflow-hidden space" id="service-sec">
        <div class="container mt-5">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <h1 class="mb-4 text-center">Handyman Application Agreement</h1>

                    <p>Please read the following agreement before submitting your application to become a handyman on our
                        platform:
                    </p>

                    <div class="agreement-content">
                        <!-- Display the agreement content based on the current locale (English or Arabic) -->
                        <?php if(app()->getLocale() == 'ar'): ?>
                            <?php echo $agreement->content_ar; ?>

                        <?php else: ?>
                            <?php echo $agreement->content; ?>

                        <?php endif; ?>
                    </div>

                    <form action="<?php echo e(route('handyman.agreement.confirm')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-primary">I Agree</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <style>
        .card {
            border-radius: 8px;
            border: none;
        }

        .card-body {
            background-color: #f9f9f9;
        }

        h1,
        h5 {
            font-family: 'Nunito', sans-serif;
        }

        ul.list-group {
            list-style-type: none;
            padding-left: 0;
        }

        ul.list-group-item {
            margin-bottom: 20px;
        }

        ul.list-group-item p {
            margin-left: 20px;
            line-height: 1.6;
        }

        ul.list-group-item strong {
            color: #333;
            font-size: 18px;
        }

        .btn {
            background-color: #ff6600;
            color: white;
            border-radius: 25px;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #e65c00;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/main_strc/b_tasker.blade.php ENDPATH**/ ?>