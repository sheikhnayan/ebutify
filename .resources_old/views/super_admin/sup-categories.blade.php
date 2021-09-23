@extends('super_admin.layout.super-admin')
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
                        <input type="text" name="search" id="search" value="" placeholder="Search accounts, contracts and transactions" class="form-control">
                    </div>
                    <div class="col-12 col-sm-auto pl-sm-0">
                        <input type="button" name="commit" value="Search" class="btn btn-primary btn-block">
                    </div>
                </form>
            </div>
        </div>
        <!-- Info table -->
        <div class="row">
          <div class="col-md-12 col-lg-12">
            <div class="row">
              <div class="col-6">
                <h5 class="c-title">Product Category</h5>
              </div>

              <div class="col-6">
                <button class="btn my-2 my-sm-0 btn-primary float-right" type="submit"><a href="{{route('sup-add-category')}}">Add New Product</a> </button>
              </div>
              <div class="col-12 mt-2">
                <table class="bg-white table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Category Name</th>
                      <th>Date</th>
                      <th width="100" colspan="2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $category)
                    <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->category}}</td>
                      <td>{{$category->created_at}}</td>
                      <td>
                        <a href="{{route('edit-sup-category', ['id' => $category->id])}}" class="btn btn-primary">Edit</a>
                      </td>
                      <td>
                        <a href="" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              
            </div>

              

            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-caret-left"></i></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-caret-right"></i></a>
                </li>
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