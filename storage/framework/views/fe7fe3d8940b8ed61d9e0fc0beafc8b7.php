<div class="modal fade" id="addOrderModalside">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pendaki</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form id="formTambahPendaki">
                    <div class="form-group">
                        <label class="text-black font-w500">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Umur</label>
                        <input type="text" class="form-control" id="umur" name="umur">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Alamat</label>
                        <input type="text" class="form-control" id="asal" name="asal">
                    </div>
                    <div class="form-group">
                        <label class="text-black font-w500">Nomor Hp yang dapat dihubungi</label>
                        <input type="text" class="form-control" id="nohp" name="nohp">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" id="btnSimpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="deznav">
	<div class="deznav-scroll">
		<a href="javascript:void(0)" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside">+
			Tambah Pendaki</a>
		<ul class="metismenu" id="menu">
			<li><a href="<?php echo e(route ('dashboard')); ?>" aria-expanded="false">
					<i class="flaticon-381-networking"></i>
					<span class="nav-text">Dashboard</span>
				</a>
			</li>
			<li><a href="<?php echo e(route ('datapendaki')); ?>" aria-expanded="false">
					<i class="flaticon-381-television"></i>
					<span class="nav-text">Data Pendaki</span>
				</a>
			</li>
			<li><a href="<?php echo e(route ('lacak')); ?>" aria-expanded="false">
					<i class="flaticon-381-controls-3"></i>
					<span class="nav-text">Lacak</span>
				</a>
			</li>
			<li><a href="<?php echo e(route ('laporan')); ?>" aria-expanded="false">
					<i class="flaticon-381-internet"></i>
					<span class="nav-text">Laporan</span>
				</a>
			</li>
		</ul>
		<div class="copyright">
			<p><strong>Hiking Tracking Devices</strong> © 2024 All Rights Reserved</p>
			<p>Made with <span class="heart"></span> by HikerTrack</p>
		</div>
	</div>
</div>


<?php /**PATH C:\xampp\htdocs\webS4\resources\views/layoutshtd/sidebar.blade.php ENDPATH**/ ?>