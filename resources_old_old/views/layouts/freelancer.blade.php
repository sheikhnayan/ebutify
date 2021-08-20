<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
  <!--<![endif]-->

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>eButify Freelancer Dashboard</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" href="{{asset('apple-icon.png')}}" />
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}"/>

    <link
      rel="stylesheet"
      href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}"
    />
    <link rel="stylesheet" href="{{asset('vendors/themify-icons/css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('vendors/flag-icon-css/css/flag-icon.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/cs-skin-elastic.css')}}" />
    <link rel="stylesheet" href="{{asset('css/jqvmap.min.css')}}" />

    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <link
      href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800')}}"
      rel="stylesheet"
      type="text/css"
    />

    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>


    <script src="https://js.stripe.com/v3/"></script>
    
  </head>

  <body>
    <!-- Left Panel -->

    <aside id="left-panel top-panel" class="left-panel">
      <nav class="navbar navbar-expand-sm navbar-default">
        <div class="navbar-header">
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#main-menu"
            aria-controls="main-menu"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="./"
            > <span class="logo">eButify Freelancer Panel</span> </a>
          <a class="navbar-brand hidden" href="./"
            ><img src="{{asset('images/logo2.png')}}" alt="Logo"
          /></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="">
              <a href="{{route ('freelancer-dashboard') }}">
                <i class="menu-icon fa fa-dashboard"></i>Dashboard
              </a>
            </li>

                   <li class="">
              <a href="{{route ('work-report')}}">
                <i class="menu-icon fa fa-wifi"></i>Report
              </a>
            </li>
            
              <li class="">
              <a href="{{route ('message')}}">
                <i class="menu-icon fa fa-envelope"></i>Message
              </a>
            </li>
              <li class="">
              <a href="{{route ('product-research') }}">
                <i class="menu-icon fa fa-search"></i>Product Research
              </a>
            </li>

          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </nav>
    </aside>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
      <!-- Header-->
      <header id="header" class="header">
        <div class="header-menu">
          <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"
              ><i class="fa fa fa-bars"></i
            ></a>
            <div class="header-left">
             
              

           

              
            </div>
          </div>

          <div class="col-sm-5">



            
            <div class="user-area dropdown px-3 float-right">
              <a
                href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <img
                  class="user-avatar rounded-circle"
                  src="{{asset('images/admin.jpg')}}"
                  alt="User Avatar"
                />
              </a>

              <div class="user-menu dropdown-menu">
                <a class="nav-link" href="{{route ('myprofile') }}"
                  ><i class="fa fa-user"></i> My Profile</a
                >

                <a class="nav-link" href="#"
                  ><i class="fa fa-user"></i> Notifications
                  <span class="count">13</span></a
                >

                <a class="nav-link" href="#"
                  ><i class="fa fa-cog"></i> Settings</a
                >

                <a class="nav-link" href="{{route ('logout')}}"
                  ><i class="fa fa-power-off"></i> Logout</a
                >
              </div>
            </div>

               <div class="user-area dropdown float-right">
              <a
                href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
               <i class="ti-email"></i>
                  <span class="count bg-primary">9</span>
              </a>

              
              

              <div class="user-menu dropdown-menu">
                
                 <div class="card1 p-2">
                 <table>
                   <tr> <td><i class="fa fa-envelope"> <span class="">You have 1 Message</span>  </i></td> </tr> 
                   <tr><td><hr></td></tr>
                    <tr> <td><i class="fa fa-envelope"> You have 2 Message </i></td> </tr>
                    <tr><td><hr></td></tr>
                    <tr> <td><i class="fa fa-envelope"> You have 2 Message </i></td> </tr>
                 </table>
                </div>
                
              </div>
            </div>

             <div class="user-area dropdown px-2 float-right">
              <a
                href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                  
                <i class="fa fa-bell"></i>
                  <span class="count bg-danger">5</span>
              </a>
              </a>

              <div class="user-menu dropdown-menu">
                <div class="card1 p-2">
                 <table>
                   <tr> <td><i class="fa fa-bell"> <span class="text-danger">You have 1 Notification</span>  </i></td> </tr> 
                   <tr><td><hr></td></tr>
                    <tr> <td><i class="fa fa-bell"> You have 2 Notification </i></td> </tr>
                    <tr><td><hr></td></tr>
                    <tr> <td><i class="fa fa-bell"> You have 2 Notification </i></td> </tr>
                 </table>
                </div>
              
              </div>
            </div>
            <!--Notifiaction start-->

           

                <!--Notifiaction End-->
          </div>
        </div>
      </header>
      <!-- /header -->
      <!-- Header-->

      @yield('content')

    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <script src="{{asset('vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{asset('js/widgets.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('https://cdn.tiny.cloud/1/onjlznuqdmec3dv72t7t861lw7bmdasywklugogscycfh6qp/tinymce/5/tinymce.min.js')}}" referrerpolicy="origin"></script>

    <script>
      (function ($) {
        "use strict";

        jQuery("#vmap").vectorMap({
          map: "world_en",
          backgroundColor: null,
          color: "#ffffff",
          hoverOpacity: 0.7,
          selectedColor: "#1de9b6",
          enableZoom: true,
          showTooltip: true,
          values: sample_data,
          scaleColors: ["#1de9b6", "#03a9f5"],
          normalizeFunction: "polynomial",
        });
      })(jQuery);
    </script>
  </body>
</html>
