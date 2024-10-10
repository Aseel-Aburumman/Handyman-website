@extends('layouts.inside')

@section('content')
    <!--==============================
                                                                                                                                                                                                                        Breadcumb
                                                                                                                                                                                                                    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">

        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Book A Gig</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Book A Gig</li>

                    <li>Step 2</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="step-two-container">



                <div class="step2Form">

                    <!-- Filter Form -->
                    <!-- Filter Form -->
                    <form class="filter-step2-section" id="filterForm" method="GET"
                        action="{{ route('handymen.filterHandymen') }}">

                        <!-- Date Filter -->
                        <div class="filter-step2-form-group">
                            <label for="date">Date</label>
                            <div class="filter-step2-date-options">
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('today')">Today</button>
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('within_3_days')">Within 3 Days</button>
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('within_a_week')">Within A Week</button>
                                <!-- Choose Dates Button -->
                                <button class="filter-step2-date-btn" id="choose_dates_btn" type="button">Choose
                                    Dates</button>
                                <!-- Hidden input for date range -->
                                <input type="text" id="choose_dates_input" name="choose_dates" class="d-none">
                            </div>
                        </div>

                        <!-- Time of Day Filter -->
                        <div class="filter-step2-form-group">
                            <label>Time of day</label>
                            <div class="filter-step2-time-options">
                                <div class="filter-step2-checkbox-group">
                                    <input type="checkbox" id="morning" name="time_of_day[]" value="morning">
                                    <label for="morning">Morning (8am - 12pm)</label>
                                </div>
                                <div class="filter-step2-checkbox-group">
                                    <input type="checkbox" id="afternoon" name="time_of_day[]" value="afternoon">
                                    <label for="afternoon">Afternoon (12pm - 5pm)</label>
                                </div>
                                <div class="filter-step2-checkbox-group">
                                    <input type="checkbox" id="evening" name="time_of_day[]" value="evening">
                                    <label for="evening">Evening (5pm - 9:30pm)</label>
                                </div>
                            </div>
                        </div>

                        <!-- Price Filter -->
                        <div class="filter-step2-form-group">
                            <label for="price_range">Price</label>
                            <div class="filter-step2-price-range">
                                <input type="range" name="price_range" min="5" max="50" step="5"
                                    id="price_range" value="{{ old('price_range', 25) }}"
                                    oninput="document.getElementById('price_value').textContent = this.value">
                                <div class="filter-step2-price-values">
                                    <span>JD 5</span>
                                    <span id="price_value">{{ old('price_range', 25) }}</span>
                                    <span>JD 50+</span>
                                </div>
                            </div>
                        </div>

                        <!-- Rating Filter -->
                        <div class="filter-step2-form-group">
                            <label for="rating">Rating</label>
                            <select name="rating" id="rating">
                                <option value="">Select Rating</option>
                                <option value="1">1 Star & above</option>
                                <option value="2">2 Stars & above</option>
                                <option value="3">3 Stars & above</option>
                                <option value="4">4 Stars & above</option>
                                <option value="5">5 Stars</option>
                            </select>
                        </div>

                        <!-- Gig Count Filter -->
                        <div class="filter-step2-form-group">
                            <label for="gig_count">Number of Gigs Completed</label>
                            <select name="gig_count" id="gig_count">
                                <option value="">Select Number of Gigs</option>
                                <option value="1">1 Gig & above</option>
                                <option value="5">5 Gigs & above</option>
                                <option value="10">10 Gigs & above</option>
                                <option value="20">20 Gigs & above</option>
                            </select>
                        </div>

                        <!-- Skill Filter -->
                        <div class="filter-step2-form-group">
                            <label for="skills">Select Skills</label>
                            <div class="filter-step2-skill-options">
                                @foreach ($skills as $skill)
                                    <div class="filter-step2-checkbox-group">
                                        <input type="checkbox" id="skill_{{ $skill->id }}" name="skills[]"
                                            value="{{ $skill->id }}">
                                        <label for="skill_{{ $skill->id }}">{{ $skill->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Apply Filters Button -->
                        <button type="submit" class="btn btn-primary">Apply Filters</button>


                        <a href="{{ route('handymen.index') }}" class="w-100 mt-2 th-btn ">Reset <i
                                class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></a>
                    </form>

                    <script>
                        // Date filter setting and form submission
                        function setDateFilter(filterValue) {
                            document.getElementById('date_filter').value = filterValue;
                        }

                        // Initialize Flatpickr for the 'Choose Dates' input
                        var datePicker = flatpickr("#choose_dates_input", {
                            mode: "range",
                            dateFormat: "Y-m-d",
                            minDate: "today",
                            onChange: function(selectedDates, dateStr) {
                                document.getElementById('choose_dates_input').classList.remove('d-none');
                            }
                        });

                        document.getElementById('choose_dates_btn').addEventListener('click', function() {
                            datePicker.open();
                        });
                    </script>




                    <!-- Handyman List -->
                    <div class="handyman-list">
                        <form action="{{ route('gig.storeStep2') }}" method="POST">
                            @csrf


                            <!-- Handymen Loop -->
                            @foreach ($handymen as $handyman)
                                <div class="handyman-card filter-step2-handyman-card">
                                    <div class="handyman-profile-section">
                                        <div class="handyman-pic-section">
                                            <div class="handyman-thepic-section">
                                                @if ($handyman->user && $handyman->user->image)
                                                    <img src="{{ asset('storage/profile_images/' . $handyman->user->image) }}"
                                                        alt="{{ $handyman->user->name }}" class="handyman-profile-img">
                                                @else
                                                    <img src="{{ asset('assets/img/team/team_1_1.jpg') }}"
                                                        alt="{{ $handyman->user->name }}" class="handyman-profile-img">
                                                @endif
                                            </div>

                                            <div class="select-tasker-section">
                                                <button type="submit" name="selected_tasker"
                                                    value="{{ $handyman->id }}"
                                                    class="btn btn-primary select-tasker-btn">
                                                    Select & Continue
                                                </button>
                                                <p class="chat-info">You can chat with your Tasker, adjust task details, or
                                                    change task
                                                    time after booking.</p>
                                            </div>
                                        </div>

                                        <div class="handyman-details">
                                            <div class="handyman-detailsData-section">
                                                <div>
                                                    <h3>{{ $handyman->user->name }}</h3>
                                                    <div class="handyman-rating">
                                                        <span class="rating-star">★</span>
                                                        <span>{{ $handyman->user->rating }}
                                                            ({{ $handyman->reviews_count }}
                                                            reviews)
                                                        </span>
                                                    </div>
                                                    <div class="handyman-tasks">
                                                        <span>
                                                            <i class="fa-solid fa-check-double"></i> Done
                                                            task
                                                        </span>
                                                    </div>
                                                    <div class="handyman-tasks">
                                                        <span> <i class="fa-solid fa-clipboard-check"></i>
                                                            {{ $handyman->gigs_count }} Successful tasks overall
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="handyman-price-section">
                                                    <p class="handyman-price">
                                                        JD{{ number_format($handyman->price_per_hour, 2) }}/hr</p>
                                                </div>
                                            </div>

                                            <div class="handyman-description">
                                                <h4>How I can help:</h4>
                                                <p>{{ Str::limit($handyman->bio, 200) }}</p>
                                                <a href="{{ route('Onehandyman_clientVeiw', ['handymanId' => $handyman->id]) }}"
                                                    class="read-more-link">Read More</a>
                                            </div>

                                            <div class="handyman-review">
                                                @if ($handyman->latest_review)
                                                    <div class="review-author">
                                                        <img src="{{ asset('storage/profile_images/' . $handyman->latest_review->user->image) }}"
                                                            alt="Reviewer" class="reviewer-img">
                                                    </div>
                                                    <div class="reviewer-detailsText">
                                                        <p class="reviewer-name">
                                                            {{ $handyman->latest_review->user->name }}
                                                        </p>
                                                        <p class="review-text">
                                                            {{ Str::limit($handyman->latest_review->review, 100) }}</p>
                                                    </div>
                                                    <div class="reviewer-details">
                                                        <p class="review-date">{{ $handyman->latest_review->created_at }}
                                                        </p>
                                                    </div>
                                                @else
                                                    <p>No reviews yet.</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




    {{--  <script>
        function applyFilter(filterValue) {
            document.getElementById('date_filter').value = filterValue;
            document.getElementById('filterForm').submit();
        }

        // Date picker initialization
        var datePicker = flatpickr("#choose_dates_input", {
            mode: "range",
            dateFormat: "Y-m-d",
            minDate: "today",
            onChange: function(selectedDates, dateStr) {
                document.getElementById('choose_dates_input').classList.remove('d-none');
            },
            onClose: function() {
                document.getElementById('filterForm').submit();
            }
        });

        document.getElementById('choose_dates_btn').addEventListener('click', function() {
            datePicker.open();
        });

        document.querySelectorAll('input[name="time_of_day[]"]').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                document.getElementById('filterForm').submit();
            });
        });

        document.getElementById('price_range').addEventListener('change', function() {
            document.getElementById('filterForm').submit();
        });

        // Automatically submit the form when rating is selected
        document.getElementById('rating').addEventListener('change', function() {
            document.getElementById('filterForm').submit();
        });


        document.getElementById('gig_count').addEventListener('change', function() {
            document.getElementById('filterForm').submit();
        });
    </script>  --}}
@endsection
