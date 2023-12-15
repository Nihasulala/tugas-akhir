<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/log.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

<?php $__env->startSection('content'); ?>
<section class="vh-100">
  <div class="container py-5 h-100" >
    <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="card-body">
        <?php if(Session::has('error')): ?>
            <div class="alert alert-danger" role="alert">
        <?php echo e(Session::get('error')); ?>

        </div>
        <?php endif; ?>
        <div class="row">

          <div class="col-md-4 col-lg-7 col-xl-6">
            <img src="img/masuk.png"
              class="img-fluid" alt="Phone image" style="width: 450px">
          </div>
          <div class="col-md-8 col-lg-5 col-xl-5 offset-xl-1 ">
            <h4 class="card-title text-center"style="color: #435334;"><b>LOGIN</b></h4>
            <form action="<?php echo e(route('login')); ?>" method="POST" class="mt-5">
                <?php echo csrf_field(); ?>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="email" class="form-control form-control-lg" name="email" placeholder="Email Addres" required autofocus>
                <?php if($errors->has('email')): ?>
                <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                <?php endif; ?>
              </div>
    
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="password" class="form-control form-control-lg" name="password" placeholder="Password" required>
                <?php if($errors->has('password')): ?>
                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                <?php endif; ?>
              </div>
    
              <div class="d-flex justify-content-around align-items-center mb-4">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                  <label class="form-check-label" for="form1Example3"> Remember me </label>
                </div>
                <a href="#!">Forgot password?</a>
              </div>
    
              <!-- Submit button -->
              <button type="submit" class="btn btn-success col-12">Login</button>
            </form>
          </div>
        </div>
    </div>
  </div>
</section>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel101\resources\views/login.blade.php ENDPATH**/ ?>