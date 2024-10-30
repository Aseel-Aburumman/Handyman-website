<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title"><?php echo e(__('messages.StoreDashboard')); ?></h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('messages.Home')); ?></a></li>
                    <li><?php echo e(__('messages.StoreDashboard')); ?></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="overflow-hidden space" id="service-sec">

        <div class="container">
            <div class="row">
                <!-- Statistics Section -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <i class="fas fa-users"></i> <?php echo e(__('messages.Customers')); ?>


                            </h5>
                            <p class="card-text"><?php echo e($customerCount); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <i class="fas fa-file-invoice-dollar"></i> # <?php echo e(__('messages.Transactions')); ?>


                            </h5>
                            <p class="card-text"><?php echo e($transactionCount); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <i class="fas fa-box"></i> <?php echo e(__('messages.QuantityOrdered')); ?>


                            </h5>
                            <p class="card-text"><?php echo e(number_format($totalQuantityOrdered)); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <i class="fas fa-user-tie"></i> <?php echo e(__('messages.TopCustomer')); ?>


                            </h5>
                            <p class="card-text"><?php echo e($topCustomer); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trend by Customer Visits & Quantity Ordered -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-chart-line"></i> <?php echo e(__('messages.Trend')); ?>

                        </div>
                        <div class="card-body">
                            <canvas id="orderTrendChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Customers to Target -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-bullseye"></i> <?php echo e(__('messages.CustomersTarget')); ?>

                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <?php $__currentLoopData = $customersToTarget; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer => $count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span><?php echo e($customer); ?></span>
                                        <span><?php echo e($count); ?> <?php echo e(__('messages.orders')); ?></span>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Customers with Last Purchase Date -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-calendar-alt"></i> <?php echo e(__('messages.CustomersPurchase')); ?>

                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('messages.CustomerName')); ?></th>
                                        <th><?php echo e(__('messages.PurchaseDate')); ?></th>
                                        <th><?php echo e(__('messages.LastPurchase')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $customersWithLastPurchase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($customer['name']); ?></td>
                                            <td><?php echo e($customer['last_purchase_date']); ?></td>
                                            <td><?php echo e($customer['days_since_last_purchase']); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('orderTrendChart').getContext('2d');
        var orderTrendChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($months, 15, 512) ?>,
                datasets: [{
                    label: 'Quantity Ordered',
                    data: <?php echo json_encode($quantities, 15, 512) ?>,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                }]
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.inside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/shops/index.blade.php ENDPATH**/ ?>