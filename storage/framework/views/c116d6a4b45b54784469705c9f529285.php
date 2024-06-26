

<?php $__env->startSection('header-title', 'Lacak Pendaki'); ?>

<?php $__env->startSection('style'); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content-body">
<div class="container-fluid">
<div class="modal fade" id="pilihPendakiModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pilih Pendaki</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form id="selectPendakiForm">
                    <div class="form-group">
                        <label for="pendakiSelect">Nama Pendaki</label>
                        <select class="form-control" id="pendakiSelect">
                            <?php $__currentLoopData = $datapendaki; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pendaki): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($pendaki->id_pendaki); ?>"><?php echo e($pendaki->nama); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" id="selectPendakiBtn">Pilih</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                 <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <p class="fs-14 mb-1">Nama Pendaki</p>
                        <span class="fs-30 text-black font-w600" id="selectedPendaki">Belum dipilih</span>
                    </div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pilihPendakiModal">
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var indonesiaBounds = L.latLngBounds(
        L.latLng(-11.0, 95.0), // Batas selatan barat
        L.latLng(6.0, 141.0)   // Batas utara timur
    );

    var map = L.map('map', {
        maxBounds: indonesiaBounds,
        maxBoundsViscosity: 1.0,
        minZoom: 5,
        attributionControl: false
    });

    var initialCoordinates = [-8.158988517561545, 113.72240652566545];
    var initialZoomLevel = 20; // Zoom level

    map.setView(initialCoordinates, initialZoomLevel);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var customIcon = L.icon({
        iconUrl: '/htd/icons/lokasi.png',
        iconSize: [50, 50],
        iconAnchor: [25, 50],
    });

    var pos1Icon = L.icon({
        iconUrl: '/htd/icons/pos.png',
        iconSize: [50, 50],
        iconAnchor: [25, 50],
    });

    var pos2Icon = L.icon({
        iconUrl: '/htd/icons/pos.png',
        iconSize: [50, 50],
        iconAnchor: [25, 50],
    });

    // Definisikan koordinat untuk pos1 dan pos2
    var pos1Coordinates = [-8.157, 113.722];
    var pos2Coordinates = [-8.159, 113.724];

    // Fungsi untuk menambahkan marker ke peta
    function addMarkerToMap(coordinates, title, icon) {
        return L.marker(coordinates, { icon: icon }).addTo(map).bindTooltip(title);
    }

    // Tambahkan marker posisi 1 dengan ikon kustom
    var pos1Marker = addMarkerToMap(pos1Coordinates, 'Pos 1', pos1Icon);

    // Tambahkan marker posisi 2 dengan ikon kustom
    var pos2Marker = addMarkerToMap(pos2Coordinates, 'Pos 2', pos2Icon);

    var marker = L.marker(initialCoordinates, { icon: customIcon });
    var polylineLayer; // Layer untuk polyline
    var lokasiDipilih = []; // Array untuk menyimpan lokasi yang sudah dipilih

    // Fungsi untuk mengupdate posisi marker
    function updateMarkerPosition(latlng) {
        marker.setLatLng(latlng);
    }

    // Fungsi untuk menampilkan marker
    function showMarker() {
        if (!map.hasLayer(marker)) {
            marker.addTo(map);
        }
    }

    // Fungsi untuk menghapus polyline sebelumnya
    function removePreviousPolylines() {
        if (polylineLayer) {
            map.removeLayer(polylineLayer);
        }
    }

    // Fungsi untuk menggambar ulang polylines
    function updatePolylines() {
        removePreviousPolylines();

        polylineLayer = L.polyline(lokasiDipilih, { color: 'blue' }).addTo(map);
    }

    // Fungsi untuk memilih koordinat secara acak dari availableCoordinates
    function selectRandomCoordinate() {
        var availableCoordinates = [
            [-8.158481710507761, 113.72316098620591],
            [-8.157970458778935, 113.72226830727764],
            [-8.157757374690295, 113.72293929270181],
            [-8.158473502198445, 113.72410267634831],
            [-8.16045736224242, 113.72116977639917],
            [-8.161582643714546, 113.7233520923408]
        ];

        // Filter koordinat yang tersedia
        var filteredCoordinates = availableCoordinates.filter(function (coord) {
            // Convert koordinat menjadi string untuk perbandingan
            var coordStr = coord.toString();
            return !lokasiDipilih.includes(coordStr);
        });

        // Jika semua koordinat telah dipilih, reset lokasiDipilih
        if (filteredCoordinates.length === 0) {
            lokasiDipilih = [];
            filteredCoordinates = availableCoordinates;
        }

        // Pilih secara acak dari filteredCoordinates
        var randomIndex = Math.floor(Math.random() * filteredCoordinates.length);
        return filteredCoordinates[randomIndex];
    }

    // Fungsi untuk memindahkan marker secara acak dalam rentang kecil di sekitar posisi saat ini
    function moveMarkerRandomly() {
        var stepSize = 0.000039; // Sesuaikan ukuran langkah sesuai kebutuhan (lebih kecil untuk pergerakan yang lebih halus)
        var currentLatLng = marker.getLatLng();

        // Hitung koordinat baru dalam rentang kecil
        var newLat = currentLatLng.lat + (Math.random() - 0.1) * stepSize;
        var newLng = currentLatLng.lng + (Math.random() - 0.1) * stepSize;
        var newLatLng = L.latLng(newLat, newLng);

        // Perbarui posisi marker
        updateMarkerPosition(newLatLng);

        // Tambahkan polyline untuk merekam pergerakan jika sudah ada lokasi yang dipilih
        if (lokasiDipilih.length > 0) {
            lokasiDipilih.push([newLatLng.lat, newLatLng.lng]);
            updatePolylines();
        }
    }
    function removeAllPolylines() {
    map.eachLayer(function (layer) {
        if (layer instanceof L.Polyline) {
            map.removeLayer(layer);
        }
    });
}

    // Handler untuk tombol Select Pendaki
    document.getElementById('selectPendakiBtn').addEventListener('click', function () {
        var pendakiId = document.getElementById('pendakiSelect').value;
        var pendakiNama = document.getElementById('pendakiSelect').options[document.getElementById('pendakiSelect').selectedIndex].text;

        if (pendakiId) {
            // Reset peta dan inisialisasi kembali marker
            removeAllPolylines();
            resetMap();

            // Update nama pendaki yang dipilih di halaman
            document.getElementById('selectedPendaki').textContent = pendakiNama;

            // Pilih koordinat secara acak yang tidak ada di lokasiDipilih
            var selectedCoordinate = selectRandomCoordinate();

            // Update posisi marker
            var newLatLng = L.latLng(selectedCoordinate);
            updateMarkerPosition(newLatLng);

            // Tampilkan marker di peta
            showMarker();

            // Center map pada posisi marker baru
            map.setView(newLatLng, initialZoomLevel);

            // Tambahkan lokasi yang dipilih ke lokasiDipilih
            lokasiDipilih.push([newLatLng.lat, newLatLng.lng]);

            // Tambahkan polyline dari marker ke pos1 jika belum ada yang dipilih
            if (lokasiDipilih.length === 1) {
                var initialLatLng = marker.getLatLng();
                var initialPolyline = L.polyline([initialLatLng, L.latLng(pos1Coordinates)], { color: 'blue' }).addTo(map);
            }

            // Sembunyikan modal
            $('#pilihPendakiModal').modal('hide');

            // Set interval untuk pergerakan marker
            setInterval(moveMarkerRandomly, 1000); // Sesuaikan interval untuk pergerakan yang lebih halus
        } else {
            // Sembunyikan marker jika tidak ada pendaki yang dipilih
            if (map.hasLayer(marker)) {
                map.removeLayer(marker);
            }

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Pilihlah pendaki terlebih dahulu!',
            });
        }
    });

    // Fungsi untuk mereset peta
    function resetMap() {
        // Hapus polyline sebelumnya
        removePreviousPolylines();

        // Reset marker ke posisi awal
        marker.setLatLng(initialCoordinates);

        // Kosongkan lokasiDipilih
        lokasiDipilih = [];
    }

// Handle masalah saat memperbesar peta
setTimeout(function () {
    map.invalidateSize();
}, 500);

});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutshtd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webS4\resources\views/htdgemastik/lacak/index.blade.php ENDPATH**/ ?>