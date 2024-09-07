@extends('layouts.admin_master')

@section('content')

<div class="pagetitle">
    <h1>Gig Details</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item ">Gigs Control Center</li>
            <li class="breadcrumb-item active">Reported Gig
            </li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            {{-- Display success message --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">Gig Details</h5>
                    <div class="row mb-2">
                        <div class="col-md-4 label">Title</div>
                        <div class="col-md-8">{{ $gig->title }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4 label">Description</div>
                        <div class="col-md-8">{{ $gig->description }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4 label">Location</div>
                        <div class="col-md-8">{{ $gig->location }}</div>
                    </div>

                    <h5 class="card-title">Reported By User</h5>
                    <div class="row mb-2">
                        <div class="col-md-4 label">User ID</div>
                        <div class="col-md-8">{{ $gig->user->name }} (ID: {{ $gig->user->id }})</div>
                    </div>

                    <h5 class="card-title">Report Message</h5>
                    <div class="row mb-2">
                        <div class="col-md-4 label">Message</div>
                        <div class="col-md-8">{{ $report->message }}</div>
                    </div>
                    <h5 class="card-title">Last 5 Reviews</h5>
                    @if ($clientReviews && !$clientReviews->isEmpty())
                        <ul>
                            @foreach($clientReviews as $review)
                                <li>{{ $review->review }} (Rating: {{ $review->rating }})</li>
                            @endforeach
                        </ul>
                    @else
                        <p>No reviews found for this client.</p>
                    @endif


                    <h5 class="card-title">Chat History</h5>
                    @if ($chatHistory->isEmpty())
                        <p>No chat history after the gig creation found for this user .</p>
                    @else
                        <ul>
                            @foreach($chatHistory as $message)
                                <li><strong>From:</strong> {{ $message->sender->name }} to {{ $message->receiver->name }} - {{ $message->message_content }} ({{ $message->created_at->format('Y-m-d H:i:s') }})</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="d-flex flex-row justify-content-center">
                        <form action="{{ route('admin.resolve', $gig->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">Resolve the proplem</button>
                        </form>
                        {{--  <a href="{{ route('admin.resolve', $gig->id) }}" class="btn btn-success btn-l ">Resolve the proplem and reOpen the gig</a>  --}}
                        <form action="{{ route('admin.cancel_gig', $gig->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Cancel the gig and notify the client</button>
                        </form>
                    </div>
                    {{--  <a href="{{ route('admin.cancel_gig', $gig->id) }}" class="btn btn-danger btn-l ">Cancel the gig and notify the client</a>  --}}

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
