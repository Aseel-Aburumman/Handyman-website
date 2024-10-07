@extends('layouts.inside')

@section('content')
    <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Breadcumb
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">All Products</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>

                    <li>All Products</li>
                </ul>
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
                        <form action="{{ route('products.index') }}" method="GET" class="d-flex mb-5">
                            <!-- Search Input -->
                            <input class="shop-search" type="text" name="search" class="form-control"
                                placeholder="Search by shop name" value="{{ request('search') }}">
                            <!-- Search Button -->
                            <button type="submit" class="btn btn-primary ms-2 searchBtn">Search</button>
                            <!-- Reset Button -->
                            <a href="{{ route('products.index') }}" class="btn btn-secondary ms-2 resetBtn">Reset</a>
                        </form>
                    </div>
                </div>
            </div>


            <section class=" space-extra-bottom">
                <div class="container">

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
