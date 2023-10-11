 

  <?php $__env->startSection('content'); ?>
<body>
<div class="container" style="margin-top:40px;">
<div class="mb-3">
  <form action="isi_pengaduan"method="POST" enctype="multipart/form-data">
    <?php echo method_field("POST"); ?>

<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Tulis Laporan Anda</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"name="isi_pengaduan"></textarea>

  <?php $__errorArgs = ['isi_pengaduan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
//validate
  <div> {( $message  )} </div>     
  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="mb-3">
  <label for="inputGroupFile02" class="form-label">Foto</label>
  <input type="file" class="form-control" id="inputGroupFile02" name="foto">
</div>
<button type="submit" class="btn btn-primary">Kirim</button>
</form>
</div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar-laravel-dhea\resources\views/isi_pengaduan.blade.php ENDPATH**/ ?>