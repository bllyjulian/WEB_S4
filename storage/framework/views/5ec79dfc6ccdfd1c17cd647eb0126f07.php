<?php $__env->startSection('title', 'Detail Sewa'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/rating.css')); ?>">
<link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h2>Detail Sewa</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Mobil</li>
    <li class="breadcrumb-item">Data Sewa</li>
    <li class="breadcrumb-item active">Detail Sewa</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="row product-page-main">
            <div class="col-xl-4">
                <div class="product-slider owl-carousel owl-theme" id="sync1">
                    <div class="item"><img src="<?php echo e(asset($mobil->foto_mobil)); ?>" alt=""></div>
                    <!-- Tambahkan gambar lain jika ada -->
                </div>
                <div class="owl-carousel owl-theme" id="sync2">
                    <div class="item"><img src="<?php echo e(asset($mobil->foto_mobil)); ?>" alt=""></div>
                    <!-- Tambahkan gambar lain jika ada -->
                </div>
            </div>
            <div class="col-xl-8">
                <div class="product-page-details">
                    <h5><?php echo e($mobil->nama_mobil); ?></h5>
                    <div class="d-flex">
                        <select id="u-rating-fontawesome" name="rating" autocomplete="off">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <span>(250 review)</span>
                    </div>
                </div>
                <hr>
                <p><?php echo e($mobil->deskripsi); ?></p>
                <div class="product-price digits">
                    <del>Rp. <?php echo e(number_format($mobil->harga_sewa_perhari * 1.2, 0, ',', '.')); ?></del> Rp. <?php echo e(number_format($mobil->harga_sewa_perhari, 0, ',', '.')); ?>

                </div>
                <hr>
                <div>
                    <table class="product-page-width">
                        <tbody>
                            <tr>
                                <td>Brand :</td>
                                <td><?php echo e($mobil->brand); ?></td>
                            </tr>
                            <tr>
                                <td>Availability :</td>
                                <td class="in-stock">In stock</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <ul class="product-color m-t-15">
                    <li class="bg-primary"></li>
                    <li class="bg-secondary"></li>
                    <li class="bg-success"></li>
                    <li class="bg-info"></li>
                    <li class="bg-warning"></li>
                </ul>
                <div class="m-t-15">
                    <button class="btn btn-primary-gradien m-r-10" type="button" title="">Add To Cart</button>
                    <button class="btn btn-secondary-gradien m-r-10" type="button" title="">Quick View</button>
                    <button class="btn btn-success-gradien" type="button" title="">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="row product-page-main">
            <div class="col-sm-12">
                <ul class="nav nav-tabs nav-material mb-0" id="top-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true">Riwayat</a>
                        <div class="material-border"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">Lacak</a>
                        <div class="material-border"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false">Details</a>
                        <div class="material-border"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="brand-top-tab" data-toggle="tab" href="#top-brand" role="tab" aria-controls="top-brand" aria-selected="false">Brand</a>
                        <div class="material-border"></div>
                    </li>
                </ul>
                <div class="tab-content" id="top-tabContent">
                    <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
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
                                                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                    <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                        <div id="map" style="height: 70vh; width: 100%; border-radius:20px; margin-top: 20px;"></div>
                    </div>
                    <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                        <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text...</p>
                    </div>
                    <div class="tab-pane fade" id="top-brand" role="tabpanel" aria-labelledby="brand-top-tab">
                        <p class="mb-0 m-t-20">Lorem Ipsum is simply dummy text...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/rating/jquery.barrating.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/rating/rating-script.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/ecommerce.js')); ?>"></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
 document.addEventListener('DOMContentLoaded', function () {
    var map, marker;

    function initializeMap() {
        if (!map) {
            // Initialize the map and set its view to the specified geographical coordinates and a zoom level.
            map = L.map('map', {
                maxBounds: [[-11.0, 95.0], [6.0, 141.0]], // Indonesia bounds
                maxBoundsViscosity: 1.0,
                minZoom: 5,
                attributionControl: false
            }).setView([-2.5, 117.0], 6); // Center of Indonesia

            // Add a tile layer to the map, in this case, OpenStreetMap tiles.
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 18,
                attribution: '© OpenStreetMap'
            }).addTo(map);

   
            fetch('<?php echo e(route('admin.detailsewa.location', $mobil->id_mobil)); ?>')
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        alert(data.error);
                    } else {
                        var latLng = [data.latitude, data.longitude];
                        map.setView(latLng, 15);
                        
                  
                        var customIcon = L.icon({
                            iconUrl: '/assets/images/logo/iconTitle.png', 
                            iconSize: [100, 100],
                            iconAnchor: [50, 100], 
                            popupAnchor: [0, -100] 
                        });

                        marker = L.marker(latLng, {icon: customIcon}).addTo(map)
                            .bindPopup('<b>Lokasi Mobil</b><br>Latitude: ' + data.latitude + '<br>Longitude: ' + data.longitude)
                            .openPopup();
                    }
                })
                .catch(error => console.error('Error fetching location:', error));
        }
    }

    function resizeMap() {
        if (map) {
            map.invalidateSize();
        }
    }

    document.getElementById('profile-top-tab').addEventListener('click', function() {
        initializeMap(); 
        setTimeout(resizeMap, 200); 
    });

    window.addEventListener('resize', resizeMap);
});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master_mitra', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webS4\resources\views/admin/detailsewa/riwayatsewa.blade.php ENDPATH**/ ?>