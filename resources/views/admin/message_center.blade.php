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


            <div class="card pt-3">
                <p><strong>Subject:</strong> {{ $ticket->subject }}</p>
                <p><strong>Description:</strong> {{ $ticket->description }}</p>
                <p><strong>Status:</strong> {{ $ticket->status->name }}</p>
                <p><strong>Created At:</strong> {{ \Carbon\Carbon::parse($ticket->created_at)->format('Y-m-d') }}</p>
            </div>

            <section class="product-details space-extra-bottom">
                <div class="container chat-container">
                    <div class="row">
                        <!-- Chat messages area -->
                        <div class="col-md-8">
                            <div class="card chat-card shadow-sm">
                                <div class="card-header chat-header ">
                                    <h4>{{ __('messages.Chatwith') }}
                                        {{ $receiver->name }}</h4>
                                </div>
                                <div class="card-body chat-body">
                                    <div class="chat-messages">
                                        @foreach ($messages as $message)
                                            <div
                                                class="message {{ $message->sender_id === Auth::id() ? 'sent' : 'received' }}">
                                                <div class="message-content">
                                                    <p>{{ $message->message_content }}</p>
                                                    <span
                                                        class="message-time">{{ $message->created_at->format('H:i') }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="card-footer chat-footer">
                                    <form action="{{ route('chat.sendadmin') }}" method="POST">
                                        @csrf
                                        <div class="input-group for_the_rounding">
                                            <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
                                            <input type="hidden" name="receiver_id" value="{{ $receiverId }}">
                                            <input type="text" name="message_content"
                                                class="form-control for_the_rounding" placeholder="Type a message..."
                                                required>
                                            <button type="submit"
                                                class="mt-2 btn btn-primary for_the_rounding ">{{ __('messages.Send') }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Chat history area -->
                        <div class="col-md-4 ">
                            <div class="card chat-history-card shadow-sm">
                                <div class="card-header">
                                    <h5>{{ __('messages.ChatHistory') }}
                                    </h5>
                                </div>
                                <div class="card-body chat-history-body">
                                    @if ($chatPartners->isNotEmpty())
                                        @foreach ($chatPartners as $partner)
                                            <a href="{{ route('chatadmin', ['receiverId' => $partner->id, 'ticketId' => $ticket->id]) }}"
                                                class="chat-history-item">
                                                <div class="history-item-content">
                                                    <div class="history-item-avatar">
                                                        @if ($partner->image)
                                                            <img src="{{ asset('storage/profile_images/' . $partner->image) }}"
                                                                alt="User Avatar" class="history-avatar-img">
                                                        @else
                                                            <img src="{{ asset('assets/img/team/team_1_1.jpg') }}"
                                                                alt="Default Avatar" class="history-avatar-img">
                                                        @endif
                                                    </div>

                                                </div>
                                                <div class="history-item-name">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <strong>{{ $partner->name ?? 'User ID: ' . $partner->id }}</strong>
                                                        </div>
                                                        <div>
                                                            <small
                                                                class="text-muted">{{ $partner->lastMessage->created_at->diffForHumans() }}</small>
                                                        </div>
                                                    </div>
                                                    <!-- Last Message -->
                                                    @if ($partner->lastMessage)
                                                        <p
                                                            style="{{ $partner->lastMessage->is_read ? '' : 'font-weight: bold;' }}">
                                                            {{ Str::limit($partner->lastMessage->message_content, 50) }}
                                                        </p>
                                                    @else
                                                        <p>{{ __('messages.Nomessages') }}
                                                            .</p>
                                                    @endif
                                                </div>
                                            </a>
                                        @endforeach
                                    @else
                                        <p>{{ __('messages.Nohistory') }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script>
                $('form').on('submit', function(e) {
                    e.preventDefault(); // Prevent form submission

                    const messageContent = $('input[name="message_content"]').val();
                    const receiverId = $('input[name="receiver_id"]').val();

                    $.ajax({
                        url: '{{ route('chat.sendadmin') }}',
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            message_content: messageContent,
                            receiver_id: receiverId,
                        },
                        success: function() {
                            $('input[name="message_content"]').val(''); // Clear input
                            fetchMessages(); // Fetch messages again to display the new message
                        }
                    });
                });
            </script>

            <script>
                // Function to fetch messages every 2 seconds (polling)
                function fetchMessages() {
                    $.ajax({
                        url: '{{ route('chat.fetchadmin', ['receiverId' => $receiverId]) }}',
                        method: 'GET',
                        success: function(data) {
                            $('.chat-messages').html(''); // Clear old messages
                            data.forEach(message => {
                                const messageClass = message.sender_id == {{ Auth::id() }} ? 'sent' :
                                    'received';
                                $('.chat-messages').append(`
                        <div class="message ${messageClass}">
                            <div class="message-content">
                                <p>${message.message_content}</p>
                                <span class="message-time">${new Date(message.created_at).toLocaleTimeString()}</span>
                            </div>
                        </div>
                    `);
                            });
                        }
                    });
                }

                // Call fetchMessages every 2 seconds
                setInterval(fetchMessages, 2000);
            </script>

            <style>
                .chat-container {
                    margin-top: 20px;
                }

                .for_the_rounding {
                    border-radius: 20px !important;

                }

                .chat-card,
                .chat-history-card {
                    max-height: 600px;
                    overflow-y: auto;
                    border-radius: 20px;
                }

                .message-content>p {
                    color: black !important;

                }

                .chat-header {
                    background-color: #101840;
                    color: white !important;
                    text-align: center;
                    border-radius: 20px;

                }

                .chat-header>h4 {
                    color: white !important;
                    margin-bottom: 10px;
                    margin-top: 10px;


                }

                .chat-body {
                    height: 400px;
                    overflow-y: scroll;
                    padding: 10px;
                    background-color: #f7f7f7;
                    border-radius: 20px;

                }

                .chat-messages .message {
                    display: flex;
                    margin-bottom: 10px;
                    border-radius: 20px;

                }

                .chat-messages .message.sent {
                    justify-content: flex-end;
                    border-radius: 20px;

                }

                .chat-messages .message.received {
                    justify-content: flex-start;
                }

                .message-content {
                    background-color: #f47629b3;
                    color: white;
                    padding: 10px;
                    border-radius: 10px;
                    max-width: 60%;
                }

                .message.sent .message-content {
                    background-color: #b5b5b5;
                }




                .message-time {
                    font-size: 0.75rem;
                    margin-top: 5px;
                    text-align: right;
                }

                .chat-footer {
                    padding: 10px;
                    border-radius: 20px;

                }

                .input-group {
                    display: flex;
                }

                .input-group input {
                    flex-grow: 1;
                }

                .chat-history-body {
                    padding: 10px;
                }

                .chat-history-item {
                    display: flex;
                    align-items: center;
                    padding: 10px;
                    border-bottom: 1px solid #ddd;
                    text-decoration: none;
                    color: black;
                }

                .chat-history-item:hover {
                    background-color: #f7f7f7;
                }

                .history-item-avatar {
                    margin-right: 10px;
                }

                .history-avatar-img {
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                }

                .history-item-name {
                    flex-grow: 1;
                }
            </style>




        </div>
    </section>
@endsection
