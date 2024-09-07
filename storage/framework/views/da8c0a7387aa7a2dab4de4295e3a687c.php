<?php $__env->startSection('content'); ?>
<div class="pagetitle">
    <h1>Gig Policy Management</h1>
</div>

<section class="section">
    <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>

    <form action="<?php echo e(route('gig-policies.search')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search policies..." name="search" value="<?php echo e(request()->search); ?>">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gig Policies</h5>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th style="width: 75%">Content</th>
                                <th>Visible</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $policies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $policy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($loop->iteration); ?></th>
                                <td><?php echo e($policy->content); ?></td>
                                <td><?php echo e($policy->visible ? 'Yes' : 'No'); ?></td>
                                <td>
                                    <a href="<?php echo e(route('gig-policies.edit', $policy->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="<?php echo e(route('gig-policies.destroy', $policy->id)); ?>" method="POST" style="display:inline-block;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
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

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/gig_policy.blade.php ENDPATH**/ ?>