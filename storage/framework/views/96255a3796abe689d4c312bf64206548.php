<?php $__env->startSection('content'); ?>
    <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Breadcumb
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">

        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Be A Store Owner!</h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li>Store Owner Application Agreement</li>

                    <li>Store Owner Application Form</li>
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
                    <label for="store_name">Store Name</label>
                    <input type="text" name="store_name" id="store_name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="store_name_ar">Store Name (Arabic)</label>
                    <input type="text" name="store_name_ar" id="store_name_ar" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" name="contact_number" id="contact_number" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="address_ar">Address (Arabic)</label>
                    <input type="text" name="address_ar" id="address_ar" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="description_ar">Description (Arabic)</label>
                    <textarea name="description_ar" id="description_ar" class="form-control" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="certificate_image">Upload Certificate</label>
                    <input type="file" name="certificate_image" id="certificate_image" class="form-control-file"
                        required>
                </div>

                <button type="submit" class="btn btn-primary">Submit Application</button>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/main_strc/storeowner_apply.blade.php ENDPATH**/ ?>