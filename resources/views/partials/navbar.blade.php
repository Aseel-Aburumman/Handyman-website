<!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="home-handyman.html"><img src="{{ asset('assets/img/logoHorizantal.svg')}}" alt="Rakar"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="home-handyman.html">Home</a>
                        <ul class="sub-menu">
                            <li><a href="home-handyman.html">Home Handyman</a></li>
                            <li><a href="home-office-repair.html">Home Office Repair</a></li>
                            <li><a href="home-electrician.html">Home Electrician</a></li>
                            <li><a href="home-air-condition.html">Home Air Condition</a></li>
                            <li><a href="home-carpentry.html">Home Carpentry</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Our Services</a>
                        <ul class="sub-menu">
                            <li><a href="service.html">Our Services</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="shop-details.html">Shop Details</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="team.html">Team</a></li>
                            <li><a href="team-details.html">Team Details</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="pricing.html">Price Plan</a></li>
                            <li><a href="testimonial.html">Testimonials</a></li>
                            <li><a href="faq.html">Faq Page</a></li>
                            <li><a href="error.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Project</a>
                        <ul class="sub-menu">
                            <li><a href="project.html">Project</a></li>
                            <li><a href="project-details.html">Project Details</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div><!--==============================
	Header Area
==============================-->
    <header class="th-header header-layout2 ">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links">
                            <ul>
                                <li><i class="fas fa-globe"></i>
                                 <a href="{{ url('lang/en') }}">English |</a>
                                 <a href="{{ url('lang/ar') }}">العربية</a>
                                </li>
                                <li><i class="fas fa-clock"></i> 24/7 Online Support </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
{{--  TODO  --}}

                                <li class="d-none d-md-inline-block"><i class="fas fa-messages"></i> <a href="faq.html">FAQ</a></li>
                                <li><i class="fas fa-headset"></i> <a href="contact.html">Support</a></li>
                                <li><i class="fas fa-user"></i> <a href="contact.html">Sign In / Register</a></li>
{{--  TODO  --}}
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="sticky-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="home-handyman.html"><img src="{{ asset('assets/img/logoHorizantal.png')}}" alt="Rakar"></a>

                                {{--  <a href="home-handyman.html"><img src="assets/img/logo.svg" alt="Rakar"></a>  --}}
                            </div>
                        </div>
                        <div class="col">
                            <div class="menu-area">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                        <li class="menu-item-has-children">
                                            <a href="home-handyman.html">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="home-handyman.html">Home Handyman</a></li>
                                                <li><a href="home-office-repair.html">Home Office Repair</a></li>
                                                <li><a href="home-electrician.html">Home Electrician</a></li>
                                                <li><a href="home-air-condition.html">Home Air Condition</a></li>
                                                <li><a href="home-carpentry.html">Home Carpentry</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Our Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="service.html">Our Services</a></li>
                                                <li><a href="service-details.html">Service Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="#">Shop</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="shop.html">Shop</a></li>
                                                        <li><a href="shop-details.html">Shop Details</a></li>
                                                        <li><a href="cart.html">Cart Page</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                                <li><a href="pricing.html">Price Plan</a></li>
                                                <li><a href="testimonial.html">Testimonials</a></li>
                                                <li><a href="faq.html">Faq Page</a></li>
                                                <li><a href="error.html">Error Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Project</a>
                                            <ul class="sub-menu">
                                                <li><a href="project.html">Project</a></li>
                                                <li><a href="project-details.html">Project Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="header-button">
                                    <form action="#" class="header-search">
                                        <input type="text" placeholder="Search Services...">
                                        <button type="button" class="icon-btn"><i class="fal fa-search"></i></button>
                                    </form>
                                    <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto d-none d-xxl-block">
                            <a href="contact.html" class="th-btn style3">Get A Quote<i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--==============================
