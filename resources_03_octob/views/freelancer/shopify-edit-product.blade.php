@extends('layouts.freelancer-amazon-layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="shopify-form-content">
        <div class="container-fluid">
            <div class="row">
              <div class=" col-12">
                <div class="row shopify-form-main shadow bg-white m-4">

                    <div class="col-12 shopify-form-header shadow px-5 py-3">
                      @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                      <h3>Add New Product</h3>
                    </div>

                    <form action="{{route('shopify-product-update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                    <div class="col-12">
                      <div class="row pt-3 pl-3">
                          
                        <div class="col-12 pl-2 pr-3 pb-4">
                          <form class="pr-2" action="{{ route('shopify-product-update') }}" method="POST">
                            <div class="form-row shopify-form-content">
                              <div class="col-lg-7">
                                <input type="hidden" id="uploadername" name="uploadername" value="{{Auth::user()->name}}">
                                <input type="hidden" id="id" name="id" value="{{Auth::user()->id}}">
                                <div class="form-group">
                                  <label for="inputShopifyStoreLink">Shopify Store Link</label>
                                  <input type="text" class="form-control" name="shopify_link" id="shopify_link" value="{{$productDetails->shopify_link}}">
                                </div>
                              </div>
                              <div class="col-lg-5">
                                <div class="row">
                                  <div class="form-group col-md-5">
                                    <label for="inputMonthlyTraffic">Monthly Traffic</label>
                                    <input type="number" class="form-control" name="monthly_traffic" id="inputMonthlyTraffic" value="{{$productDetails->monthly_traffic}}">
                                  </div>
                                  <div class="form-group col-md-7">
                                    <label for="inputAdSpend">AdSpend</label>
                                    <input type="number" class="form-control" name="ads_spend" id="inputAdSpend" value="{{$productDetails->ad_spend}}">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-row mr-2">
                              <div class="col-lg-7">
                                <div class="row">
                                  <div class="form-group col-md-7">
                                    <label for="inputRunningAds">Running Ads</label>
                                    <input type="number" class="form-control" name="running_ads" id="inputRunningAds" value="{{$productDetails->running_ads}}">
                                  </div>
                                  <div class="form-group col-md-5">
                                    <label for="inputFacebookPageLink">Facebook Page Link</label>
                                    <input type="text" class="form-control" name="fb_page_link" id="inputFacebookPageLink" value="{{$productDetails->fb_link}}">
                                  </div>
                                </div>
                              </div>
                            </div>
                        </form>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="shopify-from-box shadow p-3 mb-3 mr-2">
                                <h4 class="pl-2">Product One</h4>
                                  <div class="form-group col-12">
                                    <input type="text" class="form-control my-2" name="pname" placeholder="Product Name" value="{{$productDetails->product_name}}">
                                    <input type="text" class="form-control my-2" name="img1" placeholder="Product Image Link" value="{{$productDetails->image_link}}">
                                    <input type="number" step="0.01" class="form-control my-2" name="price" placeholder="Product Price" value="{{$productDetails->price}}">
                                    <input type="text" class="form-control my-2" name="competitor1" placeholder="Product Link" value="{{$productDetails->product_link}}">
                                    <input type="text" class="form-control my-2" name="aliexpress" placeholder="AliExpress Link" value="{{$productDetails->ali_express_link}}">
                                  </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="shopify-from-box shadow p-3 mb-3 mr-2">
                                <h4 class="pl-2">Product Two</h4>
                                  <div class="form-group col-12">
                                    <input type="text" class="form-control my-2" name="pname2" placeholder="Product Name" value="{{$productDetails->product_name2}}">
                                    <input type="text" class="form-control my-2" name="img12" placeholder="Product Image Link" value="{{$productDetails->image_link2}}">
                                    <input type="number" step="0.01" class="form-control my-22" name="price2" placeholder="Product Price" value="{{$productDetails->price2}}">
                                    <input type="text" class="form-control my-2" name="competitor12" placeholder="Product Link" value="{{$productDetails->product_link2}}">
                                    <input type="text" class="form-control my-2" name="aliexpress2" placeholder="AliExpress Link" value="{{$productDetails->ali_express_link2}}">
                                  </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="shopify-from-box shadow p-3 mb-3 mr-2">
                                <h4 class="pl-2">Product Three</h4>
                                  <div class="form-group col-12">
                                    <input type="text" class="form-control my-2" name="pname3" placeholder="Product Name" value="{{$productDetails->product_name3}}">
                                    <input type="text" class="form-control my-2" name="img13" placeholder="Product Image Link" value="{{$productDetails->image_link3}}">
                                    <input type="number" step="0.1" class="form-control my-23" name="price3" placeholder="Product Price" value="{{$productDetails->price3}}">
                                    <input type="text" class="form-control my-2" name="competitor13" placeholder="Product Link" value="{{$productDetails->product_link3}}">
                                    <input type="text" class="form-control my-2" name="aliexpress3" placeholder="AliExpress Link" value="{{$productDetails->ali_express_link3}}">
                                  </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="shopify-from-box shadow p-3 mb-3 mr-2">
                                <h4 class="pl-2">Product Four</h4>
                                  <div class="form-group col-12">
                                    <input type="text" class="form-control my-2" name="pname4" placeholder="Product Name" value="{{$productDetails->product_name}}">
                                    <input type="text" class="form-control my-2" name="img14" placeholder="Product Image Link" value="{{$productDetails->image_link4}}">
                                    <input type="number" step="0.1" class="form-control my-2" name="price4" placeholder="Product Price" value="{{$productDetails->price4}}">
                                    <input type="text" class="form-control my-2" name="competitor14" placeholder="Product Link" value="{{$productDetails->product_link4}}">
                                    <input type="text" class="form-control my-2" name="aliexpress4" placeholder="AliExpress Link" value="{{$productDetails->ali_express_link4}}">
                                  </div>
                            </div>
                          </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary float-right">Submit Product</button>
                        </div>
                        
                      </div>
                    </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection