<?php $__env->startSection('content'); ?>

<div class="pagetitle">
    <h1>Store Details</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
            <li class="breadcrumb-item">Stores Control Center</li>
            <li class="breadcrumb-item active">Reported Store</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            
            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>


<div class="row d-flex align-items-stretch">
    
    <div class="col-lg-6 d-flex">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Store Report</h5>
                <p><?php echo e($storeReport->message); ?></p>
                <p><strong>Reported By:</strong> <?php echo e($storeReport->user->name); ?></p>
            </div>
        </div>
    </div>

    
    <div class="col-lg-6 d-flex">
        <div class="card w-100">
            <div class="card-body">
                <h5 class="card-title">Lastest Sales</h5>
                <ul class="list-group">
                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            <strong><?php echo e($review->user->name); ?>:</strong> <?php echo e($review->product->name); ?>

                            
                            <br>
                            <small><?php echo e(\Carbon\Carbon::parse($review->created_at)->diffForHumans()); ?></small>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
</div>


            
            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                        <h5 class="card-title">Products in Store <span>| Recent</span></h5>
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Date Added</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $store->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                                        <td><?php echo e($product->name); ?></td>
                                        <td><?php echo e($product->category->name ?? 'N/A'); ?></td>
                                        <td>$<?php echo e($product->price); ?></td>
                                        <td><?php echo e($product->stock); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($product->created_at)->format('Y-m-d')); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            
            

            

            <div class="d-flex flex-row justify-content-center">
                <form action="<?php echo e(route('store_control_center.clearReportStore', $store->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>  
                    <button type="submit" class="btn btn-success me-2">Clear the report</button>
                </form>

                <?php if($store->status->name == 'Suspended'): ?>
                <form action="<?php echo e(route('store_control_center.unsuspend_store', ['id' => $store->id])); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-success ">Unsuspend and notify the client</button>
                </form>
            <?php else: ?>
                <form action="<?php echo e(route('store_control_center.suspend_store', ['id' => $store->id])); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-danger " onclick="return confirm('Are you sure you want to suspend this store?');">Suspend the Store and notify the client</button>
                </form>
            <?php endif; ?>

                
            </div>


            

        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/store_control_center/resolve_store.blade.php ENDPATH**/ ?>