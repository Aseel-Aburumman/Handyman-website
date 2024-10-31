<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo e(__('messages.Home')); ?>

                </h1>
                <ul class="breadcumb-menu">
                    
                    
                </ul>
            </div>
        </div>
    </div>

    <section class="product-details space-extra-bottom">
        <div class="container">
            <?php if(session('success')): ?>
                <div class="container alert alert-success">
                    <?php echo session('success'); ?>

                </div>
            <?php endif; ?>
            <div class="dashboard-container">
                <!-- Left Sidebar with Stat Cards -->
                <div class="statusCardsHandyman stat-cards">
                    <div class="stat-card">
                        <i class="fas fa-award"></i>
                        <div class="stat-title"><?php echo e(__('messages.GigsAwarded')); ?>

                        </div>
                        <div class="stat-value"><?php echo e($totalawardedgig); ?></div>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-clipboard-list"></i>
                        <div class="stat-title"><?php echo e(__('messages.GigApplied')); ?>

                        </div>
                        <div class="stat-value"><?php echo e($totalappliedgig); ?></div>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-dollar-sign"></i>
                        <div class="stat-title"><?php echo e(__('messages.Profit')); ?>

                        </div>
                        <div class="stat-value"><?php echo e($totalawardedgig_profit_thismonth); ?></div>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-coins"></i>
                        <div class="stat-title"><?php echo e(__('messages.TotalProfit')); ?>

                        </div>
                        <div class="stat-value"><?php echo e($totalawardedgig_profit->sum('total')); ?></div>
                    </div>
                </div>

                <!-- Main Content Section -->
                <div class="content-section">
                    <!-- Gigs Waiting for Approval -->
                    <div class="">
                        <h3>
                            <?php echo e(__('messages.WaitingApproval')); ?>


                        </h3>
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

                    <!-- Hot Gigs to Apply To -->
                    <div class="">
                        <h3>
                            <?php echo e(__('messages.HotGigs')); ?> </h3>
                        <?php $__currentLoopData = $gigtoaply; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gig): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                        <h6><?php echo e(__('messages.ClientDetails')); ?>

                                        </h6>
                                        <div class="m-auto freelancer-img">
                                            <?php if($gig->user && $gig->user->image): ?>
                                                <img src="<?php echo e(asset('storage/profile_images/' . $gig->user->image)); ?>"
                                                    alt="<?php echo e($gig->user->name); ?> Picture">
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>"
                                                    alt="Freelancer Picture">
                                            <?php endif; ?>
                                        </div>
                                        <h3 class="freelancer-name">
                                            <?php echo e($gig->user->name ?? 'Unknown User'); ?></h3>
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


                                        <form class="mt-3 ml-2"
                                            action="<?php echo e(route('handyman.opengig', ['gigId' => $gig->id])); ?>" method="GET">
                                            <?php echo csrf_field(); ?>
                                            
                                            <button type="submit"
                                                class="btn btn-success ml-2 w-100 "><?php echo e(__('messages.ApplyNow')); ?>

                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>




        </div>
    </section>
    <style>
        .dashboard-container {
            display: flex;
            gap: 20px;
            padding: 20px;
        }

        .stat-cards {
            flex-basis: 20%;
        }

        .stat-card {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            text-align: center;
            transition: 0.3s;
        }

        .stat-card:hover {
            background-color: #f4762929;

        }

        .stat-card i {
            font-size: 30px;
            color: #F47629;
            margin-bottom: 10px;
        }

        .stat-title {
            font-size: 14px;
            margin-bottom: 5px;
            color: #333;
        }

        .stat-value {
            font-size: 24px;
            font-weight: bold;
            color: #444;
        }

        .content-section {
            flex-basis: 75%;
        }

        .content-box {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .gigs-approval {}

        .hot-gigs {}

        .section-title {
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .gig-list {
            list-style-type: none;
            padding: 0;
        }

        .gig-list li {
            margin-bottom: 10px;
        }

        .gig-list a {
            color: blue;
            text-decoration: none;
        }

        .gig-list a:hover {
            text-decoration: underline;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/handyman/home.blade.php ENDPATH**/ ?>