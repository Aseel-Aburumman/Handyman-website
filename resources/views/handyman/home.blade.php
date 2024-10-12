@extends('layouts.inside')

@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Home</h1>
                <ul class="breadcumb-menu">
                    {{--  <li><a href="{{ route('customer.Home') }}">Home</a></li>  --}}
                    <li>Home</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="product-details space-extra-bottom">
        <div class="container">
            @if (session('success'))
                <div class="container alert alert-success">
                    {!! session('success') !!}
                </div>
            @endif
            <div class="dashboard-container">
                <!-- Left Sidebar with Stat Cards -->
                <div class="stat-cards">
                    <div class="stat-card">
                        <i class="fas fa-award"></i>
                        <div class="stat-title">Gigs Awarded</div>
                        <div class="stat-value">{{ $totalawardedgig }}</div>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-clipboard-list"></i>
                        <div class="stat-title">Gigs Applied To</div>
                        <div class="stat-value">{{ $totalappliedgig }}</div>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-dollar-sign"></i>
                        <div class="stat-title">Profit This Month</div>
                        <div class="stat-value">{{ $totalawardedgig_profit_thismonth }}</div>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-coins"></i>
                        <div class="stat-title">Total Profit</div>
                        <div class="stat-value">{{ $totalawardedgig_profit->sum('total') }}</div>
                    </div>
                </div>

                <!-- Main Content Section -->
                <div class="content-section">
                    <!-- Gigs Waiting for Approval -->
                    <div class="">
                        <h3>
                            Gigs Waiting for Approval
                        </h3>
                        @foreach ($awardedgig as $gig)
                            <div class="content-box gigs-approval">

                                <div class="d-flex justify-content-between gig-details">
                                    <div class="w-75">
                                        <h6>Task Details</h6>
                                        <div class="d-flex justify-content-between">
                                            <h2 class="gig-title">{{ $gig->title }}</h2>
                                        </div>
                                        <p class="gig-description">
                                            {{ \Illuminate\Support\Str::limit($gig->description, 150) }}</p>
                                        <p class="gig-location"><i class="fas fa-map-marker-alt"></i>
                                            {{ $gig->location }}</p>
                                        <p class="gig-time"><i class="far fa-calendar-alt"></i>
                                            {{ $gig->task_date }} {{ $gig->task_time }}</p>
                                    </div>
                                    <div class="w-25 text-center align-self-center align-items-center">
                                        <h3>Client Details</h3>
                                        <div class="m-auto freelancer-img">
                                            @if ($gig->user && $gig->user->image)
                                                <img src="{{ asset('storage/profile_images/' . $gig->user->image) }}"
                                                    alt="{{ $gig->user->name }} Picture">
                                            @else
                                                <img src="{{ asset('assets/img/team/team_1_1.jpg') }}"
                                                    alt="Freelancer Picture">
                                            @endif
                                        </div>
                                        <h6 class="freelancer-name">
                                            {{ $gig->user->name ?? 'Unknown User' }}</h6>
                                        <div class="justify-content-center handyman-rating">
                                            <span class="text-center rating-star">★</span>
                                            <span>{{ $gig->user->rating }}
                                                ({{ $gig->user->clientreviews->count() }} reviews)
                                            </span>
                                        </div>

                                        <!-- Display Gigs Count -->
                                        <div class="gig-count">
                                            <p><strong>Gigs Posted:</strong> {{ $gig->user->gigs->count() }}</p>
                                        </div>

                                        <form class="mt-3" action="{{ route('chat', ['receiverId' => $gig->user->id]) }}"
                                            method="GET">
                                            @csrf
                                            <button type="submit" class="btn btn-info w-100 ">Chat and Figure what
                                                next!</button>
                                        </form>
                                        <form class="mt-3 ml-2"
                                            action="{{ route('handyman.accept', ['gigId' => $gig->id]) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            {{--  <input type="hidden" name="category_id" value="{{ $proposal->id }}">  --}}
                                            <button type="submit" class="btn btn-success ml-2 w-100 ">Accept and Start The
                                                Work</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <!-- Hot Gigs to Apply To -->
                    <div class="">
                        <h3>
                            Hot Gigs to Apply To
                        </h3>
                        @foreach ($gigtoaply as $gig)
                            <div class="content-box gigs-approval">

                                <div class="d-flex justify-content-between gig-details">
                                    <div class="w-75">
                                        <h6>Task Details</h6>
                                        <div class="d-flex justify-content-between">
                                            <h2 class="gig-title">{{ $gig->title }}</h2>
                                        </div>
                                        <p class="gig-description">
                                            {{ \Illuminate\Support\Str::limit($gig->description, 150) }}</p>
                                        <p class="gig-location"><i class="fas fa-map-marker-alt"></i>
                                            {{ $gig->location }}</p>
                                        <p class="gig-time"><i class="far fa-calendar-alt"></i>
                                            {{ $gig->task_date }} {{ $gig->task_time }}</p>
                                    </div>
                                    <div class="w-25 text-center align-self-center align-items-center">
                                        <h6>Client Details</h6>
                                        <div class="m-auto freelancer-img">
                                            @if ($gig->user && $gig->user->image)
                                                <img src="{{ asset('storage/profile_images/' . $gig->user->image) }}"
                                                    alt="{{ $gig->user->name }} Picture">
                                            @else
                                                <img src="{{ asset('assets/img/team/team_1_1.jpg') }}"
                                                    alt="Freelancer Picture">
                                            @endif
                                        </div>
                                        <h3 class="freelancer-name">
                                            {{ $gig->user->name ?? 'Unknown User' }}</h3>
                                        <div class="justify-content-center handyman-rating">
                                            <span class="text-center rating-star">★</span>
                                            <span>{{ $gig->user->rating }}
                                                ({{ $gig->user->clientreviews->count() }} reviews)
                                            </span>
                                        </div>

                                        <!-- Display Gigs Count -->
                                        <div class="gig-count">
                                            <p><strong>Gigs Posted:</strong> {{ $gig->user->gigs->count() }}</p>
                                        </div>


                                        <form class="mt-3 ml-2"
                                            action="{{ route('handyman.opengig', ['gigId' => $gig->id]) }}" method="GET">
                                            @csrf
                                            {{--  <input type="hidden" name="category_id" value="{{ $proposal->id }}">  --}}
                                            <button type="submit" class="btn btn-success ml-2 w-100 ">Apply Now!</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>




        </div>
    </section>
    <style>
        .dashboard-container {
            display: flex;
            gap: 20px;
            padding: 20px;
        }

        .stat-cards {
            flex-basis: 20%;
        }

        .stat-card {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            text-align: center;
            transition: 0.3s;
        }

        .stat-card:hover {
            background-color: #f4762929;

        }

        .stat-card i {
            font-size: 30px;
            color: #F47629;
            margin-bottom: 10px;
        }

        .stat-title {
            font-size: 14px;
            margin-bottom: 5px;
            color: #333;
        }

        .stat-value {
            font-size: 24px;
            font-weight: bold;
            color: #444;
        }

        .content-section {
            flex-basis: 75%;
        }

        .content-box {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .gigs-approval {}

        .hot-gigs {}

        .section-title {
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .gig-list {
            list-style-type: none;
            padding: 0;
        }

        .gig-list li {
            margin-bottom: 10px;
        }

        .gig-list a {
            color: blue;
            text-decoration: none;
        }

        .gig-list a:hover {
            text-decoration: underline;
        }
    </style>
@endsection
