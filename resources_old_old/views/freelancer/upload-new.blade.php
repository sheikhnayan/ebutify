@extends('layouts.freelancer-layout')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="add-product-form-content">
        <div class="container-fluid">
            <div class="row">
              <div class=" col-12">
                <div class="row add-new-product-form-main shadow bg-white m-4">
                    <div class="col-12 add-new-product-form-header shadow p-3">
                      <h3>Add New Product</h3>
                    </div>
                    <div class="col-12">
                      <div class="row pt-3 pl-3">
                        <div class="col-12 add-new-product-form-content pl-4 pr-5 pb-4">
                          <div class="row">
                            <div class="col-lg-2">
                              <form>
                                <div class="form-group">
                                  <label for="inputProduct">Product Name</label>
                                  <input type="text" class="form-control" id="inputProduct">
                              </div>
                              </form>
                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                  <div class="col-md-5">
                                    <form>
                                      <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="inputPrice">Price</label>
                                          <input type="text" class="form-control" id="inputPrice">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputCost">Cost</label>
                                          <input type="text" class="form-control" id="inputCost">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputProfit">Profit</label>
                                          <input type="text" class="form-control" id="inputProfit">
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                  <div class="col-md-7">
                                    <form>
                                      <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="inputTotalOrder">Total Order</label>
                                          <input type="text" class="form-control" id="inputTotalOrder">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputTotalRevinue">Total Revinue</label>
                                          <input type="text" class="form-control" id="inputTotalRevinue">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputAlexaRank">Alexa Rank</label>
                                          <input type="text" class="form-control" id="inputAlexaRank">
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                              <form>
                                <div class="form-group">
                                  <label for="inputOpportunity">Opportunity level</label>
                                  <input type="text" class="form-control" id="inputOpportunity">
                              </div>
                              </form>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-7">
                              <form>
                                <div class="form-row">
                                  <div class="form-group col-md-4">
                                    <label for="inputAliExpressLink">AliExpress link</label>
                                    <input type="text" class="form-control" id="inputAliExpressLink">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputFacebookAdsLink">Facebook ads link</label>
                                    <input type="text" class="form-control" id="inputFacebookAdsLink">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputGoogleTrendsLink">Google trends link</label>
                                    <input type="text" class="form-control" id="inputGoogleTrendsLink">
                                  </div>
                                </div>
                              </form>
                              <div class="row">
                                <div class="col-md-4">
                                    <div class="link-box my-1">
                                      <h4 class="text-center">AliExpress Image link</h4>
                                      <form>
                                        <div class="form-row">
                                          <div class="form-group col-12">
                                            <input type="text" class="form-control" id="inputAliExpressImageLink">
                                          </div>
                                          <div class="form-group col-12">
                                            <input type="text" class="form-control" id="inputAliExpressImageLink">
                                          </div>
                                          <div class="form-group col-12">
                                            <input type="text" class="form-control" id="inputAliExpressImageLink">
                                          </div>
                                          <div class="form-group col-12">
                                            <input type="text" class="form-control" id="inputAliExpressImageLink">
                                          </div>
                                          <div class="form-group col-12">
                                            <input type="text" class="form-control" id="inputAliExpressImageLink">
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="link-box my-1">
                                    <h4 class="text-center">Competitor link</h4>
                                    <form>
                                      <div class="form-row">
                                        <div class="form-group col-12">
                                          <input type="text" class="form-control" id="inputAliExpressImageLink">
                                        </div>
                                        <div class="form-group col-12">
                                          <input type="text" class="form-control" id="inputAliExpressImageLink">
                                        </div>
                                        <div class="form-group col-12">
                                          <input type="text" class="form-control" id="inputAliExpressImageLink">
                                        </div>
                                        <div class="form-group col-12">
                                          <input type="text" class="form-control" id="inputAliExpressImageLink">
                                        </div>
                                        <div class="form-group col-12">
                                          <input type="text" class="form-control" id="inputAliExpressImageLink">
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                <div class="link-box my-1">
                                    <h4 class="text-center">Upload Gif Image</h4>
                                    <form>
                                      <div class="form-row">
                                        <div class="form-group col-12">
                                          <input id="profile-input1" type="text" class="form-control" style="width: 70%; display: initial;">
                                          <input id="profile-select1" accept=".png, .jpg, .jpeg, .gif" type="file" name="profile1" style="display:none; width: 70%; overflow: hidden;">
                                          <button type="button" onclick="profileSelect1()" class="btn btn-outline-none btn-transparent" style="padding: 0; overflow: hidden;"><img src="assets/img/Group-315.png" style="width: 35px;"></button>
                                        </div>
                                        <div class="form-group col-12">
                                          <input id="profile-input2" type="text" class="form-control" style="width: 70%; display: initial;">
                                          <input id="profile-select2" accept=".png, .jpg, .jpeg, .gif" type="file" name="profile2" style="display:none; width: 70%; overflow: hidden;">
                                          <button type="button" onclick="profileSelect2()" class="btn btn-outline-none btn-transparent" style="padding: 0; overflow: hidden;"><img src="assets/img/Group-315.png" style="width: 35px;"></button>
                                        </div>
                                        <div class="form-group col-12">
                                          <input id="profile-input3" type="text" class="form-control" style="width: 70%; display: initial;">
                                          <input id="profile-select3" accept=".png, .jpg, .jpeg, .gif" type="file" name="profile3" style="display:none; width: 70%; overflow: hidden;">
                                          <button type="button" onclick="profileSelect3()" class="btn btn-outline-none btn-transparent" style="padding: 0; overflow: hidden;"><img src="assets/img/Group-315.png" style="width: 35px;"></button>
                                        </div>
                                        <div class="col-12 upload-gif-note">
                                          <span>Click Image icon and upload your product gif images</span>
                                        </div>
                                        
                                      </div>
                                    </form>
                                </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="link-box my-1">
                                    <h4 class="text-center pb-2">Select Customer Age</h4>
                                    <div class="input-group mb-2">
                                      <select class="custom-select" multiple="multiple" id="inputAgeSelect" size="6">
                                        <option>18-24</option>
                                        <option>25-34</option>
                                        <option>34-44</option>
                                        <option>45-54</option>
                                        <option>55-64</option>
                                        <option>65+</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="link-box my-1">
                                    <h4 class="text-center pb-2">Select Gender</h4>
                                    <div class="input-group mb-2">
                                      <select class="custom-select" multiple="multiple" id="inputSelectGender" size="4">
                                        <option>Men</option>
                                        <option>Women</option>
                                        <option>Baby</option>
                                        <option>Unisex</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="link-box my-1">
                                    <h4 class="text-center">Select Category</h4>
                                    <div class="input-group mb-3">
                                      <select class="custom-select" multiple id="inputSelectCategory" size="6">
                                        <option selected>Health & Beauty</option>
                                        <option>Baby & Kids</option>
                                        <option>Fitness</option>
                                        <option>Car Accessories</option>
                                        <option>Home & Gerden</option>
                                        <option>Pet Accessories</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-5">
                              <form>
                                <div class="form-row ml-2">
                                  <div class="form-group col-md-6">
                                    <label for="inputYoutubeLink">Youtube link</label>
                                    <input type="text" class="form-control" id="inputYoutubeLink">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputShopifyWebsiteLink">Shopify website link</label>
                                    <input type="text" class="form-control" id="inputShopifyWebsiteLink">
                                  </div>
                                </div>
                                <div class="form-row ml-2">
                                  <div class="form-group col-md-6">
                                    <label for="inputAmazonLink">Amazon link</label>
                                    <input type="text" class="form-control" id="inputAmazonLink">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputeBabyLink">eBaby link</label>
                                    <input type="text" class="form-control" id="inputeBabyLink">
                                  </div>
                                </div>
                                <div class="form-row ml-2">
                                  <div class="form-group col-md-6">
                                    <label for="inputAliVideoLink">Ali Video link</label>
                                    <input type="text" class="form-control" id="inputAliVideoLink">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputProtectionProduct">Protection Product</label>
                                    <input type="text" class="form-control" id="inputProtectionProduct">
                                  </div>
                                </div>
                              </form>
                              <div class="col-12">
                                <div class="select2-box my-5">
                                  <h4 class="pl-2">Input Selling Niches Coma</h4>
                                  <div class="col-12 input-group">
                                    <select class="input-seling-niches" name="group1" multiple="multiple">
                                      <option>Man's Fashion</option>
                                      <option>Baby & Kids</option>
                                      <option>Baby</option>
                                      <option>Health</option>
                                      <option>Fitness</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="select2-box my-2">
                                  <h4 class="pl-2">Input Selling Country using Coma</h4>
                                  <div class="col-12 input-group">
                                    <input type="text" class="input-tags form-control">
                                  </div>
                                </div>
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
                            <textarea id="editor"></textarea>
                          </div>
                          <div class="col-12 pl-4 pr-5 pb-4">
                            <button type="button" class="btn btn-primary float-right">Submit Product</button>
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


</script>
@endsection