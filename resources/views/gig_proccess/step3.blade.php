@extends('layouts.inside')

@section('content')
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
                    <div class="form-group">
                        <label for="date">Choose Task Date</label>
                        <input type="date" name="date" id="date" class="form-control"
                            min="{{ now()->toDateString() }}" required>
                    </div>

                    <!-- Time -->
                    <div class="form-group">
                        <label for="time">Choose Start Time</label>
                        <input type="time" name="time" id="time" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Continue to Step 4</button>
                </form>
            </div>
        </div>
    </section>
@endsection
