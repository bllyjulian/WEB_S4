@extends('layouts.simple.master_mitra')

@section('title', 'Tambah')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h2>Tambah<span>Mobil</span></h2>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Mobil</li>
<li class="breadcrumb-item">Tambah Mobil</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Silahkan Masukkan Data Mobil Yang Ingin Ditambahkan!</h5>
            </div>
            <div class="card-body">
               <form class="f1" method="POST" action="{{ route('admin.mobil.store') }}" enctype="multipart/form-data" id="tambahMobilForm">
                  @csrf
                  <div class="f1-steps">
                     <div class="f1-progress">
                        <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3"></div>
                     </div>
                     <div class="f1-step active">
                        <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                        <p>General</p>
                     </div>
                     <div class="f1-step">
                        <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                        <p>Detail</p>
                     </div>
                     <div class="f1-step">
                        <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                        <p>Harga</p>
                     </div>
                  </div>
                  <fieldset>
                     <div class="form-group">
                        <label for="nama_mobil">Brand</label>
                        <input style="border-radius:5px;" class="form-control" id="nama_mobil" type="text" name="nama_mobil" placeholder="Masukkan Nama Mobil" required>
                     </div>
                     <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <input style="border-radius:5px;" class="form-control" id="tipe" type="text" name="tipe" placeholder="Masukkan Tipe" required>
                     </div>
                     <div class="form-group">
                        <label for="warna">Warna</label>
                        <input style="border-radius:5px;" class="form-control" id="warna" type="text" name="warna" placeholder="Masukkan Warna" required>
                     </div>
                     <div class="f1-buttons">
                        <button style="border-radius:5px;" class="btn btn-primary btn-next" type="button">Next</button>
                     </div>
                  </fieldset>
                  <fieldset>
                     <div class="form-group">
                        <label for="kapasitas_penumpang">Kapasitas Penumpang</label>
                        <input style="border-radius:5px;" class="form-control" id="kapasitas_penumpang" type="text" name="kapasitas_penumpang" placeholder="Masukkan Kapasitas" required>
                     </div>
                     <div class="form-group">
                        <label for="bahan_bakar">Bahan Bakar</label>
                        <input style="border-radius:5px;" class="form-control" id="bahan_bakar" type="text" name="bahan_bakar" placeholder="Masukkan Bahan Bakar Mobil" required>
                     </div>
                     <div class="form-group">
                        <label for="kecepatan">Kecepatan</label>
                        <input style="border-radius:5px;" class="form-control" id="kecepatan" type="number" name="kecepatan" placeholder="Masukkan Kecepatan" required>
                     </div>
                     <div class="form-group">
                        <label for="foto-mobil">Foto Mobil</label>
                        <div class="custom-file">
                           <input style="border-radius:5px;" type="file" class="custom-file-input" id="foto-mobil" name="foto_mobil" required>
                           <label class="custom-file-label" for="foto-mobil">Pilih file</label>
                        </div>
                     </div>
                     <div class="f1-buttons">
                        <button style="border-radius:5px;" class="btn btn-primary btn-previous" type="button">Previous</button>
                        <button style="border-radius:5px;" class="btn btn-primary btn-next" type="button">Next</button>
                     </div>
                  </fieldset>
                  <fieldset>
                     <div class="form-group">
                        <label for="harga_sewa_perhari">Transmisi</label>
                        <input style="border-radius:5px;" class="form-control" id="transmisi" type="text" name="transmisi" placeholder="Jenis Transmisi" required>
                     </div>
                     <div class="form-group">
                        <label for="harga_sewa_perhari">Harga Sewa Per hari</label>
                        <input style="border-radius:5px;" class="form-control" id="harga_sewa_perhari" type="text" name="harga_sewa_perhari" placeholder="Masukkan Harga" required>
                     </div>
                     <div class="form-group">
                        <label for="username">Username</label>
                        <input style="border-radius:5px;" class="form-control" id="username" type="text" name="username" placeholder="Masukkan Username" required>
                     </div>
                     <div class="f1-buttons">
                        <button style="border-radius:5px;" class="btn btn-primary btn-previous" type="button">Previous</button>
                        <button style="border-radius:5px;" class="btn btn-success sweet-8" type="submit">Simpan</button>
                     </div>
                  </fieldset>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('assets/js/form-wizard/form-wizard-three.js')}}"></script>
<script src="{{ asset('assets/js/form-wizard/jquery.backstretch.min.js')}}"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>  -->
<script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{ asset('assets/js/sweet-alert/app.js')}}"></script>

<script>
    $(document).on('change', '.custom-file-input', function(event) {
        $(this).next('.custom-file-label').html(event.target.files[0].name);
    });

    document.querySelector('.sweet-8').onclick = function(event){
        event.preventDefault();
        swal({
            title: "Berhasil!",
            text: "Data Mobil berhasil disimpan!",
            icon: "success",
            button: "OK"
        }).then((value) => {
            if (value) {
                document.getElementById('tambahMobilForm').submit();
            }
        });
    }
</script>
@endsection
