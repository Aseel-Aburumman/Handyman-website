<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">

        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo e(__('messages.storeOwnerApplyBread')); ?></h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.Home')); ?></a></li>
                    <li><?php echo e(__('messages.storeOwnerApplyBreadSmall')); ?></li>

                    <li><?php echo e(__('messages.storeOwnerApplyBreadSmall3')); ?></li>
                </ul>
            </div>
        </div>
    </div>


    <section class="overflow-hidden space" id="service-sec">
        <div class="container">
            <h1>Store Owner Application Form</h1>

            <form action="<?php echo e(route('storeowner.apply.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="store_name"><?php echo e(__('messages.StoreNameEn')); ?></label>
                    <input type="text" name="store_name" id="store_name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="store_name_ar"><?php echo e(__('messages.StoreNameAr')); ?></label>
                    <input type="text" name="store_name_ar" id="store_name_ar" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="contact_number"><?php echo e(__('messages.ContactNumber')); ?></label>
                    <input type="text" name="contact_number" id="contact_number" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="address"><?php echo e(__('messages.AddressEn')); ?></label>
                    <input type="text" name="address" id="address" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="address_ar"><?php echo e(__('messages.AddressAr')); ?></label>
                    <input type="text" name="address_ar" id="address_ar" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="location"><?php echo e(__('messages.Location')); ?></label>
                    <input type="text" name="location" id="location" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="description"><?php echo e(__('messages.DescriptionEn')); ?></label>
                    <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="description_ar"><?php echo e(__('messages.DescriptionAr')); ?></label>
                    <textarea name="description_ar" id="description_ar" class="form-control" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="certificate_image"><?php echo e(__('messages.UploadCertificate')); ?></label>
                    <input type="file" name="certificate_image" id="certificate_image" class="form-control-file"
                        required>
                </div>

                <button type="submit" class="btn btn-primary"><?php echo e(__('messages.SubmitApplication')); ?></button>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/main_strc/storeowner_apply.blade.php ENDPATH**/ ?>