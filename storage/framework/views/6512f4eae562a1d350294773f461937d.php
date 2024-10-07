<?php $__env->startSection('content'); ?>
    <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Breadcumb
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">All Products</h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>

                    <li>All Products</li>
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
                        <h2 class="sec-title">Shop All Your Needs</h2>
                        <form action="<?php echo e(route('products.index')); ?>" method="GET" class="d-flex mb-5">
                            <!-- Search Input -->
                            <input class="shop-search" type="text" name="search" class="form-control"
                                placeholder="Search by shop name" value="<?php echo e(request('search')); ?>">
                            <!-- Search Button -->
                            <button type="submit" class="btn btn-primary ms-2 searchBtn">Search</button>
                            <!-- Reset Button -->
                            <a href="<?php echo e(route('products.index')); ?>" class="btn btn-secondary ms-2 resetBtn">Reset</a>
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
                                                <form action="<?php echo e(route('cart.add')); ?>" method="POST"
                                                    class="add-to-cart-form">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                                    <input type="hidden" name="store_id" value="<?php echo e($product->store_id); ?>">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <!-- Default quantity is 1 -->
                                                    <button type="submit" class="icon-btn"><i
                                                            class="fa-solid fa-cart-plus"></i></button>
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
                                        <span class="price">JD <?php echo e($product->price); ?></span>
                                    </div>
                                </div>
                            </div>
                            <script>
                                document.querySelectorAll('.add-to-cart-form').forEach(function(form) {
                                    form.addEventListener('submit', function(event) {
                                        event.preventDefault(); // Prevent default form submission

                                        var formData = new FormData(this);

                                        fetch('<?php echo e(route('cart.add')); ?>', {
                                                method: 'POST',
                                                headers: {
                                                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
                                                    'Accept': 'application/json',
                                                },
                                                body: formData
                                            })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.status === 'error') {
                                                    // Show the confirmation dialog if there is an error
                                                    if (confirm(data.message)) {
                                                        // If the user confirms, reset the cart and add the new product
                                                        fetch('<?php echo e(route('cart.resetAndAdd')); ?>', {
                                                                method: 'POST',
                                                                headers: {
                                                                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
                                                                    'Accept': 'application/json',
                                                                },
                                                                body: formData
                                                            })
                                                            .then(response => response.json())
                                                            .then(data => {
                                                                alert(data.message);
                                                            });
                                                    }
                                                } else {
                                                    // Success, the product was added to the cart
                                                    alert(data.message);
                                                }
                                            });
                                    });
                                });
                            </script>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



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