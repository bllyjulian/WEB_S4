<?php $__env->startSection('title', 'Customer'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h2>B-Rental<span>Customer</span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Customer</li>
    <li class="breadcrumb-item">Data Customer</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Customer</h5>
                    <span>21 Customer Terdaftar</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-xl">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Nomor Hp</th>
                                <th>Tanggal Lahir</th>
                                <th>Domisili</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key + 1); ?></td>
                                <td><?php echo e($item->username_mb); ?></td>
                                <td><?php echo e($item->nama); ?></td>
                                <td><?php echo e($item->email); ?></td>
                                <td><?php echo e($item->nomor_hp_user); ?></td>
                                <td><?php echo e($item->tgl_lahir); ?></td>
                                <td><?php echo e($item->domisili); ?></td>
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

<?php echo $__env->make('layouts.simple.master_mitra', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webS4\resources\views/admin/customer/index.blade.php ENDPATH**/ ?>