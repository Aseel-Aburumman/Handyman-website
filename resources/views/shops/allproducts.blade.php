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



                        <!-- Your blade template with products -->
                        @foreach ($products as $product)
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="{{ $product->image ? asset('storage/product_images/' . $product->image->name) : asset('assets/img/product/product_1_2.png') }}"
                                            alt="{{ $product->name }} pic">
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i
                                                    class="far fa-eye"></i></a>

                                            @if (Auth::check())
                                                <!-- If the user is logged in, show the Add to Cart button -->
                                                <form id="add-to-cart-form-{{ $product->id }}" class="add-to-cart-form">
                                                    @csrf
                                                    <!-- This directive outputs a hidden input containing the CSRF token -->
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                    <input type="hidden" name="store_id" value="{{ $product->store_id }}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <button type="button" class="icon-btn add-to-cart-btn"
                                                        data-product-id="{{ $product->id }}"
                                                        data-store-id="{{ $product->store_id }}">
                                                        <i class="fa-solid fa-cart-plus"></i>
                                                    </button>
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
                                                $wholeStars = floor($product->rating);
                                                $fraction = $product->rating - $wholeStars;
                                                $halfStar = $product->rating - $wholeStars >= 0.5;
                                                $emptyStars = 5 - $wholeStars - ($halfStar ? 1 : 0);
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
                                        </div>
                                        <h3 class="product-title"><a
                                                href="{{ route('product', ['productId' => $product->id]) }}">{{ $product->name }}</a>
                                        </h3>
                                        <span class="price">JD {{ $product->price }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <script>
                            // Add event listeners to all "Add to Cart" buttons
                            document.querySelectorAll('.add-to-cart-btn').forEach(function(btn) {
                                btn.addEventListener('click', function() {
                                    let productId = btn.getAttribute('data-product-id');
                                    let storeId = btn.getAttribute('data-store-id');

                                    // Find the form that this button belongs to
                                    let form = btn.closest('form');

                                    // Retrieve the CSRF token from the form's hidden input field
                                    let csrfToken = form.querySelector('input[name="_token"]').value;

                                    // Call the function to handle the Add to Cart logic
                                    handleAddToCart(productId, storeId, csrfToken);
                                });
                            });

                            // Function to handle Add to Cart logic
                            function handleAddToCart(productId, storeId, csrfToken) {
                                // Log the product ID and store ID for debugging
                                console.log('Product ID:', productId, 'Store ID:', storeId);

                                // Prepare the form data
                                let formData = new FormData();
                                formData.append('product_id', productId);
                                formData.append('store_id', storeId);
                                formData.append('quantity', 1); // Default quantity is 1

                                // Include the CSRF token
                                formData.append('_token', csrfToken);

                                // Perform the AJAX request to add the product to the cart
                                fetch('/cart/addsmaller', {
                                        method: 'POST',
                                        body: formData,
                                        headers: {
                                            // The CSRF token is now included in the form data, no need for extra headers
                                        }
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.status === 'warning') {
                                            // If there are items from another store, ask the user to confirm
                                            if (confirm(data.message)) {
                                                // Clear the cart if the user confirms
                                                fetch('/cart/clear', {
                                                        method: 'POST',
                                                        headers: {
                                                            'X-CSRF-TOKEN': csrfToken // Send the CSRF token for the clear cart request
                                                        }
                                                    })
                                                    .then(response => response.json())
                                                    .then(clearData => {
                                                        if (clearData.status === 'success') {
                                                            // Now add the product to the cart after clearing
                                                            fetch('/cart/add', {
                                                                    method: 'POST',
                                                                    body: formData
                                                                })
                                                                .then(response => response.json())
                                                                .then(data => {
                                                                    alert(data.message); // Notify the user
                                                                });
                                                        }
                                                    });
                                            }
                                        } else if (data.status === 'success') {
                                            alert(data.message); // Notify the user that the item was added
                                        }
                                    });
                            }
                        </script>



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
