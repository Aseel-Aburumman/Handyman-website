<?php $__env->startSection('content'); ?>
    <h1>Reject Store Owner Application</h1>

    <form action="<?php echo e(route('admin.rejectStoreOwner', $application->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="flagged_parts">Flagged Parts</label>
            <select name="flagged_parts[]" id="flagged_parts" class="form-control" multiple>
                <option value="store_name">Store Name</option>
                <option value="business_registration">Business Registration</option>
                <option value="contact_number">Contact Number</option>
                <option value="address">Address</option>
            </select>
        </div>

        <button type="submit" class="btn btn-danger">Reject Application</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/applications/storeowner_reject.blade.php ENDPATH**/ ?>