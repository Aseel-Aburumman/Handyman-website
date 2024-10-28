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
        <div class="container">
            <h1>Handyman Application Form</h1>

            <form action="<?php echo e(route('handyman.apply.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="price_per_hour">Price Per Hour (in JD)</label>
                    <input type="number" name="price_per_hour" id="price_per_hour" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="experience">Years of Experience</label>
                    <input type="number" name="experience" id="experience" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea name="bio" id="bio" class="form-control" rows="4"
                        placeholder="Tell us more about your skills and experience"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Submit Application</button>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/main_strc/handyman_apply.blade.php ENDPATH**/ ?>