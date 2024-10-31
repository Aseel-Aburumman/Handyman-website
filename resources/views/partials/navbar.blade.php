{{--  <!--==============================
    Mobile Menu
  ============================== -->  --}}
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logoHorizantal.png') }}" alt="kaafmuen"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                @auth
                    @if (Auth::user()->role_id == 2)
                        <!-- Customer Dashboard -->
                        <li><a href="{{ route('customer.dashboard') }}">{{ __('messages.Dashboard') }}
                            </a></li>
                    @elseif (Auth::user()->role_id == 3)
                        <!-- Store Owner Dashboard -->
                        <li><a href="{{ route('storeowner.dashboard') }}">{{ __('messages.Dashboard') }}
                            </a></li>
                    @elseif (Auth::user()->role_id == 4)
                        <!-- Handyman Dashboard -->
                        <li><a href="{{ route('handyman.dashboard') }}">{{ __('messages.Dashboard') }}
                            </a></li>
                    @endif
                @endauth
                @guest
                    <li><a href="{{ route('register') }}">{{ __('messages.Register') }}
                        </a></li>
                @endguest

                <li>
                    <a href="{{ route('home') }}">{{ __('messages.Home') }}
                    </a>

                </li>
                <li><a href="{{ route('cart') }}">Cart
                    </a></li>
                <li><a href="{{ route('aboutUs') }}">{{ __('messages.AboutUs') }}
                    </a></li>
                @auth
                    @if (Auth::user()->role_id == 2)
                        <!-- Customer Dashboard -->
                        <li><a href="{{ route('service') }}">{{ __('messages.OurService') }}
                            </a></li>
                    @elseif (Auth::user()->role_id == 4)
                        <!-- Handyman Dashboard -->
                        <li><a href="{{ route('handyman.allgigs') }}">{{ __('messages.GigsMarket') }}
                            </a></li>
                    @elseif (Auth::user()->role_id == 3)
                        <!-- Store Owner Dashboard -->
                        {{--  <li><a href="{{ route('service') }}">Our Service</a></li>  --}}
                    @endif
                @endauth
                <li><a href="{{ route('shops.index') }}">{{ __('messages.Shops') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('products.index') }}">{{ __('messages.Products') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('handymen.index') }}">{{ __('messages.Handymen') }}
                    </a>
                </li>



            </ul>
        </div>
    </div>
</div>



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
                            <li><i class="fas fa-clock"></i> 24 / 7 {{ __('messages.OnlineSupport') }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            @auth
                                @if (Auth::user()->role_id == 2)
                                    <!-- Customer Dashboard -->
                                    <li class="d-none d-md-inline-block"><i class="fa-solid fa-wrench"></i> <a
                                            href="{{ route('b.tasker') }}">{{ __('messages.BecomeHandyman') }}
                                        </a></li>
                                    <li class="d-none d-md-inline-block"><i class="fa-solid fa-shop"></i> <a
                                            href="{{ route('b.storeowner') }}">{{ __('messages.BecomeStoreOwner') }}
                                        </a></li>
                                @endif
                            @endauth
                            <li class="d-none d-md-inline-block">
                                <i class="fas fa-headset"></i> <a
                                    href="{{ route('contact') }}">{{ __('messages.Support') }} &nbsp
                                </a>
                            </li>
                            @guest
                                <li class="d-none d-md-inline-block"><i class="fas fa-user"></i> <a
                                        href="{{ route('login') }}">&nbsp{{ __('messages.SignIn') }}&nbsp
                                    </a>


                                    <a href="{{ route('register') }}">{{ __('messages.Register') }}
                                    </a>
                                </li>

                            @endguest
                            @auth
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                    <i class="fas fa-user"></i>
                                    <a href="#"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('messages.LogOut') }}
                                    </a>
                                </li>
                            @endauth

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
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logoHorizantal.png') }}"
                                    alt="Rakar"></a>

                            {{--  <a href="home-handyman.html"><img src="assets/img/logo.svg" alt="Rakar"></a>  --}}
                        </div>
                    </div>
                    <div class="col">
                        <div class="menu-area">
                            <nav class=" main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li>
                                        <a href="{{ route('home') }}">{{ __('messages.Home') }}
                                        </a>

                                    </li>
                                    <li><a href="{{ route('aboutUs') }}">{{ __('messages.AboutUs') }}
                                        </a></li>
                                    @auth
                                        @if (Auth::user()->role_id == 2)
                                            <!-- Customer Dashboard -->
                                            <li><a href="{{ route('service') }}">{{ __('messages.OurService') }}
                                                </a></li>
                                        @elseif (Auth::user()->role_id == 4)
                                            <!-- Handyman Dashboard -->
                                            <li><a href="{{ route('handyman.allgigs') }}">{{ __('messages.GigsMarket') }}
                                                </a></li>
                                        @endif
                                    @endauth <li><a href="{{ route('shops.index') }}">{{ __('messages.Shops') }}
                                        </a></li>
                                    <li><a href="{{ route('products.index') }}">{{ __('messages.Products') }}
                                        </a></li>
                                    <li><a href="{{ route('handymen.index') }}">{{ __('messages.Handymen') }}
                                        </a></li>


                                    @auth
                                        {{--  <ul style="margin-right:10px;">  --}}
                                        <li><a href="{{ route('cart') }}"><i class="fa-solid fa-cart-shopping fa-lg"
                                                    style="top:50%;color: #f47629;"></i>
                                            </a></li>
                                        {{--  </ul>  --}}
                                    @endauth
                                </ul>



                            </nav>
                            <div class="header-button">
                                <button type="button" class="th-menu-toggle d-block d-lg-none"><i
                                        class="far fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    @guest
                        <div class="col-auto d-none d-xxl-block">
                            <a href="{{ route('register') }}" class="th-btn style3">
                                {{ __('messages.Register') }}
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    @endguest
                    @auth
                        <div class="col-auto d-none d-xxl-block">
                            @if (Auth::user()->role_id == 2)
                                <!-- Customer Dashboard -->
                                <a href="{{ route('customer.dashboard') }}" class="th-btn style3">
                                    {{ __('messages.Dashboard') }}
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            @elseif (Auth::user()->role_id == 3)
                                <!-- Store Owner Dashboard -->
                                <a href="{{ route('storeowner.dashboard') }}" class="th-btn style3">
                                    {{ __('messages.Dashboard') }}
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            @elseif (Auth::user()->role_id == 4)
                                <!-- Handyman Dashboard -->
                                <a href="{{ route('handyman.dashboard') }}" class="th-btn style3">
                                    {{ __('messages.Dashboard') }}
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            @endif
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>

<!--==============================
