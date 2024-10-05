<?php $__env->startSection('content'); ?>
    <h1>Step One</h1>
    <p>Category: <?php echo e($category->name); ?></p>
    <p>Service: <?php echo e($service->name); ?></p>
    <!-- Add additional form steps or information here -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/step-one.blade.php ENDPATH**/ ?>