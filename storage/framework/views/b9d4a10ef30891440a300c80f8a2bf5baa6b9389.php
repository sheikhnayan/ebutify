
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
                     <h3>Facebook Ad Products</h3>
                     <a type="button" class="btn btn-facebook-ads" href="<?php echo e(url('tutorial')); ?>"><i class="fas fa-video"></i> Tutorials</a>
                  </div>
                  <form class="col-12" method="get" action="<?php echo e(route('fb-ad-products')); ?>">
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
               <form id="filterForm" method="get" action="<?php echo e(route('fb-ad-products')); ?>">
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
                     
   <?php $j = 1; ?>
   <?php if($trendingProducts->count() == 0): ?>
   <div class="justify-content-center" >

      <p class="justify-content-center" style="text-align: center;">No products to display.</p>

   </div>
   <?php endif; ?>

   <?php $__currentLoopData = $trendingProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trendingProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <div class="col-md-4 mt-4">
                        <div class="card shadow" style="min-width: 280px;">
                           <div class="row px-2" data-toggle="modal" data-target="#modal_demo<?php echo e($trendingProduct->id); ?>">
                              <?php $__currentLoopData = $trendingProduct->productImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="col-12 p-0 video-icon">
                                 <img src="<?php echo e($productImage->image_link_1); ?>" class="card-img-top img-fluid" alt="..." style="max-height:300px;">
                                 <i class="fas fa-play-circle video-play-icon"></i>
                              </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <div class="col-12 mt-4 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                                 <h5 class="card-title"><?php echo e($trendingProduct->product_name); ?></h5>
                              </div>
                           </div>
                           <div class="row card-body pt-0 px-2">
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
                           <?php $__currentLoopData = $trendingProduct->ProductLink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <div class="row mx-4 px-2 mb-2 rounded justify-content-between icon-btn">
                              <a href="<?php echo e($productLink->facebook_ad); ?>" class="fb-ads-card-footer"><img src="<?php echo e(asset('assets/img/fb-2.png')); ?>" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                              <a href="<?php echo e($productLink->aliexpress); ?>" class="fb-ads-card-footer"><img src="<?php echo e(asset('assets/img/ali.png')); ?>" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                              <a href="<?php echo e($productLink->amazon); ?>" class="fb-ads-card-footer"><img src="<?php echo e(asset('assets/img/amz.png')); ?>" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                              <a href="<?php echo e($productLink->competitor_link_1); ?>" class="fb-ads-card-footer"><img src="<?php echo e(asset('assets/img/shp.png')); ?>" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                              <a href="<?php echo e($productLink->youtube); ?>" class="fb-ads-card-footer"><i class="fab fa-youtube" style="color: #FF0000; font-size: 26px;margin: 0 5px;"></i></a>
                           </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <div class="modal fade" id="modal_demo<?php echo e($trendingProduct->id); ?>" tabindex="-1" role="dialog" aria-labelledby="modal_demo<?php echo e($trendingProduct->id); ?>" aria-hidden="true">
                              <div class="modal-dialog" role="document" style="max-width:80%; margin: auto;">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title pl-2" id="UntappedModalLabel"><?php echo e($trendingProduct->product_name); ?></h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
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
                                    <div class="modal-body untapped-p-modal pt-1">
                                       <div class="row pt-2">
                                          <div class="col-lg-4">
                                             <div class="row mx-1 mb-4">
                                                <?php $__currentLoopData = $trendingProduct->productImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-12">
                                                   <div class="slickslider">
                                                      <div>
                                                         <div class="product-video-container embed-responsive embed-responsive-16by9">
                                                            <i class="fas fa-play-circle video-icon-play"></i>
                                                            <i class="fas fa-pause-circle video-icon-pause" style="display: none;"></i>
                                                            <video id="video-control" controls>
                                                               <source src="<?php echo e($productImage->video_link); ?>" type="video/mp4">
                                                            </video>
                                                         </div>
                                                      </div>
                                                      <div>
                                                         <img src="<?php echo e($productImage->image_link_1); ?>" class="img-fluid" alt="">
                                                      </div>
                                                      <div>
                                                         <img src="<?php echo e($productImage->image_link_2); ?>" class="img-fluid" alt="">
                                                      </div>
                                                      <div>
                                                         <img src="<?php echo e($productImage->image_link_3); ?>" class="img-fluid" alt="">
                                                      </div>
                                                      <div>
                                                         <img src="<?php echo e($productImage->image_link_4); ?>" class="img-fluid" alt="">
                                                      </div>
                                                      <div>
                                                         <img src="<?php echo e($productImage->image_link_5); ?>" class="img-fluid" alt="">
                                                      </div>
                                                   </div>
                                                   <div class="slider-nav my-3">
                                                      <img src="<?php echo e($productImage->video_link); ?>" alt="">
                                                      <img src="<?php echo e($productImage->image_link_1); ?>" alt="">
                                                      <img src="<?php echo e($productImage->image_link_2); ?>" alt="">
                                                      <img src="<?php echo e($productImage->image_link_3); ?>" alt="">
                                                      <img src="<?php echo e($productImage->image_link_4); ?>" alt="">
                                                      <img src="<?php echo e($productImage->image_link_5); ?>" alt="">
                                                   </div>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             </div>
                                          </div>
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
                                                            <div class="col-md-6">
                                                               <div class="row pl-2 selling-sc">
                                                                  <?php
                                                                   $comLink = '';
                                                                   if (!empty($trendingProduct->productLink[0]->competitor_link_1)){
                                                                       $comLink = $trendingProduct->productLink[0]->competitor_link_1;
                                                                     }
                                                                   if(!empty($trendingProduct->productLink[0]->competitor_link_2)){
                                                                     if(!empty($comLink)){
                                                                       $comLink = $comLink.",".$trendingProduct->productLink[0]->competitor_link_2;
                                                                     }else{
                                                                       $comLink = $trendingProduct->productLink[0]->competitor_link_2;
                                                                     }
                                                                   }
                                                                   if (!empty($trendingProduct->productLink[0]->competitor_link_3)){
                                                                     if(!empty($comLink)){
                                                                       $comLink = $comLink.",".$trendingProduct->productLink[0]->competitor_link_3;
                                                                     }else{
                                                                       $comLink = $trendingProduct->productLink[0]->competitor_link_3;
                                                                     }
                                                                   }
                                                                   if (!empty($trendingProduct->productLink[0]->competitor_link_4)){
                                                                     if(!empty($comLink)){
                                                                       $comLink = $comLink.",".$trendingProduct->productLink[0]->competitor_link_4;
                                                                     }else{
                                                                       $comLink = $trendingProduct->productLink[0]->competitor_link_4;
                                                                     }
                                                                   }
                                                                   if (!empty($trendingProduct->productLink[0]->competitor_link_5)){
                                                                     if(!empty($comLink)){
                                                                       $comLink = $comLink.",".$trendingProduct->productLink[0]->competitor_link_5;
                                                                     }else{
                                                                       $comLink = $trendingProduct->productLink[0]->competitor_link_5;
                                                                     }
                                                                   }
                                                                   $links = explode(',', $comLink);
                                                                   ?>
                                                                   <?php if(empty($links)): ?>
                                                                     <p>Not currently selling on any Shopify store</p>
                                                                   <?php else: ?>
                                                                   <p>Selling on <?php echo e(count($links)); ?> Shopify store</p>
                                                                   <?php endif; ?>
                                                               </div>
                                                               <div class="row selling-store">
                                                                  <div class="col-12">
                                                                      <?php if (!empty($links)) {
                                                                        foreach ($links as $link) {
                                                                          $split1 = explode("com",$link);
                                                                          ?><a href="<?php echo e($link); ?>" target="_blank"><p><img src="<?php echo e(asset('assets/img/web-icon.png')); ?>" style="width: 20px; margin-top: -6px;" alt="">  <?php echo e($split1[0]); ?>com...</p></a><?php
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
                                                                  <!-- <a href="">+5 more Country's</a> -->
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
                                                <?php $__currentLoopData = $trendingProduct->ProductLink; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productLink): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-12 shadow bg-white border-rounded mb-4">
                                                   <ul class="list-group list-group-flush py-3 list-unstyled prm-list">
                                                      <li><a class="list-group-item rounded my-1" href="<?php echo e($productLink->competitor_link_1); ?>" role="tab"><i class="fas fa-store-alt"></i> Visit Competitor Store</a></li>
                                                      <li><a class="list-group-item rounded my-1" href="<?php echo e($productLink->aliexpress); ?>" role="tab"><img src="<?php echo e(asset('assets/img/ali.png')); ?>" style="width: 12px; margin-bottom: 2px;" alt=""> Visit AliExpress Source</a></li>
                                                      <li><a class="list-group-item rounded my-1" href="<?php echo e($productLink->amazon); ?>" role="tab"><i class="fab fa-amazon"></i> View Product On Amazon</a></li>
                                                      <li><a class="list-group-item rounded my-1" href="<?php echo e($productLink->ebay); ?>" role="tab"><i class="fab fa-ebay"></i> View Product On eBay</a></li>
                                                      <li><a class="list-group-item rounded my-1" href="<?php echo e($productLink->facebook_ad); ?>" role="tab"><i class="fab fa-facebook"></i> View Facebook Ads</a></li>
                                                      <li><a class="list-group-item rounded my-1" href="<?php echo e($productLink->youtube); ?>" role="tab"><i class="fab fa-youtube"></i> View YouTube Review</a></li>
                                                   </ul>
                                                   <div class="slider2">
                                                      <?php $__currentLoopData = $trendingProduct->productImage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                      <img src="<?php echo e(asset('storage/app/public/'.$productImage->gif_1)); ?>" class="img-fluid" alt="arush">
                                                      <img src="<?php echo e(asset('storage/app/public/'.$productImage->gif_2)); ?>" class="img-fluid" alt="">
                                                      <img src="<?php echo e(asset('storage/app/public/'.$productImage->gif_3)); ?>" class="img-fluid" alt="">
                                                   </div>
                                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                   <?php
                                                   $gifs = '';
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
                                                   <?php if(!empty($gifs)): ?>
                                                   <div class="mb-2 float-right">
                                                      <p class="d-inline-block" style="font-size: 13px;">Download Gif Images</p>
                                                      <button class="btn-download" value="download">
                                                      <a href="<?php echo e(route('downloadGIF',[$gifs])); ?>">Download</a></button>
                                                   </div>
                                                   <?php endif; ?>
                                                </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             </div>
                                          </div>
            <div class="col-lg-8 tab-content">
               <div class="row mb-2 mx-2">
                  <div class="tab-pane fade show active" role="tabpanel">
                    <ul class="nav nav-tabs modal-tab nav-justified shadow role='tablist'">
                      <li class="nav-item plan-tab" role="presentation">
                        <a class="nav-link active" data-toggle="tab" href="#pd<?php echo e($j); ?>" style="font-size: 13px;" role="tab">Product Description</a>
                      </li>
                      <li class="nav-item plan-tab" role="presentation">
                        <a class="nav-link nav-link-show-1" data-toggle="tab" href="#far<?php echo e($j); ?>" style="font-size: 13px;" role="tab">Facebook Audience Research</a>
                      </li>
                    </ul>
                    <div class="tab-content pr-modal-tab bg-white shadow">
                      <div class="tab-pane fade show active pb-3" id="pd<?php echo e($j); ?>" role="tabpanel">
                        <div class="row mx-3 pt-3 plan-header">
                            <p><?php echo $trendingProduct->description; ?></p>
                        </div>
                      </div>
                      <div class="tab-pane pb-3 fade" id="far<?php echo e($j); ?>" role="tabpanel">
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
                                          <?php $product_id = $trendingProduct->id ?>
                                          <div class="col-12 modal-footer px-0 mt-2">
                                             <button type="button" class="btn btn-modal-cancel" data-dismiss="modal">Cancel</button>
                                             <a href="<?php echo e(route('product-details',[$product_id])); ?>" target="_blank" type="button" class="btn btn-modal-product">View Product</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
   </div>
   <?php $j++; ?>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- LOAD MORE DATA SHOW -->
 

                <div class="card-deck" id="data-wrapper">
                
                    <!-- RESULTS -->
            
                </div>

            <!-- LOAD MORE DATA END -->


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
initiateSlick('yes');
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
        console.log(`urlWithoutQueryString: ${urlWithoutQueryString}`);
        
        let urlWithQueryString = "<?php echo e(url()->full()); ?>";
        console.log(`urlWithQueryString: ${urlWithQueryString}`);
        
        let actualQueryString = urlWithQueryString.replace(urlWithoutQueryString, "");
        if(actualQueryString != ""){
            actualQueryString = actualQueryString.replace(/&amp;/g, '&') + "&";
        }else{
            actualQueryString = "?";
        }
        console.log(`actualQueryString: ${actualQueryString}`);
        
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
<?php echo $__env->make('layoutsUser.user4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ebutifyCpanel\resources\views/user/practice-fb-ads-product.blade.php ENDPATH**/ ?>