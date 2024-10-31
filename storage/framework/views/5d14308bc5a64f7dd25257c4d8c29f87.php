<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo e(__('messages.Dashboard')); ?>

                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('customer.Home')); ?>"><?php echo e(__('messages.Home')); ?>

                        </a></li>
                    <li><?php echo e(__('messages.Dashboard')); ?>

                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="product-details space-extra-bottom">
        <div class="container">
            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn active" id="description-tab" data-bs-toggle="tab" href="#description"
                        role="tab" aria-controls="description" aria-selected="true"><?php echo e(__('messages.AccountDetail')); ?>

                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab"
                        aria-controls="reviews" aria-selected="false"><?php echo e(__('messages.MyTask')); ?>

                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab"
                        aria-controls="orders" aria-selected="false"><?php echo e(__('messages.MyOrders')); ?>

                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <form class="" action="<?php echo e(route('chat', ['receiverId' => 1])); ?>" 
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
                        <h2><?php echo e(__('messages.EditProfile')); ?>

                        </h2>
                        <form action="<?php echo e(route('customer.dashboard.update')); ?>" method="POST"
                            enctype="multipart/form-data" class="profile-edit-form">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('POST'); ?>

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
                            <div class="form-group">
                                <label for="name"><?php echo e(__('messages.Name')); ?>

                                </label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="<?php echo e($user->name); ?>" required>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label for="email"><?php echo e(__('messages.Email')); ?>

                                </label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value="<?php echo e($user->email); ?>" required>
                            </div>

                            <!-- Phone -->
                            <div class="form-group">
                                <label for="phone"><?php echo e(__('messages.Phone')); ?>

                                </label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    value="<?php echo e($user->delivery_info->phone ?? 'Unknown '); ?>" required>
                            </div>

                            <!-- building_no -->
                            <div class="form-group">
                                <label for="building_no"><?php echo e(__('messages.BuildingNo')); ?>

                                </label>
                                <input type="text" name="building_no" id="building_no" class="form-control"
                                    value="<?php echo e($user->delivery_info->building_no ?? 'Unknown '); ?>" required>
                            </div>

                            <!-- City -->
                            <div class="form-group">
                                <label for="city"><?php echo e(__('messages.City')); ?>

                                </label>
                                <input type="text" name="city" id="city" class="form-control"
                                    value="<?php echo e($user->delivery_info->city ?? 'Unknown '); ?>" required>
                            </div>

                            <!-- Location -->
                            <div class="form-group">
                                <label for="location"><?php echo e(__('messages.Location')); ?>

                                </label>
                                <input type="text" name="location" id="location" class="form-control"
                                    value="<?php echo e($user->delivery_info->location ?? 'Unknown '); ?>" required>
                            </div>

                            <button type="submit" class="th-btn"><?php echo e(__('messages.SaveChanges')); ?>

                            </button>
                        </form>
                    </div>
                </div>

                <!-- orders Details Tab -->
                <div class="tab-pane fade show " id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    
                    <h1><?php echo e(__('messages.SalesRecords')); ?>

                    </h1>
                    <?php if($sales->isEmpty()): ?>
                        <p><?php echo e(__('messages.Nosales')); ?>

                        </p>
                    <?php else: ?>
                        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $saleDate => $saleGroup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                // Calculate the total amount for all items in this group (all items in the card)
                                $groupTotal = $saleGroup->sum('total_amount');
                                // Get the store name from the first sale in the group (assuming all have the same store)
                                $storeName = $saleGroup->first()->store->name;
                            ?>

                            <!-- Card -->
                            <div class="card mb-4 shadow-sm">
                                <div class="d-flex justify-content-between card-header">
                                    <h4 class="my-0 font-weight-normal">
                                        <?php echo e(__('messages.Orderfrom')); ?>

                                        <?php echo e($storeName); ?> <?php echo e(__('messages.on')); ?>


                                        <?php echo e(\Carbon\Carbon::parse($saleDate)->format('F j, Y g:i A')); ?>

                                    </h4>
                                    <span class="custom-total">
                                        <?php echo e(__('messages.Total')); ?>

                                        : <?php echo e(__('messages.JD')); ?>

                                        <?php echo e(number_format($groupTotal, 2)); ?>

                                    </span>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <?php $__currentLoopData = $saleGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li
                                                class="p-0 mt-1   list-group-item d-flex justify-content-between align-items-center">
                                                <div>
                                                    <!-- Compact product details -->
                                                    <strong><?php echo e(__('messages.Product')); ?>

                                                        :</strong> <?php echo e($sale->product->name); ?>

                                                    <span class="text-muted">(ID: <?php echo e($sale->product_id); ?>)</span> -
                                                    <strong><?php echo e(__('messages.Quantity')); ?>

                                                        :</strong> <?php echo e($sale->quantity_sold); ?> -
                                                    <strong><?php echo e(__('messages.Total')); ?>

                                                        :</strong> <?php echo e(__('messages.JD')); ?>

                                                    <?php echo e(number_format($sale->total_amount, 2)); ?>

                                                </div>
                                                <div class="custom-status">
                                                    <?php if($sale->status_id == 16): ?>
                                                        <button
                                                            class="statusBtn1 custom-btn-info"><?php echo e($sale->status->name); ?></button>
                                                    <?php elseif($sale->status_id == 17): ?>
                                                        <button
                                                            class="statusBtn1 custom-btn-primary"><?php echo e($sale->status->name); ?></button>
                                                    <?php elseif($sale->status_id == 18): ?>
                                                        <button
                                                            class="statusBtn1 custom-btn-success"><?php echo e($sale->status->name); ?></button>
                                                    <?php elseif($sale->status_id == 19): ?>
                                                        <button
                                                            class="statusBtn1 custom-btn-danger"><?php echo e($sale->status->name); ?></button>
                                                    <?php endif; ?>

                                                </div>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    
                </div>

                <!-- My Tasks Tab -->
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <div class="woocommerce-Reviews">
                        <?php $__currentLoopData = $gigs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="gig-card">
                                <div class="gig-card-content">
                                    <!-- Left Side: Gig Details -->
                                    <div class="gig-details">
                                        <h3><?php echo e(__('messages.TaskDetail')); ?>


                                            <?php if($gig->status_id == 7): ?>
                                                <button class="statusBtn btn  btn-info"><?php echo e($gig->status->name); ?></button>
                                            <?php elseif($gig->status_id == 8): ?>
                                                <button
                                                    class="statusBtn btn  btn-primary"><?php echo e($gig->status->name); ?></button>
                                            <?php elseif($gig->status_id == 9): ?>
                                                <button
                                                    class="statusBtn btn btn-success"><?php echo e($gig->status->name); ?></button>
                                            <?php elseif($gig->status_id == 10): ?>
                                                <button class="statusBtn btn btn-danger"><?php echo e($gig->status->name); ?></button>
                                            <?php elseif($gig->status_id == 11): ?>
                                                <button
                                                    class="statusBtn btn btn-warning"><?php echo e($gig->status->name); ?></button>
                                            <?php elseif($gig->status_id == 28): ?>
                                                <button
                                                    class="statusBtn btn btn-warning"><?php echo e($gig->status->name); ?></button>
                                            <?php endif; ?>
                                        </h3>

                                        <h2 class="gig-title"><?php echo e($gig->title); ?></h2>
                                        <p class="gig-description">
                                            <?php echo e(\Illuminate\Support\Str::limit($gig->description, 150)); ?></p>
                                        <p class="gig-location"><i class="fas fa-map-marker-alt"></i>
                                            <?php echo e($gig->location); ?></p>
                                        <p class="gig-time"><i class="far fa-calendar-alt"></i>
                                            <?php echo e($gig->task_date); ?> <?php echo e($gig->task_time); ?></p>
                                        <?php if($gig->handyman): ?>
                                            <p class="gig-total"><?php echo e(__('messages.Total')); ?>

                                                : <?php echo e(__('messages.JD')); ?>

                                                <?php echo e($gig->total); ?></p>
                                        <?php else: ?>
                                            <p class="gig-total"><?php echo e(__('messages.EstimatedTime')); ?>

                                                : <?php echo e(__('messages.JD')); ?>

                                                <?php echo e($gig->total); ?></p>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Right Side: Freelancer Info -->
                                    <div class="freelancer-info">
                                        <h3><?php echo e(__('messages.AwardedHandyman')); ?>

                                        </h3>
                                        <?php if($gig->handyman): ?>
                                            <div class="freelancer-img">
                                                <?php if($gig->handyman && $gig->handyman->user->image): ?>
                                                    <img src="<?php echo e(asset('storage/profile_images/' . $gig->handyman->user->image)); ?>"
                                                        alt="<?php echo e($gig->handyman->name); ?> Picture">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>"
                                                        alt="Freelancer Picture">
                                                <?php endif; ?>
                                            </div>
                                            <h3 class="freelancer-name">
                                                <?php echo e($gig->handyman->user->name ?? 'Unknown Handyman'); ?></h3>
                                            <p class="gig-price"><?php echo e(__('messages.Price')); ?>

                                                : <?php echo e(__('messages.JD')); ?>

                                                <?php echo e($gig->price); ?>/ <?php echo e(__('messages.perhour')); ?>

                                            </p>
                                            <p class="gig-price"><a
                                                    href="<?php echo e(route('assigned.task', ['gigId' => $gig->id])); ?>"><?php echo e(__('messages.VeiwDetail')); ?>

                                                </a></p>
                                        <?php else: ?>
                                            <div>
                                                <?php echo e(__('messages.Nohandyman')); ?>


                                            </div>

                                            <p class="gig-price"><a
                                                    href="<?php echo e(route('Onegig', ['gigId' => $gig->id])); ?>"><?php echo e(__('messages.TaskProposals')); ?>

                                                </a></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>


            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/customers/dashboard.blade.php ENDPATH**/ ?>