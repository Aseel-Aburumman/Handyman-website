<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo e(__('messages.AllProduct')); ?></h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.Home')); ?></a></li>

                    <li<?php echo e(__('messages.AllProduct')); ?>< /li>
                </ul>
            </div>
        </div>
    </div>












    <!-- Search Section -->
    <section class="overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-md-10">
                    <div class="title-area text-center">
                        <h2 class="sec-title"><?php echo e(__('messages.shopDetailTitle')); ?></h2>
                        <form action="<?php echo e(route('products.index')); ?>" method="GET" class="d-flex mb-5">
                            <!-- Search Input -->
                            <input class="shop-search" type="text" name="search" class="form-control"
                                placeholder="Search by shop name" value="<?php echo e(request('search')); ?>">
                            <!-- Search Button -->
                            <button type="submit"
                                class="btn btn-primary ms-2 searchBtn"><?php echo e(__('messages.Search')); ?></button>
                            <!-- Reset Button -->
                            <a href="<?php echo e(route('products.index')); ?>"
                                class="btn btn-secondary ms-2 resetBtn"><?php echo e(__('messages.Reset')); ?></a>
                        </form>
                    </div>
                </div>
            </div>


            <section class=" space-extra-bottom">
                <div class="container">

                    <div class="row gy-40">



                        <!-- Your blade template with products -->
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="<?php echo e($product->image ? asset('storage/product_images/' . $product->image->name) : asset('assets/img/product/product_1_2.png')); ?>"
                                            alt="<?php echo e($product->name); ?> pic">
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i
                                                    class="far fa-eye"></i></a>

                                            <?php if(Auth::check()): ?>
                                                <!-- If the user is logged in, show the Add to Cart button -->
                                                <form id="add-to-cart-form-<?php echo e($product->id); ?>" class="add-to-cart-form">
                                                    <?php echo csrf_field(); ?>
                                                    <!-- This directive outputs a hidden input containing the CSRF token -->
                                                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                                    <input type="hidden" name="store_id" value="<?php echo e($product->store_id); ?>">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <button type="button" class="icon-btn add-to-cart-btn"
                                                        data-product-id="<?php echo e($product->id); ?>"
                                                        data-store-id="<?php echo e($product->store_id); ?>">
                                                        <i class="fa-solid fa-cart-plus"></i>
                                                    </button>
                                                </form>
                                            <?php else: ?>
                                                <!-- If the user is not logged in, redirect to the login page -->
                                                <a href="<?php echo e(route('login')); ?>" class="icon-btn"><i
                                                        class="fa-solid fa-cart-plus"></i></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <style>
                                        .product-img {
                                            width: 300px;
                                            /* Set the width of the container */
                                            height: 300px;
                                            /* Set the height of the container */
                                            overflow: hidden;
                                            /* Hide overflow if image is too large */
                                            position: relative;
                                            /* Ensure that content inside it is positioned relative to it */
                                        }

                                        .product-img img {
                                            width: 100%;
                                            /* Make sure the image scales to the width of the container */
                                            height: 100%;
                                            /* Make sure the image scales to the height of the container */
                                            object-fit: contain;
                                            /* Cover the entire area of the container without distortion */
                                            display: block;
                                            /* Removes the default inline spacing for images */
                                        }
                                    </style>
                                    <div class="product-content">
                                        <!-- Star Rating -->
                                        <div class="list-rating" style="color : #E2B93B;">
                                            <?php
                                                $wholeStars = floor($product->rating);
                                                $fraction = $product->rating - $wholeStars;
                                                $halfStar = $product->rating - $wholeStars >= 0.5;
                                                $emptyStars = 5 - $wholeStars - ($halfStar ? 1 : 0);
                                            ?>

                                            <?php for($i = 0; $i < $wholeStars; $i++): ?>
                                                <i class="fas fa-star filled"></i>
                                            <?php endfor; ?>

                                            <?php if($halfStar): ?>
                                                <i class="fas fa-star-half-alt filled"></i>
                                            <?php endif; ?>

                                            <?php for($i = 0; $i < $emptyStars; $i++): ?>
                                                <i class="far fa-star"></i>
                                            <?php endfor; ?>

                                            <span>(<?php echo e(number_format($product->rating, 1)); ?>)</span>
                                        </div>
                                        <h3 class="product-title"><a
                                                href="<?php echo e(route('product', ['productId' => $product->id])); ?>"><?php echo e($product->name); ?></a>
                                        </h3>
                                        <span class="price"><?php echo e(__('messages.JD')); ?> <?php echo e($product->price); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <script>
                            // Add event listeners to all "Add to Cart" buttons
                            document.querySelectorAll('.add-to-cart-btn').forEach(function(btn) {
                                btn.addEventListener('click', function() {
                                    let productId = btn.getAttribute('data-product-id');
                                    let storeId = btn.getAttribute('data-store-id');

                                    // Find the form that this button belongs to
                                    let form = btn.closest('form');

                                    // Retrieve the CSRF token from the form's hidden input field
                                    let csrfToken = form.querySelector('input[name="_token"]').value;

                                    // Call the function to handle the Add to Cart logic
                                    handleAddToCart(productId, storeId, csrfToken);
                                });
                            });

                            // Function to handle Add to Cart logic
                            function handleAddToCart(productId, storeId, csrfToken) {
                                // Log the product ID and store ID for debugging
                                console.log('Product ID:', productId, 'Store ID:', storeId);

                                // Prepare the form data
                                let formData = new FormData();
                                formData.append('product_id', productId);
                                formData.append('store_id', storeId);
                                formData.append('quantity', 1); // Default quantity is 1

                                // Include the CSRF token
                                formData.append('_token', csrfToken);

                                // Perform the AJAX request to add the product to the cart
                                fetch('/cart/addsmaller', {
                                        method: 'POST',
                                        body: formData,
                                        headers: {
                                            // The CSRF token is now included in the form data, no need for extra headers
                                        }
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.status === 'warning') {
                                            // If there are items from another store, ask the user to confirm
                                            if (confirm(data.message)) {
                                                // Clear the cart if the user confirms
                                                fetch('/cart/clear', {
                                                        method: 'POST',
                                                        headers: {
                                                            'X-CSRF-TOKEN': csrfToken // Send the CSRF token for the clear cart request
                                                        }
                                                    })
                                                    .then(response => response.json())
                                                    .then(clearData => {
                                                        if (clearData.status === 'success') {
                                                            // Now add the product to the cart after clearing
                                                            fetch('/cart/add', {
                                                                    method: 'POST',
                                                                    body: formData
                                                                })
                                                                .then(response => response.json())
                                                                .then(data => {
                                                                    alert(data.message); // Notify the user
                                                                });
                                                        }
                                                    });
                                            }
                                        } else if (data.status === 'success') {
                                            alert(data.message); // Notify the user that the item was added
                                        }
                                    });
                            }
                        </script>



                    </div>
                    <!-- Pagination -->
                    <div class="th-pagination text-center pt-50">
                        <ul class="pagination">
                            <?php echo e($products->onEachSide(1)->links('vendor.pagination.custom')); ?>

                        </ul>
                    </div>
                </div>
            </section>





        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/shops/allproducts.blade.php ENDPATH**/ ?>