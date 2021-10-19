@extends('admin.layout.main')
@section('content')
<script src="{{ asset('admin/assets/ckeditor/ckeditor.js') }}"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="amazon-form-content">
        <div class="container-fluid">
            <div class="row">
              <div class=" col-12">
                <div class="row amazon-form-main shadow bg-white m-4">
                    <div class="col-12 amazon-form-header shadow p-3">
                      @if(count($data) > 0)
                      <h3>Edit Blog</h3>
                      @else
                      <h3>Add New Blog</h3>
                      @endif
                    </div>
                    <div class="col-12">
                      <div class="row pt-3 pl-3">
                        <div class="col-lg-12 amazon-form-content pl-2 pr-3 pb-4">
                          @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                          @endif
                          @if (session('status'))
                              <div class="alert alert-success">
                                  {{ session('status') }}
                              </div>
                            @endif


                          <form action="/super/edit/subsription" method="post" enctype='multipart/form-data'>

                            @csrf
                            <input type="number" hidden="" name="id" value="{{$data[0]->id}}">

                            <label for="">Product Name</label>
                            <input type="text" class="form-control" name="product_name" id="" placeholder="Enter Product Name" value="{{ $data[0]->product_name ?? ''}}"> <br>

                            <br>

                            <label for="">Product Code</label>
                            <input type="text" class="form-control" name="product_code" value="{{ $data[0]->product_code ?? ''}}" id="" placeholder="Enter Product Code"> <br>

                            <br>

                            <label for="">Monthly Pricing</label>
                            <input type="number" step="0.01" value="{{ $data[0]->monthly_pricing ?? ''}}" class="form-control" name="monthly_pricing" id="" placeholder="Enter Monthly Pricing"> <br>

                            <br>

                            <label for="">To Pay Today</label>
                            <input type="number" step="0.01" value="{{ $data[0]->to_pay_today ?? ''}}" class="form-control" name="to_pay_today" id="" placeholder="Enter How Much To Pay Today"> <br>

                            <br>

                            <label for="">Original Amount</label>
                            <input type="number" step="0.01" value="{{ $data[0]->original_amount ?? ''}}" class="form-control" name="original_amount" id="" placeholder="Enter Original Amount"> <br>

                            <br>

                            <label for="">Saved Percentage</label>
                            <input type="number" step="0.01" value="{{ $data[0]->saved_percentage ?? ''}}" class="form-control" name="saved_percentage" id="" placeholder="Enter Saved Percentage" required=""> <br>

                            <br>

                            <label for="">Discount Amount</label>
                            <input type="number" step="0.01" value="{{ $data[0]->discount_amount ?? ''}}" class="form-control" name="discount_amount" id="" placeholder="Enter Saved Percentage" required=""> <br>

                            <br>

                            <label for="">Billed For</label>
                            <input type="number" step="0.01" value="{{ $data[0]->billed_for ?? ''}}" required="" class="form-control" name="billed_for" id="" placeholder="Enter Billed For"> <br>

                            <br>

                            <label for="">Coupon ID</label>
                            <input type="text" class="form-control" value="{{ $data[0]->coupon_id ?? ''}}" name="coupon_id" id="" placeholder="Enter Billed For"> <br>

                            <br>
                            <button type="submit" class="btn btn-success">Add </button>

                          </form>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>

  <script>
    function featured(){
      console.log(this);
      var f = document.getElementById('featured');
      console.log(f.value());
      if( f.value == 0){
        f.setAttribute('value','false');
      }
    }    
  </script>
  <!-- /.content-wrapper -->
@endsection