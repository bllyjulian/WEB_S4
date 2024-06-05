
<?php $__env->startSection('title', 'User Profile'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/photoswipe.css')); ?>">
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<style>
    .user-image {
        z-index: 1000;
    }

    .user-image .avatar img {
        width: 100%;
        height: auto;
    }
    .containermap {
        height: 300px;
    }
    #map {
        height: 100%;
        width: 100%;
    }
    .icon-wrapper {
        cursor: pointer;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h2>Profil<span>Toko</span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Profil</li>
    <li class="breadcrumb-item active">Data Profil</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="user-profile">
        <div class="row">
            <div class="col-sm-12">
                <div class="card hovercard text-center">
                    <div class="containermap">
                        <div id="map"></div>
                    </div>
                    <div class="user-image">
                        <div class="avatar">
                            <img alt="" src="<?php echo e(asset($user->logo_mitra)); ?>" id="profileImage">
                        </div>
                        <div class="icon-wrapper" id="editProfileImage"><i class="icofont icofont-pencil-alt-5"></i></div>
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ttl-info text-left">
                                            <h6><i class="fa fa-envelope"></i> Username</h6>
                                            <span><?php echo e($user->username); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ttl-info text-left">
                                            <h6><i class="fa fa-calendar"></i> Tanggal Daftar</h6>
                                            <span><?php echo e($user->tgl_daftar); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                                <div class="user-designation">
                                    <div class="title"><a href="#"><?php echo e($user->nama_toko); ?></a></div>
                                    <div class="desc mt-2"><?php echo e($user->nama_lengkap); ?></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ttl-info text-left">
                                            <h6><i class="fa fa-phone"></i> Nomor Hp</h6>
                                            <span><?php echo e($user->nomor_hp); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ttl-info text-left">
                                            <h6><i class="fa fa-location-arrow"></i> Location</h6>
                                            <span>Indonesia</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="social-media">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <div class="follow">
                            <div class="row">
                                <div class="col-6 text-md-right border-right">
                                    <div class="follow-num counter">25</div>
                                    <span>Mobil</span>
                                </div>
                                <div class="col-6 text-md-left">
                                    <div class="follow-num counter">143</div>
                                    <span>Pelanggan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hidden form for profile image upload -->
<form id="profileImageForm" action="<?php echo e(route('update-logo-mitra')); ?>" method="POST" enctype="multipart/form-data" style="display: none;">
    <?php echo csrf_field(); ?>
    <input type="file" name="logo_mitra" id="profileImageInput" accept="image/*">
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/counter/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/counter-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/photoswipe/photoswipe.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/photoswipe/photoswipe-ui-default.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/photoswipe/photoswipe.js')); ?>"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var indonesiaBounds = L.latLngBounds(L.latLng(-11.0, 95.0), L.latLng(6.0, 141.0));
        var map = L.map('map', {
            maxBounds: indonesiaBounds, 
            maxBoundsViscosity: 1.0,
            minZoom: 5, 
            attributionControl: false
        }).setView([<?php echo e($user->latitude); ?>, <?php echo e($user->longitude); ?>], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        L.marker([<?php echo e($user->latitude); ?>, <?php echo e($user->longitude); ?>]).addTo(map)
            .bindPopup('<?php echo e($user->nama_toko); ?>')
            .openPopup();

        document.getElementById('editProfileImage').addEventListener('click', function () {
            document.getElementById('profileImageInput').click();
        });

        document.getElementById('profileImageInput').addEventListener('change', function () {
            var formData = new FormData(document.getElementById('profileImageForm'));
            $.ajax({
                url: $('#profileImageForm').attr('action'),
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    Swal.fire({
                        title: 'Success!',
                        text: 'Logo updated successfully.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                    $('#profileImage').attr('src', response.logo_mitra);
                },
                error: function(response) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Failed to update logo.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master_mitra', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webS4\resources\views/admin/profil/index.blade.php ENDPATH**/ ?>