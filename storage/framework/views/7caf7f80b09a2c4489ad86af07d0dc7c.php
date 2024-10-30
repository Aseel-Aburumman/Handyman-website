<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo e(__('messages.Dashboard')); ?></h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('customer.Home')); ?>"><?php echo e(__('messages.Home')); ?></a></li>
                    <li><?php echo e(__('messages.Dashboard')); ?></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="product-details space-extra-bottom">
        <div class="container">
            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn active" id="description-tab" data-bs-toggle="tab" href="#description"
                        role="tab" aria-controls="description"
                        aria-selected="true"><?php echo e(__('messages.AccountDetail')); ?></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab"
                        aria-controls="orders" aria-selected="false"><?php echo e(__('messages.orders')); ?></a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="products-tab" data-bs-toggle="tab" href="#products" role="tab"
                        aria-controls="products" aria-selected="false"><?php echo e(__('messages.MyProducts')); ?></a>
                </li>

                <li class="nav-item" role="presentation">
                    <form class="" action="<?php echo e(route('chat', ['receiverId' => $admin])); ?>" method="GET">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="nav-link th-btn "><?php echo e(__('messages.ChatCenter')); ?></button>
                    </form>
                    
                </li>
            </ul>

            <div class="tab-content" id="productTabContent">
                <!-- Account Details Tab -->
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <div class="profile-edit-wrapper">
                        <h2><?php echo e(__('messages.EditProfile')); ?></h2>
                        <form action="<?php echo e(route('storeowner.dashboard.update')); ?>" method="POST"
                            enctype="multipart/form-data" class="profile-edit-form">
                            <?php echo csrf_field(); ?>

                            <!-- Profile Image -->
                            <div class="profile-image-wrapper">
                                <div class="profile-image">
                                    <?php if($user->image): ?>
                                        <img src="<?php echo e(asset('storage/profile_images/' . $user->image)); ?>"
                                            alt="Profile Picture">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>"
                                            alt="Default Profile Picture">
                                    <?php endif; ?>
                                </div>
                                <label for="image"><?php echo e(__('messages.UploadPic')); ?></label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>

                            <!-- Name -->
                            <div class="d-flex justify-content-between">

                                <div style="margin-right:5px;" class="mr-2 w-50 form-group">
                                    <label for="name"><?php echo e(__('messages.Name')); ?></label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="<?php echo e($user->name); ?>" required>
                                </div>

                                <!-- Email -->
                                <div style="margin-left:5px;" class=" w-50 form-group">
                                    <label for="email"><?php echo e(__('messages.Email')); ?></label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="<?php echo e($user->email); ?>" required>
                                </div>
                            </div>


                            <div class="d-flex justify-content-between">
                                <!-- Phone -->
                                <div style="margin-right:5px;" class="mr-2 w-50 form-group">
                                    <label for="phone"><?php echo e(__('messages.Phone')); ?></label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        value="<?php echo e($user->delivery_info->phone ?? ' '); ?>" required>
                                </div>
                                <!-- building_no -->
                                <div style="margin-left:5px;" class=" w-50 form-group">
                                    <label for="building_no"><?php echo e(__('messages.BuildingNo')); ?></label>
                                    <input type="text" name="building_no" id="building_no" class="ml-2 form-control"
                                        value="<?php echo e($user->delivery_info->building_no ?? ' '); ?>" required>
                                </div>
                            </div>

                            <div class="d-flex">

                                <!-- City -->
                                <div style="margin-right:5px;" class="w-50 form-group">
                                    <label for="city"><?php echo e(__('messages.City')); ?></label>
                                    <input type="text" name="city" id="city" class="form-control"
                                        value="<?php echo e($user->delivery_info->city ?? ' '); ?>" required>
                                </div>

                                <!-- Location -->
                                <div style="margin-left:5px;" class="w-50 form-group">
                                    <label for="location"><?php echo e(__('messages.Location')); ?></label>
                                    <input type="text" name="location" id="location" class="form-control"
                                        value="<?php echo e($user->delivery_info->location ?? ' '); ?>" required>
                                </div>
                            </div>


                            <h6 class="mb-0">Store Detail Profile</h6>
                            <hr>
                            <div class="d-flex">

                                <!-- store_name -->
                                <div style="margin-right:5px;" class="w-50 form-group">
                                    <label for="store_name"><?php echo e(__('messages.StoreNameEn')); ?></label>
                                    <input type="text" name="store_name" id="store_name" class="form-control"
                                        value="<?php echo e($storeowner->store_name ?? '0 '); ?>" required>
                                </div>

                                <!-- store_name_ar -->
                                <div style="margin-left:5px;" class="w-50 form-group">
                                    <label for="store_name_ar"><?php echo e(__('messages.StoreNameAr')); ?></label>
                                    <input type="text" name="store_name_ar" id="store_name_ar" class="form-control"
                                        value="<?php echo e($storeowner->store_name_ar ?? ' '); ?>" required>
                                </div>
                            </div>

                            <div class="d-flex">

                                <!-- contact_number -->
                                <div style="margin-right:5px;" class="w-50 form-group">
                                    <label for="contact_number"><?php echo e(__('messages.ContactNumber')); ?></label>
                                    <input type="text" name="contact_number" id="contact_number" class="form-control"
                                        value="<?php echo e($storeowner->contact_number ?? '0 '); ?>" required>
                                </div>

                                <!-- location -->
                                <div style="margin-left:5px;" class="w-50 form-group">
                                    <label for="location_sotre"><?php echo e(__('messages.StoreLocation')); ?></label>
                                    <input type="text" name="location_sotre" id="location_sotre" class="form-control"
                                        value="<?php echo e($store->location ?? ' '); ?>" required>
                                </div>
                            </div>

                            <div class="d-flex">

                                <!-- address_ar -->
                                <div style="margin-right:5px;" class="w-50 form-group">
                                    <label for="address_ar"><?php echo e(__('messages.AddressAr')); ?></label>
                                    <input type="text" name="address_ar" id="address_ar" class="form-control"
                                        value="<?php echo e($storeowner->address_ar ?? '0 '); ?>" required>
                                </div>

                                <!-- address -->
                                <div style="margin-left:5px;" class="w-50 form-group">
                                    <label for="address"><?php echo e(__('messages.AddressEn')); ?></label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        value="<?php echo e($storeowner->address ?? ' '); ?>" required>
                                </div>
                            </div>


                            <!-- description -->
                            <div class="form-group mb-0">
                                <label for="description"><?php echo e(__('messages.DescriptionEn')); ?></label>
                                <input type="text" name="description" id="description" class="form-control"
                                    value="<?php echo e($store->description ?? ' '); ?>" required>
                            </div>
                            <!-- description ar -->
                            <div class="form-group">
                                <label for="description_ar"><?php echo e(__('messages.DescriptionAr')); ?></label>
                                <input type="text" name="description_ar" id="description_ar" class="form-control"
                                    value="<?php echo e($store->description_ar ?? ' '); ?>" required>
                            </div>



                            <button type="submit" class="th-btn"><?php echo e(__('messages.SaveChanges')); ?></button>

                            

                        </form>
                    </div>
                </div>
                <!-- products Details Tab -->
                <div class="tab-pane fade show " id="products" role="tabpanel" aria-labelledby="products-tab">
                    
                    <!-- Products Tab -->
                    <div class="tab-pane fade show active" id="products" role="tabpanel"
                        aria-labelledby="products-tab">
                        <h2><?php echo e(__('messages.ManageProducts')); ?></h2>

                        <!-- Add New Product Button -->
                        <button id="toggleAddProductForm"
                            class="btn btn-primary mb-4"><?php echo e(__('messages.NewProduct')); ?></button>

                        <!-- Add Product Form -->
                        <div id="addProductForm" style="display: none;" class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e(__('messages.NewProduct')); ?></h5>
                                <form action="<?php echo e(route('storeowner.products.store')); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="name"><?php echo e(__('messages.ProductNameEn')); ?></label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name_ar"><?php echo e(__('messages.ProductNameAr')); ?></label>
                                        <input type="text" name="name_ar" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description"><?php echo e(__('messages.DescriptionEn')); ?></label>
                                        <textarea name="description" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="description_ar"><?php echo e(__('messages.DescriptionAr')); ?></label>
                                        <textarea name="description_ar" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price"><?php echo e(__('messages.Price')); ?></label>
                                        <input type="number" name="price" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="stock_quantity"><?php echo e(__('messages.StockQuantity')); ?></label>
                                        <input type="number" name="stock_quantity" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image"><?php echo e(__('messages.ProductImage')); ?></label>
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-success"><?php echo e(__('messages.AddProduct')); ?></button>
                                </form>
                            </div>
                        </div>

                        <!-- Product List -->
                        <h5 class="mb-3"><?php echo e(__('messages.MyProducts')); ?></h5>
                        <table class="  table table-bordered table-wrapper">
                            <thead>
                                <tr>
                                    <th><?php echo e(__('messages.Image')); ?></th>
                                    <th><?php echo e(__('messages.Name')); ?></th>
                                    <th><?php echo e(__('messages.Description')); ?></th>
                                    <th><?php echo e(__('messages.Price')); ?></th>
                                    <th><?php echo e(__('messages.Stock')); ?></th>
                                    <th><?php echo e(__('messages.Actions')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <!-- Display Product Image -->
                                        <td data-label="Image">

                                            <?php if($product->image): ?>
                                                <img src="<?php echo e(asset('storage/product_images/' . $product->image->name)); ?>"
                                                    alt="Product Image" width="80" height="80">
                                            <?php else: ?>
                                                <span><?php echo e(__('messages.NoImage')); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td data-label="Name"><?php echo e($product->name); ?> / <?php echo e($product->name_ar); ?></td>
                                        <td data-label="Description" style="width:300px"><?php echo e($product->description); ?> /
                                            <?php echo e($product->description_ar); ?></td>
                                        <td data-label="Price"><?php echo e($product->price); ?></td>
                                        <td data-label="Stock quantity"><?php echo e($product->stock_quantity); ?></td>
                                        <td data-label="Action">
                                            <!-- Edit Button -->
                                            <button class="btn btn-info"
                                                onclick="editProduct(<?php echo e($product->id); ?>)"><?php echo e(__('messages.Edit')); ?></button>

                                            <!-- Delete Form -->
                                            <form action="<?php echo e(route('storeowner.products.destroy', $product->id)); ?>"
                                                method="POST" style="display:inline-block;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit"
                                                    class="btn btn-danger"><?php echo e(__('messages.Delete')); ?></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        <!-- Pagination Links -->
                        <div class="d-flex justify-content-center">
                            <?php echo e($products->links()); ?>

                        </div>
                    </div>

                    <!-- Edit Product Modal -->
                    <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog"
                        aria-labelledby="editProductModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="editProductForm" action="" method="POST"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="_method" value="POST">
                                        <div class="form-group">
                                            <label for="editName"><?php echo e(__('messages.ProductNameAr')); ?></label>
                                            <input type="text" name="name" id="editName" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editNameAr"><?php echo e(__('messages.ProductNameEn')); ?></label>
                                            <input type="text" name="name_ar" id="editNameAr" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editDescription"><?php echo e(__('messages.DescriptionEn')); ?></label>
                                            <textarea name="description" id="editDescription" class="form-control" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="editDescriptionAr"><?php echo e(__('messages.DescriptionAr')); ?></label>
                                            <textarea name="description_ar" id="editDescriptionAr" class="form-control" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="editPrice"><?php echo e(__('messages.Price')); ?></label>
                                            <input type="number" name="price" id="editPrice" class="form-control"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editStockQuantity"><?php echo e(__('messages.StockQuantity')); ?></label>
                                            <input type="number" name="stock_quantity" id="editStockQuantity"
                                                class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editImage"><?php echo e(__('messages.ProductImage')); ?></label>
                                            <input type="file" name="image" id="editImage" class="form-control">
                                        </div>
                                        <button type="submit"
                                            class="btn btn-success"><?php echo e(__('messages.UpdateProduct')); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- JavaScript to Toggle the Form -->
                    <script>
                        document.getElementById('toggleAddProductForm').addEventListener('click', function() {
                            var form = document.getElementById('addProductForm');
                            form.style.display = form.style.display === 'none' ? 'block' : 'none';
                        });

                        function editProduct(productId) {
                            // Fetch the product data using AJAX
                            fetch(`/storeowner/products/${productId}/edit`)
                                .then(response => response.json())
                                .then(data => {
                                    // Fill in the form fields with the product data
                                    document.getElementById('editName').value = data.name;
                                    document.getElementById('editNameAr').value = data.name_ar;
                                    document.getElementById('editDescription').value = data.description;
                                    document.getElementById('editDescriptionAr').value = data.description_ar;
                                    document.getElementById('editPrice').value = data.price;
                                    document.getElementById('editStockQuantity').value = data.stock_quantity;

                                    // Set the action of the form to the update route
                                    document.getElementById('editProductForm').action = `/storeowner/products/${productId}`;

                                    // Show the modal
                                    $('#editProductModal').modal('show');
                                })
                                .catch(error => console.error('Error fetching product data:', error));
                        }
                    </script>
                </div>

                <!-- order Tab -->
                <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    
                    <div class="tab-content" id="productTabContent">
                        <!-- Orders Tab -->
                        <div class="tab-pane fade show active" id="orders" role="tabpanel"
                            aria-labelledby="orders-tab">
                            <h2><?php echo e(__('messages.SalesOrders')); ?></h2>
                            <?php $__empty_1 = true; $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $groupKey => $saleGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <?php
                                    [$saleDate, $userId] = explode('-', $groupKey);
                                    $totalAmount = $saleGroup->sum('total_amount'); // Sum total amounts for the group
                                    $user = $saleGroup->first()->user; // Get the user for this sale group
                                ?>
                                <!-- Card for each sale group -->
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-header d-flex justify-content-between">
                                        <h4 class="my-0 font-weight-normal">
                                            <?php echo e(__('messages.Orderfrom')); ?><?php echo e($user->name); ?> <?php echo e(__('messages.on')); ?>

                                            <?php echo e(\Carbon\Carbon::parse($saleDate)->format('F j, Y g:i A')); ?>

                                        </h4>
                                        <span class="custom-total">
                                            <?php echo e(__('messages.Total')); ?>: <?php echo e(__('messages.JD')); ?>

                                            <?php echo e(number_format($totalAmount, 2)); ?>

                                        </span>
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <?php $__currentLoopData = $saleGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <!-- Compact product details -->
                                                        <strong><?php echo e(__('messages.Product')); ?>:</strong>
                                                        <?php echo e($sale->product->name); ?>

                                                        <span class="text-muted">(ID: <?php echo e($sale->product_id); ?>)</span> -
                                                        <strong><?php echo e(__('messages.Quantity')); ?>:</strong>
                                                        <?php echo e($sale->quantity_sold); ?> -
                                                        <strong><?php echo e(__('messages.Total')); ?>:</strong>
                                                        <?php echo e(__('messages.JD')); ?>

                                                        <?php echo e(number_format($sale->total_amount, 2)); ?>

                                                    </div>
                                                    <div class="d-flex ">
                                                        <div style="margin-right:10px;" class="mr-3 custom-status">
                                                            <strong><?php echo e(__('messages.Status')); ?>:</strong>
                                                            <?php if($sale->status_id == 16): ?>
                                                                <button
                                                                    class="mr-3 statusBtn1 custom-btn-info"><?php echo e($sale->status->name); ?></button>
                                                            <?php elseif($sale->status_id == 17): ?>
                                                                <button
                                                                    class="mr-3 statusBtn1 custom-btn-primary"><?php echo e($sale->status->name); ?></button>
                                                            <?php elseif($sale->status_id == 18): ?>
                                                                <button
                                                                    class="mr-3 statusBtn1 custom-btn-success"><?php echo e($sale->status->name); ?></button>
                                                            <?php elseif($sale->status_id == 19): ?>
                                                                <button
                                                                    class="mr-3 statusBtn1 custom-btn-danger"><?php echo e($sale->status->name); ?></button>
                                                            <?php endif; ?>
                                                            
                                                        </div>
                                                        <!-- Action Buttons based on status -->
                                                        <div>
                                                            <?php if($sale->status_id == 16): ?>
                                                                <!-- Pending Confirmation: Show Confirm and Cancel Buttons -->
                                                                <form
                                                                    action="<?php echo e(route('storeowner.sale.update', $sale->id)); ?>"
                                                                    method="POST" class="d-inline-block">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('POST'); ?>
                                                                    <input type="hidden" name="status_id"
                                                                        value="17"> <!-- Confirm -->
                                                                    <button type="submit"
                                                                        class="btn btn-success"><?php echo e(__('messages.Confirm')); ?></button>
                                                                </form>
                                                                <form
                                                                    action="<?php echo e(route('storeowner.sale.update', $sale->id)); ?>"
                                                                    method="POST" class="d-inline-block">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('POST'); ?>
                                                                    <input type="hidden" name="status_id"
                                                                        value="19"> <!-- Cancel -->
                                                                    <button type="submit"
                                                                        class="btn btn-danger"><?php echo e(__('messages.Cancel')); ?></button>
                                                                </form>
                                                            <?php elseif($sale->status_id == 17): ?>
                                                                <!-- Approved: Show Delivered and Cancel Buttons -->
                                                                <form
                                                                    action="<?php echo e(route('storeowner.sale.update', $sale->id)); ?>"
                                                                    method="POST" class="d-inline-block">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('POST'); ?>
                                                                    <input type="hidden" name="status_id"
                                                                        value="18"> <!-- Delivered -->
                                                                    <button type="submit"
                                                                        class="btn btn-primary"><?php echo e(__('messages.Delivereds')); ?></button>
                                                                </form>
                                                                <form
                                                                    action="<?php echo e(route('storeowner.sale.update', $sale->id)); ?>"
                                                                    method="POST" class="d-inline-block">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('POST'); ?>
                                                                    <input type="hidden" name="status_id"
                                                                        value="19"> <!-- Cancel -->
                                                                    <button type="submit"
                                                                        class="btn btn-danger"><?php echo e(__('messages.Cancel')); ?></button>
                                                                </form>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p>No sales records found.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <style>
            /* Basic table styling */
            table {
                width: 100%;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 10px;
                border: 1px solid #ddd;
                text-align: left;
            }

            /* Responsive table */
            .table-wrapper {
                background-color: #f9f9f9;
                overflow-x: auto;
                border-radius: 10px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                /* Enable horizontal scrolling on small screens */
            }

            @media (max-width: 768px) {

                table,
                thead,
                tbody,
                th,
                td,
                tr {
                    display: block;
                    max-width: 100%;
                    /* Adjust as needed */
                    overflow-wrap: break-word;
                }

                thead tr {
                    display: none;
                    /* Hide the header on small screens */
                }

                tr {
                    margin-bottom: 10px;
                    border-bottom: 2px solid #ddd;
                    word-wrap: break-word;
                    white-space: normal;
                }

                td {
                    text-align: right;
                    padding-left: 50%;
                    position: relative;
                }

                td::before {
                    content: attr(data-label);
                    /* Add a label for each data cell */
                    position: absolute;
                    left: 10px;
                    width: calc(50% - 20px);
                    text-align: left;
                    font-weight: bold;
                }
            }
        </style>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/shops/dashboard.blade.php ENDPATH**/ ?>