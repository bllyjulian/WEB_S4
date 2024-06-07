<?php $__env->startSection('title', 'Data Mobil'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/rating.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/sweetalert2.css')); ?>">
<style>
    .table th:nth-child(7) {
        width: 40px;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h2>Data<span>Mitra</span></h2>
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
                    <span><?php echo e(count($mitra)); ?> Customer Terdaftar</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive product-table">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Logo Toko</th>
                                <th>Nama Toko</th>
                                <th>Username</th>
                                <th>Nama Pemilik</th>
                                <th>Nomor Hp</th>
                                <th>Tanggal Daftar</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $mitra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><img style="width: 50px; border-radius: 50%;" src="<?php echo e(asset($item->logo_mitra)); ?>" alt=""></td>
                                <td><?php echo e($item->nama_toko); ?></td>
                                <td><?php echo e($item->username); ?></td>
                                <td><?php echo e($item->nama_lengkap); ?></td>
                                <td><?php echo e($item->nomor_hp); ?></td>
                                <td><?php echo e($item->tgl_daftar); ?></td>
                                <td>
                                <?php if($item->status_akun == 1): ?>
    <button style="border-radius:5px;" type="button" class="btn btn-success" onclick="editAkun('<?php echo e($item->username); ?>')">Aktif</button>
<?php elseif($item->status_akun == 2): ?>
    <button style="border-radius:5px;" type="button" class="btn btn-danger" onclick="aktifAkun('<?php echo e($item->username); ?>')">Dibanned</button>
<?php elseif($item->status_akun == 3): ?>
    <button style="border-radius:5px;" type="button" class="btn btn-dark" onclick="aktifAkun('<?php echo e($item->username); ?>')">Ditolak</button>
<?php else: ?>
    <button style="border-radius:5px;" type="button" class="btn btn-info" onclick="accAkun('<?php echo e($item->username); ?>')">Pending</button>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/rating/jquery.barrating.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/rating/rating-script.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/ecommerce.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/product-list-custom.js')); ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
function editAkun(username) {
    Swal.fire({
        title: 'Apakah Anda yakin ingin membanned akun ini?',
        text: 'Setelah dibanned, akun tidak dapat digunakan untuk login ke aplikasi!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Banned',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'POST',
                url: '<?php echo e(route('mobilink.mitra.banned', ['username' => ':username'])); ?>'.replace(':username', username),
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                },
                success: function(response) {
                    Swal.fire(
                        'Sukses!',
                        'Akun berhasil dibanned!',
                        'success'
                    ).then(() => {
                        location.reload();
                    });
                },
                error: function(xhr, status, error) {
                    Swal.fire(
                        'Gagal!',
                        'Terjadi kesalahan saat membanned akun.',
                        'error'
                    );
                }
            });
        }
    });
}
function aktifAkun(username) {
    Swal.fire({
        title: 'Apakah Anda yakin ingin mengaktifkan akun ini?',
        text: 'Setelah diaktifkan, akun dapat digunakan untuk login ke aplikasi!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aktifkan',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'POST',
                url: '<?php echo e(route('mobilink.mitra.setujui', ['username' => ':username'])); ?>'.replace(':username', username),
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                },
                success: function(response) {
                    Swal.fire(
                        'Sukses!',
                        'Akun berhasil diaktifkan!',
                        'success'
                    ).then(() => {
                        location.reload();
                    });
                },
                error: function(xhr, status, error) {
                    Swal.fire(
                        'Gagal!',
                        'Terjadi kesalahan saat mengaktifkan akun.',
                        'error'
                    );
                }
            });
        }
    });
}

function accAkun(username) {
    Swal.fire({
        title: 'Apakah Anda ingin menyetujui atau menolak mengaktifkan akun ini?',
        html: `
            <button class="btn btn-success swal-button mt-4" id="setujui">Aktifkan</button>
            <button class="btn btn-danger swal-button mt-4" id="tolak">Tolak</button>
        `,
        icon: 'warning',
        showCancelButton: false,
        showConfirmButton: false,
    });

    // Menambahkan event listener untuk tombol "Setujui"
    document.getElementById('setujui').addEventListener('click', function() {
        $.ajax({
            type: 'POST',
            url: '<?php echo e(route('mobilink.mitra.setujui', ['username' => ':username'])); ?>'.replace(':username', username),
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
                    'Terjadi kesalahan saat menyetujui akun.',
                    'error'
                );
            }
        });
    });

    // Menambahkan event listener untuk tombol "Tolak"
    document.getElementById('tolak').addEventListener('click', function() {
        $.ajax({
            type: 'POST',
            url: '<?php echo e(route('mobilink.mitra.tolak', ['username' => ':username'])); ?>'.replace(':username', username),
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
<?php echo $__env->make('layouts.simple.master_mobilink', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webS4\resources\views/mobilink/mitra/index.blade.php ENDPATH**/ ?>