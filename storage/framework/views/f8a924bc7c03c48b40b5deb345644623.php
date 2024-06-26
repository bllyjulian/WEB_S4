<div class="modal fade" id="kirimlaporan">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kirim Laporan</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form id="formTambahPendaki">
                    <div class="form-group">
                        <label class="text-black font-w500">Pilih Pendaki</label>
                        <select class="form-control" id="id_pendaki" name="id_pendaki">
                            <?php $__currentLoopData = $datapendaki; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendaki): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($pendaki->id_pendaki); ?>"><?php echo e($pendaki->nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Jenis Laporan</label>
                        <select class="form-control" id="jenis_laporan" name="jenis_laporan">
                            <option value="Tersesat">Tersesat</option>
                            <option value="Butuh alat kesehatan">Butuh alat kesehatan</option>
                            <option value="Kehilangan Rekan">Kehilangan Rekan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" id="btnSimpanLaporan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="footer">
<div class="copyright">
    <p>Copyright © Designed &amp; Developed by
        <button style="font-size: inherit; padding: 0; color:red;" type="button" class="btn btn-lg" data-toggle="modal" data-target="#kirimlaporan">
            HikerTrack
        </button> 2024
    </p>
</div>

</div><?php /**PATH C:\xampp\htdocs\webS4\resources\views/layoutshtd/footer.blade.php ENDPATH**/ ?>