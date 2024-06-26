    <!-- JS -->
    <script src="{{ asset('htd/vendor/global/global.min.js')}}"></script>
	<script src="{{ asset('htd/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{ asset('htd/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('htd/js/custom.min.js')}}"></script>
	<script src="{{ asset('htd/js/deznav-init.js')}}"></script>
	<script src="{{ asset('htd/vendor/owl-carousel/owl.carousel.js')}}"></script>
	
	<!-- Chart piety plugin files -->
    <script src="{{ asset('htd/vendor/peity/jquery.peity.min.js')}}"></script>
	
	<!-- Apex Chart -->
	<script src="{{ asset('htd/vendor/apexchart/apexchart.js')}}"></script>
	
	<!-- Dashboard 1 -->
	<script src="{{ asset('htd/js/dashboard/event-detail.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    $(document).ready(function () {
        $('#btnSimpan').click(function (e) {
            e.preventDefault(); // Mencegah reload halaman

            var nik = $('#nik').val();
            var nama = $('#nama').val();
            var umur = $('#umur').val();
            var asal = $('#asal').val();
            var nohp = $('#nohp').val();

            $.ajax({
                type: 'POST',
                url: '{{ route('tambahpendaki') }}',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'nik': nik,
                    'nama': nama,
                    'umur': umur,
                    'asal': asal,
                    'nohp': nohp
                },
                success: function (data) {
                    // Tutup modal setelah berhasil menambahkan
                    $('#addOrderModalside').modal('hide');

                    // Tampilkan SweetAlert
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses!',
                        text: 'Data berhasil ditambahkan.',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        // Redirect ke halaman data pendaki setelah menekan OK
                        if (result.isConfirmed || result.isDismissed) {
                            window.location.href = '{{ route('datapendaki') }}';
                        }
                    });
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    });
</script>
<script>
        $(document).ready(function () {
            $('#btnSimpanLaporan').click(function (e) {
                e.preventDefault(); // Mencegah reload halaman

                var idPendaki = $('#id_pendaki').val();
                var jenisLaporan = $('#jenis_laporan').val();

                $.ajax({
                    type: 'POST',
                    url: '{{ route("laporan.store") }}',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        'id_pendaki': idPendaki,
                        'jenis_laporan': jenisLaporan
                    },
                    success: function (data) {
                        // Tutup modal setelah berhasil menambahkan
                        $('#kirimlaporan').modal('hide');

                        // Tampilkan SweetAlert
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses!',
                            text: 'Laporan berhasil disimpan.',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            // Redirect atau lakukan tindakan lainnya setelah menekan OK
                            if (result.isConfirmed || result.isDismissed) {
                                // Misalnya, reload halaman atau navigasi ke halaman lain
                                window.location.reload(); // Contoh: reload halaman saat ini
                            }
                        });
                    },
                    error: function (xhr, status, error) {
                        console.error('Error:', error);
                        // Tampilkan pesan error jika diperlukan
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Terjadi kesalahan saat menyimpan laporan.',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });
    </script>
    @yield('script')