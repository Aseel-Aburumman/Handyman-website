<?php $__env->startSection('content'); ?>

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                <li class="breadcrumb-item">User Control Center</li>
                <li class="breadcrumb-item active">List of Customers</li>
            </ol>
        </nav>
    </div>
    

    <section class="section dashboard">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title">List Of Customers</h5>
<a href="<?php echo e(route('admin.create_customer')); ?>" class="btn btn-success mb-3">
                            <i class="fa-solid fa-user-plus"></i> Add New Customer
                        </a>
                    </div>

                    <form action="<?php echo e(route('admin.manage_customers')); ?>" method="GET" class="d-flex mb-3">
                        <input type="text" name="search" class="form-control" placeholder="Search by name..." value="<?php echo e(request('search')); ?>">
                        <button type="submit" class="btn btn-primary ms-2">Search</button>
                        <a href="<?php echo e(route('admin.manage_customers')); ?>" class="btn btn-secondary ms-2">Reset</a>
                    </form>
                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Rating</th>
                                <th scope="col">Date Created</th>
                                <th scope="col" class="actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <th scope="row"><?php echo e($user->id); ?></th>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->rating); ?></td>
                                    <td><?php echo e($user->created_at->format('Y-m-d')); ?></td>
                                    <td class="actions">
                                        <a href="<?php echo e(route('admin.view_customer', ['id' => $user->id])); ?>" class="fa-solid fa-eye"></a>
                                        <a href="<?php echo e(route('admin.edit_customer', ['id' => $user->id])); ?>" class="fa-solid fa-pencil"></a>
                                        <form action="<?php echo e(route('admin.delete_customer', ['id' => $user->id])); ?>" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this customer?');">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" style="background:none; border:none; color:#007bff; cursor:pointer;">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/customers/manage_customers.blade.php ENDPATH**/ ?>