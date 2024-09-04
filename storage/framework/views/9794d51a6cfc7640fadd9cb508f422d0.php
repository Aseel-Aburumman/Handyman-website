

<?php $__env->startSection('content'); ?>
<div class="pagetitle">
    <h1>Reported Gigs</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Reported Gigs</h5>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Reason</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $reportedGigs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($gig->title); ?></td>
                                <td><?php echo e($gig->location); ?></td>
                                <td><?php echo e($gig->status->name); ?></td>
                                <td>Reported for issue</td>
                                <td>
                                    <a href="<?php echo e(route('admin.resolve_gig', $gig->id)); ?>" class="btn btn-success btn-sm">Resolve</a>
                                    <a href="<?php echo e(route('admin.cancel_gig', $gig->id)); ?>" class="btn btn-danger btn-sm">Cancel</a>
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

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/reported_gigs.blade.php ENDPATH**/ ?>