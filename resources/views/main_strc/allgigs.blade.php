@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">

        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ __('messages.GigsMarket') }}
                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('messages.Home') }}
                        </a></li>
                    <li>{{ __('messages.GigsMarket') }}
                    </li>

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
                        action="{{ route('handymen.filtergigs') }}">

                        {{--  <!-- Date Filter -->
                        <div class="filter-step2-form-group">
                            <label for="date">Date</label>
                            <div class="filter-step2-date-options">

                                <!-- Date Filter Buttons -->
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('today', this)">Today</button>
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('within_3_days', this)">Within 3 Days</button>
                                <button class="filter-step2-date-btn" type="button"
                                    onclick="setDateFilter('within_a_week', this)">Within A Week</button>


                                <!-- Choose Dates Button -->
                                <button class="filter-step2-date-btn" id="choose_dates_btn" type="button">Choose
                                    Dates</button>
                                <!-- Hidden input for date range -->
                                <input type="text" id="choose_dates_input" name="choose_dates" class="d-none">
                                <!-- Hidden input to hold the selected date filter -->
                                <input type="hidden" name="date_filter" id="date_filter">
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
                        </div>  --}}

                        <!-- Price Filter -->
                        <div class="filter-step2-form-group">
                            <label for="price_range">{{ __('messages.Budget') }}
                            </label>
                            <div class="filter-step2-price-range">
                                <input type="range" name="price_range" min="5" max="50" step="5"
                                    id="price_range" value="{{ old('price_range', 25) }}"
                                    oninput="document.getElementById('price_value').textContent = this.value">
                                <div class="filter-step2-price-values">
                                    <span>{{ __('messages.JD') }} 5/{{ __('messages.hr') }}
                                    </span>
                                    <span id="price_value">{{ old('price_range', 25) }}/{{ __('messages.hr') }}
                                    </span>
                                    <span>{{ __('messages.JD') }} 50+/{{ __('messages.hr') }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Rating Filter -->
                        <div class="filter-step2-form-group">
                            <label for="rating">{{ __('messages.ClientRating') }}</label>
                            <select name="rating" id="rating">
                                <option value="">{{ __('messages.SelectRating') }}
                                </option>
                                <option value="1">1 {{ __('messages.StarAbove') }}
                                </option>
                                <option value="2">2 {{ __('messages.StarsAbove') }}
                                </option>
                                <option value="3">3 {{ __('messages.StarsAbove') }}
                                </option>
                                <option value="4">4 {{ __('messages.StarsAbove') }}
                                </option>
                                <option value="5">5 {{ __('messages.Stars') }}
                                </option>
                            </select>
                        </div>



                        <!-- Skill Filter with Toggle Button -->
                        <div class="filter-step2-form-group">
                            <div class="d-flex">
                                <label class="mt-1" for="skills">{{ __('messages.Skills') }}
                                </label>
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
                            class="mt-2 submitBtnFilter btn btn-primary">{{ __('messages.ApplyFilters') }}
                        </button>


                        <a href="{{ route('handyman.allgigs') }}" class="w-100 mt-2 th-btn ">{{ __('messages.Reset') }}
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
                                    {{--  <div class="handyman-pic-section">
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
                                                    class="w-100 btn btn-primary select-tasker-btn ">Chat
                                                    and Figure
                                                    what
                                                    next!</button>
                                            </form>
                                        </div>
                                    </div>  --}}

                                    <div class="w-100 handyman-details">
                                        <div class="handyman-detailsData-section">
                                            <div>
                                                <h3>{{ $handyman->user->name }}</h3>
                                                <div class="handyman-rating">
                                                    <span class="rating-star">★</span>
                                                    <span>{{ $handyman->user->rating }}
                                                        ({{ $handyman->user->clientreviews->count() }}
                                                        reviews)
                                                    </span>
                                                </div>
                                                <div class="handyman-rating">
                                                    <span class="rating-star"></span>
                                                    <span>{{ $handyman->task_date }} - {{ $handyman->task_time }}
                                                    </span>
                                                </div>


                                            </div>
                                            <div class="handyman-price-section">
                                                <p class="handyman-price mb-0">{{ __('messages.Budget') }}
                                                    :
                                                    {{ __('messages.JD') }}
                                                    {{ number_format($handyman->price, 2) }}/{{ __('messages.hr') }}
                                                </p>
                                                <p style="font-size:1rem;" class="handyman-price">
                                                    {{ __('messages.EstimatedTime') }}
                                                    :
                                                    {{ number_format($handyman->estimated_time, 2) }}
                                                    {{ __('messages.hr') }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div>
                                                <p class="mt-2 mb-0 handyman-price">
                                                    {{ __('messages.Category') }}
                                                    :
                                                    {{ $handyman->category->name }}</p>
                                                <p class="handyman-price">{{ __('messages.Service') }}
                                                    :
                                                    {{ $handyman->service->name }}</p>
                                            </div>

                                        </div>
                                        <div class="handyman-description">
                                            <h4>{{ $handyman->title }}</h4>
                                            <p>{{ Str::limit($handyman->description, 200) }}</p>
                                            <a href="{{ route('handyman.opengig', ['gigId' => $handyman->id]) }}"
                                                class="read-more-link">{{ __('messages.ReadMore') }}
                                            </a>
                                        </div>

                                        <div>
                                            <form class="mt-3 ml-2"
                                                action="{{ route('handyman.opengig', ['gigId' => $handyman->id]) }}"
                                                method="GET">
                                                @csrf
                                                {{--  <input type="hidden" name="category_id" value="{{ $proposal->id }}">  --}}
                                                <button type="submit"
                                                    class="th-btn ml-2 w-100 ">{{ __('messages.ApplyNow') }} !</button>
                                            </form>
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
