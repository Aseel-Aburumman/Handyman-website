<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Stores Control Center</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                <li class="breadcrumb-item">Stores Control Center</li>
                <li class="breadcrumb-item active">All Stores List</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Stores</h5>

                        <!-- Filters (if needed) -->
                        <form method="GET" action="<?php echo e(route('store_control_center.all_stores')); ?>">
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
                                    <select name="store_owner" class="form-select">
                                        <option value="">Select Store Owner</option>
                                        <?php $__currentLoopData = $storeOwners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $storeOwner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($storeOwner->id); ?>"><?php echo e($storeOwner->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="location" class="form-control" placeholder="Location">
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                    <button href="<?php echo e(route('store_control_center.all_stores')); ?>" type="submit"
                                        class="btn btn-primary">Reset</button>
                                </div>
                            </div>
                        </form>

                        <!-- Stores Table -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Store Name</th>
                                    <th class="tableHide">Store Owner</th>
                                    <th class="tableHide2">Number of Products</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($store->name); ?></td>
                                        <td class="tableHide"><?php echo e($store->storeOwner->user->name); ?></td>
                                        <!-- Access the owner's user name -->
                                        <td class="tableHide2"><?php echo e($store->products_count); ?></td>
                                        <td><?php echo e($store->status->name); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('store_control_center.view_store', ['id' => $store->id])); ?>"
                                                class="btn btn-info btn-sm">View</a>
                                            <a href="<?php echo e(route('store_control_center.edit_store', $store->id)); ?>"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="<?php echo e(route('store_control_center.delete_store', $store->id)); ?>"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        <!-- Pagination Links -->
                        <?php echo e($stores->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/store_control_center/all_stores.blade.php ENDPATH**/ ?>