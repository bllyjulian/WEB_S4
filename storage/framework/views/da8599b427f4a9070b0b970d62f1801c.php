<header class="foi-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light foi-navbar">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo e(asset ('frontend/assets/images/logoMobilink.png')); ?>"  width="150px" alt="Mobilink">
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a style="font-size: 16px; font-weight: 600;" class="nav-link" href="<?php echo e(route('index')); ?>">Beranda</a>
                        </li>
                        <li class="nav-item active">
                            <a style="font-size: 16px; font-weight: 600;" class="nav-link" href="<?php echo e(route('about')); ?>">Tentang Kami <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a style="font-size: 16px; font-weight: 600;" class="nav-link" href="<?php echo e(route('features')); ?>">Fitur</a>
                        </li>
                        <li class="nav-item">
                            <a style="font-size: 16px; font-weight: 600;" class="nav-link" href="<?php echo e(route('faq-nav')); ?>">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a style="font-size: 16px; font-weight: 600;" class="nav-link" href="<?php echo e(route('contact')); ?>">Kontak</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item mr-2 mb-3 mb-lg-0">
                            <a class="btn btn-secondary" href="<?php echo e(route('login.daftar')); ?>">Daftar</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-secondary" href="<?php echo e(route('login.index')); ?>">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header><?php /**PATH C:\xampp\htdocs\webS4\resources\views/LP/layouts/navbar.blade.php ENDPATH**/ ?>