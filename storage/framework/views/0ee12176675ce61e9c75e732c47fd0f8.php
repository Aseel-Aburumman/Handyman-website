<?php $__env->startSection('content'); ?>

<div class="pagetitle">
    <h1>Ticket Management</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
            <li class="breadcrumb-item active">Ticket Management</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">All Tickets</h5>

                <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($ticket->id); ?></th>
                                <td><?php echo e($ticket->subject); ?></td>
                                <td><?php echo e($ticket->description); ?></td>
                                <td>
                                    <form action="<?php echo e(route('admin.update_ticket_status', $ticket->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <select name="status_id" class="form-select" onchange="this.form.submit()">
                                            <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($status->id); ?>" <?php echo e($ticket->status_id == $status->id ? 'selected' : ''); ?>>
                                                    <?php echo e($status->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </form>
                                </td>
                                <td><?php echo e(\Carbon\Carbon::parse($ticket->created_at)->format('Y-m-d')); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.view_ticket', $ticket->id)); ?>" class="btn btn-primary">View</a>
                                    <a href="<?php echo e(route('admin.message_user', ['user_id' => $ticket->user_id, 'ticketId' => $ticket->id])); ?>" class="btn btn-primary">Message User</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/ticket_manage.blade.php ENDPATH**/ ?>