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
                      <h3>Edit Quick Start</h3>
                      @else
                      <h3>Add New Quick Start</h3>
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
                          <form action="/super/quickstart/update/{{ $data->id }}" method="post" enctype='multipart/form-data'> 
                            @else
                          <form action="/super/quickstart" method="post" enctype='multipart/form-data'>
                            @endif
                            @csrf
                            <label for="">Quick Start Title</label>
                            <input type="text" class="form-control" name="title" id="" value="{{ $data->title ?? ''}}" placeholder="Enter the title"> <br>

                            <label for="">Quick Start Description</label>
                            <textarea name="des" id="" cols="30" rows="10" class="form-control">{{ $data->des ?? ''}}</textarea>
                            <br>

                            <label for="">Quick Start Link</label>
                            <input type="text" class="form-control" name="link" id="" value="{{ $data->link ?? ''}}" placeholder="Enter the link"> <br>

                            <label for="">Quick Start Link Title</label>
                            <input type="text" class="form-control" name="link_title" id="" value="{{ $data->link_title ?? ''}}" placeholder="Enter the link title"> <br>

                            <label>Video</label>
                            <input type="file" class="form-control" name="url"> <br>

                            @if(isset($data))
                              <video width="400px" height="300px" src="{{ asset('storage/'.$data->url) }}" controls></video>
                            @endif

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