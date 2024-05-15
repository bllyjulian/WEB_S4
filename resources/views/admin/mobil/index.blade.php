@extends('layouts.simple.master_mitra')
@section('title', 'Data Mobil')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rating.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sweetalert2.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Data<span>Mobil</span></h2>
@endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">Mobil</li>
    	<li class="breadcrumb-item">Data Mobil</li>
@endsection

@section('content')







<div class="container-fluid">
   <div class="row">
      <!-- Individual column searching (text inputs) Starts-->
      <div class="col-sm-12">
         <div class="card">
            <!-- <div class="card-header">
               <h5>Individual column searching (text inputs) </h5>
               <span>The searching functionality provided by DataTables is useful for quickly search through the information in the table - however the search is global, and you may wish to present controls that search on specific columns.</span>
               <button class="btn btn-warning sweet-5" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Warning alert</button>
               <button class="btn btn-primary sweet-1" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Basic</button>
               <button class="btn btn-primary sweet-2" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);">With Title alert</button>
               <button class="btn btn-success sweet-3" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-3']);">Success alert</button>
               <button class="btn btn-info sweet-4" type="button" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-4']);">Info alert</button>
            </div> -->

            <div class="card-body">
            <button class="btn btn-warning sweet-5"><a href="{{route('admin.mobil.tambahmobil')}}">Warning alert</a></button>
               <div class="table-responsive product-table">
                  <table class="display" id="basic-1">
                     <thead>
                        <tr>
                           <th>Gambar</th>
                           <th>Detail</th>
                           <th>Harga Sewa</th>
                           <th>Status</th>
                           <th>Tanggal Terakhir Sewa</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td><img src="{{ asset('assets/images/mobil/m1.jpeg')}}" alt=""></td>
                           <td>
                              <h6> Avanza </h6>
                              <span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span>
                           </td>
                           <td>Rp. 350.000</td>
                           <td class="font-success">In Stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                           </td>
                        </tr>
                        <tr>
                        <td><img src="{{ asset('assets/images/mobil/m2.jpeg')}}" alt=""></td>
                           <td>
                              <h6> Fortuner </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-primary">Low Stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                           </td>
                        </tr>
                        <tr>
                        <td><img src="{{ asset('assets/images/mobil/m3.jpeg')}}" alt=""></td>
                           <td>
                              <h6> Supra </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-danger">out of stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                           </td>
                        </tr>
                        <tr>
                        <td><img src="{{ asset('assets/images/mobil/m4.jpeg')}}" alt=""></td>
                           <td>
                              <h6> Civic </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-primary">Low Stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                           </td>
                        </tr>
                        <tr>
                        <td><img src="{{ asset('assets/images/mobil/m5.jpeg')}}" alt=""></td>
                           <td>
                              <h6> Mustang </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-success">In Stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                           </td>
                        </tr>
                        <tr>
                        <td><img src="{{ asset('assets/images/mobil/m6.jpg')}}" alt="" width="250px"></td>
                           <td>
                              <h6> White Lipstick </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-primary">Low Stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                           </td>
                        </tr>
                        <tr>
                        <td><img src="{{ asset('assets/images/mobil/m7.jpeg')}}" alt=""></td>
                           <td>
                              <h6> light Lipstick </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-danger">out of stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                           </td>
                        </tr>
                        <tr>
                        <td><img src="{{ asset('assets/images/mobil/m8.jpg')}}" alt=""  width="250px"></td>
                           <td>
                              <h6> Gliter Lipstick </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-danger">out of stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                           </td>
                        </tr>
                        <tr>
                        <td><img src="{{ asset('assets/images/mobil/m9.jpeg')}}" alt=""></td>
                           <td>
                              <h6> green Lipstick </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-success">In Stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                           </td>
                        </tr>
                        <tr>
                        <td><img src="{{ asset('assets/images/mobil/m10.jpeg')}}" alt=""></td>
                           <td>
                              <h6> Yellow Lipstick </h6>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                           </td>
                           <td>$10</td>
                           <td class="font-danger">out of stock</td>
                           <td>2011/04/25</td>
                           <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!-- Individual column searching (text inputs) Ends-->
   </div>
</div>
@endsection

@section('script')
<script src="{{ asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/js/rating/jquery.barrating.js')}}"></script>
<script src="{{ asset('assets/js/rating/rating-script.js')}}"></script>
<script src="{{ asset('assets/js/ecommerce.js')}}"></script>
<script src="{{ asset('assets/js/product-list-custom.js')}}"></script>
<script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{ asset('assets/js/sweet-alert/app.js')}}"></script>
@endsection