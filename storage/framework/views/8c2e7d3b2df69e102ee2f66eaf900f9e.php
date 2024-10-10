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



                <div class="step2Form">

                    <!-- Filter Form -->
                    <!-- Filter Form -->
                    <form class="filter-step2-section" id="filterForm" method="GET"
                        action="<?php echo e(route('handymen.filterHandymen')); ?>">

                        <!-- Date Filter -->
                        <div class="filter-step2-form-group">
                            <label for="date">Date</label>
                            <div class="filter-step2-date-options">
                                

                                <!-- Date Filter Buttons -->
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('today', this)">Today</button>
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('within_3_days', this)">Within 3 Days</button>
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('within_a_week', this)">Within A Week</button>


                                <!-- Choose Dates Button -->
                                <button class="filter-step2-date-btn" id="choose_dates_btn" type="button">Choose
                                    Dates</button>
                                <!-- Hidden input for date range -->
                                <input type="text" id="choose_dates_input" name="choose_dates" class="d-none">
                                <!-- Hidden input to hold the selected date filter -->
                                <input type="hidden" name="date_filter" id="date_filter">
                            </div>
                        </div>

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

                        <!-- Price Filter -->
                        <div class="filter-step2-form-group">
                            <label for="price_range">Price</label>
                            <div class="filter-step2-price-range">
                                <input type="range" name="price_range" min="5" max="50" step="5"
                                    id="price_range" value="<?php echo e(old('price_range', 25)); ?>"
                                    oninput="document.getElementById('price_value').textContent = this.value">
                                <div class="filter-step2-price-values">
                                    <span>JD 5</span>
                                    <span id="price_value"><?php echo e(old('price_range', 25)); ?></span>
                                    <span>JD 50+</span>
                                </div>
                            </div>
                        </div>

                        <!-- Rating Filter -->
                        <div class="filter-step2-form-group">
                            <label for="rating">Rating</label>
                            <select name="rating" id="rating">
                                <option value="">Select Rating</option>
                                <option value="1">1 Star & above</option>
                                <option value="2">2 Stars & above</option>
                                <option value="3">3 Stars & above</option>
                                <option value="4">4 Stars & above</option>
                                <option value="5">5 Stars</option>
                            </select>
                        </div>

                        <!-- Gig Count Filter -->
                        <div class="filter-step2-form-group">
                            <label for="gig_count">Number of Gigs Completed</label>
                            <select name="gig_count" id="gig_count">
                                <option value="">Select Number of Gigs</option>
                                <option value="1">1 Gig & above</option>
                                <option value="5">5 Gigs & above</option>
                                <option value="10">10 Gigs & above</option>
                                <option value="20">20 Gigs & above</option>
                            </select>
                        </div>

                        

                        <!-- Skill Filter with Toggle Button -->
                        <div class="filter-step2-form-group">
                            <div class="d-flex">
                                <label class="mt-1" for="skills">Skills</label>
                                <button type="button" class="btn showSkillBtn btn-secondary" id="toggleSkillsBtn"
                                    onclick="toggleSkills()">Show Skills</button>
                            </div>

                            <!-- Skills List (initially hidden) -->
                            <div id="skillsList" class="filter-step2-skill-options" style="display: none;">
                                <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="filter-step2-checkbox-group">
                                        <input type="checkbox" id="skill_<?php echo e($skill->id); ?>" name="skills[]"
                                            value="<?php echo e($skill->id); ?>">
                                        <label for="skill_<?php echo e($skill->id); ?>"><?php echo e($skill->name); ?></label>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>


                        <!-- Apply Filters Button -->
                        <button type="submit" class="mt-2 submitBtnFilter btn btn-primary">Apply Filters</button>


                        <a href="<?php echo e(route('handymen.index')); ?>" class="w-100 mt-2 th-btn ">Reset <i
                                class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></a>
                    </form>



                    <script>
                        // Set the value of the hidden date filter input when a button is clicked
                        


                        function setDateFilter(filterValue, buttonElement) {
                            // Set the hidden input field value
                            document.getElementById('date_filter').value = filterValue;

                            // Get all the date buttons
                            const dateButtons = document.querySelectorAll('.filter-step2-date-btn');

                            // Remove the active class from all date buttons
                            dateButtons.forEach(function(button) {
                                button.classList.remove('active-filter-btn');
                            });

                            // Add the active class to the clicked button
                            buttonElement.classList.add('active-filter-btn');
                        }
                        // Initialize Flatpickr for the 'Choose Dates' input
                        var datePicker = flatpickr("#choose_dates_input", {
                            mode: "range",
                            dateFormat: "Y-m-d",
                            minDate: "today",
                            onChange: function(selectedDates, dateStr) {
                                document.getElementById('choose_dates_input').classList.remove('d-none');
                            }
                        });

                        // Open the Flatpickr when the "Choose Dates" button is clicked
                        document.getElementById('choose_dates_btn').addEventListener('click', function() {
                            datePicker.open();
                        });

                        function toggleSkills() {
                            var skillsList = document.getElementById('skillsList');
                            var toggleButton = document.getElementById('toggleSkillsBtn');

                            // Toggle the visibility of the skills list
                            if (skillsList.style.display === 'none') {
                                skillsList.style.display = 'block';
                                toggleButton.textContent = 'Hide Skills'; // Change button text to "Hide"
                            } else {
                                skillsList.style.display = 'none';
                                toggleButton.textContent = 'Show Skills'; // Change button text to "Show"
                            }
                        }
                    </script>


                    <!-- Handyman List -->
                    <div class="handyman-list">


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
                                            <form class="w-100 mt-3"
                                                action="<?php echo e(route('chat', ['receiverId' => $handyman->user->id])); ?>"
                                                method="GET">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit"
                                                    class="w-100 btn btn-primary select-tasker-btn ">Chat
                                                    and Figure
                                                    what
                                                    next!</button>
                                            </form>
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
                    </div>
                </div>
            </div>
        </div>
    </section>




    


    <style>
        button.filter-step2-date-btn {
            z-index: 1;
            /* Bring the button to the top */
            position: relative;
            /* Ensure it's positioned correctly */
        }

        /* Add a class for the active state */
        .active-filter-btn {
            background-color: #F37529 !important;
            /* Change to your desired color */
            color: white;
            /* Optional: change text color */
        }

        /* Style for the toggle button */
        #toggleSkillsBtn {
            margin-bottom: 10px;
        }

        /* Optionally, add some padding or style for the skill list */
        #skillsList {
            padding: 10px;
            background-color: #f9f9f9;
            /* Light background color for the skill list */
            border: 1px solid #ddd;
            /* Border for the skill list */
        }

        .showSkillBtn {
            background-color: #F37529 !important;
            line-height: 10px;
            margin-left: 10px;
        }

        .submitBtnFilter {
            border-radius: 25px;

        }

        .th-btn {
            padding: 15px;
            font-size: 16px
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/main_strc/allhandymans.blade.php ENDPATH**/ ?>