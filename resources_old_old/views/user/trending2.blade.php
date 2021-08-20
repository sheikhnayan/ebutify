@extends('layoutsUser.user2')
@section('content')
<!-- Content -->
<div class="content containers">
  <!-- Animated -->
  <div class="animated fadeIn">
     <!-- Widgets  -->
     <div class="top_section">
        <div class="ebutify-product-title">
           <h1>Trending Product</h1>
        </div>
        <div class="ebutify-tutorial">
           <button class="btn button1">
           <i class="fa fa-video-camera"></i> <a href="../pages/tutorial.html">TUTORIALS</a>
           </button>
        </div>
     </div>
     <!--search Box-->
     <div class="row my-3 mt-3 mx-2">
        <div class="col-lg-6 col-md-6">
           <div class="input-group mb-3">
              <input class="form-control search" type="search" placeholder="search.." />
              <div class="input-group-append">
                 <button class="btn lgreen">
                 <i class="fa fa-search"></i>
                 </button>
              </div>
           </div>
        </div>
        <br>
        <div class="row container p-3 mx-2 ">
           <div class="col-lg-3 col-md-6 mt-2">
              <div class="dropdown ">
                 <button class="btn btn-light dropdown-toggle px-5 px-2 " type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 All catagories
                 </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                    <a class="dropdown-item" href="#">Air condition</a>
                    <a class="dropdown-item" href="#">android</a>
                    <a class="dropdown-item" href="#">Baby</a>
                    <a class="dropdown-item" href="#">Backpack</a>
                    <a class="dropdown-item" href="#">Beatch</a>
                    <a class="dropdown-item" href="#">Beauty/a>
                    <a class="dropdown-item" href="#">Cars</a>
                 </div>
              </div>
           </div>
           <div class="col-lg-3 col-md-6 mt-2 mx-2">
              <div class="dropdown ">
                 <button class="btn px-5 px-2 btn-light dropdown-toggle " type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 All Niches
                 </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                    <a class="dropdown-item" href="#">Air condition</a>
                    <a class="dropdown-item" href="#">android</a>
                    <a class="dropdown-item" href="#">Baby</a>
                    <a class="dropdown-item" href="#">Backpack</a>
                    <a class="dropdown-item" href="#">Beatch</a>
                    <a class="dropdown-item" href="#">Beauty/a>
                    <a class="dropdown-item" href="#">Cars</a>
                 </div>
              </div>
           </div>
           <div class="col-lg-3 col-md-6 mt-2 mx-2">
              <select class="form-control " name="" id="">
                 <option value="">Filet Products</option>
                 <option value="">By Product Type</option>
                 <option value="">By price over</option>
                 <option value="">By Price under</option>
                 <option value="">By orders over </option>
                 <option value="">By Found Date</option>
                 <option value="">By Last added Date</option>
              </select>
           </div>
           <div class="col-lg-2 col-md-6 mt-2 ">
              <select class="form-control" name="" id="">
                 <option value="">Sort Products</option>
                 <option value="">By stores Selling</option>
                 <option value="">By Total Orders</option>
                 <option value="">By Found Date</option>
                 <option value="">By Last added Date</option>
              </select>
           </div>
        </div>
     </div>
      <?php $j = 1; ?>
      <?php $k = 1; ?>
      @for($i=0; $i<$rows; $i++)
     <div class="row">
      @foreach($trendingProducts as $trendingProduct)
        <div class="col-lg-3 col-md-6">
           <div class="card">
              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalLong{{$j}}">
                @foreach ($trendingProduct->productImage as $productImage)
                 <div>
                    <img height="200px" src="{{$productImage->image_link_1}}" class="img-fluid" alt="" srcset="" />
                 </div>
                 <div class="video3">
                    <i class="fa fa-play-circle main-ads-play"></i>
                 </div>
                @endforeach
              </button>
              <div>
              </div>
              <div class="card-header">
                 <h3 data-toggle="modal" data-target="#exampleModalLong{{$j}}" class="text-left text1">
                    {{$trendingProduct->product_name}}
                 </h3>
              </div>
              <!--demo-->
              <div class="card-body  card-t">
                 <hr width="90%" />
                 <div>
                    <span>Order</span>
                    <span class="trend">{{$trendingProduct->total_order}}</span>
                 </div>
                 <div>
                    <span>Product Cost</span>
                    <span class="trend">${{$trendingProduct->cost}}</span>
                 </div>
                 <div>
                    <span>Selling Price</span>
                    <span class="trend">${{$trendingProduct->price}}</span>
                 </div>
                 <div>
                    <span>Profit Margin</span>
                    <span class="trend">${{$trendingProduct->profit}}</span>
                 </div>
                 <div>
                    <span>Sales</span>
                    <span class="trend">${{$trendingProduct->total_revenue}}</span>
                 </div>
                 <div class="ss pl-3 mt-3">
                    <div>
                       <span class="btn btn-light"><img src="{{asset('images2/shp.png')}}" alt="" />
                       <a class="tlink" href="#"></a>
                       </span>
                    </div>
                    <div>
                       <span class="btn btn-light"><img src="{{asset('images2/ali.png')}}" alt="" />
                       <a class="tlink" href="#"></a>
                       </span>
                    </div>
                    <div>
                       <span class="btn btn-light"><img src="{{asset('images2/amz.png')}}" alt="" />
                       <a class="tlink" href="#"></a>
                       </span>
                    </div>
                    <div>
                       <span class="btn btn-light"><img src="{{asset('images2/fb-2.png')}}" alt="" />
                       <a class="tlink" href="#"></a>
                       </span>
                    </div>
                 </div>
                 <div class="text-center">
                    <!--Product modal start-->
                    <div class="modal fade container-fluid" id="exampleModalLong{{$j}}" tabindex="-1" role="dialog"
                       aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                       <div class="modal-dialog modal-lg xl" role="document">
                          <div class="modal-content ">
                             <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                <!--Product Details-->
                                <div class="product p-3 mb-2">
                                   <div class="row modal-title" id="exampleModalLongTitle ">
                                      <div class="col-lg-8 col-md-6">
                                         <h1 class="product-title p-title">
                                            {{$trendingProduct->product_name}}
                                         </h1>
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
                                      <div class="col-lg-4 col-md-6 mt-2  text-dark">
                                         <span class="p-subtitle mt-2">Found {{$diff->m}} Month {{$diff->d}} Days {{$diff->h}} Hours {{$diff->i}} Minutes ago</span>
                                      </div>
                                   </div>
                                   <hr />
                                   <div class="row">
                                      <div class="col-lg-4 col-md-6 slide">
                                         <!-- Full-width images with number text -->
                                         @foreach ($trendingProduct->productImage as $productImage)
                                         <div class="mySlides">
                                            <div class="numbertext">1 / 6</div>
                                            <img src="{{$productImage->image_link_1}}" style="width: 100%" />
                                         </div>
                                         <div class="mySlides">
                                            <div class="numbertext">2 / 6</div>
                                            <img src="{{$productImage->image_link_2}}" style="width: 100%" />
                                         </div>
                                         <div class="mySlides">
                                            <div class="numbertext">3 / 6</div>
                                            <img src="{{$productImage->image_link_3}}" style="width: 100%" />
                                         </div>
                                         <div class="mySlides">
                                            <div class="numbertext">4 / 6</div>
                                            <img src="{{$productImage->image_link_4}}" style="width: 100%" />
                                         </div>
                                         <div class="mySlides">
                                            <div class="numbertext">5 / 6</div>
                                            <img src="{{$productImage->image_link_5}}" style="width: 100%" />
                                         </div>
                                         <div class="video2">
                                            <a href="{{$productImage->video_link}}"> <i class="fa fa-play-circle"></i></a>
                                         </div>
                                         <!-- Next and previous buttons -->
                                         <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                         <a class="next" onclick="plusSlides(1)">&#10095;</a>
                                         <!-- Image text -->
                                         <!-- Thumbnail images -->
                                         <div class="row m-3">
                                            <div class="column">
                                               <img class="demo cursor card" src="{{$productImage->image_link_1}}" style="width: 100%"
                                                  onclick="currentSlide({{$k}})" alt="The Woods" />
                                                  <?php $k++ ?>
                                            </div>
                                            <div class="column">
                                               <img class="demo cursor card" src="{{$productImage->image_link_2}}" style="width: 100%"
                                                  onclick="currentSlide({{$k}})" alt="Cinque Terre" />
                                                  <?php $k++ ?>
                                            </div>
                                            <div class="column">
                                               <img class="demo cursor card" src="{{$productImage->image_link_3}}" style="width: 100%"
                                                  onclick="currentSlide({{$k}})" alt="Mountains and fjords" />
                                                  <?php $k++ ?>
                                            </div>
                                            <div class="column">
                                               <img class="demo cursor card" src="{{$productImage->image_link_4}}" style="width: 100%"
                                                  onclick="currentSlide({{$k}})" alt="Northern Lights" />
                                                  <?php $k++ ?>
                                            </div>
                                            <div class="column">
                                               <img class="demo cursor card" src="{{$productImage->image_link_5}}" style="width: 100%"
                                                  onclick="currentSlide({{$k}})" alt="Nature and sunrise" />
                                                  <?php $k++ ?>
                                            </div>
                                         </div>
                                         @endforeach
                                         @foreach ($trendingProduct->ProductLink as $productLink)
                                         <div class="socialbar text-left shadow-sm">
                                            <span class="Social-icon"> <img src="{{asset('images2/shp.png')}}" class="simage" alt=""><a
                                               href="{{$productLink->competitor_link_1}}"> Visit competitor Store</a></span>
                                         </div>
                                         <div class="socialbar text-left shadow-sm">
                                            <span class="Social-icon"> <img src="{{asset('images2/ali.png')}}" class="simage" alt=""><a
                                               href="{{$productLink->aliexpress}}">Visit Aliexpress source</a></span>
                                         </div>
                                         <div class="socialbar text-left shadow-sm">
                                            <span class="Social-icon"> <img src="{{asset('images2/amz.png')}}" class="simage" alt=""><a
                                               href="{{$productLink->amazon}}">View product on Amazon</a></span>
                                         </div>
                                         <div class="socialbar text-left shadow-sm">
                                            <span class="Social-icon"> <img src="{{asset('images2/ebay (1).png')}}" class="simage" alt=""><a
                                               href="{{$productLink->ebay}}">View product on eBay</a></span>
                                         </div>
                                         <div class="socialbar text-left shadow-sm">
                                            <span class="Social-icon"> <img src="{{asset('images2/fb.png')}}" class="simage" alt=""><a
                                               href="{{$productLink->facebook_ad}}">view Facebook Ads</a></span>
                                         </div>
                                         <div class="socialbar text-left shadow-sm">
                                            <span class="Social-icon"> <img src="{{asset('images2/youtube (1).png')}}" class="simage"
                                               alt=""><a href="{{$productLink->youtube}}">View Youtube review</a></span>
                                         </div>
                                         <div class="card">
                                            <div class="mt-3">
                                               <div class="galary ">
                                                  <img src="{{asset('storage/'.$productImage->gif_1)}}" id="myImg" alt="" class="px-2 py-2">
                                                  <table class="px-3">
                                                     <tr>
                                                        <td> <img src="{{asset('storage/'.$productImage->gif_1)}}" id="im1" alt="" onclick="myFunction()"
                                                           class="image1 img-fluid"></td>
                                                        <td> <img src="{{asset('storage/'.$productImage->gif_2)}}" id="im2" alt="" onclick="myFunction1()"
                                                           class="image1 img-fluid"></td>
                                                        <td><img src="{{asset('storage/'.$productImage->gif_3)}}" id="im3" alt="" onclick="myFunction2()"
                                                           class="image1 img-fluid"></td>
                                                     </tr>
                                                  </table>
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
                                                  <div class="prbutton mt-2 p-2">
                                                     <span class="prspan">Download gif image <button class="btn ml-2  lgreen"><a
                                                        href="{{route('downloadGIF',[$gifs])}}">Download</a></button> </span>
                                                  </div>
                                               </div>
                                               <br>
                                               <div class="video1">
                                                  <a href="#"> <i class="fa fa-play-circle"></i></a>
                                               </div>
                                            </div>
                                         </div>
                                         @endforeach
                                      </div>

                                      <div class="col-lg-8 col-md-6">
                                         <div class="card">
                                            <div class="price">
                                               <div class="p-3 text-center">
                                                  <h3>order</h3>
                                                  <span class="text-center">{{$trendingProduct->total_order}}</span>
                                               </div>
                                               <div class="p-3 text-center">
                                                  <h3>Product Cost</h3>
                                                  <span">${{$trendingProduct->cost}}</span>
                                               </div>
                                               <div class="p-3 text-center">
                                                  <h3> Selling Price</h3>
                                                  <span class="text-center">${{$trendingProduct->price}}</span>
                                               </div>
                                               <div class="p-3 text-center">
                                                  <h3>Profit</h3>
                                                  <span class="text-center">${{$trendingProduct->profit}}</span>
                                               </div>
                                               <div class="p-3 text-center">
                                                  <h3>Total sales</h3>
                                                  <span class="text-center">${{$trendingProduct->total_revenue}}</span>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="card p-3">
                                            <div class="product">
                                               <table class="table table-borderless ">
                                                  <tr>
                                                     <td>
                                                        <h2 class="text3">Selling on 12 shopify store</h2>
                                                     </td>
                                                     <td>
                                                        <h2 class="text3">selling country</h2>
                                                     </td>
                                                  </tr>
                                                  <tr>
                                                    @foreach ($trendingProduct->ProductLink as $productLink)
                                                     <td>
                                                       <i class="fa fa-globe"></i> <a href="{{$productLink->competitor_link_1}}">
                                                         @php
                                                         $address = $productLink->competitor_link_1;
                                                         $split = explode("com",$address);
                                                         @endphp
                                                         {{$split[0]}}com...</a><br>
                                                       <i class="fa fa-globe"></i> <a href="{{$productLink->competitor_link_2}}">
                                                         @php
                                                         $address = $productLink->competitor_link_2;
                                                         $split = explode("com",$address);
                                                         @endphp
                                                         {{$split[0]}}com...</a> <br>
                                                       <i class="fa fa-globe"></i> <a href="{{$productLink->competitor_link_3}}">
                                                         @php
                                                         $address = $productLink->competitor_link_3;
                                                         $split = explode("com",$address);
                                                         @endphp
                                                         {{$split[0]}}com...</a> <br>
                                                       <i class="fa fa-globe"></i> <a href="{{$productLink->competitor_link_4}}">
                                                         @php
                                                         $address = $productLink->competitor_link_4;
                                                         $split = explode("com",$address);
                                                         @endphp
                                                         {{$split[0]}}com...</a> <br>
                                                       <i class="fa fa-globe"></i> <a href="{{$productLink->competitor_link_5}}">
                                                         @php
                                                         $address = $productLink->competitor_link_5;
                                                         $split = explode("com",$address);
                                                         @endphp
                                                         {{$split[0]}}com...</a>
                                                     </td>
                                                      @endforeach
                                                      @php
                                                      $countrys = $trendingProduct->country;
                                                      $countrys = explode(',', $countrys);
                                                      @endphp
                                                      <td align="text-left">@foreach($countrys as $country)
                                                      <i id="lock-icon" class="fa fa-globe"></i> <a href="#">{{$country}}</a><br>
                                                      @endforeach</td>
                                                      
                                                  </tr>
                                               </table>

                                            </div>
                                         </div>
                                         <!--card-->
                                         <div class="card p-3">
                                            <div class="event_list">
                                               <div class="event1">
                                                  <!-- Nav pills -->
                                                  <ul class="nav nav-tabs nav-active">
                                                     <li class="nav-item t1">
                                                        <a class="nav-link active" data-toggle="pill" href="#product">Product
                                                        Description</a>
                                                     </li>
                                                     <li class="nav-item t1">
                                                        <a class="nav-link" data-toggle="pill" href="#Parties">Facebook Audience
                                                        Research</a>
                                                     </li>
                                                  </ul>
                                                  <!-- Tab panes -->
                                                  <div class="tab-content">
                                                     <div class="tab-pane container active" id="product">
                                                      <p class="p-3">
                                                        <?php echo $trendingProduct->description;?>
                                                        </p>
                                                     </div>
                                                     <div class="tab-pane container fade" id="Parties">
                                                        <p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                           Fugiat, explicabo exercitationem dolorem non impedit illum porro, sapiente
                                                           in expedita ipsum quia fuga quos. Ex sequi, rem illo harum quibusdam
                                                           deleniti.
                                                           Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas a ipsam non
                                                           maiores excepturi, nobis repellat ducimus dolores quos voluptas temporibus
                                                           ad nisi aspernatur expedita illum. Soluta quae doloribus impedit!
                                                        </p>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="button py-3">
                                            <button data-dismiss="modal" class="btn lgreen "> cancel</button>
                                            <button class="btn lgreen"><a class="text-light" href="../pages/viewproduct.html">View
                                            product</a> </button>
                                         </div>
                                      </div>
                                      <!-- Animated -->
                                      <div class="animated fadeIn">
                                         <!-- Widgets  -->
                                         <div class="clearfix"></div>
                                         <!-- /#add-category -->
                                      </div>
                                      <!-- .animated -->
                                   </div>
                                   <!-- /.content -->
                                   <div class="clearfix"></div>
                                   <!-- Footer -->
                                   <!-- /.site-footer -->
                                </div>
                                <!--Product Details end-->
                             </div>
                          </div>
                       </div>
                    </div>
                    <!--Product modal End-->
                 </div>
              </div>
           </div>
        </div>
        <?php $j++; ?>
      @endforeach
     </div>
     @endfor
     <div class="clearfix"></div>
     <!-- /#add-category -->
  </div>
  <!-- .animated -->
</div>
<!-- /.content -->
<div class="condtainer">
  <p class="text-center">© 2020 - 2021 eButify Inc. All rights reserved</p>
</div>
<div class="clearfix"></div>
@endsection