<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Message Center</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                <li class="breadcrumb-item active">Message Center</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">





            <section class="product-details space-extra-bottom">
                <div class="container chat-container">
                    <div class="row">
                        <!-- Chat messages area -->
                        <div class="col-md-8">
                            <div class="card chat-card shadow-sm">
                                <div class="card-header chat-header ">
                                    <h4><?php echo e(__('messages.Chatwith')); ?>

                                        <?php echo e($receiver->name); ?>

                                    </h4>
                                </div>
                                <div class="card-body chat-body">
                                    <div class="chat-messages">
                                        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div
                                                class="message <?php echo e($message->sender_id === Auth::id() ? 'sent' : 'received'); ?>">
                                                <div class="message-content">
                                                    <p><?php echo e($message->message_content); ?></p>
                                                    <span
                                                        class="message-time"><?php echo e($message->created_at->format('H:i')); ?></span>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <div class="card-footer chat-footer">
                                    <form action="<?php echo e(route('chat.sendadmin2')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="input-group for_the_rounding">
                                            <input type="hidden" name="receiver_id" value="<?php echo e($receiverId); ?>">
                                            <input type="text" name="message_content"
                                                class="form-control for_the_rounding" placeholder="Type a message..."
                                                required>
                                            <button type="submit"
                                                class="mt-2 btn btn-primary for_the_rounding "><?php echo e(__('messages.Send')); ?>

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
                                    <h5><?php echo e(__('messages.ChatHistory')); ?>

                                    </h5>
                                </div>
                                <div class="card-body chat-history-body">
                                    <?php if($chatPartners->isNotEmpty()): ?>
                                        <?php $__currentLoopData = $chatPartners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e(route('chatadmin2', ['receiverId' => $partner->id])); ?>"
                                                class="chat-history-item">
                                                <div class="history-item-content">
                                                    <div class="history-item-avatar">
                                                        <?php if($partner->image): ?>
                                                            <img src="<?php echo e(asset('storage/profile_images/' . $partner->image)); ?>"
                                                                alt="User Avatar" class="history-avatar-img">
                                                        <?php else: ?>
                                                            <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>"
                                                                alt="Default Avatar" class="history-avatar-img">
                                                        <?php endif; ?>
                                                    </div>

                                                </div>
                                                <div class="history-item-name">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <strong><?php echo e($partner->name ?? 'User ID: ' . $partner->id); ?></strong>
                                                        </div>
                                                        <div>
                                                            <small
                                                                class="text-muted"><?php echo e($partner->lastMessage->created_at->diffForHumans()); ?></small>
                                                        </div>
                                                    </div>
                                                    <!-- Last Message -->
                                                    <?php if($partner->lastMessage): ?>
                                                        <p
                                                            style="<?php echo e($partner->lastMessage->is_read ? '' : 'font-weight: bold;'); ?>">
                                                            <?php echo e(Str::limit($partner->lastMessage->message_content, 50)); ?>

                                                        </p>
                                                    <?php else: ?>
                                                        <p><?php echo e(__('messages.Nomessages')); ?>

                                                            .</p>
                                                    <?php endif; ?>
                                                </div>
                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <p><?php echo e(__('messages.Nohistory')); ?>

                                        </p>
                                    <?php endif; ?>
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
                        url: '<?php echo e(route('chat.sendadmin2')); ?>',
                        method: 'POST',
                        data: {
                            _token: '<?php echo e(csrf_token()); ?>',
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
                const receiverId = $('input[name="receiver_id"]').val();

                // Function to fetch messages every 2 seconds (polling)
                function fetchMessages() {

                    $.ajax({
                        url: `<?php echo e(route('chat.fetchadmin2', ['receiverId' => ':receiverId'])); ?>`.replace(':receiverId',
                            receiverId), // Replace :receiverId with the actual value
                        method: 'GET',
                        success: function(data) {
                            $('.chat-messages').html(''); // Clear old messages
                            data.forEach(message => {
                                const messageClass = message.sender_id == {
                                        {
                                            Auth::id()
                                        }
                                    } ? 'sent' :
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/message_center2.blade.php ENDPATH**/ ?>