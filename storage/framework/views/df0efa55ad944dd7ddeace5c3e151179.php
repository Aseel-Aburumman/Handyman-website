<?php $__env->startSection('content'); ?>

<div class="pagetitle">
    <h1>Gig Details</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
            <li class="breadcrumb-item ">Gigs Control Center</li>
            <li class="breadcrumb-item active">Reported Gig
            </li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            
            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">Gig Details</h5>
                    <div class="row mb-2">
                        <div class="col-md-4 label">Title</div>
                        <div class="col-md-8"><?php echo e($gig->title); ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4 label">Description</div>
                        <div class="col-md-8"><?php echo e($gig->description); ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4 label">Location</div>
                        <div class="col-md-8"><?php echo e($gig->location); ?></div>
                    </div>

                    <h5 class="card-title">Reported By User</h5>
                    <div class="row mb-2">
                        <div class="col-md-4 label">User ID</div>
                        <div class="col-md-8"><?php echo e($gig->user->name); ?> (ID: <?php echo e($gig->user->id); ?>)</div>
                    </div>

                    <h5 class="card-title">Report Message</h5>
                    <div class="row mb-2">
                        <div class="col-md-4 label">Message</div>
                        <div class="col-md-8"><?php echo e($report->message); ?></div>
                    </div>
                    <h5 class="card-title">Last 5 Reviews</h5>
                    <?php if($clientReviews && !$clientReviews->isEmpty()): ?>
                        <ul>
                            <?php $__currentLoopData = $clientReviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($review->review); ?> (Rating: <?php echo e($review->rating); ?>)</li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php else: ?>
                        <p>No reviews found for this client.</p>
                    <?php endif; ?>


                    <h5 class="card-title">Chat History</h5>
                    <?php if($chatHistory->isEmpty()): ?>
                        <p>No chat history after the gig creation found for this user .</p>
                    <?php else: ?>
                        <ul>
                            <?php $__currentLoopData = $chatHistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><strong>From:</strong> <?php echo e($message->sender->name); ?> to <?php echo e($message->receiver->name); ?> - <?php echo e($message->message_content); ?> (<?php echo e($message->created_at->format('Y-m-d H:i:s')); ?>)</li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php endif; ?>
                    <div class="d-flex flex-row justify-content-center">
                        <form action="<?php echo e(route('admin.resolve', $gig->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-success">Resolve the proplem</button>
                        </form>
                        
                        <form action="<?php echo e(route('admin.cancel_gig', $gig->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-danger">Cancel the gig and notify the client</button>
                        </form>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/gigs/resolve_gig.blade.php ENDPATH**/ ?>