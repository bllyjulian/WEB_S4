

<?php $__env->startSection('header-title', 'Laporan Pendaki'); ?>

<?php $__env->startSection('content'); ?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
        <?php $__currentLoopData = $laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xl-4">
        <div class="card">
            <div class="text-center">
                <?php if($lap->jenis_laporan == 'Tersesat'): ?>
                <img src="<?php echo e(asset('htd/images/tersesat.png')); ?>" width="180px" alt="">
                <?php elseif($lap->jenis_laporan == 'Butuh alat kesehatan'): ?>
                <img src="<?php echo e(asset('htd/images/butuhkesehatan.png')); ?>" width="180px" alt="">
                <?php elseif($lap->jenis_laporan == 'Kehilangan Rekan'): ?>
                <img src="<?php echo e(asset('htd/images/menghilang.png')); ?>" width="180px" alt="">
                <?php else: ?>
                <img src="<?php echo e(asset('htd/images/default.png')); ?>" width="180px" alt="">
                <?php endif; ?>
            </div>
            <div class="card-header">
                <h5 class="card-title"><?php echo e($lap->pendaki->nama); ?></h5>
                <!-- <h5 class="card-title"><?php echo e($lap->id_pendaki); ?></h5> -->
            </div>
            <div class="card-body">
                <p class="card-text"><?php echo e($lap->jenis_laporan); ?></p>
            </div>
            <div class="card-footer d-sm-flex justify-content-between align-items-center">
                <div class="card-footer-link mb-4 mb-sm-0">
                    <p class="card-text text-dark d-inline">
                        <?php echo e(\Carbon\Carbon::parse($lap->timestamp)->locale('id')->diffForHumans()); ?>

                    </p>
                </div>
                <?php if($lap->pendaki): ?>
                                <a href="<?php echo e(route('lacak', ['id_pendaki' => $lap->pendaki->id_pendaki])); ?>" class="btn btn-primary">Lacak</a>
                            <?php else: ?>
                                <span class="text-danger">Pendaki tidak ditemukan</span>
                            <?php endif; ?>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutshtd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webS4\resources\views/htdgemastik/laporan/index.blade.php ENDPATH**/ ?>