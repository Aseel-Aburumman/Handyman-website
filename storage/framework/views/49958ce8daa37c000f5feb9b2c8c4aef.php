<?php $__env->startSection('content'); ?>
    <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Breadcumb
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo e($product->name); ?> Detail</h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li><a href="<?php echo e(route('products.index')); ?>">All Product</a></li>

                    <li><?php echo e($product->name); ?></li>
                </ul>
            </div>
        </div>
    </div>


    <section class="product-details space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-60">
                <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img"><img
                                src="<?php echo e($product->image ? asset('storage/product_images/' . $product->image->name) : asset('assets/img/product/product_1_2.png')); ?>"
                                alt="Product Image"></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-about">
                        <?php if($product->discounted_price): ?>
                            <p class="price">JD <?php echo e($product->discounted_price); ?><del>JD <?php echo e($product->price); ?></del></p>
                        <?php else: ?>
                            <p class="price">JD{ { $product->price }}</p>
                        <?php endif; ?>
                        <h2 class="product-title"><?php echo e($product->name); ?></h2>

                        <div class="product-rating">
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
                            <a href="shop-details.html" class="woocommerce-review-link">(<span style="color :#666666;"
                                    class="count"><?php echo e($reviewCount); ?></span>
                                customer reviews)</a>
                        </div>
                        <p class="text"><?php echo e(\Illuminate\Support\Str::limit($product->description, 200, '...')); ?></p>
                        <div class="mt-2 link-inherit">
                            <p>
                                <strong class="text-title me-3">Availability:</strong>
                                <?php if($product->availability): ?>
                                    <span class="stock in-stock"><i class="far fa-check-square me-2 ms-1"></i>In
                                        Stock</span>
                                <?php else: ?>
                                    <span class="stock in-stock"><i class="far fa-square me-2 ms-1"></i>In
                                        Stock</span>
                                <?php endif; ?>
                            </p>
                        </div>
                        
                        <div class="actions">
                            <?php if($userId): ?>
                                <form action="<?php echo e(route('cart.add')); ?>" method="POST" id="add-to-cart-form">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                    <input type="hidden" name="store_id" value="<?php echo e($product->store_id); ?>">
                                    <div class="quantity">
                                        <input type="number" class="qty-input" step="1" min="1" max="100"
                                            name="quantity" value="1" title="Qty">
                                        <button class="quantity-plus qty-btn" type="button"><i
                                                class="fa-solid fa-chevron-up"></i></button>
                                        <button class="quantity-minus qty-btn" type="button"><i
                                                class="fa-solid fa-chevron-down"></i></button>
                                    </div>
                                    <button type="submit" class="th-btn">Add to Cart</button>
                                </form>
                                <script>
                                    document.getElementById('add-to-cart-form').addEventListener('submit', function(event) {
                                        event.preventDefault(); // Prevent default form submission

                                        var form = this;
                                        var formData = new FormData(form);

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
                                                                // Optionally redirect to the cart page or update the UI
                                                            });
                                                    }
                                                } else {
                                                    // Success, the product was added to the cart
                                                    alert(data.message);
                                                    // Optionally redirect to the cart page or update the UI
                                                }
                                            });
                                    });
                                </script>
                            <?php else: ?>
                                <span style="text-decoration:underline;">You have to be logged in to add this item to the
                                    cart</span>
                            <?php endif; ?>

                        </div>

                    </div>
                </div>
            </div>
            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="description-tab" data-bs-toggle="tab" href="#description" role="tab"
                        aria-controls="description" aria-selected="false">Product Description</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn active" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab"
                        aria-controls="reviews" aria-selected="true">Customer Reviews</a>
                </li>
            </ul>
            <div class="tab-content" id="productTabContent">
                <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <p><?php echo e($product->description); ?></p>
                </div>
                <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <div class="woocommerce-Reviews">
                        <div class="th-comments-wrap">
                            <ul class="comment-list" style="max-height: 400px; overflow-y: auto;">
                                <?php $__currentLoopData = $allreviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <li class="review th-comment-item">
                                        <div class="th-post-comment">
                                            <div class="comment-avater">
                                                <img src="<?php echo e($review->user->image ? asset('storage/profile_images/' . $review->user->image) : asset('assets/img/team/team_1_1.jpg')); ?>"
                                                    alt="Product Image">
                                            </div>
                                            <div class="comment-content">
                                                <h4 class="name"><?php echo e($review->user->name); ?></h4>
                                                <span class="commented-on"><i
                                                        class="far fa-clock"></i><?php echo e($review->created_at); ?></span>
                                                <span class="list-rating" style="color : #E2B93B;">
                                                    <?php
                                                        $wholeStars = floor($review->rating);
                                                        $fraction = $review->rating - $wholeStars;
                                                        $halfStar = $review->rating - $wholeStars >= 0.5;
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

                                                    <span>(<?php echo e(number_format($review->rating, 1)); ?>)</span>
                                                </span>
                                                <p class="text"><?php echo e($review->review); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <!-- Comment Form -->
                        <?php if($userId): ?>
                            <?php if(session('success')): ?>
                                <div class="alert alert-success">
                                    <?php echo e(session('success')); ?>

                                </div>
                            <?php endif; ?>


                            <div class="th-comment-form">
                                <div class="form-title">
                                    <h3 class="blog-inner-title">Add a review</h3>
                                </div>
                                <form action="<?php echo e(route('reviews.product')); ?>" method="POST">
                                    <?php echo csrf_field(); ?> <!-- Add CSRF token for security -->
                                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                    <input type="hidden" name="store_id" value="<?php echo e($product->store_id); ?>">


                                    <div class="row">
                                        <div class="form-group rating-select d-flex align-items-center">
                                            <label>Your Rating</label>
                                            <p class="stars">
                                                <span>
                                                    <a class="star-1" href="#" data-rating="1">1</a>
                                                    <a class="star-2" href="#" data-rating="2">2</a>
                                                    <a class="star-3" href="#" data-rating="3">3</a>
                                                    <a class="star-4" href="#" data-rating="4">4</a>
                                                    <a class="star-5" href="#" data-rating="5">5</a>
                                                </span>
                                            </p>
                                            <input type="hidden" name="rating" id="rating" value="5">
                                            <!-- Hidden field for rating -->
                                        </div>
                                        <div class="col-12 form-group">
                                            <textarea name="review" placeholder="Write a Message" class="form-control" required></textarea>
                                            <i class="text-title far fa-pencil-alt"></i>
                                        </div>
                                        <div class="col-12 form-group mb-0">
                                            <button type="submit" class="th-btn">Post Review</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <script>
                                // JavaScript to handle the rating click and store the value in the hidden field
                                document.querySelectorAll('.stars a').forEach(function(star) {
                                    star.addEventListener('click', function(event) {
                                        event.preventDefault();
                                        const rating = this.getAttribute('data-rating');
                                        document.getElementById('rating').value = rating;
                                    });
                                });
                            </script>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                          Related Product
                                                                                                                                                                                                                                                                                                                                                                                                                          ==============================-->
            <div class="space-extra-top mb-30">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-auto">
                        <h2 class="sec-title text-center">Related Products</h2>
                    </div>
                    <div class="col-md d-none d-sm-block">
                        <hr class="title-line">
                    </div>
                    <div class="col-md-auto d-none d-md-block">
                        <div class="sec-btn">
                            <div class="icon-box">
                                <button data-slider-prev="#productSlider1" class="slider-arrow default"><i
                                        class="fa-solid fa-arrow-left"></i></button>
                                <button data-slider-next="#productSlider1" class="slider-arrow default"><i
                                        class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper th-slider has-shadow" id="productSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Rproduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">

                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="<?php echo e($Rproduct->image ? asset('storage/product_images/' . $Rproduct->image->name) : asset('assets/img/product/product_1_2.png')); ?>"
                                            alt="<?php echo e($Rproduct->name); ?> pic">
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i
                                                    class="far fa-eye"></i></a>

                                            <?php if(Auth::check()): ?>
                                                <!-- If the user is logged in, show the Add to Cart button -->
                                                <form action="<?php echo e(route('cart.add')); ?>" method="POST"
                                                    class="add-to-cart-form">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="product_id" value="<?php echo e($Rproduct->id); ?>">
                                                    <input type="hidden" name="store_id"
                                                        value="<?php echo e($Rproduct->store_id); ?>">
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
                                        <div class="list-rating" style="color : #E2B93B;">
                                            <?php
                                                $wholeStars = floor($Rproduct->rating);
                                                $halfStar = $Rproduct->rating - $wholeStars >= 0.5;
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

                                            <span>(<?php echo e(number_format($Rproduct->rating, 1)); ?>)</span>
                                        </div>
                                        <h3 class="product-title"><a
                                                href="<?php echo e(route('product', ['productId' => $Rproduct->id])); ?>"><?php echo e($Rproduct->name); ?></a>
                                        </h3>
                                        <span class="price">JD <?php echo e($Rproduct->price); ?></span>
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


                                
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    </div>
                </div>
                <div class="d-block d-md-none mt-40 text-center">
                    <div class="icon-box">
                        <button data-slider-prev="#productSlider1" class="slider-arrow default"><i
                                class="far fa-arrow-left"></i></button>
                        <button data-slider-next="#productSlider1" class="slider-arrow default"><i
                                class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/shops/product_detail.blade.php ENDPATH**/ ?>