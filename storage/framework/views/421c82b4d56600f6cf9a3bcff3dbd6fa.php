<?php $__env->startSection('content'); ?>
    
    <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo e(__('messages.serviceSmallTitle')); ?>

                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.Home')); ?>

                        </a></li>
                    <li><?php echo e(__('messages.serviceSmallTitle')); ?>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <section class="overflow-hidden space" id="service-sec" data-bg-src="assets/img/bg/pattern_bg_1.png">
        <div class="shape-mockup spin" data-top="0%" data-right="0%"><img src="assets/img/shape/lines_1.png" alt="shape">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-10">
                    <div class="title-area text-center">
                        <span class="sub-title"><img src="assets/img/theme-img/title_icon.svg"
                                alt="Icon"><?php echo e(__('messages.serviceSmallTitle')); ?></span>
                        <h2 class="sec-title"><?php echo e(__('messages.serviveTitle')); ?>

                        </h2>
                        <p class="sec-text"><?php echo e(__('messages.serviveDescription')); ?>

                        </p>
                    </div>
                </div>

            </div>



            <div class="w-100 filter-menu style2 mt-0 indicator-active filter-menu-active">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button data-filter=".cat<?php echo e($index); ?>" class="tab-btn"
                        type="button"><?php echo e($category->name); ?></button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row gy-3 category-services cat<?php echo e($index); ?>" style="display:none">
                    <?php $__currentLoopData = $category->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xxl-4 col-lg-4 col-md-6">
                            <div class="service-card">
                                <!-- Dynamic Number -->
                                <div class="box-number"><?php echo e($loop->iteration); ?></div>

                                
                                <div class="box-icon">

                                    <?php
                                        $serviceImages = [
                                            // Assembly Services
                                            'General Furniture Assembling' => 'service_card_1.svg',
                                            'Professional IKEA Assembling' => 'service_card_2.svg',
                                            'Assembling of Baby Cribs Safely' => 'service_card_3.svg',
                                            'PAX Wardrobes Assembling Service' => 'service_card_4.svg',
                                            'Custom Assembly of Bookshelves' => 'service_card_5.svg',
                                            'Assembling Office Desks Precisely' => 'service_card_6.svg',
                                            'تجميع الأثاث بجميع الأنواع' => 'service_card_1.svg',
                                            'تجميع اثاث ايكيا بطريقة محترفة' => 'service_card_2.svg',
                                            'تجميع أسرة الأطفال بكل أمان' => 'service_card_3.svg',
                                            'خدمة تجميع خزانات PAX بشكل جيد' => 'service_card_4.svg',
                                            'تجميع الرفوف المكتبية المتنوعة' => 'service_card_5.svg',
                                            'تجميع مكاتب العمل بشكل احترافي' => 'service_card_6.svg',

                                            // Mounting Services
                                            'Mounting Art, Mirrors & Decor' => 'service_card_7.svg',
                                            'Blinds and Window Treatments' => 'service_card_8.svg',
                                            'Anchoring Furniture Securely' => 'service_card_1.svg',
                                            'Installing Shelves & Rods Properly' => 'service_card_2.svg',
                                            'Television Wall Mounting Service' => 'service_card_3.svg',
                                            'Other Specialized Mounting Jobs' => 'service_card_4.svg',
                                            'تركيب الفن والمرايا والزينة' => 'service_card_7.svg',
                                            'تركيب الستائر ومعالجات النوافذ' => 'service_card_8.svg',
                                            'تركيب وتأمين الأثاث بشكل آمن' => 'service_card_1.svg',
                                            'تركيب الرفوف والقضبان بمهارة' => 'service_card_2.svg',
                                            'خدمة تركيب التلفاز على الحائط' => 'service_card_3.svg',
                                            'خدمات تركيب أخرى متخصصة' => 'service_card_4.svg',

                                            // Moving Services
                                            'Help Moving Safely and Quickly' => 'service_card_5.svg',
                                            'Truck-Assisted Help Moving' => 'service_card_6.svg',
                                            'Trash & Furniture Removal Jobs' => 'service_card_7.svg',
                                            'Heavy Lifting and Loading Service' => 'service_card_8.svg',
                                            'Rearranging Furniture In Homes' => 'service_card_1.svg',
                                            'Junk Haul Away Service Offered' => 'service_card_2.svg',
                                            'المساعدة في النقل بأمان وسرعة' => 'service_card_5.svg',
                                            'المساعدة في النقل باستخدام الشاحنة' => 'service_card_6.svg',
                                            'إزالة القمامة والأثاث القديم' => 'service_card_7.svg',
                                            'خدمة رفع وتحميل الأوزان الثقيلة' => 'service_card_8.svg',
                                            'إعادة ترتيب الأثاث في المنازل' => 'service_card_1.svg',
                                            'خدمة إزالة النفايات المعروضة' => 'service_card_2.svg',

                                            // Cleaning Services
                                            'General Cleaning for All Areas' => 'service_card_3.svg',
                                            'Post-Party Cleanup Services' => 'service_card_4.svg',
                                            'Apartment Cleaning Services' => 'service_card_5.svg',
                                            'Deep Cleaning for All Spaces' => 'service_card_6.svg',
                                            'Garage Cleaning Solutions' => 'service_card_7.svg',
                                            'Move-Out Cleaning Services' => 'service_card_8.svg',
                                            'تنظيف شامل لجميع المناطق' => 'service_card_3.svg',
                                            'تنظيف بعد الحفلات والفعاليات' => 'service_card_4.svg',
                                            'خدمات تنظيف الشقق السكنية' => 'service_card_5.svg',
                                            'تنظيف عميق لجميع الأماكن' => 'service_card_6.svg',
                                            'حلول تنظيف المرائب المخصصة' => 'service_card_7.svg',
                                            'خدمات تنظيف عند الانتقال' => 'service_card_8.svg',

                                            // Outdoor Help Services
                                            'Yard Work and Maintenance' => 'service_card_1.svg',
                                            'Lawn Care Services Offered' => 'service_card_2.svg',
                                            'Snow Removal Services Available' => 'service_card_3.svg',
                                            'Landscaping Assistance Provided' => 'service_card_4.svg',
                                            'Branch & Hedge Trimming Jobs' => 'service_card_5.svg',
                                            'Gardening and Weeding Services' => 'service_card_6.svg',
                                            'أعمال الحديقة والصيانة' => 'service_card_1.svg',
                                            'خدمات رعاية العشب مقدمة' => 'service_card_2.svg',
                                            'خدمات إزالة الثلوج المتاحة' => 'service_card_3.svg',
                                            'مساعدة تنسيق الحدائق المقدمة' => 'service_card_4.svg',
                                            'تشذيب الفروع والأشجار المتخصص' => 'service_card_5.svg',
                                            'خدمات البستنة وإزالة الأعشاب' => 'service_card_6.svg',

                                            // Home Repairs Services
                                            'Repairing Doors & Furniture' => 'service_card_7.svg',
                                            'Wall Repair Services Offered' => 'service_card_8.svg',
                                            'Sealing & Caulking Repairs' => 'service_card_1.svg',
                                            'Appliance Install & Repairing' => 'service_card_2.svg',
                                            'Window & Blinds Repairs Done' => 'service_card_3.svg',
                                            'Flooring & Tiling Assistance' => 'service_card_4.svg',
                                            'Electrical Help Services Given' => 'service_card_5.svg',
                                            'Plumbing Assistance Provided' => 'service_card_6.svg',
                                            'Light Carpentry Services' => 'service_card_7.svg',
                                            'إصلاح الأبواب والأثاث المتضرر' => 'service_card_7.svg',
                                            'خدمات إصلاح الجدران المقدمة' => 'service_card_8.svg',
                                            'خدمات الختم وسد الفجوات' => 'service_card_1.svg',
                                            'تركيب وإصلاح الأجهزة المنزلية' => 'service_card_2.svg',
                                            'إصلاح النوافذ والستائر المتاحة' => 'service_card_3.svg',
                                            'مساعدة في الأرضيات والبلاط' => 'service_card_4.svg',
                                            'خدمات المساعدة الكهربائية متاحة' => 'service_card_5.svg',
                                            'تقديم المساعدة في السباكة' => 'service_card_6.svg',
                                            'أعمال النجارة الخفيفة متاحة' => 'service_card_7.svg',

                                            // Painting Services
                                            'Indoor Painting for Interiors' => 'service_card_8.svg',
                                            'Wallpapering and Decoration' => 'service_card_1.svg',
                                            'Outdoor Painting for Exteriors' => 'service_card_2.svg',
                                            'Concrete & Brick Painting' => 'service_card_3.svg',
                                            'Accent Wall Painting Services' => 'service_card_4.svg',
                                            'Wallpaper Removal Services' => 'service_card_5.svg',
                                            'طلاء داخلي للمساحات الداخلية' => 'service_card_8.svg',
                                            'تغليف الجدران وتزيين المساحات' => 'service_card_1.svg',
                                            'طلاء خارجي للمساحات الخارجية' => 'service_card_2.svg',
                                            'طلاء الأسطح الخرسانية والطوبية' => 'service_card_3.svg',
                                            'خدمات طلاء الجدران المميزة' => 'service_card_4.svg',
                                            'خدمات إزالة ورق الجدران' => 'service_card_5.svg',
                                        ];
                                    ?>


                                    <img src="<?php echo e(asset('assets/img/icon/' . $serviceImages[$service->name])); ?>"
                                        alt="Icon">


                                </div>

                                <p class="box-subtitle"><?php echo e($service->category->name); ?></p>
                                <h3 class="box-title"><a href="service-details.html"><?php echo e($service->name); ?></a>
                                </h3>
                                <p class="box-text"><?php echo e($service->description); ?></p>
                                <?php if(app()->getLocale() == 'en'): ?>
                                    <a href="javascript:void(0);" class="th-btn btn-sm"><?php echo e(__('messages.BookNow')); ?>&nbsp
                                        <i class="fa fa-arrow-right ms-2"></i></a>
                                <?php else: ?>
                                    <a href="javascript:void(0);" class="th-btn btn-sm">
                                        <i class="fa fa-arrow-left ms-2"></i>&nbsp
                                        <?php echo e(__('messages.BookNow')); ?></a>
                                <?php endif; ?>
                                
                                <script>
                                    $(document).ready(function() {
                                        // Event listener for tab buttons (filter categories)
                                        $('.tab-btn').click(function() {
                                            var categoryClass = $(this).data('filter');
                                            $('.category-services').hide(); // Hide all categories
                                            $(categoryClass).show(); // Show the selected category
                                        });

                                        // Trigger the first category on page load
                                        $('.tab-btn').first().trigger('click');

                                        // Event listener for service card click
                                        $(document).on('click', '.service-card', function() {
                                            let serviceId = <?php echo e($service->id); ?>;
                                            let categoryId = <?php echo e($category->id); ?>; // Get the category ID from parent div

                                            // Redirect to step one with categoryId and serviceId
                                            window.location.href = '/step-one/' + categoryId + '/' + serviceId;
                                        });
                                    });
                                </script>



                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.tab-btn').click(function() {
                var categoryClass = $(this).data('filter');
                $('.category-services').hide(); // Hide all categories
                $(categoryClass).show(); // Show the selected category
            });

            // Optional: Trigger the first category on page load
            $('.tab-btn').first().trigger('click');
        });
    </script>


  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/main_strc/service.blade.php ENDPATH**/ ?>