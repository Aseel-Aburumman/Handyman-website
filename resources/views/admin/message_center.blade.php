@extends('layouts.admin_master')

@section('content')

<div class="pagetitle">
    <h1>Message Center</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Message Center</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Messages with {{ $user->name }}</h5>

                <div class="message">
                    @foreach($messages as $message)
                    @if($message->sender_id == 1) <!-- Static ID for the admin -->

                        {{--  @if($message->sender_id == auth()->id())  --}}
                            <p><strong>You</strong>: {{ $message->message_content }}</p>
                        @else
                            <p><strong>{{ $message->sender->name }}</strong>: {{ $message->message_content }}</p>
                        @endif
                        <span>{{ $message->created_at->format('Y-m-d H:i') }}</span>
                    @endforeach
                </div>

                <form action="{{ route('admin.send_message', $user->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
                        <textarea name="message_content" class="form-control" rows="3" placeholder="Type your message..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Send</button>
                </form>


            </div>
        </div>

    </div>
</section>

@endsection
