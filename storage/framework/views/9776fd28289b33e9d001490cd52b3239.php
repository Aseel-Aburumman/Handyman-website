<?php $__env->startSection('content'); ?>
    <section class="overflow-hidden space" id="service-sec">
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

                <!-- Summary of Task Details -->
                <div class="task-summary">
                    <h4>Task Summary</h4>
                    <p><strong>Task Location:</strong> <?php echo e(session('location')); ?></p>

                    <?php if(session('end_address')): ?>
                        <p><strong>End Address:</strong> <?php echo e(session('end_address')); ?></p>
                    <?php endif; ?>

                    <p><strong>Estimated Time:</strong> <?php echo e(session('estimated_time')); ?> hours</p>
                    <p><strong>Task Description:</strong> <?php echo e(session('description')); ?></p>

                    <?php if($handyman): ?>
                        <p><strong>Handyman Selected:</strong> <?php echo e($handyman->name); ?></p>
                        <p><strong>Hourly Rate:</strong> <?php echo e($handyman->price_per_hour); ?> JD/hr</p>
                    <?php else: ?>
                        <p><strong>No Handyman Selected.</strong> Task will be open for bidding.</p>
                    <?php endif; ?>

                    <p><strong>Total Cost:</strong> <?php echo e($total); ?> JD (Including 16% Trust & Support Fee)</p>
                </div>

                <!-- Payment Form -->
                <div class="payment-form">
                    <form action="<?php echo e(route('gig.storeStep4')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="card_number">Card Number</label>
                            <input type="text" name="card_number" id="card_number" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="promo_code">Do you have a promo code?</label>
                            <input type="text" name="promo_code" id="promo_code" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Confirm and Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/gig_proccess/step4.blade.php ENDPATH**/ ?>