<?php $__env->startSection('content'); ?>
    <h1>Manage Agreements</h1>

    <a href="<?php echo e(route('admin.agreements.create')); ?>" class="btn btn-primary">Add New Agreement</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $agreements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agreement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($agreement->id); ?></td>
                    <td><?php echo e($agreement->agreement_type); ?></td>
                    <td><?php echo e(Str::limit($agreement->content, 50)); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.agreements.edit', $agreement->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('admin.agreements.destroy', $agreement->id)); ?>" method="POST"
                            style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/agreements/index.blade.php ENDPATH**/ ?>