

<?php $__env->startSection('content'); ?>
<body>
  <style>
    body{
      background-color: rgb(250, 228, 155);
    }
  </style>

<div class = "container">
  <br>
<table class="table table-dark table-striped">
  
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Pengaduan</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Foto</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $pengaduan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pengaduan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($pengaduan->id_pengaduan); ?></td>
      <td><?php echo e($pengaduan->isi_laporan); ?></td>
      <td><?php echo e($pengaduan->tgl_pengaduan); ?></td>
      <td>tidak ada</td>
      <td>
        <a href="hapus_pengaduan/<?php echo e($pengaduan->id_pengaduan); ?>"><button type="button" class="btn btn-outline-danger">Hapus</button></a> 
        <a href="update_pengaduan/<?php echo e($pengaduan->id_pengaduan); ?>"><button type="button" class="btn btn-outline-success">Update</button></a> 
        <a href="detail_pengaduan/<?php echo e($pengaduan->id_pengaduan); ?>"><button type="button" class="btn btn-outline-warning">Detail</button></a>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\belajar-laravel-dhea\resources\views/table.blade.php ENDPATH**/ ?>