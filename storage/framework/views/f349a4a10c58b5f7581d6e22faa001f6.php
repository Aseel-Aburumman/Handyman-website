<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Portal - Handyman Service</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('admin/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('admin/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('admin/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('admin/vendor/quill/quill.snow.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('admin/vendor/quill/quill.bubble.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('admin/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('admin/vendor/simple-datatables/style.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('admin/css/style.css')); ?>" rel="stylesheet">

<script src="https://kit.fontawesome.com/5009c5b097.js" crossorigin="anonymous"></script>
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" action="<?php echo e(route('Admin_register')); ?>" method="POST" novalidate>
                    <?php echo csrf_field(); ?> <!-- Laravel CSRF token -->
                    <div class="col-12">
                        <label for="yourName" class="form-label">Your Name</label>
                        <input type="text" name="name" class="form-control" id="yourName" required>
                        <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                        <label for="yourEmail" class="form-label">Your Email</label>
                        <input type="email" name="email" class="form-control" id="yourEmail" required>
                        <div class="invalid-feedback">Please enter a valid Email address!</div>
                    </div>

                    <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                        <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                        <div class="invalid-feedback">Please confirm your password!</div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>

                    <div class="col-12">
                        <p class="small mb-0">Already have an account? <a href="pages-login.html">Log in</a></p>
                    </div>
                </form>


                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  <script src="<?php echo e(asset('admin/vendor/apexcharts/apexcharts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/vendor/chart.js/chart.umd.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/vendor/echarts/echarts.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/vendor/quill/quill.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/vendor/simple-datatables/simple-datatables.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/vendor/tinymce/tinymce.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/vendor/php-email-form/validate.js')); ?>"></script>
  <!-- Add this to the head or before the closing </body> tag -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('admin/js/main.js')); ?>"></script>

</body>

</html>

<?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/authAdmin/register.blade.php ENDPATH**/ ?>