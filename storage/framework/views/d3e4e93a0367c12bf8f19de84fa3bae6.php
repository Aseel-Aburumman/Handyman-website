<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper " data-bg-src="<?php echo e(asset('assets/img/bg/breadcumb-bg.jpg')); ?>">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">All Shops</h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li>All Shops</li>
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
                            <h5 class="card-title">Customers</h5>
                            <p class="card-text"><?php echo e($customerCount); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title"># Transactions</h5>
                            <p class="card-text"><?php echo e($transactionCount); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Quantity Ordered</h5>
                            <p class="card-text"><?php echo e(number_format($totalQuantityOrdered)); ?>K</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Top Customer</h5>
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
                            Trend by Customer Visits & Qty Ordered
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
                            Customers to Target
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <?php $__currentLoopData = $customersToTarget; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer => $count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span><?php echo e($customer); ?></span>
                                        <span><?php echo e($count); ?> orders</span>
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
                            Customers with Last Purchase Date
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Last Purchase Date</th>
                                        <th>Days Since Last Purchase</th>
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