@extends('layouts.simple.master_mitra')
@section('title', 'Laporan')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/print.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Laporan</h2>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Laporan</li>
	<li class="breadcrumb-item active">Data Transaksi</li>
@endsection

@section('content')
<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-body">
               <div class="invoice">
                  <div>
                     <div>
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="media">
                                 <div class="media-left"><img class="media-object img-40" src="{{ asset('/assets/images/logo/iconTitle.png')}}" alt=""></div>
                                 <div class="media-body m-l-20">
                                    <h4 class="media-heading">Mobilink</h4>
                                    <p>mobilinkrental@gmail.com<br><span class="digits">+62 822-3323-6128</span></p>
                                 </div>
                              </div>
                              <!-- End Info-->
                           </div>
                           <div class="col-sm-6">
                              <div class="text-md-right">
                                 <h3>Laporan #<span class="digits counter">72</span></h3>
                                 <p>Tanggal Dibuat: <span class="digits">{{ $user->tgl_daftar }}</span>
                              </div>
                              <!-- End Title-->
                           </div>
                        </div>
                     </div>
                     <hr>
                     <!-- End InvoiceTop-->
                     <div class="row">
                        <div class="col-md-4">
                           <div class="media">
                              <div class="media-left"><img class="media-object rounded-circle img-60" src="{{ asset($user->logo_mitra) }}" alt=""></div>
                              <div class="media-body m-l-20">
                                 <h4 class="media-heading">{{ $user->nama_toko }}</h4>
                                 <p>{{ $user->nama_lengkap }}<br><span class="digits">{{ $user->nomor_hp }}</span></p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="text-md-right" id="project">
                           <h6>Laporan Transaksi</h6>
<p>Berikut ini adalah hasil transaksi sewa mobil yang tercatat. Anda dapat mencetak laporan ini atau melakukan tindakan lain sesuai kebutuhan.</p>

                           </div>
                        </div>
                     </div>
                     <!-- End Invoice Mid-->
                     <div>
                        <div class="table-responsive invoice-table" id="table">
                           <table class="table table-bordered table-striped">
                              <tbody>
                                 <tr>
                                    <td class="item">
                                       <h6 class="p-2 mb-0">ID Transaksi</h6>
                                    </td>
                                    <td class="Hours">
                                       <h6 class="p-2 mb-0">Nama Mobil</h6>
                                    </td>
                                    <td class="Rate">
                                       <h6 class="p-2 mb-0">Nama Penyewa</h6>
                                    </td>
                                    <td class="subtotal">
                                       <h6 class="p-2 mb-0">Durasi Sewa</h6>
                                    </td>
                                    <td class="subtotal">
                                       <h6 class="p-2 mb-0">Total</h6>
                                    </td>
                                 </tr>
                                 @foreach($datatransaksi as $transaksi)
                                 <tr>
                                    <td>
                                    <p class="itemtext digits">{{ $transaksi['id_transaksi'] }}</p>
                                
                                    </td>
                                    <td>
                                    <label>{{ $transaksi['nama_mobil'] }}</label>
                                       <p class="m-0">{{ $transaksi['tipe'] }}</p>
                                    </td>
                                    <td>
                                       <p class="itemtext digits">{{ $transaksi['nama'] }}</p>
                                    </td>
                                    <td>
                                       <p class="itemtext digits">{{ \Carbon\Carbon::parse($transaksi['tanggal_mulai'])->diffInDays(\Carbon\Carbon::parse($transaksi['tanggal_akhir'])) }} Hari</p>
                                    </td>
                                    <td>
                                       <p class="itemtext digits">{{ $transaksi['total'] }}</p>
                                    </td>
                                 </tr>
                                 @endforeach
    <td></td>
    <td></td>
    <td></td>
    <td class="Rate">
        <h6 class="mb-0 p-2">Total keseluruhan</h6>
    </td>
    <td class="payment digits">
        <h6 class="mb-0 p-2">Rp. {{ number_format($totalKeseluruhan, 2) }}</h6>
    </td>
</tr>

                              </tbody>
                           </table>
                        </div>
                        <!-- End Table-->
                        <div class="row">
                           <div class="col-md-8">
                              <div>
                              <p class="legal"><strong>Terima kasih telah bergabung dengan Mobilink!</strong> Semoga laporan transaksi ini bermanfaat bagi Anda.</p>

                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End InvoiceBot-->
                  </div>
                  <div class="col-sm-12 text-right mt-3"> <!-- Perubahan pada div ini -->
    <button class="btn btn btn-primary mr-2" type="button" onclick="myFunction()">Print</button>
</div>

                  <!-- End Invoice-->
                  <!-- End Invoice Holder-->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script src="{{ asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{ asset('assets/js/print.js')}}"></script>
@endsection