<?php $__env->startSection('content'); ?>
<div class="pagetitle">
    <h1>Reported Gigs</h1>
</div>

<section class="section">
                
                <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Reported Gigs</h5>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Store Name</th>
                                <th>Store Owner</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $reportedStores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Rstore): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($Rstore->store->name); ?></td>
                                <td><?php echo e($Rstore->store->storeOwner ? $Rstore->store->storeOwner->user->name ?? 'No Owner' : 'No Owner'); ?></td>
                                <td><?php echo e($Rstore->store->status ? $Rstore->store->status->name ?? 'No Status' : 'No Status'); ?></td>
                                <td>
                                    <form action="<?php echo e(route('admin.resolve_store', $Rstore->store->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-success">Resolve</button>
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

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/store_control_center/reported_stores.blade.php ENDPATH**/ ?>