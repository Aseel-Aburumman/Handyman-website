          

<?php $__env->startSection('content'); ?>


    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
          <li class="breadcrumb-item ">User Control Center</li>
          <li class="breadcrumb-item ">List of Store Owners</li>
          <li class="breadcrumb-item active">Store Owner info edit</li>
        </ol>
      </nav>
    </div>

    

    <section class="section dashboard">
      <div class="row">




        <div class="col-lg-12">
            <div class="card">
                <div class="card-body profile-card pt-4">

                    <div class="row w-100">
                        <!-- Profile Image Column -->
                        <div class="col-lg-4 d-flex justify-content-center align-items-center">
                            <img src="<?php echo e($store_owner->image ? url('/user_images/' . $store_owner->image) : url('assets/img/profile-img.jpg')); ?>" alt="Profile" class="rounded-circle" width="150">
                        </div>

                        <!-- Profile Information Column -->
                        <div class="col-lg-8">
                            <h2><?php echo e($store_owner->name); ?></h2>

                            <div class="tab-content pt-2">
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row mb-2">
                                        <div class="col-lg-4 col-md-4 label">Full Name</div>
                                        <div class="col-lg-8 col-md-8"><?php echo e($store_owner->name); ?></div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-lg-4 col-md-4 label">Address</div>
                                        <div class="col-lg-8 col-md-8"><?php echo e($deliveryInfo->building_no ?? 'Not provided'); ?>, <?php echo e($deliveryInfo->location ?? 'Not provided'); ?>, <?php echo e($deliveryInfo->city ?? 'Not provided'); ?></div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-lg-4 col-md-4 label">Phone</div>
                                        <div class="col-lg-8 col-md-8"><?php echo e($deliveryInfo->phone ?? 'Not provided'); ?></div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-lg-4 col-md-4 label">Email</div>
                                        <div class="col-lg-8 col-md-8"><?php echo e($store_owner->email); ?></div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-lg-4 col-md-4 label">Rating</div>
                                        <div class="col-lg-8 col-md-8"><?php echo e($store_owner->storeOwner->rating ?? 'Not provided'); ?></div>
                                    </div>

                                    <h5 class="card-title">Store Details</h5>

                                    <div class="row mb-2">
                                        <div class="col-lg-4 col-md-4 label">Store Name</div>
                                        <div class="col-lg-8 col-md-8"><?php echo e($store->name ?? 'Not provided'); ?></div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-lg-4 col-md-4 label">Contact Number</div>
                                        <div class="col-lg-8 col-md-8"><?php echo e($store_owner->storeOwner->contact_number ?? 'Not provided'); ?></div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-lg-4 col-md-4 label">Address</div>
                                        <div class="col-lg-8 col-md-8"><?php echo e($store->location ?? 'Not provided'); ?></div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-lg-4 col-md-4 label">Certificate Id</div>
                                        <div class="col-lg-8 col-md-8"><?php echo e($store_owner->storeOwner->certificate_id ?? 'Not provided'); ?></div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-lg-4 col-md-4 label">Description</div>
                                        <div class="col-lg-8 col-md-8"><?php echo e($store->description ?? 'Not provided'); ?></div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-lg-4 col-md-4 label">Status</div>
                                        <div class="col-lg-8 col-md-8"><?php echo e($store->status_id ?? 'Not provided'); ?></div>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-lg-4 col-md-4 label">Store Rating</div>
                                        <div class="col-lg-8 col-md-8"><?php echo e($store->rating ?? 'Not provided'); ?></div>
                                    </div>

                                    <!-- Stylish Button for Chat Center, Edit, and Delete -->
                                    <div class="row mt-4">
                                        <div class="col-lg-12 text-center">
                                            <!-- Go to Chat Center Button -->
                                            <a href="<?php echo e(route('admin.dashboard', ['id' => $store_owner->id])); ?>" class="btn btn-primary btn-lg">
                                                <i class="bi bi-chat-dots"></i> Go to Chat Center
                                            </a>

                                            <!-- Edit Button -->
                                            <a href="<?php echo e(route('admin.edit_store_owner', ['id' => $store_owner->id])); ?>" class="btn btn-primary btn-lg">
                                                <i class="fa-solid fa-pencil"></i> Edit
                                            </a>

                                            <!-- Delete Button -->
                                            <form action="<?php echo e(route('admin.delete_store_owner', ['id' => $store_owner->id])); ?>" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this store owner?');">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-primary btn-lg">
                                                    <i class="fa-solid fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Stylish Button -->
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

      </div>
<div class="row">

<div class="col-6">
    <div class="card recent-sales overflow-auto">
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
                            <th scope="row"><a href="#">#<?php echo e($loop->iteration); ?></a></th>
                            <td><a href="#" class="text-primary"><?php echo e($purchase->product->name); ?></a></td>
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
<div class="col-6">
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

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/view_store_owner.blade.php ENDPATH**/ ?>