@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">

        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ __('messages.BeHandyman') }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('messages.Home') }}
                        </a></li>
                    <li>{{ __('messages.HandymanAgreement') }}
                    </li>

                    <li>{{ __('messages.HandymanForm') }}
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <section class="overflow-hidden space" id="service-sec">
        <div class="container">
            <h1>{{ __('messages.HandymanForm') }}
            </h1>

            <form action="{{ route('handyman.apply.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="price_per_hour">{{ __('messages.PPR') }}</label>
                    <input type="number" name="price_per_hour" id="price_per_hour" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="experience">{{ __('messages.YearsExperience') }}</label>
                    <input type="number" name="experience" id="experience" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="bio">{{ __('messages.Bio') }}</label>
                    <textarea name="bio" id="bio" class="form-control" rows="4"
                        placeholder="Tell us more about your skills and experience"></textarea>
                </div>

                <button type="submit" class="btn btn-success">{{ __('messages.SubmitApplication') }}</button>
            </form>
        </div>
    </section>
@endsection
