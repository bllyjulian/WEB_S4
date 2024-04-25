<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Poco admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
      <meta name="keywords" content="admin template, Poco admin template, dashboard template, flat admin template, responsive admin template, web app (Laravel 8)">
      <meta name="author" content="pixelstrap">
      <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
      <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
      <title>Mobilink - <?php echo $__env->yieldContent('title'); ?></title>
      <?php echo $__env->make('layouts.app.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
      <?php echo $__env->yieldContent('style'); ?>
   </head>
   <body>
      <!-- Loader starts-->
      <div class="loader-wrapper">
         <div class="typewriter">
            <h1>New Era Admin Loading..</h1>
         </div>
      </div>
      <!-- Loader ends-->
      <!-- page-wrapper Start-->
      <div class="page-wrapper">
           <?php echo $__env->yieldContent('content'); ?>
      </div>
      <?php echo $__env->make('layouts.app.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </body>
</html>
<?php /**PATH C:\xampp\htdocs\poco\resources\views/layouts/app/master.blade.php ENDPATH**/ ?>