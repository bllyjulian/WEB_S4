@extends('layouts.simple.master_mobilink')

@section('title', 'Mitra')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h2>Mobilink<span>Mitra</span></h2>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Mitra</li>
    <li class="breadcrumb-item">Data Mitra</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Mitra</h5>
                    <span>76 Mitra Terdaftar</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-xl">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Toko</th>
                                <th>Username</th>
                                <th>Nama Pemilik</th>
                                <th>Nomor Hp</th>
                                <th>Tanggal Daftar</th>
                                <th>Status Akun</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mitra as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->nama_toko }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->nomor_hp }}</td>
                                <td>{{ $item->tgl_daftar }}</td>
                                <td>
                                    <div class="media-body icon-state switch-outline">
                                        <label class="switch">
                                            <input type="checkbox" {{ $item->status_akun == 0 ? '' : 'checked' }} data-username="{{ $item->username }}">
                                            <span class="switch-state bg-primary"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('input[type="checkbox"]').on('change', function() {
            var username = $(this).data('username');
            if ($(this).is(':checked')) {
                if (confirm('Apakah Anda ingin mengaktifkan akun ini?')) {
                    // Kirim permintaan AJAX untuk mengubah status_akun menjadi 1
                    $.ajax({
                        type: 'POST',
                        url: '/mobilink/mitra/activate-account',
                        data: {
                            username: username
                        },
                        success: function(response) {
                            console.log(response);
                            // Tambahkan logika untuk menangani respons dari server
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                            // Tambahkan penanganan kesalahan di sini
                        }
                    });
                } else {
                    // Batalkan tindakan jika pengguna membatalkan konfirmasi
                    $(this).prop('checked', false);
                }
            }
        });
    });
</script>
@endsection
