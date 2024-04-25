@extends('layouts.simple.master_mitra')

@section('title', 'Customer')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h2>B-Rental<span>Customer</span></h2>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Customer</li>
    <li class="breadcrumb-item">Data Customer</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Customer</h5>
                    <span>21 Customer Terdaftar</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-xl">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Nomor Hp</th>
                                <th>Tanggal Lahir</th>
                                <th>Domisili</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customer as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->username_mb }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->nomor_hp_user }}</td>
                                <td>{{ $item->tgl_lahir }}</td>
                                <td>{{ $item->domisili }}</td>
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
