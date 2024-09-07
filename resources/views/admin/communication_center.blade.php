@extends('layouts.admin_master')

@section('content')
<div class="pagetitle">
    <h1>Message List</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Communication Center</h5>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sender</th>
                                <th>Receiver</th>
                                <th>Preview</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($groupedMessages as $messageGroup)
                            <tr>
                                <td>{{ $messageGroup->sender->name }}</td>
                                <td>{{ $messageGroup->receiver->name }}</td>
                                <td>
                                    <button class="btn btn-info" onclick="showConversation({{ $messageGroup->sender_id }}, {{ $messageGroup->receiver_id }})">View Message</button>
                                </td>
                                <td>{{ $messageGroup->last_message_time }}</td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Modal to show full conversation -->
                    <div class="modal fade" id="conversationModal" tabindex="-1" aria-labelledby="conversationModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="conversationModalLabel">Conversation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id="conversationBody">
                                    <!-- Conversation content will be loaded here -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Make sure to add jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
function showConversation(senderId, receiverId) {
    // Make AJAX call to get the full conversation
    $.ajax({
        url: '/admin/conversation/' + senderId + '/' + receiverId,
        method: 'GET',
        success: function (data) {
            let conversationHTML = '';
            data.forEach(function (message) {
                conversationHTML += '<p><strong>' + message.sender.name + ':</strong> ' + message.message_content + '</p>';

            });
            $('#conversationBody').html(conversationHTML);
            $('#conversationModal').modal('show');
        }
    });
}
</script>
@endsection
