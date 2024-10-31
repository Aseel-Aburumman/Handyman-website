@extends('layouts.inside')

@section('content')
    <!--==============================
                                                                                                                                                                            Breadcumb
                                                                                                                                                                        ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">

        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ __('messages.BookAGig') }}
                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('messages.Home') }}
                        </a></li>
                    <li>{{ __('messages.BookAGig') }}
                    </li>

                    <li>{{ __('messages.Step') }}
                        1</li>
                </ul>
            </div>
        </div>
    </div>



    <section class="overflow-hidden space" id="service-sec">
        <div class="shape-mockup spin" data-top="0%" data-right="0%"><img src="{{ asset('assets/img/shape/lines_1.png') }}"
                alt="shape"></div>
        <div class="container">
            <div class="step-one-container">
                <div class="progress-bar-container">
                    <div class="progress-bar-step active">1</div>
                    <div class="progress-bar-line"></div>
                    <div class="progress-bar-step">2</div>
                    <div class="progress-bar-line"></div>
                    <div class="progress-bar-step">3</div>
                    <div class="progress-bar-line"></div>
                    <div class="progress-bar-step">4</div>
                </div>

                <div class="service-info">
                    <span class="sub-title"><img src="{{ asset('assets/img/theme-img/title_icon.svg') }}"
                            alt="Icon">{{ $category->name }}</span>
                    <h4>{{ $service->name }}</h4>
                    <p class="explanation-text">{{ __('messages.BookAGigP1') }}


                    </p>
                </div>

                <!-- Task Form -->
                <div class="task-form">
                    <form action="{{ route('gig.storeStep1') }}" method="POST">
                        @csrf


                        <!-- Add hidden input to pass the category_id -->
                        <input type="hidden" name="category_id" value="{{ $category->id }}">
                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                        <!-- Car Requirement -->


                        <!-- Task Location -->
                        <div class="form-group">
                            <label for="location">{{ __('messages.TaskLocation') }}
                            </label>
                            <input type="text" name="location" id="location" class="form-control" required>
                        </div>

                        <!-- End Address (for moving category) -->
                        @if ($category->id == 3)
                            <div class="form-group">
                                <label for="end_address">{{ __('messages.EndAddress') }}
                                </label>
                                <input type="text" name="end_address" id="end_address" class="form-control">
                            </div>
                        @endif

                        <!-- Estimated Time -->
                        <div class="form-group">
                            <label for="estimated_time">{{ __('messages.EstimatedTime') }}</label>
                            <select name="estimated_time" id="estimated_time" class="form-control">
                                <option value="1">{{ __('messages.Small') }}
                                </option>
                                <option value="2">{{ __('messages.Medium') }}
                                </option>
                                <option value="4">{{ __('messages.Large') }}
                                </option>
                            </select>
                        </div>

                        <!-- Task title -->
                        <div class="form-group">
                            <label for="title">{{ __('messages.Tiltetask') }}
                            </label>
                            <textarea name="title" id="title" class="form-control" required></textarea>
                        </div>

                        <!-- Task Description -->
                        <div class="form-group">
                            <label for="description">{{ __('messages.Detailstask') }}
                            </label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('messages.ContinueStep') }}
                            2</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
