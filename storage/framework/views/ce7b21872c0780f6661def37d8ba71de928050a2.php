
<?php $__env->startSection('content'); ?>

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
            <h3>Trending Product Research</h3>
            <a type="button" class="btn btn-facebook-ads" href="<?php echo e(url('tutorial')); ?>"><i class="fas fa-video"></i> Tutorials</a>
          </div>
               <form class="col-12" method="get" action="<?php echo e(route('trending-products')); ?>">
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
               <form id="filterForm" method="get" action="<?php echo e(route('trending-products')); ?>">
                  <div class="row mx-2">
                     <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                        <select class="form-control select2 filter-item" name="category">
                           <option value="">All Categories</option>
                           <option <?php if($categorySelected == 1): ?>
                                            selected="selected"
                                        <?php endif; ?> value="1">Women's Fashion</option>
                           <option <?php if($categorySelected == 2): ?>
                                            selected="selected"
                                        <?php endif; ?> value="2">Man's Fashion</option>
                           <option <?php if($categorySelected == 3): ?>
                                            selected="selected"
                                        <?php endif; ?> value="3">Health & Beauty</option>
                           <option <?php if($categorySelected == 4): ?>
                                            selected="selected"
                                        <?php endif; ?> value="4">Home Improvement</option>
                           <option <?php if($categorySelected == 5): ?>
                                            selected="selected"
                                        <?php endif; ?> value="5">Garden Improvement</option>
                           <option <?php if($categorySelected == 6): ?>
                                            selected="selected"
                                        <?php endif; ?> value="6">Pet Accessories</option>
                           <option <?php if($categorySelected == 7): ?>
                                            selected="selected"
                                        <?php endif; ?> value="7">Electronics</option>
                           <option <?php if($categorySelected == 8): ?>
                                            selected="selected"
                                        <?php endif; ?> value="8">Computer Accessories</option>
                           <option <?php if($categorySelected == 9): ?>
                                            selected="selected"
                                        <?php endif; ?> value="9">Baby & Kids</option>
                           <option <?php if($categorySelected == 10): ?>
                                            selected="selected"
                                        <?php endif; ?> value="10">Kitchen & household</option>
                           <option <?php if($categorySelected == 11): ?>
                                            selected="selected"
                                        <?php endif; ?> value="11">Jewellery</option>
                           <option <?php if($categorySelected == 12): ?>
                                            selected="selected"
                                        <?php endif; ?> value="12">Car Accessories</option>
                           <option <?php if($categorySelected == 13): ?>
                                            selected="selected"
                                        <?php endif; ?> value="13">Bike Accessories</option>
                           <option <?php if($categorySelected == 14): ?>
                                            selected="selected"
                                        <?php endif; ?> value="14">Mobile Accessories</option>
                           <option <?php if($categorySelected == 15): ?>
                                            selected="selected"
                                        <?php endif; ?> value="15">Fitness</option>
                           <option <?php if($categorySelected == 16): ?>
                                            selected="selected"
                                        <?php endif; ?> value="16">Bag's & Shoes</option>
                           <option <?php if($categorySelected == 17): ?>
                                            selected="selected"
                                        <?php endif; ?> value="17">Outdoor</option>
                           <option <?php if($categorySelected == 18): ?>
                                            selected="selected"
                                        <?php endif; ?> value="18">Beauty Hair</option>
                        </select>
                     </div>
                     <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                        <select class="form-control select2 filter-item" name="niche">
                           <option>All Niches</option>
                           <option>Health & Beauty</option>
                           <option>Home & Garden</option>
                           <option>Pet Accessories</option>
                           <option>Electronics</option>
                           <option>Baby & Kids</option>
                           <option>Kitchen & household</option>
                           <option>Outdoor</option>
                        </select>
                     </div>
                     <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                        <select class="form-control select2-no-search filter-item" name="filter" style="width: 100%;">
                           <option>Filter Products</option>
                           <option <?php if($filterSelected == 1): ?>
                                            selected="selected"
                                        <?php endif; ?> value="1">By Price under $30</option>
                           <option <?php if($filterSelected == 2): ?>
                                            selected="selected"
                                        <?php endif; ?> value="2">By Price Over $30</option>
                           <option <?php if($filterSelected == 3): ?>
                                            selected="selected"
                                        <?php endif; ?> value="3">By Profit Over $15</option>
                           <option <?php if($filterSelected == 4): ?>
                                            selected="selected"
                                        <?php endif; ?> value="4">By Cost under $20</option>
                        </select>
                     </div>
                     <div class="col-sm-12 col-md-6 col-lg-3 my-1">
                        <select class="form-control select2-no-search filter-item" name="sort" style="width: 100%;">
                           <option>Sort Produtcs</option>
                           <option <?php if($sortSelected == 1): ?>
                                            selected="selected"
                                        <?php endif; ?> value="1">By Profit</option>
                           <option <?php if($sortSelected == 2): ?>
                                            selected="selected"
                                        <?php endif; ?> value="2">By Total Orders</option>
                           <option <?php if($sortSelected == 3): ?>
                                            selected="selected"
                                        <?php endif; ?> value="3">By Last added Date</option>
                           <option <?php if($sortSelected == 4): ?>
                                            selected="selected"
                                        <?php endif; ?> value="4">By Image</option>
                           <option <?php if($sortSelected == 5): ?>
                                            selected="selected"
                                        <?php endif; ?> value="5">By Video</option>
                        </select>
                     </div>
                  </div>
               </form>
        <!-- /.row -->

        <div class="row mx-3 mt-3">
          <div class="card-deck">
            
<?php if($trendingProducts->count() == 0): ?>
<div class="justify-content-center" >

   <p class="justify-content-center" style="text-align: center;">No products to display.</p>

</div>
<?php endif; ?>  

<?php $__currentLoopData = $trendingProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trendingProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-4 mt-4">
              <div class="card shadow">
                <?php $__currentLoopData = $trendingProduct->productImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row px-2 video-icon">
                  <img src="<?php echo e($productImage->image_link_1); ?>" class="card-img-top img-fluid" alt="...">
                  <i class="fas fa-play-circle video-play-icon"></i>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="row card-body px-2">
                  <div class="col-12 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                    <h5 class="card-title"><?php echo e($trendingProduct->product_name); ?></h5>
                  </div>
                  <div class="col-12 px-3">
                    <div class="row">
                      <div class="col-7">
                        <span>Order</span>
                      </div>
                      <div class="col-5 text-right">
                        <span><?php echo e($trendingProduct->total_order); ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Product Cost</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$<?php echo e($trendingProduct->cost); ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Selling Price</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$<?php echo e($trendingProduct->price); ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Profit Margin</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$<?php echo e($trendingProduct->profit); ?></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <span>Total Sales</span>
                      </div>
                      <div class="col-5 text-right">
                        <span>$<?php echo e($trendingProduct->total_revenue); ?></span>
                      </div>
                    </div>
                  </div>
                </div>
<?php $product_id = $trendingProduct->id ?>
                <div class="row mx-4 px-2 mb-2 justify-content-center rounded icon-btn">
                  <a href="<?php echo e(route('product-details',[$product_id])); ?>" type="button" class="btn fb-ads-card-btn">View Product Details</a>
                </div>
              </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
        <div class="card-deck" id="data-wrapper">
                
                    <!-- RESULTS -->
            
                </div>


          </div>
        </div>

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


<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
   $(document) .ready(function(){
    $('.select2').select2({
      width: '100%'
    });
    $('.select2-no-search').select2({
      minimumResultsForSearch: -1
    });
   
   });
</script>
<script>
   function videoPlay(){
     $('#video-control').trigger('play');
     $('.video-icon-play').hide();
     $('.video-icon-pause').show();
   }
   function videoPause() {
     $('#video-control').trigger('pause');
     $('.video-icon-play').show();
     $('.video-icon-pause').hide();
   }
   $('.slickslider').slick({
     slidesToShow: 1,
     slidesToScroll: 1,
     fade: true,
     asNavFor: '.slider-nav'
   });
   $('.slider-nav').slick({
     slidesToShow: 5,
     slidesToScroll: 1,
     arrows: false,
     asNavFor: '.slickslider',
     //centerMode: true,
     focusOnSelect: true
   });
   $('.slickslider').on('afterChange', function(event, slick, currentSlide, nextSlide){
     videoPause();
   });
   $('.video-icon-play').click(function(){
     videoPlay();
   });
   $('.video-icon-pause').click(function(){
     videoPause();
   });
   $('.slider2').slick({
     slidesToShow: 1,
     slidesToScroll: 1,
     arrows: false,
     fade: true,
     asNavFor: '.slider-nav2'
   });
   $('.slider-nav2').slick({
     slidesToShow: 3,
     slidesToScroll: 1,
     arrows: false,
     asNavFor: '.slider2',
     //centerMode: true,
     focusOnSelect: true
   });

    var ENDPOINT = "<?php echo e(url('/')); ?>";
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
            
        let urlWithoutQueryString = "<?php echo e(url()->current()); ?>";
        // console.log(`urlWithoutQueryString: ${urlWithoutQueryString}`);
        
        let urlWithQueryString = "<?php echo e(url()->full()); ?>";
        // console.log(`urlWithQueryString: ${urlWithQueryString}`);
        
        let actualQueryString = urlWithQueryString.replace(urlWithoutQueryString, "");
        if(actualQueryString != ""){
            actualQueryString = actualQueryString.replace(/&amp;/g, '&') + "&";
        }else{
            actualQueryString = "?";
        }
        // console.log(`actualQueryString: ${actualQueryString}`);
        
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutsUser.user3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ebutifyCpanel\resources\views/user/trending-product.blade.php ENDPATH**/ ?>