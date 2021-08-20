<!DOCTYPE html>
<html lang="en">

<?php echo $__env->yieldContent('head'); ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="assets/img/eButify.png" alt="eButifyLogo">
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
              <img src="assets/img/user1-128x128.jpg" class="img-circle " alt="Jone Due">
            </div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?php echo e(Auth::user()->name); ?></span>
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <a href="<?php echo e(route('profile')); ?>" class="dropdown-item">
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
            <a href="/dashboard" class="<?php if(Route::currentRouteName() == 'freelancer-dashboard'): ?> nav-link active  <?php endif; ?> nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="/ebutify-services" class="<?php if(Route::currentRouteName() == 'ebutify-services'): ?> nav-link active  <?php endif; ?> nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Services
              </p>
            </a>
          </li>
          <li class="<?php if(Route::currentRouteName() == 'all-projects'): ?> menu-open <?php endif; ?> nav-item">
            <a href="#" class="<?php if(Route::currentRouteName() == 'all-projects'): ?> nav-link active  <?php endif; ?> nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                My Project
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview pl-4 ml-2">
              <li class="nav-item">
                <a href="/all-projects" class="<?php if(Route::currentRouteName() == 'all-projects'): ?> nav-link active  <?php endif; ?> nav-link">
                  <p>All Projects</p>
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
                <a href="<?php echo e(url('contact-us')); ?>" class="<?php if(Route::currentRouteName() == 'contact-us'): ?> nav-link active <?php endif; ?> nav-link">
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
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


<?php echo $__env->yieldContent('content'); ?>


  <footer class="text-center mt-4">
          <copyright class="costomer-copyright">&copy; 2020 - 2021 eButify Inc. All rights reserved</copyright>
        </footer>


      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\New folder\ebutify_freelancer\resources\views/user_services/layouts/main.blade.php ENDPATH**/ ?>