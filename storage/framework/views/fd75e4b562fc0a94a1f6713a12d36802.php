<?php $__env->startSection('content'); ?>
    <h1>Applications</h1>
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <h2>Handyman Applications</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Skills</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $handymanApplications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($application->id); ?></td>
                    <td><?php echo e($application->user->name); ?></td>
                    <td><?php echo e($application->skills); ?></td>
                    <td><?php echo e($application->status); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.showHandyman', $application->id)); ?>" class="btn btn-info">View</a>
                        <a href="<?php echo e(route('admin.rejectHandymanForm', $application->id)); ?>" class="btn btn-danger">Reject</a>
                        <form action="<?php echo e(route('admin.approveHandyman', $application->id)); ?>" method="POST"
                            style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <h2>Store Owner Applications</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Store Name</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $storeOwnerApplications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($application->id); ?></td>
                    <td><?php echo e($application->user->name); ?></td>
                    <td><?php echo e($application->store_name); ?></td>
                    <td><?php echo e($application->status); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.showStoreOwner', $application->id)); ?>" class="btn btn-info">View</a>
                        <a href="<?php echo e(route('admin.rejectStoreOwnerForm', $application->id)); ?>"
                            class="btn btn-danger">Reject</a>
                        <form action="<?php echo e(route('admin.approveStoreOwner', $application->id)); ?>" method="POST"
                            style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/applications/index.blade.php ENDPATH**/ ?>