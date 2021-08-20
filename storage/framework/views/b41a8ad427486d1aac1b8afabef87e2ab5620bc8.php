
<?php $__env->startSection('head'); ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eButify | Customer Place Order</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.css">
  <!-- My style -->
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <nav>
      <div class="nav nav-tabs nav-justified cpr-dashboard" id="nav-tab" role="tablist">
        <a class="nav-link" href="/dashboard">Product Research Tool</a>
        <a class="nav-link active" href="/service-dashboard">eButify Services</a>
      </div>
    </nav>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- start-main-content -->
        <div class="row main-content">
          <div class="col-12 pl-4 pt-3">
            <h3 class="pco-header">Place your order</h3>
          </div>
          <div class="col-12">
            <div class="row bg-white border-rounded mx-2 p-3">
              <div class="col-12">
                <div class="row pb-4 m-1">
                  <div class="col-12 pco-title">
                    <h3>Payment</h3>
                    <p>All transactions are secure and encrypted.</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-12 col-lg-8 p-0 pco-form">
                    <form>
                      <div class="form-group">
                        <input type="text" class="form-control" id="#" placeholder="Credit card">
                      </div>
                      <div class="row px-3">
                        <div class="form-group col-12">
                          <input type="text" class="form-control" id="#" placeholder="Card Holder Name">
                        </div>
                        <div class="form-group col-12">
                          <input type="text" class="form-control" id="#" placeholder="Card Number">
                        </div>
                      </div>
                      <div class="row px-3">
                        <div class="form-group col-7">
                          <input type="text" class="form-control" id="#" placeholder="Expiration date (MM / YY)">
                        </div>
                        <div class="form-group col-5">
                          <input type="text" class="form-control" id="#" placeholder="Secure Code">
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="pcr-s-cost ml-2 p-3">
                      <h5>Name: Product Research</h5>
                    <div class="row">
                      <div class="col-7">
                        <p>Service Cost</p>
                      </div>
                      <div class="col-5">
                        <p>$50.00</p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-7">
                        <p>Subtotal</p>
                      </div>
                      <div class="col-5">
                        <p>$50.00</p>
                      </div>
                    </div>
                    <div><hr></div>
                    <div class="row">
                      <div class="col-7">
                        <p>Total</p>
                      </div>
                      <div class="col-5">
                        <p>$50.00</p>
                      </div>
                    </div>
                    </div>
                  </div>
                </div>

                
                <div class="row pco-btn-group">
                  <a href="#" class="btn pco-btn">Place Order</a>
                </div>
              </div>
             
  
            </div>
          </div>
        </div>
        <!-- /end-main-content -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

<!-- overlayScrollbars -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/OverlayScrollbars.min.js"></script>

<script src="assets/js/script.js"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('user_services.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\New folder\ebutify_freelancer\resources\views/user_services/place-order-step2.blade.php ENDPATH**/ ?>