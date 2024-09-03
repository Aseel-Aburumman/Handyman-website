@extends('layouts.admin_master')

@section('content')

<div class="pagetitle">
    <h1>Ticket Details</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Ticket Details</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ticket #{{ $ticket->id }}</h5>

                <p><strong>Subject:</strong> {{ $ticket->subject }}</p>
                <p><strong>Description:</strong> {{ $ticket->description }}</p>
                <p><strong>Status:</strong> {{ $ticket->status->name }}</p>
                <p><strong>Created At:</strong> {{ \Carbon\Carbon::parse($ticket->created_at)->format('Y-m-d') }}</p>

                <a href="{{ route('admin.message_user', ['user_id' => $ticket->user_id, 'ticketId' => $ticket->id]) }}" class="btn btn-primary">Message User</a>
            </div>
        </div>

    </div>
</section>

@endsection
