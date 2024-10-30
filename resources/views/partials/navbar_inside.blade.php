<!--==============================
    Mobile Menu
  ============================== -->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logoHorizantal.svg') }}" alt="Rakar"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                @auth
                    @if (Auth::user()->role_id == 2)
                        <!-- Customer Dashboard -->
                        <li><a href="{{ route('customer.dashboard') }}">{{ __('messages.Dashboard') }}</a></li>
                    @elseif (Auth::user()->role_id == 3)
                        <!-- Store Owner Dashboard -->
                        <li><a href="{{ route('storeowner.dashboard') }}">{{ __('messages.Dashboard') }}</a></li>
                    @elseif (Auth::user()->role_id == 4)
                        <!-- Handyman Dashboard -->
                        <li><a href="{{ route('handyman.dashboard') }}">{{ __('messages.Dashboard') }}</a></li>
                    @endif
                @endauth
                @guest
                    <li><a href="{{ route('register') }}">{{ __('messages.Register') }}</a></li>
                @endguest
                <li>
                    <a href="{{ route('home') }}">{{ __('messages.Home') }}</a>

                </li>
                <li><a href="{{ route('aboutUs') }}">{{ __('messages.AboutUs') }}</a></li>
                @auth
                    @if (Auth::user()->role_id == 2)
                        <!-- Customer Dashboard -->
                        <li><a href="{{ route('service') }}">{{ __('messages.OurService') }}</a></li>
                    @elseif (Auth::user()->role_id == 4)
                        <!-- Store Owner Dashboard -->
                        <li><a href="{{ route('handyman.allgigs') }}">{{ __('messages.GigsMarket') }}</a></li>
                    @elseif (Auth::user()->role_id == 3)
                        <!-- Handyman Dashboard -->
                        {{--  <li><a href="{{ route('service') }}">Our Service</a></li>  --}}
                    @endif
                @endauth
                <li><a href="{{ route('shops.index') }}">{{ __('messages.Shops') }}</a></li>
                <li><a href="{{ route('products.index') }}">{{ __('messages.Products') }}</a></li>
                <li><a href="{{ route('handymen.index') }}">{{ __('messages.Handymen') }}</a></li>

            </ul>f47629
        </div>
    </div>
</div><!--==============================
 Header Area
==============================-->
<header class="th-header header-layout1 ">
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
                            <li><i class="fas fa-clock"></i> 24 / 7 {{ __('messages.OnlineSupport') }}</li>
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
                                            href="{{ route('b.tasker') }}">{{ __('messages.BecomeHandyman') }}</a></li>

                                    <li class="d-none d-md-inline-block"><i class="fa-solid fa-shop"></i> <a
                                            href="{{ route('b.storeowner') }}">{{ __('messages.BecomeStoreOwner') }}</a>
                                    </li>
                                    {{--  @elseif (Auth::user()->role_id == 4)
                                        <!-- Store Owner Dashboard -->

                                    <li class="d-none d-md-inline-block"><i class="fa-solid fa-shop"></i> <a
                                            href="{{ route('b.storeowner') }}">Become a Store Owner </a></li>
                                    <li>
                                    @elseif (Auth::user()->role_id == 3)
                                        <!-- Handyman Dashboard -->
                                    <li class="d-none d-md-inline-block"><i class="fa-solid fa-wrench"></i> <a
                                            href="{{ route('b.tasker') }}">Become a Handyman </a></li>
                                    <li>  --}}
                                @endif
                            @endauth
                            <li>
                                <i class="fas fa-headset"></i> <a
                                    href="{{ route('contact') }}">{{ __('messages.Support') }} &nbsp</a>
                            </li>

                            @guest

                                <li><i class="fas fa-user"></i> <a
                                        href="{{ route('login') }}">&nbsp{{ __('messages.SignIn') }}&nbsp</a><a
                                        href="{{ route('register') }}">{{ __('messages.Register') }}</a></li>
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
        <div class="container">
            <div class="menu-area">
                <div class="row align-items-center justify-content-between flex-nowrap">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ route('home') }}"><img style="width: 230px;"
                                    src="{{ asset('assets/img/logoHorizantal.png') }}" alt="Rakar"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                @guest

                                    <li>
                                        <a href="{{ route('home') }}">{{ __('messages.Home') }}</a>

                                    </li>
                                @endguest
                                @auth
                                    @if (Auth::user()->role_id == 2)
                                        <!-- Customer Dashboard -->
                                        <li>
                                            <a href="{{ route('customer.Home') }}">{{ __('messages.Home') }}
                                            </a>
                                        </li>
                                    @elseif (Auth::user()->role_id == 3)
                                        <!-- Store Owner Dashboard -->
                                        <li>
                                            <a href="{{ route('storeowner.Home') }}">{{ __('messages.Home') }}
                                            </a>
                                        </li>
                                    @elseif (Auth::user()->role_id == 4)
                                        <!-- Handyman Dashboard -->
                                        <li>
                                            <a href="{{ route('handyman.Home') }}">{{ __('messages.Home') }}
                                            </a>
                                        </li>
                                    @endif

                                @endauth
                                <li><a href="{{ route('aboutUs') }}">{{ __('messages.AboutUs') }}</a></li>
                                @auth
                                    @if (Auth::user()->role_id == 2)
                                        <!-- Customer Dashboard -->
                                        <li><a href="{{ route('service') }}">{{ __('messages.OurService') }}</a></li>
                                    @elseif (Auth::user()->role_id == 4)
                                        <!-- Store Owner Dashboard -->
                                        <li><a href="{{ route('handyman.allgigs') }}">{{ __('messages.GigsMarket') }}</a>
                                        </li>
                                    @elseif (Auth::user()->role_id == 3)
                                        <!-- Handyman Dashboard -->
                                        {{--  <li><a href="{{ route('service') }}">Our Service</a></li>  --}}
                                    @endif
                                @endauth <li><a href="{{ route('shops.index') }}">{{ __('messages.Shops') }}</a></li>
                                <li><a href="{{ route('products.index') }}">{{ __('messages.Products') }}</a></li>
                                <li><a href="{{ route('handymen.index') }}">{{ __('messages.Handymen') }}</a></li>
                                @auth
                                    <li><a href="{{ route('cart') }}"><i class="fa-solid fa-cart-shopping fa-lg"
                                                style="margin-right:10px; top:50%;color: #f47629;"></i>
                                        </a></li>


                                    <li class="menu-item-has-children">
                                        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                                            <i class="fa-solid fa-bell fa-lg" style="top: 20px; color: #f47629;"></i> <span
                                                style="background-color:#F47629;"
                                                class="badge  badge-number">{{ $adminNotifications->where('is_read', 0)->count() }}</span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="dropdown-header">
                                                {{ __('messages.notificationPart1') }}
                                                {{ $adminNotifications->where('is_read', 0)->count() }}{{ __('messages.notificationPart2') }}


                                            </li>
                                            <li>
                                                <hr>
                                            </li>
                                            @forelse ($adminNotifications as $notification)
                                                <li style="display: flex;" class="notification-item">
                                                    @if ($notification->category == 'primary')
                                                        <i class="bi bi-exclamation-circle text-primary"></i>
                                                    @elseif ($notification->category == 'success')
                                                        <i class="bi bi-check-circle text-success"></i>
                                                    @elseif ($notification->category == 'danger')
                                                        <i class="bi bi-x-circle text-danger"></i>
                                                    @elseif ($notification->category == 'warning')
                                                        <i class="bi bi-info-circle text-warning"></i>
                                                    @endif
                                                    <div style="margin-left: 10px;">
                                                        <h4 style="font-size: 0.9rem;">
                                                            @if (App::getLocale() == 'ar')
                                                                {{ $notification->message_ar }}
                                                            @else
                                                                {{ $notification->message }}
                                                            @endif
                                                        </h4>
                                                        <p style="font-size: 0.7rem;">
                                                            {{ $notification->created_at->diffForHumans() }}</p>
                                                    </div>
                                                </li>

                                            @empty
                                                <li class="notification-item">
                                                    <div>
                                                        <h4>{{ __('messages.notificationNo') }}
                                                        </h4>
                                                    </div>
                                                </li>
                                            @endforelse

                                            <li class="dropdown-footer">
                                                <a href="{{ route('user.notification') }}">{{ __('messages.notificationAll') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </li>



                                @endauth
                            </ul>


                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-lg-none"><i
                                class="fa-solid fa-bars"></i></button>

                    </div>
                    @guest
                        <div class="col-auto d-none d-xxl-block">
                            <a href="{{ route('register') }}" class="th-btn style3">{{ __('messages.Register') }}

                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    @endguest
                    @auth
                        <div class="col-auto d-none d-xxl-block">
                            @if (Auth::user()->role_id == 2)
                                <!-- Customer Dashboard -->
                                <a href="{{ route('customer.dashboard') }}"
                                    class="th-btn style3">{{ __('messages.Dashboard') }}

                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            @elseif (Auth::user()->role_id == 3)
                                <!-- Store Owner Dashboard -->
                                <a href="{{ route('storeowner.dashboard') }}"
                                    class="th-btn style3">{{ __('messages.Dashboard') }}

                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            @elseif (Auth::user()->role_id == 4)
                                <!-- Handyman Dashboard -->
                                <a href="{{ route('handyman.dashboard') }}"
                                    class="th-btn style3">{{ __('messages.Dashboard') }}

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
