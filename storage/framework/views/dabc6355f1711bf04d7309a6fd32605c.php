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
      <?php $__currentLoopData = $mobils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="<?php echo e(asset($mobil->foto_mobil)); ?>" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <a href="<?php echo e(route('admin.detailsewa.riwayatsewa', ['id' => $mobil->id_mobil])); ?>">
                           <li><i class="icon-eye"></i></li>
                        </a>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4><?php echo e($mobil->nama_mobil); ?></h4>
                  <p><?php echo e($mobil->kapasitas_penumpang); ?> penumpang, <?php echo e($mobil->warna); ?></p>
                  <div class="product-price">
                     <del>Rp. <?php echo e(number_format($mobil->harga_sewa_perhari * 1.2, 0, ',', '.')); ?></del> Rp. <?php echo e(number_format($mobil->harga_sewa_perhari, 0, ',', '.')); ?>

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