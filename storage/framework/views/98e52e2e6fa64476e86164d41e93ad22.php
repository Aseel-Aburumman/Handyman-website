<?php $__env->startSection('content'); ?>
<div class="pagetitle">
    <h1>Profile</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section profile">
     
     <?php if(session('success')): ?>
     <div class="alert alert-success">
         <?php echo e(session('success')); ?>

     </div>
     <?php endif; ?>
    <div class="row">
      <div class="col-xl-4">
        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            <img src="<?php echo e(asset('storage/' . $user->image)); ?>" alt="Profile" class="img-thumbnail">

            
            <h2><?php echo e($user->name); ?></h2>
            <h3><?php echo e($user->role->name); ?></h3>
          </div>
        </div>
      </div>

      <div class="col-xl-8">
        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">
              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
              </li>
              <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
              </li>
            </ul>
            <div class="tab-content pt-2">
              <!-- Overview Section -->
              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Profile Details</h5>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Full Name</div>
                  <div class="col-lg-9 col-md-8"><?php echo e($user->name); ?></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Role</div>
                  <div class="col-lg-9 col-md-8"><?php echo e($user->role->name); ?></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">City</div>
                  <div class="col-lg-9 col-md-8"><?php echo e($deliveryInfo->city ?? 'N/A'); ?></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Location</div>
                  <div class="col-lg-9 col-md-8"><?php echo e($deliveryInfo->location ?? 'N/A'); ?></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Building no.</div>
                  <div class="col-lg-9 col-md-8"><?php echo e($deliveryInfo->building_no ?? 'N/A'); ?></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Phone</div>
                  <div class="col-lg-9 col-md-8"><?php echo e($deliveryInfo->phone ?? 'N/A'); ?></div>
                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Email</div>
                  <div class="col-lg-9 col-md-8"><?php echo e($user->email); ?></div>
                </div>
              </div>

              <!-- Edit Profile Section -->
              <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                <form action="<?php echo e(route('admin.profile.update')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                        <div class="col-md-8 col-lg-9">
                            <img src="<?php echo e(asset('storage/' . $user->image)); ?>" alt="Profile" class="img-thumbnail">

                            
                            <div class="pt-2">
                                <input type="file" name="profile_image" class="form-control">
                            </div>
                        </div>
                    </div>

                      <div class="row mb-3">
                          <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                          <div class="col-md-8 col-lg-9">
                              <input name="fullName" type="text" class="form-control" id="fullName" value="<?php echo e($user->name); ?>">
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="company" class="col-md-4 col-lg-3 col-form-label">Building no.</label>
                          <div class="col-md-8 col-lg-9">
                              <input name="building_no" type="text" class="form-control" id="building_no" value="<?php echo e($deliveryInfo->building_no ?? ''); ?>">
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="job" class="col-md-4 col-lg-3 col-form-label">Role</label>
                          <div class="col-md-8 col-lg-9">
                              <input name="job" type="text" class="form-control" id="job" value="<?php echo e($user->role->name); ?>">
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="city" class="col-md-4 col-lg-3 col-form-label">City</label>
                          <div class="col-md-8 col-lg-9">
                              <input name="city" type="text" class="form-control" id="city" value="<?php echo e($deliveryInfo->city ?? ''); ?>">
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="location" class="col-md-4 col-lg-3 col-form-label">Location</label>
                          <div class="col-md-8 col-lg-9">
                              <input name="location" type="text" class="form-control" id="location" value="<?php echo e($deliveryInfo->location ?? ''); ?>">
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                          <div class="col-md-8 col-lg-9">
                              <input name="phone" type="text" class="form-control" id="phone" value="<?php echo e($deliveryInfo->phone ?? ''); ?>">
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                          <div class="col-md-8 col-lg-9">
                              <input name="email" type="email" class="form-control" id="email" value="<?php echo e($user->email); ?>">
                          </div>
                      </div>

                      <div class="text-center">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                  </form>
              </div>

              <!-- Change Password Section -->
              <div class="tab-pane fade pt-3" id="profile-change-password">
                <form>
                  <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="password" type="password" class="form-control" id="currentPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="newpassword" type="password" class="form-control" id="newPassword">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                      <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                    </div>
                  </div>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </form>
              </div>
            </div><!-- End Bordered Tabs -->
          </div>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/profile.blade.php ENDPATH**/ ?>