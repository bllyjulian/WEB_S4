<?php $__env->startSection('title', 'Data Mobil'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/rating.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/sweetalert2.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h2>Data<span>Mobil</span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Mobil</li>
    <li class="breadcrumb-item">Data Mobil</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 d-flex justify-content-end mb-3 mr-3">
            <a style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" href="<?php echo e(route('admin.mobil.tambahmobil')); ?>" class="btn btn-success">Tambah</a>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive product-table">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">Gambar</th>
                                    <th>Brand</th>
                                    <th>Harga Sewa</th>
                                    <th>Kapasitas Penumpang</th>
                                    <th>Transmisi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $mobils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><img style="width: 100px;" src="<?php echo e(asset($mobil->foto_mobil)); ?>" alt=""></td>
                                        <td><?php echo e($mobil->nama_mobil); ?></td>
                                        <td><?php echo e($mobil->harga_sewa_perhari); ?></td>
                                        <td><?php echo e($mobil->kapasitas_penumpang); ?></td>
                                        <td><?php echo e($mobil->transmisi); ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <form action="<?php echo e(route('admin.mobil.hapus', ['id_mobil' => $mobil->id_mobil])); ?>" method="POST" class="form-hapus">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button style="border-radius:5px; margin-right: 6px;" type="submit" class="btn btn-danger btn-hapus" data-id="<?php echo e($mobil->id_mobil); ?>">Hapus</button>
                                                </form>
                                                <button style="border-radius:5px;" class="btn btn-info btn-xs" type="button" title="">
                                                    <a style="color:white;" href="<?php echo e(route('admin.mobil.editmobil', ['id_mobil' => $mobil->id_mobil])); ?>">Edit</a>
                                                </button>
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
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/sweet-alert/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/sweet-alert/app.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/rating/jquery.barrating.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/rating/rating-script.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/ecommerce.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/product-list-custom.js')); ?>"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.btn-hapus');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();

            const idMobil = this.getAttribute('data-id');
            const form = this.closest('form');

            swal({
                title: "Apakah anda yakin ingin menghapus data ini?",
                text: "Data Mobil yang dihapus tidak dapat dikembalikan!",
                icon: "warning",
                buttons: ["Batal", "Hapus"],
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    swal("Sukses!", "Data Mobil berhasil dihapus.", "success").then(() => {
                        form.submit();
                    });
                }
            });
        });
    });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master_mitra', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webS4\resources\views/admin/mobil/index.blade.php ENDPATH**/ ?>