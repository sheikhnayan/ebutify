
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
                  <form action="<?php echo e(route('uploadProduct')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                  <input type="hidden" id="uploadername" name="uploadername" value="<?php echo e(Auth::user()->name); ?>">
                <div class="row add-new-product-form-main shadow bg-white m-4">
                    <div class="col-12 add-new-product-form-header shadow p-3">
                      <h3>Add New Product</h3>
                    </div>
                    <div class="col-12">
                      <div class="row pt-3 pl-3">
                        <div class="col-12 add-new-product-form-content pl-4 pr-5 pb-4">
                          <div class="row">
                            <div class="col-lg-2">

                                <div class="form-group">
                                  <label for="inputProduct">Product Name</label>
                                  <input type="text" class="form-control" name="pname" id="inputProduct" value="<?php echo e(old('pname')); ?>" required="">
                                </div>

                            </div>
                            <div class="col-lg-8">
                                <div class="row">
                                  <div class="col-md-5">

                                      <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="inputPrice">Price</label>
                                          <input type="number" class="form-control" name="price" step=".01" id="inputPrice" value="<?php echo e(old('price')); ?>" required="">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputCost">Cost</label>
                                          <input type="number" class="form-control" id="inputCost" name="cost" step=".01" value="<?php echo e(old('cost')); ?>" required="">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputProfit">Profit</label>
                                          <input type="number" class="form-control" id="inputProfit" name="profit" step=".01" value="<?php echo e(old('profit')); ?>" required="">
                                        </div>
                                      </div>

                                  </div>
                                  <div class="col-md-7">

                                      <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="inputTotalOrder">Total Order</label>
                                          <input type="number" class="form-control" id="inputTotalOrder" name="torder" step=".01" value="<?php echo e(old('torder')); ?>" required="">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputTotalRevinue">Total Revinue</label>
                                          <input type="number" class="form-control" id="inputTotalRevinue" name="trevinue" step=".01" value="<?php echo e(old('trevinue')); ?>" required="">
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="inputAlexaRank">Alexa Rank</label>
                                          <input type="number" class="form-control" id="inputAlexaRank" name="alexarank" step=".01" value="<?php echo e(old('alexarank')); ?>" required="">
                                        </div>
                                      </div>

                                  </div>
                                </div>
                            </div>
                            <div class="col-lg-2">

                                <div class="form-group">
                                  <label for="inputOpportunity">Opportunity level</label>
                                  <select class="custom-select" multiple="multiple" required="" size="3"  name="opportunity[]" id="opportunity">
                                    <option value="facebook_ads">Facebook ads</option>
                                    <option value="trending_product">Trending product</option>
                                    <option value="untapped_product">Untapped product</option>
                                  </select>
                                </div>

                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-7">

                                <div class="form-row">
                                  <div class="form-group col-md-4">
                                    <label for="inputAliExpressLink">AliExpress link</label>
                                    <input type="url" class="form-control" id="inputAliExpressLink" name="aliexpress" value="<?php echo e(old('aliexpress')); ?>">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputFacebookAdsLink">Facebook ads link</label>
                                    <input type="url" class="form-control" id="inputFacebookAdsLink" name="fbadd" value="<?php echo e(old('fbadd')); ?>">
                                  </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputGoogleTrendsLink">Google trends link</label>
                                    <input type="url" class="form-control" id="inputGoogleTrendsLink" name="google" value="<?php echo e(old('google')); ?>">
                                  </div>
                                </div>

                              <div class="row">
                                <div class="col-md-4">
                                    <div class="link-box my-1">
                                      <h4 class="text-center">AliExpress Image link</h4>

                                        <div class="form-row">
                                          <div class="form-group col-12">
                                            <input type="url" class="form-control" id="inputAliExpressImageLink" name="img1" value="<?php echo e(old('img1')); ?>" required="">
                                          </div>
                                          <div class="form-group col-12">
                                            <input type="url" class="form-control" id="inputAliExpressImageLink" name="img2" value="<?php echo e(old('img2')); ?>" required="">
                                          </div>
                                          <div class="form-group col-12">
                                            <input type="url" class="form-control" id="inputAliExpressImageLink" name="img3" value="<?php echo e(old('img3')); ?>" required="">
                                          </div>
                                          <div class="form-group col-12">
                                            <input type="url" class="form-control" id="inputAliExpressImageLink" name="img4" value="<?php echo e(old('img4')); ?>" required="">
                                          </div>
                                          <div class="form-group col-12">
                                            <input type="url" class="form-control" id="inputAliExpressImageLink" name="img5" value="<?php echo e(old('img5')); ?>" required="">
                                          </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="link-box my-1">
                                    <h4 class="text-center">Competitor link</h4>

                                      <div class="form-row">
                                        <div class="form-group col-12">
                                          <input type="url" class="form-control" id="inputAliExpressImageLink" name="competitor1" value="<?php echo e(old('competitor1')); ?>" required="">
                                        </div>
                                        <div class="form-group col-12">
                                          <input type="url" class="form-control" id="inputAliExpressImageLink" name="competitor2" value="<?php echo e(old('competitor2')); ?>">
                                        </div>
                                        <div class="form-group col-12">
                                          <input type="url" class="form-control" id="inputAliExpressImageLink" name="competitor3" value="<?php echo e(old('competitor3')); ?>">
                                        </div>
                                        <div class="form-group col-12">
                                          <input type="url" class="form-control" id="inputAliExpressImageLink" name="competitor4" value="<?php echo e(old('competitor4')); ?>">
                                        </div>
                                        <div class="form-group col-12">
                                          <input type="url" class="form-control" id="inputAliExpressImageLink" name="competitor5" value="<?php echo e(old('competitor5')); ?>">
                                        </div>
                                      </div>

                                  </div>
                                </div>
                                <div class="col-md-4">
                                <div class="link-box my-1">
                                    <h4 class="text-center">Upload Gif Image</h4>
                                      <div class="form-row">
                                        <div class="form-group col-12">
                                          <!-- <input id="profile-input1" type="text" class="form-control" style="width: 70%; display: initial;"> -->
                                          <input id="profile-select1" type="file" name="gif1" class="filepond" style="display:none; width: 70%; overflow: hidden;">
                                          <!-- <button type="button" onclick="profileSelect1()" class="btn btn-outline-none btn-transparent" style="padding: 0; overflow: hidden;"><img src="assets/img/Group-315.png" style="width: 35px;"></button> -->
                                        </div>
                                        <div class="form-group col-12">
                                          <!-- <input id="profile-input2" type="text" class="form-control" style="width: 70%; display: initial;"> -->
                                          <input id="profile-select2" type="file" name="gif2" class="filepond" style="display:none; width: 70%; overflow: hidden;">
                                          <!-- <button type="button" onclick="profileSelect2()" class="btn btn-outline-none btn-transparent" style="padding: 0; overflow: hidden;"><img src="assets/img/Group-315.png" style="width: 35px;"></button> -->
                                        </div>
                                        <div class="form-group col-12">
                                          <!-- <input id="profile-input3" type="text" class="form-control" style="width: 70%; display: initial;"> -->
                                          <input id="profile-select3" type="file" name="gif3" class="filepond" style="display:none; width: 70%; overflow: hidden;">
                                          <!-- <button type="button" onclick="profileSelect3()" class="btn btn-outline-none btn-transparent" style="padding: 0; overflow: hidden;"><img src="assets/img/Group-315.png" style="width: 35px;"></button> -->
                                        </div>
                                        <div class="col-12 upload-gif-note">
                                          <span>Click Image icon and upload your product gif images</span>
                                        </div>
                                      </div>
                                </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="link-box my-1">
                                    <h4 class="text-center pb-2">Select Customer Age</h4>
                                    <div class="input-group mb-2">
                                    <select class="custom-select" multiple="multiple" id="inputAgeSelect" size="6" name="age[]" required="">
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
                                      <select class="custom-select" multiple="multiple" id="inputSelectGender" size="6" name="gender[]" required="">
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
                                      <select class="custom-select" multiple id="inputSelectCategory" size="6" name="category[]" required="">
                                        <option>Women's Fashion</option>
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
                                        <option>Beauty Hair</option>
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
                                    <input type="url" class="form-control" id="inputYoutubeLink" name="youtube" value="<?php echo e(old('youtube')); ?>" required="">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputShopifyWebsiteLink">Shopify website link</label>
                                    <input type="url" class="form-control" id="inputShopifyWebsiteLink" name="shopify" value="<?php echo e(old('shopify')); ?>">
                                  </div>
                                </div>
                                <div class="form-row ml-2">
                                  <div class="form-group col-md-6">
                                    <label for="inputAmazonLink">Amazon link</label>
                                    <input type="url" class="form-control" id="inputAmazonLink" name="amazon" value="<?php echo e(old('amazon')); ?>">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputeBabyLink">eBay link</label>
                                    <input type="url" class="form-control" id="inputeBabyLink" name="ebay" value="<?php echo e(old('ebay')); ?>">
                                  </div>
                                </div>
                                <div class="form-row ml-2">
                                  <div class="form-group col-md-6">
                                    <label for="inputAliVideoLink">Ali Video link</label>
                                    <input type="url" class="form-control" id="inputAliVideoLink" name="video" value="<?php echo e(old('video')); ?>">
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputProtectionProduct">Protection Product</label>
                                    <select class="custom-select" size="2" required="" name="status" id="inputProtectionProduct" required="">
                                      <option>Available</option>
                                      <option>Unavailable</option>
                                    </select>
                                  </div>
                                </div>
                              <div class="col-12">
                                <div class="select2-box my-2">
                                  <h4 class="pl-2">Input Selling Niches Coma</h4>
                                  <div class="col-12 input-group">
                                    <input type="text" class="input-tags form-control" name="tag" id="tag" value="<?php echo e(old('tag')); ?>">
                                  </div>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="select2-box my-2">
                                  <h4 class="pl-2">Input Selling Country using Coma</h4>
                                  <div class="col-12 input-group">
                                    <input type="text" class="input-tags form-control" name="country[]" id="country" required="">
                                  </div>
                                </div>
                              </div>
                              <div class="col-6">
                                  <label for="inputProtectionProduct">Product Type</label>
                                  <select class="custom-select" size="2" required="" name="type" id="inputProtectionProduct" required="">
                                    <option value="1">Saturated</option>
                                    <option value="2">Unsaturated</option>
                                  </select>
                              </div>
                              <div class="col-12">
                                <label for="inputProtectionProduct">Product Video</label>
                                <input id="videoSelect" type="file" class="filepond" name="videoSelect" style="display:none; width: 70%; overflow: hidden;">
                              </div>
                              <div class="col-12">
                                  <label for="inputProtectionProduct">Facebook Content</label>
                                  <textarea class="form-control" name="content" id="example1"></textarea>
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
                            <textarea id="editor" name="desc"></textarea>
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
<?php echo $__env->make('layouts.freelancer-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ebutifyCpanel\resources\views/freelancer/practice-upload-new.blade.php ENDPATH**/ ?>