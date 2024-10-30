<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">

        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo e(__('messages.BeHandyman')); ?></h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.Home')); ?>

                        </a></li>
                    <li><?php echo e(__('messages.HandymanAgreement')); ?>

                    </li>

                    <li><?php echo e(__('messages.HandymanForm')); ?>

                    </li>
                </ul>
            </div>
        </div>
    </div>


    <section class="overflow-hidden space" id="service-sec">
        <div class="container">
            <h1><?php echo e(__('messages.HandymanForm')); ?>

            </h1>

            <form action="<?php echo e(route('handyman.apply.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="price_per_hour"><?php echo e(__('messages.PPR')); ?></label>
                    <input type="number" name="price_per_hour" id="price_per_hour" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="experience"><?php echo e(__('messages.YearsExperience')); ?></label>
                    <input type="number" name="experience" id="experience" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="bio"><?php echo e(__('messages.Bio')); ?></label>
                    <textarea name="bio" id="bio" class="form-control" rows="4"
                        placeholder="Tell us more about your skills and experience"></textarea>
                </div>

                <button type="submit" class="btn btn-success"><?php echo e(__('messages.SubmitApplication')); ?></button>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/main_strc/handyman_apply.blade.php ENDPATH**/ ?>