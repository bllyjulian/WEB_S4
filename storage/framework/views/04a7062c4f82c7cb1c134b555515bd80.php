

<?php $__env->startSection('title', 'Edit Mobil'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h2>Edit<span>Mobil</span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Data Mobil</li>
    <li class="breadcrumb-item active">Edit Mobil</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Edit Mobil</h5>
            </div>
            <div class="card-body">
               <form class="theme-form mega-form" action="<?php echo e(route('admin.mobil.update', ['id_mobil' => $mobil->id_mobil])); ?>" method="POST" enctype="multipart/form-data" id="editmobilform">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PUT'); ?>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="gambarmobil w-90">
                           <img id="preview-image" style="width: 100%;" src="<?php echo e(asset($mobil->foto_mobil)); ?>" alt="Preview Image">
                        </div>
                        <div class="form-group pt-4">
                           <label for="nama_mobil">Brand</label>
                           <input style="border-radius:5px;" class="form-control" type="text" id="nama_mobil" name="nama_mobil" value="<?php echo e($mobil->nama_mobil); ?>" required>
                        </div>
                        <div class="form-group">
                           <label class="col-form-label">Tipe</label>
                           <input style="border-radius:5px;" class="form-control" type="text" id="tipe" name="tipe" value="<?php echo e($mobil->tipe); ?>" required>
                        </div>
                        <div class="form-group">
                           <label class="col-form-label">Jenis Transmisi</label>
                           <input style="border-radius:5px;" class="form-control" type="text" id="transmisi" name="transmisi" value="<?php echo e($mobil->transmisi); ?>" required>
                        </div>
                     </div>
                     <div class="col-sm-6">
                     <div class="form-group">
                           <label class="col-form-label">Warna</label>
                           <input style="border-radius:5px;" class="form-control" type="text" id="warna" name="warna" value="<?php echo e($mobil->warna); ?>" required>
                        </div>
                        <div class="form-group">
                           <label class="col-form-label">Kapasitas Penumpang</label>
                           <input style="border-radius:5px;" class="form-control" type="number" id="kapasitas_penumpang" name="kapasitas_penumpang" value="<?php echo e($mobil->kapasitas_penumpang); ?>" required>
                        </div>
                        <div class="form-group">
                           <label class="col-form-label">Bahan Bakar</label>
                           <input style="border-radius:5px;" class="form-control" type="text" id="bahan_bakar" name="bahan_bakar" value="<?php echo e($mobil->bahan_bakar); ?>" required>
                        </div>
                        <div class="form-group">
                           <label class="col-form-label">Kecepatan</label>
                           <input style="border-radius:5px;" class="form-control" type="text" id="kecepatan" name="kecepatan" value="<?php echo e($mobil->kecepatan); ?>" required>
                        </div>
                        <div class="form-group">
                           <label class="col-form-label">Foto Mobil</label>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" id="foto-mobil" name="foto_mobil" onchange="previewImage(event)">
                              <label class="custom-file-label" for="foto-mobil">Pilih file</label>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-form-label">Harga Sewa Per Hari</label>
                           <input style="border-radius:5px;" class="form-control" type="number" id="harga_sewa_perhari" name="harga_sewa_perhari" value="<?php echo e($mobil->harga_sewa_perhari); ?>" required>
                        </div>
                     </div>
                  </div>
                  <button style="border-radius:5px;" type="submit" class="btn btn-primary btn-pill sweet-8">Simpan</button>
                  <button style="border-radius:5px;" type="button" class="btn btn-secondary btn-pill" onclick="window.location='<?php echo e(route('admin.mobil')); ?>'">Batal</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/sweet-alert/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/sweet-alert/app.js')); ?>"></script>
<script>
    $(document).on('change', '.custom-file-input', function(event) {
        $(this).next('.custom-file-label').html(event.target.files[0].name);
    });

    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview-image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    document.querySelector('.sweet-8').onclick = function(event){
        event.preventDefault();
        swal({
            title: "Berhasil!",
            text: "Data Mobil berhasil disimpan!",
            icon: "success",
            button: "OK"
        }).then((value) => {
            if (value) {
                document.getElementById('editmobilform').submit();
            }
        });
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master_mitra', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webS4\resources\views/admin/mobil/editmobil.blade.php ENDPATH**/ ?>