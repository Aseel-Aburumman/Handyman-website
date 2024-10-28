<?php $__env->startSection('content'); ?>
    <h1>Reject Handyman Application</h1>

    <form action="<?php echo e(route('admin.rejectHandyman', $application->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="form-group">
            <label for="flagged_parts">Flagged Parts</label>
            <select name="flagged_parts[]" id="flagged_parts" class="form-control w-25" multiple>
                <option value="experience">Experience</option>
                <option value="certifications">Certifications</option>
                <option value="skills">Skills</option>

                <option value="price_per_hour">Price Per Hour</option>
            </select>
        </div>

        <button type="submit" class="mt-3 btn btn-danger">Reject Application</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/applications/handyman_reject.blade.php ENDPATH**/ ?>