@extends('layoutsUser.user3')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <nav>
      <div class="nav nav-tabs nav-justified cpr-dashboard" id="nav-tab" role="tablist">
        <a class="nav-link active" href="/dashboard">Product Research Tool</a>
        <a class="nav-link " href="/service-dashboard">eButify Services</a>
      </div>
    </nav>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid p-0">
        <!-- Info boxes -->
        <div class="row faq-header px-3 py-2">
          <div class="col-12 d-flex justify-content-center mt-3">
            <h3 style="color: #fff;">Frequently Asked Questions</h3>
          </div>
          <div class="col-12">
            <div class="input-group my-2">
              <input type="text" class="form-control" placeholder="Type Product name or neach">
              <div class="input-group-append">
                <button class="btn faq-input-btn" type="button" id="#">Search</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

        <div class="row collaps-body p-3 m-2">
          <div class="accordion" id="accordionFAQ">
            <div class="card shadow">
              <div class="card-header" id="FAQOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-angle-double-right"></i>
                    Do you guys have API which I can integrate with?
                  </button>
                </h2>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="FAQOne" data-parent="#accordionFAQ">
                <div class="card-body">
                  1. No, we have not any API currently, in near future we'll generate API's to connect 
                  with Shopify and AliExpress. Only direct integration with our services tools to
                  get access your store for store setup can customizations.
                </div>
              </div>
            </div>
            <div class="card shadow">
              <div class="card-header" id="FAQTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fas fa-angle-double-right"></i>
                    Do you have an Affiliate Program?
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="FAQTwo" data-parent="#accordionFAQ">
                <div class="card-body">
                  2. No, we have not any API currently, in near future we'll generate API's to connect 
                  with Shopify and AliExpress. Only direct integration with our services tools to
                  get access your store for store setup can customizations.
                </div>
              </div>
            </div>
            <div class="card shadow">
              <div class="card-header" id="FAQThree">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-angle-double-right"></i>
                    Do you guys have API which I can integrate with?
                  </button>
                </h2>
              </div>
          
              <div id="collapseThree" class="collapse" aria-labelledby="FAQThree" data-parent="#accordionFAQ">
                <div class="card-body">
                  3. No, we have not any API currently, in near future we'll generate API's to connect 
                  with Shopify and AliExpress. Only direct integration with our services tools to
                  get access your store for store setup can customizations.
                </div>
              </div>
            </div>
            <div class="card shadow">
              <div class="card-header" id="FAQFour">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fas fa-angle-double-right"></i>
                    Do you have an Affiliate Program?
                  </button>
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="FAQFour" data-parent="#accordionFAQ">
                <div class="card-body">
                  2. No, we have not any API currently, in near future we'll generate API's to connect 
                  with Shopify and AliExpress. Only direct integration with our services tools to
                  get access your store for store setup can customizations.
                </div>
              </div>
            </div>
            <div class="card shadow">
              <div class="card-header" id="FAQFive">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-angle-double-right"></i>
                    Do you guys have API which I can integrate with?
                  </button>
                </h2>
              </div>
          
              <div id="collapseFive" class="collapse" aria-labelledby="FAQFive" data-parent="#accordionFAQ">
                <div class="card-body">
                  4. No, we have not any API currently, in near future we'll generate API's to connect 
                  with Shopify and AliExpress. Only direct integration with our services tools to
                  get access your store for store setup can customizations.
                </div>
              </div>
            </div>
            <div class="card shadow">
              <div class="card-header" id="FAQSix">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fas fa-angle-double-right"></i>
                    Do you have an Affiliate Program?
                  </button>
                </h2>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="FAQSix" data-parent="#accordionFAQ">
                <div class="card-body">
                  2. No, we have not any API currently, in near future we'll generate API's to connect 
                  with Shopify and AliExpress. Only direct integration with our services tools to
                  get access your store for store setup can customizations.
                </div>
              </div>
            </div>
            <div class="card shadow">
              <div class="card-header" id="FAQSeven">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-angle-double-right"></i>
                    Do you guys have API which I can integrate with?
                  </button>
                </h2>
              </div>
          
              <div id="collapseSeven" class="collapse" aria-labelledby="FAQSeven" data-parent="#accordionFAQ">
                <div class="card-body">
                  1. No, we have not any API currently, in near future we'll generate API's to connect 
                  with Shopify and AliExpress. Only direct integration with our services tools to
                  get access your store for store setup can customizations.
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('js')
<script>
   $(document) .ready(function(){
    $('.select2').select2({
      width: '100%'
    });
  });
</script>
@endsection