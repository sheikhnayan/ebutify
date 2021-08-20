
<?php $__env->startSection('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <nav>
      <div class="nav nav-tabs nav-justified cpr-dashboard" id="nav-tab" role="tablist">
        <a class="nav-link active" href="customer-product-research-dashboard.html">Product Research Tool</a>
        <a class="nav-link " href="customer-ebutify-services-dashboard.html">eButify Services</a>
      </div>
    </nav>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid p-0">
        <!-- Info boxes -->
        <div class="row contact-header px-3 py-2">
          <div class="col-12">
            <h3><?php echo e(Auth::user()->name); ?> Profile</h3>
          </div>
        </div>
        <!-- /.row -->

        <div class="row collaps-body shadow p-3 m-2">
          <div class="col-12">
            <div class="row">
              <div class="col-lg-5 col-md-5 mt-5 pt-4">
                <form action="/user-profile-update" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                <div class="img-fluid img-circle mx-auto d-block" style="width: 160px; height: 160px; overflow: hidden; position: relative;">
                  <img id="profile_upload_img" src="<?php echo e(asset('storage/app/'.Auth::user()->profile_photo_path) ?? 'assets/img/avatar5.png'); ?>" style="width: 100%; height: 100%;"  alt="">
                  <input style="display: none;" accept=".png, .jpg, .jpeg, .gif" type="file" id="profile_upload" name="profile_upload">
                  <div onclick="profile_upload()" style="cursor:pointer; width: 100%; height: 30px; text-align: center; font-size: 20px; background-color: rgba(1,1, 1, .6); position: absolute; bottom: 0; color: white;">
                    <i class="fa fa-camera"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 col-md-7">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" value="<?php echo e(Auth::user()->name); ?>" placeholder="Md. Rezaul Islam">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="address" value="<?php echo e(Auth::user()->address); ?>" placeholder="Boalerdara, Nageswari, Kurigram">
                  </div>
                  
                  
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" value="<?php echo e(Auth::user()->email); ?>" placeholder="rezaul.islam@ebutify.com">
                  </div>
                  <div class="text-right">
                    <input type="submit" class="btn info-save-btn" value="Save Info">
                  </div>
                </form>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-lg-5 col-md-5 text-center">
                <h4 style="color: #5D5D5D;">Account Security</h4>
              </div>
              <div class="col-lg-7 col-md-7 mt-2">
                <form action="user-password-cahnge" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Current Password">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="new_password" placeholder="New Password">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                  </div>
                  <div class="text-right">
                  <input type="submit" class="btn info-save-btn" value="Save Password">
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.freelancer-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ebutifyCpanel\resources\views/user/freelancerProfile.blade.php ENDPATH**/ ?>