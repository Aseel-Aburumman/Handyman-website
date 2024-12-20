@extends('layouts.inside')


@section('content')
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
                        3</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="step-three-container">
                <div class="progress-bar-container">
                    <div class="progress-bar-step completed">1</div>
                    <div class="progress-bar-line completed"></div>
                    <div class="progress-bar-step completed">2</div>
                    <div class="progress-bar-line completed"></div>
                    <div class="progress-bar-step active">3</div>
                    <div class="progress-bar-line"></div>
                    <div class="progress-bar-step">4</div>
                </div>

                <!-- Task Date and Time Form -->
                <form class="calenderForm d-flex w-100" action="{{ route('gig.storeStep3') }}" method="POST">
                    @csrf

                    <div class="calenderFormDate  w-75 form-group">
                        <label for="date">{{ __('messages.ChooseTaskDate') }}:</label>
                        <div id="calendar"></div>
                        @if (!$handyman)
                            <label class="checkBudgetLabel">{{ __('messages.ChoosYourBudget') }}</label>

                            <div class="checkBudget form-check form-group">
                                <input type="radio" class="form-check-input" id="budget1" name="budget" value="5"
                                    checked>
                                <label class=" form-check-label" for="budget1">5-10 {{ __('messages.JD') }}</label>
                            </div>

                            <div class="checkBudget form-check form-group">
                                <input type="radio" class="form-check-input" id="budget2" name="budget" value="10">
                                <label class=" form-check-label" for="budget2">10-20 {{ __('messages.JD') }}</label>
                            </div>

                            <div class="checkBudget form-check form-group">
                                <input type="radio" class="form-check-input" id="budget3" name="budget" value="20">
                                <label class=" form-check-label" for="budget3">20+ {{ __('messages.JD') }}</label>
                            </div>
                        @endif
                    </div>
                    <!-- Hidden input for storing the selected date -->
                    <input type="hidden" name="date" id="selected-date">

                    <!-- Hidden input for storing the selected hour -->
                    <input type="hidden" name="time" id="selected-hour">
                    <div class="calenderFormTime ml-3 w-25 form-group">
                        <div class="form-group">
                            <label for="available-hours">{{ __('messages.ChooseTaskDate') }}:</label>
                            <div id="available-hours" class="available-hours-grid">
                                <!-- Available hours will be displayed here -->
                            </div>
                        </div>
                        <input type="hidden" id="selected-hour" name="selected_hour" >
                        <button type="submit" class="btn btn-primary">{{ __('messages.ContinueStep') }} 4</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection



@section('scripts')
    <!-- FullCalendar JS is included from your layout -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"></script>

    {{--  <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            // Initialize FullCalendar
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                selectable: true,
                minDate: "{{ now()->toDateString() }}",
                dateClick: function(info) {
                    // Fetch availability for the selected date
                    fetchAvailableHours(info.dateStr);
                }
            });
            calendar.render();

            function fetchAvailableHours(date) {
                const handymanId = 1; // Replace with dynamic handyman_id if needed
                fetch("{{ route('gig.getAvailability') }}", {
                        method: "POST",
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        },
                        body: JSON.stringify({
                            handyman_id: handymanId,
                            date: date
                        })
                    })
                    .then(response => response.json())
                    .then(bookedHours => {
                        const hoursGrid = document.getElementById('available-hours');
                        hoursGrid.innerHTML = ""; // Clear previous hours

                        // Populate hours in 30-minute intervals
                        const timeSlots = generateTimeSlots();

                        timeSlots.forEach(slot => {
                            const hourBlock = document.createElement('div');
                            hourBlock.classList.add('hour-block');
                            hourBlock.textContent = slot;

                            const [hour, minute] = slot.split(":");
                            const slotNumber = parseInt(hour) + parseInt(minute) / 60;

                            if (bookedHours.includes(slotNumber)) {
                                hourBlock.classList.add('booked'); // Disable booked slots
                            } else {
                                hourBlock.addEventListener('click', function() {
                                    document.getElementById('selected-hour').value = slot;
                                    document.querySelectorAll('.hour-block').forEach(el => el
                                        .classList.remove('selected'));
                                    hourBlock.classList.add('selected');
                                });
                            }

                            hoursGrid.appendChild(hourBlock);
                        });
                    });
            }

            function generateTimeSlots() {
                const slots = [];
                for (let hour = 0; hour <= 24; hour++) {
                    slots.push(`${hour}:00`);
                }
                return slots;
            }
        });
    </script>  --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            // Initialize FullCalendar
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                selectable: true, // Enables date selection for valid dates
                dateClick: function(info) {
                    // Check if the clicked date is in the future (to allow selection)
                    const today = new Date();
                    const clickedDate = new Date(info.dateStr);

                    // Prevent selection of past dates
                    if (clickedDate >= today) {
                        // Set the selected date in the hidden input field
                        document.getElementById('selected-date').value = info.dateStr;
                        fetchAvailableHours(info.dateStr); // Fetch hours for the selected date
                    } else {
                        alert('You cannot select a past date.');
                    }
                },
                validRange: {
                    start: null, // Allow past dates to be shown, but...
                    end: null // ...control which are selectable via the dateClick function.
                },
                dayRender: function(info) {
                    const today = new Date();
                    const renderedDate = new Date(info.date);

                    // Disable past dates visually (add a class to mark them)
                    if (renderedDate < today) {
                        info.el.classList.add('fc-past-date');
                        info.el.style.pointerEvents = 'none'; // Prevent clicking on past dates
                        info.el.style.backgroundColor = '#e0e0e0'; // Optional: Grey out past dates
                    }
                }
            });

            calendar.render();

            function fetchAvailableHours(date) {
                const handymanId = 1; // Replace with dynamic handyman_id if needed
                fetch("{{ route('gig.getAvailability') }}", {
                        method: "POST",
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': "{{ csrf_token() }}",
                        },
                        body: JSON.stringify({
                            handyman_id: handymanId,
                            date: date
                        })
                    })
                    .then(response => response.json())
                    .then(bookedHours => {
                        const hoursGrid = document.getElementById('available-hours');
                        hoursGrid.innerHTML = ""; // Clear previous hours

                        // Populate hours in hourly intervals
                        const timeSlots = generateTimeSlots();

                        timeSlots.forEach(slot => {
                            const hourBlock = document.createElement('div');
                            hourBlock.classList.add('hour-block');
                            hourBlock.textContent = slot;

                            const hour = parseInt(slot.split(":")[0]);

                            if (bookedHours.includes(hour)) {
                                hourBlock.classList.add('booked'); // Disable booked slots
                            } else {
                                hourBlock.addEventListener('click', function() {
                                    // Set the selected hour in the hidden input field
                                    document.getElementById('selected-hour').value = slot;
                                    document.querySelectorAll('.hour-block').forEach(el => el
                                        .classList.remove('selected'));
                                    hourBlock.classList.add('selected');
                                });
                            }

                            hoursGrid.appendChild(hourBlock);
                        });
                    });
            }

            function generateTimeSlots() {
                const slots = [];
                for (let hour = 0; hour <= 23; hour++) { // Adjust time range as needed
                    slots.push(`${hour}:00`);
                }
                return slots;
            }
        });
    </script>



    <style>
        .fc-past-date {
            background-color: #e0e0e0;
            /* Grey out past dates */
            color: #888;
            /* Optional: Change text color for past dates */
            cursor: not-allowed;
            /* Show not-allowed cursor for past dates */
        }

        .form-group {
            background-color: #FFFFFF;
            margin-left: 10px;
            border-radius: 20px;
            padding: 10px;
        }

        .available-hours-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-top: 20px;
        }

        .hour-block {
            padding: 10px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            text-align: center;
            cursor: pointer;
            border-radius: 5px;
        }

        .hour-block.selected {
            background-color: #007bff;
            color: white;
        }

        .hour-block.booked {
            background-color: #dc3545;
            color: white;
            cursor: not-allowed;
        }
    </style>
@endsection
