@extends('layoutsUser.user3')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <nav>
      <div class="nav nav-tabs nav-justified cpr-dashboard" id="nav-tab" role="tablist">
        <a class="nav-link active" href="customer-product-research-dashboard.html">Product Research Tool</a>
        <a class="nav-link " href="customer-ebutify-services-dashboard.html">eButify Services</a>
      </div>
    </nav>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row mx-2 my-3">
          <div class="col-12 facebook-ads-header d-flex justify-content-between">
            <h3>AliExpress Explorer</h3>
            <a type="button" class="btn btn-facebook-ads" href=""><i class="fas fa-video"></i> Tutorials</a>
          </div>
          <form class="col-12" method="get" action="{{ route('ali-product') }}">
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

        <form id="filterForm" method="get" action="{{ route('ali-product') }}">
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

            <!-- FOREACH ENDS -->

            <!-- LOAD MORE DATA SHOW -->
 

                <div class="card-deck" id="data-wrapper">
                
                    <!-- RESULTS -->
            
                </div>

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
    var ENDPOINT = "{{ url('/') }}";
    var page = 1;
    infinteLoadMore(page);

    $(window).scroll(function () {
        if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
            page++;
            infinteLoadMore(page);
        }
    });

    function infinteLoadMore(page) {
        $.ajax({
                url: ENDPOINT + "/ali-product?page=" + page,
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
            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occured');
            });
    }

</script>
@endsection