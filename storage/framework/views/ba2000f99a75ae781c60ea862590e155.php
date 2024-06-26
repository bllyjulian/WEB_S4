<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $__env->yieldContent('title', 'HikerTrack'); ?></title>
    <?php echo $__env->make('layoutshtd.app.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
    <?php echo $__env->yieldContent('style'); ?>

</head>
<body>
    <!-- Header -->


    <!-- Sidebar -->


    <!-- Main content -->

    <div id="main-wrapper">
    <?php echo $__env->make('layoutshtd.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layoutshtd.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('layoutshtd.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php echo $__env->make('layoutshtd.app.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   
</body>
</html>
<?php /**PATH C:\xampp\htdocs\webS4\resources\views/layoutshtd/master.blade.php ENDPATH**/ ?>