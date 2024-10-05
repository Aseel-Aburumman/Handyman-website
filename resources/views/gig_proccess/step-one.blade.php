@extends('layouts.inside')

@section('content')
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
                    <p class="explanation-text">
                        Tell us about your task. We use these details to show Taskers in your area who fit your needs.
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
                        {{--  <div class="form-group">
                            <label for="car_req">Does the task require a car/truck?</label>
                            <input type="checkbox" name="car_req" id="car_req">
                        </div>  --}}

                        <!-- Task Location -->
                        <div class="form-group">
                            <label for="location">Task Location</label>
                            <input type="text" name="location" id="location" class="form-control" required>
                        </div>

                        <!-- End Address (for moving category) -->
                        @if ($category->id == 3)
                            <div class="form-group">
                                <label for="end_address">End Address</label>
                                <input type="text" name="end_address" id="end_address" class="form-control">
                            </div>
                        @endif

                        <!-- Estimated Time -->
                        <div class="form-group">
                            <label for="estimated_time">Estimated Time</label>
                            <select name="estimated_time" id="estimated_time" class="form-control">
                                <option value="1">Small - Est. 1 hr</option>
                                <option value="2">Medium - Est. 2-3 hrs</option>
                                <option value="4">Large - Est. 4+ hrs</option>
                            </select>
                        </div>

                        <!-- Task Description -->
                        <div class="form-group">
                            <label for="description">Details about the task</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Continue to Step 2</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
