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

                    <li>Step 3</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="step-three-container">
                <div class="progress-bar-container">
                    <div class="progress-bar-step completed">1</div>
                    <div class="progress-bar-line completed"></div>
                    <div class="progress-bar-step completed">2</div>
                    <div class="progress-bar-line completed"></div>
                    <div class="progress-bar-step active">3</div>
                    <div class="progress-bar-line"></div>
                    <div class="progress-bar-step">4</div>
                </div>

                <!-- Task Date and Time Form -->
                <form action="<?php echo e(route('gig.storeStep3')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <!-- Date -->
                    <?php if(!$handyman): ?>
                        <div class="form-group">
                            <label class="checkBudgetLabel" for="date">Choose Task Date</label>
                            <input type="date" name="date" id="date" class="form-control"
                                min="<?php echo e(now()->toDateString()); ?>" required>
                        </div>
                    <?php else: ?>
                        <label class="checkBudgetLabel" for="date">Choose Task Date</label>

                        <input type="text" name="date" id="task_date" class="form-control" required
                            placeholder="DD-MM-YYYY">
                        <!-- Hidden input field for the date range -->
                        <input type="text" id="choose_dates_input" name="choose_dates" class="d-none">
                    <?php endif; ?>
                    <!-- Time -->
                    <div class="form-group">
                        <label class="checkBudgetLabel" for="time">Choose Start Time</label>
                        <input type="time" name="time" id="time" class="form-control" required>
                    </div>

                    <?php if(!$handyman): ?>
                        <label class="checkBudgetLabel">Choose Your Budget</label>

                        <div class="checkBudget form-check form-group">
                            <input type="radio" class="form-check-input" id="budget1" name="budget" value="5"
                                checked>
                            <label class=" form-check-label" for="budget1">5-10 JD</label>
                        </div>

                        <div class="checkBudget form-check form-group">
                            <input type="radio" class="form-check-input" id="budget2" name="budget" value="10">
                            <label class=" form-check-label" for="budget2">10-20 JD</label>
                        </div>

                        <div class="checkBudget form-check form-group">
                            <input type="radio" class="form-check-input" id="budget3" name="budget" value="20">
                            <label class=" form-check-label" for="budget3">20+ JD</label>
                        </div>
                    <?php endif; ?>

                    <button type="submit" class="btn btn-primary">Continue to Step 4</button>
                </form>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const bookedDates = <?php echo json_encode($bookedDates, 15, 512) ?>; // Assuming this array is passed from the server

            flatpickr("#task_date", {
                dateFormat: "Y-m-d", // format of the date (same as Laravel format)
                minDate: "<?php echo e(now()->toDateString()); ?>", // Disable dates before today
                disable: bookedDates, // Disable booked dates
                locale: {
                    firstDayOfWeek: 1 // Monday as the first day of the week (optional)
                }

            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/gig_proccess/step3.blade.php ENDPATH**/ ?>