@extends('layouts.app.master')
@section('title', 'error-404')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
<!-- error-404 start-->
<div class="error-wrapper">
   <div class="container">
      <img class="img-100" src="{{asset('assets/images/other-images/sad.png')}}" alt="">
      <div class="error-heading">
         <h2 class="headline font-danger">404</h2>
      </div>
      <div class="col-md-8 offset-md-2">
         <p class="sub-content">Halaman yang ingin Anda buka saat ini tidak tersedia. Ini mungkin terjadi karena halaman tersebut tidak ada atau telah dipindahkan.</p>
      </div>
      <div><a class="btn btn-danger-gradien btn-lg" href="{{asset('')}}">KEMBALI KE HALAMAN AWAL</a></div>
   </div>
</div>
<!-- error-404 end      -->
@endsection

@section('script')
@endsection