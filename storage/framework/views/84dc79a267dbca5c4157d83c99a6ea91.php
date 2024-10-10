<?php $__env->startSection('content'); ?>
    <!--==============================
                                                                                Breadcumb
                                                                            ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">

        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Book A Gig</h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li>Book A Gig</li>

                    <li>Step 2</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="step-two-container">
                <div class="progress-bar-container">
                    <div class="progress-bar-step completed">1</div>
                    <div class="progress-bar-line completed"></div>
                    <div class="progress-bar-step active">2</div>
                    <div class="progress-bar-line"></div>
                    <div class="progress-bar-step">3</div>
                    <div class="progress-bar-line"></div>
                    <div class="progress-bar-step">4</div>
                </div>

                <div class="service-info">
                    <span class="sub-title">
                        <img src="<?php echo e(asset('assets/img/theme-img/title_icon.svg')); ?>" alt="Icon">
                        <?php echo e($category->name); ?>

                    </span>
                    <h4><?php echo e($service->name); ?></h4>
                    <p class="explanation-text">
                        Filter and sort to find your Tasker. Then view their availability to request your date and time.
                    </p>
                </div>
                <div class="step2Form">

                    <!-- Filter Form -->
                    <form class="filter-step2-section" id="filterForm" method="GET"
                        action="<?php echo e(route('gig.filterHandymen')); ?>">
                        <?php echo csrf_field(); ?>

                        <!-- Filter Section -->
                        <div class="filter-step2-form-group">
                            <label for="date">Date</label>
                            <div class="filter-step2-date-options">
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="applyFilter('today')">Today</button>
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="applyFilter('within_3_days')">Within 3 Days</button>
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="applyFilter('within_a_week')">Within A Week</button>

                                <!-- Choose Dates Button to open the calendar -->
                                <button class="filter-step2-date-btn" id="choose_dates_btn" type="button"
                                    style="position: relative;">Choose Dates</button>


                                <!-- Hidden input field for the date range -->
                                <input type="text" id="choose_dates_input" name="choose_dates" class="d-none">
                            </div>
                        </div>

                        <hr>

                        <!-- Time of Day Filter -->
                        <div class="filter-step2-form-group">
                            <label>Time of day</label>
                            <div class="filter-step2-time-options">
                                <div class="filter-step2-checkbox-group">
                                    <input type="checkbox" id="morning" name="time_of_day[]" value="morning">
                                    <label for="morning">Morning (8am - 12pm)</label>
                                </div>
                                <div class="filter-step2-checkbox-group">
                                    <input type="checkbox" id="afternoon" name="time_of_day[]" value="afternoon">
                                    <label for="afternoon">Afternoon (12pm - 5pm)</label>
                                </div>
                                <div class="filter-step2-checkbox-group">
                                    <input type="checkbox" id="evening" name="time_of_day[]" value="evening">
                                    <label for="evening">Evening (5pm - 9:30pm)</label>
                                </div>
                            </div>
                        </div>

                        <hr>


                        <!-- Price Filter -->
                        <div class="filter-step2-form-group">
                            <label for="price_range">Price</label>
                            <div class="filter-step2-price-range">
                                <input type="range" name="price_range" min="5" max="50" step="5"
                                    class="filter-step2-slider" id="price_range" value="<?php echo e(old('price_range', 25)); ?>"
                                    oninput="document.getElementById('price_value').textContent = this.value">
                                <div class="filter-step2-price-values">
                                    <span>JD 5</span>
                                    <span id="price_value"><?php echo e(old('price_range', 25)); ?></span>
                                    <span>JD 50+</span>
                                </div>
                            </div>
                            <p class="filter-step2-average-price">The average hourly rate is JD 10/hr</p>
                        </div>
                        

                        <!-- Hidden input to pass the date filter value -->
                        <input type="hidden" name="date_filter" id="date_filter">
                    </form>



                    <!-- Handyman List -->
                    <div class="handyman-list">
                        <form action="<?php echo e(route('gig.storeStep2')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <!-- Skip Button -->

                            <button type="submit" name="skip" value="true" class="skipBtn btn btn-secondary">Skip and
                                Continue</button>

                            <!-- Handymen Loop -->
                            <?php $__currentLoopData = $handymen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $handyman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="handyman-card filter-step2-handyman-card">
                                    <div class="handyman-profile-section">
                                        <div class="handyman-pic-section">
                                            <div class="handyman-thepic-section">
                                                <?php if($handyman->user && $handyman->user->image): ?>
                                                    <img src="<?php echo e(asset('storage/profile_images/' . $handyman->user->image)); ?>"
                                                        alt="<?php echo e($handyman->user->name); ?>" class="handyman-profile-img">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>"
                                                        alt="<?php echo e($handyman->user->name); ?>" class="handyman-profile-img">
                                                <?php endif; ?>
                                            </div>

                                            <div class="select-tasker-section">
                                                <button type="submit" name="selected_tasker"
                                                    value="<?php echo e($handyman->id); ?>"
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
                                                    <h3><?php echo e($handyman->user->name); ?></h3>
                                                    <div class="handyman-rating">
                                                        <span class="rating-star">★</span>
                                                        <span><?php echo e($handyman->user->rating); ?>

                                                            (<?php echo e($handyman->reviews_count); ?>

                                                            reviews)
                                                        </span>
                                                    </div>
                                                    <div class="handyman-tasks">
                                                        <span>
                                                            <i class="fa-solid fa-check-double"></i> Done
                                                            <?php echo e($handyman->gigs_in_category_count ?? 0); ?>

                                                            <?php echo e($category->name); ?>

                                                            task
                                                        </span>
                                                    </div>
                                                    <div class="handyman-tasks">
                                                        <span> <i class="fa-solid fa-clipboard-check"></i>
                                                            <?php echo e($handyman->gigs_count); ?> Successful tasks overall
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="handyman-price-section">
                                                    <p class="handyman-price">
                                                        JD<?php echo e(number_format($handyman->price_per_hour, 2)); ?>/hr</p>
                                                </div>
                                            </div>

                                            <div class="handyman-description">
                                                <h4>How I can help:</h4>
                                                <p><?php echo e(Str::limit($handyman->bio, 200)); ?></p>
                                                <a href="<?php echo e(route('Onehandyman_clientVeiw', ['handymanId' => $handyman->id])); ?>"
                                                    class="read-more-link">Read More</a>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function applyFilter(filterValue) {
            document.getElementById('date_filter').value = filterValue;
            document.getElementById('filterForm').submit();
        }
        // Initialize Flatpickr on the Choose Dates input
        var datePicker = flatpickr("#choose_dates_input", {
            mode: "range", // Allows users to select a range of dates
            dateFormat: "Y-m-d", // Format the date as year-month-day
            minDate: "today", // Disable past dates
            position: "below", // Ensure the date picker appears below the button
            appendTo: document.getElementById('choose_dates_btn'), // Append the calendar to the button
            onChange: function(selectedDates, dateStr, instance) {
                document.getElementById('choose_dates_input').classList.remove('d-none'); // Show the input
            },
            onClose: function(filterValue) {
                document.getElementById('choose_dates_input').classList.add(
                    'd-none'); // Hide the input after selection
                document.getElementById('filterForm').submit();

            }
        });

        // When clicking the Choose Dates button, open the calendar
        document.getElementById('choose_dates_btn').addEventListener('click', function() {
            datePicker.open(); // Open the Flatpickr instance
        });


        // Automatically submit the form when a time of day checkbox is checked
        document.querySelectorAll('input[name="time_of_day[]"]').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                document.getElementById('filterForm').submit();
            });
        });

        document.getElementById('price_range').addEventListener('change', function() {
            document.getElementById('filterForm').submit(); // Trigger form submission
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/gig_proccess/step2.blade.php ENDPATH**/ ?>