@extends('user_services.layouts.main')
@section('head')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eButify | Customer eButify Services</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.css">
  <!-- My style -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>
@endsection

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <nav>
      <div class="nav nav-tabs nav-justified cpr-dashboard" id="nav-tab" role="tablist">
        <a class="nav-link" href="/dashboard">Product Research Tool</a>
        <a class="nav-link active" href="/service-dashboard">eButify Services</a>
      </div>
    </nav>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- start-main-content -->
        <div class="row main-content">
          <div class="col-12 pl-4 pt-3">
            <h3 class="ebutify-services-header">eButify Services</h3>
          </div>
          <div class="col-12">
            <div class="row ebutify-services-box bg-white mx-2 p-3">
              <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                <div class="ces-bg-color p-3 my-2">
                  <img src="assets/img/ShoppingBag.jpg" style="width: 85px; height: 60px;" class="rounded-circle" alt="ShoppingBag">
                  <h3 class="mt-3">Shopify Store Create</h3>
                  <p>Lorem Ipsum is simply dummy text 
                    of the printing and typesetting
                    industry. Lorem Ipsum has been 
                    the industry's standard dummy text 
                    ever since the 1500s,</p>
                  <div class="price-tag">$600 USD</div>
                  <a href="/view-services" type="button" class="btn ces-btn">View Service Details</a>
                </div>
                <div class="ces-bg-color p-3 my-2">
                  <img src="assets/img/ShoppingBag.jpg" style="width: 85px; height: 60px;" class="rounded-circle" alt="ShoppingBag">
                  <h3 class="mt-3">Shopify Store Create</h3>
                  <p>Lorem Ipsum is simply dummy text 
                    of the printing and typesetting
                    industry. Lorem Ipsum has been 
                    the industry's standard dummy text 
                    ever since the 1500s,</p>
                  <div class="price-tag">$600 USD</div>
                  <div class="days-tag">7 Days</div>
                  <a href="/view-services" type="button" class="btn ces-btn">View Service Details</a>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                <div class="ces-bg-color p-3 my-2">
                  <img src="assets/img/ShoppingBag.jpg" style="width: 85px; height: 60px;" class="rounded-circle" alt="ShoppingBag">
                  <h3 class="mt-3">Shopify Store Create</h3>
                  <p>Lorem Ipsum is simply dummy text 
                    of the printing and typesetting
                    industry. Lorem Ipsum has been 
                    the industry's standard dummy text 
                    ever since the 1500s,</p>
                  <div class="price-tag">$600 USD</div>
                  <a href="/view-services" type="button" class="btn ces-btn">View Service Details</a>
                </div>
                <div class="ces-bg-color p-3 my-2">
                  <img src="assets/img/ShoppingBag.jpg" style="width: 85px; height: 60px;" class="rounded-circle" alt="ShoppingBag">
                  <h3 class="mt-3">Shopify Store Create</h3>
                  <p>Lorem Ipsum is simply dummy text 
                    of the printing and typesetting
                    industry. Lorem Ipsum has been 
                    the industry's standard dummy text 
                    ever since the 1500s,</p>
                  <div class="price-tag">$600 USD</div>
                  <a href="/view-services" type="button" class="btn ces-btn">View Service Details</a>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                <div class="ces-bg-color p-3 my-2">
                  <img src="assets/img/ShoppingBag.jpg" style="width: 85px; height: 60px;" class="rounded-circle" alt="ShoppingBag">
                  <h3 class="mt-3">Shopify Store Create</h3>
                  <p>Lorem Ipsum is simply dummy text 
                    of the printing and typesetting
                    industry. Lorem Ipsum has been 
                    the industry's standard dummy text 
                    ever since the 1500s,</p>
                  <div class="price-tag">$600 USD</div>
                  <div class="days-tag">7 Days</div>
                  <a href="/view-services" type="button" class="btn ces-btn">View Service Details</a>
                </div>
                <div class="ces-bg-color p-3 my-2">
                  <img src="assets/img/ShoppingBag.jpg" style="width: 85px; height: 60px;" class="rounded-circle" alt="ShoppingBag">
                  <h3 class="mt-3">Shopify Store Create</h3>
                  <p>Lorem Ipsum is simply dummy text 
                    of the printing and typesetting
                    industry. Lorem Ipsum has been 
                    the industry's standard dummy text 
                    ever since the 1500s,</p>
                  <div class="price-tag">$600 USD</div>
                  <a href="/view-services" type="button" class="btn ces-btn">View Service Details</a>
                </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                <div class="ces-bg-color p-3 my-2">
                  <img src="assets/img/ShoppingBag.jpg" style="width: 85px; height: 60px;" class="rounded-circle" alt="ShoppingBag">
                  <h3 class="mt-3">Shopify Store Create</h3>
                  <p>Lorem Ipsum is simply dummy text 
                    of the printing and typesetting
                    industry. Lorem Ipsum has been 
                    the industry's standard dummy text 
                    ever since the 1500s,</p>
                  <div class="price-tag">$600 USD</div>
                  <div class="days-tag">7 Days</div>
                  <a href="/view-services" type="button" class="btn ces-btn">View Service Details</a>
                </div>
                <div class="ces-bg-color p-3 my-2">
                  <img src="assets/img/ShoppingBag.jpg" style="width: 85px; height: 60px;" class="rounded-circle" alt="ShoppingBag">
                  <h3 class="mt-3">Shopify Store Create</h3>
                  <p>Lorem Ipsum is simply dummy text 
                    of the printing and typesetting
                    industry. Lorem Ipsum has been 
                    the industry's standard dummy text 
                    ever since the 1500s,</p>
                  <div class="price-tag">$600 USD</div>
                  <div class="days-tag">7 Days</div>
                  <a href="/view-services" type="button" class="btn ces-btn">View Service Details</a>
                </div>
              </div>
             
  
            </div>
          </div>
        </div>
        <!-- /end-main-content -->

@endsection


@section('scripts')
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

<!-- overlayScrollbars -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/OverlayScrollbars.min.js"></script>

<script src="{{asset('assets/js/script.js')}}"></script>
@endsection