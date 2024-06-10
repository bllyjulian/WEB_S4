<?php $__env->startSection('title', 'Data Sewa'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h2>Data Sewa</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Mobil</li>
    <li class="breadcrumb-item">Data Sewa</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="row">
      <?php $__currentLoopData = $databooking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
               <?php if($mobil['status'] == 'Belum Diambil'): ?>
            <div class="ribbon ribbon-danger"><?php echo e($mobil['status']); ?></div>
        <?php elseif($mobil['status'] == 'Selesai Disewa'): ?>
            <div class="ribbon ribbon-success ribbon-right"><?php echo e($mobil['status']); ?></div>
        <?php elseif($mobil['status'] == 'Sedang Disewa'): ?>
            <div class="ribbon ribbon-clip ribbon-warning"><?php echo e($mobil['status']); ?></div>
        <?php endif; ?>
        <div style="height: 200px;" class="ftmobil">
        <img class="img-fluid" src="<?php echo e(asset($mobil['foto_mobil'])); ?>" alt="">
        </div>
                
                  <div class="product-hover">
                     <ul>
                  <a href="<?php echo e(route('admin.detailsewa.riwayatsewa', ['id' => $mobil['id_mobil'], 'id_booking' => $mobil['id_booking'], 'username_mb' => $mobil['username_mb']])); ?>">
    <li><i class="icon-eye"></i></li>
</a>

                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4><?php echo e($mobil['nama_mobil']); ?></h4>
                  <h6><?php echo e($mobil['tipe']); ?></h6>
                  <!-- <h6><?php echo e($mobil['id_booking']); ?></h6> -->
                  <p><?php echo e($mobil['kapasitas_penumpang']); ?> penumpang, <?php echo e($mobil['warna']); ?></p>
                  <div class="product-price">
                     <del>Rp. <?php echo e(number_format($mobil['harga_sewa_perhari'] * 1.2, 0, ',', '.')); ?></del> Rp. <?php echo e(number_format($mobil['harga_sewa_perhari'], 0, ',', '.')); ?>

                  </div>
                  <div class="text-right mt-4">
                     <span class="text-primary">Disewa Oleh <?php echo e($mobil['username_mb']); ?></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master_mitra', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webS4\resources\views/admin/detailsewa/index.blade.php ENDPATH**/ ?>