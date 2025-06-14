@extends('layouts.simple.master_mitra')
@section('title', 'Dashboard')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/prism.css')}}">
    <!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/chartist.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
  <h2>Admin<span>Dashboard</span></h2>
@endsection

@section('breadcrumb-items')
  <li class="breadcrumb-item">Admin</li>
  <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-lg-12 xl-100">
         <div class="row ecommerce-chart-card">
            <div class="col-xl-3 xl-50 col-md-6 box-col-6">
               <div class="card gradient-primary o-hidden">
                  <div class="card-body tag-card">
                     <div class="ecommerce-chart">
                        <div class="media ecommerce-small-chart">
                           <div class="small-bar">
                              <div class="small-chart1 flot-chart-container"></div>
                           </div>
                           <div class="sale-chart">
                              <div class="media-body m-l-40">
                                 <h6 class="f-w-100 m-l-10">Rp. 943.000</h6>
                                 <h4 class="mb-0 f-w-700 m-l-10">Pendapatan</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                     <span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">       </span></span></span>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 xl-50 col-md-6 box-col-6">
               <div class="card gradient-secondary o-hidden">
                  <div class="card-body tag-card">
                     <div class="ecommerce-chart">
                        <div class="media ecommerce-small-chart">
                           <div class="small-bar">
                              <div class="small-chart2 flot-chart-container"></div>
                           </div>
                           <div class="sale-chart">
                              <div class="media-body m-l-40">
                                 <h6 class="f-w-100 m-l-10">36 Mobil</h6>
                                 <h4 class="mb-0 f-w-700 m-l-10">Jumlah Mobil</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                     <span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">             </span></span></span>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 xl-50 col-md-6 box-col-6">
               <div class="card gradient-warning o-hidden">
                  <div class="card-body tag-card">
                     <div class="ecommerce-chart">
                        <div class="media ecommerce-small-chart">
                           <div class="small-bar">
                              <div class="small-chart3 flot-chart-container"></div>
                           </div>
                           <div class="sale-chart">
                              <div class="media-body m-l-40">
                                 <h6 class="f-w-100 m-l-10">14 Mobil</h6>
                                 <h4 class="mb-0 f-w-700 m-l-10">Mobil Disewa</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                     <span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">                    </span></span></span>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 xl-50 col-md-6 box-col-6">
               <div class="card gradient-info o-hidden">
                  <div class="card-body tag-card">
                     <div class="ecommerce-chart">
                        <div class="media ecommerce-small-chart">
                           <div class="small-bar">
                              <div class="small-chart4 flot-chart-container"></div>
                           </div>
                           <div class="sale-chart">
                              <div class="media-body m-l-40">
                                 <h6 class="f-w-100 m-l-10">242 Customer</h6>
                                 <h4 class="mb-0 f-w-700 m-l-10">Total Customer</h4>
                              </div>
                           </div>
                        </div>
                     </div>
                     <span class="tag-hover-effect"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">                    </span></span></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-12 xl-100 box-col-12">
         <div class="card crypto-revenue">
            <div class="card-header pb-0 d-flex">
               <h5>Statistik Laporan<span class="badge badge-pill pill-badge-secondary f-14 f-w-600">2024</span></h5>
               <ul class="creative-dots">
                  <li class="bg-primary big-dot"></li>
                  <li class="bg-secondary semi-big-dot"></li>
                  <li class="bg-warning medium-dot"></li>
                  <li class="bg-info semi-medium-dot"></li>
                  <li class="bg-secondary semi-small-dot"></li>
                  <li class="bg-primary small-dot"></li>
               </ul>
               <div class="header-right pull-right text-right">
                  <h5 class="mb-2">80 / 100</h5>
                  <h6 class="f-w-700 mb-0">Total Rp. 1.281.000</h6>
               </div>
            </div>
            <div class="card-body pt-0">
               <div id="area-spaline"></div>
            </div>
         </div>
      </div>
      <div class="col-xl-8 xl-100 box-col-12">
         <div class="card">
            <div class="card-header no-border">
               <h5>Mobil paling banyak disewa</h5>
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
                              <div class="recent-images"><img class="img-fluid" src="{{ asset('/assets/images/dashboard-ecommerce/1.png')}}" alt=""></div>
                           </td>
                           <td>
                              <h5 class="default-text mb-0 f-w-700 f-18">MITSUBISHI	</h5>
                           </td>
                           <td><span class="badge badge-pill recent-badge f-12">ACURA</span></td>
                           <td class="f-w-700">Rp. 350.000</td>
                           <td>
                              <h6 class="mb-0">Tersedia</h6>
                           </td>
                           <td><span class="badge badge-pill recent-badge">102 Kali</span></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="recent-images-primary"><img class="img-fluid" src="{{ asset('/assets/images/dashboard-ecommerce/2.png')}}" alt=""></div>
                           </td>
                           <td>
                              <h5 class="font-primary mb-0 f-w-700 f-18">ALFA</h5>
                           </td>
                           <td><span class="badge badge-pill recent-badge f-12">ROMEO</span></td>
                           <td class="f-w-700">Rp. 700.000</td>
                           <td>
                              <h6 class="mb-0">Disewa</h6>
                           </td>
                           <td><span class="badge badge-pill recent-badge">67 Kali</span></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="recent-images-secondary"><img class="img-fluid" src="{{ asset('/assets/images/dashboard-ecommerce/3.png')}}" alt=""></div>
                           </td>
                           <td>
                              <h5 class="font-secondary mb-0 f-w-700 f-18">NISSAN</h5>
                           </td>
                           <td><span class="badge badge-pill recent-badge f-12">GTR</span></td>
                           <td class="f-w-700">Rp. 500.000</td>
                           <td>
                              <h6 class="mb-0">Tersedia</h6>
                           </td>
                           <td><span class="badge badge-pill recent-badge">56 Kali</span></td>
                        </tr>
                        <tr>
                           <td>
                              <div class="recent-images-warning"><img class="img-fluid" src="{{ asset('/assets/images/dashboard-ecommerce/4.png')}}" alt=""></div>
                           </td>
                           <td>
                              <h5 class="font-warning mb-0 f-w-700 f-18">LAND</h5>
                           </td>
                           <td><span class="badge badge-pill recent-badge f-12">ROVER</span></td>
                           <td class="f-w-700">Rp. 100.000</td>
                           <td>
                              <h6 class="mb-0">Tersedia</h6>
                           </td>
                           <td><span class="badge badge-pill recent-badge">43 Kali</span></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
               </div>
            </div>
         </div>
      </div>
      <!-- <div class="col-xl-4 xl-50 box-col-6">
         <div class="card gradient-secondary o-hidden monthly-overview">
            <div class="card-header no-border bg-transparent pb-0">
               <h5>Mobil Unggulan</h5>
               <span class="pull-right right-badge"><span class="badge badge-pill">Rp. 700.000</span></span>
            </div>
            <div class="card-body pt-0">
               <ul class="rounds-decore">
                  <li></li>
                  <li></li>
                  <li></li>
                  <li>                                       </li>
               </ul>
               <span class="overview-dots full-lg-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small"></span></span></span>
               <div class="p-watch"><img class="img-fluid" src="{{ asset('/assets/images/dashboard-ecommerce/m1.png')}}" alt=""></div>
            </div>
         </div>
      </div> -->
      <!-- <div class="col-xl-4 xl-50 box-col-6">
         <div class="card gradient-primary o-hidden monthly-overview">
            <div class="card-body pb-0" id="customers-ratio">
               <div class="media customers">
                  <div class="media-body">
                     <h5>Customer Baru</h5>
                  </div>
                  <div class="setting-dot">
                     <div class="setting-bg-primary date-picker-setting position-set pull-right"><i class="fa fa-spin fa-cog"></i></div>
                  </div>
                  <span class="overview-dots full-lg-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">         </span></span></span>
               </div>
            </div>
         </div>
      </div> -->
      <div class="col-xl-8 xl-100 box-col-12">
         <div class="card month-overview">
            <div class="card-header pb-3">
               <h5>Pendapatan Bulan ini</h5>
               <h2 class="m-t-20 f-w-800">+Rp. 143.000</h2>
               <span class="badge badge-pill pill-badge-secondary f-14 f-w-600"></span>
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
            <div class="card-body p-b-20 row">
               <div class="col-6 p-b-20 ct-10 pr-0 default-chartist-container"></div>
               <div class="col-6 p-b-20 ct-11 pl-0 default-chartist-container"> </div>
               <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head6" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head6">&lt;!-- Cod Box Copy begin --&gt;
&lt;div class="card-body p-b-20 row"&gt;
&lt;div class="col-6 p-b-20 ct-10 pr-0 default-chartist-container"&gt;&lt;/div&gt;
&lt;div class="col-6 p-b-20 ct-11 pl-0 default-chartist-container"&gt; &lt;/div&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;          </code></pre>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')

<!-- Plugins JS start-->
<script src="{{ asset('/assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{ asset('/assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
<script src="{{ asset('/assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{ asset('/assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{ asset('/assets/js/prism/prism.min.js')}}"></script>
<script src="{{ asset('/assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{ asset('/assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('/assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('/assets/js/counter/counter-custom.js')}}"></script>
<script src="{{ asset('/assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{ asset('/assets/js/dashboard/ecommerce-custom.js')}}"></script>
<!-- Plugins JS Ends-->
@endsection