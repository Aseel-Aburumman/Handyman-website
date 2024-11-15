<?php $__env->startSection('content'); ?>


    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>

    

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                

                <div class="card-body">
                    <h5 class="card-title">Sales <span>| Week</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-cart"></i>
                        </div>
                        <div class="ps-3">
                            <h6><?php echo e($currentWeekTransactions); ?></h6>
                            <?php if($percentageChange >= 0): ?>
                                <span class="text-success small pt-1 fw-bold"><?php echo e($percentageChange); ?>%</span>
                                <span class="text-muted small pt-2 ps-1">increase</span>
                            <?php else: ?>
                                <span class="text-danger small pt-1 fw-bold"><?php echo e(abs($percentageChange)); ?>%</span>
                                <span class="text-muted small pt-2 ps-1">decrease</span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>


              </div>
            </div>
            

            
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">


                <div class="card-body">
                    <h5 class="card-title">Revenue <span>| This Month</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <div class="ps-3">
                            <h6>JD<?php echo e(number_format($currentMonthRevenue, 2)); ?></h6>
                            <?php if($percentageChange >= 0): ?>
                                <span class="text-success small pt-1 fw-bold"><?php echo e($percentageChange); ?>%</span>
                                <span class="text-muted small pt-2 ps-1">increase</span>
                            <?php else: ?>
                                <span class="text-danger small pt-1 fw-bold"><?php echo e(abs($percentageChange)); ?>%</span>
                                <span class="text-muted small pt-2 ps-1">decrease</span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>


              </div>
            </div>
            

            
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">



                <div class="card-body">
                    <h5 class="card-title">Customers <span>| This Year</span></h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                            <h6><?php echo e($currentYearUsers); ?></h6>
                            <?php if($percentageChange >= 0): ?>
                                <span class="text-success small pt-1 fw-bold"><?php echo e($percentageChange); ?>%</span>
                                <span class="text-muted small pt-2 ps-1">increase</span>
                            <?php else: ?>
                                <span class="text-danger small pt-1 fw-bold"><?php echo e(abs($percentageChange)); ?>%</span>
                                <span class="text-muted small pt-2 ps-1">decrease</span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

              </div>

            </div>
            

            <!-- Reports -->
            <div class="col-12" >
              <div class="card">



                <div class="card-body">
                    <h5 class="card-title">Reports <span>/Month</span></h5>

                    
                    <div id="reportsChart" style="HEIGHT: 615PX;"></div>


                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            new ApexCharts(document.querySelector("#reportsChart"), {
                                series: [{
                                    name: 'Gigs',
                                    data: <?php echo json_encode($gigsData, 15, 512) ?>,
                                }, {
                                    name: 'Sales',
                                    data: <?php echo json_encode($salesData, 15, 512) ?>,
                                }, {
                                    name: 'New Users',
                                    data: <?php echo json_encode($usersData, 15, 512) ?>
                                }],
                                chart: {
                                    height: 615,
                                    type: 'area',
                                    toolbar: {
                                        show: false
                                    },
                                },
                                markers: {
                                    size: 4
                                },
                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                fill: {
                                    type: "gradient",
                                    gradient: {
                                        shadeIntensity: 1,
                                        opacityFrom: 0.3,
                                        opacityTo: 0.4,
                                        stops: [0, 90, 100]
                                    }
                                },
                                dataLabels: {
                                    enabled: false
                                },
                                stroke: {
                                    curve: 'smooth',
                                    width: 2
                                },
                                xaxis: {
                                    type: 'datetime',
                                    categories: <?php echo json_encode($dates, 15, 512) ?>
                                },
                                tooltip: {
                                    x: {
                                        format: 'dd/MM/yy'
                                    },
                                }
                            }).render();
                        });
                    </script>
                    
                </div>


              </div>
            </div>
            

            
            <div class="col-6 col-md-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Recent Sales <span>| Week</span></h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                
                                <th scope="col">Customer</th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $recentSales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    
                                    <td><?php echo e($sale->user->name); ?></td>
                                    <td><a href="#" class="text-primary"><?php echo e($sale->product->name); ?></a></td>
                                    <td>$<?php echo e($sale->total_amount); ?></td>
                                    <td>
                                        <?php if($sale->status_id == 15): ?>
                                            <span class="badge bg-warning">Pending</span>
                                        <?php elseif($sale->status_id == 16): ?>
                                            <span class="badge bg-success">Confirmed</span>
                                        <?php elseif($sale->status_id == 17): ?>
                                            <span class="badge bg-success">Delivered</span>
                                        <?php elseif($sale->status_id == 18): ?>
                                            <span class="badge bg-danger">Canceled</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>


              </div>
            </div>
            

            
            <div class="col-6 col-md-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                    <h5 class="card-title">Top Selling <span>| This Month</span></h5>

                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Sold</th>
                                <th scope="col">Revenue</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $topSellingProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <td>
                                        <a href="#" class="text-primary fw-bold"><?php echo e($products[$sale->product_id]->name); ?></a>
                                    </td>
                                    <td>$<?php echo e(number_format($products[$sale->product_id]->price, 2)); ?></td>
                                    <td class="fw-bold"><?php echo e($sale->total_sold); ?></td>
                                    <td>$<?php echo e(number_format($sale->total_revenue, 2)); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>


              </div>
            </div>
            

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        

      </div>
    </section>



  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>