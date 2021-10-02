@extends('layoutsUser.user3')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <nav>
      <div class="nav nav-tabs nav-justified cpr-dashboard" id="nav-tab" role="tablist">
        <a class="@if(Route::currentRouteName() == 'freelancer-dashboard') nav-link active @endif nav-link" href="/dashboard">Product Research Tool</a>
        <a class="@if(Route::currentRouteName() == 'service-dashboard') nav-link active  @endif nav-link" href="/service-dashboard">eButify Services</a>
      </div>
    </nav>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row mx-2">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box shadow mt-3">
              <span class="info-box-icon text-secondary"><i class="fas fa-cannabis"></i></span>

              <div class="info-box-content">
                <span class="info-box-text cpr-1">Available Products</span>
                <span class="info-box-number  cpr-2">
                  @php
                    $prods = DB::table('product_details')->get();
                    $prod_count = $prods->count();
                  @endphp
                  {{ $prod_count + 10000 }}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box shadow mt-3 mb-3">
              <span class="info-box-icon text-secondary"><i class="fas fa-eye"></i></span>

              <div class="info-box-content">
                <span class="info-box-text  cpr-1">Total View Product</span>
                <span class="info-box-number  cpr-2">
                  {{ Auth::user()->prod_count }}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box shadow mt-3 mb-3">
              <span class="info-box-icon text-secondary"><i class="fas fa-sync-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text cpr-1">Renew Remining</span>
                <span class="info-box-number cpr-2">
                  @php
                      $create = DB::table('subscriptions')->where('user_id', Auth::user()->id)->latest()->first();
                      $date = $create->created_at;
                      if($create->stripe_plan == 'price_1JPqopCzBVgP4kKNdvtju0GZ')
                      {
                        $type = 'yearly';
                        $remaining = Carbon\Carbon::parse($create->created_at)->addYear();
                      }elseif($create->stripe_plan == 'price_1JPqeZCzBVgP4kKNPA6XL5mX')
                      {
                        $type = 'monthly';
                        $remaining = Carbon\Carbon::parse($create->created_at)->addMonth();
                      }else
                      {
                        $type = 'trial';
                        $remaining = Carbon\Carbon::parse($create->created_at)->addMonth();
                      }
                      $now = \Carbon\Carbon::now();
                  @endphp
                  {{  $now->diffInDays($remaining)}} Days
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


        <!-- start-main-content -->
        <div class="row main-content">
          <div class="col-12 pl-4">
            <h3 class="cpr-header">Quick Start Checklist</h3>
          </div>
          <div class="col-12">
            <div class="row quick_start-box mx-3 py-3">
              <div class="col-sm-12 col-md-4">
                <ul class="list-group list-group-flush py-3 list-unstyled" role="tablist">
                  @foreach ($data as $item)
                    <li><a class="list-group-item 
                      @if($loop->index == 0)
                        active rounded
                      @endif
                      " data-toggle="tab" href="#item{{ $loop->index + 1}}" role="tab">{{ $loop->index + 1}}. {{ $item->title }}</a></li>
                  @endforeach
                  {{-- <li><a class="list-group-item rounded" data-toggle="tab" href="#item2" role="tab">2. How to find Trending Products</a></li>
                  <li><a class="list-group-item rounded" data-toggle="tab" href="#item3" role="tab">3. How to find Untapped Products</a></li>
                  <li><a class="list-group-item rounded" data-toggle="tab" href="#item4" role="tab">4. How to explore Amazon Products</a></li>
                  <li><a class="list-group-item rounded" data-toggle="tab" href="#item5" role="tab">5. How to explore Aliexpress Products</a></li>
                  <li><a class="list-group-item rounded" data-toggle="tab" href="#item6" role="tab">6. How to explore Shopify Store</a></li> --}}
                </ul>
              </div>
              <div class="col-md-8 tab-content">
                @foreach ($data as $item)
                <div class="tab-pane fade 
                @if ($loop->index == 0)
                  show active
                @endif
                " id="item{{ $loop->index + 1 }}" role="tabpanel">
                  <div class="row">
                    <div class="col-sm-12 col-md-6 p-3 qs-box">
                      <p class="qs-box-p">{{ $item->des }}</p>
                    </div>
                    <div class="col-sm-12 col-md-6 p-3">
                      <div class="embed-responsive embed-responsive-16by9">
                        <!-- <iframe class="embed-responsive-item" src="assets/videos/TAKI TAKI  DJ.mp4" allowfullscreen></iframe> -->
                        <video controls>
                          <source src="{{ asset('storage/'.$item->url) }}" type="video/mp4">
                        </video>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 px-3">
                      <a href="{{ $item->link }}" class="btn qs-box-btn">{{ $item->link_title }}</a>
                    </div>
                  </div>
                </div>
                @endforeach

                {{-- <div class="tab-pane fade" id="item2" role="tabpanel">
                  <div class="row">
                    <div class="col-sm-12 col-md-6 p-3 qs-box">
                      <p class="qs-box-p">tab 2 content here:</p>
                      <p class="qs-box-p">Check out this video on how to spy your first winning products from eButify.</p>
                      <p class="qs-box-p">Then you'll be ready to find your own winning product by heading over to our Product Research 
                        and get is yours. Alsocan hit the button below to go our premium Facebook ads tool.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 p-3">
                      <div class="embed-responsive embed-responsive-16by9">
                        <!-- <iframe class="embed-responsive-item" src="assets/videos/TAKI TAKI  DJ.mp4" allowfullscreen></iframe> -->
                        <video controls>
                          <source src="assets/videos/TAKI TAKI  DJ.mp4" type="video/mp4">
                        </video>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 px-3">
                      <button type="button" class="btn qs-box-btn">Go Our Facebook Ads Tool</button>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade" id="item3" role="tabpanel">
                  <div class="row">
                    <div class="col-sm-12 col-md-6 p-3 qs-box">
                      <p class="qs-box-p">tab 3 content here:</p>
                      <p class="qs-box-p">Check out this video on how to spy your first winning products from eButify.</p>
                      <p class="qs-box-p">Then you'll be ready to find your own winning product by heading over to our Product Research 
                        and get is yours. Alsocan hit the button below to go our premium Facebook ads tool.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 p-3">
                      <div class="embed-responsive embed-responsive-16by9">
                        <!-- <iframe class="embed-responsive-item" src="assets/videos/TAKI TAKI  DJ.mp4" allowfullscreen></iframe> -->
                        <video controls>
                          <source src="assets/videos/TAKI TAKI  DJ.mp4" type="video/mp4">
                        </video>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 px-3">
                      <button type="button" class="btn qs-box-btn">Go Our Facebook Ads Tool</button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="item4" role="tabpanel">
                  <div class="row">
                    <div class="col-sm-12 col-md-6 p-3 qs-box">
                      <p class="qs-box-p">tab 4 content here:</p>
                      <p class="qs-box-p">Check out this video on how to spy your first winning products from eButify.</p>
                      <p class="qs-box-p">Then you'll be ready to find your own winning product by heading over to our Product Research 
                        and get is yours. Alsocan hit the button below to go our premium Facebook ads tool.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 p-3">
                      <div class="embed-responsive embed-responsive-16by9">
                        <!-- <iframe class="embed-responsive-item" src="assets/videos/TAKI TAKI  DJ.mp4" allowfullscreen></iframe> -->
                        <video controls>
                          <source src="assets/videos/TAKI TAKI  DJ.mp4" type="video/mp4">
                        </video>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 px-3">
                      <button type="button" class="btn qs-box-btn">Go Our Facebook Ads Tool</button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="item5" role="tabpanel">
                  <div class="row">
                    <div class="col-sm-12 col-md-6 p-3 qs-box">
                      <p class="qs-box-p">tab 5 content here:</p>
                      <p class="qs-box-p">Check out this video on how to spy your first winning products from eButify.</p>
                      <p class="qs-box-p">Then you'll be ready to find your own winning product by heading over to our Product Research 
                        and get is yours. Alsocan hit the button below to go our premium Facebook ads tool.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 p-3">
                      <div class="embed-responsive embed-responsive-16by9">
                        <!-- <iframe class="embed-responsive-item" src="assets/videos/TAKI TAKI  DJ.mp4" allowfullscreen></iframe> -->
                        <video controls>
                          <source src="assets/videos/TAKI TAKI  DJ.mp4" type="video/mp4">
                        </video>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 px-3">
                      <button type="button" class="btn qs-box-btn">Go Our Facebook Ads Tool</button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="item6" role="tabpanel">
                  <div class="row">
                    <div class="col-sm-12 col-md-6 p-3 qs-box">
                      <p class="qs-box-p">tab 6 content here:</p>
                      <p class="qs-box-p">Check out this video on how to spy your first winning products from eButify.</p>
                      <p class="qs-box-p">Then you'll be ready to find your own winning product by heading over to our Product Research 
                        and get is yours. Alsocan hit the button below to go our premium Facebook ads tool.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 p-3">
                      <div class="embed-responsive embed-responsive-16by9">
                        <!-- <iframe class="embed-responsive-item" src="assets/videos/TAKI TAKI  DJ.mp4" allowfullscreen></iframe> -->
                        <video controls>
                          <source src="assets/videos/TAKI TAKI  DJ.mp4" type="video/mp4">
                        </video>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 px-3">
                      <button type="button" class="btn qs-box-btn">Go Our Facebook Ads Tool</button>
                    </div>
                  </div>
                </div> --}}

              </div>
  
            </div>
          </div>
        </div>
        <!-- /end-main-content -->
        
@endsection