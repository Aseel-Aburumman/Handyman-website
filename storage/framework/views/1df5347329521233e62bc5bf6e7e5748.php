<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper" data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo e($handyman->user->name); ?> <?php echo e(__('messages.Profile')); ?>

                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.Home')); ?>

                        </a></li>
                    <li><a href="<?php echo e(route('handymen.index')); ?>"><?php echo e(__('messages.taskerBtn')); ?>

                        </a></li>
                    <li><?php echo e(__('messages.HandymanDetail')); ?>

                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class=" overflow-hidden space" id="service-sec">
        <?php if(session('success')): ?>
            <div class="container alert alert-success">
                <?php echo session('success'); ?>

            </div>
        <?php endif; ?>
        <div class="container">

            <div class="row align-items-center">
                <div class="col-xl-6 mb-35 mb-xl-0">
                    <div class="img-box6">
                        <div class="img1">

                            <div class="containerStore">

                                <img src="<?php echo e(asset('assets/img/normal/about_4.png')); ?>" alt="Black Rectangle"
                                    class="black-rectangle">
                                <?php if($handyman->user && $handyman->user->image): ?>
                                    <img src="<?php echo e(asset('storage/profile_images/' . $handyman->user->image)); ?>"
                                        alt="<?php echo e($handyman->user->name); ?>" class="red-rectangle">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>"
                                        alt="<?php echo e($handyman->user->name); ?>" class="red-rectangle">
                                <?php endif; ?>

                            </div>

                        </div>
                        <div class="year-box">
                            <div class="box-number box-numberRating "><?php echo e($handyman->user->rating); ?>/5</div>
                            <p class="box-text"><?php echo e(__('messages.Rating')); ?>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center text-xl-start">
                    <div class="pe-xxl-5">
                        <div class="title-area mb-37">
                            <span class="sub-title"><span class="line"></span>

                                <i class="fa-solid fa-bolt"></i>
                                <?php echo e($handyman->experience); ?> <?php echo e(__('messages.yearexperince')); ?>

                            </span>
                            <h2 class="sec-title"><?php echo e($handyman->user->name); ?></h2>
                            <p class="sec-text"><?php echo e($handyman->bio); ?></p>
                        </div>
                        <div class="checklist list-one-column fw-regular">
                            <ul>
                                <li><?php echo e(__('messages.TotalReviews')); ?>

                                    : <?php echo e($reviewCount); ?></li>
                                <li><?php echo e(__('messages.TotalGigs')); ?>

                                    : <?php echo e($gigCount); ?></li>



                                

                            </ul>
                        </div>

                    </div>
                </div>
            </div>


            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="description-tab" data-bs-toggle="tab" href="#description" role="tab"
                        aria-controls="description" aria-selected="false"><?php echo e(__('messages.MySkills')); ?>

                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn active" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab"
                        aria-controls="reviews" aria-selected="true"><?php echo e(__('messages.MyReviews')); ?>

                    </a>
                </li>
            </ul>
            <div class="tab-content" id="productTabContent">
                <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                    
                    <div class="woocommerce-Reviews">

                        <div class="th-comments-wrap">

                            <ul class="comment-list" style="max-height: 400px; overflow-y: auto;">
                                <?php $__currentLoopData = $handyman->skillCertificates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $certificate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="review th-comment-item">
                                        <div class="th-post-comment">
                                            <i class="w-25 fa-solid fa-toolbox fa-2xl"
                                                style="color: #f47629; align-self: center;
    justify-self: center;
    text-align: center;
    font-size: 5rem;"></i>
                                            <div class="mt-1 w-75 comment-content">
                                                <!-- Skill Name and Description -->
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="name"><?php echo e($certificate->skill->name); ?></h4>
                                                    <?php if($certificate->status_id == 3): ?>
                                                        <button
                                                            class="statusBtn1 custom-btn-info"><?php echo e($certificate->status->name); ?></button>
                                                    <?php elseif($certificate->status_id == 2): ?>
                                                        <button
                                                            class="statusBtn1 custom-btn-warning"><?php echo e($certificate->status->name); ?></button>
                                                    <?php elseif($certificate->status_id == 1): ?>
                                                        <button
                                                            class="statusBtn1 custom-btn-success"><?php echo e($certificate->status->name); ?></button>
                                                    <?php endif; ?>
                                                </div>
                                                <p><strong><?php echo e(__('messages.Description')); ?>

                                                        : </strong><?php echo e($certificate->skill->description); ?></p>


                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
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


                    </div>
                </div>
            </div>



        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/handyman/clinent_perspective.blade.php ENDPATH**/ ?>