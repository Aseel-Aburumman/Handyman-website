<?php $__env->startSection('content'); ?>
    
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo e(__('messages.TermsOfServiceTitle')); ?>

                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.Home')); ?>

                        </a></li>
                    <li><?php echo e(__('messages.TermsOfServiceTitle')); ?>

                    </li>
                </ul>
            </div>
        </div>
    </div>


    
    <section class="overflow-hidden space" id="service-sec" data-bg-src="assets/img/bg/pattern_bg_1.png">
        <div class="container mt-5">
            <div class="terms-wrapper">
                <div class="container">
                    <div class="terms-content">
                        <h1 class="terms-title"><?php echo e(__('messages.TermsOfServiceTitle')); ?></h1>

                        <section class="terms-section">
                            <h2><?php echo e(__('messages.EffectiveDate')); ?></h2>
                            
                            <p><?php echo e(__('messages.WelcomeText')); ?></p>
                        </section>

                        <section class="terms-section">
                            <h2><?php echo e(__('messages.Definitions')); ?></h2>
                            <ul>
                                <li><strong><?php echo e(__('messages.Customer')); ?>:</strong> <?php echo e(__('messages.CustomerDefinition')); ?>

                                </li>
                                <li><strong><?php echo e(__('messages.Handyman')); ?>:</strong>
                                    <?php echo e(__('messages.HandymanDefinition')); ?>

                                </li>
                                <li><strong><?php echo e(__('messages.Gig')); ?>:</strong> <?php echo e(__('messages.GigDefinition')); ?></li>
                            </ul>
                        </section>

                        <section class="terms-section">
                            <h2><?php echo e(__('messages.Eligibility')); ?></h2>
                            <p><?php echo e(__('messages.EligibilityContent')); ?></p>
                        </section>

                        <section class="terms-section">
                            <h2><?php echo e(__('messages.CreatingGigs')); ?></h2>
                            <p><?php echo e(__('messages.CreatingGigsContent')); ?></p>
                        </section>

                        <section class="terms-section">
                            <h2><?php echo e(__('messages.BookingServices')); ?></h2>
                            <p><?php echo e(__('messages.BookingServicesContent')); ?></p>
                        </section>

                        <section class="terms-section">
                            <h2><?php echo e(__('messages.PaymentTerms')); ?></h2>
                            <p><?php echo e(__('messages.PaymentTermsContent')); ?></p>
                        </section>

                        <section class="terms-section">
                            <h2><?php echo e(__('messages.CancellationRefundPolicy')); ?></h2>
                            <ul>
                                <li><strong><?php echo e(__('messages.ForCustomers')); ?>:</strong>
                                    <?php echo e(__('messages.CustomerCancellationContent')); ?></li>
                                <li><strong><?php echo e(__('messages.ForHandymen')); ?>:</strong>
                                    <?php echo e(__('messages.HandymanCancellationContent')); ?></li>
                            </ul>
                            <p><?php echo e(__('messages.RefundsContent')); ?></p>
                        </section>

                        <section class="terms-section">
                            <h2><?php echo e(__('messages.ResponsibilityLiability')); ?></h2>
                            <ul>
                                <li><strong><?php echo e(__('messages.HandymanResponsibilities')); ?>:</strong>
                                    <?php echo e(__('messages.HandymanResponsibilitiesContent')); ?></li>
                                <li><strong><?php echo e(__('messages.CustomerResponsibilities')); ?>:</strong>
                                    <?php echo e(__('messages.CustomerResponsibilitiesContent')); ?></li>
                            </ul>
                            <p><?php echo e(__('messages.PlatformLiability')); ?></p>
                        </section>

                        <section class="terms-section">
                            <h2><?php echo e(__('messages.ReviewsRatings')); ?></h2>
                            <p><?php echo e(__('messages.ReviewsRatingsContent')); ?></p>
                        </section>

                        <section class="terms-section">
                            <h2><?php echo e(__('messages.DisputeResolution')); ?></h2>
                            <p><?php echo e(__('messages.DisputeResolutionContent')); ?></p>
                        </section>

                        <section class="terms-section">
                            <h2><?php echo e(__('messages.ProhibitedActivities')); ?></h2>
                            <p><?php echo e(__('messages.ProhibitedActivitiesContent')); ?></p>
                        </section>

                        <section class="terms-section">
                            <h2><?php echo e(__('messages.ModificationOfTerms')); ?></h2>
                            <p><?php echo e(__('messages.ModificationOfTermsContent')); ?></p>
                        </section>

                        <section class="terms-section">
                            <h2><?php echo e(__('messages.Termination')); ?></h2>
                            <p><?php echo e(__('messages.TerminationContent')); ?></p>
                        </section>

                        <section class="terms-section">
                            <h2><?php echo e(__('messages.ContactInformation')); ?></h2>
                            <p><?php echo e(__('messages.ContactInformationContent')); ?></p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/main_strc/tos.blade.php ENDPATH**/ ?>