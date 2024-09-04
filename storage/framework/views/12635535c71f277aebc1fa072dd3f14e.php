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

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Messages with <?php echo e($recipient->name); ?></h5>

                <div class="message">
                    <?php $__currentLoopData = $chatMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chatMessage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($chatMessage->sender_id == $adminId): ?>
                            <p><strong>You</strong>: <?php echo e($chatMessage->message_content); ?></p>
                        <?php else: ?>
                            <p><strong><?php echo e($chatMessage->sender->name); ?></strong>: <?php echo e($chatMessage->message_content); ?></p>
                        <?php endif; ?>
                        <span><?php echo e($chatMessage->created_at->format('Y-m-d H:i')); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <form action="<?php echo e(route('admin.send_message', $recipient->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input type="hidden" name="ticket_id" value="<?php echo e($ticketDetail->id); ?>">
                        <textarea name="message_content" class="form-control" rows="3" placeholder="Type your message..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Send</button>
                </form>

            </div>
        </div>

    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/message_center.blade.php ENDPATH**/ ?>