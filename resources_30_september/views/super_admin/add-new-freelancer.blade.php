@extends('super_admin.layouts.main')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Main content -->
    <section class="new-freelancer-form">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="bg-white m-3 p-4 freelancer-form">
              <div class="row">
                <div class="col-lg-7">
                  <form class="pr-2">
                    <div class="form-group fl-form">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName">
                    </div>
                    <div class="form-group fl-form">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress">
                    </div>
                </form>
                </div>
                <div class="col-lg-5">
                  <form>
                    <div class="form-group fl-form">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail">
                    </div>
                    <div class="form-group fl-form">
                        <label for="inputPhone">Phone</label>
                        <input type="text" class="form-control" id="inputPhone">
                    </div>
                </form>
                </div>
              </div>

              <div class="row">
                  <div class="col-lg-5 pr-2 mt-3 mb-3">
                      <div class="profile-box">
                        <img id="dvPreview" src="assets/img/avatar.png" class="img-circle d-block" style="width: 150px;" alt="Client Image">
                        <input id="profile-select" accept=".png, .jpg, .jpeg, .gif" type="file" name="profile" style="display: none;">
                        <button type="button" onclick="profileSelect()" class="btn btn-outline-dark btn-transparent profile-upload-btn"><img src="assets/img/Group-315.png">Upload Profile Image</button>
                      </div>
                    
                  </div>
                  <div class="col-lg-7">
                    <form>
                      <div class="form-group fl-form">
                          <label for="inputRole">Select User Role</label>
                          <input type="text" class="form-control" id="inputRole" placeholder="Default Role Product Manager">
                      </div>
                      <div class="form-group fl-form">
                          <label for="inputRegistration">Registration</label>
                          <input type="text" class="form-control" id="inputRegistration" placeholder="#110">
                      </div>
                      <div class="form-group fl-form">
                        <label for="inputEducation">Education</label>
                        <input type="text" class="form-control" id="inputEducation" placeholder="B.Sc in CSE">
                    </div>
                  </form>
                  </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- Info table -->

        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('JS')

<script language="javascript" type="text/javascript">
  function profileSelect(){
    $('#profile-select').trigger('click');
  }
  $(function () {
      $("#profile-select").change(function () {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#dvPreview").attr("src", e.target.result);
        }
        reader.readAsDataURL($(this)[0].files[0]);
      });
  });
</script>

@endsection

