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

                    <li>Step 1</li>
                </ul>
            </div>
        </div>
    </div>



    <section class="overflow-hidden space" id="service-sec">
        <div class="shape-mockup spin" data-top="0%" data-right="0%"><img src="<?php echo e(asset('assets/img/shape/lines_1.png')); ?>"
                alt="shape"></div>
        <div class="container">
            <div class="step-one-container">
                <div class="progress-bar-container">
                    <div class="progress-bar-step active">1</div>
                    <div class="progress-bar-line"></div>
                    <div class="progress-bar-step">2</div>
                    <div class="progress-bar-line"></div>
                    <div class="progress-bar-step">3</div>
                    <div class="progress-bar-line"></div>
                    <div class="progress-bar-step">4</div>
                </div>

                <div class="service-info">
                    <span class="sub-title"><img src="<?php echo e(asset('assets/img/theme-img/title_icon.svg')); ?>"
                            alt="Icon"><?php echo e($category->name); ?></span>
                    <h4><?php echo e($service->name); ?></h4>
                    <p class="explanation-text">
                        Tell us about your task. We use these details to show Taskers in your area who fit your needs.
                    </p>
                </div>

                <!-- Task Form -->
                <div class="task-form">
                    <form action="<?php echo e(route('gig.storeStep1')); ?>" method="POST">
                        <?php echo csrf_field(); ?>


                        <!-- Add hidden input to pass the category_id -->
                        <input type="hidden" name="category_id" value="<?php echo e($category->id); ?>">
                        <input type="hidden" name="service_id" value="<?php echo e($service->id); ?>">
                        <!-- Car Requirement -->
                        

                        <!-- Task Location -->
                        <div class="form-group">
                            <label for="location">Task Location</label>
                            <input type="text" name="location" id="location" class="form-control" required>
                        </div>

                        <!-- End Address (for moving category) -->
                        <?php if($category->id == 3): ?>
                            <div class="form-group">
                                <label for="end_address">End Address</label>
                                <input type="text" name="end_address" id="end_address" class="form-control">
                            </div>
                        <?php endif; ?>

                        <!-- Estimated Time -->
                        <div class="form-group">
                            <label for="estimated_time">Estimated Time</label>
                            <select name="estimated_time" id="estimated_time" class="form-control">
                                <option value="1">Small - Est. 1 hr</option>
                                <option value="2">Medium - Est. 2-3 hrs</option>
                                <option value="4">Large - Est. 4+ hrs</option>
                            </select>
                        </div>

                        <!-- Task title -->
                        <div class="form-group">
                            <label for="title">Tilte of the task</label>
                            <textarea name="title" id="title" class="form-control" required></textarea>
                        </div>

                        <!-- Task Description -->
                        <div class="form-group">
                            <label for="description">Details about the task</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Continue to Step 2</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/gig_proccess/step-one.blade.php ENDPATH**/ ?>