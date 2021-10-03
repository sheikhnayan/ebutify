 <div class="col-md-6">
                    <!-- PRODUCT LISTING DETAILS START -->
                   <!--  <p>Showing {{$productDetails->firstItem() }} to {{$productDetails->lastItem()}} out of {{$productDetails->total()}}</p> -->
                    <!-- PRODUCT LISTING DETAILS END -->
                </div>
                <div class="col-md-2">
                <!-- {{ $productDetails->links() }} -->
                </div>

                <?php }elseif{(!empty($trendingProduct->productLink[0]->competitor_link_1 ) && !empty($trendingProduct->productLink[0]->competitor_link_2 ) && !empty($trendingProduct->productLink[0]->competitor_link_3 )) { ?>
                            <p>Selling on 3 Shopify store</p>
                            <?php }elseif{(!empty($trendingProduct->productLink[0]->competitor_link_1 ) && !empty($trendingProduct->productLink[0]->competitor_link_2 )) { ?>
                            <p>Selling on 2 Shopify store</p>
                            <?php }elseif{(!empty($trendingProduct->productLink[0]->competitor_link_1 )) { ?>
                            <p>Selling on 1 Shopify store</p>
                            <?php } ?>



                            <?php if (!empty($trendingProduct->productLink[0]->competitor_link_1) &&
                             !empty($trendingProduct->productLink[0]->competitor_link_2) && 
                             !empty($trendingProduct->productLink[0]->competitor_link_3) && 
                             !empty($trendingProduct->productLink[0]->competitor_link_4) && 
                             !empty($trendingProduct->productLink[0]->competitor_link_5)){ ?>
                            <p>Selling on 5 Shopify store</p> <?php } elseif(!empty($trendingProduct->productLink[0]->competitor_link_1 ) && !empty($trendingProduct->productLink[0]->competitor_link_2 ) && !empty($trendingProduct->productLink[0]->competitor_link_3 ) && !empty($trendingProduct->productLink[0]->competitor_link_4 )) { ?>
                            <p>Selling on 4 Shopify store</p>
                            <?php }elseif(!empty($trendingProduct->productLink[0]->competitor_link_1 ) && !empty($trendingProduct->productLink[0]->competitor_link_2 ) && !empty($trendingProduct->productLink[0]->competitor_link_3 )) { ?>
                            <p>Selling on 3 Shopify store</p>
                            <?php }elseif(!empty($trendingProduct->productLink[0]->competitor_link_1 ) && !empty($trendingProduct->productLink[0]->competitor_link_2 )) { ?>
                            <p>Selling on 2 Shopify store</p>
                            <?php }elseif(!empty($trendingProduct->productLink[0]->competitor_link_1 )) { ?>
                            <p>Selling on 1 Shopify store</p>
                            <?php } ?>



                            <?php if(!empty($productLink->competitor_link_1)){ ?>
                              <p><img src="{{asset('assets/img/web-icon.png')}}" style="width: 20px; margin-top: -6px;" alt=""> <a href="{{$productLink->competitor_link_1}}">
                               
                               <?php $address1 = $productLink->competitor_link_1; ?>
                               <?php $split1 = explode("com",$address1); ?>
                               
                               {{$split1[0]}}com...</a>
                              </p>
                              <?php } ?>
                              <?php if(!empty($productLink->competitor_link_2)){ ?>
                              <p><img src="{{asset('assets/img/web-icon.png')}}" style="width: 20px; margin-top: -6px;" alt="">
                              
                              <?php $address2 = $productLink->competitor_link_2; ?>
                              <?php $split2 = explode("com",$address2); ?>
                               <a href="{{$productLink->competitor_link_2}}">
                               {{$split2[0]}}com...</a>
                              
                              </p>
                              <?php } ?>
                              <?php if(!empty($productLink->competitor_link_3)){ ?>
                              <p><img src="{{asset('assets/img/web-icon.png')}}" style="width: 20px; margin-top: -6px;" alt=""> <a href="{{$productLink->competitor_link_3}}">
                               
                               <?php $address3 = $productLink->competitor_link_3; ?>
                               <?php $split = explode("com",$address3); ?>
                               
                               {{$split[0]}}com...</a></p>
                              <?php } ?>
                              <?php if(!empty($productLink->competitor_link_4)){ ?>
                              <p><img src="{{asset('assets/img/web-icon.png')}}" style="width: 20px; margin-top: -6px;" alt=""> <a href="{{$productLink->competitor_link_4}}">
                               
                               <?php $address = $productLink->competitor_link_4; ?>
                               <?php $split = explode("com",$address); ?>
                               
                               {{$split[0]}}com...</a></p>
                              <?php } ?>
                              <?php if(!empty($productLink->competitor_link_5)){ ?>
                              <p><img src="{{asset('assets/img/web-icon.png')}}" style="width: 20px; margin-top: -6px;" alt=""> <a href="{{$productLink->competitor_link_5}}">
                               
                               <?php $address = $productLink->competitor_link_5; ?>
                               <?php $split = explode("com",$address); ?>
                               
                               {{$split[0]}}com...</a></p>
                              <?php } ?>











                              //-- HANDLE SORTING
      if($request->sort) {
          switch($request->sort){
              case 2:
                  $orderColumn = 'total_order';
              break;
              default:
                  $orderColumn = 'product_name';
              break;
                  
          }
      }
      
      //-- HANDLE CATEGORY
      
    $trendingProducts = ProductDetail::where('opportunity_level', 'LIKE' ,'%facebook_ads%')->orderBy($orderColumn,'ASC')->paginate(5);
    //dd($trendingProducts);

    case 1:
        $filterBy = 'price_under';
      break;
      case 2:
        $filterBy = 'total_order';
      break;
      case 3:
        $filterBy = 'created_at';
      break;
      case 4:
        $filterBy = 'total_order';
      break;
      case 5:
        $filterBy = 'total_order';
      break;
      default:
        $filterBy = 'product_name';
      break;        








      '
            <div class="card shadow">
              <img src="$trendingProduct->productImage[0]->image_link_1." class="card-img-top img-fluid" alt="...">
              <div class="row card-body px-2">
                <div class="col-12 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                  <h5 class="card-title">$trendingProduct->product_name.</h5>
                </div> 
                <div class="row mt-3">
                  <div class="col-12 text-center px-3">
                    <?php if ($trendingProduct->explore_star_rating > 1) { ?>
                      <span class="fa fa-star checked"></span>
                    <?php } else { ?>
                      <span class="fa fa-star"></span>
                    <?php } ?>
                    <?php if ($trendingProduct->explore_star_rating > 2) { ?>
                      <span class="fa fa-star checked"></span>
                    <?php } else { ?>
                      <span class="fa fa-star"></span>
                    <?php } ?>
                    <?php if ($trendingProduct->explore_star_rating > 3) { ?>
                      <span class="fa fa-star checked"></span>
                    <?php } else { ?>
                      <span class="fa fa-star"></span>
                    <?php } ?>
                    <?php if ($trendingProduct->explore_star_rating > 4) { ?>
                      <span class="fa fa-star checked"></span>
                    <?php } else { ?>
                      <span class="fa fa-star"></span>
                    <?php } ?>
                    <?php if ($trendingProduct->explore_star_rating == 5) { ?>
                      <span class="fa fa-star checked"></span>
                    <?php } else { ?>
                      <span class="fa fa-star"></span>
                    <?php } ?>
                    <span>{{$trendingProduct->explore_star_rating}}</span>
                  </div>
                  <div class="col-12 text-center px-3">
                    <span class="cae-cart-icon"><i class="fas fa-shopping-basket"></i> Total Order</span>
                    <span>{{$trendingProduct->total_order}}</span>
                  </div>
                  
                  <div class="col-12 text-center px-3">
                    <span class="cae-cart-icon"><i class="fas fa-atom"></i> Selling Price</span>
                    <span>{{$trendingProduct->price}}</span>
                  </div>
                </div>
              </div>
              @foreach ($trendingProduct->ProductLink as $productLink)
              <div class="row px-2 mb-2 rounded justify-content-center">
                <a href="{{$productLink->aliexpress}}" class="cae-view"><img src="{{asset(\'assets/img/aliExpress-logo.png\')}}" class="img-fluid" style="width: 16px; margin: 5px;" alt=""> View on a Demo</a>
              </div>
              @endforeach
            </div>'



            $ git pull origin product
From https://github.com/ICaaaArush/ebutify_freelancer
 * branch            product    -> FETCH_HEAD
Already up to date.

        $artilces = '';
        if ($request->ajax()) {
            foreach ($trendingProducts as $result) {
                $j = 1;
                $artilces.=
      '<div class="col-md-4 mt-4">
                     <div class="card shadow" style="min-width: 280px;">
                        <div class="row px-2" data-toggle="modal" data-target="#modal_demo{{$j}}">
                           <div class="col-12 p-0 video-icon">
                              <img src="'.$result->productImage[0]->image_link_1.'" class="card-img-top img-fluid" alt="..." style="max-height:300px;">
                              <i class="fas fa-play-circle video-play-icon"></i>
                           </div>
                           <div class="col-12 mt-4 pb-1 px-3" style="border-bottom: 2px solid #DCDCDC;">
                              <h5 class="card-title">'.$result->product_name.'</h5>
                           </div>
                        </div>
                        <div class="row card-body pt-0 px-2">
                           <div class="col-12 px-3">
                              <div class="row">
                                 <div class="col-7">
                                    <span>Order</span>
                                 </div>
                                 <div class="col-5 text-right">
                                    <span>'.$result->total_order.'</span>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-7">
                                    <span>Product Cost</span>
                                 </div>
                                 <div class="col-5 text-right">
                                    <span>$'.$result->cost.'</span>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-7">
                                    <span>Selling Price</span>
                                 </div>
                                 <div class="col-5 text-right">
                                    <span>$'.$result->price.'</span>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-7">
                                    <span>Profit Margin</span>
                                 </div>
                                 <div class="col-5 text-right">
                                    <span>$'.$result->profit.'</span>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-7">
                                    <span>Total Sales</span>
                                 </div>
                                 <div class="col-5 text-right">
                                    <span>$'.$result->total_revenue.'}}</span>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="row mx-4 px-2 mb-2 rounded justify-content-between icon-btn">
                           <a href="'.$result->productLink[0]->facebook_ad.'" class="fb-ads-card-footer"><img src="{{asset(\'assets/img/fb-2.png\')}}" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                           <a href="'.$result->productLink[0]->aliexpress.'}}" class="fb-ads-card-footer"><img src="{{asset(\'assets/img/ali.png\')}}" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                           <a href="'.$result->productLink[0]->amazon.'}}" class="fb-ads-card-footer"><img src="{{asset(\'assets/img/amz.png\')}}" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                           <a href="'.$result->productLink[0]->competitor_link_1.'}}" class="fb-ads-card-footer"><img src="{{asset(\'assets/img/shp.png\')}}" style="width: 20px; margin: 0 5px 2px 5px;" alt=""></a>
                           <a href="'.$result->productLink[0]->youtube.'}}" class="fb-ads-card-footer"><i class="fab fa-youtube" style="color: #FF0000; font-size: 26px;margin: 0 5px;"></i></a>
                        </div>

                        <div class="modal fade" id="modal_demo'.$j.'" tabindex="-1" role="dialog" aria-labelledby="modal_demo'.$j.'" aria-hidden="true">
                           <div class="modal-dialog" role="document" style="max-width:80%; margin: auto;">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title pl-2" id="UntappedModalLabel">'.$result->product_name.'</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 @php
                                    $date1 = new DateTime("now");

                                    $date2 = date_create($trendingProduct->created_at);

                                    $diff = date_diff($date1,$date2);

                                    $month = $diff->m;                 
                                    $day = $diff->d;                 
                                    $hour = $diff->h;
                                    $minute = $diff->i;
                                 @endphp
                                 <div class="row uptapped-active-found">
                                    <p>Found '.$diff->m.' Month '.$diff->d.' Days '.$diff->h.' Hours '.$diff->i.' Minutes ago</p>
                                 </div>
                                 <div class="modal-body untapped-p-modal pt-1">
                                    <div class="row pt-2">
                                       <div class="col-lg-4">
                                          <div class="row mx-1 mb-4">
                                             <div class="col-12">
                                                <div class="slickslider">
                                                   <div>
                                                      <div class="product-video-container embed-responsive embed-responsive-16by9">
                                                         <i class="fas fa-play-circle video-icon-play"></i>
                                                         <i class="fas fa-pause-circle video-icon-pause" style="display: none;"></i>
                                                         <video id="video-control" controls>
                                                            <source src="'.$result->productImage[0]->video_link.'" type="video/mp4">
                                                         </video>
                                                      </div>
                                                   </div>
                                                   <div>
                                                      <img src="'.$result->productImage[0]->image_link_1.'" class="img-fluid" alt="">
                                                   </div>
                                                   <div>
                                                      <img src="'.$result->productImage[0]->image_link_2.'" class="img-fluid" alt="">
                                                   </div>
                                                   <div>
                                                      <img src="'.$result->productImage[0]->image_link_3.'" class="img-fluid" alt="">
                                                   </div>
                                                   <div>
                                                      <img src="'.$result->productImage[0]->image_link_4.'" class="img-fluid" alt="">
                                                   </div>
                                                   <div>
                                                      <img src="'.$result->productImage[0]->image_link_5.'" class="img-fluid" alt="">
                                                   </div>
                                                </div>
                                                <div class="slider-nav my-3">
                                                   <img src="'.$result->productImage[0]->video_link.'" alt="">
                                                   <img src="'.$result->productImage[0]->image_link_1.'" alt="">
                                                   <img src="'.$result->productImage[0]->image_link_2.'" alt="">
                                                   <img src="'.$result->productImage[0]->image_link_3.'" alt="">
                                                   <img src="'.$result->productImage[0]->image_link_4.'" alt="">
                                                   <img src="'.$result->productImage[0]->image_link_5.'" alt="">
                                                </div>

                                             </div>

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
                                                            <th>'.$result->total_order.'</th>
                                                            <th>$'.$result->cost.'</th>
                                                            <th>$'.$result->price.'</th>
                                                            <th>$'.$result->profit.'</th>
                                                            <th>$'.$result->total_revenue.'</th>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                                <div class="shadow bg-white rounded p-3">
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                        <div class="row pl-2 selling-sc">
                                                            @php
                                                             $gifs = 0;
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
                                                             @endphp
                                                             @if($gifs == 0)
                                                               <p>Not currently selling on any Shopify store</p>
                                                             @else
                                                             <p>Selling on {{count($files)}} Shopify store</p>
                                                             @endif
                                                           </div>
                                                         <div class="row selling-store">
                                                           <div class="col-12">
                                                             <?php if (!empty($files) && $gifs != 0) {
                                                               foreach ($files as $link) {
                                                                 $address1 = $link;
                                                                 $split1 = explode("com",$address1);
                                                                 ?><p><img src="{{asset(\'assets/img/web-icon.png\')}}" style="width: 20px; margin-top: -6px;" alt="">  {{$split1[0]}}com...<a href="{{$link}}"><?php
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
                                                               @php
                                                               $countrys = '.$result->country.'
                                                               $countrys = explode(',', $countrys);
                                                               @endphp
                                                               @foreach($countrys as $country)
                                                            <p><img src="{{asset(\'assets/img/web-path.png\')}}" style="width: 20px; margin-top: -6px;" alt=""> {{$country}}</p>
                                                               @endforeach
                                                               <!-- <a href="">+5 more Country\'s</a> -->
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
                                                <ul class="list-group list-group-flush py-3 list-unstyled prm-list">
                                                   <li><a class="list-group-item rounded my-1" href="{{$productLink->competitor_link_1}}" role="tab"><i class="fas fa-store-alt"></i> Visit Competitor Store</a></li>
                                                   <li><a class="list-group-item rounded my-1" href="{{$productLink->aliexpress}}" role="tab"><img src="{{asset(\'assets/img/ali.png\')}}" style="width: 12px; margin-bottom: 2px;" alt=""> Visit AliExpress Source</a></li>
                                                   <li><a class="list-group-item rounded my-1" href="{{$productLink->amazon}}" role="tab"><i class="fab fa-amazon"></i> View Product On Amazon</a></li>
                                                   <li><a class="list-group-item rounded my-1" href="{{$productLink->ebay}}" role="tab"><i class="fab fa-ebay"></i> View Product On eBay</a></li>
                                                   <li><a class="list-group-item rounded my-1" href="{{$productLink->facebook_ad}}" role="tab"><i class="fab fa-facebook"></i> View Facebook Ads</a></li>
                                                   <li><a class="list-group-item rounded my-1" href="{{$productLink->youtube}}" role="tab"><i class="fab fa-youtube"></i> View YouTube Review</a></li>
                                                </ul>
                                                <div class="slider2">
                                                @foreach ($trendingProduct->productImage as $productImage)
                                                   <div>
                                                      <img src="{{asset(\'storage/\'.$productImage->gif_1)}}" class="img-fluid" alt="">
                                                   </div>
                                                   <div>
                                                      <img src="{{asset(\'storage/\'.$productImage->gif_2)}}" class="img-fluid" alt="">
                                                   </div>
                                                   <div>
                                                      <img src="{{asset(\'storage/\'.$productImage->gif_3)}}" class="img-fluid" alt="">
                                                   </div>
                                                
                                                </div>
                                                <div class="slider-nav2 my-2 justify-content-between">
                                                   <img src="{{asset(\'storage/\'.$productImage->gif_1)}}" class="img-fluid" alt="gif 1">
                                                   <img src="{{asset(\'storage/\'.$productImage->gif_2)}}" class="img-fluid" alt="">
                                                   <img src="{{asset(\'storage/\'.$productImage->gif_3)}}" class="img-fluid" alt="">
                                                </div>
                                                @endforeach
                                                @php
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
                                                  @endphp
                                                <div class="mb-2 float-right">
                                                   <p class="d-inline-block" style="font-size: 13px;">Download Gif Images</p>
                                                   <button class="btn-download" value="download">
                                                   <a href="{{route(\'downloadGIF\',[$gifs])}}">Download</a></button>
                                                </div>
                                             </div>
                                             @endforeach
                                          </div>
                                       </div>
                                       <div class="col-lg-8 tab-content">
                                          <div class="row mb-2 mx-2">
                                             <div class="tab-pane fade show active" role="tabpanel">
                                                <ul class="nav nav-tabs modal-tab nav-justified shadow" role="tablist">
                                                   <li class="nav-item plan-tab" role="presentation">
                                                      <a class="nav-link active" data-toggle="tab" href="#pd1" style="font-size: 13px;" role="tab">Product Description</a>
                                                   </li>
                                                   <li class="nav-item plan-tab" role="presentation">
                                                     <!--  <a class="nav-link nav-link-show-1" data-toggle="tab" href="#far1" style="font-size: 13px;" role="tab">Facebook Audience Research</a>
                                                      <a class="nav-link nav-link-show-2" data-toggle="tab" href="#far1" style="font-size: 13px;" role="tab">Fb Audience Research</a> -->
                                                   </li>
                                                </ul>
                                                <div class="tab-content pr-modal-tab bg-white shadow">
                                                   <div class="tab-pane fade show active pb-3" id="pd1" role="tabpanel">
                                                      <div class="row mx-3 pt-3 plan-header">
                                                         <p><?php echo $trendingProduct->description;?>
                                                         </p>
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
                                          <a href="{{route(\'trending-product-details\',[$product_id])}}" type="button" class="btn btn-modal-product">View Product</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
</div>
<?php $j++; ?>';
            }
            return $artilces;
        }