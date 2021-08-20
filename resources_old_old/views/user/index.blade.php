@extends('layoutsUser.user')
@section('content')

      <!-- Content -->
      <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
          <!-- Widgets  -->
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-1">
                      <i class="pe-7s-cash"></i>
                    </div>
                    <div class="stat-content">
                      <div class="text-left dib">
                        <div class="stat-text">Available Products</div>
                        <div class="stat-heading">
                          <span class="count">{{count($products)}}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-2">
                      <i class="pe-7s-cart"></i>
                    </div>
                    <div class="stat-content">
                      <div class="text-left dib">
                        <div class="stat-text">Your Products</div>
                        <div class="stat-heading">
                          <span class="count">3435</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-3">
                      <i class="pe-7s-browser"></i>
                    </div>
                    <div class="stat-content">
                      <div class="text-left dib">
                        <div class="stat-text">Unfulfilled Orders</div>
                        <div class="stat-heading">
                          <span class="count">349</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--video Card-->
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <h2 class="vtext">Find Winning Products</h2>
                <div class="card">
                  <div class="card-header">
                    <iframe
                      width="100%"
                      height="280px"
                      src="https://www.youtube.com/embed/xcJtL7QggTI"
                      title="YouTube video player"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <div class="card-body">
                    <p>
                      Find the perfect winning product with our Industry leading
                      Don't forget to try out the other Explorers as well as
                      they are also a great source of winning products
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <h2 class="vtext">Fast USA Shipping Suppliers</h2>
                <div class="card">
                  <div class="card-header">
                    <iframe
                      width="100%"
                      height="280px"
                      src="https://www.youtube.com/embed/xcJtL7QggTI"
                      title="YouTube video player"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <div class="card-body">
                    <p>
                      Find the perfect winning product with our Industry leading
                      Don't forget to try out the other Explorers as well as
                      they are also a great source of winning products
                    </p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6">
                <h2 class="vtext">Aliexpress Product Importer</h2>
                <div class="card">
                  <div class="card-header">
                    <iframe
                      width="100%"
                      height="280px"
                      src="https://www.youtube.com/embed/xcJtL7QggTI"
                      title="YouTube video player"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <div class="card-body">
                    <p>
                      Find the perfect winning product with our Industry leading
                      Don't forget to try out the other Explorers as well as
                      they are also a great source of winning products
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="clearfix"></div>

          <!-- /#add-category -->
        </div>
        <!-- .animated -->
      </div>
      <!-- /.content -->
      <div class="clearfix"></div>

@endsection