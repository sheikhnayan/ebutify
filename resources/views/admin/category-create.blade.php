@extends('admin.layout.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="amazon-form-content">
        <div class="container-fluid">
            <div class="row">
              <div class=" col-12">
                <div class="row amazon-form-main shadow bg-white m-4">
                    <div class="col-12 amazon-form-header shadow p-3">
                      @if(isset($data))
                      <h3>Edit Blog Category</h3>
                      @else
                      <h3>Add New Blog Category</h3>
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
                          @if(isset($data))
                          <form action="/super/category/update/{{ $data->id }}" method="post" enctype='multipart/form-data'> 
                            @else
                          <form action="/super/category" method="post" enctype='multipart/form-data'>
                            @endif
                            @csrf
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="" value="{{ $data->category_name ?? ''}}" placeholder="Enter the Blog Category Name"> <br>

                            <input class="form-control btn btn-success" type="submit"
                            @if (isset($data))
                            value="Update"
                            @else
                              value="Create" 
                            @endif
                             >
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
  <!-- /.content-wrapper -->
@endsection