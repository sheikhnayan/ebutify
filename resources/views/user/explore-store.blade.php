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
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row mx-2 my-3">
          <div class="col-12 facebook-ads-header d-flex justify-content-between">
            <h3>Shopify Store Explorer</h3>
            <a type="button" class="btn btn-facebook-ads" href="{{url('tutorial')}}"><i class="fas fa-video"></i> Tutorials</a>
          </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->

@foreach($trendingProducts as $trendingProduct)
        <div class="row cse-main-body p-3 m-3">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row cse-content-header">
              
              
              <div class="col-lg-2 col-md-2 col-sm-6">
                <a target="_blank" href="{{$trendingProduct->shopify_link}}" style="color: #17a2b8;"><i class="fas fa-shopping-bag" style="color: #DC143C;"></i>
                      @php
                      $address = $trendingProduct->shopify_link;
                      $split = explode("com",$address);
                      @endphp
                      {{$split[0]}}com...
                      </a>
                <a target="_blank" href="{{$trendingProduct->shopify_link}}" class="cse-see-link-2 float-right" style="color: #17a2b8;">See all <i class="fas fa-chevron-right"></i></a>
              </div>

              <div class="col-lg-2 col-md-2 cse-hide">
                <span><strong>Traffic:</strong>{{$trendingProduct->monthly_traffic}}M/month</span>
              </div>
              
              <div class="col-lg-2 col-md-2 cse-hide">
                <span>Tech Spend: {{$trendingProduct->ad_spend}}K/mo</span>
              </div>
              
              <div class="col-lg-2 col-md-2 cse-hide">
                <span>Tracking {{$trendingProduct->running_ads}} <i class="fab fa-facebook-f" style="color: #3B5998;"></i> </span>
              </div>
              
              <div class="col-lg-2 col-md-2 cse-social-media-icon cse-hide">
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-youtube"></i>
              </div>
              <div class="col-lg-2 col-md-2 col-sm-6 show-right">
                <a target="_blank" href="{{$trendingProduct->shopify_link}}" class="cse-see-link-1" style="color: #17a2b8;">See all <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>

          </div>
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row pt-3">
              
              <div class="col-md-6 col-lg-3">
                <div class="row">
                  <div class="col-6 my-2">
                    <img src="{{$trendingProduct->image_link}}" class="img-fluid" style="height: 85px;" alt="">
                  </div>
                  
                  
                  <div class="col-6 my-2">
                    <a target="_blank" href="{{$trendingProduct->product_link}}" style="font-size: 14px; color: #B1B1B1;">{{$trendingProduct->product_name}}</a>
                    
                    <p style="font-size: 13px;">Price: ${{$trendingProduct->price}}</p>
                    <a target="_blank" href="{{$trendingProduct->ali_express_link}}" class="cse-link"><img src="{{asset('assets/img/ali.png')}}" style="width: 14px; margin: 0 0 5px 0;" alt=""> AliExpress</a>
                  </div>
                </div>
              </div>
              
              
              <div class="col-md-6 col-lg-3">
                <div class="row">
                  <div class="col-6 my-2">
                    <img src="{{$trendingProduct->image_link2}}" class="img-fluid" style="height: 85px;" alt="">
                  </div>
                  
                  
                  <div class="col-6 my-2">
                    <a target="_blank" href="{{$trendingProduct->product_link2}}" style="font-size: 14px; color: #B1B1B1;">{{$trendingProduct->product_name2}}</a>
                    
                    <p style="font-size: 13px;">Price: ${{$trendingProduct->price2}}</p>
                    <a target="_blank" href="{{$trendingProduct->ali_express_link2}}" class="cse-link"><img src="{{asset('assets/img/ali.png')}}" style="width: 14px; margin: 0 0 5px 0;" alt=""> AliExpress</a>
                  </div>
                </div>
              </div>
              
              
              <div class="col-md-6 col-lg-3">
                <div class="row">
                  <div class="col-6 my-2">
                    <img src="{{$trendingProduct->image_link3}}" class="img-fluid" style="height: 85px;" alt="">
                  </div>
                  
                  
                  <div class="col-6 my-2">
                    <a target="_blank" href="{{$trendingProduct->product_link3}}" style="font-size: 14px; color: #B1B1B1;">{{$trendingProduct->product_name3}}</a>
                    
                    <p style="font-size: 13px;">Price: ${{$trendingProduct->price3}}</p>
                    <a target="_blank" href="{{$trendingProduct->ali_express_link3}}" class="cse-link"><img src="{{asset('assets/img/ali.png')}}" style="width: 14px; margin: 0 0 5px 0;" alt=""> AliExpress</a>
                  </div>
                </div>
              </div>
              
              
              <div class="col-md-6 col-lg-3">
                <div class="row">
                  <div class="col-6 my-2">
                    <img src="{{$trendingProduct->image_link4}}" class="img-fluid" style="height: 85px;" alt="">
                  </div>
                  
                  
                  <div class="col-6 my-2">
                    <a target="_blank" href="{{$trendingProduct->product_link4}}" style="font-size: 14px; color: #B1B1B1;">{{$trendingProduct->product_name4}}</a>
                    
                    <p style="font-size: 13px;">Price: ${{$trendingProduct->price4}}</p>
                    <a target="_blank" href="{{$trendingProduct->ali_express_link4}}" class="cse-link"><img src="{{asset('assets/img/ali.png')}}" style="width: 14px; margin: 0 0 5px 0;" alt=""> AliExpress</a>
                  </div>
                </div>
              </div>


            </div>
          </div>
          

                      
          
          
        </div>
        
           
        
        
@endforeach 
            <!-- LOAD MORE DATA SHOW -->
             
            
                <div id="data-wrapper">
                
                    <!-- RESULTS -->
            
                </div>
            
            <!-- LOAD MORE DATA END -->

                <!-- LOADING SIGN SHOW -->
                <div class="auto-load text-center">
                    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" height="60" viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
                        <path fill="#000"
                            d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
                            <animateTransform attributeName="transform" attributeType="XML" type="rotate" dur="1s"
                                from="0 50 50" to="360 50 50" repeatCount="indefinite" />
                        </path>
                    </svg>
                </div>
                <!-- LOADING SIGN END -->


</div>
@endsection

@section('js')
<script>

  
var ENDPOINT = "{{ url('/') }}";
    var page = 1;
    //infinteLoadMore(page);

    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
            page++;
            infinteLoadMore(page);
        }
    });
    $('html,body').bind('touchmove', function(e) { 
      page++;
      infinteLoadMore(page);
    });

    function infinteLoadMore(page) {
        let urlWithoutQueryString = "{{ url()->current() }}";
        console.log(`urlWithoutQueryString: ${urlWithoutQueryString}`);
        
        let urlWithQueryString = "{{ url()->full() }}";
        console.log(`urlWithQueryString: ${urlWithQueryString}`);
        
        let actualQueryString = urlWithQueryString.replace(urlWithoutQueryString, "");
        if(actualQueryString != ""){
            actualQueryString = actualQueryString.replace(/&amp;/g, '&') + "&";
        }else{
            actualQueryString = "?";
        }
        console.log(`actualQueryString: ${actualQueryString}`);
        
        $.ajax({
                url: urlWithoutQueryString + actualQueryString + "page=" + page,
                datatype: "html",
                type: "get",
                beforeSend: function () {
                    $('.auto-load').show();
                }
            })
            .done(function (response) {
                if (response.length == 0) {
                    $('.auto-load').html("<br>No More Products To Show!");
                    return;
                }
                $('.auto-load').hide();
                $("#data-wrapper").append(response);
                
                //-- INITIATE SLICK ON DYNAMICALLY ADDED CONTENTS
                initiateSlick('yes');
            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occured');
            });
    }
  
</script>
@endsection