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
                <form action="{{ route('gig.storeStep3') }}" method="POST">
                    @csrf

                    <!-- Date -->
                    @if (!$handyman)
                        <div class="form-group">
                            <label class="checkBudgetLabel" for="date">{{ __('messages.ChooseTaskDate') }}
                            </label>
                            <input type="date" name="date" id="date" class="form-control"
                                min="{{ now()->toDateString() }}" required>
                        </div>
                    @else
                        <label class="checkBudgetLabel" for="date">{{ __('messages.ChooseTaskDate') }}
                        </label>

                        <input type="text" name="date" id="task_date" class="form-control" required
                            placeholder="DD-MM-YYYY">
                        <!-- Hidden input field for the date range -->
                        <input type="text" id="choose_dates_input" name="choose_dates" class="d-none">
                    @endif
                    <!-- Time -->
                    <div class="form-group">
                        <label class="checkBudgetLabel" for="time">{{ __('messages.ChooseStartTime') }}
                        </label>
                        <input type="time" name="time" id="time" class="form-control" required>
                    </div>

                    @if (!$handyman)
                        <label class="checkBudgetLabel">{{ __('messages.ChoosYourBudget') }}
                        </label>

                        <div class="checkBudget form-check form-group">
                            <input type="radio" class="form-check-input" id="budget1" name="budget" value="5"
                                checked>
                            <label class=" form-check-label" for="budget1">5-10 {{ __('messages.JD') }}
                            </label>
                        </div>

                        <div class="checkBudget form-check form-group">
                            <input type="radio" class="form-check-input" id="budget2" name="budget" value="10">
                            <label class=" form-check-label" for="budget2">10-20 {{ __('messages.JD') }}
                            </label>
                        </div>

                        <div class="checkBudget form-check form-group">
                            <input type="radio" class="form-check-input" id="budget3" name="budget" value="20">
                            <label class=" form-check-label" for="budget3">20+ {{ __('messages.JD') }}
                            </label>
                        </div>
                    @endif

                    <button type="submit" class="btn btn-primary">{{ __('messages.ContinueStep') }}
                        4</button>
                </form>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const bookedDates = @json($bookedDates); // Assuming this array is passed from the server

            flatpickr("#task_date", {
                dateFormat: "Y-m-d", // format of the date (same as Laravel format)
                minDate: "{{ now()->toDateString() }}", // Disable dates before today
                disable: bookedDates, // Disable booked dates
                locale: {
                    firstDayOfWeek: 1 // Monday as the first day of the week (optional)
                }

            });
        });
    </script>
@endsection
