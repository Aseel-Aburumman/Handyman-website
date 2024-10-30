@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">

        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ __('messages.Allhandyman') }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('messages.Home') }}</a></li>
                    <li>{{ __('messages.Allhandyman') }}</li>

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
                            <label for="date">{{ __('messages.Date') }}</label>
                            <div class="filter-step2-date-options">
                                {{--  <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('today')">Today</button>
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('within_3_days')">Within 3 Days</button>
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('within_a_week')">Within A Week</button>  --}}

                                <!-- Date Filter Buttons -->
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('today', this)">{{ __('messages.Today') }}</button>
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('within_3_days', this)">{{ __('messages.3Days') }}</button>
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('within_a_week', this)">{{ __('messages.Week') }}</button>


                                <!-- Choose Dates Button -->
                                <button class="filter-step2-date-btn" id="choose_dates_btn"
                                    type="button">{{ __('messages.chooseDate') }}</button>
                                <!-- Hidden input for date range -->
                                <input type="text" id="choose_dates_input" name="choose_dates" class="d-none">
                                <!-- Hidden input to hold the selected date filter -->
                                <input type="hidden" name="date_filter" id="date_filter">
                            </div>
                        </div>

                        <!-- Time of Day Filter -->
                        {{--  <div class="filter-step2-form-group">
                            <label>{{ __('messages.TOD') }}</label>
                            <div class="filter-step2-time-options">
                                <div class="filter-step2-checkbox-group">
                                    <input type="checkbox" id="morning" name="time_of_day[]" value="morning">
                                    <label for="morning">{{ __('messages.PPR') }}Morning (8am - 12pm)</label>
                                </div>
                                <div class="filter-step2-checkbox-group">
                                    <input type="checkbox" id="afternoon" name="time_of_day[]" value="afternoon">
                                    <label for="afternoon">{{ __('messages.PPR') }}Afternoon (12pm - 5pm)</label>
                                </div>
                                <div class="filter-step2-checkbox-group">
                                    <input type="checkbox" id="evening" name="time_of_day[]" value="evening">
                                    <label for="evening">{{ __('messages.PPR') }}Evening (5pm - 9:30pm)</label>
                                </div>
                            </div>
                        </div>  --}}

                        <!-- Price Filter -->
                        <div class="filter-step2-form-group">
                            <label for="price_range">{{ __('messages.Price') }}</label>
                            <div class="filter-step2-price-range">
                                <input type="range" name="price_range" min="5" max="50" step="5"
                                    id="price_range" value="{{ old('price_range', 25) }}"
                                    oninput="document.getElementById('price_value').textContent = this.value">
                                <div class="filter-step2-price-values">
                                    <span>{{ __('messages.JD') }} 5</span>
                                    <span id="price_value">{{ old('price_range', 25) }}</span>
                                    <span>{{ __('messages.JD') }} 50+</span>
                                </div>
                            </div>
                        </div>

                        <!-- Rating Filter -->
                        <div class="filter-step2-form-group">
                            <label for="rating">{{ __('messages.Rating') }}</label>
                            <select name="rating" id="rating">
                                <option value="">{{ __('messages.SelectRating') }}</option>
                                <option value="1">1 {{ __('messages.StarAbove') }} </option>
                                <option value="2">2 {{ __('messages.StarsAbove') }}</option>
                                <option value="3">3 {{ __('messages.StarsAbove') }} </option>
                                <option value="4">4 {{ __('messages.StarsAbove') }} </option>
                                <option value="5">5 {{ __('messages.Stars') }} </option>
                            </select>
                        </div>

                        <!-- Gig Count Filter -->
                        <div class="filter-step2-form-group">
                            <label for="gig_count">{{ __('messages.NumberOfGigs') }}</label>
                            <select name="gig_count" id="gig_count">
                                <option value="">{{ __('messages.NumberOfGigs') }}</option>
                                <option value="1">1 {{ __('messages.Gigabove') }}</option>
                                <option value="5">5 {{ __('messages.Gigsabove') }}</option>
                                <option value="10">10 {{ __('messages.Gigsabove') }} </option>
                                <option value="20">20 {{ __('messages.Gigsabove') }} </option>
                            </select>
                        </div>

                        {{--  <!-- Skill Filter -->
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
                        </div>  --}}

                        <!-- Skill Filter with Toggle Button -->
                        <div class="filter-step2-form-group">
                            <div class="d-flex">
                                <label class="mt-1" for="skills">{{ __('messages.Skills') }}</label>
                                <button type="button" class="btn showSkillBtn btn-secondary" id="toggleSkillsBtn"
                                    onclick="toggleSkills()">{{ __('messages.ShowSkills') }}
                                </button>
                            </div>

                            <!-- Skills List (initially hidden) -->
                            <div id="skillsList" class="filter-step2-skill-options" style="display: none;">
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
                        <button type="submit"
                            class="mt-2 submitBtnFilter btn btn-primary">{{ __('messages.ApplyFilters') }}</button>


                        <a href="{{ route('handymen.index') }}" class="w-100 mt-2 th-btn ">{{ __('messages.Reset') }}
                            <i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></a>
                    </form>



                    <script>
                        // Set the value of the hidden date filter input when a button is clicked
                        {{--  function setDateFilter(filterValue) {
                            alert('Button clicked with value: ' + filterValue); // Debugging step
                            document.getElementById('date_filter').value = filterValue;
                        }  --}}


                        function setDateFilter(filterValue, buttonElement) {
                            // Set the hidden input field value
                            document.getElementById('date_filter').value = filterValue;

                            // Get all the date buttons
                            const dateButtons = document.querySelectorAll('.filter-step2-date-btn');

                            // Remove the active class from all date buttons
                            dateButtons.forEach(function(button) {
                                button.classList.remove('active-filter-btn');
                            });

                            // Add the active class to the clicked button
                            buttonElement.classList.add('active-filter-btn');
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

                        // Open the Flatpickr when the "Choose Dates" button is clicked
                        document.getElementById('choose_dates_btn').addEventListener('click', function() {
                            datePicker.open();
                        });

                        function toggleSkills() {
                            var skillsList = document.getElementById('skillsList');
                            var toggleButton = document.getElementById('toggleSkillsBtn');

                            // Toggle the visibility of the skills list
                            if (skillsList.style.display === 'none') {
                                skillsList.style.display = 'block';
                                toggleButton.textContent = 'Hide Skills'; // Change button text to "Hide"
                            } else {
                                skillsList.style.display = 'none';
                                toggleButton.textContent = 'Show Skills'; // Change button text to "Show"
                            }
                        }
                    </script>


                    <!-- Handyman List -->
                    <div class="handyman-list">


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
                                            <form class="w-100 mt-3"
                                                action="{{ route('chat', ['receiverId' => $handyman->user->id]) }}"
                                                method="GET">
                                                @csrf
                                                <button type="submit"
                                                    class="w-100 btn btn-primary select-tasker-btn ">{{ __('messages.ChatAnd') }}
                                                    !</button>
                                            </form>
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
                                                        <i
                                                            class="fa-solid fa-check-double"></i>{{ __('messages.Donetask') }}

                                                    </span>
                                                </div>
                                                <div class="handyman-tasks">
                                                    <span> <i class="fa-solid fa-clipboard-check"></i>
                                                        {{ $handyman->gigs_count }} {{ __('messages.Successfultasks') }}

                                                    </span>
                                                </div>
                                            </div>
                                            <div class="handyman-price-section">
                                                <p class="handyman-price">
                                                    {{ __('messages.JD') }}
                                                    {{ number_format($handyman->price_per_hour, 2) }}/{{ __('messages.hr') }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="handyman-description">
                                            <h4>{{ __('messages.Howhelp') }}
                                                :</h4>
                                            <p>{{ Str::limit($handyman->bio, 200) }}</p>
                                            <a href="{{ route('Onehandyman_clientVeiw', ['handymanId' => $handyman->id]) }}"
                                                class="read-more-link">{{ __('messages.ReadMore') }}
                                            </a>
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
                                                <p>{{ __('messages.Noreviews') }}
                                                    .</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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


    <style>
        button.filter-step2-date-btn {
            z-index: 1;
            /* Bring the button to the top */
            position: relative;
            /* Ensure it's positioned correctly */
        }

        /* Add a class for the active state */
        .active-filter-btn {
            background-color: #F37529 !important;
            /* Change to your desired color */
            color: white;
            /* Optional: change text color */
        }

        /* Style for the toggle button */
        #toggleSkillsBtn {
            margin-bottom: 10px;
        }

        /* Optionally, add some padding or style for the skill list */
        #skillsList {
            padding: 10px;
            background-color: #f9f9f9;
            /* Light background color for the skill list */
            border: 1px solid #ddd;
            /* Border for the skill list */
        }

        .showSkillBtn {
            background-color: #F37529 !important;
            line-height: 10px;
            margin-left: 10px;
        }

        .submitBtnFilter {
            border-radius: 25px;

        }

        .th-btn {
            padding: 15px;
            font-size: 16px
        }
    </style>
@endsection
