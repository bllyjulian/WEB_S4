<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('css'); ?>
<!-- Plugins css start-->


<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/chartist.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
	<h2>Mobilink<span>Dashboard </span></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
   <li class="breadcrumb-item">Mobilink<li>
	<li class="breadcrumb-item active">Dashboard</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Container-fluid starts-->
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12 xl-100">
         <div class="row">
            <div class="col-xl-3 xl-50 col-md-6 box-col-6">
               <div class="card gradient-primary o-hidden">
                  <div class="card-body tag-card">
                     <div class="default-chart">
                        <div class="apex-widgets">
                           <div id="area-widget-chart"></div>
                        </div>
                        <div class="widgets-bottom">
                           <h5 class="f-w-700 mb-0">Mitra Terdaftar<span class="pull-right">432   </span></h5>
                        </div>
                     </div>
                     <span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 xl-50 col-md-6 box-col-6">
               <div class="card gradient-secondary o-hidden">
                  <div class="card-body tag-card">
                     <div class="default-chart">
                        <div class="apex-widgets">
                           <div id="area-widget-chart-2"></div>
                        </div>
                        <div class="widgets-bottom">
                           <h5 class="f-w-700 mb-0">Jumlah Pengguna<span class="pull-right">324  </span></h5>
                        </div>
                     </div>
                     <span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 xl-50 col-md-6 box-col-6">
               <div class="card gradient-warning o-hidden">
                  <div class="card-body tag-card">
                     <div class="default-chart">
                        <div class="apex-widgets">
                           <div id="area-widget-chart-3"></div>
                        </div>
                        <div class="widgets-bottom">
                           <h5 class="f-w-700 mb-0">Total Pengunjung<span class="pull-right">124   </span></h5>
                        </div>
                     </div>
                     <span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">     </span></span></span>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 xl-50 col-md-6 box-col-6">
               <div class="card gradient-info o-hidden">
                  <div class="card-body tag-card">
                     <div class="default-chart">
                        <div class="apex-widgets">
                           <div id="area-widget-chart-4"></div>
                        </div>
                        <div class="widgets-bottom">
                           <h5 class="f-w-700 mb-0">Transaksi Menunggu Persetujuan<span class="pull-right">8  </span></h5>
                        </div>
                     </div>
                     <span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">     </span></span></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-8 xl-100 box-col-12">
         <div class="card year-overview">
            <div class="card-header no-border d-flex">
               <h5>Riwayat Tahunan</h5>
               <ul class="creative-dots">
                  <li class="bg-primary big-dot"></li>
                  <li class="bg-secondary semi-big-dot"></li>
                  <li class="bg-warning medium-dot"></li>
                  <li class="bg-info semi-medium-dot"></li>
                  <li class="bg-secondary semi-small-dot"></li>
                  <li class="bg-primary small-dot"></li>
               </ul>
               <div class="header-right pull-right text-right">
                  <h5 class="mb-2">70 / 100</h5>
                  <h6 class="f-w-700 mb-0 default-text">Total Rp. 3.423.532</h6>
               </div>
            </div>
            <div class="card-body row">
               <div class="col-6 p-0 ct-10 default-chartist-container"></div>
               <div class="col-6 p-0 ct-11 default-chartist-container"></div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-100 box-col-12">
         <div class="card">
            <div class="card-header no-border">
               <h5>Total Penyewa</h5>
               <ul class="creative-dots">
                  <li class="bg-primary big-dot"></li>
                  <li class="bg-secondary semi-big-dot"></li>
                  <li class="bg-warning medium-dot"></li>
                  <li class="bg-info semi-medium-dot"></li>
                  <li class="bg-secondary semi-small-dot"></li>
                  <li class="bg-primary small-dot"></li>
               </ul>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                     <li><i class="view-html fa fa-code font-primary"></i></li>
                     <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                     <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                     <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                     <li><i class="icofont icofont-error close-card font-primary"></i></li>
                  </ul>
               </div>
            </div>
            <div class="card-body p-0">
               <div class="radial-default">
                  <div id="circlechart"></div>
               </div>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body p-0"&gt;
&lt;div class="radial-default"&gt;
&lt;div id="circlechart"&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
               </div>
            </div>
         </div>
      </div>
   
      <div class="col-xl-6 xl-100 box-col-12">
         <div class="card weather-bg">
            <div class="card-header no-border bg-transparent">
               <h5>Cuaca Saat ini</h5>
            </div>
            <div class="card-body weather-bottom-bg p-0">
               <div class="cloud"><img src="<?php echo e(asset('/assets/images/cloud.png')); ?>" alt=""></div>
               <div class="cloud-rain"></div>
               <div class="media weather-details">
                  <span class="weather-title"><i class="fa fa-circle-o d-block text-right"></i><span>32</span></span>
                  <div class="media-body">
                     <h5>Bondowoso</h5>
                     <span class="d-block">10, Juni 2024</span>
                     <h6 class="mb-0">Wind : 50km/h  </h6>
                  </div>
               </div>
               <img class="img-fluid" src="<?php echo e(asset('/assets/images/dashboard/weather-image.png')); ?>" alt="">
            </div>
         </div>
      </div>
      
            
              
      <div class="col-xl-8 xl-100 box-col-12">
         <div class="card">
            <div class="card-header no-border">
               <h5>Penyewa Terbaru</h5>
               <ul class="creative-dots">
                  <li class="bg-primary big-dot"></li>
                  <li class="bg-secondary semi-big-dot"></li>
                  <li class="bg-warning medium-dot"></li>
                  <li class="bg-info semi-medium-dot"></li>
                  <li class="bg-secondary semi-small-dot"></li>
                  <li class="bg-primary small-dot"></li>
               </ul>
               <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                     <li><i class="icofont icofont-gear fa fa-spin font-primary"></i></li>
                     <li><i class="view-html fa fa-code font-primary"></i></li>
                     <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                     <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                     <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                     <li><i class="icofont icofont-error close-card font-primary"></i></li>
                  </ul>
               </div>
            </div>
            <div class="card-body pt-0">
               <div class="activity-table table-responsive recent-table">
                  <table class="table table-bordernone">
                     <tbody>
                        <tr>
                           <td>
                              <div class="recent-images"><img class="img-fluid" src="<?php echo e(asset('/assets/images/dashboard/recent-user-1.png')); ?>" alt=""></div>
                           </td>
                           <td>
                              <h5 class="default-text mb-0 f-w-700 f-18">Billy Julian S</h5>
                           </td>
                           <td><span class="badge badge-pill recent-badge f-12">indonesia</span></td>
                           <td class="f-w-700">+62 822 3323 6128</td>
                           <td>
                              <h6 class="mb-0">30 Jul</h6>
                           </td>
                           <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="recent-images-primary"><img class="img-fluid" src="<?php echo e(asset('/assets/images/dashboard/recent-user-2.png')); ?>" alt=""></div>
                           </td>
                           <td>
                              <h5 class="font-primary mb-0 f-w-700 f-18">Reyhan Zaynuri</h5>
                           </td>
                           <td><span class="badge badge-pill recent-badge f-12">indonesia</span></td>
                           <td class="f-w-700">+62 834 4234 4234</td>
                           <td>
                              <h6 class="mb-0">06 Feb</h6>
                           </td>
                           <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="recent-images-secondary"><img class="img-fluid" src="<?php echo e(asset('/assets/images/dashboard/recent-user-3.png')); ?>" alt=""></div>
                           </td>
                           <td>
                              <h5 class="font-secondary mb-0 f-w-700 f-18">M Akmal Kholiqin</h5>
                           </td>
                           <td><span class="badge badge-pill recent-badge f-12">indonesia</span></td>
                           <td class="f-w-700">+62 823 3243 3243</td>
                           <td>
                              <h6 class="mb-0">22 Feb</h6>
                           </td>
                           <td><span class="badge badge-pill recent-badge"><i data-feather="more-horizontal"></i></span></td>
                        </tr>

                     </tbody>
                  </table>
               </div>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head21" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
               
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-4 xl-100 box-col-12">
         <div class="card gradient-primary o-hidden">
            <div class="card-body">
               <div class="setting-dot">
                  <div class="setting-bg-primary date-picker-setting position-set pull-right"><i class="fa fa-spin fa-cog"></i></div>
               </div>
               <div class="default-datepicker">
                  <div class="datepicker-here" data-language="en"></div>
               </div>
               <span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">   </span></span></span>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('/assets/js/typeahead/handlebars.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/typeahead/typeahead.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/typeahead/typeahead.custom.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/typeahead-search/handlebars.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/typeahead-search/typeahead-custom.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/chart/chartist/chartist.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/chart/chartist/chartist-plugin-tooltip.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/chart/apex-chart/apex-chart.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/chart/apex-chart/stock-prices.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/prism/prism.min.j')); ?>s"></script>
<script src="<?php echo e(asset('/assets/js/clipboard/clipboard.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/counter/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/counter/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/counter/counter-custom.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/custom-card/custom-card.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/notify/bootstrap-notify.min.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/dashboard/default.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/notify/index.j')); ?>s"></script>
<script src="<?php echo e(asset('/assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
<script src="<?php echo e(asset('/assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.simple.master_mobilink', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webS4\resources\views/mobilink/dashboard/index.blade.php ENDPATH**/ ?>