<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>All Gigs</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Gigs</h5>

                        <form method="GET" action="<?php echo e(route('admin.all_gigs')); ?>">
                            <div class="row">
                                <div class="col-md-3">
                                    <select name="status" class="form-select">
                                        <option value="">Select Status</option>
                                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($status->id); ?>"><?php echo e($status->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select name="handyman" class="form-select">
                                        <option value="">Select Handyman</option>
                                        <?php $__currentLoopData = $handymen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $handyman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            
                                            <option value="<?php echo e($handyman ? $handyman->id : ''); ?>">
                                                <?php echo e($handyman ? $handyman->user->name : 'Not selected yet'); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="location" class="form-control" placeholder="Location">
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </div>
                        </form>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Handyman</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $gigs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($gig->title); ?></td>
                                        
                                        <td><?php echo e($gig->handyman->user->name ?? 'Not selected yet'); ?></td>

                                        <td><?php echo e($gig->location); ?></td>
                                        <td><?php echo e($gig->status->name); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('admin.view_gig', $gig->id)); ?>"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="<?php echo e(route('admin.edit_gig', $gig->id)); ?>"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="<?php echo e(route('admin.delete_gig', $gig->id)); ?>"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        <?php echo e($gigs->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/gigs/all_gigs.blade.php ENDPATH**/ ?>