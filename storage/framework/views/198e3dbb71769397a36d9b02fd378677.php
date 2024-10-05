<?php $__currentLoopData = $handymen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $handyman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="handyman-card filter-step2-handyman-card">
        <div class="handyman-profile-section">
            <div class="handyman-pic-section">
                <div class="handyman-thepic-section">
                    <?php if($handyman->user && $handyman->user->image): ?>
                        <img src="<?php echo e(asset('storage/profile_images/' . $handyman->user->image)); ?>"
                            alt="<?php echo e($handyman->user->name); ?>" class="handyman-profile-img">
                    <?php else: ?>
                        <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>" alt="<?php echo e($handyman->user->name); ?>"
                            class="handyman-profile-img">
                    <?php endif; ?>
                </div>



                <div class="select-tasker-section">
                    <button type="submit" name="selected_tasker" value="<?php echo e($handyman->id); ?>"
                        class="btn btn-primary select-tasker-btn">
                        Select & Continue
                    </button>
                    <p class="chat-info">You can chat with your Tasker, adjust task details, or
                        change task
                        time after booking.</p>
                </div>
            </div>
            <div class="handyman-details">
                <div class="handyman-detailsData-section">
                    <div>
                        <div>
                            <h3><?php echo e($handyman->user->name); ?></h3>
                        </div>
                        <div class="handyman-rating">
                            <span class="rating-star">★</span>
                            <span><?php echo e($handyman->user->rating); ?> (<?php echo e($handyman->reviews_count); ?>

                                reviews)</span>
                        </div>
                        <div class="handyman-tasks">
                            <span>
                                <i class="fa-solid fa-check-double"></i> Done
                                <?php echo e($handyman->gigs_in_category_count ?? 0); ?>

                                <!-- Display zero if the count is null or doesn't exist -->
                                <?php echo e($category->name); ?> task
                            </span>
                        </div>
                        <div class="handyman-tasks">
                            <span> <i class="fa-solid fa-clipboard-check"></i>
                                <?php echo e($handyman->gigs_count); ?>

                                Successful tasks overall</span>
                        </div>
                    </div>
                    <div class="handyman-price-section">
                        <p class="handyman-price">
                            JD<?php echo e(number_format($handyman->price_per_hour, 2)); ?>/hr
                        </p>
                    </div>
                </div>

                <div class="handyman-description">
                    <h4>How I can help:</h4>
                    <p><?php echo e(Str::limit($handyman->bio, 200)); ?></p>
                    <a href="#" class="read-more-link">Read More</a>
                </div>

                <div class="handyman-review">
                    <?php if($handyman->latest_review): ?>
                        <div class="review-author">

                            <img src="<?php echo e(asset('storage/profile_images/' . $handyman->latest_review->user->image)); ?>"
                                alt="Reviewer" class="reviewer-img">
                        </div>

                        <div class="reviewer-detailsText">
                            <p class="reviewer-name">
                                <?php echo e($handyman->latest_review->user->name); ?>

                            </p>
                            <p class="review-text">
                                <?php echo e(Str::limit($handyman->latest_review->review, 100)); ?></p>
                        </div>
                        <div class="reviewer-details">

                            <p class="review-date"><?php echo e($handyman->latest_review->created_at); ?>

                            </p>
                        </div>
                    <?php else: ?>
                        <p>No reviews yet.</p>
                    <?php endif; ?>
                </div>

            </div>

        </div>





    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/gig_proccess/step2_list.blade.php ENDPATH**/ ?>