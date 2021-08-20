
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
<?php $mob = 0; ?>
<?php $__currentLoopData = $trendingProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trendingProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $mob++; ?>
<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="modal-header">
          <h5 class="modal-title pl-2" id="UntappedModalLabel"><?php echo e($trendingProduct->product_name); ?></h5>
        </div>
  <?php
  $date1 = new DateTime("now");

  $date2 = date_create($trendingProduct->created_at);

  $diff = date_diff($date1,$date2);

  $month = $diff->m;                 
  $day = $diff->d;                 
  $hour = $diff->h;
  $minute = $diff->i;

  ?>
        <div class="row uptapped-active-found">
            <p>Found <?php echo e($diff->m); ?> Month <?php echo e($diff->d); ?> Days <?php echo e($diff->h); ?> Hours <?php echo e($diff->i); ?> Minutes ago</p>
        </div>
        <div class="modal-body veiw-detail-modal pt-1">
          <div class="row pt-2">
  <?php $__currentLoopData = $trendingProduct->productImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4">
              <div class="row mx-1 mb-4">
                <div class="col-12">
                  <div class="slickslider">
                  <div>
                      <div class="product-video-container embed-responsive embed-responsive-16by9">
                          <!-- <i class="fas fa-play-circle video-icon-play" style=""></i>
                          <i class="fas fa-pause-circle video-icon-pause" style="display: none;"></i> -->
                          <video id="video-control" controls>
                            <source src="<?php echo e($productImage->video_link); ?>" type="video/mp4">
                         </video>
                      </div>
                  </div>
                  <div>
                    <img src="<?php echo e($productImage->image_link_1); ?>" class="img-fluid" style='height: 100%; width: 100%; object-fit: contain' alt="">
                  </div>
                  <div>
                    <img src="<?php echo e($productImage->image_link_2); ?>" class="img-fluid" style='height: 100%; width: 100%; object-fit: contain' alt="">
                  </div>
                  <div>
                    <img src="<?php echo e($productImage->image_link_3); ?>" class="img-fluid" style='height: 100%; width: 100%; object-fit: contain' alt="">
                  </div>
                  <div>
                    <img src="<?php echo e($productImage->image_link_4); ?>" class="img-fluid" style='height: 100%; width: 100%; object-fit: contain' alt="">
                  </div>
                  <div>
                    <img src="<?php echo e($productImage->image_link_5); ?>" class="img-fluid" style='height: 100%; width: 100%; object-fit: contain' alt="">
                  </div>
                </div>
                <div class="slider-nav mt-1">
                    <img src="<?php echo e($productImage->video_link); ?>" alt="">
                    <img src="<?php echo e($productImage->image_link_1); ?>" alt="">
                    <img src="<?php echo e($productImage->image_link_2); ?>" alt="">
                    <img src="<?php echo e($productImage->image_link_3); ?>" alt="">
                    <img src="<?php echo e($productImage->image_link_4); ?>" alt="">
                    <img src="<?php echo e($productImage->image_link_5); ?>" alt="">
                </div>
                </div>
              </div>
            </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-8">
              <div class="row mx-1">
                <div class="col-12">
                  <div class="shadow bg-white rounded">
                    <table class="table table-borderless untapped-p-table table-responsive">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Product Cost</th>
                                <th>Selling Price</th>
                                <th>Profit</th>
                                <th>Total Sales</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><?php echo e($trendingProduct->total_order); ?></th>
                                <th>$<?php echo e($trendingProduct->cost); ?></th>
                                <th>$<?php echo e($trendingProduct->price); ?></th>
                                <th>$<?php echo e($trendingProduct->profit); ?></th>
                                <th>$<?php echo e($trendingProduct->total_revenue); ?></th>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                  <div class="shadow bg-white rounded p-3">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                          <div class="row pl-2 selling-sc">
                            <?php
                            if (!empty($trendingProduct->productLink[0]->competitor_link_1)){
                                $gifs = $trendingProduct->productLink[0]->competitor_link_1;
                              }
                            if(!empty($trendingProduct->productLink[0]->competitor_link_2)){
                              if(!empty($gifs)){
                                $gifs = $gifs.",".$trendingProduct->productLink[0]->competitor_link_2;
                              }else{
                                $gifs = $trendingProduct->productLink[0]->competitor_link_2;
                              }
                            }
                            if (!empty($trendingProduct->productLink[0]->competitor_link_3)){
                              if(!empty($gifs)){
                                $gifs = $gifs.",".$trendingProduct->productLink[0]->competitor_link_3;
                              }else{
                                $gifs = $trendingProduct->productLink[0]->competitor_link_3;
                              }
                            }
                            if (!empty($trendingProduct->productLink[0]->competitor_link_4)){
                              if(!empty($gifs)){
                                $gifs = $gifs.",".$trendingProduct->productLink[0]->competitor_link_4;
                              }else{
                                $gifs = $trendingProduct->productLink[0]->competitor_link_4;
                              }
                            }
                            if (!empty($trendingProduct->productLink[0]->competitor_link_5)){
                              if(!empty($gifs)){
                                $gifs = $gifs.",".$trendingProduct->productLink[0]->competitor_link_5;
                              }else{
                                $gifs = $trendingProduct->productLink[0]->competitor_link_5;
                              }
                            }
                            $files = explode(',', $gifs);
                            ?>
                            <p>Selling on <?php echo e(count($files)); ?> Shopify store</p>
                          </div>
                        <div class="row selling-store">
                          <div class="col-12">
                            <?php if (!empty($files)) {
                              foreach ($files as $link) {
                                $address1 = $link;
                                $split1 = explode("com",$address1);
                                ?><p><img src="<?php echo e(asset('assets/img/web-icon.png')); ?>" style="width: 20px; margin-top: -6px;" alt=""> <?php echo e($split1[0]); ?>com...<a href="<?php echo e($link); ?>"><?php
                              }
                            } ?>
                          </div>
                        </div>
                        </div>

                        <div class="col-sm-6 col-md-6 selling-country pl-3" style="max-width: 500%;">
                          <div class="row pl-2 selling-sc">
                            <p>Selling Country</p>
                          </div>
                          <div class="row selling-store">
                            <div class="col-12">
                              <?php
                              $countrys = $trendingProduct->country;
                              $countrys = explode(',', $countrys);
                              ?>
  <?php $__currentLoopData = $countrys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <p><img src="<?php echo e(asset('assets/img/web-path.png')); ?>" style="width: 20px; margin-top: -6px;" alt=""> <?php echo e($country); ?></p>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-4">
              <div class="col-lg-4">
                <div class="row mx-2">
                  <div class="col-12 shadow bg-white border-rounded mb-4">
  <?php $__currentLoopData = $trendingProduct->ProductLink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <ul class="list-group list-group-flush py-3 list-unstyled prm-list">
                      <li><a class="list-group-item rounded my-1" href="<?php echo e($productLink->competitor_link_1); ?>" role="tab"><i class="fas fa-store-alt"></i> Visit Competitor Store</a></li>
                      <li><a class="list-group-item rounded my-1" href="<?php echo e($productLink->aliexpress); ?>" role="tab"><img src="<?php echo e(asset('assets/img/ali.png')); ?>" style="width: 12px; margin-bottom: 2px;" alt=""> Visit AliExpress Source</a></li>
                      <li><a class="list-group-item rounded my-1" href="<?php echo e($productLink->amazon); ?>" role="tab"><i class="fab fa-amazon"></i> View Product On Amazon</a></li>
                      <li><a class="list-group-item rounded my-1" href="<?php echo e($productLink->ebay); ?>" role="tab"><i class="fab fa-ebay"></i> View Product On eBay</a></li>
                      <li><a class="list-group-item rounded my-1" href="<?php echo e($productLink->facebook_ad); ?>" role="tab"><i class="fab fa-facebook"></i> View Facebook Ads</a></li>
                      <li><a class="list-group-item rounded my-1" href="<?php echo e($productLink->youtube); ?>" role="tab"><i class="fab fa-youtube"></i> View YouTube Review</a></li>
                    </ul>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php $__currentLoopData = $trendingProduct->productImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="slider2">
                      <div>
                        <img src="<?php echo e(asset('storage/app/public/'.$productImage->gif_1)); ?>" class="img-fluid" alt="">
                      </div>
                      <div>
                        <img src="<?php echo e(asset('storage/app/public/'.$productImage->gif_2)); ?>" class="img-fluid" alt="">
                      </div>
                      <div>
                        <img src="<?php echo e(asset('storage/app/public/'.$productImage->gif_3)); ?>" class="img-fluid" alt="">
                      </div>
                    </div>
                    <div class="slider-nav2 my-2 justify-content-between">
                        <img src="<?php echo e(asset('storage/app/public/'.$productImage->gif_1)); ?>" class="img-fluid" alt="">
                        <img src="<?php echo e(asset('storage/app/public/'.$productImage->gif_2)); ?>" class="img-fluid" alt="">
                        <img src="<?php echo e(asset('storage/app/public/'.$productImage->gif_3)); ?>" class="img-fluid" alt="">
                    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    if (!empty($productImage->gif_1)){
                        $gifs = $productImage->gif_1;
                      }
                    if(!empty($productImage->gif_2)){
                      if(!empty($gifs)){
                        $gifs = $gifs.",".$productImage->gif_2;
                      }else{
                        $gifs = $productImage->gif_2;
                      }
                    }
                    if (!empty($productImage->gif_3)){
                      if(!empty($gifs)){
                        $gifs = $gifs.",".$productImage->gif_3;
                      }else{
                        $gifs = $productImage->gif_3;
                      }
                    }
                    ?>
                    <div class="mb-2 float-right">
                        <p class="d-inline-block" style="font-size: 13px;">Download Gif Images</p>
                        <a href="<?php echo e(route('downloadGIF',[$gifs])); ?>">
                        <input type="button" id="download" class="btn-download" value="download">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 tab-content">
               <div class="row mb-2 mx-2">
                  <div class="tab-pane fade show active" role="tabpanel">
                    <ul class="nav nav-tabs modal-tab nav-justified shadow role='tablist'">
                      <li class="nav-item plan-tab" role="presentation">
                        <a class="nav-link active" data-toggle="tab" href="#pd<?php echo e($mob); ?>" style="font-size: 13px;" role="tab">Product Description</a>
                      </li>
                      <li class="nav-item plan-tab" role="presentation">
                        <a class="nav-link nav-link-show-1" data-toggle="tab" href="#far<?php echo e($mob); ?>" style="font-size: 13px;" role="tab">Facebook Audience Research</a>
                      </li>
                    </ul>
                    <div class="tab-content pr-modal-tab bg-white shadow">
                      <div class="tab-pane fade show active pb-3" id="pd<?php echo e($mob); ?>" role="tabpanel">
                        <div class="row mx-3 pt-3 plan-header">
                            <p><?php echo $trendingProduct->description; ?></p>
                        </div>
                      </div>
                      <div class="tab-pane pb-3 fade" id="far<?php echo e($mob); ?>" role="tabpanel">
                        <div class="row mx-3 pt-3 plan-header">
                          <div class="col-md-6">
                            <div class="far-video-hedear">
                              <h3>Facebook video ads</h3>
                              <button type="button" class="btn far-download-btn">Download</button>
                            </div>
                            <div class="product-video-container embed-responsive embed-responsive-16by9">
                              <i class="fas fa-play-circle video2-icon-play"></i>
                              <i class="fas fa-pause-circle video2-icon-pause" style="display: none;"></i>
                              <video id="video-control-2">
                                <source src="<?php echo e(asset('storage/app/public/'.$trendingProduct->video_name)); ?>" type="video/mp4">
                              </video>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="far-all-hedear mb-3">
                              <h3>Facebook Content</h3>
                            </div>
                            <div class="far-fb-content-text shadow-sm">
                              <p class="far-fb-text"><?php echo e($trendingProduct->content); ?></p>
                            </div>
                          </div>
                        </div>
                        <?php
                        $ages = $trendingProduct->age;
                        $ages = explode(',', $ages);
                        ?>
                        <div class="row m-2 p-2">
                          <div class="col-6 far-all-hedear">
                            <h3>Targeting Age</h3>
                            <div class="far-age-target-content shadow-sm">
                              <p>This ads on facebook & other social media targeted age range below.</p>
                              <?php $__currentLoopData = $ages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $age): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <p class="mt-2">
                                <?php echo e($age); ?>; <br>
                              </p>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                          </div>
                           <?php
                           $genders = $trendingProduct->gender;
                           $genders = explode(',', $genders);
                           ?>
                          <div class="col-6 far-all-hedear">
                            <h3>Targeting Gender</h3>
                            <div class="far-genter-content shadow-sm">
                              <p>This ads on facebook & other social media targeted gender below.</p>
                              <?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <p class="mt-2"><?php echo e($gender); ?>;<br></p>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
               </div>
            </div>
            </div>
            <div class="row">
            </div>
        </div>
      </div>
</section>
        <!-- /.row -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

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
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutsUser.user3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ebutifyCpanel\resources\views/user/product-details.blade.php ENDPATH**/ ?>