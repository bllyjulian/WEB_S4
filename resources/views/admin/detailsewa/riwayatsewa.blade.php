@extends('layouts.simple.master_mitra')
@section('title', 'Detail Sewa')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owlcarousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rating.css') }}">
<link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet/dist/leaflet.css" />
@endsection

@section('style')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
@endsection

@section('breadcrumb-title')
    <h2>Detail Sewa</h2>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Mobil</li>
    <li class="breadcrumb-item">Data Sewa</li>
    <li class="breadcrumb-item active">Detail Sewa</li>
@endsection

@section('content')
<div class="container-fluid">
<div class="card">
        <div class="row product-page-main">
            <div class="col-xl-4">
                    <div class="item"><img src="{{ asset($mobils->foto_mobil) }}" alt=""></div>
            </div>
            <div class="col-xl-8">
                <div class="product-page-details">
                    <h3>{{ $mobils->nama_mobil }}</h3>

                </div>
                <hr>
                <p>{{ $mobils->status }}</p>
                <div class="product-price digits">
                    <h2>Rp. {{ number_format($mobils->harga_sewa_perhari, 0, ',', '.') }}</h2>
                </div>
                <hr>
                <div>
                    <table class="product-page-width">
                        <tbody>
                            <tr>
                                <td><h6>Tipe :</h6></td>
                                <td>{{ $mobils->tipe }}</td>
                            </tr>
                            <tr>
                                <td><h6>Status :</h6></td>
                                <td class="in-stock">{{ $customers[0]['status'] }}</td>
                            </tr>
                            
                            <tr>
                                <td><h6>Tanggal Mulai :</h6></td>
                                <td class="in-stock">{{ $customers[0]['tanggal_mulai'] }}</td>
                            </tr>
                            <tr>
                                <td><h6>Tanggal Akhir :</h6></td>
                                <td class="in-stock">{{ $customers[0]['tanggal_akhir'] }}</td>
                            </tr>
                          
                            
                        </tbody>
                    </table>
                </div>
                <hr>
                <tr>
                    <td><span id="countdown-label">Waktu Tersisa :</span></td>
                    <td class="in-stock"><div id="countdown" style="font-size: 24px; font-weight: bold; color: blue;"></div></td>
                </tr>
                <div class="tombol text-right mt-4">
                @if ($customers[0]['status'] == 'Belum Diambil')
                <button style="border-radius:5px;" type="button" class="btn btn-danger" onclick="mobildiambil('{{ $customers[0]['id_booking'] }}')">Diambil?</button>
                @elseif ($customers[0]['status'] == 'Sedang Disewa')
                <button style="border-radius:5px;" type="button" class="btn btn-success" onclick="mobildikembalikan('{{ $customers[0]['id_booking'] }}')">Selesai?</button>
                @endif
                </div>
                </div>
        </div>
    </div>
    <div class="card">
        <div class="row product-page-main">
            <div class="col-sm-12">
                <ul class="nav nav-tabs nav-material mb-0" id="top-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true">Riwayat Sewa</a>
                        <div class="material-border"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">Lacak</a>
                        <div class="material-border"></div>
                    </li>
                
                </ul>
                <div class="tab-content" id="top-tabContent">
                    <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                        <div style="margin-top: 20px;" class="row">
                        <div class="col-sm-12">
                               
                                    <div class="card-header">
                                        <h5>Data Penyewa</h5>
                                        <span>{{ count($customers) }} Customer telah menyewa mobil ini</span>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-xl">
                                            <thead>
                                                <tr>
                                                    <th>Foto Profil</th>
                                                    <th>Username</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Email</th>
                                                    <th>Nomor Hp</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Domisili</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($customers as $item)
                                                <tr>
                                                <td><img style="width: 50px; border-radius: 50%" src="{{ asset($item['foto_profil']) }}"></td>
                                                    <td>{{ $item['username_mb'] }}</td>
                                                    <td>{{ $item['nama'] }}</td>
                                                    <td>{{ $item['email'] }}</td>
                                                    <td>{{ $item['nomor_hp_user'] }}</td>
                                                    <td>{{ $item['tgl_lahir'] }}</td>
                                                    <td>{{ $item['domisili'] }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                        <div id="map" style="height: 60vh; width: 100%; border-radius:20px; margin-top: 20px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/rating/jquery.barrating.js') }}"></script>
<script src="{{ asset('assets/js/rating/rating-script.js') }}"></script>
<script src="{{ asset('assets/js/ecommerce.js') }}"></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    @if ($customers[0]['status'] == 'Sedang Disewa' || $customers[0]['status'] == 'Belum Diambil')
    var countdownElement = document.getElementById('countdown');
    var countdownLabel = document.getElementById('countdown-label');
    var endDate;

    if ('{{ $customers[0]['status'] }}' == 'Sedang Disewa') {
        endDate = new Date('{{ $customers[0]['tanggal_akhir'] }}').getTime();
        countdownLabel.textContent = 'Waktu Sewa Tersisa:';
    } else if ('{{ $customers[0]['status'] }}' == 'Belum Diambil') {
        endDate = new Date('{{ $customers[0]['tanggal_mulai'] }}').getTime();
        countdownLabel.textContent = 'Waktu Tersisa Pengambilan:';
    }

    var countdownInterval = setInterval(function() {
        var now = new Date().getTime();
        var distance = endDate - now;

        var days = Math.floor(Math.abs(distance) / (1000 * 60 * 60 * 24));
        var hours = Math.floor((Math.abs(distance) % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((Math.abs(distance) % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((Math.abs(distance) % (1000 * 60)) / 1000);

        if ('{{ $customers[0]['status'] }}' == 'Sedang Disewa') {
            if (distance < 0) {
                countdownElement.innerHTML = '-' + days + ' Hari ' + hours + ' Jam ' + minutes + ' Menit ' + seconds + ' Detik ';
                countdownLabel.textContent = 'Durasi Sewa Telah Habis';
                countdownElement.style.color = 'red';
                countdownLabel.style.color = 'red'; 
            } else {
                countdownElement.innerHTML =  days + ' Hari ' + hours + ' Jam ' + minutes + ' Menit ' + seconds + ' Detik ';
            }
        } else if ('{{ $customers[0]['status'] }}' == 'Belum Diambil') {
            if (distance < 0) {
                countdownElement.innerHTML = '-' + days + ' Hari ' + hours + ' Jam ' + minutes + ' Menit ' + seconds + ' Detik ';
                countdownLabel.textContent = 'Penyewa Belum Mengambil Mobil Ini';
                countdownElement.style.color = 'red';
                countdownLabel.style.color = 'red'; 
            } else {
                countdownElement.innerHTML = days + ' Hari ' + hours + ' Jam ' + minutes + ' Menit ' + seconds + ' Detik ';
            }
        }
    }, 1000);
    @endif
});

    function mobildiambil(id_booking) {
    Swal.fire({
        title: 'Apakah penyewa telah mengambil mobil ini?',
        text: 'Setelah mobil di ambil, status mobil akan berubah menjadi disewa!',
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
                url: '{{ route('admin.detailsewa.diambil', ['id_booking' => ':id_booking']) }}'.replace(':id_booking', id_booking),
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    Swal.fire(
                        'Sukses!',
                        'Mobil berhasil sedang disewa!',
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
    function mobildikembalikan(id_booking) {
    Swal.fire({
        title: 'Apakah penyewa telah Selesai menyewa mobil ini?',
        text: 'Setelah mobil selesai disewa, status mobil akan berubah menjadi tersedia dan dapat disewa oleh orang lain!',
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
                url: '{{ route('admin.detailsewa.selesai', ['id_booking' => ':id_booking']) }}'.replace(':id_booking', id_booking),
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    Swal.fire(
                        'Sukses!',
                        'Mobil selesai disewa!',
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
 document.addEventListener('DOMContentLoaded', function () {
    var map, marker;

    function initializeMap() {
        if (!map) {
            map = L.map('map', {
                maxBounds: [[-11.0, 95.0], [6.0, 141.0]], // Indonesia bounds
                maxBoundsViscosity: 1.0,
                minZoom: 5,
                attributionControl: false
            }).setView([-2.5, 117.0], 6); // Center of Indonesia

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 18,
                attribution: '© OpenStreetMap'
            }).addTo(map);

            fetch('{{ route('admin.detailsewa.location', $mobils->id_mobil) }}')
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        alert(data.error);
                    } else {
                        var latLng = [data.latitude, data.longitude];
                        map.setView(latLng, 15);
                        var customIcon = L.icon({
                            iconUrl: '/assets/images/logo/location.png',
                            iconSize: [80, 80],
                            iconAnchor: [45, 100],
                            popupAnchor: [0, -100]
                        });

                        marker = L.marker(latLng, {icon: customIcon}).addTo(map)
                            .bindPopup('<b>Lokasi Mobil saat ini</b><br><br>Latitude: ' + data.latitude + '<br>Longitude: ' + data.longitude)
                            .openPopup();
                    }
                })
                .catch(error => console.error('Error fetching location:', error));
        }
    }

    function resizeMap() {
        if (map) {
            map.invalidateSize();
        }
    }

    document.getElementById('profile-top-tab').addEventListener('click', function() {
        initializeMap();
        setTimeout(resizeMap, 200);
    });

    window.addEventListener('resize', resizeMap);
});
</script>
@endsection
