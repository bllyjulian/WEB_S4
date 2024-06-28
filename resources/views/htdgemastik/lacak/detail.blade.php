@extends('layoutshtd.master')

@section('header-title', 'Lacak Pendaki')

@section('style')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<style>
   .containermap {
        height: 70vh;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 10px rgba(0, 0, 0, 0.1);
        border-radius: 20px;
        position: relative; /* Tambahkan posisi relatif */
   /* Atur z-index ke -1 untuk menempatkannya di bawah */
    }
    #map {
        margin: 0;
        height: 100%;
        width: 100%;
        border-radius: 20px;
        position: absolute; /* Ubah menjadi posisi absolut */
        top: 0;
        left: 0;
        z-index: 2;
    }
</style>
@endsection

@section('content')

<div class="content-body">
<div class="container-fluid">

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                 <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="fs-14 mb-1">Nama Pendaki</p>
                        <span class="fs-30 text-black font-w600" id="selectedPendaki">
                                @if ($pendaki)
                                    {{ $pendaki->nama }}
                                @else
                                    Belum dipilih
                                @endif
                            </span>
                    </div>
                    <button type="button" class="btn btn-primary p-3" data-toggle="modal" data-target="#pilihPendakiModal">
                        Pilih Pendaki
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 p-2">
        <div style="height: 70vh;" class="card">
            <div class="containermap">
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('script')
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var indonesiaBounds = L.latLngBounds(
        L.latLng(-11.0, 95.0), // Batas selatan barat
        L.latLng(6.0, 141.0)   // Batas utara timur
    );

    var  map = L.map('map', {
        maxBounds: indonesiaBounds,
        maxBoundsViscosity: 1.0,
        minZoom: 5,
        attributionControl: false
    });

    var initialZoomLevel = 20; // Zoom level
    var customIcon = L.icon({
        iconUrl: '/htd/icons/lokasi.png',
        iconSize: [50, 50],
        iconAnchor: [25, 50], // Atur posisi titik akhir di atas ikon
    });

    var pos1Icon = L.icon({
        iconUrl: '/htd/icons/pos.png',
        iconSize: [50, 50],
        iconAnchor: [25, 50], // Atur posisi titik akhir di atas ikon
    });

    var pos2Icon = L.icon({
        iconUrl: '/htd/icons/pos.png',
        iconSize: [50, 50],
        iconAnchor: [25, 50], // Atur posisi titik akhir di atas ikon
    });

    var marker = null; // Variabel untuk menyimpan marker
    var pos1Coordinates = [-8.158446131644444, 113.72153504934403]; // Koordinat posisi 1
    var pos2Coordinates = [-8.158868706211257, 113.72315581936098]; // Koordinat posisi 2
    var polylines = []; // Array untuk menyimpan objek polyline
    var firstMove = true; // Flag untuk menandai gerakan pertama

    // Daftar koordinat yang tersedia
    var availableCoordinates = [
        // [-8.158481710507761, 113.72316098620591],
        // [-8.157970458778935, 113.72226830727764],
        // [-8.157757374690295, 113.72293929270181],
        // [-8.158473502198445, 113.72410267634831],
        // [-8.16045736224242, 113.72116977639917],
        // [-8.161582643714546, 113.7233520923408]
        [-8.161286513797652, 113.72304384267171]
    ];

    // Function untuk memilih koordinat secara acak dari availableCoordinates
    function selectRandomCoordinate() {
        var randomIndex = Math.floor(Math.random() * availableCoordinates.length);
        return availableCoordinates[randomIndex];
    }

    // Function untuk menambahkan marker ke peta pada koordinat tertentu dengan judul
    function addMarkerToMap(coordinates, title, icon) {
        var newMarker = L.marker(coordinates, { icon: icon }).addTo(map);
        newMarker.bindTooltip(title, {
            direction: 'top',
            offset: [0, -50],
            closeOnClick: false, // Menonaktifkan penutupan tooltip saat diklik marker
            autoClose: false // Menonaktifkan penutupan tooltip saat marker dihover
        }).openTooltip(); // Atur posisi tooltip
        return newMarker;
    }

    // Function untuk menggerakkan marker secara acak
    function moveMarkerRandomly(marker) {
        var stepSize = 0.0001; // Sesuaikan ukuran langkah sesuai kebutuhan untuk pergerakan yang lebih halus
        var currentLatLng = marker.getLatLng();

        // Calculate new coordinates within a small range
        var newLat = currentLatLng.lat + (Math.random() - 0.5) * stepSize;
        var newLng = currentLatLng.lng + (Math.random() - 0.5) * stepSize;
        var newLatLng = L.latLng(newLat, newLng);

        // Update marker position
        marker.setLatLng(newLatLng);

        // Tambahkan titik baru ke polylines
        polylines.push(newLatLng);

        // Gambar ulang polylines
        updatePolylines();

        // Perbarui jarak ke pos1Coordinates dan pos2Coordinates secara real-time
        updateDistance();
    }

    // Function untuk menggambar ulang polylines
    function updatePolylines() {
        // Hapus semua polylines yang ada
        for (var i = 0; i < polylines.length - 1; i++) {
            var polylinePoints = [polylines[i], polylines[i + 1]];
            L.polyline(polylinePoints, { color: 'blue' }).addTo(map);
        }
    }

    // Function untuk inisialisasi polylines dari posisi awal ke marker
    function initializePolylines() {
        // Buat polyline dari pos1Coordinates ke koordinat awal marker
        var initialCoordinates = marker.getLatLng();
        var polylinePoints = [L.latLng(pos1Coordinates), initialCoordinates];
        L.polyline(polylinePoints, { color: 'blue' }).addTo(map);
    }

    // Function untuk memperbarui jarak ke pos1Coordinates dan pos2Coordinates
    function updateDistance() {
        var currentLatLng = marker.getLatLng();
        var distanceToPos1 = currentLatLng.distanceTo(L.latLng(pos1Coordinates));
        var distanceToPos2 = currentLatLng.distanceTo(L.latLng(pos2Coordinates));
        
        var tooltipContent = `Jarak ke Pos 1: ${distanceToPos1.toFixed(2)} meter<br>`
                           + `Jarak ke Pos 2: ${distanceToPos2.toFixed(2)} meter`;

        // Update tooltip content
        marker.getTooltip().setContent(tooltipContent);
    }

    // Inisialisasi peta dan tambahkan tile layer
    map.setView(pos1Coordinates, initialZoomLevel);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Tambahkan marker posisi 1 dengan ikon kustom
    var pos1Marker = addMarkerToMap(pos1Coordinates, 'Pos 1', pos1Icon);

    // Tambahkan marker posisi 2 dengan ikon kustom
    var pos2Marker = addMarkerToMap(pos2Coordinates, 'Pos 2', pos2Icon);

    // Tambahkan marker awal secara acak dengan ikon standar
    var initialCoordinates = selectRandomCoordinate();
    marker = addMarkerToMap(initialCoordinates, 'Lokasi Saat Ini', customIcon);

    // Inisialisasi polylines pada awalnya
    initializePolylines();

    // Function untuk memulai interval pergerakan marker
    function startMarkerMovement() {
        setInterval(function() {
            moveMarkerRandomly(marker);
        }, 1000); // Sesuaikan interval untuk pergerakan yang lebih halus
    }

    // Handle masalah saat memperbesar peta
    setTimeout(function () {
        map.invalidateSize();
        startMarkerMovement(); // Mulai pergerakan setelah pembaruan selesai
    }, 500);

    // Function untuk menghandle jarak secara real-time
    setInterval(function() {
        updateDistance();
    }, 1000); // Interval untuk update jarak setiap detik
});
</script>
@endsection
