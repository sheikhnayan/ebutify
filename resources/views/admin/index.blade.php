@extends('admin.layout.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mt-3">
              <span class="info-box-icon bg-info"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Today Visit</span>
                <span class="info-box-number">
                  @php
                    $ip = DB::table('i_p_s')->get();
                    $ips = count($ip);
                  @endphp
                  {{ $ips }}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mt-3 mb-3">
              <span class="info-box-icon bg-success"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Sales</span>
                <span class="info-box-number">
                  @php
                    $month = DB::table('subscription_items')->where('stripe_plan','price_1JPqeZCzBVgP4kKNPA6XL5mX')->get();
                    $year = DB::table('subscription_items')->where('stripe_plan','price_1JPqopCzBVgP4kKNdvtju0GZ')->get();

                    $monthly = $month->count();
                    $yearly = $year->count();

                    $monthly_cost = $monthly * 12.50;
                    $yearly_cost = $yearly * 90;
                  @endphp
                  ${{ $monthly_cost + $yearly_cost }}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mt-3 mb-3">
              <span class="info-box-icon bg-danger"><i class="fas fa-user-friends"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Users</span>
                <span class="info-box-number">
                  @php
                      $customer = DB::table('users')->where('user_type','user')->where('stripe_id','!=', null)->get();
                      $total_customers = $customer->count();
                  @endphp
                  {{ $total_customers }}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mt-3 mb-3">
              <span class="info-box-icon bg-warning"><i class="fas fa-user-plus"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Users</span>
                <span class="info-box-number">
                  @php
                      $now = \Carbon\Carbon::now()->month;
                      $today_customer = DB::table('users')->whereMonth('created_at',$now)->get();
                      $total_today_customers = $today_customer->count();
                  @endphp
                  {{ $total_today_customers }} 
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
