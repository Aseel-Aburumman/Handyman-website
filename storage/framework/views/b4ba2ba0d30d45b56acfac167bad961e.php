<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Dashboard</h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('customer.Home')); ?>">Home</a></li>
                    <li>Dashboard</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="product-details space-extra-bottom">
        <div class="container chat-container">
            <div class="row">
                <!-- Chat messages area -->
                <div class="col-md-8">
                    <div class="card chat-card shadow-sm">
                        <div class="card-header chat-header">
                            <h4>Chat with <?php echo e($receiverId ? 'User ID: ' . $receiverId : 'Select a user to chat with'); ?></h4>
                        </div>
                        <div class="card-body chat-body">
                            <div class="chat-messages">
                                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="message <?php echo e($message->sender_id === Auth::id() ? 'sent' : 'received'); ?>">
                                        <div class="message-content">
                                            <p><?php echo e($message->message_content); ?></p>
                                            <span class="message-time"><?php echo e($message->created_at->format('H:i')); ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="card-footer chat-footer">
                            <?php if($receiverId): ?>
                                <form action="<?php echo e(route('chat.send')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="input-group">
                                        <input type="hidden" name="receiver_id" value="<?php echo e($receiverId); ?>">
                                        <input type="text" name="message_content" class="form-control"
                                            placeholder="Type a message..." required>
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </div>
                                </form>
                            <?php else: ?>
                                <p>Select a user from the chat history to start a conversation.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Chat history area -->
                <div class="col-md-4">
                    <div class="card chat-history-card shadow-sm">
                        <div class="card-header">
                            <h5>Chat History</h5>
                        </div>
                        <div class="card-body chat-history-body">
                            <?php $__currentLoopData = $chatPartners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('chat', ['receiverId' => $partner->id])); ?>" class="chat-history-item">
                                    <div class="history-item-content">
                                        <div class="history-item-avatar">
                                            <?php if($partner->image): ?>
                                                <img src="<?php echo e(asset('storage/profile_images/' . $partner->image)); ?>"
                                                    alt="User Avatar" class="history-avatar-img">
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('assets/img/team/team_1_1.jpg')); ?>" alt="Default Avatar"
                                                    class="history-avatar-img">
                                            <?php endif; ?>
                                        </div>
                                        <div class="history-item-name">
                                            <strong><?php echo e($partner->name ?? 'User ID: ' . $partner->id); ?></strong>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .chat-container {
            margin-top: 20px;
        }

        .chat-card,
        .chat-history-card {
            max-height: 600px;
            overflow-y: auto;
        }

        .chat-header {
            background-color: #007bff;
            color: white;
            text-align: center;
        }

        .chat-body {
            height: 400px;
            overflow-y: scroll;
            padding: 10px;
            background-color: #f7f7f7;
        }

        .chat-messages .message {
            display: flex;
            margin-bottom: 10px;
        }

        .chat-messages .message.sent {
            justify-content: flex-end;
        }

        .chat-messages .message.received {
            justify-content: flex-start;
        }

        .message-content {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 10px;
            max-width: 60%;
        }

        .message.sent .message-content {
            background-color: #28a745;
        }

        .message-time {
            font-size: 0.75rem;
            margin-top: 5px;
            text-align: right;
        }

        .chat-footer {
            padding: 10px;
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

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/chat/index.blade.php ENDPATH**/ ?>