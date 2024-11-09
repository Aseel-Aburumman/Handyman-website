<!--==============================
 Footer Area
==============================-->
<footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('assets/img/bg/footer_bg_1.jpg') }}">
    <div class="shape-mockup spin" data-top="14%" data-left="4%"><img src="{{ asset('assets/img/shape/dots_1.svg') }}"
            alt="shape"></div>
    <div class="shape-mockup spin" data-bottom="18%" data-right="7%"><img src="{{ asset('assets/img/shape/dots_1.svg') }}"
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
                        <p class="box-text">{{ __('messages.location') }}
                        </p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="footer-contact">
                    <div class="box-icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">{{ __('messages.CallUs') }}
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
                        <h3 class="box-title">{{ __('messages.EmailUs') }}
                        </h3>
                        <p class="box-text"><a href="mailto:support@Kafmueen.com">support@Kafmueen.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-area">


        <div class="container">
            <div class="row justify-content-between align-items-start">
                <!-- About Section -->
                <div class="col-md-6 col-lg-4">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a href="home-handyman.html">
                                    <img src="{{ asset('assets/img/logoHorizantal.png') }}" alt="Rakar"
                                        class="logo-img">
                                </a>
                            </div>
                            <p class="about-text">{{ __('messages.aboutFooter') }}</p>
                            <div class="th-social">
                                <a href="https://www.facebook.com/" aria-label="Facebook"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://www.twitter.com/" aria-label="Twitter"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/" aria-label="Instagram"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/" aria-label="LinkedIn"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Useful Links Section -->
                <div class="col-md-6 col-lg-3">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">
                            <img src="{{ asset('assets/img/icon/footer_title.svg') }}" alt="icon"> Useful Links
                        </h3>
                        <ul class="menuFooter menu">
                            <li><a href="{{ route('home') }}">{{ __('messages.Home') }}</a></li>
                            <li><a href="{{ route('aboutUs') }}">{{ __('messages.AboutUs') }}</a></li>
                            <li><a href="{{ route('service') }}">{{ __('messages.OurService') }}</a></li>
                            <li><a href="{{ route('shops.index') }}">{{ __('messages.Shops') }}</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Newsletter Section -->
                <div class="col-md-6 col-lg-4">
                    <div class="widget newsletter-widget footer-widget">
                        <h3 class="widget_title">
                            <img src="{{ asset('assets/img/icon/footer_title.svg') }}" alt="icon">
                            {{ __('messages.Newsletter') }}
                        </h3>
                        <p class="footer-text">{{ __('messages.NewsletterText') }}</p>
                        <form class="newsletter-form">
                            <input class="form-control" type="email" placeholder="Enter email address" required>
                            <button type="submit" class="th-btn style3">
                                {{ __('messages.Subscribe') }} <i class="fa fa-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        {{--
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-auto">
                    <div class=" widget footer-widget">
                        <div class="th-widget-about ">
                            <div class="about-logo">
                                <a href="home-handyman.html"><img src="{{ asset('assets/img/logoHorizantal.png') }}"
                                        alt="Rakar"></a>
                            </div>
                            <p class="w-75  about-text">{{ __('messages.aboutFooter') }}
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
                        <h3 class="widget_title"><img src="{{ asset('assets/img/icon/footer_title.svg') }}"
                                alt="icon"> Useful
                            Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ route('home') }}">{{ __('messages.Home') }}
                                    </a></li>
                                <li><a href="{{ route('aboutUs') }}">{{ __('messages.AboutUs') }}
                                    </a></li>
                                <li><a href="{{ route('service') }}">{{ __('messages.OurService') }}
                                    </a></li>
                                <li><a href="{{ route('shops.index') }}">{{ __('messages.Shops') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-auto">
                    <div class="widget newsletter-widget footer-widget">
                        <h3 class="widget_title"><img src="{{ asset('assets/img/icon/footer_title.svg') }}"
                                alt="icon"> {{ __('messages.Newsletter') }}
                        </h3>
                        <p class="footer-text">{{ __('messages.NewsletterText') }}</p>
                        <form class="newsletter-form">
                            <input class="form-control" type="email" placeholder="Enter email address" required="">
                            <button type="submit" class="th-btn style3">{{ __('messages.Subscribe') }}<i
                                    class="far fa-arrow-right ms-2"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>  --}}
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row gy-2 align-items-center">
                <div class="col-md-6">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a
                            href="{{ route('home') }}">Kaf Mueen</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-links">
                        <ul>
                            <li><a href="{{ route('terms') }}">Terms of service</a></li>
                            <li><a href="about.html"> </a></li>
                            {{--  <li><a href="about.html">Cookies</a></li>  --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  <style>
        /* General Footer Styling */
        .footer-widget {
            margin-bottom: 1.5rem;
        }

        .widget_title {
            display: flex;
            align-items: center;
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 0.75rem;
            width: 100% !important;

        }

        .th-widget-about {
            width: 100% !important;
        }

        .widget_title img {
            margin-right: 0.5rem;
        }

        /* Logo Styling */
        .logo-img {
            max-width: 80% !important;

            max-width: 150px;
            height: auto;
        }

        /* About Section */
        .about-text {
            max-width: 80% !important;
            margin-bottom: 1rem;
        }

        .th-social a {
            color: #fff;
            margin-right: 0.5rem;
            font-size: 1.2rem;
            display: inline-block;
        }

        /* Newsletter Section */
        .newsletter-form {
            display: flex;
            align-items: center;
        }

        .newsletter-form input {
            flex: 1;
            padding: 0.5rem;
            margin-right: 0.5rem;
        }

        .th-btn.style3 {
            background-color: #f57c00;
            /* Adjust to match your theme */
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            display: flex;
            align-items: center;
        }

        .th-btn.style3 i {
            margin-left: 0.5rem;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .newsletter-form {
                flex-direction: column;
            }

            .newsletter-form input {
                margin-right: 0;
                margin-bottom: 0.5rem;
            }

            .th-social a {
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {

            .about-text,
            .widget_nav_menu ul.menu {
                text-align: center;
            }

            .menu-all-pages-container,
            .newsletter-widget {
                text-align: center;
            }
        }
    </style>  --}}

</footer>
