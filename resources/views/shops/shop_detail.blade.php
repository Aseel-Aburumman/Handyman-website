@extends('layouts.inside')

@section('content')
    <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Breadcumb
                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $store->name }} Profile</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('shops.index') }}">All Shops</a></li>

                    <li>{{ $store->name }}</li>
                </ul>
            </div>
        </div>
    </div>



    <div class="overflow-hidden " data-bg-src="{{ asset('assets/img/bg/about_bg_4.png') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-35 mb-xl-0">
                    <div class="img-box6">
                        <div class="img1">

                            <div class="containerStore">
                                <img src="{{ asset('assets/img/normal/about_4.png') }}" alt="Black Rectangle"
                                    class="black-rectangle">
                                <img src="{{ $store->image ? asset('store_logo_images/' . $store->image->name) : asset('assets/img/normal/why_1.jpg') }}"
                                    alt="Red Rectangle" class="red-rectangle">
                            </div>

                        </div>
                        <div class="year-box">
                            <div class="box-number box-numberRating ">{{ $store->rating }}/5</div>
                            <p class="box-text">Rating</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center text-xl-start">
                    <div class="pe-xxl-5">
                        <div class="title-area mb-37">
                            <span class="sub-title"><span class="line"></span>
                                {{--  <img
                                    src="{{ asset('assets/img/theme-img/title_icon4.svg') }}"
                                    alt="shape">  --}}
                                <i class="fa-solid fa-location-dot"></i>
                                {{ $store->location }}</span>
                            <h2 class="sec-title">{{ $store->name }}</h2>
                            <p class="sec-text">{{ $store->description }}</p>
                        </div>
                        <div class="checklist list-one-column fw-regular">
                            <ul>
                                <li>Total Reviews: {{ $reviewCount }}</li>


                                <li>Total Sales: {{ $totalSales }}</li>

                            </ul>
                        </div>
                        {{--  <div class="btn-group mt-30 justify-content-center">
                            <a href="about.html" class="th-btn rounded-12 style4">Discover More<i
                                    class="far fa-arrow-right ms-2"></i></a>
                            <div class="call-btn">
                                <div class="play-btn">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <p class="box-label">Call Us 24/7</p>
                                    <h6 class="box-link"><a href="tel:+0123456789">+0 (123) 456 789</a></h6>
                                </div>
                            </div>
                        </div>  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>








    <!-- Search Section -->
    <section class="overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-md-10">
                    <div class="title-area text-center">
                        <h2 class="sec-title">Shop All Your Needs</h2>
                        <form action="{{ route('Oneshops', ['shopId' => $store->id]) }}" method="GET"
                            class="d-flex mb-5">
                            <!-- Search Input -->
                            <input class="shop-search" type="text" name="search" class="form-control"
                                placeholder="Search by shop name" value="{{ request('search') }}">
                            <!-- Search Button -->
                            <button type="submit" class="btn btn-primary ms-2 searchBtn">Search</button>
                            <!-- Reset Button -->
                            <a href="{{ route('Oneshops', ['shopId' => $store->id]) }}"
                                class="btn btn-secondary ms-2 resetBtn">Reset</a>
                        </form>
                    </div>
                </div>
            </div>


            <section class=" space-extra-bottom">
                <div class="container">
                    {{--  <div class="th-sort-bar">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md">
                                <p class="woocommerce-result-count">Showing 1–12 of 16 results</p>
                            </div>

                            <div class="col-md-auto">
                                <form class="woocommerce-ordering" method="get">
                                    <select name="orderby" class="orderby" aria-label="Shop order">
                                        <option value="menu_order" selected="selected">Default Sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by latest</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>  --}}
                    <div class="row gy-40">



                        @foreach ($products as $product)
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="{{ $product->image ? asset('storage/product_images/' . $product->image->name) : asset('assets/img/product/product_1_2.png') }}"
                                            alt="{{ $product->name }} pic">
                                        {{--  <img src="assets/img/product/product_1_2.png" alt="Product Image">  --}}
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i
                                                    class="far fa-eye"></i></a>

                                            @if (Auth::check())
                                                <!-- If the user is logged in, show the Add to Cart button -->
                                                <form action="{{ route('cart.add') }}" method="POST"
                                                    class="add-to-cart-form">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <input type="hidden" name="store_id" value="{{ $product->store_id }}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <!-- Default quantity is 1 -->
                                                    <button type="submit" class="icon-btn"><i
                                                            class="fa-solid fa-cart-plus"></i></button>
                                                </form>
                                            @else
                                                <!-- If the user is not logged in, redirect to the login page -->
                                                <a href="{{ route('login') }}" class="icon-btn"><i
                                                        class="fa-solid fa-cart-plus"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <!-- Star Rating -->
                                        <div class="list-rating" style="color : #E2B93B;">
                                            @php
                                                $wholeStars = floor($product->rating); // Number of filled stars
                                                $fraction = $product->rating - $wholeStars; // Fractional part of the rating
                                                $halfStar = $product->rating - $wholeStars >= 0.5; // Whether to show a half star
                                                $emptyStars = 5 - $wholeStars - ($halfStar ? 1 : 0); // Number of empty stars
                                            @endphp

                                            @for ($i = 0; $i < $wholeStars; $i++)
                                                <i class="fas fa-star filled"></i>
                                            @endfor

                                            @if ($halfStar)
                                                <i class="fas fa-star-half-alt filled"></i>
                                            @endif

                                            @for ($i = 0; $i < $emptyStars; $i++)
                                                <i class="far fa-star"></i>
                                            @endfor

                                            <span>({{ number_format($product->rating, 1) }})</span>
                                            <!-- Display the exact rating -->
                                        </div>
                                        <h3 class="product-title"><a
                                                href="{{ route('product', ['productId' => $product->id]) }}">{{ $product->name }}</a>
                                        </h3>
                                        <span class="price">JD {{ $product->price }}</span>
                                    </div>
                                </div>
                            </div>
                            <script>
                                document.querySelectorAll('.add-to-cart-form').forEach(function(form) {
                                    form.addEventListener('submit', function(event) {
                                        event.preventDefault(); // Prevent default form submission

                                        var formData = new FormData(this);

                                        fetch('{{ route('cart.add') }}', {
                                                method: 'POST',
                                                headers: {
                                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                    'Accept': 'application/json',
                                                },
                                                body: formData
                                            })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.status === 'error') {
                                                    // Show the confirmation dialog if there is an error
                                                    if (confirm(data.message)) {
                                                        // If the user confirms, reset the cart and add the new product
                                                        fetch('{{ route('cart.resetAndAdd') }}', {
                                                                method: 'POST',
                                                                headers: {
                                                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                                    'Accept': 'application/json',
                                                                },
                                                                body: formData
                                                            })
                                                            .then(response => response.json())
                                                            .then(data => {
                                                                alert(data.message);
                                                            });
                                                    }
                                                } else {
                                                    // Success, the product was added to the cart
                                                    alert(data.message);
                                                }
                                            });
                                    });
                                });
                            </script>
                        @endforeach



                    </div>
                    <!-- Pagination -->
                    <div class="th-pagination text-center pt-50">
                        <ul class="pagination">
                            {{ $products->onEachSide(1)->links('vendor.pagination.custom') }}
                        </ul>
                    </div>
                </div>
            </section>





        </div>
    </section>
@endsection
