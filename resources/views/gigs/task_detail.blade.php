@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ __('messages.AssignedTaskDetail') }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('messages.Home') }}</a></li>
                    <li><a href="{{ route('customer.Home') }}">{{ __('messages.Dashboard') }}</a></li>
                    <li>{{ __('messages.TaskDetail') }}</li>
                </ul>
            </div>
        </div>
    </div>

    <section class=" overflow-hidden space" id="service-sec">
        @if (session('success'))
            <div class="container alert alert-success">
                {!! session('success') !!}
            </div>
        @endif
        <div class="container">
            <div class="row">
                <!-- Left Side: Gig Details -->
                <div class="col-md-6">
                    <div class=" task-gig-card ">
                        <div class="gig-details">
                            <h3>{{ __('messages.TaskDetail') }}</h3>
                            <div class="d-flex justify-content-between">
                                <h2 class="gig-title">{{ $gig->title }}</h2>
                                <p class="gig-total">{{ __('messages.Budget') }}: {{ __('messages.JD') }} {{ $gig->total }}/{{ __('messages.perhour') }}</p>
                            </div>
                            <p class="gig-description">
                                {{ \Illuminate\Support\Str::limit($gig->description, 150) }}</p>
                            <p class="gig-location"><i class="fas fa-map-marker-alt"></i>
                                {{ $gig->location }}</p>
                            <p class="gig-time"><i class="far fa-calendar-alt"></i>
                                {{ $gig->task_date }} {{ $gig->task_time }}</p>
                        </div>

                    </div>

                    <!-- Progress Bar Section -->
                    <div class="progress-bar-section mt-4">

                        @if ($gig->status_id == 9)
                            <h3>{{ __('messages.TaskIsDone') }}!</h3>
                            <p>{{ __('messages.gigP1') }}  </p>

                            <form class="mt-3" action="{{ route('customer.Home') }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-info w-100 ">{{ __('messages.gigP2') }}</button>
                            </form>
                            @if ($reviews->isEmpty())
                                <div class="th-comment-form">
                                    <div class="form-title">
                                        <h3 class="blog-inner-title">{{ __('messages.AddReview') }}</h3>
                                    </div>
                                    <form action="{{ route('reviews.clienttohandyman') }}" method="POST">
                                        @csrf <!-- Add CSRF token for security -->
                                        <input type="hidden" name="gig_id" value="{{ $gig->id }}">
                                        <input type="hidden" name="handyman_id" value="{{ $gig->handyman_id }}">


                                        <div class="row">
                                            <div class="form-group rating-select d-flex align-items-center">
                                                <label>{{ __('messages.YourRating') }}</label>
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
                                                <!-- Hidden field for rating, default is 5 -->
                                                <!-- Hidden field for rating -->
                                            </div>
                                            <div class="col-12 form-group">
                                                <textarea name="review" placeholder="Write a Message" class="form-control" required></textarea>
                                                <i class="text-title far fa-solid fa-pencil-alt"></i>
                                            </div>
                                            <div class="col-12 form-group mb-0">
                                                <button type="submit" class="th-btn">{{ __('messages.PostReview') }} </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <script>
                                    // JavaScript to handle star rating clicks and update the hidden input
                                    document.querySelectorAll('.stars a').forEach(function(star) {
                                        star.addEventListener('click', function(e) {
                                            e.preventDefault();
                                            var ratingValue = this.getAttribute('data-rating');
                                            document.getElementById('rating').value = ratingValue;

                                            // Remove 'selected' class from all stars
                                            document.querySelectorAll('.stars a').forEach(function(star) {
                                                star.classList.remove('selected');
                                            });

                                            // Add 'selected' class to the clicked star and all previous stars
                                            for (var i = 1; i <= ratingValue; i++) {
                                                document.querySelector('.star-' + i).classList.add('selected');
                                            }
                                        });
                                    });
                                </script>
                            @else
                                @foreach ($reviews as $review)
                                    <div class=" task-gig-card  mt-3">
                                        <div class="w-100 ">
                                            <!-- Ensure handyman user exists before trying to access it -->
                                            @if ($review->handyman && $review->handyman->user)
                                                <div style="display:flex; justify-content:space-between;">
                                                    <h4 class="name">{{ $review->handyman->user->name }}</h4>
                                                    <div class="list-rating" style="color: #E2B93B;">
                                                        @php
                                                            $wholeStars = floor($review->rating);
                                                            $fraction = $review->rating - $wholeStars;
                                                            $halfStar = $fraction >= 0.5;
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
                                                    </div>
                                                </div>
                                            @endif
                                            <p class="text text-start">{{ __('messages.Writenby') }} :{{ $review->user->name }}</p>

                                            <p class="text-start"><i class="far fa-clock"></i>
                                                {{ $review->created_at->format('Y-m-d H:i:s') }}</p>

                                            <p class="text text-start">{{ $review->review }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        @elseif ($gig->status_id == 28)
                            <h3>{{ __('messages.gigP3') }}</h3>
                            <p>{{ __('messages.gigP1') }} </p>

                            <p>{{ __('messages.gigP4') }}<a
                                    href="{{ route('chat', ['receiverId' => $gig->handyman->user->id]) }}">{{ __('messages.gigP5') }}</a>.</p>

                            <form action="{{ route('report.gig.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="handyman_id" value="{{ $gig->handyman->id }}">
                                <input type="hidden" name="gig_id" value="{{ $gig->id }}">
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to report a problem?');">{{ __('messages.gigP6') }}</button>
                            </form>
                        @elseif (in_array($gig->status_id, [7, 8, 11, 24]))
                            <h4>{{ __('messages.TaskProgress') }}</h4>
                            <ul class="progress-bar">
                                <li
                                    class="{{ $gig->status_id >= 7 ? 'completed' : ($gig->status_id == 7 ? 'active' : '') }}">
                                    1
                                </li>
                                <li
                                    class="{{ $gig->status_id >= 8 ? 'completed' : ($gig->status_id == 8 ? 'active' : '') }}">
                                    2
                                </li>

                                <li
                                    class="{{ $gig->status_id >= 24 ? 'completed' : ($gig->status_id == 24 ? 'active' : '') }}">
                                    3
                                </li>
                            </ul>

                            <!-- Step Titles -->
                            <div class="progress-step-title">
                                <span class="step-title">{{ __('messages.FirstVisit') }} </span>
                                <span class="step-title">{{ __('messages.WorkinProgress') }}</span>
                                <span class="step-title">{{ __('messages.Payment') }}</span>
                            </div>

                            <!-- Progress Content -->
                            <div class="step-content mt-3">
                                @if ($gig->status_id == 7)
                                    <div class="progress-gig-card">
                                        <p>{{ __('messages.gigP7') }}</p>

                                        <form
                                            action="{{ route('gig.updateStatus', ['gigId' => $gig->id, 'status' => 8]) }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit" class="custom-btn btn btn-primary"
                                                onclick="return confirm('Are you sure the first checkup is complete?');">{{ __('messages.MarkDone') }}</button>
                                        </form>
                                    </div>
                                @elseif ($gig->status_id == 8)
                                    <div class="progress-gig-card">

                                        <p>{{ __('messages.Home') }}The work is currently in progress. <a
                                                href="{{ route('chat', ['receiverId' => $gig->handyman->user->id]) }}">{{ __('messages.Home') }}Chat
                                                with
                                                your
                                                handyman</a>.</p>

                                        <form action="{{ route('report.gig.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="handyman_id" value="{{ $gig->handyman->id }}">
                                            <input type="hidden" name="gig_id" value="{{ $gig->id }}">
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to report a problem?');">{{ __('messages.Home') }}Report
                                                a
                                                Problem</button>
                                        </form>
                                    </div>
                                @elseif ($gig->status_id == 11)
                                    <div class="progress-gig-card">

                                        <p>{{ __('messages.Home') }}Your report has been submited , customer service will reach you as soon as
                                            possible
                                            <a href="{{ route('chat', ['receiverId' => $gig->handyman->user->id]) }}">{{ __('messages.Home') }}Chat
                                                with
                                                your
                                                handyman</a>.
                                        </p>
                                    </div>
                                @elseif ($gig->status_id == 24)
                                    @if ($all_total)
                                        <p>{{ __('messages.Home') }}The task is ready for payment. Review and proceed with payments.</p>



                                        @if ($paymentRepotr)
                                            <table class="cart_table mb-20">
                                                <thead>
                                                    <tr>
                                                        <th class="cart-col-productname">{{ __('messages.Home') }}Payment ID</th>
                                                        <th class="cart-col-quantity">{{ __('messages.Home') }}Amount</th>
                                                        <th class="cart-col-total">{{ __('messages.Home') }}Description</th>
                                                        <th class="cart-col-total">{{ __('messages.Home') }}Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($paymentRepotr as $payment)
                                                        @if ($payment->status_id == 25)
                                                            <tr class="cart_item">
                                                                <td>{{ $payment->id }}</td>
                                                                <td>{{ $payment->amount }}</td>
                                                                <td>{{ __('messages.Home') }}JD {{ $payment->description }}</td>
                                                                <td>
                                                                    <form
                                                                        action="{{ route('gig.update.repot.paymet', ['paymentId' => $payment->id]) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <button type="submit"
                                                                            class="custom-btn btn btn-primary"
                                                                            onclick="return confirm('Are you sure this payment request is false?');">{{ __('messages.Home') }}Cancel</button>
                                                                    </form>
                                                                </td>

                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                </tbody>
                                                <tfoot class="checkout-ordertable">
                                                    <tr class="cart-subtotal">
                                                        <th>{{ __('messages.Home') }}Subtotal</th>
                                                        <td colspan="2">{{ __('messages.Home') }}JD {{ $subtotal }}</td>
                                                    </tr>
                                                    <tr class="woocommerce-shipping-totals shipping">
                                                        <th>{{ __('messages.Home') }}Trust and Support Fee (16%):</th>
                                                        <td colspan="2">16%</td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>{{ __('messages.Home') }}Total</th>
                                                        <td colspan="2"><strong>{{ __('messages.Home') }}JD
                                                                {{ number_format($subtotal * 0.16 + $subtotal, 2) }}</strong>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        @endif



                                        @if ($all_total)
                                            <h4>{{ __('messages.Home') }}Pay now by creadit card</h4>
                                            <div id="card-payment-fields">
                                                <div class="form-group">
                                                    <input type="text" id="card_number" name="card_number"
                                                        class="form-control" placeholder="1234 5678 9123 4567">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" id="card_expiry" name="card_expiry"
                                                        class="form-control" placeholder="MM/YY">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" id="card_cvc" name="card_cvc"
                                                        class="form-control" placeholder="123">
                                                </div>
                                            </div>

                                            <div class="form-row place-order">
                                                <form action="{{ route('payment.process', ['gigId' => $gig->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <input type="hidden" name="all_total" value="{{ $all_total }}">
                                                    <button type="submit" class="th-btn"
                                                        formaction="{{ route('payment.process', ['gigId' => $gig->id]) }}">{{ __('messages.Home') }}Pay
                                                        Now</button>
                                                </form>

                                            </div>
                                        @endif
                                    @else
                                        <p>{{ __('messages.Home') }}There is no more payments requst , is the task done ?</p>
                                        <form
                                            action="{{ route('gig.updateStatus', ['gigId' => $gig->id, 'status' => 9]) }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit" class="custom-btn btn btn-primary"
                                                onclick="return confirm('Are you ready to close this task?');">{{ __('messages.Home') }}Mark
                                                as
                                                Done</button>
                                        </form>
                                    @endif

                                @endif
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Right Side: Handyman Proposal -->
                <div class="col-md-6">
                    <div class=" handyman-card filter-step2-handyman-card">
                        <div class="handyman-profile-gig-section">
                            <div class="handyman-pic-section-gig">
                                <div class="handyman-thepic-gig-view-section">
                                    @if ($gig->handyman->user && $gig->handyman->user->image)
                                        <img src="{{ asset('storage/profile_images/' . $gig->handyman->user->image) }}"
                                            alt="{{ $gig->handyman->user->name }}" class="handyman-profile-img">
                                    @else
                                        <img src="{{ asset('assets/img/team/team_1_1.jpg') }}"
                                            alt="{{ $gig->handyman->user->name }}" class="handyman-profile-img">
                                    @endif
                                </div>
                                <div class="handyman-details-gig">
                                    <div class="d-flex justify-content-between ">
                                        <h4>{{ $gig->handyman->user->name }}</h4>

                                        <div class=" handyman-tasks">
                                            <span><i class="fa-solid fa-check-double"></i> {{ __('messages.Home') }}Done
                                                {{ $gig->handyman->gigs_count }} {{ __('messages.Home') }}tasks</span>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between ">
                                        <div class="handyman-rating">
                                            <span class="rating-star">★</span>
                                            <span>{{ $gig->handyman->user->rating }}
                                                ({{ $gig->handyman->user->reviews_count }} {{ __('messages.Home') }}reviews)
                                            </span>
                                        </div>
                                        <div class="handyman-price mt-1">
                                            {{ __('messages.Home') }}JD{{ number_format($gig->price_per_hour, 2) }}/{{ __('messages.Home') }}hr
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <form class="mt-3"
                                            action="{{ route('chat', ['receiverId' => $gig->handyman->user->id]) }}"
                                            method="GET">
                                            @csrf
                                            <button type="submit" class="btn btn-info w-100 ">{{ __('messages.Home') }}Chat and Figure what
                                                next!</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="handyman-description-gig">
                                <div class="handyman-description">
                                    <p class="mb-0">{{ __('messages.Home') }}Handyman Description:</p>
                                    <p class="mb-0">{{ Str::limit($gig->handyman->bio, 200) }}</p>
                                    <a href="{{ route('Onehandyman_clientVeiw', ['handymanId' => $gig->handyman->id]) }}"
                                        class="read-more-link">{{ __('messages.Home') }}Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>{{ __('messages.Home') }}Payments History</h3>
                    <table class="cart_table mb-20">
                        <thead>
                            <tr>
                                <th class="cart-col-productname">{{ __('messages.Home') }}Payment ID</th>
                                <th class="cart-col-total">{{ __('messages.Home') }}Description</th>
                                <th class="cart-col-quantity">{{ __('messages.Home') }}Amount</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="cart_item">
                                <td>{{ $gig->id }}</td>
                                <td>{{ __('messages.Home') }}The initated amount</td>
                                <td>{{ __('messages.Home') }}JD{{ number_format($gig->price * $gig->estimated_time) }}</td>

                            </tr>
                            @foreach ($paymentRepotr as $payment)
                                @if ($payment->status_id == 27)
                                    <tr class="cart_item">
                                        <td>{{ $payment->id }}</td>
                                        <td> {{ $payment->description }}</td>

                                        <td>{{ __('messages.Home') }}JD{{ $payment->amount }}</td>

                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                        <tfoot class="checkout-ordertable">

                            <tr class="order-total">
                                <th>{{ __('messages.Home') }}Total</th>
                                <td colspan="2"><strong>{{ __('messages.Home') }}JD
                                        {{ $gig->total }}</strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>


                    <p>{{ __('messages.Home') }}is there any payment are not recorded ?</p>

                    <button class="custom-btn btn-primary" id="addPaymentBtn">{{ __('messages.Home') }}Yes</button>

                    <!-- Hidden Form for Adding New Payment -->
                    <div id="newPaymentForm" style="display: none; margin-top: 20px;">
                        <form action="{{ route('payment.create') }}" method="POST">
                            @csrf
                            <input type="hidden" name="gig_id" value="{{ $gig->id }}">
                            <input type="hidden" name="handyman_id" value="{{ $gig->handyman_id }}">

                            <div class="form-group">
                                <label for="amount">{{ __('messages.Home') }}Amount</label>
                                <input type="number" name="amount" id="amount" class="form-control"
                                    placeholder="Enter Amount" required>
                            </div>
                            <div class="form-group">
                                <label for="description">{{ __('messages.Home') }}Description</label>
                                <input type="text" name="description" id="description" class="form-control"
                                    placeholder="Enter Description" required>
                            </div>
                            <input type="hidden" name="status_id" value="27">
                            <button type="submit" class="custom-btn btn btn-success">{{ __('messages.Home') }}Submit Payment</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('addPaymentBtn').addEventListener('click', function() {
            var form = document.getElementById('newPaymentForm');
            form.style.display = form.style.display === 'none' ? 'block' : 'none';
        });
    </script>

    <style>
        /* General container styling */


        .custom-btn {
            background-color: #F47629 !important;
            /* Danger - Red */
        }


        .progress-gig-card {
            display: flex;
            flex: 40%;
            flex-direction: column;
            background-color: #f8f9fa;
            padding: 20px;

            justify-content: space-between;
            border-radius: 10px;
            margin-bottom: 20px;
            align-items: center;
            height: 100%;
            /* max-width: 800px; */
            margin-left: auto;
            margin-right: auto;

        }

        /* Task Gig Card (Left Side) */
        .task-gig-card {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            height: auto;
        }

        /* Gig Details */
        .gig-details h3 {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .gig-details h2.gig-title {
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .gig-total {
            font-size: 16px;
            color: #ff6600;
            font-weight: 600;
        }

        .gig-description {
            font-size: 16px;
            color: #666;
        }

        .gig-location,
        .gig-time {
            font-size: 14px;
            color: #888;
            margin-bottom: 5px;
        }

        /* Progress Bar */
        .progress-bar-section {
            margin-top: 30px;
            text-align: center;
        }

        .progress-bar {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            list-style: none;
            padding: 0;
            margin: 0;
            position: relative;
            width: 100%;
            background-color: #E1E4E5;

        }

        .progress-bar li {
            background-color: #FFFFFF;
            color: black;
            padding: 10px;
            border-radius: 50%;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .progress-bar li.active {
            background-color: #ffc107;
            color: white;
        }

        .progress-bar li.completed {
            background-color: #F47629;
            color: white;
        }

        .progress-bar li.inactive {
            background-color: #ddd;
            color: #999;
        }

        /* Line between steps */
        .progress-bar::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 6px;
            background-color: #FFFFFF;
            z-index: 0;
            margin-left: 30px;
            margin-right: 30px;
        }

        .progress-bar li.completed~li::before {
            background-color: #28a745;
        }

        .progress-bar li.active~li::before {
            background-color: #ffc107;
        }

        /* Step Titles */
        .step-title {
            margin-top: 10px;
            font-size: 14px;
            font-weight: 600;
            color: #555;
        }

        .progress-step-title {
            display: flex;
            justify-content: space-between;
            margin-top: 5px;
        }

        .progress-step-title span {
            flex: 1;
            text-align: center;
        }

        /* Fix layout issue */
        .progress-bar li:first-child {
            margin-left: 0;
        }

        .progress-bar li:last-child {
            margin-right: 0;
        }

        /* Handyman Card (Right Side) */
        .handyman-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .handyman-card h3 {
            font-size: 22px;
            font-weight: 600;
            color: #333;
        }

        .handyman-card p {
            font-size: 16px;
            color: #666;
            margin-bottom: 10px;
        }

        .handyman-card strong {
            color: #333;
        }

        .handyman-card .read-more-link {
            color: #007bff;
            font-size: 14px;
            text-decoration: underline;
        }

        .handyman-card .rating-star {
            color: #ffc107;
        }

        .handyman-card .handyman-price {
            font-size: 18px;
            color: #28a745;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Modal styling */
        .modal-header {
            background-color: #007bff;
            color: white;
        }

        .modal-footer .btn {
            margin-left: 10px;
        }

        /* Payment Section */
        .payment-info {
            font-size: 16px;
            margin-bottom: 15px;
        }

        .payment-info input {
            border: 1px solid #ccc;
            padding: 8px;
            width: 100%;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .payment-info .btn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .payment-info .btn:hover {
            background-color: #218838;
        }

        /* Buttons */
        button.btn {
            padding: 10px 15px;
            font-size: 14px;
            border-radius: 5px;
        }

        button.btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
        }

        button.btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        button.btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
            color: white;
        }

        button.btn-info:hover {
            background-color: #117a8b;
            border-color: #117a8b;
        }

        button.btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
        }

        button.btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .progress-bar {
                flex-direction: column;
                align-items: center;
            }

            .progress-bar li {
                width: 100px;
                height: 100px;
                margin-bottom: 15px;
            }

            .task-gig-card,
            .handyman-card {
                margin-bottom: 20px;
            }

            .container {
                padding: 15px;
            }
        }
    </style>
@endsection
