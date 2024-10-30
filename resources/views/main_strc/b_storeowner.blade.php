@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">

        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{ __('messages.storeOwnerApplyBread') }}
                </h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home') }}">{{ __('messages.Home') }}
                        </a></li>
                    <li>{{ __('messages.storeOwnerApplyBreadSmall2') }}
                    </li>

                    <li>{{ __('messages.storeOwnerApplyBreadSmall') }}
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <section class="overflow-hidden space" id="service-sec">
        <div class="container mt-5">
            <div class="card shadow-sm">
                <div class="card-body p-5">
                    <h1 class="mb-4 text-center">{{ __('messages.storeOwnerApplyBreadSmall') }}</h1>

                    <p>{{ __('messages.storeOwnerApplyP') }}
                    </p>

                    <div class="agreement-content">
                        <!-- Display the agreement content based on the current locale (English or Arabic) -->
                        @if (app()->getLocale() == 'ar')
                            {!! $agreement->content_ar !!}
                        @else
                            {!! $agreement->content !!}
                        @endif
                    </div>

                    <form action="{{ route('storeowner.agreement.confirm') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">{{ __('messages.IAgree') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <style>
        .card {
            border-radius: 8px;
            border: none;
        }

        .card-body {
            background-color: #f9f9f9;
        }

        h1,
        h5 {
            font-family: 'Nunito', sans-serif;
        }

        ul.list-group {
            list-style-type: none;
            padding-left: 0;
        }

        ul.list-group-item {
            margin-bottom: 20px;
        }

        ul.list-group-item p {
            margin-left: 20px;
            line-height: 1.6;
        }

        ul.list-group-item strong {
            color: #333;
            font-size: 18px;
        }

        .btn {
            background-color: #ff6600;
            color: white;
            border-radius: 25px;
            font-weight: bold;
        }

        .btn:hover {
            background-color: #e65c00;
        }
    </style>
@endsection
