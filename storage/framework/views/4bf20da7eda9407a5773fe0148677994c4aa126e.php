<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php if(Route::currentRouteName() == 'freelancer-dashboard'): ?>
  <title>eButify | Freelancer Dashboard</title>
  <?php elseif(Route::currentRouteName() == 'product-research'): ?>
  <title>eButify | Freelancer Product Research</title>
  <?php endif; ?>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.css">
  <!--Select2 from-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
  <!-- My style -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">

  <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet"/>

  <link rel="stylesheet" href="<?php echo e(asset('assets/css/emojionearea.min.css')); ?>">

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="<?php echo e(asset('assets/img/eButify.png')); ?>" alt="eButifyLogo">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link primary-color" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link primary-color" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">3 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 1 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 1 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 1 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link primary-color" data-toggle="dropdown" href="#">
          <i class="far fa-envelope"></i>
          <span class="badge badge-danger navbar-badge">4</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="assets/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="assets/img/avatar2.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="assets/img/avatar.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> 

      <li class="nav-item dropdown">
        <a class="" data-toggle="dropdown" href="#">
          <div class="user-panel d-flex mr-3">
            <div class="image">
              <img src="<?php echo e(asset('storage/app/'.Auth::user()->profile_photo_path)); ?>" class="img-circle " alt="Jone Due">
            </div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?php echo e(Auth::user()->name); ?></span>
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <a href="<?php echo e(route('freelancer-profile')); ?>" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Update Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php echo e(route('logout')); ?>" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="<?php echo e(asset('assets/img/eButify.png')); ?>" alt="e/Butify Logo" class="brand-image" style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo e(route('freelancer-dashboard')); ?>" class="<?php if(Route::currentRouteName() == 'dashboard' || Route::currentRouteName() == 'freelancer-dashboard'): ?> nav-link active <?php endif; ?> nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="<?php echo e(route('product-research')); ?>" class="<?php if(Route::currentRouteName() == 'product-research' || Route::currentRouteName() == 'product-edit' || Route::currentRouteName() == 'uploadPage'): ?> nav-link active <?php endif; ?> nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Product Research
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Explores
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview pl-5">
              <li class="nav-item">
                <a href="<?php echo e(route('amazon-products')); ?>" class="<?php if(Route::currentRouteName() == 'amazon-products' || Route::currentRouteName() == 'add-new-amz'): ?> nav-link active <?php endif; ?> nav-link">
                  <p>Amazon Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('ali-express-products')); ?>" class="<?php if(Route::currentRouteName() == 'ali-express-products' || Route::currentRouteName() == 'add-new-ali'): ?> nav-link active <?php endif; ?> nav-link">
                  <p>AliExpress Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('shopify-products')); ?>" class="<?php if(Route::currentRouteName() == 'shopify-products' || Route::currentRouteName() == 'add-new-shopify'): ?> nav-link active <?php endif; ?> nav-link">
                  <p>Shopify Product</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item pl-4 ml-2">
            <a href="freelancer-project.html" class="nav-link">
              <p>Project</p>
            </a>
          </li>
          <li class="nav-item pl-4 ml-2">
            <a href="freelancer-project -detail-1.html" class="nav-link">
              <p>Message</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <?php echo $__env->yieldContent('content'); ?>
  
  </div>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>

<!--Select2 from-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<!-- overlayScrollbars -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/OverlayScrollbars.min.js"></script>

<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>

<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

<script type="text/javascript" src="<?php echo e(asset('assets/js/emojionearea.min.js')); ?>"></script>

  <?php echo $__env->yieldContent('js'); ?>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#example1").emojioneArea({
        pickerPosition: "bottom"
      });
    });
  </script>

</body>
</html><?php /**PATH C:\xampp\htdocs\ebutifyCpanel\resources\views/layouts/freelancer-layout.blade.php ENDPATH**/ ?>