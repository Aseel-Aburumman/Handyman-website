<?php $__env->startSection('content'); ?>
    <!--==============================
                                                                                                        Breadcumb
                                                                                                    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">All Shops</h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li>All Shops</li>
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
                        <h2 class="sec-title">Find Your Favorite Shop</h2>
                        <form action="<?php echo e(route('shops.index')); ?>" method="GET" class="d-flex mb-5">
                            <!-- Search Input -->
                            <input class="shop-search" type="text" name="search" class="form-control"
                                placeholder="Search by shop name" value="<?php echo e(request('search')); ?>">
                            <!-- Search Button -->
                            <button type="submit" class="btn btn-primary ms-2 searchBtn">Search</button>
                            <!-- Reset Button -->
                            <a href="<?php echo e(route('shops.index')); ?>" class="btn btn-secondary ms-2 resetBtn">Reset</a>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Existing Store List -->
            <div class="row gy-4">
                <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xxl-3 col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="box-img">
                                <img src="<?php echo e($store->image ? asset('store_logo_images/' . $store->image->name) : asset('assets/img/normal/why_1.jpg')); ?>"
                                    alt="<?php echo e($store->name); ?> logo"
                                    style="width: 100%; height: 200px; object-fit: cover; border-radius:10px;">
                            </div>
                            <br>
                            <h3 class="box-title"><a href="service-details.html"><?php echo e($store->name); ?></a></h3>
                            <div class="list-rating" style="color : #E2B93B;">
                                <?php
                                    $wholeStars = floor($store->rating);
                                    $halfStar = $store->rating - $wholeStars >= 0.5;
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
                                <span>(<?php echo e(number_format($store->rating, 1)); ?>)</span>
                            </div>
                            <a href="<?php echo e(route('Oneshops', ['shopId' => $store->id])); ?>" class="th-btn btn-sm">Shop now <i
                                    class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <!-- Pagination -->
            <div class="th-pagination text-center pt-50">
                <ul class="pagination">
                    <?php echo e($stores->onEachSide(1)->links('vendor.pagination.custom')); ?>

                </ul>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/shops/allshops.blade.php ENDPATH**/ ?>