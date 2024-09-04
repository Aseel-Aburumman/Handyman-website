

<?php $__env->startSection('content'); ?>

<div class="pagetitle">
  <h1>Gigs Management</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
      <li class="breadcrumb-item active">Gigs Control Center</li>
    </ol>
  </nav>
</div>

<section class="section dashboard">
  <div class="row">

    <div class="card recent-gigs overflow-auto">
      <div class="card-body">
        <h5 class="card-title">Recent Gigs <span>| Control Center</span></h5>

        <table class="table table-borderless datatable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Location</th>
              <th scope="col">Estimated Time</th>
              <th scope="col">Price</th>
              <th scope="col">Status</th>
              <th scope="col">Date Created</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $gigs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <th scope="row"><?php echo e($loop->iteration); ?></th>
              <td><?php echo e($gig->title); ?></td>
              <td><?php echo e($gig->location); ?></td>
              <td><?php echo e($gig->estimated_time); ?> hours</td>
              <td>$<?php echo e($gig->price); ?></td>
              <td>
                <form action="<?php echo e(route('admin.update_gig_status', $gig->id)); ?>" method="POST" style="display:inline;">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PUT'); ?>
                  <select name="status_id" class="form-select" onchange="this.form.submit()">
                    <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($status->id); ?>" <?php echo e($gig->status_id == $status->id ? 'selected' : ''); ?>><?php echo e($status->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </form>
              </td>
              <td><?php echo e(\Carbon\Carbon::parse($gig->created_at)->format('Y-m-d')); ?></td>
              <td>
                <a href="#" class="btn btn-primary btn-sm">View</a>
                <a href="#" class="btn btn-danger btn-sm">Cancel</a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>

      </div>
    </div>

  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/gigs_manage.blade.php ENDPATH**/ ?>