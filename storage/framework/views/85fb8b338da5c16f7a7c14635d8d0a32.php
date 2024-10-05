<!-- resources/views/services/search-results.blade.php -->
<section class="overflow-hidden space" id="service-results">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-10">
                <div class="title-area text-center">
                    <h2 class="sec-title">Search Results</h2>
                    <p class="sec-text">Showing results for your search query.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if($services->isEmpty()): ?>
                <p>No services found for your query.</p>
            <?php else: ?>
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="service-card">
                            <div class="box-icon">
                                <!-- Use the service image or a placeholder -->
                                <img src="<?php echo e(asset('assets/img/icon/service_card_1.svg')); ?>" alt="<?php echo e($service->name); ?>">
                            </div>
                            <p class="box-subtitle"><?php echo e($service->name); ?></p>
                            <h3 class="box-title">
                                <a href="<?php echo e(route('service.step-one', [$service->category_id, $service->id])); ?>">
                                    <?php echo e($service->name); ?>

                                </a>
                            </h3>
                            <p class="box-text"><?php echo e($service->description); ?></p>
                            <a href="<?php echo e(route('service.step-one', [$service->category_id, $service->id])); ?>"
                                class="th-btn btn-sm">Read More</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/services/search-results.blade.php ENDPATH**/ ?>