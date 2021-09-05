@extends('layouts.freelancer-layout')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="add-product-form-content">
        <div class="container-fluid">
            <div class="row">
              <div class=" col-12">
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
                <form action="{{ route('productUpdate') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="id" name="id" value="{{$id}}">

                <input type="hidden" id="productImagesId" name="productImagesId" value="{{$productImages->id}}">

                <input type="hidden" id="productLinksId" name="productLinksId" value="{{$productLinks->id}}">
                
                <input type="hidden" id="uploadername" name="uploadername" value="{{Auth::user()->name}}">

                <div class="row add-new-product-form-main shadow bg-white m-4">
                    <div class="col-12 add-new-product-form-header shadow p-3">
                      <h3>Update Product</h3>
                    </div>
                    <div class="col-12">
                      <div class="row pt-3 pl-3">
                        <div class="col-12 add-new-product-form-content pl-4 pr-5 pb-4">
                          <div class="row">
                            <div class="col-lg-2">

                                <div class="form-group">
                                  <label for="inputProduct">Product Name</label>
                                  <input type="text" class="form-control" name="pname" id="inputProduct" value="{{$productDetails->product_name}}" >
                                </div>

                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                  <div class="col-md-5">

                                      <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="inputPrice">Price</label>
                                          <input type="number" class="form-control" name="price" id="inputPrice" value="{{$productDetails->price}}" >
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputCost">Cost</label>
                                          <input type="number" class="form-control" id="inputCost" name="cost" step=".01" value="{{$productDetails->cost}}" >
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputProfit">Profit</label>
                                          <input type="number" class="form-control" id="inputProfit" name="profit" step=".01" value="{{$productDetails->profit}}" >
                                        </div>
                                      </div>

                                  </div>
                                  <div class="col-md-7">

                                      <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="inputTotalOrder">Total Order</label>
                                          <input type="number" class="form-control" id="inputTotalOrder" name="torder" step=".01" value="{{$productDetails->total_order}}" >
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputTotalRevinue">Total Revinue</label>
                                          <input type="number" class="form-control" id="inputTotalRevinue" name="trevinue" step=".01" value="{{$productDetails->total_revenue}}" >
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputAlexaRank">Alexa Rank</label>
                                          <input type="number" class="form-control" id="inputAlexaRank" name="alexarank" step=".01" value="{{$productDetails->alexa_rank}}" >
                                        </div>
                                      </div>

                                  </div>
                                </div>
                            </div>
                            <div class="col-lg-2">

                                <div class="form-group">
                                  <label for="inputOpportunity">Opportunity level</label>
                                  <select class="custom-select" multiple="multiple"  size="3"  name="opportunity[]" id="opportunity">
                                    <option value="facebook_ads" @if ($containsF == true)
                                            selected="selected"
                                        @endif>Facebook ads</option>
                                    <option value="trending_product" @if ($containsT == true)
                                            selected="selected"
                                        @endif>Trending product</option>
                                    <option value="untapped_product" @if ($containsU == true)
                                            selected="selected"
                                        @endif>Untapped product</option>
                                  </select>
                                </div>

                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-7">

                                <div class="form-row">
                                  <div class="form-group col-md-4">
                                    <label for="inputAliExpressLink">AliExpress link</label>
                                    <input type="text" class="form-control" id="inputAliExpressLink" name="aliexpress" value="{{$productLinks->aliexpress}}">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputFacebookAdsLink">Facebook ads link</label>
                                    <input type="text" class="form-control" id="inputFacebookAdsLink" name="fbadd" value="{{$productLinks->facebook_ad}}">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputGoogleTrendsLink">Google trends link</label>
                                    <input type="text" class="form-control" id="inputGoogleTrendsLink" name="google" value="{{$productLinks->google_trend}}">
                                  </div>
                                </div>

                              <div class="row">
                                <div class="col-md-4">
                                    <div class="link-box my-1">
                                      <h4 class="text-center">AliExpress Image link</h4>

                                        <div class="form-row">
                                          <div class="form-group col-12">
                                            <input type="text" class="form-control" id="inputAliExpressImageLink" name="img1" value="{{$productImages->image_link_1}}">
                                          </div>
                                          <div class="form-group col-12">
                                            <input type="text" class="form-control" id="inputAliExpressImageLink" name="img2" value="{{$productImages->image_link_2}}">
                                          </div>
                                          <div class="form-group col-12">
                                            <input type="text" class="form-control" id="inputAliExpressImageLink" name="img3" value="{{$productImages->image_link_3}}">
                                          </div>
                                          <div class="form-group col-12">
                                            <input type="text" class="form-control" id="inputAliExpressImageLink" name="img4" value="{{$productImages->image_link_4}}">
                                          </div>
                                          <div class="form-group col-12">
                                            <input type="text" class="form-control" id="inputAliExpressImageLink" name="img5" value="{{$productImages->image_link_5}}">
                                          </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="link-box my-1">
                                    <h4 class="text-center">Competitor link</h4>

                                      <div class="form-row">
                                        <div class="form-group col-12">
                                          <input type="text" class="form-control" id="inputAliExpressImageLink" name="competitor1" value="{{$productLinks->competitor_link_1}}">
                                        </div>
                                        <div class="form-group col-12">
                                          <input type="text" class="form-control" id="inputAliExpressImageLink" name="competitor2" value="{{$productLinks->competitor_link_2}}">
                                        </div>
                                        <div class="form-group col-12">
                                          <input type="text" class="form-control" id="inputAliExpressImageLink" name="competitor3" value="{{$productLinks->competitor_link_3}}">
                                        </div>
                                        <div class="form-group col-12">
                                          <input type="text" class="form-control" id="inputAliExpressImageLink" name="competitor4" value="{{$productLinks->competitor_link_4}}">
                                        </div>
                                        <div class="form-group col-12">
                                          <input type="text" class="form-control" id="inputAliExpressImageLink" name="competitor5" value="{{$productLinks->competitor_link_5}}">
                                        </div>
                                      </div>

                                  </div>
                                </div>
                                <div class="col-md-4">
                                <div class="link-box my-1">
                                    <h4 class="text-center">Upload Gif Image</h4>

                                      <div class="form-row">
                                        <div class="form-group col-12">
                                          <img class="form-group" src="{{'https://ebutify.com/storage/app/public/'.$productImages->gif_1}}" style="width: 80px;" alt="No GIF Yet">
                                          <input class="form-group filepond" id="profile-select1" accept=".png, .jpg, .jpeg, .gif" type="file" name="gif1" style="display:none; width: 70%; overflow: hidden;">
                                        </div>
                                        <div class="form-group col-12">
                                          <img class="form-group" src="{{asset('storage/app/public/'.$productImages->gif_2)}}" style="width: 80px;" alt="No GIF Yet">
                                          
                                          <input class="form-group filepond" id="profile-select2" accept=".png, .jpg, .jpeg, .gif" type="file" name="gif2" style="display:none; width: 70%; overflow: hidden;">
                                          
                                        </div>
                                        <div class="form-group col-12">
                                          <img class="form-group" src="{{asset('storage/app/public/'.$productImages->gif_3)}}" style="width: 80px;" alt="No GIF Yet">
                                          
                                          <input class="form-group filepond" id="profile-select3" accept=".png, .jpg, .jpeg, .gif" type="file" name="gif3"  style="display:none; width: 70%; overflow: hidden;">
                                        </div>
                                      </div>

                                </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="link-box my-1">
                                    <h4 class="text-center pb-2">Select Customer Age</h4>
                                    <div class="input-group mb-2">
                                    <select class="custom-select" multiple="multiple" id="inputAgeSelect" size="6" name="age[]" >
                                      <option  @if ($containsUnder18 == true)
                                  selected="selected"
                              @endif>Under 18</option>
                                      <option @if ($containsUnder1824 == true)
                                  selected="selected"
                              @endif>18-24</option>
                                      <option
                                      @if ($containsUnder2534 == true)
                                  selected="selected"
                              @endif>25-34</option>
                                      <option
                                      @if ($containsUnder3444 == true)
                                  selected="selected"
                              @endif>34-44</option>
                                      <option
                                      @if ($containsUnder4554 == true)
                                  selected="selected"
                              @endif>45-54</option>
                                      <option
                                      @if ($containsUnder5564 == true)
                                  selected="selected"
                              @endif>55-64</option>
                                      <option
                                      @if ($containsUnder65 == true)
                                  selected="selected"
                              @endif>65+</option>
                                    </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="link-box my-1">
                                    <h4 class="text-center pb-2">Select Gender</h4>
                                    <div class="input-group mb-2">
                                      <select class="custom-select" multiple="multiple" id="inputSelectGender" size="6" name="gender[]" >
                                       <option @if ($containsMen == true)
                                        selected="selected"
                                    @endif>Men</option>
                                            <option @if ($containsWomen == true)
                                        selected="selected"
                                    @endif>Women</option>
                                            <option @if ($containsBaby == true)
                                        selected="selected"
                                    @endif>Baby</option>
                                            <option @if ($containsUnisex == true)
                                        selected="selected"
                                    @endif>Unisex</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="link-box my-1">
                                    <h4 class="text-center">Select Category</h4>
                                    <div class="input-group mb-3">
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
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5">

                                <div class="form-row ml-2">
                                  <div class="form-group col-md-6">
                                    <label for="inputYoutubeLink">Youtube link</label>
                                    <input type="text" class="form-control" id="inputYoutubeLink" name="youtube" value="{{$productLinks->youtube}}" >
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputShopifyWebsiteLink">Shopify website link</label>
                                    <input type="text" class="form-control" id="inputShopifyWebsiteLink" name="shopify" value="{{$productLinks->shopify}}" >
                                  </div>
                                </div>
                                <div class="form-row ml-2">
                                  <div class="form-group col-md-6">
                                    <label for="inputAmazonLink">Amazon link</label>
                                    <input type="text" class="form-control" id="inputAmazonLink" name="amazon" value="{{$productLinks->amazon}}">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputeBabyLink">eBay link</label>
                                    <input type="text" class="form-control" id="inputeBabyLink" name="ebay" value="{{$productLinks->ebay}}">
                                  </div>
                                </div>
                                <div class="form-row ml-2">
                                  <div class="form-group col-md-6">
                                    <label for="inputAliVideoLink">Ali Video link</label>
                                    <input type="text" class="form-control" id="inputAliVideoLink" name="video" value="{{$productImages->video_link}}">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputProtectionProduct">Protection Product</label>
                                    <select class="custom-select" size="2"  name="status" id="inputProtectionProduct" >
                                      <option @if ($containsAv == true)
                                    selected="selected"
                                @endif>Available</option>
                                      <option @if ($containsUnav == true)
                                    selected="selected"
                                @endif>Unavailable</option>
                                    </select>
                                  </div>
                                </div>
                              <div class="col-12">
                                <div class="select2-box my-2">
                                  <h4 class="pl-2">Input Selling Niches Coma</h4>
                                  <div class="col-12 input-group">
                                    <input type="text" class="input-tags form-control" name="tag" id="tag" value="{{$productDetails->tag}}">
                                  </div>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="select2-box my-2">
                                  <h4 class="pl-2">Input Selling Country using Coma</h4>
                                  <div class="col-12 input-group">
                                    <input type="text" class="input-tags form-control" name="country" id="country"  value="{{$productDetails->country}}">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                  <label for="inputProtectionProduct">Product Type</label>
                                  <select class="custom-select" size="2"  name="type" id="inputProtectionProduct" >
                                    <option @if ($containsSa == true)
                                selected="selected"
                            @endif>Saturated</option>
                                    <option @if ($containsUn == true)
                                selected="selected"
                            @endif>Unsaturated</option>
                                  </select>
                              </div>
                              <div class="col-12">
                                <label for="inputProtectionProduct">Product Video</label>
                                <input id="videoSelect" type="file" class="filepond" name="videoSelect" style="display:none; width: 70%; overflow: hidden;">
                              </div>
                              <div class="col-12">
                                  <label for="inputProtectionProduct">Facebook Content</label>
                                  <textarea class="form-control" name="content" id="example1">{{$productDetails->content}}</textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="row  mr-4">
                          <div class="col-12 text-description pl-4 pr-5 pb-4 ml-3">
                            <h4>Description</h4>
                            <textarea id="editor" name="desc">{{$productDetails->description}}</textarea>
                          </div>
                          <div class="col-12 pl-4 pr-5 pb-4">
                            <button type="submit" class="btn btn-primary float-right">Submit Product</button>
                          </div>
                          
                      </div>
                    </div>

                </div>
                  </form>
              </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('js')
<script language="javascript" type="text/javascript">

  $(document) .ready(function(){
    $('.input-seling-niches').select2({
      width: '100%'
    });
    $(".input-tags").tagsinput();
  });

  tinymce.init({
    selector: 'textarea#editor',
    menubar: false
  });

  function profileSelect1(){
    $('#profile-select1').trigger('click');
  }
  $(function () {
      $("#profile-select1").change(function () {
        var reader = new FileReader();
        reader.onload = function (e) {          
            // $("#dvPreview").attr("src", e.target.result);
        }
        reader.readAsDataURL($(this)[0].files[0]);
        $('#profile-input1').val($(this)[0].files[0].name);
      });
  });

  function profileSelect2(){
    $('#profile-select2').trigger('click');
  }
  $(function () {
      $("#profile-select2").change(function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            // $("#dvPreview").attr("src", e.target.result);
        }
        reader.readAsDataURL($(this)[0].files[0]);
        $('#profile-input2').val($(this)[0].files[0].name);
      });
  });

  function profileSelect3(){
    $('#profile-select3').trigger('click');
  }
  $(function () {
      $("#profile-select3").change(function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            // $("#dvPreview").attr("src", e.target.result);
        }
        reader.readAsDataURL($(this)[0].files[0]);
        $('#profile-input3').val($(this)[0].files[0].name);
      });
  });


    // Get a reference to the file input element
    // const inputElement = document.querySelector('input[id="videoSelect"]');

    // get a collection of elements with class filepond
    const inputElements = document.querySelectorAll('input.filepond');

    // loop over input elements
    Array.from(inputElements).forEach(inputElement => {
    
    // Create a FilePond instance
    const pond = FilePond.create(inputElement);

      FilePond.setOptions({
        server: {
          url: '/fileUpload',
          headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          }
        }
      });
    })
    


</script>
@endsection