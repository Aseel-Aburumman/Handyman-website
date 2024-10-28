<?php $__env->startSection('content'); ?>
    <h1>Handyman Application - <?php echo e($application->user->name); ?></h1>

    <ul>
        <li><strong>Price Per Hour:</strong> <?php echo e($application->price_per_hour); ?></li>
        <li><strong>Experience:</strong> <?php echo e($application->experience); ?></li>
        <li><strong>Bio:</strong> <?php echo e($application->bio); ?></li>
        <li><strong>Status:</strong> <?php echo e($application->status); ?></li>
    </ul>

    <a href="<?php echo e(route('admin.applications.index')); ?>" class="btn btn-secondary">Back to Applications</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/applications/showHandyman.blade.php ENDPATH**/ ?>