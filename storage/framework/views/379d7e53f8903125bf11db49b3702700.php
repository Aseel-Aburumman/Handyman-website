<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper" data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Assigned Task Detail</h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li><a href="<?php echo e(route('customer.Home')); ?>">Dashboard</a></li>
                    <li>Task Detail</li>
                </ul>
            </div>
        </div>
    </div>

    <section class=" overflow-hidden space" id="service-sec">
        <?php if(session('success')): ?>
            <div class="container alert alert-success">
                <?php echo session('success'); ?>

            </div>
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <!-- Left Side: Gig Details -->
                <div class="col-md-6">
                    <div class=" task-gig-card ">
                        <div class="gig-details">
                            <h3>Task Details</h3>
                            <div class="d-flex justify-content-between">
                                <h2 class="gig-title"><?php echo e($gig->title); ?></h2>
                                <p class="gig-total">Budget: JD <?php echo e($gig->total); ?>/per hour</p>
                            </div>
                            <p class="gig-description">
                                <?php echo e(\Illuminate\Support\Str::limit($gig->description, 150)); ?></p>
                            <p class="gig-location"><i class="fas fa-map-marker-alt"></i>
                                <?php echo e($gig->location); ?></p>
                            <p class="gig-time"><i class="far fa-calendar-alt"></i>
                                <?php echo e($gig->task_date); ?> <?php echo e($gig->task_time); ?></p>
                        </div>

                    </div>

                    <!-- Progress Bar Section -->
                    <div class="progress-bar-section mt-4">

                        <?php if($gig->status_id == 9): ?>
                            <h3>This Task Is Done!</h3>
                            <p>Have something else on your to-do list?
                                Book your next task or manage future to-dos with Kaaf Mueen </p>

                            <form class="mt-3" action="<?php echo e(route('customer.Home')); ?>" method="GET">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-info w-100 ">Check It Off Your List!</button>
                            </form>
                            <?php if($reviews->isEmpty()): ?>
                                <div class="th-comment-form">
                                    <div class="form-title">
                                        <h3 class="blog-inner-title">Add a review</h3>
                                    </div>
                                    <form action="<?php echo e(route('reviews.clienttohandyman')); ?>" method="POST">
                                        <?php echo csrf_field(); ?> <!-- Add CSRF token for security -->
                                        <input type="hidden" name="gig_id" value="<?php echo e($gig->id); ?>">
                                        <input type="hidden" name="handyman_id" value="<?php echo e($gig->handyman_id); ?>">


                                        <div class="row">
                                            <div class="form-group rating-select d-flex align-items-center">
                                                <label>Your Rating</label>
                                                <p class="stars">
                                                    <span>
                                                        <a class="star-1" href="#" data-rating="1">1</a>
                                                        <a class="star-2" href="#" data-rating="2">2</a>
                                                        <a class="star-3" href="#" data-rating="3">3</a>
                                                        <a class="star-4" href="#" data-rating="4">4</a>
                                                        <a class="star-5" href="#" data-rating="5">5</a>
                                                    </span>
                                                </p>
                                                <input type="hidden" name="rating" id="rating" value="5">
                                                <!-- Hidden field for rating, default is 5 -->
                                                <!-- Hidden field for rating -->
                                            </div>
                                            <div class="col-12 form-group">
                                                <textarea name="review" placeholder="Write a Message" class="form-control" required></textarea>
                                                <i class="text-title far fa-solid fa-pencil-alt"></i>
                                            </div>
                                            <div class="col-12 form-group mb-0">
                                                <button type="submit" class="th-btn">Post Review</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <script>
                                    // JavaScript to handle star rating clicks and update the hidden input
                                    document.querySelectorAll('.stars a').forEach(function(star) {
                                        star.addEventListener('click', function(e) {
                                            e.preventDefault();
                                            var ratingValue = this.getAttribute('data-rating');
                                            document.getElementById('rating').value = ratingValue;

                                            // Remove 'selected' class from all stars
                                            document.querySelectorAll('.stars a').forEach(function(star) {
                                                star.classList.remove('selected');
                                            });

                                            // Add 'selected' class to the clicked star and all previous stars
                                            for (var i = 1; i <= ratingValue; i++) {
                                                document.querySelector('.star-' + i).classList.add('selected');
                                            }
                                        });
                                    });
                                </script>
                            <?php else: ?>
                                <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class=" task-gig-card  mt-3">
                                        <div class="w-100 ">
                                            <!-- Ensure handyman user exists before trying to access it -->
                                            <?php if($review->handyman && $review->handyman->user): ?>
                                                <div style="display:flex; justify-content:space-between;">
                                                    <h4 class="name"><?php echo e($review->handyman->user->name); ?></h4>
                                                    <div class="list-rating" style="color: #E2B93B;">
                                                        <?php
                                                            $wholeStars = floor($review->rating);
                                                            $fraction = $review->rating - $wholeStars;
                                                            $halfStar = $fraction >= 0.5;
                                                            $emptyStars = 5 - $wholeStars - ($halfStar ? 1 : 0);
                                                        ?>
                                                        <?php for($i = 0; $i < $wholeStars; $i++): ?>
                                                            <i class="fas fa-star filled"></i>
                                                        <?php endfor; ?>
                                                        <?php if($halfStar): ?>
                                                            <i class="fas fa-star-half-alt filled"></i>
                                                        <?php endif; ?>
                                                        <?php for($i = 0; $i < $emptyStars; $i++): ?>
                                                            <i class="far fa-star"></i>
                                                        <?php endfor; ?>
                                                        <span>(<?php echo e(number_format($review->rating, 1)); ?>)</span>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <p class="text text-start">Writen by :<?php echo e($review->user->name); ?></p>

                                            <p class="text-start"><i class="far fa-clock"></i>
                                                <?php echo e($review->created_at->format('Y-m-d H:i:s')); ?></p>

                                            <p class="text text-start"><?php echo e($review->review); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        <?php elseif($gig->status_id == 28): ?>
                            <h3>Waiting for your Handyman to accept!</h3>
                            <p>Have something else on your to-do list?
                                Book your next task or manage future to-dos with Kaaf Mueen </p>

                            <p>Lets figure it out,<a
                                    href="<?php echo e(route('chat', ['receiverId' => $gig->handyman->user->id])); ?>">Chat
                                    with
                                    your
                                    handyman</a>.</p>

                            <form action="<?php echo e(route('report.gig.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="handyman_id" value="<?php echo e($gig->handyman->id); ?>">
                                <input type="hidden" name="gig_id" value="<?php echo e($gig->id); ?>">
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to report a problem?');">Report
                                    a
                                    Problem</button>
                            </form>
                        <?php elseif(in_array($gig->status_id, [7, 8, 11, 24])): ?>
                            <h4>Task Progress</h4>
                            <ul class="progress-bar">
                                <li
                                    class="<?php echo e($gig->status_id >= 7 ? 'completed' : ($gig->status_id == 7 ? 'active' : '')); ?>">
                                    1
                                </li>
                                <li
                                    class="<?php echo e($gig->status_id >= 8 ? 'completed' : ($gig->status_id == 8 ? 'active' : '')); ?>">
                                    2
                                </li>

                                <li
                                    class="<?php echo e($gig->status_id >= 24 ? 'completed' : ($gig->status_id == 24 ? 'active' : '')); ?>">
                                    3
                                </li>
                            </ul>

                            <!-- Step Titles -->
                            <div class="progress-step-title">
                                <span class="step-title">First Visit</span>
                                <span class="step-title">Work in Progress</span>
                                <span class="step-title">Payment</span>
                            </div>

                            <!-- Progress Content -->
                            <div class="step-content mt-3">
                                <?php if($gig->status_id == 7): ?>
                                    <div class="progress-gig-card">
                                        <p>Has the handyman completed the first checkup?</p>

                                        <form
                                            action="<?php echo e(route('gig.updateStatus', ['gigId' => $gig->id, 'status' => 8])); ?>"
                                            method="POST">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="custom-btn btn btn-primary"
                                                onclick="return confirm('Are you sure the first checkup is complete?');">Mark
                                                as
                                                Done</button>
                                        </form>
                                    </div>
                                <?php elseif($gig->status_id == 8): ?>
                                    <div class="progress-gig-card">

                                        <p>The work is currently in progress. <a
                                                href="<?php echo e(route('chat', ['receiverId' => $gig->handyman->user->id])); ?>">Chat
                                                with
                                                your
                                                handyman</a>.</p>

                                        <form action="<?php echo e(route('report.gig.store')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="handyman_id" value="<?php echo e($gig->handyman->id); ?>">
                                            <input type="hidden" name="gig_id" value="<?php echo e($gig->id); ?>">
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to report a problem?');">Report
                                                a
                                                Problem</button>
                                        </form>
                                    </div>
                                <?php elseif($gig->status_id == 11): ?>
                                    <div class="progress-gig-card">

                                        <p>Your report has been submited , customer service will reach you as soon as
                                            possible
                                            <a href="<?php echo e(route('chat', ['receiverId' => $gig->handyman->user->id])); ?>">Chat
                                                with
                                                your
                                                handyman</a>.
                                        </p>
                                    </div>
                                <?php elseif($gig->status_id == 24): ?>
                                    <?php if($all_total): ?>
                                        <p>The task is ready for payment. Review and proceed with payments.</p>



                                        <?php if($paymentRepotr): ?>
                                            <table class="cart_table mb-20">
                                                <thead>
                                                    <tr>
                                                        <th class="cart-col-productname">Payment ID</th>
                                                        <th class="cart-col-quantity">Amount</th>
                                                        <th class="cart-col-total">Description</th>
                                                        <th class="cart-col-total">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $paymentRepotr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($payment->status_id == 25): ?>
                                                            <tr class="cart_item">
                                                                <td><?php echo e($payment->id); ?></td>
                                                                <td><?php echo e($payment->amount); ?></td>
                                                                <td>JD <?php echo e($payment->description); ?></td>
                                                                <td>
                                                                    <form
                                                                        action="<?php echo e(route('gig.update.repot.paymet', ['paymentId' => $payment->id])); ?>"
                                                                        method="POST">
                                                                        <?php echo csrf_field(); ?>
                                                                        <button type="submit"
                                                                            class="custom-btn btn btn-primary"
                                                                            onclick="return confirm('Are you sure this payment request is false?');">Cancel</button>
                                                                    </form>
                                                                </td>

                                                            </tr>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                                <tfoot class="checkout-ordertable">
                                                    <tr class="cart-subtotal">
                                                        <th>Subtotal</th>
                                                        <td colspan="2">JD <?php echo e($subtotal); ?></td>
                                                    </tr>
                                                    <tr class="woocommerce-shipping-totals shipping">
                                                        <th>Trust and Support Fee (16%):</th>
                                                        <td colspan="2">16%</td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td colspan="2"><strong>JD
                                                                <?php echo e(number_format($subtotal * 0.16 + $subtotal, 2)); ?></strong>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        <?php endif; ?>



                                        <?php if($all_total): ?>
                                            <h4>Pay now by creadit card</h4>
                                            <div id="card-payment-fields">
                                                <div class="form-group">
                                                    <input type="text" id="card_number" name="card_number"
                                                        class="form-control" placeholder="1234 5678 9123 4567">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" id="card_expiry" name="card_expiry"
                                                        class="form-control" placeholder="MM/YY">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" id="card_cvc" name="card_cvc"
                                                        class="form-control" placeholder="123">
                                                </div>
                                            </div>

                                            <div class="form-row place-order">
                                                <form action="<?php echo e(route('payment.process', ['gigId' => $gig->id])); ?>"
                                                    method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="all_total" value="<?php echo e($all_total); ?>">
                                                    <button type="submit" class="th-btn"
                                                        formaction="<?php echo e(route('payment.process', ['gigId' => $gig->id])); ?>">Pay
                                                        Now</button>
                                                </form>

                                            </div>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <p>There is no more payments requst , is the task done ?</p>
                                        <form
                                            action="<?php echo e(route('gig.updateStatus', ['gigId' => $gig->id, 'status' => 9])); ?>"
                                            method="POST">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="custom-btn btn btn-primary"
                                                onclick="return confirm('Are you ready to close this task?');">Mark
                                                as
                                                Done</button>
                                        </form>
                                    <?php endif; ?>

                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Right Side: Handyman Proposal -->
                <div class="col-md-6">
                    <div class=" handyman-card filter-step2-handyman-card">
                        <div class="handyman-profile-gig-section">
                            <div class="handyman-pic-section-gig">
                                <div class="handyman-thepic-gig-view-section">
                                    <?php if($gig->handyman->user && $gig->handyman->user->image): ?>
                                        <img src="<?php echo e(asset('storage/profile_images/' . $gig->handyman->user->image)); ?>"
                                            alt="<?php echo e($gig->handyman->user->name); ?>" class="handyman-profile-img">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>"
                                            alt="<?php echo e($gig->handyman->user->name); ?>" class="handyman-profile-img">
                                    <?php endif; ?>
                                </div>
                                <div class="handyman-details-gig">
                                    <div class="d-flex justify-content-between ">
                                        <h4><?php echo e($gig->handyman->user->name); ?></h4>

                                        <div class=" handyman-tasks">
                                            <span><i class="fa-solid fa-check-double"></i> Done
                                                <?php echo e($gig->handyman->gigs_count); ?> tasks</span>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between ">
                                        <div class="handyman-rating">
                                            <span class="rating-star">★</span>
                                            <span><?php echo e($gig->handyman->user->rating); ?>

                                                (<?php echo e($gig->handyman->user->reviews_count); ?> reviews)
                                            </span>
                                        </div>
                                        <div class="handyman-price mt-1">
                                            JD<?php echo e(number_format($gig->price_per_hour, 2)); ?>/hr
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <form class="mt-3"
                                            action="<?php echo e(route('chat', ['receiverId' => $gig->handyman->user->id])); ?>"
                                            method="GET">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn btn-info w-100 ">Chat and Figure what
                                                next!</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="handyman-description-gig">
                                <div class="handyman-description">
                                    <p class="mb-0">Handyman Description:</p>
                                    <p class="mb-0"><?php echo e(Str::limit($gig->handyman->bio, 200)); ?></p>
                                    <a href="<?php echo e(route('Onehandyman_clientVeiw', ['handymanId' => $gig->handyman->id])); ?>"
                                        class="read-more-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Payments History</h3>
                    <table class="cart_table mb-20">
                        <thead>
                            <tr>
                                <th class="cart-col-productname">Payment ID</th>
                                <th class="cart-col-total">Description</th>
                                <th class="cart-col-quantity">Amount</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="cart_item">
                                <td><?php echo e($gig->id); ?></td>
                                <td>The initated amount</td>
                                <td>JD<?php echo e(number_format($gig->price * $gig->estimated_time)); ?></td>

                            </tr>
                            <?php $__currentLoopData = $paymentRepotr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($payment->status_id == 27): ?>
                                    <tr class="cart_item">
                                        <td><?php echo e($payment->id); ?></td>
                                        <td> <?php echo e($payment->description); ?></td>

                                        <td>JD<?php echo e($payment->amount); ?></td>

                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot class="checkout-ordertable">

                            <tr class="order-total">
                                <th>Total</th>
                                <td colspan="2"><strong>JD
                                        <?php echo e($gig->total); ?></strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>


                    <p>is there any payment are not recorded ?</p>

                    <button class="custom-btn btn-primary" id="addPaymentBtn">Yes</button>

                    <!-- Hidden Form for Adding New Payment -->
                    <div id="newPaymentForm" style="display: none; margin-top: 20px;">
                        <form action="<?php echo e(route('payment.create')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="gig_id" value="<?php echo e($gig->id); ?>">
                            <input type="hidden" name="handyman_id" value="<?php echo e($gig->handyman_id); ?>">

                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" name="amount" id="amount" class="form-control"
                                    placeholder="Enter Amount" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" id="description" class="form-control"
                                    placeholder="Enter Description" required>
                            </div>
                            <input type="hidden" name="status_id" value="27">
                            <button type="submit" class="custom-btn btn btn-success">Submit Payment</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('addPaymentBtn').addEventListener('click', function() {
            var form = document.getElementById('newPaymentForm');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        });
    </script>

    <style>
        /* General container styling */


        .custom-btn {
            background-color: #F47629 !important;
            /* Danger - Red */
        }


        .progress-gig-card {
            display: flex;
            flex: 40%;
            flex-direction: column;
            background-color: #f8f9fa;
            padding: 20px;

            justify-content: space-between;
            border-radius: 10px;
            margin-bottom: 20px;
            align-items: center;
            height: 100%;
            /* max-width: 800px; */
            margin-left: auto;
            margin-right: auto;

        }

        /* Task Gig Card (Left Side) */
        .task-gig-card {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            height: auto;
        }

        /* Gig Details */
        .gig-details h3 {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .gig-details h2.gig-title {
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .gig-total {
            font-size: 16px;
            color: #ff6600;
            font-weight: 600;
        }

        .gig-description {
            font-size: 16px;
            color: #666;
        }

        .gig-location,
        .gig-time {
            font-size: 14px;
            color: #888;
            margin-bottom: 5px;
        }

        /* Progress Bar */
        .progress-bar-section {
            margin-top: 30px;
            text-align: center;
        }

        .progress-bar {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            list-style: none;
            padding: 0;
            margin: 0;
            position: relative;
            width: 100%;
            background-color: #E1E4E5;

        }

        .progress-bar li {
            background-color: #FFFFFF;
            color: black;
            padding: 10px;
            border-radius: 50%;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .progress-bar li.active {
            background-color: #ffc107;
            color: white;
        }

        .progress-bar li.completed {
            background-color: #F47629;
            color: white;
        }

        .progress-bar li.inactive {
            background-color: #ddd;
            color: #999;
        }

        /* Line between steps */
        .progress-bar::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 6px;
            background-color: #FFFFFF;
            z-index: 0;
            margin-left: 30px;
            margin-right: 30px;
        }

        .progress-bar li.completed~li::before {
            background-color: #28a745;
        }

        .progress-bar li.active~li::before {
            background-color: #ffc107;
        }

        /* Step Titles */
        .step-title {
            margin-top: 10px;
            font-size: 14px;
            font-weight: 600;
            color: #555;
        }

        .progress-step-title {
            display: flex;
            justify-content: space-between;
            margin-top: 5px;
        }

        .progress-step-title span {
            flex: 1;
            text-align: center;
        }

        /* Fix layout issue */
        .progress-bar li:first-child {
            margin-left: 0;
        }

        .progress-bar li:last-child {
            margin-right: 0;
        }

        /* Handyman Card (Right Side) */
        .handyman-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .handyman-card h3 {
            font-size: 22px;
            font-weight: 600;
            color: #333;
        }

        .handyman-card p {
            font-size: 16px;
            color: #666;
            margin-bottom: 10px;
        }

        .handyman-card strong {
            color: #333;
        }

        .handyman-card .read-more-link {
            color: #007bff;
            font-size: 14px;
            text-decoration: underline;
        }

        .handyman-card .rating-star {
            color: #ffc107;
        }

        .handyman-card .handyman-price {
            font-size: 18px;
            color: #28a745;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Modal styling */
        .modal-header {
            background-color: #007bff;
            color: white;
        }

        .modal-footer .btn {
            margin-left: 10px;
        }

        /* Payment Section */
        .payment-info {
            font-size: 16px;
            margin-bottom: 15px;
        }

        .payment-info input {
            border: 1px solid #ccc;
            padding: 8px;
            width: 100%;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .payment-info .btn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .payment-info .btn:hover {
            background-color: #218838;
        }

        /* Buttons */
        button.btn {
            padding: 10px 15px;
            font-size: 14px;
            border-radius: 5px;
        }

        button.btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
        }

        button.btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        button.btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
            color: white;
        }

        button.btn-info:hover {
            background-color: #117a8b;
            border-color: #117a8b;
        }

        button.btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
        }

        button.btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .progress-bar {
                flex-direction: column;
                align-items: center;
            }

            .progress-bar li {
                width: 100px;
                height: 100px;
                margin-bottom: 15px;
            }

            .task-gig-card,
            .handyman-card {
                margin-bottom: 20px;
            }

            .container {
                padding: 15px;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/gigs/task_detail.blade.php ENDPATH**/ ?>