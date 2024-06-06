@extends('layouts.simple.master_mitra')
@section('title', 'Data Mobil')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rating.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert2.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h2>Data<span>Mobil</span></h2>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Mobil</li>
    <li class="breadcrumb-item">Data Mobil</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
            <div class="card-header">
                    <h5>Data Customer</h5>
                    <span>{{ count($customers) }} Customer Terdaftar</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive product-table">
                        <table class="display" id="basic-1">
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
                            @foreach($customers as $key => $item)
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
</div>
@endsection

@section('script')
<script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{ asset('assets/js/sweet-alert/app.js')}}"></script>
<script src="{{ asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/js/rating/jquery.barrating.js')}}"></script>
<script src="{{ asset('assets/js/rating/rating-script.js')}}"></script>
<script src="{{ asset('assets/js/ecommerce.js')}}"></script>
<script src="{{ asset('assets/js/product-list-custom.js')}}"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.btn-hapus');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();

            const idMobil = this.getAttribute('data-id');
            const form = this.closest('form');

            swal({
                title: "Apakah anda yakin ingin menghapus data ini?",
                text: "Data Mobil yang dihapus tidak dapat dikembalikan!",
                icon: "warning",
                buttons: ["Batal", "Hapus"],
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    swal("Sukses!", "Data Mobil berhasil dihapus.", "success").then(() => {
                        form.submit();
                    });
                }
            });
        });
    });
});
</script>
@endsection
