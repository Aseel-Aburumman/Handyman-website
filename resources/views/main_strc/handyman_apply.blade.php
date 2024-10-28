@extends('layouts.inside')

@section('content')
    <!--==============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Breadcumb
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">

        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Be A Handyman!</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Handyman Application Agreement</li>

                    <li>Handyman Application Form</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="overflow-hidden space" id="service-sec">
        <div class="container">
            <h1>Handyman Application Form</h1>

            <form action="{{ route('handyman.apply.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="price_per_hour">Price Per Hour (in JD)</label>
                    <input type="number" name="price_per_hour" id="price_per_hour" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="experience">Years of Experience</label>
                    <input type="number" name="experience" id="experience" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea name="bio" id="bio" class="form-control" rows="4"
                        placeholder="Tell us more about your skills and experience"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Submit Application</button>
            </form>
        </div>
    </section>
@endsection
