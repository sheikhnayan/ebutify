<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eButify | Customer Subscriptions & Billing</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/css/OverlayScrollbars.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

  <!-- My style -->
  <link rel="stylesheet" href="assets/css/style.css">

</head>

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
          <span class="dropdown-item dropdown-header">Jone Due</span>
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <a href="customer-profile-page.html" class="dropdown-item">
            <i class="far fa-user mr-2"></i> My Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="customer-subscriptions-billing.html" class="dropdown-item">
            <i class="far fa-bell mr-2"></i> Subcription
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Logout</a>
        </div>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="assets/img/eButify.png" alt="e/Butify Logo" class="brand-image" style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="customer-ebutify-services-dashboard.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Product Research
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview pl-4 ml-2">
              <li class="nav-item">
                <a href="customer-facebook-ads-research.html" class="nav-link">
                  <i class="nav-icon fab fa-facebook-square"></i>
                  <p>Facebook Ads</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="customer-untapped-product-research.html" class="nav-link">
                  <i class="nav-icon fas fa-upload"></i>
                  <p>Untapped Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="customer-trending-product-research.html" class="nav-link">
                  <i class="nav-icon fas fa-vector-square"></i>
                  <p>Trending Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="customer-all-product-research.html" class="nav-link">
                  <i class="nav-icon fab fa-adn"></i>
                  <p>All Products</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Explores
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview pl-4 ml-2">
              <li class="nav-item">
                <a href="customer-ali-exprees-explore.html" class="nav-link">
                  <i class="nav-icon fas fa-envelope"></i>
                  <p>AliExpress Explore</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="customer-amazon-explore.html" class="nav-link">
                  <i class="nav-icon fas fa-envelope"></i>
                  <p>Amazon Explore</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="customer-store-explore.html" class="nav-link">
                  <i class="nav-icon fas fa-envelope"></i>
                  <p>Store Explore</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Help
                <i class="fas fa-angle-right right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview pl-4 ml-2">
              <li class="nav-item">
                <a href="customer-help-tutorial.html" class="nav-link">
                  <i class="nav-icon fas fa-video"></i>
                  <p>Tutorials</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="customer-FAQ.html" class="nav-link">
                  <i class="nav-icon fas fa-comment-dots"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="customer-contact-us.html" class="nav-link">
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
            <a href="customer-help-tutorial.html" class="nav-link">
              <i class="nav-icon fas fa-video"></i>
              <p>Tutorials</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="customer-FAQ.html" class="nav-link">
              <i class="nav-icon fas fa-comment-dots"></i>
              <p>FAQ</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="customer-contact-us.html" class="nav-link">
              <i class="nav-icon fas fa-user-tag"></i>
              <p>Contact Us</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


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
            <h3>Subscriptions</h3>
          </div>
        </div>
        <!-- /.row -->

        <div class="row subscriptions-box shadow p-3 mx-2">
          <div class="col-md-3 col-lg-3 mt-2">
            <img src="assets/img/recycle.png" class="img-fluid img-circle mx-auto d-block" alt="">
          </div>
          <div class="col-md-3 col-lg-3">
            <h5>Bronze Plan</h5>
            <p style="margin: 0;">$39.97 Per Month</p>
            <p style="margin: 0;">Started: Mar 09, 2021</p>
          </div>
          <div class="col-md-3 col-lg-3 text-center mt-1">
            <button type="button" class="btn active-btn">SUBSCRIPTION ACTIVE</button>
            <button type="button" class="btn active-btn">PLAN ACTIVE</button>
          </div>
          <div class="col-md-3 col-lg-3 text-center mt-4">
            <button type="button" class="btn cancel-plan-btn">Cancel Plan</button>
          </div>
        </div>
        <!-- /.row -->

        <div class="row contact-header px-3 py-2 mt-3">
          <div class="col-12">
            <h3>Billing</h3>
          </div>
        </div>
        <!-- /.row -->

        <div class="row bg-white shadow px-3 py-5 mx-2" style="border-radius: 10px;">
          <div class="col-sm-12 col-md-2 col-lg-2 my-2">
            <img src="assets/img/credit-card.png" class="img-fluid mx-auto d-block" alt="">
          </div>
          <div class="col-sm-12 col-md-7 col-lg-7">
            <div class="row card-info">
              <div class="col-4 text-center">
                <h6>Card Number</h6>
              </div>
              <div class="col-4 text-center">
                <h6>Card Type</h6>
              </div>
              <div class="col-4 text-center">
                <h6>Expires On</h6>
              </div>
            </div>
            <div class="row mx-3">
              <div class="col-4 text-center">
                <p>***9241</p>
              </div>
              <div class="col-4 text-center">
                <p>MasterCard</p>
              </div>
              <div class="col-4 text-center">
                <p>6/2023</p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-3 col-md-3 text-center">
            <button type="button" class="btn card-info-btn">Update card info</button>
          </div>
          <div class="col-12 billing-card-bottom">
            <div class="row">
              <div class="col-12 mt-3">
                <h5 class="m-0">Payment History</h5>
                <p>Add your business details to these invoices</p>
              </div>
              <div class="col-12">
                <div class="row bc-detail-1 ml-4">
                  <div class="col-2 text-center">
                    <h6>Status</h6>
                  </div>
                  <div class="col-2 text-center">
                    <h6>Description</h6>
                  </div>
                  <div class="col-4 text-center">
                    <h6>Payment Method	</h6>
                  </div>
                  <div class="col-2 text-center">
                    <h6>Invoice</h6>
                  </div>
                  <div class="col-2 text-center">
                    <h6>Amount</h6>
                  </div>
                </div>
                <div class="row bc-detail-2 ml-4">
                  <div class="col-2 text-center">
                    <span class="paid">PAID</span>
                  </div>
                  <div class="col-2 text-center">
                    <span>Bronze Plan</span>
                  </div>
                  <div class="col-4 text-center">
                    <img src="assets/img/credit-card.png" class="img-fluid" style="width: 18px;" alt="">
                    <span>xxxx xxxx xxxx 9241</span>
                  </div>
                  <div class="col-2 text-center">
                    <span>09-Mar-2021</span>
                  </div>
                  <div class="col-2 text-center">
                    <span>$39.97 USD</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

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
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

<!-- overlayScrollbars -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/OverlayScrollbars.min.js"></script>

<!--Select2 from-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script src="assets/js/script.js"></script>

<script>
   $(document) .ready(function(){
    $('.select2').select2({
      width: '100%'
    });
  });
</script>

</body>
</html>
