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
                      <h3>Edit Refund Policy</h3>
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
                          <form action="/super/return-policy/update" method="post" enctype='multipart/form-data'> 
                            @csrf
                            <textarea class="form-control" name="editor"></textarea><br>
                            <input class="form-control btn btn-success" type="submit"value="Update">
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

    CKEDITOR.instances['editor'].setData({!! json_encode($data->content ?? '') !!})
  </script>
  <!-- /.content-wrapper -->
@endsection