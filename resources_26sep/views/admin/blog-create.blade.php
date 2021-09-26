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
                      @if(isset($data))
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
                          @if(isset($data))
                          <form action="/super/blog/update/{{ $data->id }}" method="post" enctype='multipart/form-data'> 
                            @else
                          <form action="/super/blog" method="post" enctype='multipart/form-data'>
                            @endif
                            @csrf
                            <label for="">Blog Header</label>
                            <input type="text" class="form-control" name="heading" id="" value="{{ $data->heading ?? ''}}" placeholder="Enter the blog header"> <br>

                            <label for="">Blog Category</label><br>
                            <select class="form-control" name="category_id">
                              @foreach ($category as $item)
                              <option {{ $data->category_id ?? '' == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->category_name }}</option>
                              @endforeach
                            </select> <br><br>

                            <label for="">Blog Tags</label>
                            <input type="text" class="form-control" name="tags" id="" value="{{ $data->tags ?? ''}}" placeholder="Enter the blog tags with comma after every tags!"> <br>


                            <label for="">Is Popular?</label>
                            <input class="form-control" value="{{ $data->popular ?? 'false'}}" {{  $data->popular ?? '' == 'false' ? 'checked' : ''  }} type="checkbox" name="popular" id="">

                            <label for="">Is Featured?</label>
                            <input class="form-control" value="{{ $data->featured ?? 'false'}}" {{  $data->featured ?? '' == 'false' ? 'checked' : ''  }} type="checkbox" name="featured" id="">

                            <label for="">Blog header image</label>
                            @if (isset($data))
                            <img class="img-fluid" src="{{ asset('storage/'.$data->image) }}" alt="" width="200px">
                            @endif
                            <input type="file" class="form-control" name="image" id=""> <br>

                            <textarea class="form-control" name="editor"></textarea><br>
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
  <script>
    CKEDITOR.replace('editor');

    CKEDITOR.instances['editor'].setData({!! json_encode($data->body ?? '') !!})
  </script>
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