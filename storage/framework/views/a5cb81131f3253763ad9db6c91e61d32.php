<?php $__env->startSection('content'); ?>
    
    <div class="th-hero-wrapper hero-1 slider-area" id="hero" data-bg-src="<?php echo e(asset('assets/img/hero/hero_bg_1.jpg')); ?>">
        <div class="shape-mockup spin" data-top="35%" data-right="8%"><img src="<?php echo e(asset('assets/img/shape/dots_1.svg')); ?>"
                alt="shape">
        </div>
        <div class="shape-mockup spin" data-bottom="28%" data-right="48%"><img
                src="<?php echo e(asset('assets/img/shape/dots_1.svg')); ?>" alt="shape"></div>
        <div class="swiper th-slider" id="heroSlide1" data-slider-options='{"effect":"fade","autoHeight":true}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="container">
                            <div class="hero-style1">
                                <div class="hero-arrow" data-ani="slideinright" data-ani-delay="0.4s">
                                    <img src="<?php echo e(asset('assets/img/hero/hero_arrow.svg')); ?>" alt="Arrow">
                                </div>
                                <h1 class="hero-title">
                                    <span class="title1" data-ani="slideinup"
                                        data-ani-delay="0.2s"><?php echo e(__('messages.bannerTitleA1')); ?></span>
                                    <span class="title2" data-ani="slideinup"
                                        data-ani-delay="0.4s"><?php echo e(__('messages.bannerTitleA2')); ?></span>
                                    <span class="title3" data-ani="slideinup"
                                        data-ani-delay="0.6s"><?php echo e(__('messages.bannerTitleA3')); ?>

                                        
                                    </span>
                                </h1>
                                <p class="hero-text" data-ani="slideinup" data-ani-delay="0.8s">
                                    <?php echo e(__('messages.bannerSubTitleA1')); ?></p>
                                <a href="<?php echo e(route('service')); ?>" class="th-btn style3" data-ani="slideinup"
                                    data-ani-delay="1s"><?php echo e(__('messages.bannerBtn')); ?><i
                                        class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                        <div class="hero-img" data-ani="slideinright" data-ani-delay="0.2s">
                            <div class="shape1">
                                <img src="<?php echo e(asset('assets/img/hero/hero_shape_1_1.svg')); ?>" alt="shape">
                            </div>
                            <img src="<?php echo e(asset('assets/img/hero/hero_1_1.png')); ?>" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="container">
                            <div class="hero-style1">
                                <div class="hero-arrow" data-ani="slideinright" data-ani-delay="0.4s">
                                    <img src="<?php echo e(asset('assets/img/hero/hero_arrow.svg')); ?>" alt="Arrow">
                                </div>
                                <h1 class="hero-title">
                                    <span class="title1" data-ani="slideinup"
                                        data-ani-delay="0.2s"><?php echo e(__('messages.bannerTitleB1')); ?></span>
                                    <span class="title2" data-ani="slideinup"
                                        data-ani-delay="0.4s"><?php echo e(__('messages.bannerTitleB2')); ?></span>
                                    <span class="title3" data-ani="slideinup"
                                        data-ani-delay="0.6s"><?php echo e(__('messages.bannerTitleB3')); ?>

                                        
                                    </span>
                                </h1>
                                <p class="hero-text" data-ani="slideinup" data-ani-delay="0.8s">
                                    <?php echo e(__('messages.bannerSubTitleB1')); ?></p>
                                <a href="<?php echo e(route('service')); ?>" class="th-btn style3" data-ani="slideinup"
                                    data-ani-delay="1s"><?php echo e(__('messages.bannerBtn')); ?><i
                                        class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                        <div class="hero-img" data-ani="slideinright" data-ani-delay="0.2s">
                            <div class="shape1">
                                <img src="<?php echo e(asset('assets/img/hero/hero_shape_1_1.svg')); ?>" alt="shape">
                            </div>
                            <img src="<?php echo e(asset('assets/img/hero/hero_1_2.png')); ?>" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="container">
                            <div class="hero-style1">
                                <div class="hero-arrow" data-ani="slideinright" data-ani-delay="0.4s">
                                    <img src="<?php echo e(asset('assets/img/hero/hero_arrow.svg')); ?>" alt="Arrow">
                                </div>
                                <h1 class="hero-title">
                                    <span class="title1" data-ani="slideinup"
                                        data-ani-delay="0.2s"><?php echo e(__('messages.bannerTitleC1')); ?></span>
                                    <span class="title2" data-ani="slideinup"
                                        data-ani-delay="0.4s"><?php echo e(__('messages.bannerTitleC2')); ?></span>
                                    <span class="title3" data-ani="slideinup"
                                        data-ani-delay="0.6s"><?php echo e(__('messages.bannerTitleC3')); ?>

                                        
                                    </span>
                                </h1>
                                <p class="hero-text" data-ani="slideinup" data-ani-delay="0.8s">
                                    <?php echo e(__('messages.bannerSubTitleC1')); ?></p>
                                <a href="service.html" class="th-btn style3" data-ani="slideinup"
                                    data-ani-delay="1s"><?php echo e(__('messages.bannerBtn')); ?><i
                                        class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                        <div class="hero-img" data-ani="slideinright" data-ani-delay="0.2s">
                            <div class="shape1">
                                <img src="<?php echo e(asset('assets/img/hero/hero_shape_1_1v.svg')); ?>" alt="shape">
                            </div>
                            <img src="<?php echo e(asset('assets/img/hero/hero_1_3.png')); ?>" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><i
                class="far fa-arrow-left"></i></button>
        <button data-slider-next="#heroSlide1" class="slider-arrow slider-next"><i
                class="far fa-arrow-right"></i></button>
    </div>
    <!--======== / Hero Section ========-->
    <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Brand Area
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <div class="brand-sec1">
        <div class="top-shape"><img src="<?php echo e(asset('assets/img/shape/triangle_shape_1.svg')); ?>" alt="shape"></div>
        <div class="brand-list-area">
            <div class="brand-list-wrap">
                <div class="brand-list">
                    <img src="<?php echo e(asset('assets/img/brand/brand_1_1.png')); ?>" alt="Brand Logo">
                </div>
                <div class="brand-list">
                    <img src="<?php echo e(asset('assets/img/brand/brand_1_2.png')); ?>" alt="Brand Logo">
                </div>
                <div class="brand-list">
                    <img src="<?php echo e(asset('assets/img/brand/brand_1_3.png')); ?>" alt="Brand Logo">
                </div>
            </div>
            <div class="arrow-down">
                <div class="shape">
                    <img src="<?php echo e(asset('assets/img/shape/scroll_text2.svg')); ?>" alt="shape">
                </div>
                <a class="link" href="#service-sec">
                    <span class="icon">
                        <svg width="9" height="29" viewBox="0 0 9 29" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.20423 28.3571C4.11543 28.3571 4.02654 28.3232 3.95875 28.2554L0.486523 24.7832C0.350846 24.6475 0.350846 24.4278 0.486523 24.2922C0.622201 24.1566 0.841905 24.1565 0.977496 24.2922L4.20423 27.5189L7.43097 24.2922C7.56665 24.1565 7.78635 24.1565 7.92194 24.2922C8.05753 24.4279 8.05762 24.6476 7.92194 24.7832L4.44972 28.2554C4.38192 28.3232 4.29303 28.3571 4.20423 28.3571Z"
                                fill="var(--theme-color)" />
                            <path d="M4.2041 0.995117V22.384" stroke="var(--theme-color)" stroke-width="1.53"
                                stroke-linecap="round" stroke-dasharray="2 2" />
                        </svg>
                    </span>
                </a>
            </div>
            <div class="brand-list-wrap">
                <div class="brand-list">
                    <img src="<?php echo e(asset('assets/img/brand/brand_1_4.png')); ?>" alt="Brand Logo">
                </div>
                <div class="brand-list">
                    <img src="<?php echo e(asset('assets/img/brand/brand_1_5.png')); ?>" alt="Brand Logo">
                </div>
                <div class="brand-list">
                    <img src="<?php echo e(asset('assets/img/brand/brand_1_6.png')); ?>" alt="Brand Logo">
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Service Area
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section class="overflow-hidden space" id="service-sec">
        <div class="shape-mockup spin" data-bottom="0%" data-left="0%"><img
                src="<?php echo e(asset('assets/img/shape/lines_1.png')); ?>" alt="shape"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-10">
                    <div class="title-area text-center">
                        <span class="sub-title"><img src="<?php echo e(asset('assets/img/theme-img/title_icon.svg')); ?>"
                                alt="Icon"><?php echo e(__('messages.serviceSmallTitle')); ?></span>
                        <h2 class="sec-title"><?php echo e(__('messages.serviveTitle')); ?></h2>


                        <p class="sec-text"><?php echo e(__('messages.serviveDescription')); ?></p>

                        <div class="filter-menu style2 mt-0 indicator-active filter-menu-active">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <button data-filter=".cat<?php echo e($index); ?>" class="tab-btn"
                                    type="button"><?php echo e($category->name); ?></button>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <div class="search-container">
                            <input type="text" id="service-search" class="form-control"
                                placeholder="What do you need help with?">
                            <div id="service-suggestions" class="dropdown-menu aseel-dropdown-menu"
                                style="display:none;">
                                <!-- Dynamic service suggestions will be inserted here -->
                            </div>
                        </div>
                        <script>
                            $(document).ready(function() {
                                // Trigger on typing in search box
                                $('#service-search').on('keyup', function() {
                                    let query = $(this).val();
                                    if (query.length > 1) {
                                        $.ajax({
                                            url: '<?php echo e(route('search.services')); ?>', // Define the route for searching services
                                            method: 'GET',
                                            data: {
                                                query: query
                                            },
                                            success: function(data) {
                                                $('#service-suggestions').html(data).show();
                                            }
                                        });
                                    } else {
                                        $('#service-suggestions').hide();
                                    }
                                });

                                // Redirect to step one page when a suggestion is clicked
                                $(document).on('click', '.suggestion-item', function() {
                                    let serviceId = $(this).data('service-id');
                                    let categoryId = $(this).data('category-id');
                                    window.location.href = '/step-one/' + categoryId + '/' + serviceId;
                                });
                            });
                        </script>



                    </div>
                </div>
            </div>
            <div class="slider-area">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper th-slider has-shadow category-services cat<?php echo e($index); ?>"
                        style="display:none"
                        data-slider-options='{"loop":false,"slidesPerGroup":"2","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $category->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
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

                                        <p class="box-subtitle"><?php echo e($service->name); ?></p>
                                        <h3 class="box-title"><a href="service-details.html"><?php echo e($service->name); ?></a>
                                        </h3>
                                        <p class="box-text"><?php echo e($service->description); ?></p>
                                        <a href="javascript:void(0);" class="th-btn btn-sm">Book Now<i
                                                class="far fa-arrow-right ms-2"></i></a>

                                        
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
                        <div class="slider-pagination"></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>


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


        </div>
    </section>


    <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            About Area
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <div class="overflow-hidden space" data-bg-color="#101840" id="about-sec">
        <div class="shape-mockup spin" data-top="6%" data-left="3%"><img
                src="<?php echo e(asset('assets/img/shape/dots_1.svg')); ?>" alt="shape"></div>
        <div class="shape-mockup d-none d-xl-block" data-bottom="3%" data-right="0%"><img
                src="<?php echo e(asset('assets/img/shape/lines_2.png')); ?>" alt="shape"></div>
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-xl-6 mb-35 mb-xl-0">
                    <div class="img-box1">
                        <div class="img1">
                            <img src="<?php echo e(asset('assets/img/normal/about_1.jpg')); ?>" alt="About">
                        </div>
                        <div class="box-badge">
                            <div class="spin-text">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px"
                                    height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300"
                                    xml:space="preserve">
                                    <defs>
                                        <path id="circlePath"
                                            d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
                                    </defs>
                                    <circle cx="150" cy="100" r="75" fill="none" />
                                    <g>
                                        <use xlink:href="#circlePath" fill="none" />
                                        <text fill="#fff">
                                            <textPath xlink:href="#circlePath"><?php echo e(__('messages.circularText')); ?>

                                            </textPath>
                                        </text>
                                    </g>
                                </svg>
                            </div>
                            <div class="box-icon">
                                <img src="<?php echo e(asset('assets/img/icon/about_badge.svg')); ?>" alt="icon">
                            </div>
                        </div>
                        <img src="<?php echo e(asset('assets/img/shape/dots_1.svg')); ?>" alt="icon" class="dot-shape">
                    </div>
                </div>
                <div class="col-xl-6 text-center text-xl-start">
                    <div class="title-area mb-30 pe-xxl-5">
                        <span class="sub-title shape-white"><img
                                src="<?php echo e(asset('assets/img/theme-img/title_icon_white.svg')); ?>"
                                alt="shape"><?php echo e(__('messages.aboutSmallTitle')); ?></span>
                        <h2 class="sec-title text-white"><?php echo e(__('messages.aboutBigTitle')); ?></h2>
                    </div>
                    <p class="ff-title fs-18 fw-medium text-white"><?php echo e(__('messages.aboutDescriptiopA')); ?></p>
                    <p class="mb-42 text-light"><?php echo e(__('messages.aboutDescriptiopB')); ?></p>
                    <div class="about-feature-wrap">
                        <div class="about-feature">
                            <div class="box-icon">
                                <img src="<?php echo e(asset('assets/img/icon/about_feature_1.svg')); ?>" alt="Icon">
                            </div>
                            <h3 class="box-title"><?php echo e(__('messages.aboutCard1')); ?></h3>
                        </div>
                        <div class="about-feature">
                            <div class="box-icon">
                                <img src="<?php echo e(asset('assets/img/icon/about_feature_2.svg')); ?>s" alt="Icon">
                            </div>
                            <h3 class="box-title"><?php echo e(__('messages.aboutCard2')); ?></h3>
                        </div>
                    </div>
                    <div class="btn-group justify-content-center">
                        <a href="<?php echo e(route('aboutUs')); ?>" class="th-btn style3"><?php echo e(__('messages.aboutBtn')); ?><i
                                class="far fa-arrow-right ms-2"></i></a>
                        <div class="call-btn">
                            <div class="play-btn">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <p class="box-label"><?php echo e(__('messages.aboutCallUs')); ?> 24/7</p>
                                <h6 class="box-link text-white"><a href="tel:+0123456789">+ (962) 79 XXX XXX5</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Stores Area
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section class="overflow-hidden space">
        <div class="shape-mockup spin" data-top="5%" data-left="0%"><img
                src="<?php echo e(asset('assets/img/shape/lines_1.png')); ?>" alt="shape"></div>
        <div class="shape-mockup spin" data-bottom="5%" data-right="4%"><img
                src="<?php echo e(asset('assets/img/shape/dots_2.svg')); ?>" alt="shape"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <div class="title-area text-center text-md-start">
                        <span class="sub-title"><img src="<?php echo e(asset('assets/img/theme-img/title_icon.svg')); ?>"
                                alt="shape"><?php echo e(__('messages.storesSmallTitle')); ?></span>
                        <h2 class="sec-title"><?php echo e(__('messages.storesBigTitle')); ?></h2>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="sec-btn mt-n3 mt-md-0">
                        <a href="<?php echo e(route('shops.index')); ?>" class="th-btn style4"><?php echo e(__('messages.storesBtn')); ?><i
                                class="far fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="slider-area">
                    <div class="swiper th-slider has-shadow" id="teamSlider1"
                        data-slider-options='{"paginationType":"progressbar","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>

                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $topStores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- Single Item -->
                                <div class="swiper-slide">
                                    <div class="project-card">
                                        <div class="box-img">
                                            <!-- Display the store image from store_logo_images folder -->
                                            <img src="<?php echo e($store->image ? url('/store_logo_images/' . $store->image->name) : url('assets/img/profile-img.jpg')); ?>"
                                                alt="<?php echo e($store->name); ?> logo"
                                                style="width: 100%; height: 400px; object-fit: cover;">
                                        </div>
                                        <div class="box-content">
                                            <!-- Store Name -->
                                            <div style="display:flex; flex-direction:column">
                                                <h6 class="box-title"><a style="font-size: 1.2rem;"
                                                        href="store-details/<?php echo e($store->id); ?>">
                                                        <?php if(App::getLocale() == 'ar'): ?>
                                                            <?php echo e($store->name_ar); ?>

                                                        <?php else: ?>
                                                            <?php echo e($store->name); ?>

                                                        <?php endif; ?>
                                                        
                                                    </a>
                                                </h6>
                                                <!-- Star Rating -->
                                                <div class="list-rating" style="color : #E2B93B;">
                                                    <?php
                                                        $wholeStars = floor($store->rating); // Number of filled stars
                                                        $fraction = $store->rating - $wholeStars; // Fractional part of the rating
                                                        $halfStar = $store->rating - $wholeStars >= 0.5; // Whether to show a half star
                                                        $emptyStars = 5 - $wholeStars - ($halfStar ? 1 : 0); // Number of empty stars
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

                                                    <span>(<?php echo e(number_format($store->rating, 1)); ?>)</span>
                                                    <!-- Display the exact rating -->
                                                </div>
                                            </DIV>

                                            <!-- More details link -->
                                            <a href="<?php echo e(route('Oneshops', ['shopId' => $store->id])); ?>"
                                                class="icon-btn"><i class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>






                        <div class="slider-pagination"></div>
                    </div>
                </div>






            </div>
        </div>
    </section>
    <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Devider Area
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <div class="overflow-hidden bg-white">
        <h3> </h3>

    </div>
    <!--==============================

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Feature Area
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section class="overflow-hidden space">
        <div class="shape-mockup" data-top="0%" data-left="0%"><img src="<?php echo e(asset('assets/img/bg/why_bg_2.png')); ?>"
                alt="shape">
        </div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title2"><img src="<?php echo e(asset('assets/img/theme-img/title_icon5.svg')); ?>"
                        alt="Icon"><?php echo e(__('messages.whySmallTitle')); ?></span>
                <h2 class="sec-title"><?php echo e(__('messages.whyBigTitle')); ?></h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="why-feature-left">
                        <div style="background-color:white;" class="why-feature">
                            <div style="background-color:#E1E4E5;" class="box-number">01</div>
                            <div class="box-icon">
                                <img src="<?php echo e(asset('assets/img/icon/why_feature_1.svg')); ?>" alt="">
                            </div>
                            <h3 class="box-title"><?php echo e(__('messages.whyTitle1')); ?></h3>
                            <p class="box-text"><?php echo e(__('messages.whyText1')); ?></p>
                        </div>
                        <div style="background-color:white;" class="why-feature">
                            <div style="background-color:#E1E4E5;" class="box-number">02</div>
                            <div class="box-icon">
                                <img src="<?php echo e(asset('assets/img/icon/why_feature_2.svg')); ?>" alt="">
                            </div>
                            <h3 class="box-title"><?php echo e(__('messages.whyTitle2')); ?></h3>
                            <p class="box-text"><?php echo e(__('messages.whyText2')); ?></p>
                        </div>
                        <div style="background-color:white;" class="why-feature">
                            <div style="background-color:#E1E4E5;" class="box-number">03</div>
                            <div class="box-icon">
                                <img src="<?php echo e(asset('assets/img/icon/why_feature_3.svg')); ?>" alt="">
                            </div>
                            <h3 class="box-title"><?php echo e(__('messages.whyTitle3')); ?></h3>
                            <p class="box-text"><?php echo e(__('messages.whyText3')); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 align-self-end d-none d-xl-block">
                    <div class="why-img2">
                        <img src="<?php echo e(asset('assets/img/normal/why_2.png')); ?>" alt="Why">
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="why-feature-right">
                        <div style="background-color:white;" class="why-feature">
                            <div style="background-color:#E1E4E5;" class="box-number">04</div>
                            <div class="box-icon">
                                <img src="<?php echo e(asset('assets/img/icon/why_feature_4.svg')); ?>" alt="">
                            </div>
                            <h3 class="box-title"><?php echo e(__('messages.whyTitle4')); ?></h3>
                            <p class="box-text"><?php echo e(__('messages.whyText4')); ?></p>
                        </div>
                        <div style="background-color:white;" class="why-feature">
                            <div style="background-color:#E1E4E5;" class="box-number">05</div>
                            <div class="box-icon">
                                <img src="<?php echo e(asset('assets/img/icon/why_feature_5.svg')); ?>" alt="">
                            </div>
                            <h3 class="box-title"><?php echo e(__('messages.whyTitle5')); ?></h3>
                            <p class="box-text"><?php echo e(__('messages.whyText5')); ?></p>
                        </div>
                        <div style="background-color:white;" class="why-feature">
                            <div style="background-color:#E1E4E5;" class="box-number">06</div>
                            <div class="box-icon">
                                <img src="<?php echo e(asset('assets/img/icon/why_feature_6.svg')); ?>" alt="">
                            </div>
                            <h3 class="box-title"><?php echo e(__('messages.whyTitle6')); ?></h3>
                            <p class="box-text"><?php echo e(__('messages.whyText6')); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Process Area
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section class="space" id="process-sec" data-bg-src="<?php echo e(asset('assets/img/bg/process_bg_2.jpg')); ?>">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-md-8">
                    <div class="title-area text-center">
                        <span class="sub-title2"><img src="<?php echo e(asset('assets/img/theme-img/title_icon5_white.svg')); ?>"
                                alt="Icon"><?php echo e(__('messages.processSmallTitle')); ?></span>
                        <h2 class="sec-title text-white"><?php echo e(__('messages.processBigTitle')); ?></h2>
                        <p class="sec-text text-white"> </p>
                    </div>
                </div>
            </div>

            <div class="process-box-wrap">
                <div class="process-box">
                    <div class="box-number">01</div>
                    <div class="box-content">
                        <h3 class="box-title"><?php echo e(__('messages.processTitle1')); ?></h3>
                        <p class="box-text"><?php echo e(__('messages.process1')); ?></p>
                    </div>
                </div>
                <div class="process-box">
                    <div class="box-number">02</div>
                    <div class="box-content">
                        <h3 class="box-title"><?php echo e(__('messages.processTitle2')); ?></h3>
                        <p class="box-text"><?php echo e(__('messages.process2')); ?></p>
                    </div>
                </div>
                <div class="process-box">
                    <div class="box-number">03</div>
                    <div class="box-content">
                        <h3 class="box-title"><?php echo e(__('messages.processTitle3')); ?></h3>
                        <p class="box-text"><?php echo e(__('messages.process3')); ?></p>
                    </div>
                </div>
                <div class="process-box">
                    <div class="box-number">04</div>
                    <div class="box-content">
                        <h3 class="box-title"><?php echo e(__('messages.processTitle4')); ?></h3>
                        <p class="box-text"><?php echo e(__('messages.process4')); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Team Area
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <section class="space">
        <div class="container z-index-common">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <div class="title-area text-center text-md-start">
                        <span class="sub-title"><img src="<?php echo e(asset('assets/img/theme-img/title_icon.svg')); ?>"
                                alt="shape"><?php echo e(__('messages.taskerSmallTile')); ?>

                        </span>
                        <h2 class="sec-title"><?php echo e(__('messages.taskerBigTile')); ?>

                        </h2>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="sec-btn mt-n3 mt-md-0">
                        <a href="<?php echo e(route('handymen.index')); ?>" class="th-btn style4"><?php echo e(__('taskerBtn')); ?>

                            <i class="far fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="teamSlider1"
                    data-slider-options='{"paginationType":"progressbar","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>

                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $topHandymen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $handyman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="th-team team-card">
                                    <div class="box-img">
                                        <?php if($handyman->handyman && $handyman->handyman->user && $handyman->handyman->user->image): ?>
                                            <img src="<?php echo e(asset('storage/profile_images/' . $handyman->handyman->user->image)); ?>"
                                                alt="<?php echo e($handyman->handyman->user->name); ?>">
                                        <?php else: ?>
                                            <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>"
                                                alt="<?php echo e($handyman->handyman && $handyman->handyman->user ? $handyman->handyman->user->name : 'Default Name'); ?>">
                                        <?php endif; ?>

                                    </div>
                                    <div class="box-content">
                                        <div class="box-social">
                                            <div class="box-btn"><i class="far fa-plus"></i></div>
                                            <div class="th-social">
                                                <?php if(isset($handyman) && isset($handyman->handyman_id)): ?>
                                                    <a href="<?php echo e(route('Onehandyman_clientVeiw', ['handymanId' => $handyman->handyman_id])); ?>"
                                                        class="read-more-link"><i class="far fa-eye"></i></a>
                                                <?php else: ?>
                                                    <p>No handyman information available</p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <h3 class="box-title"><a
                                                href="#"><?php echo e($handyman->handyman->user->name ?? 'Anonymous'); ?></a>
                                        </h3>
                                        </h3>
                                        <p class="box-desig">
                                            <?php echo e(\Illuminate\Support\Str::limit($handyman->handyman->bio ?? 'No bio available', 100, '...')); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>


                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Counter Area
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ==============================-->
    <div class="space-bottom">


        <div class="container">
            <div class="counter-card-wrap">
                <div class="counter-card">
                    <div class="box-icon">
                        <img src="<?php echo e(asset('assets/img/icon/counter_card_1.svg')); ?>" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number"><?php echo e($totalGigs); ?></span>+</h2>
                        <p class="box-text"><?php echo e(__('messages.gigsNumber')); ?></p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="box-icon">
                        <img src="<?php echo e(asset('assets/img/icon/counter_card_2.svg')); ?>" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number"><?php echo e($totalUsers); ?></span>+</h2>
                        <p class="box-text"><?php echo e(__('messages.UsersNumber')); ?></p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="box-icon">
                        <img src="<?php echo e(asset('assets/img/icon/counter_card_3.svg')); ?>" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number"><?php echo e($totalHandymen); ?></span>+</h2>
                        <p class="box-text"><?php echo e(__('messages.HandymansNumber')); ?></p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="counter-card">
                    <div class="box-icon">
                        <img src="<?php echo e(asset('assets/img/icon/counter_card_4.svg')); ?>" alt="Icon">
                    </div>
                    <div class="media-body">
                        <h2 class="box-number"><span class="counter-number"><?php echo e($totalStores); ?></span>+</h2>
                        <p class="box-text"><?php echo e(__('messages.StoresNumber')); ?></p>
                    </div>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/index.blade.php ENDPATH**/ ?>