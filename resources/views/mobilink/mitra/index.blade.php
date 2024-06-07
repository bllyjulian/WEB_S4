@extends('layouts.simple.master_mobilink')

@section('title', 'Data Mobil')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rating.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert2.css')}}">
<style>
    .table th:nth-child(7) {
        width: 40px;
    }
</style>
@endsection

@section('breadcrumb-title')
    <h2>Data<span>Mitra</span></h2>
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
                    <span>{{ count($mitra) }} Customer Terdaftar</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive product-table">
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Logo Toko</th>
                                <th>Nama Toko</th>
                                <th>Username</th>
                                <th>Nama Pemilik</th>
                                <th>Nomor Hp</th>
                                <th>Tanggal Daftar</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($mitra as $item)
                            <tr>
                                <td><img style="width: 50px; border-radius: 50%;" src="{{ asset($item->logo_mitra) }}" alt=""></td>
                                <td>{{ $item->nama_toko }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->nomor_hp }}</td>
                                <td>{{ $item->tgl_daftar }}</td>
                                <td>
                                @if ($item->status_akun == 1)
    <button style="border-radius:5px;" type="button" class="btn btn-success" onclick="editAkun('{{ $item->username }}')">Aktif</button>
@elseif ($item->status_akun == 2)
    <button style="border-radius:5px;" type="button" class="btn btn-danger" onclick="aktifAkun('{{ $item->username }}')">Dibanned</button>
@elseif ($item->status_akun == 3)
    <button style="border-radius:5px;" type="button" class="btn btn-dark" onclick="aktifAkun('{{ $item->username }}')">Ditolak</button>
@else
    <button style="border-radius:5px;" type="button" class="btn btn-info" onclick="accAkun('{{ $item->username }}')">Pending</button>
@endif
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
</div>
@endsection

@section('script')
<script src="{{ asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/js/rating/jquery.barrating.js')}}"></script>
<script src="{{ asset('assets/js/rating/rating-script.js')}}"></script>
<script src="{{ asset('assets/js/ecommerce.js')}}"></script>
<script src="{{ asset('assets/js/product-list-custom.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
function editAkun(username) {
    Swal.fire({
        title: 'Apakah Anda yakin ingin membanned akun ini?',
        text: 'Setelah dibanned, akun tidak dapat digunakan untuk login ke aplikasi!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Banned',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'POST',
                url: '{{ route('mobilink.mitra.banned', ['username' => ':username']) }}'.replace(':username', username),
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    Swal.fire(
                        'Sukses!',
                        'Akun berhasil dibanned!',
                        'success'
                    ).then(() => {
                        location.reload();
                    });
                },
                error: function(xhr, status, error) {
                    Swal.fire(
                        'Gagal!',
                        'Terjadi kesalahan saat membanned akun.',
                        'error'
                    );
                }
            });
        }
    });
}
function aktifAkun(username) {
    Swal.fire({
        title: 'Apakah Anda yakin ingin mengaktifkan akun ini?',
        text: 'Setelah diaktifkan, akun dapat digunakan untuk login ke aplikasi!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Aktifkan',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'POST',
                url: '{{ route('mobilink.mitra.setujui', ['username' => ':username']) }}'.replace(':username', username),
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    Swal.fire(
                        'Sukses!',
                        'Akun berhasil diaktifkan!',
                        'success'
                    ).then(() => {
                        location.reload();
                    });
                },
                error: function(xhr, status, error) {
                    Swal.fire(
                        'Gagal!',
                        'Terjadi kesalahan saat mengaktifkan akun.',
                        'error'
                    );
                }
            });
        }
    });
}

function accAkun(username) {
    Swal.fire({
        title: 'Apakah Anda ingin menyetujui atau menolak mengaktifkan akun ini?',
        html: `
            <button class="btn btn-success swal-button mt-4" id="setujui">Aktifkan</button>
            <button class="btn btn-danger swal-button mt-4" id="tolak">Tolak</button>
        `,
        icon: 'warning',
        showCancelButton: false,
        showConfirmButton: false,
    });

    // Menambahkan event listener untuk tombol "Setujui"
    document.getElementById('setujui').addEventListener('click', function() {
        $.ajax({
            type: 'POST',
            url: '{{ route('mobilink.mitra.setujui', ['username' => ':username']) }}'.replace(':username', username),
            data: {
                _token: '{{ csrf_token() }}',
            },
            success: function(response) {
                Swal.fire(
                    'Sukses!',
                    'Transaksi berhasil disetujui dan diaktifkan.',
                    'success'
                ).then(() => {
                    location.reload();
                });
            },
            error: function(xhr, status, error) {
                Swal.fire(
                    'Gagal!',
                    'Terjadi kesalahan saat menyetujui akun.',
                    'error'
                );
            }
        });
    });

    // Menambahkan event listener untuk tombol "Tolak"
    document.getElementById('tolak').addEventListener('click', function() {
        $.ajax({
            type: 'POST',
            url: '{{ route('mobilink.mitra.tolak', ['username' => ':username']) }}'.replace(':username', username),
            data: {
                _token: '{{ csrf_token() }}',
            },
            success: function(response) {
                Swal.fire(
                    'Sukses!',
                    'Transaksi berhasil ditolak.',
                    'success'
                ).then(() => {
                    location.reload();
                });
            },
            error: function(xhr, status, error) {
                Swal.fire(
                    'Gagal!',
                    'Terjadi kesalahan saat menolak transaksi.',
                    'error'
                );
            }
        });
    });
}

</script>
@endsection