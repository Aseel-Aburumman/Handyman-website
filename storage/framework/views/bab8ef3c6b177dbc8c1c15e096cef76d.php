<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper" data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Task Detail</h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li><a href="<?php echo e(route('customer.Home')); ?>">Dashboard</a></li>
                    <li>Task Detail</li>
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
                                alt="Icon">Lets Get it Done</span>
                        <h2 class="sec-title">Check all the proposal you got </h2>


                        <p class="sec-text">Review their proposal thoroughly, including the services they are offering, the
                            timeline they've estimated for the job, and whether it aligns with your expectations. If it
                            doesn’t seem suitable, engage in a discussion to refine the details and find the best fit. Once
                            you're satisfied with the adjustments, move forward with hiring them!</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class=" pt-0 container d-flex overflow-hidden space" id="service-sec">




        <div class="container d-flex flex-column task-gig-card1">

            <div class=" task-gig-card ">
                <form action="<?php echo e(route('storeowner.new')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <!-- Select Skill from Dropdown -->
                    <div class="form-group">
                        <label for="skill_id">Select Skill:</label>
                        <textarea name="description" class="form-control" rows="3" required></textarea>

                    </div>

                    <!-- Upload Skill Proof Image -->
                    <div class="form-group">
                        <label for="certificate_image">Upload Skill Certificate (Image):</label>
                        <input type="file" name="certificate_image" class="form-control" required>
                    </div>

                    <!-- Description for the Certificate -->
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea name="description" class="form-control" rows="3" required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success">Add Skill</button>
                </form>

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

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/main_strc/b_storeowner.blade.php ENDPATH**/ ?>