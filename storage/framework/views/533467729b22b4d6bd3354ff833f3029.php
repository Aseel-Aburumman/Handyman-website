

<?php $__env->startSection('content'); ?>
<div class="pagetitle">
    <h1>View Gig</h1>
</div>

<section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Gig Details</h5>
            <p><strong>Title:</strong> <?php echo e($gig->title); ?></p>
            <p><strong>Location:</strong> <?php echo e($gig->location); ?></p>
            <p><strong>Status:</strong> <?php echo e($gig->status->name); ?></p>
            <p><strong>Description:</strong> <?php echo e($gig->description); ?></p>
            <p><strong>Handyman:</strong> <?php echo e($gig->handyman->name); ?></p>
            <a href="<?php echo e(route('admin.edit_gig', $gig->id)); ?>" class="btn btn-warning">Edit Gig</a>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/view_gig.blade.php ENDPATH**/ ?>