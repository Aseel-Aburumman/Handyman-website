<?php $__env->startSection('content'); ?>
    <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Breadcumb
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo e($store->name); ?> Profile</h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.Home')); ?>

                        </a></li>
                    <li><a href="<?php echo e(route('shops.index')); ?>"><?php echo e(__('messages.AllShops')); ?>

                        </a></li>

                    <li><?php echo e($store->name); ?></li>
                </ul>
            </div>
        </div>
    </div>


    <section class="product-details space-top space-extra-bottom">
        <div class="container">

            <div class="overflow-hidden " data-bg-src="<?php echo e(asset('assets/img/bg/about_bg_4.png')); ?>">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 mb-35 mb-xl-0">
                            <div class="img-box6">
                                <div class="img1">

                                    <div class="containerStore">
                                        <img src="<?php echo e(asset('assets/img/normal/about_4.png')); ?>" alt="Black Rectangle"
                                            class="black-rectangle">
                                        <img src="<?php echo e($store->image ? asset('store_logo_images/' . $store->image->name) : asset('assets/img/normal/why_1.jpg')); ?>"
                                            alt="Red Rectangle" class="red-rectangle">
                                    </div>

                                </div>
                                <div class="ratingBox year-box">
                                    <div class="box-number box-numberRating "><?php echo e($store->rating); ?>/5</div>
                                    <p class="box-text"><?php echo e(__('messages.Rating')); ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 text-center text-xl-start">
                            <div class="pe-xxl-5">
                                <div class="title-area mb-37">
                                    <span class="sub-title"><span class="line"></span>
                                        
                                        <i class="fa-solid fa-location-dot"></i>
                                        <?php echo e($store->location); ?></span>
                                    <h2 class="sec-title"><?php echo e($store->name); ?></h2>
                                    <p class="sec-text"><?php echo e($store->description); ?></p>
                                </div>
                                <div class="checklist list-one-column fw-regular">
                                    <ul>
                                        <li><?php echo e(__('messages.TotalReviews')); ?>

                                            <?php echo e($reviewCount); ?></li>


                                        <li><?php echo e(__('messages.TotalSales')); ?>

                                            <?php echo e($totalSales); ?></li>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search Section -->
            <section class="overflow-hidden space" id="service-sec">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-12 col-md-10">
                            <div class="title-area text-center">
                                <h2 class="sec-title"><?php echo e(__('messages.shopDetailTitle')); ?>

                                </h2>
                                <form action="<?php echo e(route('Oneshops', ['shopId' => $store->id])); ?>" method="GET"
                                    class="d-flex mb-5">
                                    <!-- Search Input -->
                                    <input class="shop-search" type="text" name="search" class="form-control"
                                        placeholder="Search by shop name" value="<?php echo e(request('search')); ?>">
                                    <!-- Search Button -->
                                    <button type="submit"
                                        class="btn btn-primary ms-2 searchBtn"><?php echo e(__('messages.Search')); ?>

                                    </button>
                                    <!-- Reset Button -->
                                    <a href="<?php echo e(route('Oneshops', ['shopId' => $store->id])); ?>"
                                        class="btn btn-secondary ms-2 resetBtn"><?php echo e(__('messages.Reset')); ?>

                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>


                    <section class=" space-extra-bottom">
                        <div class="container">

                            <div class="row gy-40">



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
                                                        <form id="add-to-cart-form-<?php echo e($product->id); ?>"
                                                            class="add-to-cart-form">
                                                            <?php echo csrf_field(); ?>
                                                            <!-- This directive outputs a hidden input containing the CSRF token -->
                                                            <input type="hidden" name="product_id"
                                                                value="<?php echo e($product->id); ?>">
                                                            <input type="hidden" name="store_id"
                                                                value="<?php echo e($product->store_id); ?>">
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
                                            <div class="product-content">
                                                <!-- Star Rating -->
                                                <div class="list-rating" style="color : #E2B93B;">
                                                    <?php
                                                        $wholeStars = floor($product->rating); // Number of filled stars
                                                        $fraction = $product->rating - $wholeStars; // Fractional part of the rating
                                                        $halfStar = $product->rating - $wholeStars >= 0.5; // Whether to show a half star
                                                        $emptyStars = 5 - $wholeStars - ($halfStar ? 1 : 0); // Number of empty stars
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
                                                    <!-- Display the exact rating -->
                                                </div>
                                                <h3 class="product-title"><a
                                                        href="<?php echo e(route('product', ['productId' => $product->id])); ?>"><?php echo e($product->name); ?></a>
                                                </h3>
                                                <span class="price"><?php echo e(__('messages.JD')); ?>

                                                    <?php echo e($product->price); ?></span>
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
        </div>

    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/shops/shop_detail.blade.php ENDPATH**/ ?>