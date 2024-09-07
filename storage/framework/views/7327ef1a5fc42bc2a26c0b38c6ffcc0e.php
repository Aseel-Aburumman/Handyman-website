<?php $__env->startSection('content'); ?>
<div class="pagetitle">
    <h1>Gigs Overview</h1>
</div>

<section class="section dashboard">
    <div class="row">
        <!-- Gigs by Status -->
        <div class="col-lg-3 col-md-6">
            <div class="card info-card">
                <div class="card-body">
                    <h5 class="card-title">Open Gigs</h5>
                    <h6><?php echo e($gigCounts['open']); ?></h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card info-card">
                <div class="card-body">
                    <h5 class="card-title">In Progress</h5>
                    <h6><?php echo e($gigCounts['in_progress']); ?></h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card info-card">
                <div class="card-body">
                    <h5 class="card-title">Completed</h5>
                    <h6><?php echo e($gigCounts['completed']); ?></h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card info-card">
                <div class="card-body">
                    <h5 class="card-title">Canceled</h5>
                    <h6><?php echo e($gigCounts['canceled']); ?></h6>
                </div>
            </div>
        </div>

        <!-- Recent Gigs -->
        <div class="col-lg-12">
            <div class="card recent-gigs">
                <div class="card-body">
                    <h5 class="card-title">Recent Gigs</h5>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
<?php $__currentLoopData = $recentGigs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($gig->title); ?></td>
                        <td><?php echo e($gig->location); ?></td>
                        <td><?php echo e($gig->status->name); ?></td>
                        <td>
                            <a href="<?php echo e(route('admin.view_gig', $gig->id)); ?>" class="btn btn-info btn-sm">View</a>
                            <a href="<?php echo e(route('admin.edit_gig', $gig->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?php echo e(route('admin.delete_gig', $gig->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/gigs_overview.blade.php ENDPATH**/ ?>