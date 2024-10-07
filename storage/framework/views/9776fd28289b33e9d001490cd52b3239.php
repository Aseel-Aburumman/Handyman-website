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

                    <li>Step 4</li>
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
                        <h2>Confirm details</h2>
                        <hr>
                        <form action="<?php echo e(route('gig.storeStep4')); ?>" method="POST" id="payment-form">
                            <?php echo csrf_field(); ?>

                            <!-- Payment Method -->
                            <div class="form-group">
                                <label for="card_number">
                                    <h3>Payment method</h3>
                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" id="pay_by_card"
                                        value="card" checked>
                                    <label class="form-check-label" for="pay_by_card">Pay by Card</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" id="pay_by_cash"
                                        value="cash">
                                    <label class="form-check-label" for="pay_by_cash">Pay by Cash</label>
                                </div>
                            </div>

                            <!-- Card Payment Fields -->
                            <div id="card-payment-fields">

                                <div class="form-group">

                                    <label for="card_number">
                                        <p>You may see a temporary hold on your payment method in the amount of your
                                            Tasker's
                                            hourly rate. Don't worry - you're only billed when your task is complete!</p>
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
                                <button type="submit" class="btn btn-primary">Confirm and chat</button>
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
                                    <p>Handymans will be bidding on you task</p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="down-taskinfo">
                            <div class="task-info">
                                <p class="p-taskinfo"><strong><i class="fa-solid fa-calendar"></i> Date : </strong>
                                    <?php echo e(session('task_date')); ?>

                                </p>
                                <p class="p-taskinfo"><strong><i class="fa-solid fa-clock"></i> Time : </strong>
                                    <?php echo e(session('task_time')); ?>

                                </p>
                                <p class="p-taskinfo"><i class="fa-solid fa-location-dot"></i> <strong> Location : </strong>
                                    <?php echo e(session('location')); ?> </p>
                                <p class="p-taskinfo"><i class="fa-solid fa-hourglass-start"></i><strong> Estimated
                                        Time: </strong> <?php echo e(session('estimated_time')); ?> hour minimum</p>
                                
                            </div>
                            <hr>
                            <div class="form-group">
                                <p>Your Gig details</p>
                                <textarea class="form-control task-details-textarea" placeholder="Your Gig details" required></textarea>
                                <span class="error-text">Can't be blank</span>
                            </div>
                            <!-- Price Details -->
                            <hr>

                            <div class="price-details">
                                <h4>Price Details</h4>
                                <div class="price-section">
                                    <p><strong>Hourly Rate:</strong>
                                    </p>
                                    <p> JD <?php echo e($hourlyRate); ?>

                                        /hr</p>
                                </div>
                                <div class="price-section">

                                    <p><strong>Trust and Support Fee (16%):</strong>
                                    </p>
                                    <p>JD<?php echo e(number_format($hourlyRate * $estimatedTime * 0.16, 2)); ?></p>

                                </div>
                                <div class="price-section">

                                    <p><strong>Total:</strong> </p>
                                    <p>JD <?php echo e($total); ?></p>
                                </div>

                            </div>
                            <p>
                                You can cancel at any time. Tasks cancelled less than 24 hours before the start time may be
                                billed a cancellation fee of one hour. Tasks have a one-hour minimum.</p>
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