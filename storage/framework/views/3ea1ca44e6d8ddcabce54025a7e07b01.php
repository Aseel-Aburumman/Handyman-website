<?php $__env->startSection('content'); ?>
    <h1>Store Owner Application - <?php echo e($application->user->name); ?></h1>

    <ul class="d-flex">
        <div class="w-50">
            <li><strong>Store Name:</strong> <?php echo e($application->store_name); ?></li>
            <li><strong>Store Name (Ar):</strong> <?php echo e($application->store_name_ar); ?></li>
            <li><strong>Contact Number:</strong> <?php echo e($application->contact_number); ?></li>
            <li><strong>Location:</strong> <?php echo e($application->location); ?></li>
            <li><strong>Address:</strong> <?php echo e($application->address); ?></li>
            <li><strong>Address (Ar):</strong> <?php echo e($application->address_ar); ?></li>
            <li><strong>Status:</strong> <?php echo e($application->status); ?></li>
        </div>
        <li class="w-50"><strong>Certificate:</strong>
            <div class="w-100">
                <?php if($application->certificate->name): ?>
                    <img src="<?php echo e(asset('storage/certificate_images/' . $application->certificate->name)); ?>"
                        alt="Profile Picture" style="width:300px;">
                <?php else: ?>
                    <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>" alt="Default Profile Picture">
                <?php endif; ?>
            </div>
        </li>
    </ul>

    <a href="<?php echo e(route('admin.applications.index')); ?>" class="btn btn-secondary">Back to Applications</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/applications/showStoreOwner.blade.php ENDPATH**/ ?>