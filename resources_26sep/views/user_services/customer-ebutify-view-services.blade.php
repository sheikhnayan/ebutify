@extends('user_services.layouts.main')
@section('head')

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eButify | Customer eButify veiw Services</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.css">
  <!-- My style -->
  <link rel="stylesheet" href="assets/css/style.css">

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
            <h3 class="view-services-header">eButify Product Research Service Details</h3>
          </div>
          <div class="col-12">
            <div class="row view-services-box bg-white border-rounded mx-2 p-3">
              <div class="col-12">
                <div class="row evs-box pb-4 m-1">
                  <h3 class="">Product Research Service Details</h3>
                  <p>
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, 
                    making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the 
                    more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, 
                    discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" 
                    (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the 
                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                  </p>
                  <p>
                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 
                    1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, 
                    accompanied by English versions from the 1914 translation by H. Rackham.
                  </p>
                  <p>
                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 
                    1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, 
                    accompanied by English versions from the 1914 translation by H. Rackham.
                  </p>
                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 
                    1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, 
                    accompanied by English versions from the 1914 translation by H. Rackham.
                  </p>
                </div>
                <div class="row mt-4">
                  <div class="col-sm-12 col-md-12 col-lg-7">
                    <div class="row shadow border-rounded mb-4 mx-1">
                      <div class="col-12">
                        <div class="m-2 s-checklist">
                          <h3>Service Checklist</h3>
                        </div>
                        <ul class="list-group py-3 px-2 list-unstyled sc-box">
                          <li class="list-group-item rounded shadow my-1">01. Title optimize (Maintained google shopping)</li>
                          <li class="list-group-item rounded shadow my-1">02. 5 Untapped Product (Problem Solving or WOW Factor)</li>
                          <li class="list-group-item rounded shadow my-1">04. Killer SEO Description for each products (Copy Free)</li>
                          <li class="list-group-item rounded shadow my-1">03. 5 Saturated Product (Problem Solving or WOW Factor)</li>
                          <li class="list-group-item rounded shadow my-1">05. 3 to 5 successful competitors store links for each item</li>
                          <li class="list-group-item rounded shadow my-1">06. 3 to 5 gif images for each products</li>
                          <li class="list-group-item rounded shadow my-1">07. 2 Trusted AliExpress supplier for each products</li>
                          <li class="list-group-item rounded shadow my-1">08. Google Trends, Price, Cost, Profit for each products</li>
                          <li class="list-group-item rounded shadow my-1">09. Squire features images without watermark & logos</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="row mx-1">
                      <div class="col-12 p-0">
                        <div class="tab-pane fade show active">
                          <ul class="nav nav-tabs nav-justified shadow role="tablist">
                            <li class="nav-item plan-tab" role="presentation">
                              <a class="nav-link active" data-toggle="tab" href="#basic" role="tab">Basic Plan</a>
                            </li>
                            <li class="nav-item plan-tab" role="presentation">
                              <a class="nav-link" data-toggle="tab" href="#premium" role="tab">Premium Plan</a>
                            </li>
                          </ul>
                          <div class="tab-content shadow mb-3">
                            <div class="tab-pane fade show active pb-3" id="basic" role="tabpanel">
                              <div class="row plan-header p-3">
                                <div class="col-12 pt-2">
                                  <p style="font-size: 18px;">Basic plan simply dummy text of the printing and typesetting industry. </p>
                                </div>
                              </div>
                              <div class="row shadow plan-tab-body mx-2 mb-3">
                                <div class="col-12 p-3">
                                  <p>1. We need your store link</p>
                                  <p>2. We need to know your niche list</p>
                                  <p>3. We need to know which products you don't need</p>
                                  <p>4. We need to which type of product you don't need</p>
                                </div>
                              </div>
                              <div class="row shadow plan-tab-body mx-2 my-3">
                                <div class="col-12 p-3">
                                  <p>1. We need your store link</p>
                                  <p>2. We need to know your niche list</p>
                                  <p>3. We need to know which products you don't need</p>
                                  <p>4. We need to which type of product you don't need</p>
                                </div>
                              </div>
                              <div class="row plan-price-tab m-2">
                                <span>Service Price $50 with tax</span>
                              </div>
                            </div>
                            <div class="tab-pane pb-3 fade" id="premium" role="tabpanel">
                              <div class="row plan-header p-3">
                                <div class="col-12 pt-2">
                                  <p style="font-size: 18px;">Premium plan simply dummy text of the printing and typesetting industry. </p>
                                </div>
                              </div>
                              <div class="row shadow plan-tab-body mx-2 mb-3">
                                <div class="col-12 p-3">
                                  <p>1. We need your store link</p>
                                  <p>2. We need to know your niche list</p>
                                  <p>3. We need to know which products you don't need</p>
                                  <p>4. We need to which type of product you don't need</p>
                                </div>
                              </div>
                              <div class="row shadow plan-tab-body mx-2 my-3">
                                <div class="col-12 p-3">
                                  <p>1. We need your store link</p>
                                  <p>2. We need to know your niche list</p>
                                  <p>3. We need to know which products you don't need</p>
                                  <p>4. We need to which type of product you don't need</p>
                                </div>
                              </div>
                              <div class="row plan-price-tab m-2">
                                <span>Service Price $50 with tax</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row sc-btn-group">
                  <a href="#" class="btn sc-btn">Freelancer Live Chat</a>
                  <a href="/place-custom-order" class="btn sc-btn">Place Custom Order</a>
                  <a href="/place-order" class="btn sc-btn">Place Order</a>
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

<script src="assets/js/script.js"></script>
@endsection