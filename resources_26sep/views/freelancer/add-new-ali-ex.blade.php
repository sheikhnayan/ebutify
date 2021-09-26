@extends('layouts.freelancer-amazon-layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="amazon-form-content">
        <div class="container-fluid">
            <div class="row">
              <div class=" col-12">
                <div class="row amazon-form-main shadow bg-white m-4">
                    <div class="col-12 amazon-form-header shadow p-3">
                      <h3>Add New Product</h3>
                    </div>
                    <div class="col-12">
                      <div class="row pt-3 pl-3">
                        <div class="col-lg-12 amazon-form-content pl-2 pr-3 pb-4">
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
                          <form class="pr-2" action="{{ route('upload-ali') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                             <input type="hidden" id="uploadername" name="uploadername" value="{{Auth::user()->name}}">
                            <div class="form-group">
                              <label for="inputProduct">product Name</label>
                              <input type="text" required="" name="pname" class="form-control" id="inputProduct">
                            </div>
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputAliExpressLink">AliExpress Link</label>
                                    <input type="text" name="ali_express_link" class="form-control" id="inputAliExpressLink">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputAmazonLink">Total Sales</label>
                                    <input type="number" step=".01" name="t_sales" class="form-control" id="inputAmazonLink">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-row">
                                  <div class="form-group col-md-5">
                                    <label for="inputImageLink">Image Link</label>
                                    <input type="text" required="" name="img_link" class="form-control" id="inputImageLink">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputProductPrice">Product Price</label>
                                    <input type="number" step=".01" name="price" class="form-control" id="inputProductPrice">
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="inputStarRatting">Star Ratting</label>
                                    <input type="number" step=".01" name="star_rating" class="form-control" id="inputStarRatting">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6 col-lg-2">
                                <label for="inputTotalReviews">Total Reviews</label>
                                <input type="number" name="t_review" class="form-control" id="inputTotalReviews">
                              </div>
                              <div class="form-group col-md-6 col-lg-2">
                                <label for="inputTotalReviews">Total Order</label>
                                <input type="number" name="t_order" class="form-control" id="inputTotalReviews">
                              </div>
                              <div class="form-group col-md-6 col-lg-2">
                                <label for="inputProtectionProduct">Product Type</label>
                                <select class="custom-select" size="2" required="" name="type" id="inputProtectionProduct" required="">
                                  <option value="1">Saturated</option>
                                  <option value="2">Unsaturated</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6 col-lg-2">
                                <label for="inputSelectCategory">Product Category</label>
                                <select class="custom-select" multiple id="inputSelectCategory" size="6" name="category[]" required="">
                                   @foreach($realCategory as $key => $realcat)
                                   <option 
                                           value="{{$key}}">{{$realcat->category}}</option>
                                   @endforeach
                                  <!-- <option>Women's Fashion</option>
                                  <option>Man's Fashion</option>
                                  <option>Health & Beauty</option>
                                  <option>Home Improvement</option>
                                  <option>Garden Improvement</option>
                                  <option>Pet Accessories</option>
                                  <option>Electronics</option>
                                  <option>Computer Accessories</option>
                                  <option>Baby & Kids</option>
                                  <option>Kitchen & household</option>
                                  <option>Jewellery</option>
                                  <option>Car Accessories</option>
                                  <option>Bike Accessories</option>
                                  <option>Mobile Accessories</option>
                                  <option>Fitness</option>
                                  <option>Bag's & Shoes</option>
                                  <option>Outdoor</option>
                                  <option>Beauty Hair</option> -->
                                </select>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Submit Product</button>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection