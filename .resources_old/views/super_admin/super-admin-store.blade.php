@extends('super_admin.layout.super-admin')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section id="main-content" class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
<!--                 <form class="row mb-3 mt-1">
                    <div class="col-12 col-sm pr-sm-0">
                        <input type="text" name="search" id="search" value="Search Listed Product Here" placeholder="Search accounts, contracts and transactions" class="form-control">
                    </div>
                    <div class="col-12 col-sm-auto pl-sm-0">
                        <input type="button" name="commit" value="Search" class="btn btn-primary btn-block">
                    </div>
                    <div class="col-12 col-sm-auto pl-sm-0">
                        <button class="btn my-2 my-sm-0 btn-primary" type="submit">Add New Product</button>
                    </div>
                </form> -->
                <form class="col-12" method="get" action="{{ route('super/all-products') }}">
                  <div class="col-12">
                     <div class="input-group my-3">
                        <input type="text" class="form-control fb-ads-input" placeholder="Type Product name or neach" name="search">
                        <div class="input-group-append">
                           <button class="btn btn-fb-ads-input" type="submit" id="#">Search</button>
                        </div>
                        <div class="col-12 col-sm-auto pl-sm-0">
                          <a href="{{ route ('super/upload-page') }}" class="btn my-2 my-sm-0 btn-primary">Add New Product</a>
                        </div>
                     </div>
                  </div>
                </form>
            </div>
        </div>
        <!-- Info table -->
        <div class="row">
          <div class="col-12 ">
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
              @if ($trendingProducts->count() == 0)
              <tr>
                  <td colspan="5">No products to display.</td>
              </tr>
              @endif
              @foreach($trendingProducts as $productDetail)
              <tbody>
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
                    <a href="{{ route ('shopify-edit', ['id' => $productDetail->id]) }}" class="btn btn-primary">Edit</a>
                  </td>
                  <td>
                    <a href="{{ route ('product-delete-explo', ['id' => $productDetail->id]) }}" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>  

            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center">
                {{ $trendingProducts->links() }}
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

</div>
<!-- ./wrapper -->

@endsection

@section('js')
<script language="javascript" type="text/javascript">

  $(document) .ready(function(){
    $('.input-seling-niches').select2({
      width: '100%'
    });
    $(".input-tags").tagsinput();
  });

  tinymce.init({
    selector: 'textarea#editor',
    menubar: false
  });

  function profileSelect1(){
    $('#profile-select1').trigger('click');
  }
  $(function () {
      $("#profile-select1").change(function () {
        var reader = new FileReader();
        reader.onload = function (e) {          
            // $("#dvPreview").attr("src", e.target.result);
        }
        reader.readAsDataURL($(this)[0].files[0]);
        $('#profile-input1').val($(this)[0].files[0].name);
      });
  });

  function profileSelect2(){
    $('#profile-select2').trigger('click');
  }
  $(function () {
      $("#profile-select2").change(function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            // $("#dvPreview").attr("src", e.target.result);
        }
        reader.readAsDataURL($(this)[0].files[0]);
        $('#profile-input2').val($(this)[0].files[0].name);
      });
  });

  function profileSelect3(){
    $('#profile-select3').trigger('click');
  }
  $(function () {
      $("#profile-select3").change(function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            // $("#dvPreview").attr("src", e.target.result);
        }
        reader.readAsDataURL($(this)[0].files[0]);
        $('#profile-input3').val($(this)[0].files[0].name);
      });
  });


    // Get a reference to the file input element
    // const inputElement = document.querySelector('input[id="videoSelect"]');

    // get a collection of elements with class filepond
    const inputElements = document.querySelectorAll('input.filepond');

    // loop over input elements
    Array.from(inputElements).forEach(inputElement => {
    
    // Create a FilePond instance
    const pond = FilePond.create(inputElement);

      FilePond.setOptions({
        server: {
          url: '/fileUpload',
          headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'

          }
        }
      });
    })
    

</script>
@endsection