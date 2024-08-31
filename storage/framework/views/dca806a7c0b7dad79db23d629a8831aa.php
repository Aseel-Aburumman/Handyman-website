<header id="header" class="header fixed-top d-flex align-items-center">

    


    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
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
      <span class="badge bg-primary badge-number"><?php echo e($notifications->where('is_read', 0)->count()); ?></span>
    </a>
    

    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
      <li class="dropdown-header">
        You have <?php echo e($notifications->where('is_read', 0)->count()); ?> new notifications
        <a href="<?php echo e(route('admin.notification')); ?>"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>

      <?php $__empty_1 = true; $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
      <span class="badge bg-success badge-number"><?php echo e($messages->where('is_read', 0)->count()); ?></span>
    </a>
    

    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
      <li class="dropdown-header">
        You have <?php echo e($messages->where('is_read', 0)->count()); ?> new messages
        <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
      </li>
      <li>
        <hr class="dropdown-divider">
      </li>

      <?php $__empty_1 = true; $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <li class="message-item">
          <a href="#">
            <img src="assets/img/default-avatar.png" alt="" class="rounded-circle">
            <div>
            <h4><?php echo e($message->sender->name); ?></h4> <!-- Display the sender's name -->
              <p><?php echo e(Str::limit($message->message_content, 50)); ?></p>
              <p><?php echo e($message->created_at->diffForHumans()); ?></p>
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
    <!-- End Messages Dropdown Items -->
  </li>
  
    <!-- End Messages Nav -->  --}}

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>
<?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/partials/navbar_admin.blade.php ENDPATH**/ ?>