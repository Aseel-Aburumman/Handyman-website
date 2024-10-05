@extends('layouts.inside')

@section('content')
    <section class="overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="step-four-container">
                <div class="progress-bar-container">
                    <div class="progress-bar-step completed">1</div>
                    <div class="progress-bar-line completed"></div>
                    <div class="progress-bar-step completed">2</div>
                    <div class="progress-bar-line completed"></div>
                    <div class="progress-bar-step completed">3</div>
                    <div class="progress-bar-line completed"></div>
                    <div class="progress-bar-step active">4</div>
                </div>

                <!-- Summary of Task Details -->
                <div class="task-summary">
                    <h4>Task Summary</h4>
                    <p><strong>Task Location:</strong> {{ session('location') }}</p>

                    @if (session('end_address'))
                        <p><strong>End Address:</strong> {{ session('end_address') }}</p>
                    @endif

                    <p><strong>Estimated Time:</strong> {{ session('estimated_time') }} hours</p>
                    <p><strong>Task Description:</strong> {{ session('description') }}</p>

                    @if ($handyman)
                        <p><strong>Handyman Selected:</strong> {{ $handyman->name }}</p>
                        <p><strong>Hourly Rate:</strong> {{ $handyman->price_per_hour }} JD/hr</p>
                    @else
                        <p><strong>No Handyman Selected.</strong> Task will be open for bidding.</p>
                    @endif

                    <p><strong>Total Cost:</strong> {{ $total }} JD (Including 16% Trust & Support Fee)</p>
                </div>

                <!-- Payment Form -->
                <div class="payment-form">
                    <form action="{{ route('gig.storeStep4') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="card_number">Card Number</label>
                            <input type="text" name="card_number" id="card_number" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="promo_code">Do you have a promo code?</label>
                            <input type="text" name="promo_code" id="promo_code" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Confirm and Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
