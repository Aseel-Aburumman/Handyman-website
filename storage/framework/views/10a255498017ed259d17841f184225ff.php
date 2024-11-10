<?php $__env->startSection('content'); ?>
<div class="pagetitle">
    <h1>Handyman Performance</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            
            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Reported Handymans</h5>

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
                            <?php $__empty_1 = true; $__currentLoopData = $Rhandymen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $handyman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($handyman->name); ?></td>
                                <td><?php echo e($handyman->gigs->where('status_id', 9)->count()); ?></td> <!-- Assuming '9' is the 'Completed' status -->
                                <td><?php echo e($handyman->reviews->avg('rating')); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.view_handyman', $handyman->id)); ?>" class="btn btn-info btn-sm">View</a>
                                    <?php if($handyman->suspended): ?>
                                    <form action="<?php echo e(route('admin.unsuspend_handyman', $handyman->id)); ?>" method="POST" style="display:inline;">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-success btn-sm">Unsuspend</button>
                                    </form>
                                    <?php else: ?>
                                    <form action="<?php echo e(route('admin.suspend_handyman', $handyman->id)); ?>" method="POST" style="display:inline;">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger btn-sm">Suspend</button>
                                    </form>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="4">No reported handymen found.</td>
                            </tr>
                            <?php endif; ?>                        </td>
                        </tbody>
                    </table>
                </div>
            </div>



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
                                    <a href="<?php echo e(route('admin.view_handyman', $handyman->user->id)); ?>" class="btn btn-info btn-sm">View</a>
                                    <!-- Use a form for the suspend action to make a POST request -->
                                    <?php if($handyman->suspended): ?>
                                    <!-- Unsuspend Button -->
                                    <form action="<?php echo e(route('admin.unsuspend_handyman', $handyman->id)); ?>" method="POST" style="display:inline;">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-success btn-sm">Unsuspend</button>
                                    </form>
                                    <?php else: ?>
                                    <!-- Suspend Button -->
                                    <form action="<?php echo e(route('admin.suspend_handyman', $handyman->id)); ?>" method="POST" style="display:inline;">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger btn-sm">Suspend</button>
                                    </form>
                                    <?php endif; ?>                            </td>
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

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/gigs/handyman_performance.blade.php ENDPATH**/ ?>