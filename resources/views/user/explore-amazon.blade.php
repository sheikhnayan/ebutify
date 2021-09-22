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
            <h3>Amazon Explorer</h3>
            <a type="button" class="btn btn-facebook-ads" target="_blank" href="{{url('tutorial')}}"><i class="fas fa-video"></i> Tutorials</a>
          </div>
                    <form class="col-12" method="get" action="{{ route('amz-product') }}">
            <div class="col-12">
               <div class="input-group my-3">
                  <input type="text" class="form-control fb-ads-input" placeholder="Type Product name or niche" name="search">
                  <div class="input-group-append">
                     <button class="btn btn-fb-ads-input" type="submit" id="#">Search</button>
                  </div>
               </div>
            </div>
         </form>
        </div>
        <!-- /.row -->

                <form id="filterForm" method="get" action="{{ route('amz-product') }}">
                <div class="row mx-2">
                  <div class="col-lg-6"></div>
                    <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                        <select class="form-control select2-no-search filter-item" name="filter" style="width: 100%;">
                           <option value="">Filter Products</option>
                           <option @if ($filterSelected == 1)
                                            selected="selected"
                                        @endif value="1">By Price under $30</option>
                           <option @if ($filterSelected == 2)
                                            selected="selected"
                                        @endif value="2">By Price Over $30</option>
                        </select>
                     </div>
                     <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                        <select class="form-control select2-no-search filter-item" name="sort" style="width: 100%;">
                           <option>Sort Produtcs</option>
                           <option @if ($sortSelected == 2)
                                            selected="selected"
                                        @endif value="2">By Total Orders</option>
                           <option @if ($sortSelected == 3)
                                            selected="selected"
                                        @endif value="3">By Last added Date</option>
                        </select>
                     </div>
                </div>
                </form>
        <!-- /.row -->

        <div class="row mx-3 mt-3">
          <div class="card-deck">
            <!-- SHOW PRODUCT DETAILS -->
            <!-- FOREACH STARTS -->
            <div class="row mx-3 mt-3">
                      <div class="card-deck" id="data-wrapper">
                        @foreach($trendingProducts as $trendingProduct)
                        <div class="col-md-4 mt-4">
                            <div class="card shadow">
                          <img src="{{$trendingProduct->productImage[0]->image_link_1}}" class="card-img-top img-fluid" alt="...">
                          <div class="row card-body px-2">
                            <div class="col-12 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                              <h5 class="card-title">{{$trendingProduct->product_name}}</h5>
                            </div> 
                            <div class="row mt-3">
                              <div class="col-12 text-center px-3">
                                <span class="fa fa-star @if($trendingProduct->explore_star_rating >= 1)
                                    checked @endif"></span>

                                <span class="fa fa-star @if($trendingProduct->explore_star_rating >= 2)
                                    checked @endif"></span>
                                <span class="fa fa-star @if($trendingProduct->explore_star_rating >= 3)
                                    checked @endif"></span>
                                <span class="fa fa-star @if($trendingProduct->explore_star_rating >= 4)
                                    checked @endif"></span>
                                <span class="fa fa-star @if($trendingProduct->explore_star_rating >= 5)
                                    checked @endif"></span>
                                <span>{{$trendingProduct->explore_star_rating}}</span>
                              </div>
                              <div class="col-12 text-center px-3">
                                <span class="cae-cart-icon"><i class="fas fa-atom"></i> Total Review</span>
                                <span>{{$trendingProduct->explore_t_review}}</span>
                              </div>
                              <div class="col-12 text-center px-3">
                                <span class="cae-cart-icon"><i class="fas fa-atom"></i> Selling Price</span>
                                <span>{{$trendingProduct->price}}</span>
                              </div>

                            </div>
                          </div>
                              <div class="row mb-3 mx-1">
                                <div class="col-6 text-center p-0">
                                  <a target="_blank" href="{{$trendingProduct->productLink[0]->amazon}}" class="cae-view rounded px-2 py-1" style="color: #918C9B;"><i class="fab fa-amazon" style="background: #191919; color: #fff; font-size: 12px; padding: 2px; line-height: 13px;"></i> Amazon</a>
                                </div>
                                <div class="col-6 text-center p-0">
                                  <a target="_blank" href="{{$trendingProduct->productLink[0]->aliexpress}}" class="cae-view rounded px-2 py-1" style="color: #918C9B;"><img src="https://ebutify.com/assets/img/ali.png" style="width: 16px; padding-bottom: 5px;" alt=""> AliExpress</a>
                                </div>
                              </div>

                            </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
            <!-- PRODUCT DETAILS END -->
            <!-- FOREACH END -->

            <!-- LOAD MORE DATA SHOW -->
 
                {{-- <div class="card-deck" > --}}
                
                  <!-- RESULTS -->
                  
                {{-- </div> --}}

            <!-- LOAD MORE DATA END -->


          </div>
        </div>

        <!-- /.row -->

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

@endsection

@section('js')
<script>
initiateSlick('yes');
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