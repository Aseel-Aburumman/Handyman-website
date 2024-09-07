<?php $__env->startSection('content'); ?>
<div class="pagetitle">
    <h1>Edit Gig Policy</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Gig Policy</h5>
                    <form action="<?php echo e(route('gig-policies.update', $policy->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="mb-3">
                            <label for="content" class="form-label">Policy Content</label>
                            <textarea class="form-control" id="content" name="content" required><?php echo e($policy->content); ?></textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="visible" name="visible" value="1" <?php echo e($policy->visible ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="visible">Visible</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/gig_policy_edit.blade.php ENDPATH**/ ?>