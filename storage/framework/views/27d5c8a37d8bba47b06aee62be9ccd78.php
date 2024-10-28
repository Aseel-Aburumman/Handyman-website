<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('auth/css/app.css')); ?>">
</head>

<body>
    <div class="content">

        <div class="auth-container"
            style="background-image: url('<?php echo e(asset('assets/img/login/2.jpg')); ?>'); background-size: cover;">
            <div class="auth-box">
                <div class="auth-box-inner">
                    <img class="loginlogo" src="<?php echo e(asset('assets/img/logoHorizantal.png')); ?>" alt="Rakar">

                    <h2>Register</h2>
                    <form method="POST" action="<?php echo e(route('registerUser')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" required>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                    <p>Already have an account? <a href="<?php echo e(route('login')); ?>">Log in</a></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/auth/register.blade.php ENDPATH**/ ?>