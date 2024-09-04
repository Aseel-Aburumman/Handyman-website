

<?php $__env->startSection('content'); ?>
<div class="pagetitle">
    <h1>Handyman Performance</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Handyman Performance</h5>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Handyman</th>
                                <th>Gigs Completed</th>
                                <th>Average Rating</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $handymen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $handyman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($handyman->user->name); ?></td>
                                <td><?php echo e($handyman->gigs->where('status_id', 9)->count()); ?></td> <!-- Assuming '9' is the 'Completed' status -->
                                <td><?php echo e($handyman->reviews->avg('rating')); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.view_handyman', $handyman->id)); ?>" class="btn btn-info btn-sm">View</a>
                                    <a href="<?php echo e(route('admin.suspend_handyman', $handyman->id)); ?>" class="btn btn-danger btn-sm">Suspend</a>
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

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/handyman_performance.blade.php ENDPATH**/ ?>