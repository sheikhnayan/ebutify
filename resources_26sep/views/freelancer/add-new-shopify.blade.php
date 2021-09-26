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

                    <form action="{{route('upload-shopify')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                    <div class="col-12">
                      <div class="row pt-3 pl-3">
                        
                        <div class="col-12 pl-2 pr-3 pb-4">
                          <form class="pr-2">
                            <div class="form-row shopify-form-content">
                              <div class="col-lg-7">
                                <input type="hidden" id="uploadername" name="uploadername" value="{{Auth::user()->name}}">
                                <input type="hidden" id="user_id" name="uploadId" value="{{Auth::user()->id}}">
                                <div class="form-group">
                                  <label for="inputShopifyStoreLink">Shopify Store Link</label>
                                  <input type="text" class="form-control" name="shopify" id="inputShopifyStoreLink">
                                </div>
                              </div>
                              <div class="col-lg-5">
                                <div class="row">
                                  <div class="form-group col-md-5">
                                    <label for="inputMonthlyTraffic">Monthly Traffic</label>
                                    <input type="number" class="form-control" name="monthly_traffic" id="inputMonthlyTraffic">
                                  </div>
                                  <div class="form-group col-md-7">
                                    <label for="inputAdSpend">AdSpend</label>
                                    <input type="number" class="form-control" name="ad_spend" id="inputAdSpend">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-row mr-2">
                              <div class="col-lg-7">
                                <div class="row">
                                  <div class="form-group col-md-7">
                                    <label for="inputRunningAds">Running Ads</label>
                                    <input type="number" class="form-control" name="running_ads" id="inputRunningAds">
                                  </div>
                                  <div class="form-group col-md-5">
                                    <label for="inputFacebookPageLink">Facebook Page Link</label>
                                    <input type="text" class="form-control" name="fb_page_link" id="inputFacebookPageLink">
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
                                    <input type="text" class="form-control my-2" name="pname" placeholder="Product Name">
                                    <input type="text" class="form-control my-2" name="img1" placeholder="Product Image Link">
                                    <input type="number" step=".01" class="form-control my-2" name="price" placeholder="Product Price">
                                    <input type="text" class="form-control my-2" name="competitor1" placeholder="Product Link">
                                    <input type="text" class="form-control my-2" name="aliexpress" placeholder="AliExpress Link">
                                  </div>
                                  <div class="form-group ">
                                    <label for="inputProtectionProduct">Product Type</label>
                                    <select class="custom-select" size="2" name="type" id="inputProtectionProduct">
                                      <option>Saturated</option>
                                      <option>Unsaturated</option>
                                    </select>
                                  </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="shopify-from-box shadow p-3 mb-3 ml-2">
                                <h4 class="pl-2">Product Two</h4>
                                  <div class="form-group col-12">
                                    <input type="text" class="form-control my-2" name="pname1" placeholder="Product Name">
                                    <input type="text" class="form-control my-2" name="img11" placeholder="Product Image Link">
                                    <input type="number" step=".01" class="form-control my-2" name="price1" placeholder="Product Price">
                                    <input type="text" class="form-control my-2" name="competitor11" placeholder="Product Link">
                                    <input type="text" class="form-control my-2" name="aliexpress1" placeholder="AliExpress Link">
                                  </div>
                                  <div class="form-group ">
                                    <label for="inputProtectionProduct">Product Type</label>
                                    <select class="custom-select" size="2" name="type1" id="inputProtectionProduct">
                                      <option>Saturated</option>
                                      <option>Unsaturated</option>
                                    </select>
                                  </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="shopify-from-box shadow p-3 mb-3 mr-2">
                                <h4 class="pl-2">Product Three</h4>
                                  <div class="form-group col-12">
                                    <input type="text" class="form-control my-2" name="pname2" placeholder="Product Name">
                                    <input type="text" class="form-control my-2" name="img12" placeholder="Product Image Link">
                                    <input type="number" step=".01" class="form-control my-2" name="price2" placeholder="Product Price">
                                    <input type="text" class="form-control my-2" name="competitor12" placeholder="Product Link">
                                    <input type="text" class="form-control my-2" name="aliexpress2" placeholder="AliExpress Link">
                                  </div>
                                  <div class="form-group ">
                                    <label for="inputProtectionProduct">Product Type</label>
                                    <select class="custom-select" size="2" name="type2" id="inputProtectionProduct">
                                      <option>Saturated</option>
                                      <option>Unsaturated</option>
                                    </select>
                                  </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="shopify-from-box shadow p-3 mb-3 ml-2">
                                <h4 class="pl-2">Product Four</h4>
                                  <div class="form-group col-12">
                                    <input type="text" class="form-control my-2" name="pname3" placeholder="Product Name">
                                    <input type="text" class="form-control my-2" name="img13" placeholder="Product Image Link">
                                    <input type="number" step=".01" class="form-control my-2" name="price3" placeholder="Product Price">
                                    <input type="text" class="form-control my-2" name="competitor13" placeholder="Product Link">
                                    <input type="text" class="form-control my-2" name="aliexpress3" placeholder="AliExpress Link">
                                  </div>
                                  <div class="form-group ">
                                    <label for="inputProtectionProduct">Product Type</label>
                                    <select class="custom-select" size="2" name="type3" id="inputProtectionProduct">
                                      <option>Saturated</option>
                                      <option>Unsaturated</option>
                                    </select>
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