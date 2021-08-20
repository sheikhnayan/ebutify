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
                          <form class="pr-2" action="{{ route('ali-product-update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="id" name="id" value="{{$id}}">

                            <input type="hidden" id="productImagesId" name="productImagesId" value="{{$productImages->id}}">

                            <input type="hidden" id="productLinksId" name="productLinksId" value="{{$productLinks->id}}">
                            
                             <input type="hidden" id="uploadername" name="uploadername" value="{{Auth::user()->name}}">
                            <div class="form-group">
                              <label for="inputProduct">product Name</label>
                              <input type="text" required="" name="pname" class="form-control" id="inputProduct" value="{{$productDetails->product_name}}">
                            </div>
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputAliExpressLink">AliExpress Link</label>
                                    <input type="text" name="ali_express_link" class="form-control" id="inputAliExpressLink" value="{{$productLinks->aliexpress}}">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputAmazonLink">Total Sales</label>
                                    <input type="number" step=".01" name="amz_link" class="form-control" id="inputAmazonLink" value="{{$productDetails->total_revenue}}">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-row">
                                  <div class="form-group col-md-5">
                                    <label for="inputImageLink">Image Link</label>
                                    <input type="text" required="" name="img_link" class="form-control" id="inputImageLink" value="{{$productImages->image_link_1}}">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputProductPrice">Product Price</label>
                                    <input type="number" step=".01" name="price" class="form-control" id="inputProductPrice" value="{{$productDetails->price}}">
                                  </div>
                                  <div class="form-group col-md-3">
                                    <label for="inputStarRatting">Star Ratting</label>
                                    <input type="number" step=".01" name="star_rating" class="form-control" id="inputStarRatting" value="{{$productDetails->explore_star_rating}}">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6 col-lg-2">
                                <label for="inputTotalReviews">Total Reviews</label>
                                <input type="number" name="t_review" class="form-control" id="inputTotalReviews" value="{{$productDetails->explore_t_review}}">
                              </div>
                              <div class="form-group col-md-6 col-lg-2">
                                <label for="inputProtectionProduct">Product Type</label>
                                  <select class="custom-select" size="2"  name="type" id="inputProtectionProduct" >
                                    <option value="1" @if ($containsSa == true)
                                selected="selected"
                            @endif>Saturated</option>
                                    <option value="2" @if ($containsUn == true)
                                selected="selected"
                            @endif>Unsaturated</option>
                                  </select>
                              </div>
                              <div class="form-group col-md-6 col-lg-2">
                                <select class="custom-select" multiple id="inputSelectCategory" size="6" name="category[]" >
                                      <option @if ($containsWf == true)
                                      selected="selected"
                                  @endif>Women's Fashion</option>
                                      <option @if ($containsMFA == true)
                                      selected="selected"
                                  @endif>Man's Fashion</option>
                                      <option @if ($containsGIM == true)
                                      selected="selected"
                                  @endif>Garden Improvement</option>
                                      <option @if ($containsELE == true)
                                      selected="selected"
                                  @endif>Electronics</option>
                                      <option @if ($containsCUC == true)
                                      selected="selected"
                                  @endif>Computer Accessories</option>
                                      <option @if ($containsKH == true)
                                      selected="selected"
                                  @endif>Kitchen & household</option>
                                      <option @if ($containsJW == true)
                                      selected="selected"
                                  @endif>Jewellery</option>
                                      <option @if ($containsBAC == true)
                                      selected="selected"
                                  @endif>Bike Accessories</option>
                                      <option @if ($containsMAC == true)
                                      selected="selected"
                                  @endif>Mobile Accessories</option>
                                      <option @if ($containsBS == true)
                                      selected="selected"
                                  @endif>Bag's & Shoes</option>
                                      <option @if ($containsOD == true)
                                      selected="selected"
                                  @endif>Outdoor</option>
                                      <option @if ($containsBH == true)
                                      selected="selected"
                                  @endif>Beauty Hair</option>
                                      <option @if ($containsHB == true)
                                      selected="selected"
                                  @endif>Health & Beauty</option>
                                      <option @if ($containsBK == true)
                                      selected="selected"
                                  @endif>Baby & Kids</option>
                                      <option @if ($containsFIT == true)
                                      selected="selected"
                                  @endif>Fitness</option>
                                      <option @if ($containsCA == true)
                                      selected="selected"
                                  @endif>Car Accessories</option>
                                      <option @if ($containsHG == true)
                                      selected="selected"
                                  @endif>Home & Garden</option>
                                      <option @if ($containsPA == true)
                                      selected="selected"
                                  @endif>Pet Accessories</option>
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