@extends('layoutsUser.user3')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <nav>
      <div class="nav nav-tabs nav-justified cpr-dashboard" id="nav-tab" role="tablist">
        <a class="nav-link active" href="{{ url('dashboard') }}">Product Research Tool</a>
        <a class="nav-link " href="#">eButify Services</a>
      </div>
    </nav>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid p-0">
        <!-- Info boxes -->
        <div class="row contact-header px-3 py-2">
          <div class="col-12">
            <h3>My Profile</h3>
          </div>
        </div>
        <!-- /.row -->

        <div class="row collaps-body shadow p-3 m-2">
          <div class="col-12">
            <div class="row">
              <div class="col-lg-5 col-md-5 mt-5 pt-4">
                <div class="img-fluid img-circle mx-auto d-block" style="width: 160px; height: 160px; overflow: hidden; position: relative;">
                  <img id="profile_upload_img" src="assets/img/avatar5.png" style="width: 100%; height: 100%;"  alt="">
                  <input style="display: none;" accept=".png, .jpg, .jpeg, .gif" type="file" id="profile_upload" name="profile_upload">
                  <div onclick="profile_upload()" style="cursor:pointer; width: 100%; height: 30px; text-align: center; font-size: 20px; background-color: rgba(1,1, 1, .6); position: absolute; bottom: 0; color: white;">
                    <i class="fa fa-camera"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-7">
                <form method="post" action="{{ route('update-profile') }}">
                  @csrf
                  <div class="form-group">
                    <input type="email" class="form-control" id="name" name="name" placeholder="{{Auth::user()->name}}">
                  </div>
                  <!-- <div class="form-group">
                    <input type="text" class="form-control" id="address" placeholder="Boalerdara, Nageswari, Kurigram">
                  </div> -->
                  <!-- <div class="row"> -->
                    <!-- <div class="form-group col-md-4">
                      <input type="email" class="form-control" id="#" placeholder="Rangpur">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="email" class="form-control" id="#" placeholder="Kurigram">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="email" class="form-control" id="#" placeholder="5660">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="#" placeholder="eButify INC">
                  </div> -->
                  <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="{{Auth::user()->email}}">
                  </div>
                
                <div class="text-right">
                  <button type="submit" class="btn info-save-btn">Save Info</button>
                </div>
                </form>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-lg-5 col-md-5 text-center">
                <h4 style="color: #5D5D5D;">Account Security</h4>
              </div>
              <div class="col-lg-7 col-md-7 mt-2 edit-password">
                <form method="post" action="{{route('update-password')}}">
                  @csrf
                  <div class="form-group">
                    <input type="password" class="form-control" id="password_old" name="password_old" placeholder="Current Password">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="password_new" name="password_new" placeholder="New Password">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm Password">
                  </div>
                
                <div class="text-right">
                  <button type="submit" class="btn info-save-btn">Save Password</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

@endsection

@section('js')
<script language="javascript" type="text/javascript">
   $(document) .ready(function(){
    $('.select2').select2({
      width: '100%'
    });
  });

  function profile_upload(){
    $('#profile_upload').trigger('click');
  }
  $(function () {
      $("#profile_upload").change(function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#profile_upload_img").attr("src", e.target.result);
        }
        reader.readAsDataURL($(this)[0].files[0]);
      });
  });
</script>
@endsection