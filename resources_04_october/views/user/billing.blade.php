<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Billing</title>
  <meta name="description" content="eButify Dashboard" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="apple-touch-icon" href="" />
  <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" />
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css" />
  <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css" />
  <link rel="stylesheet" href="../assets/css/style.css" />
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
</head>

<body>
  <!-- Left Panel -->
  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="../index.html"><i class="menu-icon fa fa-dashboard"></i>Dashboard</a>
          </li>

          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon fa fa-shopping-cart"></i>Product research</a>
              <ul class="sub-menu children dropdown-menu">
                <li><i class="fa fa-puzzle-piece"></i><a href="../pages/fbads.html">Facebook Ads</a></li>
                <li><i class="fa fa-id-card-o"></i><a href="../pages/trending.html">Trending Products</a></li>
                <li><i class="fa fa-exclamation-triangle"></i><a href="../pages/ontherise.html">Untapped Product</a></li>
                <li><i class="fa fa-fire"></i><a href="../pages/allproduct.html">All Products</a></li>
              </ul>
          </li>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon fa fa-cog"></i>Explorers</a>
              <ul class="sub-menu children dropdown-menu">
                <li><i class="fa fa-shopping-basket"></i><a href="../pages/aliexpress.html">AliExpress Explorer</a></li>
                <li><i class="fa fa-amazon"></i><a href="../pages/amazon.html">Amazon Explorer</a></li>
                <li><i class="fa fa-shopping-cart"></i><a href="../pages/shopifystore.html">Stores Explorer</a></li>
              </ul>
          </li>

          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon fa fa-info"></i>Help</a>
            <ul class="sub-menu children dropdown-menu">
              <li>
                <i class="menu-icon fa fa-video-camera"></i><a href="../pages/tutorial.html">Tutorials</a>
              </li>

              <li>
                <i class="menu-icon fa fa-th"></i><a href="../pages/succes.html">Success Academy</a>
              </li>

              <li>
                <i class="menu-icon fa fa-phone"></i><a href="../pages/contact.html">Contract Us</a>
              </li>
              <li>
                <i class="menu-icon fa fa-facebook-official"></i><a href="#">join Private group</a>
              </li>
              <li>
                <i class="menu-icon fa fa-facebook"></i><a href="#">Like Facebook</a>
              </li>
              <li>
                <i class="menu-icon fa fa-twitter"></i><a href="#">Follow Twitter</a>
              </li>
              <li>
                <i class="menu-icon fa fa-youtube-play"></i><a href="#">Subscribe Youtube</a>
              </li>
            </ul>
          </li>

          <li class="menu-title">Quick Links</li>
          <!-- /.menu-title -->

          <li>
            <a href="../pages/tutorial.html"><i class="menu-icon fa fa-video-camera"></i>Tutorials
            </a>
          </li>

          <li>
            <a href="../pages/faq.html"><i class="menu-icon fa fa-question"></i>FAQ
            </a>
          </li>

          <li>
            <a href="../pages/contact.html"><i class="menu-icon fa fa-phone"></i>Contact us</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </nav>
  </aside>

  <!-- /#left-panel -->
  <!-- Right Panel -->

  <div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
      <div class="top-left">
        <div class="navbar-header">
          <a class="navbar-brand" href="../index.html">eButify</a>
          <a class="navbar-brand hidden" href="./">eButify</a>
          <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
      </div>
      <div class="top-right">
        <div class="header-menu bg-lighte">
          <div class="header-left">
            <button class="search-trigger">
              <i class="fa fa-search"></i>
            </button>
            <div class="form-inline">
              <form class="search-form">
                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search" />
                <button class="search-close" type="submit">
                  <i class="fa fa-close"></i>
                </button>
              </form>
            </div>

            <div class="dropdown for-notification">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" aria-haspopup="true"
                aria-expanded="false">
                <i class="fa fa-shopping-cart"></i>
              </button>
            </div>

            <div class="dropdown for-notification">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" aria-haspopup="true"
                aria-expanded="false">
                <i class="fa fa-heart"></i>
              </button>
            </div>

            <div class="dropdown for-notification">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell"></i>
                <span class="count bg-danger">3</span>
              </button>
              <div class="dropdown-menu" aria-labelledby="notification">
                <p class="red">You have 3 Notification</p>
                <a class="dropdown-item media" href="#">
                  <i class="fa fa-check"></i>
                  <p>Server #1 overloaded.</p>
                </a>
                <a class="dropdown-item media" href="#">
                  <i class="fa fa-info"></i>
                  <p>Server #2 overloaded.</p>
                </a>
                <a class="dropdown-item media" href="#">
                  <i class="fa fa-warning"></i>
                  <p>Server #3 overloaded.</p>
                </a>
              </div>
            </div>

            <div class="dropdown for-message">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-envelope"></i>
                <span class="count bg-primary">4</span>
              </button>
              <div class="dropdown-menu" aria-labelledby="message">
                <p class="red">You have 4 Mails</p>
                <a class="dropdown-item media" href="#">
                  <span class="photo media-left"><img alt="avatar" src="../images/avatar/1.jpg" /></span>
                  <div class="message media-body">
                    <span class="name float-left">Jonathan Smith</span>
                    <span class="time float-right">Just now</span>
                    <p>Hello, this is an example msg</p>
                  </div>
                </a>
                <a class="dropdown-item media" href="#">
                  <span class="photo media-left"><img alt="avatar" src="../images/avatar/2.jpg" /></span>
                  <div class="message media-body">
                    <span class="name float-left">Jack Sanders</span>
                    <span class="time float-right">5 minutes ago</span>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                  </div>
                </a>
                <a class="dropdown-item media" href="#">
                  <span class="photo media-left"><img alt="avatar" src="../images/avatar/3.jpg" /></span>
                  <div class="message media-body">
                    <span class="name float-left">Cheryl Wheeler</span>
                    <span class="time float-right">10 minutes ago</span>
                    <p>Hello, this is an example msg</p>
                  </div>
                </a>
                <a class="dropdown-item media" href="#">
                  <span class="photo media-left"><img alt="avatar" src="../images/avatar/4.jpg" /></span>
                  <div class="message media-body">
                    <span class="name float-left">Rachel Santos</span>
                    <span class="time float-right">15 minutes ago</span>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <img class="user-avatar rounded-circle" src="../images/admin.jpg" alt="User Avatar" />
            </a>

            <div class="user-menu dropdown-menu">
              <a class="nav-link" href="../pages/password.html"><i class="fa fa-lock"></i>Password</a>

              <a class="nav-link" href="../pages/subscriptions.html"><i class="fa fa-user"></i>subcription



                <a class="nav-link" href="../pages/billing.html"><i class="fa fa-credit-card"></i>Billing</a>



                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- /#header -->
    <!-- Content -->
    <div class="content">
      <div class="container-fluid">
        <h1>Billing</h1>

        <div class="card p-3">
          <div class="row">
            <div class="col-lg-2 col-md-6 ">
              <i class="p-3 fa credit fa-credit-card"></i>


            </div>

            <div class="col-lg-6 col-md-6">
              <table class="table">
                <tr>
                  <td>Card Number</td>
                  <td>Type</td>
                  <td>Expires On</td>
                </tr>

                <tr>
                  <td>*** 9241</td>
                  <td>MasterCard</td>
                  <td>6/2023</td>
                </tr>
              </table>


            </div>

            <div class="col-lg-1"></div>

            <div class="col-lg-3 col-md-6">
              <button class="m-4 btn btn-primary"><a href="#" class="text-light" data-toggle="modal"
                  data-target="#exampleModal">Update card info</a></button>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <button type="button" class="close text-right pr-3" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>


                  <div class="modal-body text-center">
                    <b class="text-center">eButify Inc</b>
                    <hr width="50%">

                    <div class="p-4">
                      <div class="row">
                        <input class="form-control" placeholder="card number" type="number" name="" id="">
                        <table class="border border-borderless">
                          <tr>
                            <td><input class="form-control" placeholder="MM/YY" type="number" name="" id=""></td>
                            <td><input class="form-control" placeholder="CVC" type="number" name="" id=""></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <br>
          <hr>
          <div class="row ">
            <br>
            <div class="col-lg-12 px-5">
              <h4 class="tx1">Payment History</h4>
              <p>Add your business details to these invoices</p>


              <table class="table table-bordered border-light">
                <tr class="text-center">
                  <td>Status</td>
                  <td>Description</td>
                  <td>Payment Method</td>
                  <td>Invoice</td>
                  <td>Amount</td>
                </tr>

                <tr class="text-center">
                  <td><span class="lebel2">PAID</span> </td>
                  <td>Awesome</td>
                  <td><i class="p-3 fa  fa-credit-card"></i> xxxx xxxx xxxx 9241</td>
                  <td> <a href="#">09-Mar-2021</a></td>
                  <td>$39.97 USD</td>
                </tr>

              </table>


            </div>

          </div>

        </div>
        <div class="space"></div>
      </div>
    </div>

    <div class="animated fadeIn">
      <!-- Widgets  -->

      <div class="clearfix"></div>

      <!-- /#add-category -->
    </div>
    <!-- .animated -->
  </div>
  <!-- /.content -->
  <div class="clearfix"></div>
  <!-- Footer -->
  <div class="condtainer pt-3">
    <p class="text-center">© 2020 - 2021 eButify Inc. All rights reserved</p>
  </div>
  <!-- /.site-footer -->
  </div>
  <!-- /#right-panel -->

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>