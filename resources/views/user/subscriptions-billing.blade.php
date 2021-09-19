
@extends('layoutsUser.user4')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <nav>
      <div class="nav nav-tabs nav-justified cpr-dashboard" id="nav-tab" role="tablist">
        <a class="nav-link active" href="/dashboard">Product Research Tool</a>
        <a class="nav-link " href="#">eButify Services</a>
      </div>
    </nav>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid p-0">
        <!-- Info boxes -->
        <div class="row contact-header px-3 py-2">
          <div class="col-12">
            <h3>Subscriptions</h3>
          </div>
        </div>
        <!-- /.row -->

        <div class="row subscriptions-box shadow p-3 mx-2">
          <div class="col-md-3 col-lg-3 mt-2">
            <img src="assets/img/recycle.png" class="img-fluid img-circle mx-auto d-block" alt="">
          </div>
          <div class="col-md-3 col-lg-3">
            <h5>
              @php
                  $sub = DB::table('subscriptions')->where('user_id',Auth::user()->id)->latest()->first();
              @endphp
              @if ($sub->stripe_plan == 'price_1JPqeZCzBVgP4kKNPA6XL5mX')
                  Monthly
              @elseif($sub->stripe_plan == 'price_1JPqopCzBVgP4kKNdvtju0GZ')
                  Yearly
              @else
                  Trial
              @endif
              Plan
            </h5>
            <p style="margin: 0;">
              @if ($sub->stripe_plan == 'price_1JPqeZCzBVgP4kKNPA6XL5mX')
                  $12.50
              @elseif($sub->stripe_plan == 'price_1JPqopCzBVgP4kKNdvtju0GZ')
                  $90
              @else
                  $2
              @endif
               
              @if ($sub->stripe_plan == 'price_1JPqeZCzBVgP4kKNPA6XL5mX')
                  Per Monthly
              @elseif($sub->stripe_plan == 'price_1JPqopCzBVgP4kKNdvtju0GZ')
                  Per Yearly
              @else
                  Only One Time Purchase
              @endif
            </p>
            <p style="margin: 0;">Started: {{ Carbon\Carbon::parse($sub->created_at)->format('M d, Y') }}</p>
          </div>
          <div class="col-md-3 col-lg-3 text-center mt-1">
            <button type="button" class="btn active-btn">SUBSCRIPTION ACTIVE</button>
            @if (Auth::user()->subscription('main')->cancelled())
              <button type="button" class="btn cancel-plan-btn">PLAN DEACTIVATED</button>
            @else
            <button type="button" class="btn active-btn">PLAN ACTIVE</button>
            @endif
          </div>
          <div class="col-md-3 col-lg-3 text-center mt-4">
            <button type="button" class="btn cancel-plan-btn"><a href="{{route('cancel-subscription')}}">Cancel Plan</a></button>
          </div>
        </div>
        <!-- /.row -->

        <div class="row contact-header px-3 py-2 mt-3">
          <div class="col-12">
            <h3>Billing</h3>
          </div>
        </div>
        <!-- /.row -->

        <div class="row bg-white shadow px-3 py-5 mx-2" style="border-radius: 10px;">
          <div class="col-sm-12 col-md-2 col-lg-2 my-2">
            <img src="assets/img/credit-card.png" class="img-fluid mx-auto d-block" alt="">
          </div>
          <div class="col-sm-12 col-md-10 col-lg-10">
            <div class="row card-info">
              <div class="col-4 text-center">
                <h6>Card Number</h6>
              </div>
              <div class="col-4 text-center">
                <h6>Card Type</h6>
              </div>
              <div class="col-4 text-center">
                <h6>Expires On</h6>
              </div>
            </div>
            <div class="row mx-3">
              <div class="col-4 text-center">
                <p>***{{ Auth::user()->card_last_four }}</p>
              </div>
              <div class="col-4 text-center">
                <p>{{ Auth::user()->card_brand }}</p>
              </div>
              <div class="col-4 text-center">
                <p>
                  @if ($sub->stripe_plan == 'price_1JPqeZCzBVgP4kKNPA6XL5mX')
                  {{ Carbon\Carbon::parse($sub->created_at)->addMonth()->format('M d, Y') }}
                  @elseif($sub->stripe_plan == 'price_1JPqopCzBVgP4kKNdvtju0GZ')
                  {{ Carbon\Carbon::parse($sub->created_at)->addYear()->format('M d, Y') }}
                  @else
                  {{ Carbon\Carbon::parse($sub->created_at)->addDay()->format('M d, Y') }}
                  @endif
                </p>
              </div>
            </div>
          </div>
          {{-- <div class="col-sm-12 col-md-3 col-md-3 text-center">
            <button type="button" class="btn card-info-btn">Update card info</button>
          </div> --}}
          <div class="col-12 billing-card-bottom">
            <div class="row">
              <div class="col-12 mt-3">
                <h5 class="m-0">Payment History</h5>
                <p>Add your business details to these invoices</p>
              </div>
              <div class="col-12">
                <div class="row bc-detail-1 ml-4">
                  <div class="col-2 text-center">
                    <h6>Status</h6>
                  </div>
                  <div class="col-2 text-center">
                    <h6>Description</h6>
                  </div>
                  <div class="col-4 text-center">
                    <h6>Payment Method	</h6>
                  </div>
                  <div class="col-2 text-center">
                    <h6>Invoice</h6>
                  </div>
                  <div class="col-2 text-center">
                    <h6>Amount</h6>
                  </div>
                </div>
                @php
                    $subs = DB::table('subscriptions')->where('user_id',Auth::user()->id)->get();
                @endphp

                @foreach ($subs as $item)
                    <div class="row bc-detail-2 ml-4">
                      <div class="col-2 text-center">
                        <span class="paid">PAID</span>
                      </div>
                      <div class="col-2 text-center">
                        <span>
                          @if ($item->stripe_plan == 'price_1JPqeZCzBVgP4kKNPA6XL5mX')
                            Monthly Plan
                          @elseif($item->stripe_plan == 'price_1JPqopCzBVgP4kKNdvtju0GZ')
                            Yearly Plan
                          @else
                            Trial Plan
                          @endif
                        </span>
                      </div>
                      <div class="col-4 text-center">
                        @if (Auth::user()->card_brand == 'visa')
                          <i class="fab fa-cc-visa"></i>
                        @elseif (Auth::user()->card_brand == 'master')
                          <i class="fab fa-cc-mastercard"></i>
                        @else
                          <img src="assets/img/credit-card.png" class="img-fluid" style="width: 18px;" alt="">
                        @endif
                        <span>xxxx xxxx xxxx {{ Auth::user()->card_last_four }}</span>
                      </div>
                      <div class="col-2 text-center">
                        <span>{{ Carbon\Carbon::parse($item->created_at)->format('M d, Y') }}</span>
                      </div>
                      <div class="col-2 text-center">
                        <span>
                          @if ($item->stripe_plan == 'price_1JPqeZCzBVgP4kKNPA6XL5mX')
                            $12.50 USD
                          @elseif($item->stripe_plan == 'price_1JPqopCzBVgP4kKNdvtju0GZ')
                            $90 USD
                          @else
                            $2 USD
                          @endif
                        </span>
                      </div>
                    </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

@endsection