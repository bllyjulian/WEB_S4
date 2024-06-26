@extends('layoutshtd.master')

@section('header-title', 'Data Pendaki')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('htd/assets/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('htd/assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('htd/assets/css/rating.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('htd/assets/css/sweetalert2.css')}}">
@endsection

@section('content')
<div class="content-body">
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table card-table display dataTablesCard">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Asal</th>
                                    <th>No Hp yang <br>dapat dihubungi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datapendaki as $index => $pendaki)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $pendaki->nik }}</td>
                                    <td>{{ $pendaki->nama }}</td>
                                    <td>{{ $pendaki->umur }} Tahun</td>
                                    <td>{{ $pendaki->asal }}</td>
                                    <td>{{ $pendaki->nohp }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)" class="mr-4">
                                                <i class="las la-pencil-alt scale-2"></i>
                                            </a>
                                            <form action="{{ route('datapendaki.hapus', $pendaki->id_pendaki) }}" method="POST" class="delete-form">
                                                @csrf
                                                @method('DELETE')
												<button type="submit" class="btn  btn-sm delete-pendaki" data-id="{{ $pendaki->id_pendaki }}">
													<i class="las la-trash-alt scale-2 text-danger"></i>
												</button>
                                            </form>
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
</div>
@endsection

@section('script')
<script src="{{ asset('htd/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('htd/assets/js/sweetalert2.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#example2').DataTable({
            searching: false,
            paging: true,
            select: false,
            lengthChange: false
        });

        // Ajax untuk menghapus data pendaki
        $('.delete-pendaki').click(function (e) {
            e.preventDefault();
            var pendaki_id = $(this).data('id');

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak dapat mengembalikan data pendaki yang dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: '{{ route('datapendaki.hapus', '') }}' + '/' + pendaki_id,
                        data: {
                            '_token': '{{ csrf_token() }}',
                        },
                        success: function (data) {
                            Swal.fire(
                                'Terhapus!',
                                'Data pendaki telah berhasil dihapus.',
                                'success'
                            ).then(() => {
                                window.location.reload();
                            });
                        },
                        error: function (data) {
                            console.log('Error:', data);
                            Swal.fire(
                                'Oops...',
                                'Terjadi kesalahan! Silakan coba lagi.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    });
</script>
@endsection
