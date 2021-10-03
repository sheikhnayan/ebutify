@extends('layouts.freelancer-amazon-layout')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section id="main-content" class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form class="row mb-3 mt-1">
                    <div class="col-12 col-sm pr-sm-0">
                        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search for names here... " aria-label="Recipient's username">
                    </div>
                    <div class="col-12 col-sm-auto pl-sm-0">
                        <input type="button" name="commit" value="Search" class="btn btn-primary btn-block">
                    </div>
                    <div class="col-12 col-sm-auto pl-sm-0">
                        <a href="{{route('add-new-shopify')}}"  class="btn my-2 my-sm-0 btn-primary">Add New Product</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Info table -->
        <div class="row mr-2">
          <div class="col-12 product-table bg-white pl-0 pr-0 ml-2 shadow-sm">
            @if ($productDetails->count() == 0)
            <div class="row justify-content-center my-4">
                <td colspan="5">No products to display.</td>
            </div>
            @else
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
            <table class="bg-white table table-hover table-bordered table-responsive">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Product Image</th>
                  <th>Product Names</th>
                  <th>Price</th>
                  <th>Monthly Traffic</th>
                  <th>Ads Spend</th>
                  <th>Date</th>
                  <th>Uploader Name</th>
                  <th width="100">Action</th>
                </tr>
              </thead>
              <tbody id="myTable">
                @foreach($productDetails as $productDetail)
                <tr>
                  <td>{{$productDetail->id}}</td>
                  <td><img class="tbl-img" src="{{$productDetail->image_link}}"></td>
                  <td>{{$productDetail->product_name}},<br>{{$productDetail->product_name2}},<br>{{$productDetail->product_name3}},<br>{{$productDetail->product_name4}}</td>
                  <td>${{$productDetail->price}}</td>
                  <td>{{$productDetail->monthly_traffic}}</td>
                  <td>${{$productDetail->ad_spend}}</td>
                  <td>{{$productDetail->created_at}}</td>
                  <td>{{$productDetail->uploader_name}}</td>
                  <td>
                    <a href="{{ route ('shopify-product-edit', ['id' => $productDetail->id]) }}" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @endif

            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center">
                {{ $productDetails->links() }}
              </ul>
            </nav>

      
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

@section('js')
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection