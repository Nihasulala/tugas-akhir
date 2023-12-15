<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="css/reg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

<?php $__env->startSection('content'); ?>
  <div class="mask d-flex align-items-center h-100 ">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h4 class="text-uppercase text-center mb-5"style="color: #435334;" >REGISTER</h4>
              <div class="card-body">
                  <?php if(Session::has('success')): ?>
                    <div class="alert alert-success" role="alert">
                      <?php echo e(Session::get('success')); ?>

                    </div>
                    <?php endif; ?>
              <form action="<?php echo e(route('register')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                <div class="form-outline mb-4">
                  <input type="text" id="nama" class="form-control form-control-lg" name="nama" placeholder="Your Name" required autofocus>
                  <?php if($errors->has('nama')): ?>
                  <span class="text-danger"><?php echo e($errors->first('nama')); ?></span>
                  <?php endif; ?>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="email" class="form-control form-control-lg" name="email" placeholder="Email Addres" required autofocus>
                  <?php if($errors->has('email')): ?>
                  <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                  <?php endif; ?>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="password" class="form-control form-control-lg" name="password" placeholder="Password"required>
                  <?php if($errors->has('password')): ?>
                  <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                  <?php endif; ?>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g"style="color: #435334;">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success col-12">Register</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel101\resources\views/register.blade.php ENDPATH**/ ?>