@extends('layouts.simple.master_mitra')
@section('title', 'Data Sewa')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h2>Data Sewa</h2>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Mobil</li>
    <li class="breadcrumb-item">Data Sewa</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      @foreach($databooking as $mobil)
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
               @if ($mobil['status'] == 'Belum Diambil')
            <div class="ribbon ribbon-danger">{{ $mobil['status'] }}</div>
        @elseif ($mobil['status'] == 'Selesai Disewa')
            <div class="ribbon ribbon-success ribbon-right">{{ $mobil['status'] }}</div>
        @elseif ($mobil['status'] == 'Sedang Disewa')
            <div class="ribbon ribbon-clip ribbon-warning">{{ $mobil['status'] }}</div>
        @endif
        <div style="height: 200px;" class="ftmobil">
        <img class="img-fluid" src="{{ asset($mobil['foto_mobil']) }}" alt="">
        </div>
                
                  <div class="product-hover">
                     <ul>
                  <a href="{{ route('admin.detailsewa.riwayatsewa', ['id' => $mobil['id_mobil'], 'id_booking' => $mobil['id_booking'], 'username_mb' => $mobil['username_mb']]) }}">
    <li><i class="icon-eye"></i></li>
</a>

                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>{{ $mobil['nama_mobil'] }}</h4>
                  <h6>{{ $mobil['tipe'] }}</h6>
                  <!-- <h6>{{ $mobil['id_booking'] }}</h6> -->
                  <p>{{ $mobil['kapasitas_penumpang'] }} penumpang, {{ $mobil['warna'] }}</p>
                  <div class="product-price">
                     <del>Rp. {{ number_format($mobil['harga_sewa_perhari'] * 1.2, 0, ',', '.') }}</del> Rp. {{ number_format($mobil['harga_sewa_perhari'], 0, ',', '.') }}
                  </div>
                  <div class="text-right mt-4">
                     <span class="text-primary">Disewa Oleh {{ $mobil['username_mb'] }}</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endforeach
   </div>
</div>
@endsection

@section('script')
@endsection
