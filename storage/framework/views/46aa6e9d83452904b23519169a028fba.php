<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<?php $__env->startSection('content'); ?>
<body>
<body style="background: lightgray">
    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4" style="color: #435334;">CONTACT FORM</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                    <a href="<?php echo e(route('contact.create')); ?>" class="btn btn-md btn-success mb-3">KIRIM PESAN</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" style="color: #435334;">NAMA</th>
                                    <th scope="col" style="color: #435334;">EMAIL</th>
                                    <th scope="col" style="color: #435334;">TENTANG</th>
                                    <th scope="col" style="color: #435334;">PESAN</th>
                                    <th scope="col" style="color: #435334;">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                       
                                        <td><?php echo e($c->nama); ?></td>
                                        <td><?php echo e($c->email); ?></td>
                                        <td><?php echo e($c->tentang); ?></td>
                                        <td><?php echo e($c->pesan); ?></td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('products.destroy', $c->id)); ?>" method="POST">
                                                <a href="<?php echo e(route('products.show', $c->id)); ?>" class="btn btn-sm btn-primary">BALAS</a>
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit"class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <div class="alert alert-danger">
                                        Pesan belum Tersedia.
                                    </div>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <?php echo e($contacts->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel101\resources\views/contact/index.blade.php ENDPATH**/ ?>