<?php $__env->startSection('title', 'Mitra'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h2>Mobilink<span>Mitra</span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Mitra</li>
    <li class="breadcrumb-item">Data Mitra</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Mitra</h5>
                    <span>76 Mitra Terdaftar</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-xl">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Toko</th>
                                <th>Username</th>
                                <th>Nama Pemilik</th>
                                <th>Nomor Hp</th>
                                <th>Tanggal Daftar</th>
                                <th>Status Akun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $mitra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key + 1); ?></td>
                                <td><img style="width: 100px;" src="<?php echo e(asset($item->logo_mitra)); ?>" alt=""></td>
                                <td><?php echo e($item->nama_toko); ?></td>
                                <td><?php echo e($item->username); ?></td>
                                <td><?php echo e($item->nama_lengkap); ?></td>
                                <td><?php echo e($item->nomor_hp); ?></td>
                                <td><?php echo e($item->tgl_daftar); ?></td>
                                <td>
                                    <div class="media-body icon-state switch-outline">
                                        <label class="switch">
                                            <input type="checkbox" <?php echo e($item->status_akun == 0 ? '' : 'checked'); ?> data-username="<?php echo e($item->username); ?>">
                                            <span class="switch-state bg-primary"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('input[type="checkbox"]').on('change', function() {
            var username = $(this).data('username');
            if ($(this).is(':checked')) {
                if (confirm('Apakah Anda ingin mengaktifkan akun ini?')) {
                    // Kirim permintaan AJAX untuk mengubah status_akun menjadi 1
                    $.ajax({
                        type: 'POST',
                        url: '/mobilink/mitra/activate-account',
                        data: {
                            username: username
                        },
                        success: function(response) {
                            console.log(response);
                            // Tambahkan logika untuk menangani respons dari server
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                            // Tambahkan penanganan kesalahan di sini
                        }
                    });
                } else {
                    // Batalkan tindakan jika pengguna membatalkan konfirmasi
                    $(this).prop('checked', false);
                }
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master_mobilink', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webS4\resources\views/mobilink/mitra/index.blade.php ENDPATH**/ ?>