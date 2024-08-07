

<?php $__env->startSection('title', 'Riwayat Pesanan'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h2>Riwayat<span>Pemesanan</span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Orderan</li>
<li class="breadcrumb-item">Riwayat Pemesanan</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <h5 class="mb-0">Riwayat Semua Pesanan</h5>
                        <div class="mt-4">
                            <select class="form-control" id="filterStatus">
                                <option value="">Filter Status</option>
                                <option value="0">Belum Bayar</option>
                                <option value="1">Menunggu Persetujuan</option>
                                <option value="2">Disetujui</option>
                                <option value="3">Ditolak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  
                    <div class="order-history table-responsive">
                        <table class="table display" id="basic-1">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Toko</th>
                                    <th scope="col">ID Transaksi</th>
                                    <th scope="col">Nama Mobil</th>
                                    <th scope="col">Username Pembeli</th>
                                    <th scope="col">Jenis Pembayaran</th>
                                    <th scope="col">Durasi</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Total</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $datatransaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr data-status="<?php echo e($pesanan['status']); ?>">
                                <td style="display: flex; flex-direction: column; align-items: center;">
    <img style="width: 50px; border-radius: 50%;" src="<?php echo e(asset($pesanan['logo_mitra'])); ?>" alt="">
    <span style="text-align: center;" class="order-process-circle" style="margin-top: 5px;"><?php echo e($pesanan['nama_toko']); ?></span>
</td>
                                    <td><?php echo e($pesanan['id_transaksi']); ?></td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#modalFotoMobil<?php echo e($pesanan['id_transaksi']); ?>">
                                            <?php echo e($pesanan['nama_mobil']); ?>

                                        </a>
                                        <div class="order-process">
                                            <?php if($pesanan['status'] == 0): ?>
                                            <span class="order-process-circle"></span> Belum Bayar
                                            <?php elseif($pesanan['status'] == 1): ?>
                                            <span class="order-process-circle"></span> Menunggu Persetujuan
                                            <?php elseif($pesanan['status'] == 2): ?>
                                            <span class="order-process-circle"></span> Disetujui
                                            <?php elseif($pesanan['status'] == 3): ?>
                                            <span class="order-process-circle"></span> Ditolak
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                    <td><?php echo e($pesanan['username_mb']); ?></td>
                                    <td>
                                        <?php if($pesanan['bukti_pembayaran'] != null): ?>
                                        <a href="#" data-toggle="modal" data-target="#modalBuktiPembayaran<?php echo e($pesanan['id_transaksi']); ?>">
                                            <?php echo e($pesanan['nama_pembayaran']); ?>

                                        </a>
                                        <?php else: ?>
                                        Belum Bayar
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e(\Carbon\Carbon::parse($pesanan['tanggal_mulai'])->diffInDays(\Carbon\Carbon::parse($pesanan['tanggal_akhir']))); ?> Hari</td>
                                    <td><?php echo e($pesanan['total']); ?></td>
                                    <td>
                                    <?php if($pesanan['status'] == 0): ?>
                                    <button style="border-radius:5px;" type="button" class="btn btn-dark" disabled>BelumBayar</button>
                                <?php elseif($pesanan['status'] == 1): ?>
                                    <button style="border-radius:5px;" type="button" class="btn btn-info"  onclick="accTransaksi('<?php echo e($pesanan['id_transaksi']); ?>')">Pending</button>
                                <?php elseif($pesanan['status'] == 2): ?>
                                    <button style="border-radius:5px;" type="button" class="btn btn-success" disabled>Disetujui</button>
                                <?php elseif($pesanan['status'] == 3): ?>
                                    <button style="border-radius:5px;" type="button" class="btn btn-danger" disabled>Ditolak</button>
                                <?php elseif($pesanan['status'] == 4): ?>
                                    <button style="border-radius:5px;" type="button" class="btn btn-dark" disabled>Dibatalkan</button>
                                <?php endif; ?>
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
</div>

<?php $__currentLoopData = $datatransaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="modal fade" id="modalFotoMobil<?php echo e($pesanan['id_transaksi']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Mobil: <?php echo e($pesanan['nama_mobil']); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo e(asset($pesanan['foto_mobil'])); ?>" class="img-fluid" alt="Foto Mobil">
                    </div>
                    <div class="col-md-6">
                        <p><strong>Nama Mobil:</strong> <?php echo e($pesanan['nama_mobil']); ?></p>
                        <p><strong>Kapasitas Penumpang:</strong> <?php echo e($pesanan['kapasitas_penumpang']); ?></p>
                        <p><strong>Warna:</strong> <?php echo e($pesanan['warna']); ?></p>
                        <p><strong>Harga Sewa per Hari:</strong> Rp. <?php echo e($pesanan['harga_sewa_perhari']); ?></p>
                        <p><strong>Tipe:</strong> <?php echo e($pesanan['tipe']); ?></p>
                        <p><strong>Bahan Bakar:</strong> <?php echo e($pesanan['bahan_bakar']); ?></p>
                        <p><strong>Kecepatan:</strong> <?php echo e($pesanan['kecepatan']); ?> KM/Jam</p>
                        <p><strong>Transmisi:</strong> <?php echo e($pesanan['transmisi']); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalBuktiPembayaran<?php echo e($pesanan['id_transaksi']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if($pesanan['bukti_pembayaran'] != null): ?>
                <img src="<?php echo e(asset($pesanan['bukti_pembayaran'])); ?>" class="img-fluid" alt="Bukti Pembayaran">
                <?php else: ?>
                <p>Belum ada bukti pembayaran.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
<script>
    $(document).ready(function () {
        $('#filterStatus').on('change', function () {
            var status = $(this).val();
            if (status) {
                $('tbody tr').hide().filter(function () {
                    return $(this).data('status') == status;
                }).show();
            } else {
                $('tbody tr').show();
            }
        });
    });
</script>
<script>
        function accTransaksi(id_transaksi) {
    Swal.fire({
        title: 'Apakah Anda ingin menyetujui atau menolak transaksi ini?',
        html: `
            <button class="btn btn-success swal-button mt-4" id="setujui">Setujui</button>
            <button class="btn btn-danger swal-button mt-4" id="tolak">Tolak</button>
        `,
        icon: 'warning',
        showCancelButton: false,
        showConfirmButton: false,
    });

    document.getElementById('setujui').addEventListener('click', function() {
        $.ajax({
            type: 'POST',
            url: '<?php echo e(route('mobilink.transaksi.setujui', ['id_transaksi' => ':id_transaksi'])); ?>'.replace(':id_transaksi', id_transaksi),
            data: {
                _token: '<?php echo e(csrf_token()); ?>',
            },
            success: function(response) {
                Swal.fire(
                    'Sukses!',
                    'Transaksi berhasil disetujui dan diaktifkan.',
                    'success'
                ).then(() => {
                    location.reload();
                });
            },
            error: function(xhr, status, error) {
                Swal.fire(
                    'Gagal!',
                    'Terjadi kesalahan saat menyetujui transaksi.',
                    'error'
                );
            }
        });
    });

    document.getElementById('tolak').addEventListener('click', function() {
        $.ajax({
            type: 'POST',
            url: '<?php echo e(route('mobilink.transaksi.tolak', ['id_transaksi' => ':id_transaksi'])); ?>'.replace(':id_transaksi', id_transaksi),
            data: {
                _token: '<?php echo e(csrf_token()); ?>',
            },
            success: function(response) {
                Swal.fire(
                    'Sukses!',
                    'Transaksi berhasil ditolak.',
                    'success'
                ).then(() => {
                    location.reload();
                });
            },
            error: function(xhr, status, error) {
                Swal.fire(
                    'Gagal!',
                    'Terjadi kesalahan saat menolak transaksi.',
                    'error'
                );
            }
        });
    });
}

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master_mobilink', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webS4\resources\views/mobilink/transaksi/index.blade.php ENDPATH**/ ?>