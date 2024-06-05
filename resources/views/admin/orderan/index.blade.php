@extends('layouts.simple.master_mitra')

@section('title', 'Riwayat Pesanan')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h2>Riwayat<span>Pemesanan</span></h2>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Orderan</li>
<li class="breadcrumb-item">Riwayat Pemesanan</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <h5 class="mb-0">Riwayat Semua Pesanan</h5>
                        <div class="mt-4">
                            <select class="form-control" id="filterStatus">
                                <option value="">Filter Status</option>
                                <option value="0">Belum Bayar</option>
                                <option value="1">Menunggu Persetujuan</option>
                                <option value="2">Disetujui</option>
                                <option value="3">Ditolak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  
                    <div class="order-history table-responsive">
                        <table class="table display" id="basic-1">
                            <thead>
                                <tr>
                                    <th scope="col">ID Transaksi</th>
                                    <th scope="col">Nama Mobil</th>
                                    <th scope="col">Username Pembeli</th>
                                    <th scope="col">Jenis Pembayaran</th>
                                    <th scope="col">Durasi</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datatransaksi as $pesanan)
                                <tr data-status="{{ $pesanan['status'] }}">
                                    <td>{{ $pesanan['id_transaksi'] }}</td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#modalFotoMobil{{ $pesanan['id_transaksi'] }}">
                                            {{ $pesanan['nama_mobil'] }}
                                        </a>
                                        <div class="order-process">
                                            @if($pesanan['status'] == 0)
                                            <span class="order-process-circle"></span> Belum Bayar
                                            @elseif($pesanan['status'] == 1)
                                            <span class="order-process-circle"></span> Menunggu Persetujuan
                                            @elseif($pesanan['status'] == 2)
                                            <span class="order-process-circle"></span> Disetujui
                                            @elseif($pesanan['status'] == 3)
                                            <span class="order-process-circle"></span> Ditolak
                                            @endif
                                        </div>
                                    </td>
                                    <td>{{ $pesanan['username_mb'] }}</td>
                                    <td>
                                        @if($pesanan['bukti_pembayaran'] != null)
                                        <a href="#" data-toggle="modal" data-target="#modalBuktiPembayaran{{ $pesanan['id_transaksi'] }}">
                                            {{ $pesanan['nama_pembayaran'] }}
                                        </a>
                                        @else
                                        Belum Bayar
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($pesanan['tanggal_mulai'])->diffInDays(\Carbon\Carbon::parse($pesanan['tanggal_akhir'])) }} Hari</td>
                                    <td>{{ $pesanan['total'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($datatransaksi as $pesanan)
<!-- Modal Foto Mobil -->
<!-- Modal Foto Mobil -->
<div class="modal fade" id="modalFotoMobil{{ $pesanan['id_transaksi'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Mobil: {{ $pesanan['nama_mobil'] }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset($pesanan['foto_mobil']) }}" class="img-fluid" alt="Foto Mobil">
                    </div>
                    <div class="col-md-6">
                        <p><strong>Nama Mobil:</strong> {{ $pesanan['nama_mobil'] }}</p>
                        <p><strong>Kapasitas Penumpang:</strong> {{ $pesanan['kapasitas_penumpang'] }}</p>
                        <p><strong>Warna:</strong> {{ $pesanan['warna'] }}</p>
                        <p><strong>Harga Sewa per Hari:</strong> Rp. {{ $pesanan['harga_sewa_perhari'] }}</p>
                        <p><strong>Tipe:</strong> {{ $pesanan['tipe'] }}</p>
                        <p><strong>Bahan Bakar:</strong> {{ $pesanan['bahan_bakar'] }}</p>
                        <p><strong>Kecepatan:</strong> {{ $pesanan['kecepatan'] }} KM/Jam</p>
                        <p><strong>Transmisi:</strong> {{ $pesanan['transmisi'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Bukti Pembayaran -->
<div class="modal fade" id="modalBuktiPembayaran{{ $pesanan['id_transaksi'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if($pesanan['bukti_pembayaran'] != null)
                <img src="{{ asset($pesanan['bukti_pembayaran']) }}" class="img-fluid" alt="Bukti Pembayaran">
                @else
                <p>Belum ada bukti pembayaran.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection

@section('script')
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#filterStatus').on('change', function () {
            var status = $(this).val();
            if (status) {
                $('tbody tr').hide().filter(function () {
                    return $(this).data('status') == status;
                }).show();
            } else {
                $('tbody tr').show();
            }
        });
    });
</script>
@endsection
