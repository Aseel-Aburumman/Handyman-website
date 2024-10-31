<?php $__env->startSection('content'); ?>
    <!--==============================
                                                                                                                                                                                                                                                    Breadcumb
                                                                                                                                                                                                                                                ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">

        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo e(__('messages.BookAGig')); ?>

                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.Home')); ?>

                        </a></li>
                    <li><?php echo e(__('messages.BookAGig')); ?>

                        Book A Gig</li>

                    <li><?php echo e(__('messages.Step')); ?>

                        2</li>
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
                    <p class="explanation-text"><?php echo e(__('messages.gigFilter')); ?>



                    </p>
                </div>
                <div class="step2Form">

                    <!-- Filter Form -->
                    <form class="filter-step2-section" id="filterForm" method="GET"
                        action="<?php echo e(route('gig.filterHandymen')); ?>">

                        <!-- Date Filter -->
                        <div class="filter-step2-form-group">
                            <label for="date"><?php echo e(__('messages.Date')); ?>

                            </label>
                            <div class="filter-step2-date-options">

                                <!-- Date Filter Buttons -->
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('today', this)"><?php echo e(__('messages.Today')); ?>

                                </button>
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('within_3_days', this)"><?php echo e(__('messages.3Days')); ?>

                                </button>
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('within_a_week', this)"><?php echo e(__('messages.Week')); ?>

                                </button>


                                <!-- Choose Dates Button -->
                                <button class="filter-step2-date-btn" id="choose_dates_btn"
                                    type="button"><?php echo e(__('messages.chooseDate')); ?>

                                </button>
                                <!-- Hidden input for date range -->
                                <input type="text" id="choose_dates_input" name="choose_dates" class="d-none">
                                <!-- Hidden input to hold the selected date filter -->
                                <input type="hidden" name="date_filter" id="date_filter">
                            </div>
                        </div>

                        <!-- Time of Day Filter -->
                        

                        <!-- Price Filter -->
                        <div class="filter-step2-form-group">
                            <label for="price_range"><?php echo e(__('messages.Price')); ?>

                            </label>
                            <div class="filter-step2-price-range">
                                <input type="range" name="price_range" min="5" max="50" step="5"
                                    id="price_range" value="<?php echo e(old('price_range', 25)); ?>"
                                    oninput="document.getElementById('price_value').textContent = this.value">
                                <div class="filter-step2-price-values">
                                    <span><?php echo e(__('messages.JD')); ?>

                                        5</span>
                                    <span id="price_value"><?php echo e(old('price_range', 25)); ?></span>
                                    <span><?php echo e(__('messages.JD')); ?>

                                        50+</span>
                                </div>
                            </div>
                        </div>

                        <!-- Rating Filter -->
                        <div class="filter-step2-form-group">
                            <label for="rating"><?php echo e(__('messages.Rating')); ?>

                            </label>
                            <select name="rating" id="rating">
                                <option value=""><?php echo e(__('messages.SelectRating')); ?>

                                </option>
                                <option value="1">1 <?php echo e(__('messages.StarAbove')); ?>

                                </option>
                                <option value="2">2 <?php echo e(__('messages.StarsAbove')); ?>

                                </option>
                                <option value="3">3 <?php echo e(__('messages.StarsAbove')); ?>

                                </option>
                                <option value="4">4 <?php echo e(__('messages.StarsAbove')); ?>

                                </option>
                                <option value="5">5 <?php echo e(__('messages.Stars')); ?>

                                </option>
                            </select>
                        </div>

                        <!-- Gig Count Filter -->
                        <div class="filter-step2-form-group">
                            <label for="gig_count"><?php echo e(__('messages.NumberOfGigs')); ?>

                            </label>
                            <select name="gig_count" id="gig_count">
                                <option value=""><?php echo e(__('messages.SelectNumberofGigs')); ?>

                                </option>
                                <option value="1">1 <?php echo e(__('messages.Gigabove')); ?>

                                </option>
                                <option value="5">5 <?php echo e(__('messages.Gigsabove')); ?>

                                </option>
                                <option value="10">10 <?php echo e(__('messages.Gigsabove')); ?>

                                </option>
                                <option value="20">20 <?php echo e(__('messages.Gigsabove')); ?>

                                </option>
                            </select>
                        </div>






                        <!-- Apply Filters Button -->
                        <button type="submit"
                            class="mt-2 submitBtnFilter btn btn-primary"><?php echo e(__('messages.ApplyFilters')); ?>

                        </button>


                        <a href="<?php echo e(route('gig.step2')); ?>" class="w-100 mt-2 th-btn "><?php echo e(__('messages.Reset')); ?>

                            <i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></a>
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
                        <form action="<?php echo e(route('gig.storeStep2')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <!-- Skip Button -->

                            <button type="submit" name="skip" value="true"
                                class="skipBtn btn btn-secondary"><?php echo e(__('messages.SkipContinue')); ?>

                            </button>

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
                                                    <?php echo e(__('messages.SelectContinue')); ?>


                                                </button>
                                                <p class="chat-info"><?php echo e(__('messages.BookAGigP2')); ?>

                                                </p>
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

                                                            <?php echo e(__('messages.reviews')); ?>)
                                                        </span>
                                                    </div>
                                                    <div class="handyman-tasks">
                                                        <span>
                                                            <i class="fa-solid fa-check-double"></i>
                                                            <?php echo e(__('messages.Done')); ?>


                                                            <?php echo e($handyman->gigs_in_category_count ?? 0); ?>

                                                            <?php echo e($category->name); ?>

                                                            <?php echo e(__('messages.task')); ?>


                                                        </span>
                                                    </div>
                                                    <div class="handyman-tasks">
                                                        <span> <i class="fa-solid fa-clipboard-check"></i>
                                                            <?php echo e($handyman->gigs_count); ?>

                                                            <?php echo e(__('messages.Successfultasks')); ?>


                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="handyman-price-section">
                                                    <p class="handyman-price">
                                                        <?php echo e(__('messages.JD')); ?>

                                                        <?php echo e(number_format($handyman->price_per_hour, 2)); ?>/<?php echo e(__('messages.hr')); ?>

                                                    </p>
                                                </div>
                                            </div>

                                            <div class="handyman-description">
                                                <h4><?php echo e(__('messages.Howhelp')); ?>

                                                    :</h4>
                                                <p><?php echo e(Str::limit($handyman->bio, 200)); ?></p>
                                                <a href="<?php echo e(route('Onehandyman_clientVeiw', ['handymanId' => $handyman->id])); ?>"
                                                    class="read-more-link"><?php echo e(__('messages.ReadMore')); ?>

                                                </a>
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
                                                    <p><?php echo e(__('messages.Noreviews')); ?> </p>
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

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/gig_proccess/step2.blade.php ENDPATH**/ ?>