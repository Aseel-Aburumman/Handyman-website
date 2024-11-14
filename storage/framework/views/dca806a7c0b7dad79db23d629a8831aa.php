<header id="header" class="header fixed-top d-flex align-items-center">

    


    <div class="d-flex align-items-center justify-content-between">
        <a style="justify-content: space-around;" href="<?php echo e(route('admin.dashboard')); ?>"
            class="logo d-flex align-items-center">
            <img style="width:150px; max-height: 49px;" src="<?php echo e(asset('pic/logoHorizantal.png')); ?>" alt="">
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    

    

    

    

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            
            <li class="nav-item dropdown">
                
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span
                        class="badge bg-primary badge-number"><?php echo e($adminNotifications->where('is_read', 0)->count()); ?></span>
                </a>
                

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                        You have <?php echo e($adminNotifications->where('is_read', 0)->count()); ?> new notifications
                        <a href="<?php echo e(route('admin.notification')); ?>"><span
                                class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <?php $__empty_1 = true; $__currentLoopData = $adminNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="notification-item">
                            <?php if($notification->category == 'primary'): ?>
                                <i class="bi bi-exclamation-circle text-primary"></i>
                            <?php elseif($notification->category == 'success'): ?>
                                <i class="bi bi-check-circle text-success"></i>
                            <?php elseif($notification->category == 'danger'): ?>
                                <i class="bi bi-x-circle text-danger"></i>
                            <?php elseif($notification->category == 'warning'): ?>
                                <i class="bi bi-info-circle text-warning"></i>
                            <?php endif; ?>
                            <div>
                                <h4><?php echo e($notification->message); ?></h4>
                                <p><?php echo e($notification->created_at->diffForHumans()); ?></p>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <li class="notification-item">
                            <div>
                                <h4>No new notifications</h4>
                            </div>
                        </li>
                    <?php endif; ?>

                    <li class="dropdown-footer">
                        <a href="<?php echo e(route('admin.notification')); ?>">Show all notifications</a>
                    </li>
                </ul>
                <!-- End Notification Dropdown Items -->
            </li>
            
            
            <li class="nav-item dropdown">
                
                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-chat-left-text"></i>
                    <span
                        class="badge bg-success badge-number"><?php echo e($unreadMessages->where('is_read', 0)->count()); ?></span>
                </a>
                

                

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                    <li class="dropdown-header">
                        You have <?php echo e($unreadMessages->count()); ?> new messages
                        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <?php $__empty_1 = true; $__currentLoopData = $unreadMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unreadMessage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="message-item">
                            <a href="#">
                                <img src="<?php echo e(asset('storage/profile_images/' . $unreadMessage->sender->image)); ?>"
                                    alt="" class="rounded-circle">
                                <div>
                                    <h4><?php echo e($unreadMessage->sender->name); ?></h4>
                                    
                                    <p><?php echo e(Str::limit($unreadMessage->message_content, 50)); ?></p>
                                    <p><?php echo e($unreadMessage->created_at->diffForHumans()); ?></p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <li class="message-item">
                            <div>
                                <h4>No new messages</h4>
                            </div>
                        </li>
                    <?php endif; ?>

                    <li class="dropdown-footer">
                        <a href="#">Show all messages</a>
                    </li>
                </ul>

                
            </li>
            
            

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    

                    
                    <img src="<?php echo e(url('storage/profile_images/' . $admindata->image)); ?>" alt="Profile"
                        class="rounded-circle">

                    <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo e($admindata->name); ?></span>
                </a>
                

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6><?php echo e($admindata->name); ?></h6>
                        
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="<?php echo e(route('admin.profile')); ?>">
                            <i class="bi bi-person"></i>
                            <span>My Profile</span>
                        </a>
                    </li>
                    
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <form action="<?php echo e(route('admin.logout')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="dropdown-item d-flex align-items-center"
                                style="border:none; background:none;">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </button>
                        </form>
                    </li>


                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header>
<?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/partials/navbar_admin.blade.php ENDPATH**/ ?>