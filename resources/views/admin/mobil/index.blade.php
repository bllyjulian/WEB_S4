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
        <div class="col-sm-12 d-flex justify-content-end mb-3 mr-3">
            <a style="box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;" href="{{ route('admin.mobil.tambahmobil') }}" class="btn btn-success">Tambah</a>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive product-table">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">Gambar</th>
                                    <th>Brand</th>
                                    <th>Harga Sewa</th>
                                    <th>Kapasitas Penumpang</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mobils as $mobil)
                                    <tr>
                                        <td><img style="width: 100px;" src="{{ asset($mobil->foto_mobil) }}" alt=""></td>
                                        <td>{{ $mobil->nama_mobil }}</td>
                                        <td>{{ $mobil->harga_sewa_perhari }}</td>
                                        <td>{{ $mobil->kapasitas_penumpang }}</td>
                                        <td>{{ $mobil->username }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <form action="{{ route('admin.mobil.hapus', ['id_mobil' => $mobil->id_mobil]) }}" method="POST" class="form-hapus">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button style="border-radius:5px; margin-right: 6px;" type="submit" class="btn btn-danger btn-hapus" data-id="{{ $mobil->id_mobil }}">Hapus</button>
                                                </form>
                                                <button style="border-radius:5px;" class="btn btn-info btn-xs" type="button" title="">
                                                    <a style="color:white;" href="{{ route('admin.mobil.editmobil', ['id_mobil' => $mobil->id_mobil]) }}">Edit</a>
                                                </button>
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
