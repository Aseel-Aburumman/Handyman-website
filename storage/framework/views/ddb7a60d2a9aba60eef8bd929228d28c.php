<?php $__env->startSection('content'); ?>
    <h1>Edit Agreement</h1>

    <form action="<?php echo e(route('admin.agreements.update', $agreement->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="agreement_type">Agreement Type</label>
            <select name="agreement_type" class="form-control" required disabled>
                <option value="handyman" <?php echo e($agreement->agreement_type == 'handyman' ? 'selected' : ''); ?>>Handyman</option>
                <option value="store_owner" <?php echo e($agreement->agreement_type == 'store_owner' ? 'selected' : ''); ?>>Store Owner
                </option>
            </select>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" rows="5" required><?php echo e($agreement->content); ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/agreements/edit.blade.php ENDPATH**/ ?>