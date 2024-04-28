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
               <form class="f1" method="post">
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
                        <label for="f1-first-name">Nama Mobil</label>
                        <input class="form-control" id="f1-first-name" type="text" name="f1-first-name" placeholder="Masukkan Nama Mobil" required="">
                     </div>
                     <div class="form-group">
                        <label for="f1-last-name">Tipe</label>
                        <input class="f1-last-name form-control" id="f1-last-name" type="text" name="f1-last-name" placeholder="Masukkan Tipe" required="">
                     </div>
                     <div class="form-group">
                        <label for="f1-last-name">Warna</label>
                        <input class="f1-last-name form-control" id="f1-last-name" type="text" name="f1-last-name" placeholder="Masukkan Warna" required="">
                     </div>
                     <div class="f1-buttons">
                        <button class="btn btn-primary btn-next" type="button">Next</button>
                     </div>
                  </fieldset>
                  <fieldset>
                  <div class="form-group">
                        <label for="f1-first-name">Kapasitas Penumpang</label>
                        <input class="form-control" id="f1-first-name" type="text" name="f1-first-name" placeholder="Masukkan Kapasitas" required="">
                     </div>
                     <div class="form-group">
                        <label for="f1-first-name">Bahan Bakar</label>
                        <input class="form-control" id="f1-first-name" type="text" name="f1-first-name" placeholder="Masukkan Bahan Bakar Mobil" required="">
                     </div>
                     <div class="form-group">
                        <label for="f1-first-name">Kecepatan</label>
                        <input class="form-control" id="f1-first-name" type="text" name="f1-first-name" placeholder="Masukkan Kecepatan" required="">
                     </div>
                     <div class="f1-buttons">
                        <button class="btn btn-primary btn-previous" type="button">Previous</button>
                        <button class="btn btn-primary btn-next" type="button">Next</button>
                     </div>
                  </fieldset>
                  <fieldset>
                  <div class="form-group">
                        <label for="f1-first-name">Harga Sewa Per hari</label>
                        <input class="form-control" id="f1-first-name" type="text" name="f1-first-name" placeholder="Masukkan Harga" required="">
                     </div>
                     <div class="f1-buttons">
                        <button class="btn btn-primary btn-previous" type="button">Previous</button>
                        <button class="btn btn-primary btn-submit" type="submit">Submit</button>
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
<script src="{{ asset('assets/js/form-wizard/form-wizard-three.js')}}"></script>
<script src="{{ asset('assets/js/form-wizard/jquery.backstretch.min.js')}}"></script>
@endsection