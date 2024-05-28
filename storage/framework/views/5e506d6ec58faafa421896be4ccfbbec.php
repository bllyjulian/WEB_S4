<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Frequently Asked Questions</title>
    <link rel="icon" href="<?php echo e(asset('/assets/images/logo/iconTitle.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo e(asset('/assets/logo/iconTitle.png')); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo e(asset ('frontend/assets/vendors/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset ('frontend/assets/css/style.css')); ?>">
</head>

<body>
<?php echo $__env->make('LP/layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="page-header">
                        <h2>Frequently asked questions</h2>
                        <h5>Whether you have questions or you would just like to say hello, contact us.</h5>
                    </section>
                    <section class="py-5 mb-5">
                        <div class="card faq-card">
                            <div class="card-header bg-white" id="faqOneTitle">
                                <a href="#faqOneCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                    <h6 class="mb-0">Theme integration</h6> <i class="far fa-plus-square ml-auto"></i>
                                </a>
                            </div>
                            <div id="faqOneCollapse" class="collapse" aria-labelledby="faqOneTitle">
                                <div class="card-body">
                                    <p class="mb-0 text-gray">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq-card">
                            <div class="card-header bg-white" id="faqTwoTitle">
                                <a href="#faqTwoCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                    <h6 class="mb-0">How do I get a receipt for my purchase?</h6> <i class="far fa-plus-square ml-auto"></i>
                                </a>
                            </div>
                            <div id="faqTwoCollapse" class="collapse" aria-labelledby="faqTwoTitle">
                                <div class="card-body">
                                    <p class="mb-0 text-gray">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq-card">
                            <div class="card-header bg-white" id="faqThreeTitle">
                                <a href="#faqThreeCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                    <h6 class="mb-0">Need personal assistance?</h6> <i class="far fa-plus-square ml-auto"></i>
                                </a>
                            </div>
                            <div id="faqThreeCollapse" class="collapse" aria-labelledby="faqThreeTitle">
                                <div class="card-body">
                                    <p class="mb-0 text-gray">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq-card">
                            <div class="card-header bg-white" id="faqFourTitle">
                                <a href="#faqFourCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                    <h6 class="mb-0">How can I get a refund?</h6> <i class="far fa-plus-square ml-auto"></i>
                                </a>
                            </div>
                            <div id="faqFourCollapse" class="collapse" aria-labelledby="faqFourTitle">
                                <div class="card-body">
                                    <p class="mb-0 text-gray">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq-card">
                            <div class="card-header bg-white" id="faqFiveTitle">
                                <a href="#faqFiveCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                    <h6 class="mb-0">Which license do I need?</h6> <i class="far fa-plus-square ml-auto"></i>
                                </a>
                            </div>
                            <div id="faqFiveCollapse" class="collapse" aria-labelledby="faqFiveTitle">
                                <div class="card-body">
                                    <p class="mb-0 text-gray">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card faq-card">
                            <div class="card-header bg-white" id="faqSixTitle">
                                <a href="#faqSixCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                    <h6 class="mb-0">How do I see previous orders?</h6> <i class="far fa-plus-square ml-auto"></i>
                                </a>
                            </div>
                            <div id="faqSixCollapse" class="collapse" aria-labelledby="faqSixTitle">
                                <div class="card-body">
                                    <p class="mb-0 text-gray">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                        an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <?php echo $__env->make('LP/layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset ('frontend/assets/vendors/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('frontend/assets/vendors/popper.js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('frontend/assets/vendors/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\webS4\resources\views/LP/faq.blade.php ENDPATH**/ ?>