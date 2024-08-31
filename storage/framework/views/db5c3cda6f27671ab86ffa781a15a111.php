<?php $__env->startSection('content'); ?>


    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>

          <li class="breadcrumb-item ">User Control Center</li>
          <li class="breadcrumb-item active">List of Customers</li>
        </ol>
      </nav>
    </div>

    

    <section class="section dashboard">
      <div class="row">


        <div class="card">
            <div class="card-body">
                <h5 class="card-title">List Of Customers</h5>

                <!-- Table with hoverable rows -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rating</th>
                            <th scope="col">Date Created</th>
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

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/manage_customers.blade.php ENDPATH**/ ?>