<?php $__env->startSection('content'); ?>

<div class="pagetitle">
    <h1>Create New Handyman</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
            <li class="breadcrumb-item ">User Control Center</li>
            <li class="breadcrumb-item active">Create Handyman</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">New Handyman Information</h5>

                <form class="row g-3" method="POST" action="<?php echo e(route('admin.store_handyman')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="col-md-12">
                        <label for="inputName" class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" id="inputName" value="<?php echo e(old('name')); ?>">
                    </div>
                    <div class="col-md-12">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" value="<?php echo e(old('email')); ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPasswordConfirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="inputPasswordConfirmation">
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Create Handyman</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/create_handyman.blade.php ENDPATH**/ ?>