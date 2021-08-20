
<?php $__env->startSection('content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="add-product-form-content">
        <div class="container-fluid">
            <div class="row">
              <div class=" col-12">
                <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
                <form action="<?php echo e(route('productUpdate')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" id="id" name="id" value="<?php echo e($id); ?>">

                <input type="hidden" id="productImagesId" name="productImagesId" value="<?php echo e($productImages->id); ?>">

                <input type="hidden" id="productLinksId" name="productLinksId" value="<?php echo e($productLinks->id); ?>">
                
                <input type="hidden" id="uploadername" name="uploadername" value="<?php echo e(Auth::user()->name); ?>">

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
                                  <input type="text" class="form-control" name="pname" id="inputProduct" value="<?php echo e($productDetails->product_name); ?>" >
                                </div>

                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                  <div class="col-md-5">

                                      <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="inputPrice">Price</label>
                                          <input type="number" class="form-control" name="price" id="inputPrice" value="<?php echo e($productDetails->price); ?>" >
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputCost">Cost</label>
                                          <input type="number" class="form-control" id="inputCost" name="cost" step=".01" value="<?php echo e($productDetails->cost); ?>" >
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputProfit">Profit</label>
                                          <input type="number" class="form-control" id="inputProfit" name="profit" step=".01" value="<?php echo e($productDetails->profit); ?>" >
                                        </div>
                                      </div>

                                  </div>
                                  <div class="col-md-7">

                                      <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="inputTotalOrder">Total Order</label>
                                          <input type="number" class="form-control" id="inputTotalOrder" name="torder" step=".01" value="<?php echo e($productDetails->total_order); ?>" >
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputTotalRevinue">Total Revinue</label>
                                          <input type="number" class="form-control" id="inputTotalRevinue" name="trevinue" step=".01" value="<?php echo e($productDetails->total_revenue); ?>" >
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputAlexaRank">Alexa Rank</label>
                                          <input type="number" class="form-control" id="inputAlexaRank" name="alexarank" step=".01" value="<?php echo e($productDetails->alexa_rank); ?>" >
                                        </div>
                                      </div>

                                  </div>
                                </div>
                            </div>
                            <div class="col-lg-2">

                                <div class="form-group">
                                  <label for="inputOpportunity">Opportunity level</label>
                                  <select class="custom-select" multiple="multiple"  size="3"  name="opportunity[]" id="opportunity">
                                    <option value="facebook_ads" <?php if($containsF == true): ?>
                                            selected="selected"
                                        <?php endif; ?>>Facebook ads</option>
                                    <option value="trending_product" <?php if($containsT == true): ?>
                                            selected="selected"
                                        <?php endif; ?>>Trending product</option>
                                    <option value="untapped_product" <?php if($containsU == true): ?>
                                            selected="selected"
                                        <?php endif; ?>>Untapped product</option>
                                  </select>
                                </div>

                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-7">

                                <div class="form-row">
                                  <div class="form-group col-md-4">
                                    <label for="inputAliExpressLink">AliExpress link</label>
                                    <input type="text" class="form-control" id="inputAliExpressLink" name="aliexpress" value="<?php echo e($productLinks->aliexpress); ?>">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputFacebookAdsLink">Facebook ads link</label>
                                    <input type="text" class="form-control" id="inputFacebookAdsLink" name="fbadd" value="<?php echo e($productLinks->facebook_ad); ?>">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputGoogleTrendsLink">Google trends link</label>
                                    <input type="text" class="form-control" id="inputGoogleTrendsLink" name="google" value="<?php echo e($productLinks->google_trend); ?>">
                                  </div>
                                </div>

                              <div class="row">
                                <div class="col-md-4">
                                    <div class="link-box my-1">
                                      <h4 class="text-center">AliExpress Image link</h4>

                                        <div class="form-row">
                                          <div class="form-group col-12">
                                            <input type="text" class="form-control" id="inputAliExpressImageLink" name="img1" value="<?php echo e($productImages->image_link_1); ?>">
                                          </div>
                                          <div class="form-group col-12">
                                            <input type="text" class="form-control" id="inputAliExpressImageLink" name="img2" value="<?php echo e($productImages->image_link_2); ?>">
                                          </div>
                                          <div class="form-group col-12">
                                            <input type="text" class="form-control" id="inputAliExpressImageLink" name="img3" value="<?php echo e($productImages->image_link_3); ?>">
                                          </div>
                                          <div class="form-group col-12">
                                            <input type="text" class="form-control" id="inputAliExpressImageLink" name="img4" value="<?php echo e($productImages->image_link_4); ?>">
                                          </div>
                                          <div class="form-group col-12">
                                            <input type="text" class="form-control" id="inputAliExpressImageLink" name="img5" value="<?php echo e($productImages->image_link_5); ?>">
                                          </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="link-box my-1">
                                    <h4 class="text-center">Competitor link</h4>

                                      <div class="form-row">
                                        <div class="form-group col-12">
                                          <input type="text" class="form-control" id="inputAliExpressImageLink" name="competitor1" value="<?php echo e($productLinks->competitor_link_1); ?>">
                                        </div>
                                        <div class="form-group col-12">
                                          <input type="text" class="form-control" id="inputAliExpressImageLink" name="competitor2" value="<?php echo e($productLinks->competitor_link_2); ?>">
                                        </div>
                                        <div class="form-group col-12">
                                          <input type="text" class="form-control" id="inputAliExpressImageLink" name="competitor3" value="<?php echo e($productLinks->competitor_link_3); ?>">
                                        </div>
                                        <div class="form-group col-12">
                                          <input type="text" class="form-control" id="inputAliExpressImageLink" name="competitor4" value="<?php echo e($productLinks->competitor_link_4); ?>">
                                        </div>
                                        <div class="form-group col-12">
                                          <input type="text" class="form-control" id="inputAliExpressImageLink" name="competitor5" value="<?php echo e($productLinks->competitor_link_5); ?>">
                                        </div>
                                      </div>

                                  </div>
                                </div>
                                <div class="col-md-4">
                                <div class="link-box my-1">
                                    <h4 class="text-center">Upload Gif Image</h4>

                                      <div class="form-row">
                                        <div class="form-group col-12">
                                          <img class="form-group" src="<?php echo e(asset('storage/'.$productImages->gif_1)); ?>" style="width: 80px;" alt="No GIF Yet">
                                          <input class="form-group filepond" id="profile-select1" accept=".png, .jpg, .jpeg, .gif" type="file" name="gif1" style="display:none; width: 70%; overflow: hidden;">
                                        </div>
                                        <div class="form-group col-12">
                                          <img class="form-group" src="<?php echo e(asset('storage/app/public/'.$productImages->gif_2)); ?>" style="width: 80px;" alt="No GIF Yet">
                                          
                                          <input class="form-group filepond" id="profile-select2" accept=".png, .jpg, .jpeg, .gif" type="file" name="gif2" style="display:none; width: 70%; overflow: hidden;">
                                          
                                        </div>
                                        <div class="form-group col-12">
                                          <img class="form-group" src="<?php echo e(asset('storage/app/public/'.$productImages->gif_3)); ?>" style="width: 80px;" alt="No GIF Yet">
                                          
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
                                      <option  <?php if($containsUnder18 == true): ?>
                                  selected="selected"
                              <?php endif; ?>>Under 18</option>
                                      <option <?php if($containsUnder1824 == true): ?>
                                  selected="selected"
                              <?php endif; ?>>18-24</option>
                                      <option
                                      <?php if($containsUnder2534 == true): ?>
                                  selected="selected"
                              <?php endif; ?>>25-34</option>
                                      <option
                                      <?php if($containsUnder3444 == true): ?>
                                  selected="selected"
                              <?php endif; ?>>34-44</option>
                                      <option
                                      <?php if($containsUnder4554 == true): ?>
                                  selected="selected"
                              <?php endif; ?>>45-54</option>
                                      <option
                                      <?php if($containsUnder5564 == true): ?>
                                  selected="selected"
                              <?php endif; ?>>55-64</option>
                                      <option
                                      <?php if($containsUnder65 == true): ?>
                                  selected="selected"
                              <?php endif; ?>>65+</option>
                                    </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="link-box my-1">
                                    <h4 class="text-center pb-2">Select Gender</h4>
                                    <div class="input-group mb-2">
                                      <select class="custom-select" multiple="multiple" id="inputSelectGender" size="6" name="gender[]" >
                                       <option <?php if($containsMen == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Men</option>
                                            <option <?php if($containsWomen == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Women</option>
                                            <option <?php if($containsBaby == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Baby</option>
                                            <option <?php if($containsUnisex == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Unisex</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="link-box my-1">
                                    <h4 class="text-center">Select Category</h4>
                                    <div class="input-group mb-3">
                                      <select class="custom-select" multiple id="inputSelectCategory" size="6" name="category[]" >
                                        <option <?php if($containsWf == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Women's Fashion</option>
                                        <option <?php if($containsMFA == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Man's Fashion</option>
                                        <option <?php if($containsGIM == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Garden Improvement</option>
                                        <option <?php if($containsELE == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Electronics</option>
                                        <option <?php if($containsCUC == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Computer Accessories</option>
                                        <option <?php if($containsKH == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Kitchen & household</option>
                                        <option <?php if($containsJW == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Jewellery</option>
                                        <option <?php if($containsBAC == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Bike Accessories</option>
                                        <option <?php if($containsMAC == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Mobile Accessories</option>
                                        <option <?php if($containsBS == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Bag's & Shoes</option>
                                        <option <?php if($containsOD == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Outdoor</option>
                                        <option <?php if($containsBH == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Beauty Hair</option>
                                        <option <?php if($containsHB == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Health & Beauty</option>
                                        <option <?php if($containsBK == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Baby & Kids</option>
                                        <option <?php if($containsFIT == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Fitness</option>
                                        <option <?php if($containsCA == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Car Accessories</option>
                                        <option <?php if($containsHG == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Home & Garden</option>
                                        <option <?php if($containsPA == true): ?>
                                        selected="selected"
                                    <?php endif; ?>>Pet Accessories</option>
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
                                    <input type="text" class="form-control" id="inputYoutubeLink" name="youtube" value="<?php echo e($productLinks->youtube); ?>" >
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputShopifyWebsiteLink">Shopify website link</label>
                                    <input type="text" class="form-control" id="inputShopifyWebsiteLink" name="shopify" value="<?php echo e($productLinks->shopify); ?>" >
                                  </div>
                                </div>
                                <div class="form-row ml-2">
                                  <div class="form-group col-md-6">
                                    <label for="inputAmazonLink">Amazon link</label>
                                    <input type="text" class="form-control" id="inputAmazonLink" name="amazon" value="<?php echo e($productLinks->amazon); ?>">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputeBabyLink">eBay link</label>
                                    <input type="text" class="form-control" id="inputeBabyLink" name="ebay" value="<?php echo e($productLinks->ebay); ?>">
                                  </div>
                                </div>
                                <div class="form-row ml-2">
                                  <div class="form-group col-md-6">
                                    <label for="inputAliVideoLink">Ali Video link</label>
                                    <input type="text" class="form-control" id="inputAliVideoLink" name="video" value="<?php echo e($productImages->video_link); ?>">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputProtectionProduct">Protection Product</label>
                                    <select class="custom-select" size="2"  name="status" id="inputProtectionProduct" >
                                      <option <?php if($containsAv == true): ?>
                                    selected="selected"
                                <?php endif; ?>>Available</option>
                                      <option <?php if($containsUnav == true): ?>
                                    selected="selected"
                                <?php endif; ?>>Unavailable</option>
                                    </select>
                                  </div>
                                </div>
                              <div class="col-12">
                                <div class="select2-box my-2">
                                  <h4 class="pl-2">Input Selling Niches Coma</h4>
                                  <div class="col-12 input-group">
                                    <input type="text" class="input-tags form-control" name="tag" id="tag" value="<?php echo e($productDetails->tag); ?>">
                                  </div>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="select2-box my-2">
                                  <h4 class="pl-2">Input Selling Country using Coma</h4>
                                  <div class="col-12 input-group">
                                    <input type="text" class="input-tags form-control" name="country" id="country"  value="<?php echo e($productDetails->country); ?>">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                  <label for="inputProtectionProduct">Product Type</label>
                                  <select class="custom-select" size="2"  name="type" id="inputProtectionProduct" >
                                    <option <?php if($containsSa == true): ?>
                                selected="selected"
                            <?php endif; ?>>Saturated</option>
                                    <option <?php if($containsUn == true): ?>
                                selected="selected"
                            <?php endif; ?>>Unsaturated</option>
                                  </select>
                              </div>
                              <div class="col-12">
                                <label for="inputProtectionProduct">Product Video</label>
                                <input id="videoSelect" type="file" class="filepond" name="videoSelect" style="display:none; width: 70%; overflow: hidden;">
                              </div>
                              <div class="col-12">
                                  <label for="inputProtectionProduct">Facebook Content</label>
                                  <textarea class="form-control" name="content" id="example1"><?php echo e($productDetails->content); ?></textarea>
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
                            <textarea id="editor" name="desc"><?php echo e($productDetails->description); ?></textarea>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
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
            'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
          }
        }
      });
    })
    


</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.freelancer-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ebutifyCpanel\resources\views/freelancer/practice-edit-product.blade.php ENDPATH**/ ?>