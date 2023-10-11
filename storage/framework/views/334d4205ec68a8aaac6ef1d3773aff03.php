<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UPDATE</title>
</head>
<body>
<link rel="stylesheet" href=<?php echo e(asset("bs/css/bootstrap.min.css")); ?>>
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Update</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
         <div class= container>
          <a class="nav-link active" aria-current="page" a href="<?php echo e(url('table')); ?>">Bek</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</nav>
<style>
  body{
    
    background-color: grey;
  }
</style>
<div class="container" style="margin-top:40px;">
<div class="mb-3">
    <form action=<?php echo e(url("/update_pengaduan/$pengaduan->id_pengaduan")); ?> method="POST" enctype="multipart/form-data">
      <?php echo method_field('POST'); ?>
      <?php echo csrf_field(); ?>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Isi Laporan Anda</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"name="isi_laporan"><?php echo e($pengaduan->isi_laporan); ?></textarea>
  <?php $__errorArgs = [''];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
      <div><?php echo e($message); ?></div>
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<label for="inputGroupFile02" class="form-label">Foto</label>
<div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02" name="foto">
</div>
<button type="submit" class="btn btn-dark" style="padding:6px 40px;">Kirim</button>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\belajar-laravel-dhea\resources\views/update.blade.php ENDPATH**/ ?>