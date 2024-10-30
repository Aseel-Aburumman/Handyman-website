@extends('layouts.inside')

@section('content')
    <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Breadcumb
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $product->name }} {{ __('messages.Detail') }}
                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('messages.Home') }}
                        </a></li>
                    <li><a href="{{ route('products.index') }}">{{ __('messages.AllProduct') }}
                        </a></li>

                    <li>{{ $product->name }}</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="product-details space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-60">
                <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img"><img
                                src="{{ $product->image ? asset('storage/product_images/' . $product->image->name) : asset('assets/img/product/product_1_2.png') }}"
                                alt="Product Image"></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-about">
                        @if ($product->discounted_price)
                            <p class="price">{{ __('messages.JD') }}
                                {{ $product->discounted_price }}<del>{{ __('messages.JD') }} {{ $product->price }}</del>
                            </p>
                        @else
                            <p class="price">{{ __('messages.JD') }}{ { $product->price }}</p>
                        @endif
                        <h2 class="product-title">{{ $product->name }}</h2>

                        <div class="product-rating">
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
                            <a href="shop-details.html" class="woocommerce-review-link">(<span style="color :#666666;"
                                    class="count">{{ $reviewCount }}</span>
                                {{ __('messages.customerReviews') }})</a>
                        </div>
                        <p class="text">{{ \Illuminate\Support\Str::limit($product->description, 200, '...') }}</p>
                        <div class="mt-2 link-inherit">
                            <p>
                                <strong class="text-title me-3">{{ __('messages.Availability') }}:</strong>
                                @if ($product->availability)
                                    <span class="stock in-stock"><i
                                            class="far fa-check-square me-2 ms-1"></i>{{ __('messages.InStock') }}</span>
                                @else
                                    <span class="stock in-stock"><i
                                            class="far fa-square me-2 ms-1"></i>{{ __('messages.InStock') }}</span>
                                @endif
                            </p>
                        </div>

                        <div class="actions">
                            @if ($userId)
                                <form action="{{ route('cart.add') }}" method="POST" id="add-to-cart-form">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="store_id" value="{{ $product->store_id }}">
                                    <div class="quantity">
                                        <input type="number" class="qty-input" step="1" min="1" max="100"
                                            name="quantity" value="1" title="Qty">
                                        <button class="quantity-plus qty-btn" type="button"><i
                                                class="fa-solid fa-chevron-up"></i></button>
                                        <button class="quantity-minus qty-btn" type="button"><i
                                                class="fa-solid fa-chevron-down"></i></button>
                                    </div>
                                    <button type="submit" class="th-btn">{{ __('messages.AddCart') }}</button>
                                </form>
                                <script>
                                    document.getElementById('add-to-cart-form').addEventListener('submit', function(event) {
                                        event.preventDefault(); // Prevent default form submission

                                        var form = this;
                                        var formData = new FormData(form);

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
                                                                // Optionally redirect to the cart page or update the UI
                                                            });
                                                    }
                                                } else {
                                                    // Success, the product was added to the cart
                                                    alert(data.message);
                                                    // Optionally redirect to the cart page or update the UI
                                                }
                                            });
                                    });
                                </script>
                            @else
                                <span style="text-decoration:underline;">{{ __('messages.cartLogin') }}</span>
                            @endif

                        </div>

                    </div>
                </div>
            </div>
            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="description-tab" data-bs-toggle="tab" href="#description" role="tab"
                        aria-controls="description" aria-selected="false">{{ __('messages.ProductDescription') }}</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn active" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab"
                        aria-controls="reviews" aria-selected="true">{{ __('messages.CustomerReviews') }}</a>
                </li>
            </ul>
            <div class="tab-content" id="productTabContent">
                <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <p>{{ $product->description }}</p>
                </div>
                <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <div class="woocommerce-Reviews">
                        <div class="th-comments-wrap">
                            <ul class="comment-list" style="max-height: 400px; overflow-y: auto;">
                                @foreach ($allreviews as $review)
                                    {{--  @if ($index < 4)  --}}
                                    <li class="review th-comment-item">
                                        <div class="th-post-comment">
                                            <div class="comment-avater">
                                                <img src="{{ $review->user->image ? asset('storage/profile_images/' . $review->user->image) : asset('assets/img/team/team_1_1.jpg') }}"
                                                    alt="Product Image">
                                            </div>
                                            <div class="comment-content">
                                                <h4 class="name">{{ $review->user->name }}</h4>
                                                <span class="commented-on"><i
                                                        class="far fa-clock"></i>{{ $review->created_at }}</span>
                                                <span class="list-rating" style="color : #E2B93B;">
                                                    @php
                                                        $wholeStars = floor($review->rating);
                                                        $fraction = $review->rating - $wholeStars;
                                                        $halfStar = $review->rating - $wholeStars >= 0.5;
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

                                                    <span>({{ number_format($review->rating, 1) }})</span>
                                                </span>
                                                <p class="text">{{ $review->review }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    {{--  @endif  --}}
                                @endforeach
                            </ul>
                        </div>
                        <!-- Comment Form -->
                        @if ($userId)
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif


                            <div class="th-comment-form">
                                <div class="form-title">
                                    <h3 class="blog-inner-title">{{ __('messages.AddReview') }}
                                    </h3>
                                </div>
                                <form action="{{ route('reviews.product') }}" method="POST">
                                    @csrf <!-- Add CSRF token for security -->
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="store_id" value="{{ $product->store_id }}">


                                    <div class="row">
                                        <div class="form-group rating-select d-flex align-items-center">
                                            <label>{{ __('messages.YourRating') }}
                                            </label>
                                            <p class="stars">
                                                <span>
                                                    <a class="star-1" href="#" data-rating="1">1</a>
                                                    <a class="star-2" href="#" data-rating="2">2</a>
                                                    <a class="star-3" href="#" data-rating="3">3</a>
                                                    <a class="star-4" href="#" data-rating="4">4</a>
                                                    <a class="star-5" href="#" data-rating="5">5</a>
                                                </span>
                                            </p>
                                            <input type="hidden" name="rating" id="rating" value="5">
                                            <!-- Hidden field for rating -->
                                        </div>
                                        <div class="col-12 form-group">
                                            <textarea name="review" placeholder="Write a Message" class="form-control" required></textarea>
                                            <i class="text-title far fa-pencil-alt"></i>
                                        </div>
                                        <div class="col-12 form-group mb-0">
                                            <button type="submit" class="th-btn">{{ __('messages.PostReview') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <script>
                                // JavaScript to handle the rating click and store the value in the hidden field
                                document.querySelectorAll('.stars a').forEach(function(star) {
                                    star.addEventListener('click', function(event) {
                                        event.preventDefault();
                                        const rating = this.getAttribute('data-rating');
                                        document.getElementById('rating').value = rating;
                                    });
                                });
                            </script>
                        @endif
                    </div>
                </div>
            </div>

            <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      Related Product
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      ==============================-->
            <div class="space-extra-top mb-30">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-auto">
                        <h2 class="sec-title text-center">{{ __('messages.RelatedProducts') }}
                        </h2>
                    </div>
                    <div class="col-md d-none d-sm-block">
                        <hr class="title-line">
                    </div>
                    <div class="col-md-auto d-none d-md-block">
                        <div class="sec-btn">
                            <div class="icon-box">
                                <button data-slider-prev="#productSlider1" class="slider-arrow default"><i
                                        class="fa-solid fa-arrow-left"></i></button>
                                <button data-slider-next="#productSlider1" class="slider-arrow default"><i
                                        class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper th-slider has-shadow" id="productSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        @foreach ($relatedProducts as $Rproduct)
                            <div class="swiper-slide">

                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="{{ $Rproduct->image ? asset('storage/product_images/' . $Rproduct->image->name) : asset('assets/img/product/product_1_2.png') }}"
                                            alt="{{ $Rproduct->name }} pic">
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i
                                                    class="far fa-eye"></i></a>

                                            @if (Auth::check())
                                                <!-- If the user is logged in, show the Add to Cart button -->
                                                <form id="add-to-cart-form-{{ $Rproduct->id }}" class="add-to-cart-form">
                                                    @csrf
                                                    <!-- This directive outputs a hidden input containing the CSRF token -->
                                                    <input type="hidden" name="product_id" value="{{ $Rproduct->id }}">
                                                    <input type="hidden" name="store_id"
                                                        value="{{ $Rproduct->store_id }}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <button type="button" class="icon-btn add-to-cart-btn"
                                                        data-product-id="{{ $Rproduct->id }}"
                                                        data-store-id="{{ $Rproduct->store_id }}">
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
                                        <div class="list-rating" style="color : #E2B93B;">
                                            @php
                                                $wholeStars = floor($Rproduct->rating);
                                                $halfStar = $Rproduct->rating - $wholeStars >= 0.5;
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

                                            <span>({{ number_format($Rproduct->rating, 1) }})</span>
                                        </div>
                                        <h3 class="product-title"><a
                                                href="{{ route('product', ['productId' => $Rproduct->id]) }}">{{ $Rproduct->name }}</a>
                                        </h3>
                                        <span class="price">{{ __('messages.JD') }}
                                            {{ $Rproduct->price }}</span>
                                    </div>
                                </div>



                                {{--  <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="{{ $Rproduct->image ? asset('storage/product_images/' . $Rproduct->image->name) : asset('assets/img/product/product_1_2.png') }}"
                                            alt="{{ $Rproduct->name }} pic">
                                        <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content"><i
                                                    class="far fa-eye"></i></a>
                                            <a href="cart.html" class="icon-btn"><i
                                                    class="fa-solid fa-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <!-- Star Rating -->
                                        <div class="list-rating" style="color : #E2B93B;">
                                            @php
                                                $wholeStars = floor($Rproduct->rating); // Number of filled stars
                                                $fraction = $Rproduct->rating - $wholeStars; // Fractional part of the rating
                                                $halfStar = $Rproduct->rating - $wholeStars >= 0.5; // Whether to show a half star
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

                                            <span>({{ number_format($Rproduct->rating, 1) }})</span>
                                            <!-- Display the exact rating -->
                                        </div>
                                        <h3 class="product-title"><a
                                                href="{{ route('product', ['productId' => $Rproduct->id]) }}">{{ $Rproduct->name }}</a>
                                        </h3>
                                        <span class="price">JD {{ $Rproduct->price }}</span>
                                    </div>
                                </div>  --}}
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
                </div>
                <div class="d-block d-md-none mt-40 text-center">
                    <div class="icon-box">
                        <button data-slider-prev="#productSlider1" class="slider-arrow default"><i
                                class="far fa-arrow-left"></i></button>
                        <button data-slider-next="#productSlider1" class="slider-arrow default"><i
                                class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .product-img {
            width: 300px;
            /* Set the width of the container */
            height: 300px;
            /* Set the height of the container */
            overflow: hidden;
            /* Hide overflow if image is too large */
            position: relative;
            /* Ensure that content inside it is positioned relative to it */
        }

        .product-img img {
            width: 100%;
            /* Make sure the image scales to the width of the container */
            height: 100%;
            /* Make sure the image scales to the height of the container */
            object-fit: contain;
            /* Cover the entire area of the container without distortion */
            display: block;
            /* Removes the default inline spacing for images */
        }
    </style>
@endsection
