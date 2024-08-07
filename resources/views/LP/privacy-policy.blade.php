<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobilink</title>
    <link rel="stylesheet" href="{{ asset ('frontend/assets/vendors/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('frontend/assets/css/style.css')}}">
</head>

<body>
@include('LP/layouts.navbar')

    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="page-header">
                        <h2>Privacy Policy</h2>
                        <h5>Whether you have questions or you would just like to say hello, contact us.</h5>
                    </section>
                    <section class="privacy-policy-section">
                        <div class="row">
                            <div class="col-md-3 position-relative">
                                <nav class="nav privay-policy-nav">
                                    <a href="#user-licence" class="nav-link">User License</a>
                                    <a href="#disclaimer" class="nav-link">Disclaimer</a>
                                    <a href="#limitations" class="nav-link">Limitations</a>
                                    <a href="#governing-law" class="nav-link">Governing Law</a>
                                </nav>
                            </div>
                            <div class="col-md-9">
                                <div class="privay-policy-card card">
                                    <div class="card-body">
                                        <div id="user-licence">
                                            <h5 class="policy-title">User License</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                        <div id="disclaimer">
                                            <h5 class="policy-title">Disclaimer</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.</p>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                        <div id="limitations">
                                            <h5 class="policy-title">Limitations</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.</p>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                        <div id="governing-law">
                                            <h5 class="policy-title">Governing Law</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.</p>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                                sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    @include('LP/layouts.footer')
    <script src="{{ asset ('frontend/assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/vendors/popper.js/popper.min.js')}}"></script>
    <script src="{{ asset ('frontend/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</body>

</html>