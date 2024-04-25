@extends('layouts.simple.master_mitra')
@section('title', 'Product')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
	<h2>Product</h2>
@endsection

@section('breadcrumb-items')
	<li class="breadcrumb-item">Apps</li>
    <li class="breadcrumb-item">Ecommerce</li>
	<li class="breadcrumb-item active">Product</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="row">
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/01.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <a href="{{route('admin.detailsewa.riwayatsewa')}}"><li><i class="icon-eye"></i></li></a> 
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <div class="ribbon ribbon-danger">Sale</div>
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/02.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/03.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <div class="ribbon ribbon-success ribbon-right">50%</div>
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/04.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/05.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="ribbon ribbon-secondary ribbon-vertical-left"><i class="icon-gift"></i></div>
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/06.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/07.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/08.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/09.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/10.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/11.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/12.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <div class="ribbon ribbon-bookmark ribbon-vertical-right ribbon-info"><i class="icofont icofont-love"></i></div>
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/01.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/02.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <div class="ribbon ribbon-clip ribbon-warning">Hot</div>
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/03.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/04.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/05.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/06.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/07.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/08.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/09.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/10.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/11.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 box-col-4a">
         <div class="card">
            <div class="product-box">
               <div class="product-img">
                  <img class="img-fluid" src="{{ asset('assets/images/ecommerce/12.jpg')}}" alt="">
                  <div class="product-hover">
                     <ul>
                        <li><i class="icon-shopping-cart"></i></li>
                        <li><i class="icon-eye"></i></li>
                        <li><i class="icofont icofont-law-alt-2"></i></li>
                     </ul>
                  </div>
               </div>
               <div class="product-details">
                  <h4>Woman</h4>
                  <p>Simply dummy text of the printing.</p>
                  <div class="product-price">
                     <del>$350.00    </del>$26.00
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
@endsection