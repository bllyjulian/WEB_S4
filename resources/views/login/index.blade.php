<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/assets/images/icontitle.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/assets/images/icontitle.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/boxicons/2.0.7/css/boxicons.min.css">

    <title>Daftar</title>
    <style>
        :root {
            --primary-color: #6206A8;
            --secondary-color: #823CDD;
            --black: #000000;
            --white: #ffffff;
            --gray: #efefef;
            --gray-2: #757575;
            --facebook-color: #4267B2;
            --google-color: #DB4437;
            --twitter-color: #1DA1F2;
            --insta-color: #E1306C;
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100vh;
            overflow: hidden;
        }

        .container {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            height: 100vh;
        }

        .col {
            width: 50%;
        }

        .align-items-center {
            display: flex;
            align-items: center;
            /* justify-content: center; */
            text-align: center;
        }

        .form-wrapper {
            width: 100%;
            max-width: 28rem;
        }

        .form {
            margin-top: 13rem;
            padding: 1rem;
            background-color: var(--white);
            border-radius: 10px;
            width: 100%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            transform: scale(0);
            transition: .5s ease-in-out;
            transition-delay: 1s;
        }
        .form-daftar {
            margin-top: 3rem;
            padding: 1rem;
            background-color: var(--white);
            border-radius: 10px;
            width: 100%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            transform: scale(0);
            transition: .5s ease-in-out;
            transition-delay: 1s;
        }

        .input-group {
            position: relative;
            width: 100%;
            margin: 1rem 0;
        }

        .input-group i {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
            font-size: 1.4rem;
            color: var(--gray-2);
        }

        .input-group input {
            width: 100%;
            padding: 1rem 3rem;
            font-size: 1rem;
            background-color: var(--gray);
            border-radius: .5rem;
            border: 0.125rem solid var(--white);
            outline: none;
        }

        .input-group input:focus {
            border: 0.125rem solid var(--primary-color);
        }

        .form button {
            cursor: pointer;
            width: 100%;
            padding: .6rem 0;
            border-radius: .5rem;
            border: none;
            background-color: var(--primary-color);
            color: var(--white);
            font-size: 1.2rem;
            outline: none;
        }

        .form p {
            margin: 1rem 0;
            font-size: .7rem;
        }

        .flex-col {
            flex-direction: column;
        }

        .social-list {
            margin: 2rem 0;
            padding: 1rem;
            border-radius: 1.5rem;
            width: 100%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            transform: scale(0);
            transition: .5s ease-in-out;
            transition-delay: 1.2s;
        }

        .social-list>div {
            color: var(--white);
            margin: 0 .5rem;
            padding: .7rem;
            cursor: pointer;
            border-radius: .5rem;
            transform: scale(0);
            transition: .5s ease-in-out;
        }

        .social-list>div:nth-child(1) {
            transition-delay: 1.4s;
        }

        .social-list>div:nth-child(2) {
            transition-delay: 1.6s;
        }

        .social-list>div:nth-child(3) {
            transition-delay: 1.8s;
        }

        .social-list>div:nth-child(4) {
            transition-delay: 2s;
        }

        .social-list>div>i {
            font-size: 1.5rem;
            transition: .4s ease-in-out;
        }

        .social-list>div:hover i {
            transform: scale(1.5);
        }

        .facebook-bg {
            background-color: var(--facebook-color);
        }

        .google-bg {
            background-color: var(--google-color);
        }

        .twitter-bg {
            background-color: var(--twitter-color);
        }

        .insta-bg {
            background-color: var(--insta-color);
        }

        .pointer {
            cursor: pointer;
        }

        .container.sign-in .form.sign-in,
        .container.sign-in .social-list.sign-in,
        .container.sign-in .social-list.sign-in>div,
        .container.sign-up .form.sign-up,
        .container.sign-up .social-list.sign-up,
        .container.sign-up .social-list.sign-up>div {
            transform: scale(1);
        }

        .content-row {
            position: absolute;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 6;
            width: 100%;
        }

        .text {
            margin-top: 4rem;
            color: var(--white);
        }

        .text h2 {
            font-size: 3.5rem;
            font-weight: 800;
            margin: 2rem 0;
            transition: 1s ease-in-out;
        }

        .text p {
            font-weight: 600;
            transition: 1s ease-in-out;
            transition-delay: .2s;
        }
        .text-daftar {
            margin-top: 20rem;
            color: var(--white);
        }

        .text-daftar h2 {
            font-size: 3.5rem;
            font-weight: 800;
            margin: 2rem 0;
            transition: 1s ease-in-out;
        }

        .text-daftar p {
            font-weight: 600;
            transition: 1s ease-in-out;
            transition-delay: .2s;
        }
.textbwh p {
    padding-bottom: 30px;
}
        .img img {
            width: 30vw;
            transition: 1s ease-in-out;
            transition-delay: .4s;
        }

        .text.sign-in h2,
        .text.sign-in p,
        .img.sign-in img {
            transform: translateX(-250%);
        }

        .text-daftar.sign-up h2,
        .text-daftar.sign-up p,
        .img.sign-up img {
            transform: translateX(250%);
        }

        .container.sign-in .text.sign-in h2,
        .container.sign-in .text.sign-in p,
        .container.sign-in .img.sign-in img,
        .container.sign-up .text-daftar.sign-up h2,
        .container.sign-up .text-daftar.sign-up p,
        .container.sign-up .img.sign-up img {
            transform: translateX(0);
        }

        /* BACKGROUND */
        .container::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            height: 100vh;
            width: 300vw;
            transform: translate(35%, 0);
            background-image: linear-gradient(-45deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            transition: 1s ease-in-out;
            z-index: 6;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-bottom-right-radius: max(50vw, 50vh);
            border-top-left-radius: max(50vw, 50vh);
        }

        .container.sign-in::before {
            transform: translate(0, 0);
            right: 50%;
        }

        .container.sign-up::before {
            transform: translate(100%, 0);
            right: 50%;
        }

        /* RESPONSIVE */
        @media only screen and (max-width: 768px) {
            .col {
                width: 100%;
            }

            .container::before,
            .container.sign-in::before,
            .container.sign-up::before {
                height: 100vh;
                border-bottom-right-radius: 0;
                border-top-left-radius: 0;
                z-index: 0;
                transform: none;
                right: 0;
            }

            .container.sign-in .col.sign-in,
            .container.sign-up .col.sign-up {
                transform: translateY(0);
            }

            .content-row {
                align-items: flex-start !important;
            }

            .content-row .col {
                transform: translateY(0);
                background-color: unset;
            }

            .col {
                position: absolute;
                padding: 2rem;
                background-color: var(--white);
                border-top-left-radius: 2rem;
                border-top-right-radius: 2rem;
                transform: translateY(100%);
                transition: 1s ease-in-out;
            }

            .row {
                align-items: flex-end;
                justify-content: flex-end;
            }

            .form,
            .social-list {
                box-shadow: none;
                margin: 0;
                padding: 0;
            }

            .text {
                margin: 0;
            }

            .text p {
                display: block;
            }

            .text h2 {
                margin: .5rem;
                font-size: 2rem;
            }
            .text-daftar {
                margin: 0;
            }

            .text-daftar p {
                display: block;
            }

            .text-daftar h2 {
                margin: .5rem;
                font-size: 2rem;
            }

            .img img {
                width: 60%;
                height: auto;
            }
        }

        @media only screen and (max-width < 200px) {
            .form-wrapper {
                padding: 1rem;
            }

            
            .form button {
                font-size: 1rem;
                padding: .5rem;
            }
            .form-daftar p {
                padding-bottom: 600px;
            }
            .text h2 {
                font-size: 1.5rem;
            }
            .text-daftar h2 {
                font-size: 1rem;
            }
            .text-daftar p {
                font-size: 12px;
            }

            .input-group input {
                padding: .75rem 2rem;
                font-size: .9rem;
            }
            #mapModal {
            position: relative;
            transform: translate(-50%, -50%);
            background: white;
            border: 1px solid #ccc;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 10;
            width: 100%; /* Lebih baik menentukan lebar secara eksplisit */
            transition: transform 0.5s ease-in-out;
        }
        
        }

    </style>
</head>
<body>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')

    <div class="modal" id="mapModal" style="display: none; width: 100%; height: 100vh; padding: 0; overflow-y:scroll;">
 
    <div id="map" style="width: 100%; height: 100%; z-index: 70;">
    </div>
    <div style="display: flex; position:absolute; bottom: 0px; z-index:80; width: 100%; height: 10%" class="gg">
<button style="
 margin: 0;
    padding: 15px;
    border:none;
    border: radius 10px;
    width: 80%;
    color:white;
    font-family:'Poppins' ,serif;
    font-weight: 500;
    font-size: 16px;
    background-color: #4267B2;
    
    
    " class="tombolmaps" id="saveLocation">Simpan Lokasi</button>
        <button  style="
 margin: 0;
    padding: 15px;
    border:none;
    border: radius 10px;
    width: 20%;
    color:white;
    font-family:'Poppins' ,serif;
    font-weight: 500;
    font-size: 16px;
    background-color: #823CDD;
    " id="cancel">Batal</button>
</div>
</div>

<div id="container" class="container">

    <!-- FORM SECTION -->
    <div class="row">
        <!-- SIGN UP -->
        <div class="col align-items-center flex-col sign-up">
            <div class="form-wrapper align-items-center">
                <div class="form sign-up form-daftar">
                <form id="daftarForm"> <!-- Sesuaikan dengan route yang Anda tentukan -->
                        @csrf
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text" name="username" placeholder="Username" required>
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text" name="nama_lengkap" placeholder="Nama Pemilik" required>
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-phone'></i>
                            <input type="tel" name="nomor_hp" id="nomor_hp" placeholder="Nomor HP" required maxlength="18">

                        </div>
                        <div class="input-group">
                            <i class='bx bxs-store'></i>
                            <input type="text" name="nama_toko" placeholder="Nama Toko" required>
                        </div>
                        <div class="input-group">
    <i class='bx bxs-map'></i>
    <input type="text" id="locationPicker" placeholder="Pilih Lokasi Toko" readonly>
</div>
                        <div class="input-group">
                            <i class='bx bxs-map'></i>
                            <input type="hidden" name="latitude" placeholder="Latitude" required>
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-map'></i>
                            <input type="hidden" name="longitude" placeholder="Longitude" required>
                        </div>
                        <button type="submit">
                            Daftar
                        </button>
                        <div class="textbwh">
                        <p>
                            <span>
                                Sudah memiliki akun?
                            </span>
                            <b onclick="toggle()" class="pointer">
                                Login Sekarang!
                            </b>
                        </p>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
        <!-- END SIGN UP -->
        <!-- SIGN IN -->
        <div class="col align-items-center flex-col sign-in">
            <div class="form-wrapper align-items-center">
                <div class="form sign-in">
                <form id="loginForm"> <!-- Sesuaikan dengan route yang Anda tentukan -->
    @csrf
    <div class="input-group">
        <i class='bx bxs-user'></i>
        <input type="text" name="username" placeholder="Username">
    </div>
    <div class="input-group">
        <i class='bx bxs-lock-alt'></i>
        <input type="password" name="password" placeholder="Password">
    </div>
    <button type="submit"> <!-- Tambahkan type="submit" di sini -->
        Login
    </button>
</form>
<div class="textbwh">
<p>
                        <b>
                            Lupa password?
                        </b>
                    </p>
                    <p>
                        <span>
                            Belum memiliki akun?
                        </span>
                        <b onclick="toggle()" class="pointer">
                            Daftar Sekarang!
                        </b>
                    </p>
</div>
                    
                </div>
            </div>
        </div>
        <!-- END SIGN IN -->
    </div>
    <!-- END FORM SECTION -->
    <!-- CONTENT SECTION -->
    <div class="row content-row">
        <!-- SIGN IN CONTENT -->
        <div class="col align-items-center flex-col">
            <div class="text sign-in">
                <h2>
                    Selamat datang <br>di Mobilink
                </h2>
                <p>Silahkan masukkan username dan password Anda</p>
            </div>
            <div class="img sign-in">
            </div>
        </div>
        <!-- END SIGN IN CONTENT -->
        <!-- SIGN UP CONTENT -->
        <div class="col align-items-center flex-col">
            <div class="img sign-up">
            </div>
            <div class="text-daftar sign-up">
                <h2>
                    Bergabunglah <br>bersama kami <br>secara gratis
                </h2>
                <p>Silahkan masukkan data yang diperlukan</p>
            </div>
        </div>
        <!-- END SIGN UP CONTENT -->
    </div>
    <!-- END CONTENT SECTION -->
</div>

<script>
   function formatNomorHP(input) {
        // Menghapus semua karakter kecuali angka
        var nomor_hp = input.value.replace(/\D/g, '');
        
        if (!nomor_hp.startsWith('+62')) {
    if (nomor_hp.startsWith('62')) {
        nomor_hp = '+' + nomor_hp;
    } else {
        nomor_hp = '+62' + nomor_hp;
    }
}

        // Menambahkan tanda hubung setelah kode negara (62) dan setelah tiga digit pertama
        if (nomor_hp.length > 3) {
            nomor_hp = nomor_hp.substring(0, 3) + ' ' + nomor_hp.substring(3);
        }
        
        // Menambahkan tanda hubung setelah tiga digit kedua
        if (nomor_hp.length > 7) {
            nomor_hp = nomor_hp.substring(0, 7) + '-' + nomor_hp.substring(7);
        }
        // Menambahkan tanda hubung setelah tiga digit kedua
        if (nomor_hp.length > 9) {
            nomor_hp = nomor_hp.substring(0, 12) + '-' + nomor_hp.substring(12);
        }
        
        // Memasukkan hasil format ke dalam input
        input.value = nomor_hp;
    }

    // Memanggil fungsi formatNomorHP saat pengguna mengetik
    document.getElementById('nomor_hp').addEventListener('input', function() {
        formatNomorHP(this);
    });

    // Mencegah penggunaan karakter selain angka dan +
    document.getElementById('nomor_hp').addEventListener('keypress', function(e) {
        if (e.which < 48 || e.which > 57) {
            e.preventDefault();
        }
    });

document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('mapModal');
    var map, marker;
    var indonesiaBounds = L.latLngBounds(L.latLng(-11.0, 95.0), L.latLng(6.0, 141.0));

    document.querySelector('[placeholder="Pilih Lokasi Toko"]').addEventListener('click', function() {
        modal.style.display = 'block';
        if (!map) {
            map = L.map('map', { 
                maxBounds: indonesiaBounds, 
                maxBoundsViscosity: 1.0,
                minZoom: 5, 
                attributionControl: false 
            }).setView([-2.5, 117.0], 6); 

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              
            }).addTo(map);

            map.on('click', function(e) {
                if (marker) {
                    marker.setLatLng(e.latlng);
                } else {
                    marker = L.marker(e.latlng).addTo(map);
                }
            });
        }
    });

    document.getElementById('saveLocation').addEventListener('click', function() {
        if (marker) {
        var latLng = marker.getLatLng();
        document.querySelector('[name="latitude"]').value = latLng.lat;
        document.querySelector('[name="longitude"]').value = latLng.lng;
        document.getElementById('locationPicker').value = 'Lokasi telah ditentukan';
        modal.style.display = 'none';
    } else {
        alert('Silakan pilih lokasi pada peta.');
    }
    });
    document.getElementById('cancel').addEventListener('click', function() {
    modal.style.display = 'none';
});
});




    document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    let form = event.target;
    let formData = new FormData(form);

    fetch('{{ route("proseslogin") }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(Object.fromEntries(formData))
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            Swal.fire({
                title: 'Success!',
                text: data.message,
                icon: 'success',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '{{ route("admin.dashboard") }}';
                }
            });
        } else {
            Swal.fire({
                title: 'Error!',
                text: data.message,
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
document.getElementById('daftarForm').addEventListener('submit', function(event) {
        event.preventDefault();

        let form = event.target;
        let formData = new FormData(form);

        fetch('{{ route("prosesdaftar") }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(Object.fromEntries(formData))
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Berhasil. Silahkan menunggu verifikasi dari admin.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '{{ route("login.index") }}';
                    }
                });
            } else {
                Swal.fire({
                    title: 'Error!',
                    text: 'Terjadi kesalahan saat mendaftar.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
    let container = document.getElementById('container')

    toggle = () => {
        container.classList.toggle('sign-in')
        container.classList.toggle('sign-up')
    }

    setTimeout(() => {
        container.classList.add('sign-in')
    }, 200)
</script>
</body>
</html>