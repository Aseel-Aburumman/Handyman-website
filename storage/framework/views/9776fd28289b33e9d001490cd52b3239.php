<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">

        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo e(__('messages.BookAGig')); ?>

                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.Home')); ?>

                        </a></li>
                    <li><?php echo e(__('messages.BookAGig')); ?>

                    </li>

                    <li><?php echo e(__('messages.Step')); ?>

                        4</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="overflow-hidden space" id="service-sec">
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <div class="container">
            <div class="step-four-container">
                <div class="progress-bar-container">
                    <div class="progress-bar-step completed">1</div>
                    <div class="progress-bar-line completed"></div>
                    <div class="progress-bar-step completed">2</div>
                    <div class="progress-bar-line completed"></div>
                    <div class="progress-bar-step completed">3</div>
                    <div class="progress-bar-line completed"></div>
                    <div class="progress-bar-step active">4</div>
                </div>

                



                <div class="step4-wrapper">
                    <!-- Left Side - Payment and Promo Code -->
                    

                    <div class="payment-method-section">
                        <h2><?php echo e(__('messages.Confirmdetails')); ?>

                        </h2>
                        <hr>
                        <form action="<?php echo e(route('gig.storeStep4')); ?>" method="POST" id="payment-form">
                            <?php echo csrf_field(); ?>

                            <!-- Payment Method -->
                            <div class="form-group">
                                <label for="card_number">
                                    <h3><?php echo e(__('messages.Paymentmethod')); ?>

                                    </h3>
                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" id="pay_by_card"
                                        value="card" checked>
                                    <label class="form-check-label" for="pay_by_card"><?php echo e(__('messages.PayCard')); ?>

                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" id="pay_by_cash"
                                        value="cash">
                                    <label class="form-check-label" for="pay_by_cash"><?php echo e(__('messages.PayCash')); ?>

                                    </label>
                                </div>
                            </div>

                            <!-- Card Payment Fields -->
                            <div id="card-payment-fields">

                                <div class="form-group">

                                    <label for="card_number">
                                        <p><?php echo e(__('messages.BookAGigP4')); ?>

                                        </p>
                                    </label> <input type="text" id="card_number" name="card_number" class="form-control"
                                        placeholder="1234 5678 9123 4567">
                                </div>
                                <div class="form-group">
                                    <label for="card_expiry">Expiry Date</label>
                                    <input type="text" id="card_expiry" name="card_expiry" class="form-control"
                                        placeholder="MM/YY">
                                </div>
                                <div class="form-group">
                                    <label for="card_cvc">CVC</label>
                                    <input type="text" id="card_cvc" name="card_cvc" class="form-control"
                                        placeholder="123">
                                </div>
                                <div class="form-group">
                                    <label for="card_name">Cardholder Name</label>
                                    <input type="text" id="card_name" name="card_name" class="form-control"
                                        placeholder="Cardholder Name">
                                </div>
                            </div>


                            <!-- Confirm Button -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><?php echo e(__('messages.ConfirmChat')); ?>

                                </button>
                            </div>
                        </form>
                    </div>



                    <!-- Right Side - Task Details Summary -->
                    <div class="task-details-summary">
                        <div class="upper-taskerinfo">
                            <h4><?php echo e($service->name); ?></h4>
                            <div class="tasker-info">
                                <?php if($handyman): ?>
                                    <img src="<?php echo e(asset('storage/profile_images/' . $handyman->user->image)); ?>"
                                        alt="<?php echo e($handyman->user->name); ?>" class="handyman-profile-img-payment">
                                    <p><?php echo e($handyman->user->name); ?></p>
                                <?php else: ?>
                                    <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>" alt="defualt"
                                        class="handyman-profile-img-payment">
                                    <p><?php echo e(__('messages.BookAGigP5')); ?>

                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="down-taskinfo">
                            <div class="task-info">
                                <p class="p-taskinfo"><strong><i class="fa-solid fa-calendar"></i>
                                        <?php echo e(__('messages.Date')); ?>

                                        : </strong>
                                    <?php echo e(session('task_date')); ?>

                                </p>
                                <p class="p-taskinfo"><strong><i class="fa-solid fa-clock"></i>
                                        <?php echo e(__('messages.Time')); ?>

                                        : </strong>
                                    <?php echo e(session('task_time')); ?>

                                </p>
                                <p class="p-taskinfo"><i class="fa-solid fa-location-dot"></i> <strong>
                                        <?php echo e(__('messages.Location')); ?>

                                        : </strong>
                                    <?php echo e(session('location')); ?> </p>
                                <p class="p-taskinfo"><i class="fa-solid fa-hourglass-start"></i><strong>
                                        <?php echo e(__('messages.EstimatedTime')); ?>

                                        : </strong> <?php echo e(session('estimated_time')); ?> <?php echo e(__('messages.hourminimum')); ?>

                                </p>
                                
                            </div>
                            <hr>
                            <div class="form-group">
                                <p>Your Gig details</p>
                                <textarea class="form-control task-details-textarea" placeholder="Your Gig details" required></textarea>
                                <span class="error-text"><?php echo e(__('messages.Cantbeblank')); ?>

                                </span>
                            </div>
                            <!-- Price Details -->
                            <hr>

                            <div class="price-details">
                                <h4><?php echo e(__('messages.PriceDetails')); ?>

                                </h4>
                                <div class="price-section">
                                    <p><strong><?php echo e(__('messages.HourlyRate')); ?>

                                            :</strong>
                                    </p>
                                    <p> <?php echo e(__('messages.JD')); ?>

                                        <?php echo e($hourlyRate); ?>

                                        /<?php echo e(__('messages.hr')); ?>

                                    </p>
                                </div>
                                <div class="price-section">

                                    <p><strong><?php echo e(__('messages.Trust')); ?>

                                        </strong>
                                    </p>
                                    <p><?php echo e(__('messages.JD')); ?>

                                        <?php echo e(number_format($hourlyRate * $estimatedTime * 0.16, 2)); ?></p>

                                </div>
                                <div class="price-section">

                                    <p><strong><?php echo e(__('messages.Total')); ?>

                                            :</strong> </p>
                                    <p><?php echo e(__('messages.JD')); ?>

                                        <?php echo e($total); ?></p>
                                </div>

                            </div>
                            <p><?php echo e(__('messages.BookAGigP6')); ?>


                            </p>
                        </div>

                    </div>
                </div>




            </div>
        </div>
    </section>
    <script>
        const cardFields = document.getElementById('card-payment-fields');
        const payByCardRadio = document.getElementById('pay_by_card');
        const payByCashRadio = document.getElementById('pay_by_cash');

        payByCardRadio.addEventListener('change', function() {
            cardFields.style.display = 'block';
        });

        payByCashRadio.addEventListener('change', function() {
            cardFields.style.display = 'none';
        });

        // Initially show card fields
        cardFields.style.display = 'block';
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/gig_proccess/step4.blade.php ENDPATH**/ ?>