<?php $__env->startSection('content'); ?>

<div class="pagetitle">
    <h1>Store Control Panel</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
            <li class="breadcrumb-item ">Store Control Center</li>
            <li class="breadcrumb-item active">Store Info Edit</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
     
     <?php if(session('success')): ?>
     <div class="alert alert-success">
         <?php echo e(session('success')); ?>

     </div>
 <?php endif; ?>
    <div class="row">
        <!-- Store Details Section -->
        <div class="col-lg-11">
            <div class="card">
                <div class="card-body profile-card pt-4">
                    <h2 class="card-title">Store Details</h2>
                    <div class="row mb-2">
                        <div class="col-lg-2 col-md-4 label">Store Name</div>
                        <div class="col-lg-4 col-md-8"><?php echo e($store->name ?? 'Not provided'); ?></div>
                        <div class="col-lg-2 col-md-4 label">Address</div>
                        <div class="col-lg-4 col-md-8"><?php echo e($store->location ?? 'Not provided'); ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-2 col-md-4 label">Contact Number</div>
                        <div class="col-lg-4 col-md-8"><?php echo e($store_owner->storeOwner->contact_number ?? 'Not provided'); ?></div>
                        <div class="col-lg-2 col-md-4 label">Certificate ID</div>
                        <div class="col-lg-4 col-md-8"><?php echo e($store_owner->storeOwner->certificate_id ?? 'Not provided'); ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-2 col-md-4 label">Store Description</div>
                        <div class="col-lg-4 col-md-8"><?php echo e($store->description ?? 'Not provided'); ?></div>
                        <div class="col-lg-2 col-md-4 label">Store Status</div>
                        <div class="col-lg-4 col-md-8"><?php echo e($store->status->name ?? 'Not provided'); ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-2 col-md-4 label">Store Rating</div>
                        <div class="col-lg-4 col-md-8"><?php echo e($store->rating ?? 'Not provided'); ?></div>
                    </div>

                    <!-- Suspend Store Button -->
                    <div class="row mt-4">
                        <div class="col-lg-12 text-center">
                            <?php if($store->status->name == 'Suspended'): ?>
                            <form action="<?php echo e(route('store_control_center.unsuspend_store', ['id' => $store->id])); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-success btn-lg">Unsuspend</button>
                            </form>
                        <?php else: ?>
                            <form action="<?php echo e(route('store_control_center.suspend_store', ['id' => $store->id])); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure you want to suspend this store?');">Suspend</button>
                            </form>
                        <?php endif; ?>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Flexbox container for equal height columns with margin -->
        <div  class="d-flex flex-wrap align-items-stretch ">

            <!-- Store Owner Info Section (Secondary) -->
            <div class="col-lg-4 me-2 mb-4"> <!-- Added me-4 for margin between sections -->
                <div class="card h-100"> <!-- h-100 ensures it stretches to full height -->
                    <div class="card-body profile-card pt-4 d-flex flex-column justify-content-center ">
                        <!-- Profile Image Column -->
                        <div class="col-lg-12 d-flex justify-content-center align-items-center">
                            <img src="<?php echo e($store_owner->image ? url('/user_images/' . $store_owner->image) : url('assets/img/profile-img.jpg')); ?>" alt="Profile" class="rounded-circle" width="150">
                        </div>
                        <h5 class="card-title">Store Owner Profile</h5>
                        <div class="row mb-2">
                            <div class="col-lg-4 col-md-4 label">Full Name</div>
                            <div class="col-lg-8 col-md-8"><?php echo e($store_owner->name); ?></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-4 col-md-4 label">Email</div>
                            <div class="col-lg-8 col-md-8"><?php echo e($store_owner->email); ?></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-4 col-md-4 label">Rating</div>
                            <div class="col-lg-8 col-md-8"><?php echo e($store_owner->storeOwner->rating ?? 'Not provided'); ?></div>
                        </div>

                        <!-- Edit/Delete Store Owner -->
                        <div class="row mt-4">
                            <div class="col-lg-12 text-center">
                                <!-- Edit Button -->
                                <a href="<?php echo e(route('admin.edit_store_owner', ['id' => $store_owner->id])); ?>" class="btn btn-primary btn-lg">
                                    <i class="fa-solid fa-pencil"></i> Edit
                                </a>
                                <!-- Delete Button -->
                                <form action="<?php echo e(route('admin.delete_store_owner', ['id' => $store_owner->id])); ?>" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this store owner?');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-lg">
                                        <i class="fa-solid fa-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Store Sales History -->
            <div class="col-lg-7 mb-4"> <!-- Added mb-4 for margin at the bottom -->
                <div class="card h-100"> <!-- h-100 ensures it stretches to full height -->
                    <div class="card-body">
                        <h5 class="card-title">Sales History <span>| Recent</span></h5>
                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total Amount</th>
                                    <th scope="col">Purchase Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $storePurchases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                                        <td><?php echo e($purchase->product->name); ?></td>
                                        <td><?php echo e($purchase->quantity_sold); ?></td>
                                        <td>$<?php echo e($purchase->total_amount); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($purchase->sale_date)->format('Y-m-d')); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <!-- Store Products -->
        <div class="col-lg-11">
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

    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/store_control_center/view_store.blade.php ENDPATH**/ ?>