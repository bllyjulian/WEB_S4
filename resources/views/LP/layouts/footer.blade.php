<footer class="foi-footer text-white">
        <div class="container">
            <div class="row footer-content">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <h2 class="mb-0">Ingin Menjadi Mitra Kami?</h2>
                </div>
                <div class="col-md-4 col-lg-5 col-xl-6 py-3 py-md-0 d-md-flex align-items-center justify-content-end">
                    <a href="{{route('login.daftar')}}" class="btn btn-danger btn-lg">Daftar Sekarang!</a>
                </div>
            </div>
            <div class="row footer-widget-area">
                <div class="col-md-3">
                    <div class="py-3">
                    <img class="img-fluid" src="{{ asset('/assets/images/logo/iconFooter.png') }}" width="100px" alt="">
                    </div>
                    <p class="font-os font-weight-semibold mb3">Dapatkan Aplikasinya Sekarang!</p>
                    <div>
                        <button class="btn btn-app-download mr-2"><img src="{{ asset ('frontend/assets/images/ios.svg')}}" alt="App store"></button>
                        <button class="btn btn-app-download"><img src="{{ asset ('frontend/assets/images/android.svg')}}" alt="play store"></button>
                    </div>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <nav>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="{{route('index')}}" class="nav-link">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('about')}}" class="nav-link">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('features')}}" class="nav-link">Fitur</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <nav>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="{{route('pp')}}" class="nav-link">Kebijakan Privasi</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('faq-nav')}}" class="nav-link">Frequently Asked Questions</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 mt-3 mt-md-0">
                    <p>
                        &copy; MB. 2024 <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset">Mobilink</a>.
                    </p>
                    <p>All rights reserved.</p>
                    <nav class="social-menu">
                        <a href="#!"><img src="{{ asset ('frontend/assets/images/facebook.svg')}}" alt="facebook"></a>
                        <a href="#!"><img src="{{ asset ('frontend/assets/images/instagram.svg')}}" alt="instagram"></a>
                        <a href="#!"><img src="{{ asset ('frontend/assets/images/twitter.svg')}}" alt="twitter"></a>
                        <a href="#!"><img src="{{ asset ('frontend/assets/images/youtube.svg')}}" alt="youtube"></a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>