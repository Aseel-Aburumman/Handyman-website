<?php $__env->startSection('content'); ?>
    <div class="pagetitle">
        <h1>Ticket Details</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                <li class="breadcrumb-item active">Ticket Details</li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Ticket #<?php echo e($ticket->id); ?></h5>

                    <p><strong>Subject:</strong> <?php echo e($ticket->subject); ?></p>
                    <p><strong>Description:</strong> <?php echo e($ticket->description); ?></p>
                    <p><strong>Status:</strong> <?php echo e($ticket->status->name); ?></p>
                    <p><strong>Created At:</strong> <?php echo e(\Carbon\Carbon::parse($ticket->created_at)->format('Y-m-d')); ?></p>

                    <a href="<?php echo e(route('chatadmin', ['receiverId' => $ticket->user_id, 'ticketId' =>$ticket->id])); ?>" class="btn btn-primary">Message
                        User</a>
                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/view_ticket.blade.php ENDPATH**/ ?>