<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eButify | Customer Trending Product Research</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
  
  <!-- Slick Slider -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

  <!-- My style -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
  <style>
.video-container {
  position: relative;
  width: 100%;
  overflow: hidden;
  padding-top: 56.25%; /* 16:9 Aspect Ratio */
}

.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  height: 100%;
  border: none;
}
</style>
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
              <img src="<?php echo e(asset('assets/img/user1-128x128.jpg')); ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
              <img src="<?php echo e(asset('assets/img/avatar2.png')); ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="<?php echo e(asset('assets/img/avatar.png')); ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="<?php echo e(asset('storage/app/'.Auth::user()->profile_photo_path) ?? 'assets/img/avatar5.png'); ?>" class="img-circle " alt="Jone Due">
            </div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?php echo e(Auth::user()->name); ?></span>
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <a href="/userprofile" class="dropdown-item">
            <i class="far fa-user mr-2"></i> My Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="customer-subscriptions-billing.html" class="dropdown-item">
            <i class="far fa-bell mr-2"></i> Subcription
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
            <a href="<?php echo e(url('dashboard')); ?>" class="<?php if(Route::currentRouteName() == 'dashboard' || Route::currentRouteName() == 'freelancer-dashboard'): ?> nav-link active <?php endif; ?> nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
         
          <li class="nav-item <?php if(Route::currentRouteName() == 'product-research' || Route::currentRouteName() == 'product-edit' || Route::currentRouteName() == 'uploadPage' || Route::currentRouteName() == 'trending-products' || Route::currentRouteName() == 'all-product'): ?> menu-open <?php endif; ?>">
            <a href="#" class="<?php if(Route::currentRouteName() == 'product-research' || Route::currentRouteName() == 'product-edit' || Route::currentRouteName() == 'uploadPage' || Route::currentRouteName() == 'trending-products' || Route::currentRouteName() == 'all-product'): ?> nav-link active <?php endif; ?> nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Product Research
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview pl-4 ml-2">
              <li class="nav-item">
                <a href="<?php echo e(url('fb-ad-products')); ?>" class="nav-link">
                  <i class="nav-icon fab fa-facebook-square"></i>
                  <p>Facebook Ads</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('untapped-product')); ?>" class="nav-link">
                  <i class="nav-icon fas fa-upload"></i>
                  <p>Untapped Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('trending-products')); ?>" class="<?php if(Route::currentRouteName() == 'trending-products'): ?> nav-link active <?php endif; ?> nav-link">
                  <i class="nav-icon fas fa-vector-square"></i>
                  <p>Trending Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('all-product')); ?>" class="<?php if(Route::currentRouteName() == 'all-product'): ?> nav-link active <?php endif; ?> nav-link">
                  <i class="nav-icon fab fa-adn"></i>
                  <p>All Products</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item <?php if(Route::currentRouteName() == 'ali-product' || Route::currentRouteName() == 'amz-product' || Route::currentRouteName() == 'store-product'): ?> menu-open <?php endif; ?>">
            <a href="#" class="<?php if(Route::currentRouteName() == 'ali-product' || Route::currentRouteName() == 'amz-product' || Route::currentRouteName() == 'store-product'): ?> nav-link active <?php endif; ?> nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Explores
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview pl-4 ml-2">
              <li class="nav-item">
                <a href="<?php echo e(route('ali-product')); ?>" class="<?php if(Route::currentRouteName() == 'ali-product'): ?> nav-link active <?php endif; ?> nav-link">
                  <img src="<?php echo e(asset('assets/img/ali.png')); ?>" style="width: 16px; margin-bottom: 6px;" alt="">
                  <p>AliExpress Explore</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('amz-product')); ?>" class="<?php if(Route::currentRouteName() == 'amz-product'): ?> nav-link active <?php endif; ?> nav-link">
                  <img src="<?php echo e(asset('assets/img/amz.png')); ?>" style="width: 16px; margin-bottom: 6px;" alt="">
                  <p>Amazon Explore</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('store-product')); ?>" class="<?php if(Route::currentRouteName() == 'store-product'): ?> nav-link active <?php endif; ?> nav-link">
                  <img src="<?php echo e(asset('assets/img/shp.png')); ?>" style="width: 18px; margin-bottom: 6px;" alt="">
                  <p>Store Explore</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="<?php if(Route::currentRouteName() == 'tutorial' || Route::currentRouteName() == 'FAQ' || Route::currentRouteName() == 'FAQ' || Route::currentRouteName() == 'contact-us'): ?> menu-open <?php endif; ?> nav-item">
            <a href="#" class="<?php if(Route::currentRouteName() == 'tutorial' ||Route::currentRouteName() == 'FAQ' || Route::currentRouteName() == 'FAQ' || Route::currentRouteName() == 'contact-us' ): ?> nav-link active <?php endif; ?> nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Help
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview pl-4 ml-2">
              <li class="nav-item">
                <a href="<?php echo e(url('tutorial')); ?>" class="<?php if(Route::currentRouteName() == 'tutorial'): ?> nav-link active <?php endif; ?> nav-link">
                  <i class="nav-icon fas fa-video"></i>
                  <p>Tutorials</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('FAQ')); ?>" class="<?php if(Route::currentRouteName() == 'FAQ'): ?> nav-link active <?php endif; ?> nav-link">
                  <i class="nav-icon fas fa-comment-dots"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(url('/contact-us-user')); ?>" class="<?php if(Route::currentRouteName() == 'contact-us'): ?> nav-link active <?php endif; ?> nav-link">
                  <i class="nav-icon fas fa-user-tag"></i>
                  <p>Contact Us</p>
                </a>
              </li>
            </ul>
          </li>
          <br>
          <li class="nav-item">
            <p>QUICK LINKS</p>
          </li>
          <li class="nav-item">
            <a href="https://www.facebook.com/ebutify" class="nav-link">
              <i class="nav-icon fab fa-facebook-square"></i>
              <p>Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.instagram.com/ebutify" class="nav-link">
              <i class="nav-icon fab fa-instagram-square"></i>
              <p>Instagram</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/eButify" class="nav-link">
              <i class="nav-icon fab fa-twitter-square"></i>
              <p>Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.pinterest.com/ebutify" class="nav-link">
              <i class="nav-icon fab fa-pinterest-square"></i>
              <p>Pinterest</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<?php echo $__env->yieldContent('content'); ?>

          <footer>
          <div class="row justify-content-center my-4">
            <copyright>&copy; 2020 - 2021 eButify Inc. All rights reserved</copyright>
          </div>
        </footer>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

<!-- overlayScrollbars -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/OverlayScrollbars.min.js"></script>

<!--Select2 from-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>

<script>

function initiateSlick(ajax){
   $(document) .ready(function(){
    $('.select2').select2({
      width: '100%'
    });
  });


   $(document).on("change", ".filter-item", function(){
           console.log("sorting updated...");
           $('#filterForm').submit();
         });

         // $(document).on("scroll", function(){
         //   console.log("you scrolled...");
         //   console.log(window.scrollY);
         //   if(window.scrollY >=1200)
         //   {
         //       //-- fetch data with ajax
               
         //       //-- feed current data container
         //   }
         // });

}

</script>

<?php echo $__env->yieldContent('js'); ?>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\New folder\ebutify_freelancer\resources\views/layoutsUser/user3.blade.php ENDPATH**/ ?>