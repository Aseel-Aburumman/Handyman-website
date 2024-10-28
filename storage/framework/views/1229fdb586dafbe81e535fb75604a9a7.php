<?php $__env->startSection('content'); ?>

    <div class="pagetitle">
      <h1>Stores Control Center</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
          <li class="breadcrumb-item ">Stores Control Center</li>
          <li class="breadcrumb-item active">Dashboard</li>

        </ol>
      </nav>
    </div>

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Total Stores -->
            <div class="col-xxl-3 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Total Stores <span>| Active</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-shop"></i>
                        </div>
                        <div class="ps-3">
                            <h6><?php echo e($totalStores); ?></h6>
                            <span class="text-muted small pt-2 ps-1">Active Stores: <?php echo e($activeStores); ?></span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- End Total Stores -->

            <!-- Total Sales (Monthly + Revenue) -->
            <div class="col-xxl-3 col-md-6">
              <div class="card info-card revenue-card">
                <div class="card-body">
                    <h5 class="card-title">Total Sales <span>| This Month</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart-check"></i>
                        </div>
                        <div class="ps-3">
                            <h6><?php echo e($totalMonthlySales); ?></h6>
                            <span class="text-muted small pt-2 ps-1">Revenue: $<?php echo e(number_format($monthlyRevenue, 2)); ?></span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- End Total Sales (Monthly + Revenue) -->

            <!-- Total Sales (Weekly + Revenue) -->
            <div class="col-xxl-3 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Total Sales <span>| This Week</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="ps-3">
                            <h6><?php echo e($totalWeeklySales); ?></h6>
                            <span class="text-muted small pt-2 ps-1">Revenue: $<?php echo e(number_format($weeklyRevenue, 2)); ?></span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- End Total Sales (Weekly + Revenue) -->

            <!-- Total Products -->
            <div class="col-xxl-3 col-md-6">
              <div class="card info-card sales-card">
                <div class="card-body">
                    <h5 class="card-title">Total Products</h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <div class="ps-3">
                            <h6><?php echo e($totalProducts); ?></h6>
                            <span class="text-muted small pt-2 ps-1">Available Products</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- End Total Products -->

            <!-- Top Rated Products -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card top-products-card">
                <div class="card-body">
                    <h5 class="card-title">Top Rated Products</h5>
                    <ul>
                        <?php $__currentLoopData = $topRatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($product->name); ?> (Rating: <?php echo e($product->rating); ?>)</li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
              </div>
            </div>
            <!-- End Top Rated Products -->

            <!-- Total New Customers (Monthly) -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">New Customers <span>| This Month</span></h5>
                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                            <h6><?php echo e($newCustomersThisMonth); ?></h6>
                            <span class="text-muted small pt-2 ps-1">Customers Gained</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- End Total New Customers (Monthly) -->

            <!-- Line Chart -->
            <div class="col-xxl-6 col-md-12">
              <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sales Overview <span>| Monthly</span></h5>
                    <div id="lineChart"></div>
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            new ApexCharts(document.querySelector("#lineChart"), {
                                series: [{
                                    name: "Total Sales",
                                    data: <?php echo json_encode($monthlySalesData, 15, 512) ?>
                                }],
                                chart: {
                                    height: 350,
                                    type: 'line',
                                    zoom: {
                                        enabled: false
                                    }
                                },
                                dataLabels: {
                                    enabled: false
                                },
                                stroke: {
                                    curve: 'smooth'
                                },
                                grid: {
                                    row: {
                                        colors: ['#f3f3f3', 'transparent'],
                                        opacity: 0.5
                                    },
                                },
                                xaxis: {
                                    categories: <?php echo json_encode($salesMonths, 15, 512) ?>,
                                }
                            }).render();
                        });
                    </script>
                </div>
              </div>
            </div>
            <!-- End Line Chart -->
          </div>
        </div>
        <!-- End Left side columns -->

      </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/store_control_center/dashboard.blade.php ENDPATH**/ ?>