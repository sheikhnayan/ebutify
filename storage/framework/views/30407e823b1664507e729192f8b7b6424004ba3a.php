
<?php $__env->startSection('content'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <nav>
      <div class="nav nav-tabs nav-justified cpr-dashboard" id="nav-tab" role="tablist">
        <a class="nav-link active" href="/dashboard">Product Research Tool</a>
        <a class="nav-link " href="/service-dashboard">eButify Services</a>
      </div>
    </nav>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid p-0">
        <!-- Info boxes -->
        <div class="row contact-header px-3 py-2">
          <div class="col-12">
            <h3>Contact Us</h3>
          </div>
        </div>
        <!-- /.row -->

        <div class="row collaps-body shadow p-3 m-2">
          <div class="col-12">
            <div class="tab-pane fade show active" id="#" role="tabpanel">
              <ul class="nav nav-tabs nav-justified ccu-tab" role="tablist">
                <li class="nav-item plan-tab" role="presentation">
                  <a class="nav-link active" data-toggle="tab" href="#email" role="tab">Contact Via email</a>
                </li>
                <li class="nav-item plan-tab" role="presentation">
                  <a class="nav-link" data-toggle="tab" href="#phone" role="tab">Contact Via Phone</a>
                </li>
                <li class="nav-item plan-tab" role="presentation">
                  <a class="nav-link" data-toggle="tab" href="#socialMedia" role="tab">Contact Via Social Media</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="email" role="tabpanel">
                  <div class="row p-2 plan-header mt-3">
                    <h5>Hey hmreza, What would you like to talk about?</h5>
                  </div>
                  <?php if(Session::has('message_sent')): ?>
                  <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('message_sent')); ?>

                  </div>
                  <?php endif; ?>
                  <form action="<?php echo e(route('send-email')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                      <select class="form-control" id="subject" name="subject">
                        <option>Select an Option</option>
                        <option>I want to give feedback</option>
                        <option>I have a technical Question or issue</option>
                        <option>I have a billing question</option>
                        <option>I have an Affiliate question</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write something you job recommendation and criteria...."></textarea>
                    </div>
                  
                  <div class="row px-2 justify-content-end">
                    <button type="submit" class="btn contact-email-btn">Send Message</button>
                  </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="phone" role="tabpanel">
                 <div class="row">
                   <div class="col-lg-6 col-md-6">
                     <div class="row ccu-phone-left">
                       <div class="col-6 mt-4 pt-2">
                         <div>
                          <img src="assets/img/teliphone.png" class="rounded mx-auto d-block" alt="">
                         </div>
                         <div class="text-center">
                          <p>Call for live support</p>
                        </div>
                       </div>
                       <div class="col-6">
                         <div>
                          <h5>Local Number</h5>
                          <p>+8801722722690</p>
                         </div>
                         <br>
                         <div>
                          <h5>International Number</h5>
                          <p>+8809638694766</p>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="col-lg-6 col-md-6">
                     <div class="ccu-table-header mt-3">
                       <h4>eButify Office Time</h4>
                     </div>
                     <div>
                       <table class="table table-sm table-bordered ccu-table">
                         <thead>
                           <tr>
                             <th>Day Name</th>
                             <th>Start Time</th>
                             <th>Close Time</th>
                           </tr>
                         </thead>
                         <tbody>
                           <tr>
                            <th>Saturday</th>
                            <th>10.00 am</th>
                            <th>12.00 am</th>
                           </tr>
                           <tr>
                            <th>Sunday</th>
                            <th>10.00 am</th>
                            <th>12.00 am</th>
                           </tr>
                           <tr>
                            <th>Tuesday</th>
                            <th>10.00 am</th>
                            <th>12.00 am</th>
                           </tr>
                           <tr>
                            <th>Wednesday</th>
                            <th>10.00 am</th>
                            <th>12.00 am</th>
                           </tr>
                           <tr>
                            <th>Thursday</th>
                            <th>10.00 am</th>
                            <th>12.00 am</th>
                           </tr>
                         </tbody>
                       </table>
                     </div>
                   </div>
                   <div class="col-12 px-4 text-center">
                    <button type="button" class="btn contact-phone-btn">Call us only at office time</button>
                  </div>
                 </div>
                </div>
                <div class="tab-pane fade" id="socialMedia" role="tabpanel">
                  <div class="row px-4 py-2">
                    <div class="col-md-6 col-lg-7 my-3">
                      <img src="assets/img/butterfly.jpg" class="img-fluid img-circle mx-auto d-block" style="max-width: 160px;" alt="">
                    </div>
                    <div class="col-md-6 col-lg-5 my-3">
                      <div class="contac-sm-icon my-2 py-2 px-3 shadow-sm">
                        <i class="fab fa-facebook-square" style="color: #1F52C9;"></i>
                        <a href="https://www.facebook.com/ebutify">Facebook Official Fan Page</a>
                      </div>
                      <div class="contac-sm-icon my-2 py-2 px-3 shadow-sm">
                        <i class="fab fa-instagram-square" style="color: #C9942A;"></i>
                        <a href="https://www.instagram.com/ebutify">Instagram Official Fan Page </a>
                      </div>
                      <div class="contac-sm-icon my-2 py-2 px-3 shadow-sm">
                        <i class="fab fa-twitter-square" style="color: #3DDC97;"></i>
                        <a href="https://twitter.com/eButify">Twitter Official Fan Page </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
   $(document) .ready(function(){
    $('.select2').select2({
      width: '100%'
    });
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layoutsUser.user3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder\ebutify_freelancer\resources\views/user/contact-us.blade.php ENDPATH**/ ?>