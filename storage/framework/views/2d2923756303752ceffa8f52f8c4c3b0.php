<?php $__env->startSection('title', 'error-404'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- error-404 start-->
<div class="error-wrapper">
   <div class="container">
      <img class="img-100" src="<?php echo e(asset('assets/images/other-images/sad.png')); ?>" alt="">
      <div class="error-heading">
         <h2 class="headline font-danger">404</h2>
      </div>
      <div class="col-md-8 offset-md-2">
         <p class="sub-content">Halaman yang ingin Anda buka saat ini tidak tersedia. Ini mungkin terjadi karena halaman tersebut tidak ada atau telah dipindahkan.</p>
      </div>
      <div><a class="btn btn-danger-gradien btn-lg" href="<?php echo e(asset('')); ?>">KEMBALI KE HALAMAN AWAL</a></div>
   </div>
</div>
<!-- error-404 end      -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webS4\resources\views/errors/404.blade.php ENDPATH**/ ?>