@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ $handyman->user->name }} {{ __('messages.Profile') }}
                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('messages.Home') }}
                        </a></li>
                    <li><a href="{{ route('handymen.index') }}">{{ __('messages.taskerBtn') }}
                        </a></li>
                    <li>{{ __('messages.HandymanDetail') }}
                    </li>
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

            <div class="row align-items-center">
                <div class="col-xl-6 mb-35 mb-xl-0">
                    <div class="img-box6">
                        <div class="img1">

                            <div class="containerStore">

                                <img src="{{ asset('assets/img/normal/about_4.png') }}" alt="Black Rectangle"
                                    class="black-rectangle">
                                @if ($handyman->user && $handyman->user->image)
                                    <img src="{{ asset('storage/profile_images/' . $handyman->user->image) }}"
                                        alt="{{ $handyman->user->name }}" class="red-rectangle">
                                @else
                                    <img src="{{ asset('assets/img/team/team_1_1.jpg') }}"
                                        alt="{{ $handyman->user->name }}" class="red-rectangle">
                                @endif

                            </div>

                        </div>
                        <div class="year-box">
                            <div class="box-number box-numberRating ">{{ $handyman->user->rating }}/5</div>
                            <p class="box-text">{{ __('messages.Rating') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 text-center text-xl-start">
                    <div class="pe-xxl-5">
                        <div class="title-area mb-37">
                            <span class="sub-title"><span class="line"></span>

                                <i class="fa-solid fa-bolt"></i>
                                {{ $handyman->experience }} {{ __('messages.yearexperince') }}
                            </span>
                            <h2 class="sec-title">{{ $handyman->user->name }}</h2>
                            <p class="sec-text">{{ $handyman->bio }}</p>
                        </div>
                        <div class="checklist list-one-column fw-regular">
                            <ul>
                                <li>{{ __('messages.TotalReviews') }}
                                    : {{ $reviewCount }}</li>
                                <li>{{ __('messages.TotalGigs') }}
                                    : {{ $gigCount }}</li>



                                {{--  <li>Total Sales: {{ $totalSales }}</li>  --}}

                            </ul>
                        </div>

                    </div>
                </div>
            </div>


            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn" id="description-tab" data-bs-toggle="tab" href="#description" role="tab"
                        aria-controls="description" aria-selected="false">{{ __('messages.MySkills') }}
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link th-btn active" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab"
                        aria-controls="reviews" aria-selected="true">{{ __('messages.MyReviews') }}
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="productTabContent">
                <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                    {{--  <p>{{ $handyman->bio }}</p>  --}}
                    <div class="woocommerce-Reviews">

                        <div class="th-comments-wrap">

                            <ul class="comment-list" style="max-height: 400px; overflow-y: auto;">
                                @foreach ($handyman->skillCertificates as $certificate)
                                    <li class="review th-comment-item">
                                        <div class="th-post-comment">
                                            <i class="w-25 fa-solid fa-toolbox fa-2xl"
                                                style="color: #f47629; align-self: center;
    justify-self: center;
    text-align: center;
    font-size: 5rem;"></i>
                                            <div class="mt-1 w-75 comment-content">
                                                <!-- Skill Name and Description -->
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="name">{{ $certificate->skill->name }}</h4>
                                                    @if ($certificate->status_id == 3)
                                                        <button
                                                            class="statusBtn1 custom-btn-info">{{ $certificate->status->name }}</button>
                                                    @elseif($certificate->status_id == 2)
                                                        <button
                                                            class="statusBtn1 custom-btn-warning">{{ $certificate->status->name }}</button>
                                                    @elseif($certificate->status_id == 1)
                                                        <button
                                                            class="statusBtn1 custom-btn-success">{{ $certificate->status->name }}</button>
                                                    @endif
                                                </div>
                                                <p><strong>{{ __('messages.Description') }}
                                                        : </strong>{{ $certificate->skill->description }}</p>


                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
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


                    </div>
                </div>
            </div>



        </div>
    </section>
@endsection
