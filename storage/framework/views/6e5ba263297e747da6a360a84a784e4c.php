<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentang Kami</title>
    <link rel="icon" href="<?php echo e(asset('/assets/images/logo/iconTitle.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('/assets/logo/iconTitle.png')); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset ('frontend/assets/vendors/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset ('frontend/assets/css/style.css')); ?>">
</head>
<body>
 <?php echo $__env->make('LP/layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="page-about">
        <div class="container">
            <section class="page-header">
                <h1>About</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb foi-breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
            </section>
            <section class="foi-page-section pt-0">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0 pr-lg-0">
                        <h2 class="about-section-one-title">
                            With more apps than iOS, Android puts <span class="font-weight-normal">a world of options at your fingertips.</span>
                        </h2>
                        <div class="about-section-one-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                            
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
                        </div>
                    </div>
                    <div class="col-md-6 pl-lg-0 d-flex align-items-center align-items-lg-end">
                        <img src="<?php echo e(asset('frontend/assets/images/about_img_1.png')); ?>" alt="about" class="img-fluid" width="448px">
                    </div>
                </div>
            </section>
            <section class="foi-page-section">
                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0">
                        <img src="<?php echo e(asset('frontend/assets/images/about_img_2.png')); ?>" alt="about 2" class="w-100 img-fluid pr-md-5" width="437px">
                    </div>
                    <div class="col-md-6">
                        <h2 class="about-section-two-title">We create the best <span class="font-weight-normal">solution for you and your business.</span></h2>
                        <div class="about-section-two-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                            <p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="foi-page-section mb-5">
                <h5 class="text-center font-os mb-0">The amazing team</h5>
                <h2 class="team-section-title">Our Creative Minds</h2>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-3 mb-5">
                        <div class="team-member-card">
                            <img src="<?php echo e(asset('frontend/assets/images/user/user2.jpg')); ?>" alt="Cardarion Hart" class="team-member-avatar">
                            <h6 class="mb-0">Billy Julian S</h6>
                            <p class="team-member-designation">Web Developer</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <div class="team-member-card">
                            <img src="<?php echo e(asset('frontend/assets/images/user/user3.jpg')); ?>" alt="Gauthier Drewitt" class="team-member-avatar">
                            <h6 class="mb-0">Reyhan Zaynuri</h6>
                            <p class="team-member-designation">Mobile Developer</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <div class="team-member-card">
                            <img src="<?php echo e(asset('frontend/assets/images/user/user1.jpg')); ?>" alt="Labeeba Al Amer" class="team-member-avatar">
                            <h6 class="mb-0">M Akmal Kholiqin</h6>
                            <p class="team-member-designation">Software Quality Assurance</p>
                        </div>
                    </div>
                    <!-- <div class="col-md-3 mb-5">
                        <div class="team-member-card">
                            <img src="assets/images/user/user_4.png" alt="Onyama Limba" class="team-member-avatar">
                            <h6 class="mb-0">Onyama Limba</h6>
                            <p class="team-member-designation">Software Engineer</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <div class="team-member-card">
                            <img src="assets/images/user/user_5.png" alt="Athar Malakooti" class="team-member-avatar">
                            <h6 class="mb-0">Athar Malakooti</h6>
                            <p class="team-member-designation">CEO</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <div class="team-member-card">
                            <img src="assets/images/user/user_6.png" alt="Kung Jiyeon" class="team-member-avatar">
                            <h6 class="mb-0">Kung Jiyeon</h6>
                            <p class="team-member-designation">HR Manager</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <div class="team-member-card">
                            <img src="assets/images/user/user_7.png" alt="Mathijn Agter" class="team-member-avatar">
                            <h6 class="mb-0">Mathijn Agter</h6>
                            <p class="team-member-designation">Finance Manager</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <div class="team-member-card">
                            <img src="assets/images/user/user_8.png" alt="Jontray Arnold" class="team-member-avatar">
                            <h6 class="mb-0">Jontray Arnold</h6>
                            <p class="team-member-designation">Software Engineer</p>
                        </div>
                    </div> -->
                </div>
            </section>
        </div>
    </main>
    <?php echo $__env->make('LP/layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset ('frontend/assets/vendors/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('frontend/assets/vendors/popper.js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('frontend/assets/vendors/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\webS4\resources\views/LP/about.blade.php ENDPATH**/ ?>