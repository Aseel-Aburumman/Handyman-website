<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo e(__('messages.Dashboard')); ?>

                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('handyman.Home')); ?>"><?php echo e(__('messages.Home')); ?>

                        </a></li>
                    <li><?php echo e(__('messages.Dashboard')); ?>

                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="product-details space-extra-bottom">
        <div class="shape-mockup spin" data-bottom="0%" data-left="0%"><img src="<?php echo e(asset('assets/img/shape/lines_1.png')); ?>"
                alt="shape">
        </div>
        <div class="container">
            <?php if(session('success')): ?>
                <div class="container alert alert-success">
                    <?php echo session('success'); ?>

                </div>
            <?php endif; ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>


            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn active" id="description-tab" data-bs-toggle="tab" href="#description"
                        role="tab" aria-controls="description" aria-selected="true"><?php echo e(__('messages.AccountDetail')); ?>

                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab"
                        aria-controls="reviews" aria-selected="false"><?php echo e(__('messages.MyGigs')); ?>

                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab"
                        aria-controls="orders" aria-selected="false"><?php echo e(__('messages.AwardedGigs')); ?>

                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="skills-tab" data-bs-toggle="tab" href="#skills" role="tab"
                        aria-controls="skills" aria-selected="false"><?php echo e(__('messages.Skills')); ?>

                    </a>
                </li>
                <li class="nav-item" role="presentation">

                    <a href="<?php echo e(route('Onehandyman_clientVeiw', ['handymanId' => $handyman->id])); ?>"
                        class=" th-btn"><?php echo e(__('messages.ViewAsClient')); ?></a>
                </li>

                <li class="nav-item" role="presentation">
                    <form class="" action="<?php echo e(route('chat', ['receiverId' => $firstgigs->user->id])); ?>"
                        method="GET">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="nav-link th-btn "><?php echo e(__('messages.ChatCenter')); ?>

                        </button>
                    </form>
                    
                </li>
            </ul>

            <div class="tab-content" id="productTabContent">
                <!-- Account Details Tab -->
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <div class="profile-edit-wrapper">
                        <h2>Edit Profile</h2>
                        <form action="<?php echo e(route('handyman.dashboard.update')); ?>" method="POST"
                            enctype="multipart/form-data" class="profile-edit-form">
                            <?php echo csrf_field(); ?>
                            

                            <!-- Profile Image -->
                            <div class="profile-image-wrapper">
                                <div class="profile-image">
                                    <?php if($user->image): ?>
                                        <img src="<?php echo e(asset('storage/profile_images/' . $user->image)); ?>"
                                            alt="Profile Picture">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>"
                                            alt="Default Profile Picture">
                                    <?php endif; ?>
                                </div>
                                <label for="image"><?php echo e(__('messages.UploadPic')); ?>

                                </label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>

                            <!-- Name -->
                            <div class="d-flex justify-content-between">

                                <div style="margin-right:5px;" class="mr-2 w-50 form-group">
                                    <label for="name"><?php echo e(__('messages.Name')); ?>

                                    </label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="<?php echo e($user->name); ?>" required>
                                </div>

                                <!-- Email -->
                                <div style="margin-left:5px;" class=" w-50 form-group">
                                    <label for="email"><?php echo e(__('messages.Email')); ?>

                                    </label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="<?php echo e($user->email); ?>" required>
                                </div>
                            </div>


                            <div class="d-flex justify-content-between">
                                <!-- Phone -->
                                <div style="margin-right:5px;" class="mr-2 w-50 form-group">
                                    <label for="phone"><?php echo e(__('messages.Phone')); ?>

                                    </label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        value="<?php echo e($user->delivery_info->phone ?? ' '); ?>" required>
                                </div>
                                <!-- building_no -->
                                <div style="margin-left:5px;" class=" w-50 form-group">
                                    <label for="building_no"><?php echo e(__('messages.BuildingNo')); ?>

                                        /label>
                                        <input type="text" name="building_no" id="building_no"
                                            class="ml-2 form-control"
                                            value="<?php echo e($user->delivery_info->building_no ?? ' '); ?>" required>
                                </div>
                            </div>

                            <div class="d-flex">

                                <!-- City -->
                                <div style="margin-right:5px;" class="w-50 form-group">
                                    <label for="city"><?php echo e(__('messages.City')); ?>

                                    </label>
                                    <input type="text" name="city" id="city" class="form-control"
                                        value="<?php echo e($user->delivery_info->city ?? ' '); ?>" required>
                                </div>

                                <!-- Location -->
                                <div style="margin-left:5px;" class="w-50 form-group">
                                    <label for="location"><?php echo e(__('messages.Location')); ?>

                                    </label>
                                    <input type="text" name="location" id="location" class="form-control"
                                        value="<?php echo e($user->delivery_info->location ?? ' '); ?>" required>
                                </div>
                            </div>

                            <div class="d-flex">

                                <!-- Experience -->
                                <div style="margin-right:5px;" class="w-50 form-group">
                                    <label for="experience"><?php echo e(__('messages.Experience')); ?>

                                    </label>
                                    <input type="number" name="experience" id="experience" class="form-control"
                                        value="<?php echo e($handyman->experience ?? '0 '); ?>" required>
                                </div>

                                <!-- price_per_hour -->
                                <div style="margin-left:5px;" class="w-50 form-group">
                                    <label for="price_per_hour"><?php echo e(__('messages.PPR')); ?>

                                    </label>
                                    <input type="number" name="price_per_hour" id="price_per_hour" class="form-control"
                                        value="<?php echo e($handyman->price_per_hour ?? ' '); ?>" required>
                                </div>
                            </div>

                            <div>

                                <!-- BIO -->
                                <div class="form-group">
                                    <label for="bio"><?php echo e(__('messages.Bio')); ?>

                                    </label>
                                    <input type="text" name="bio" id="bio" class="form-control"
                                        value="<?php echo e($handyman->bio ?? ' '); ?>" required>
                                </div>

                            </div>
                            <!-- store_location -->
                            <div class="form-group">
                                <label for="store_location"><?php echo e(__('messages.StoreLocation')); ?>

                                </label>
                                <input type="text" name="store_location" id="store_location" class="form-control"
                                    value="<?php echo e($handyman->store_location ?? ' '); ?>" required>
                            </div>


                            <button type="submit" class="th-btn"><?php echo e(__('messages.SaveChanges')); ?>

                            </button>



                        </form>
                    </div>
                </div>

                <!-- orders Details Tab -->
                <div class="tab-pane fade  " id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    <?php $__currentLoopData = $awardedgig; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="content-box gigs-approval">

                            <div class="d-flex justify-content-between gig-details">
                                <div class="w-75">
                                    <h6><?php echo e(__('messages.TaskDetail')); ?>

                                    </h6>
                                    <div class="d-flex justify-content-between">
                                        <h2 class="gig-title"><?php echo e($gig->title); ?></h2>
                                    </div>
                                    <p class="gig-description">
                                        <?php echo e(\Illuminate\Support\Str::limit($gig->description, 150)); ?></p>
                                    <p class="gig-location"><i class="fas fa-map-marker-alt"></i>
                                        <?php echo e($gig->location); ?></p>
                                    <p class="gig-time"><i class="far fa-calendar-alt"></i>
                                        <?php echo e($gig->task_date); ?> <?php echo e($gig->task_time); ?></p>
                                </div>
                                <div class="w-25 text-center align-self-center align-items-center">
                                    <h3><?php echo e(__('messages.ClientDetails')); ?>

                                    </h3>
                                    <div class="m-auto freelancer-img">
                                        <?php if($gig->user && $gig->user->image): ?>
                                            <img src="<?php echo e(asset('storage/profile_images/' . $gig->user->image)); ?>"
                                                alt="<?php echo e($gig->user->name); ?> Picture">
                                        <?php else: ?>
                                            <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>"
                                                alt="Freelancer Picture">
                                        <?php endif; ?>
                                    </div>
                                    <h6 class="freelancer-name">
                                        <?php echo e($gig->user->name ?? 'Unknown User'); ?></h6>
                                    <div class="justify-content-center handyman-rating">
                                        <span class="text-center rating-star">★</span>
                                        <span><?php echo e($gig->user->rating); ?>

                                            (<?php echo e($gig->user->clientreviews->count()); ?> <?php echo e(__('messages.reviews')); ?>)
                                        </span>
                                    </div>

                                    <!-- Display Gigs Count -->
                                    <div class="gig-count">
                                        <p><strong><?php echo e(__('messages.GigsPosted')); ?>

                                                :</strong> <?php echo e($gig->user->gigs->count()); ?></p>
                                    </div>

                                    <form class="mt-3" action="<?php echo e(route('chat', ['receiverId' => $gig->user->id])); ?>"
                                        method="GET">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-info w-100 "><?php echo e(__('messages.ChatAnd')); ?>

                                        </button>
                                    </form>
                                    <form class="mt-3 ml-2"
                                        action="<?php echo e(route('handyman.accept', ['gigId' => $gig->id])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PATCH'); ?>
                                        
                                        <button type="submit"
                                            class="btn btn-success ml-2 w-100 "><?php echo e(__('messages.mygigAccept')); ?>

                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <!-- My Tasks Tab -->
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <?php $__currentLoopData = $mygigs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="content-box gigs-approval">

                            <div class="d-flex justify-content-between gig-details">
                                <div class="w-75">
                                    <h6><?php echo e(__('messages.TaskDetail')); ?>



                                    </h6>
                                    <div class="d-flex justify-content-between">
                                        <h2 class="gig-title"><?php echo e($gig->title); ?></h2>
                                    </div>
                                    <p class="gig-description">
                                        <?php echo e(\Illuminate\Support\Str::limit($gig->description, 150)); ?></p>
                                    <p class="gig-location"><i class="fas fa-map-marker-alt"></i>
                                        <?php echo e($gig->location); ?></p>
                                    <p class="gig-time"><i class="far fa-calendar-alt"></i>
                                        <?php echo e($gig->task_date); ?> <?php echo e($gig->task_time); ?></p>
                                </div>
                                <div class="w-25 text-center align-self-center align-items-center">
                                    <?php if($gig->status_id == 7): ?>
                                        <button class="w-100   btn  btn-info"><?php echo e($gig->status->name); ?></button>
                                    <?php elseif($gig->status_id == 8): ?>
                                        <button class="w-100 btn  btn-primary"><?php echo e($gig->status->name); ?></button>
                                    <?php elseif($gig->status_id == 9): ?>
                                        <button class="w-100 btn btn-success"><?php echo e($gig->status->name); ?></button>
                                    <?php elseif($gig->status_id == 10): ?>
                                        <button class="w-100 btn btn-danger"><?php echo e($gig->status->name); ?></button>
                                    <?php elseif($gig->status_id == 11): ?>
                                        <button class="w-100 btn btn-warning"><?php echo e($gig->status->name); ?></button>
                                    <?php elseif($gig->status_id == 28): ?>
                                        <button class="w-100 btn btn-warning"><?php echo e($gig->status->name); ?></button>
                                    <?php endif; ?>
                                    <h3><?php echo e(__('messages.ClientDetails')); ?>

                                    </h3>
                                    <div class="m-auto freelancer-img">
                                        <?php if($gig->user && $gig->user->image): ?>
                                            <img src="<?php echo e(asset('storage/profile_images/' . $gig->user->image)); ?>"
                                                alt="<?php echo e($gig->user->name); ?> Picture">
                                        <?php else: ?>
                                            <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>"
                                                alt="Freelancer Picture">
                                        <?php endif; ?>
                                    </div>
                                    <h6 class="freelancer-name">
                                        <?php echo e($gig->user->name ?? 'Unknown User'); ?></h6>
                                    <div class="justify-content-center handyman-rating">
                                        <span class="text-center rating-star">★</span>
                                        <span><?php echo e($gig->user->rating); ?>

                                            (<?php echo e($gig->user->clientreviews->count()); ?> <?php echo e(__('messages.reviews')); ?>)
                                        </span>
                                    </div>

                                    <!-- Display Gigs Count -->
                                    <div class="gig-count">
                                        <p><strong><?php echo e(__('messages.GigsPosted')); ?>

                                                :</strong> <?php echo e($gig->user->gigs->count()); ?></p>
                                    </div>

                                    <form class="mt-3" action="<?php echo e(route('chat', ['receiverId' => $gig->user->id])); ?>"
                                        method="GET">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-info w-100 "><?php echo e(__('messages.ChatAnd')); ?>

                                        </button>
                                    </form>
                                    <form class="mt-3 ml-2"
                                        action="<?php echo e(route('handyman.assigned.task', ['gigId' => $gig->id])); ?>"
                                        method="GET">
                                        <?php echo csrf_field(); ?>
                                        
                                        <button type="submit"
                                            class="btn btn-success ml-2 w-100 "><?php echo e(__('messages.ViewTask')); ?>

                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <!-- My skills Tab -->
                <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">

                    <!-- Add New Skill Button -->
                    <button id="toggleAddSkillForm" class="mb-5 w-100 th-btn "><?php echo e(__('messages.AddSkill')); ?> </button>

                    <!-- Add Skill Form (Initially Hidden) -->
                    <div id="addSkillForm" style="display: none;" class="mt-3">
                        <form action="<?php echo e(route('handyman.addSkill')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <!-- Select Skill from Dropdown -->
                            <div class="form-group">
                                <label for="skill_id"><?php echo e(__('messages.SelectSkill')); ?>

                                    :</label>
                                <select name="skill_id" class="form-control" required>
                                    <option value="" disabled selected><?php echo e(__('messages.SelectSkill')); ?>

                                    </option>
                                    <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($skill->id); ?>"><?php echo e($skill->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <!-- Upload Skill Proof Image -->
                            <div class="form-group">
                                <label for="certificate_image"><?php echo e(__('messages.SkillCertificate')); ?>

                                    :</label>
                                <input type="file" name="certificate_image" class="form-control" required>
                            </div>

                            <!-- Description for the Certificate -->
                            <div class="form-group">
                                <label for="description"><?php echo e(__('messages.Description')); ?>

                                    :</label>
                                <textarea name="description" class="form-control" rows="3" required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-success"><?php echo e(__('messages.AddSkill')); ?>

                            </button>
                        </form>
                    </div>

                    <div class="woocommerce-Reviews">

                        <div class="th-comments-wrap">

                            <ul class="comment-list" style="max-height: 400px; overflow-y: auto;">
                                <?php $__currentLoopData = $handyman->skillCertificates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $certificate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="review th-comment-item">
                                        <div class="th-post-comment">
                                            <i class="skillIcon w-25 fa-solid fa-toolbox fa-2xl" style=""></i>
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





            </div>

            <!-- JavaScript to Toggle the Form -->
            <script>
                document.getElementById('toggleAddSkillForm').addEventListener('click', function() {
                    var form = document.getElementById('addSkillForm');
                    form.style.display = form.style.display === 'none' ? 'block' : 'none';
                });
            </script>



        </div>


        </div>
        </div>
    </section>

    <style>
        .content-box {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .skillIcon {
            color: #f47629;
            align-self: center;
            justify-self: center;
            text-align: center;
            font-size: 5rem;
        }

        .product-tab-style1 {
            gap: 7px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/handyman/dashboard.blade.php ENDPATH**/ ?>