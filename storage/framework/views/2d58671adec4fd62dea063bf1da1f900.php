<?php $__env->startSection('content'); ?>


<div class="pagetitle">
    <h1>Notification Center</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
        <li class="breadcrumb-item active">Notification Center</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
<div class="card">
    <div class="card-body">
<!-- Table with hoverable rows -->
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Category</th>
            <th scope="col">Notification</th>
            <th scope="col">Created At</th>
        </tr>
    </thead>
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <th scope="row"><?php echo e($loop->iteration); ?></th>
                <td ><?php if($notification->category == 'primary'): ?>
                    <i class="bi bi-exclamation-circle text-primary"></i>
                  <?php elseif($notification->category == 'success'): ?>
                    <i class="bi bi-check-circle text-success"></i>
                  <?php elseif($notification->category == 'danger'): ?>
                    <i class="bi bi-x-circle text-danger"></i>
                  <?php elseif($notification->category == 'warning'): ?>
                    <i class="bi bi-info-circle text-warning"></i>
                  <?php endif; ?></td>
                <td><?php echo e($notification->message); ?></td>
                <td><?php echo e($notification->created_at->format('Y-m-d H:i:s')); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="5">No notifications available.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<!-- End Table with hoverable rows -->
    </div>
</div>
      </div>
    </div>
  </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/notification.blade.php ENDPATH**/ ?>