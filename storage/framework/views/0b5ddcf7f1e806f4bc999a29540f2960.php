<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper" data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo e(__('messages.TaskDetail')); ?>

                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.Home')); ?>

                        </a></li>
                    <li><a href="<?php echo e(route('customer.Home')); ?>"><?php echo e(__('messages.Dashboard')); ?>

                        </a></li>
                    <li><?php echo e(__('messages.TaskDetail')); ?>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section class="pb-0 overflow-hidden space" id="service-sec">

        <?php if(session('success')): ?>
            <div class="container alert alert-success">
                <?php echo session('success'); ?>

            </div>
        <?php endif; ?>

        <div class="shape-mockup spin" data-bottom="0%" data-left="0%"><img
                src="<?php echo e(asset('assets/img/shape/lines_1.png')); ?>" alt="shape"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-10">
                    <div class="title-area text-center">
                        <span class="sub-title"><img src="<?php echo e(asset('assets/img/theme-img/title_icon.svg')); ?>"
                                alt="Icon"><?php echo e(__('messages.showOpenGigSmallTile')); ?>!
                        </span>
                        <h2 class="sec-title"><?php echo e(__('messages.showOpenGigBigTitle')); ?></h2>


                        <p class="sec-text"><?php echo e(__('messages.showOpenGigP')); ?>!
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class=" pt-0 container d-flex overflow-hidden space" id="service-sec">




        <div class="container d-flex flex-column task-gig-card1">

            <div class=" task-gig-card ">
                <div class="gig-details">
                    <h3><?php echo e(__('messages.TaskDetail')); ?></h3>
                    <div class="d-flex justify-content-between">
                        <h2 class="gig-title"><?php echo e($gig->title); ?></h2>
                        <p class="gig-total"><?php echo e(__('messages.Budget')); ?>: <?php echo e(__('messages.JD')); ?>

                            <?php echo e($gig->total); ?>/<?php echo e(__('messages.perhour')); ?></p>
                    </div>
                    <p class="gig-description">
                        <?php echo e(\Illuminate\Support\Str::limit($gig->description, 150)); ?></p>
                    <p class="gig-location"><i class="fas fa-map-marker-alt"></i>
                        <?php echo e($gig->location); ?></p>
                    <p class="gig-time"><i class="far fa-calendar-alt"></i>
                        <?php echo e($gig->task_date); ?> <?php echo e($gig->task_time); ?></p>
                </div>

            </div>
            <h4><?php echo e(__('messages.YourProposal')); ?></h4>
            <?php if(!$existingProposal): ?>
                <form class=" formProposal " action="<?php echo e(route('handyman.submitProposal', $gig->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="proposal"><?php echo e(__('messages.bidLabel')); ?></label>
                        <textarea name="proposal" id="proposal" class="form-control" rows="5" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price_per_hour"><?php echo e(__('messages.PPR')); ?></label>
                        <input type="number" name="price_per_hour" id="price_per_hour" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="total_time"><?php echo e(__('messages.TotalTime')); ?></label>
                        <input type="number" name="total_time" id="total_time" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary"><?php echo e(__('messages.SubmitProposal')); ?></button>
                </form>
            <?php else: ?>
                <p><?php echo e(__('messages.clientproposal')); ?></p>
                <div style="display: block;" id="currentProposalForm" class=" handyman-card filter-step2-handyman-card">
                    <div class="handyman-profile-gig-section">
                        <div class="handyman-pic-section-gig">
                            <div class="handyman-thepic-gig-view-section">
                                <?php if($existingProposal->handyman->user && $existingProposal->handyman->user->image): ?>
                                    <img src="<?php echo e(asset('storage/profile_images/' . $existingProposal->handyman->user->image)); ?>"
                                        alt="<?php echo e($existingProposal->handyman->user->name); ?>" class="handyman-profile-img">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>"
                                        alt="<?php echo e($existingProposal->handyman->user->name); ?>" class="handyman-profile-img">
                                <?php endif; ?>
                            </div>
                            <div class="handyman-details-gig">

                                <div class="d-flex justify-content-between ">
                                    <h4><?php echo e($existingProposal->handyman->user->name); ?></h4>

                                    <div class=" handyman-tasks">
                                        <span><i class="fa-solid fa-check-double"></i> <?php echo e(__('messages.Done')); ?>

                                            <?php echo e($existingProposal->handyman->gigs_count); ?>

                                            <?php echo e(__('messages.tasks')); ?></span>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between ">
                                    <div class="handyman-rating">
                                        <span class="rating-star">★</span>
                                        <span><?php echo e($existingProposal->handyman->user->rating); ?>

                                            (<?php echo e($existingProposal->handyman->user->reviews_count); ?>

                                            <?php echo e(__('messages.reviews')); ?>)
                                        </span>
                                    </div>
                                    <div class="handyman-price mt-1">
                                        JD<?php echo e(number_format($existingProposal->price_per_hour, 2)); ?>/hr</div>
                                </div>




                            </div>

                        </div>

                        <div class="handyman-description-gig">
                            <div class="handyman-description">
                                <p class="mb-0"><?php echo e(__('messages.HandymanDescription')); ?>:</p>
                                <p class="mb-0"><?php echo e(Str::limit($existingProposal->handyman->bio, 200)); ?></p>
                                <a href="<?php echo e(route('Onehandyman_clientVeiw', ['handymanId' => $existingProposal->handyman->id])); ?>"
                                    class="read-more-link"><?php echo e(__('messages.ReadMore')); ?></a>
                            </div>

                        </div>
                        <div class="handyman-description-gig">
                            <div class="handyman-description">
                                <h6><?php echo e(__('messages.Howhelp')); ?>:</h6>
                                <p><?php echo e(Str::limit($existingProposal->proposal, 200)); ?></p>
                            </div>

                        </div>

                        <!-- Edit Proposal Button -->
                        <button class="mt-3 th-btn btn btn-warning" id="editProposalBtn">
                            <?php echo e(__('messages.EditProposal')); ?>

                        </button>

                    </div>
                </div>


                <!-- Edit Proposal Form (Initially Hidden) -->
                <form class="w-100 handyman-card filter-step2-handyman-card" id="editProposalForm"
                    action="<?php echo e(route('handyman.updateProposal', $existingProposal->id)); ?>" method="POST"
                    style="display: none;">
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="proposal"><?php echo e(__('messages.Proposal')); ?></label>
                        <textarea name="proposal" id="proposal" class="form-control" rows="5" required><?php echo e($existingProposal->proposal); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price_per_hour"><?php echo e(__('messages.PPR')); ?></label>
                        <input type="number" name="price_per_hour" id="price_per_hour" class="form-control"
                            value="<?php echo e($existingProposal->price_per_hour); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="total_time"><?php echo e(__('messages.TotalTime')); ?></label>
                        <input type="number" name="total_time" id="total_time" class="form-control"
                            value="<?php echo e($existingProposal->time); ?>" required>
                    </div>

                    <button type="submit" class="th-btn btn btn-primary"><?php echo e(__('messages.UpdateProposal')); ?></button>
                </form>
            <?php endif; ?>
        </div>
        <script>
            document.getElementById('editProposalBtn').addEventListener('click', function() {
                document.getElementById('editProposalForm').style.display = 'block'; // Show the form
                this.style.display = 'none'; // Hide the "Edit Proposal" button
                document.getElementById('currentProposalForm').style.display = 'none'; // Show the form

            });
        </script>
        <!-- Handyman List -->
        <div class="task-handyman-card ">

            <!-- Handymen Loop -->
            <div class=" handyman-card filter-step2-handyman-card">
                <div class="handyman-profile-gig-section">
                    <div class="handyman-pic-section-gig">
                        <div class="handyman-thepic-gig-view-section">
                            <?php if($gig->user && $gig->user->image): ?>
                                <img src="<?php echo e(asset('storage/profile_images/' . $gig->user->image)); ?>"
                                    alt="<?php echo e($gig->user->name); ?>" class="handyman-profile-img">
                            <?php else: ?>
                                <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>" alt="<?php echo e($gig->user->name); ?>"
                                    class="handyman-profile-img">
                            <?php endif; ?>
                        </div>
                        <div class="handyman-details-gig">

                            <div class="d-flex justify-content-between ">
                                <h4><?php echo e($gig->user->name); ?></h4>

                                <div class=" handyman-tasks">
                                    <span><i class="fa-solid fa-check-double"></i> <?php echo e(__('messages.Done')); ?>

                                        <?php echo e($gig->gigs_count); ?> <?php echo e(__('messages.tasks')); ?></span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between ">
                                <div class="handyman-rating">
                                    <span class="rating-star">★</span>
                                    <span><?php echo e($gig->user->rating); ?>

                                        (<?php echo e($reviewClient->review ?? ' '); ?> <?php echo e(__('messages.reviews')); ?>)
                                    </span>
                                </div>
                                <div class="handyman-price mt-1">
                                    <?php echo e(__('messages.JD')); ?><?php echo e(number_format($gig->price, 2)); ?>/<?php echo e(__('messages.hr')); ?>

                                </div>
                            </div>



                            <div class="d-flex justify-content-end">
                                <!-- Report Button -->
                                <button class="btn btn-danger report-btn mr-3 " data-handyman-id="<?php echo e($gig->user->id); ?>"
                                    data-gig-id="<?php echo e($gig->id); ?>">
                                    <?php echo e(__('messages.ReportClient')); ?>

                                </button>

                            </div>
                        </div>

                    </div>





                </div>
            </div>
            <div class=" handyman-card filter-step2-handyman-card">
                <h6><?php echo e(__('messages.HowTo')); ?> </h6>
                <?php echo e(__('messages.tips1')); ?><br>
                <?php echo e(__('messages.tips2')); ?><br>
                <?php echo e(__('messages.tips3')); ?><br>
                <?php echo e(__('messages.tips4')); ?><br>

            </div>
        </div>
    </section>

    <style>
        .formProposal {
            justify-content: space-between;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .task-gig-card1 {
            flex: 60%;
        }

        .task-handyman-card {
            flex: 40%;

        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/handyman/showOpenGig.blade.php ENDPATH**/ ?>