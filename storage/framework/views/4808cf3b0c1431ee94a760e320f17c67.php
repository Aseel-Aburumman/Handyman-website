<!--==============================
 Footer Area
==============================-->
<footer class="footer-wrapper footer-layout1" data-bg-src="<?php echo e(asset('assets/img/bg/footer_bg_1.jpg')); ?>">
    <div class="shape-mockup spin" data-top="14%" data-left="4%"><img src="<?php echo e(asset('assets/img/shape/dots_1.svg')); ?>"
            alt="shape"></div>
    <div class="shape-mockup spin" data-bottom="18%" data-right="7%"><img src="<?php echo e(asset('assets/img/shape/dots_1.svg')); ?>"
            alt="shape">
    </div>
    <div class="footer-contact-area">
        <div class="container">
            <div class="footer-contact-wrap">
                <div class="footer-contact">
                    <div class="box-icon">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <div class="media-body">
                        <p class="box-text"><?php echo e(__('messages.location')); ?>

                        </p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="footer-contact">
                    <div class="box-icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="box-title"><?php echo e(__('messages.CallUs')); ?>

                        </h3>
                        <p class="box-text"><a href="tel:+962">+962 79 661 5575</a></p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="footer-contact">
                    <div class="box-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="box-title"><?php echo e(__('messages.EmailUs')); ?>

                        </h3>
                        <p class="box-text"><a href="mailto:support@Kafmueen.com">support@Kafmueen.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-auto">
                    <div class=" widget footer-widget">
                        <div class="th-widget-about ">
                            <div class="about-logo">
                                <a href="home-handyman.html"><img src="<?php echo e(asset('assets/img/logoHorizantal.png')); ?>"
                                        alt="Rakar"></a>
                            </div>
                            <p class="w-75  about-text"><?php echo e(__('messages.aboutFooter')); ?>

                            </p>
                            <div class="th-social">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title"><img src="<?php echo e(asset('assets/img/icon/footer_title.svg')); ?>"
                                alt="icon"> Useful
                            Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.Home')); ?>

                                    </a></li>
                                <li><a href="<?php echo e(route('aboutUs')); ?>"><?php echo e(__('messages.AboutUs')); ?>

                                    </a></li>
                                
                                <li><a href="<?php echo e(route('service')); ?>"><?php echo e(__('messages.OurService')); ?>

                                    </a></li>
                                
                                <li><a href="<?php echo e(route('shops.index')); ?>"><?php echo e(__('messages.Shops')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-auto">
                    <div class="widget newsletter-widget footer-widget">
                        <h3 class="widget_title"><img src="<?php echo e(asset('assets/img/icon/footer_title.svg')); ?>"
                                alt="icon"> <?php echo e(__('messages.Newsletter')); ?>

                        </h3>
                        <p class="footer-text"><?php echo e(__('messages.NewsletterText')); ?></p>
                        <form class="newsletter-form">
                            <input class="form-control" type="email" placeholder="Enter email address" required="">
                            <button type="submit" class="th-btn style3"><?php echo e(__('messages.Subscribe')); ?><i
                                    class="far fa-arrow-right ms-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row gy-2 align-items-center">
                <div class="col-md-6">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a
                            href="<?php echo e(route('home')); ?>">Kaf Mueen</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-links">
                        <ul>
                            <li><a href="<?php echo e(route('terms')); ?>">Terms of service</a></li>
                            <li><a href="about.html"> </a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/partials/footer.blade.php ENDPATH**/ ?>