<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Notification Center</h1>
                <ul class="breadcumb-menu">
                    
                    
                    
                </ul>
            </div>
        </div>
    </div>

    <section class="product-details space-extra-bottom">
        <div class="container">

            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab"
                        aria-controls="orders" aria-selected="false">Notification</a>
                </li>
            </ul>

            <div class="tab-content" id="productTabContent">


                <!-- orders Details Tab -->
                <div class="tab-pane fade show active " id="orders" role="tabpanel" aria-labelledby="orders-tab">

                    <div class="card mb-4 shadow-sm"
                        style="border-radius: 10px; background-color: #fff; border-radius: 12px;">
                        <div class="card-header"
                            style="background-color: #F8F9FA; border-bottom: none; border-radius: 12px;">
                            <h5 class="card-title" style="font-weight: bold; color: #333; border-radius: 12px;">
                                Notifications</h5>
                        </div>
                        <div class="card-body" style="padding: 1.5rem;">
                            <?php if($notifications && $notifications->count() > 0): ?>
                                <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="d-flex align-items-center mb-3 p-3 border-bottom"
                                        style="border-color: #e0e0e0;">
                                        <!-- Notification Number -->
                                        <div class="me-3 notification-number">
                                            <span class="badge bg-secondary"><?php echo e($loop->iteration); ?></span>
                                        </div>

                                        <!-- Notification Icon -->
                                        <div class="me-3 notification-icon">
                                            <?php if($notification->category == 'primary'): ?>
                                                <i class="bi bi-exclamation-circle text-primary fs-4"></i>
                                            <?php elseif($notification->category == 'success'): ?>
                                                <i class="bi bi-check-circle text-success fs-4"></i>
                                            <?php elseif($notification->category == 'danger'): ?>
                                                <i class="bi bi-x-circle text-danger fs-4"></i>
                                            <?php elseif($notification->category == 'warning'): ?>
                                                <i class="bi bi-info-circle text-warning fs-4"></i>
                                            <?php endif; ?>
                                        </div>

                                        <!-- Notification Message -->
                                        <div class="flex-grow-1">
                                            <div class="notification-message">
                                                <p class="mb-1" style="font-size: 16px; color: #333;">
                                                    <?php echo e($notification->message); ?></p>
                                            </div>
                                            <div class="text-muted notification-date small" style="font-size: 14px;">
                                                <?php echo e($notification->created_at->format('Y-m-d H:i:s')); ?>

                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <div class="text-center p-3">
                                    <p class="text-muted" style="font-size: 16px;">No notifications available.</p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>



                </div>


            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/main_strc/notification.blade.php ENDPATH**/ ?>