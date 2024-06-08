<?php $__env->startSection('title', 'Data Mobil'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/rating.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/sweetalert2.css')); ?>">
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
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
                                    <th>Username</th>
                                    <th>Nama Pemilik</th>
                                    <th>Nomor Hp</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Lokasi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $mitra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td style="display: flex; flex-direction: column; align-items: center;">
                                        <img style="width: 50px; border-radius: 50%;" src="<?php echo e(asset($item['logo_mitra'])); ?>" alt="">
                                        <span style="text-align: center;" class="order-process-circle" style="margin-top: 5px;"><?php echo e($item['nama_toko']); ?></span>
                                    </td>
                                    <td><?php echo e($item->username); ?></td>
                                    <td><?php echo e($item->nama_lengkap); ?></td>
                                    <td><?php echo e($item->nomor_hp); ?></td>
                                    <td><?php echo e($item->tgl_daftar); ?></td>
                                    <td>
                                        <?php if($item['latitude'] != null): ?>
                                            <a class="tombolmaps" href="#" data-username="<?php echo e($item['username']); ?>" data-toggle="modal" data-target="#modalLokasi<?php echo e($item['username']); ?>">
                                                Lihat Lokasi
                                            </a>
                                        <?php else: ?>
                                            Belum ada
                                        <?php endif; ?>
                                    </td>
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

<?php $__currentLoopData = $mitra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="modalLokasi<?php echo e($item['username']); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lokasi Toko</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Tambahkan div untuk menampilkan peta -->
                <div id="mapContainer<?php echo e($item['username']); ?>" style="height: 400px;"></div>
                <input type="hidden" id="latitude<?php echo e($item['username']); ?>" value="<?php echo e($item['latitude']); ?>">
                <input type="hidden" id="longitude<?php echo e($item['username']); ?>" value="<?php echo e($item['longitude']); ?>">
                <input type="hidden" id="namaToko<?php echo e($item['username']); ?>" value="<?php echo e($item['nama_toko']); ?>">

            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/rating/jquery.barrating.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/rating/rating-script.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/ecommerce.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/product-list-custom.js')); ?>"></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
$('.tombolmaps').click(function() {
    var username = $(this).data('username');
    setTimeout(function() {
        initializeMap(username);
    }, 500); // Ubah timeout menjadi 500 milidetik atau lebih
});

function initializeMap(username) {
    $('#mapContainer' + username).css('height', '400px'); // Sesuaikan tinggi peta
    var latitude = parseFloat($('#latitude' + username).val()); // Ambil latitude dari input tersembunyi
    var longitude = parseFloat($('#longitude' + username).val()); // Ambil longitude dari input tersembunyi
    var namaToko = $('#namaToko' + username).val(); // Ambil nama toko dari input tersembunyi

    var map = L.map('mapContainer' + username, {
        minZoom: 5,
        attributionControl: false // Menyembunyikan teks atribusi Leaflet
    }).setView([latitude, longitude], 13);

    // Tambahkan layer peta
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: '© OpenStreetMap'
    }).addTo(map);

    // Tambahkan marker
    L.marker([latitude, longitude]).addTo(map)
        .bindPopup(namaToko) // Gunakan nama toko sebagai teks pada marker
        .openPopup();

    // Resize peta saat modal ditampilkan
    $('#modalLokasi' + username).on('shown.bs.modal', function() {
        setTimeout(function() {
            map.invalidateSize();
        }, 500);
    });
}


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