<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="canonical" href="https://ebutify.com/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="author" content="eButify">
    <meta name="google-site-verification" content="d9IRp33pr75pL73aVc0a6FDTx17zY-JvQpPB2J1hsug" />
    <title>The World&#039;s #1 Product Research Tool | eButify</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />


    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="870bb0db-1c1d-4fcc-bda0-d87cb20d073f";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>
<body>
    <header id="header">
        <section>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light navigation-menu">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/"><img src="{{ asset('front/images/eButify.png') }}" alt=""></a>
                        <button class="navbar-toggler" type="button" >
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-nav-menu me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="/pricing">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/privacy-policy">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact-us">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/blog">Blog</a>
                                </li>
                            </ul>
                            <div class="d-flex">
                                <a href="/login" class="btn btn-primary menu-user-btn" type="">Sign In</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
        <section>
            <div class="download_sticky text-center">
                <button type="button" class="btn btn-warning p-2">
                    <span class="mb-2 align-item-center justify-content-center">
                        <span class="mr-2 d-none d-sm-inline"></span>
                        <span class="">
                            <span class="download-number d-block font-weight-bold">500+</span>
                            <span class="small d-block mb-2">Satisfied Clients</span>
                        </span>
                        <div class="btn btn-primary btn-sm btn-block download-cta" style="width: 100%;">
                            <a href="/register" style="color: #fff">
                            <span class="d-none d-sm-inline">Get</span>
                            Started
                        </a>
                        </div>
                    </span>
                </button>
            </div>
        </section>
    </header>








    @yield('content')










    <section>
        <footer class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="footer-left">
                            <h3 class="footer-title-logo">eButify</h3>
                            <p class="footer-left-sub-title">Get in touch</p>
                        </div>
                        <div>
                            <form class="footer-left-from">
                                <label for="subscribe_email" class="sr-only">Email Address</label>
                                <input type="email" placeholder="Email Address" id="" class="footer-left-subscribe-mail-from">
                                <button type="submit" class="footer-subscribe-from-btn">Send <i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                        <ul class="footer-social-links">
                            <li class="footer-social-links-item footer-social-links-item-fb">
                                <a href="https://www.facebook.com/ebutify" target="blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="footer-social-links-item footer-social-links-item-tw">
                                <a href="https://twitter.com/eButify" target="blank"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="footer-social-links-item footer-social-links-item-in">
                                <a href="https://www.instagram.com/ebutify" target="blank"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="footer-social-links-item footer-social-links-item-youtube">
                                <a href="https://www.pinterest.com/ebutify" target="blank"><i class="fab fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-5 footer-middle-content">
                        <div class="row footer-menu">
                            <div class="clo-xs-12 col-sm-6 col-md-5">
                                <div class="footer-main-nav-content footer-mid-left-content">
                                    <h3 class="footer-main-title footer-mid-l-title">Company</h3>
                                    <ul class="footer-main-nav">
                                        <li><a href="/about">About Us</a></li>
                                        <li><a href="/contact-us">Contact Us</a></li>
                                        <li><a href="/blog">Blog</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="footer-main-nav-content footer-mid-right-content">
                                    <h3 class="footer-main-title footer-mid-r-title">Resources</h3>
                                    <ul class="footer-main-nav">
                                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                                        <li><a href="/refund-policy">Return Policy</a></li>
                                        <li><a href="/terms-and-conditions">Terms of service</a></li>
                                        <li><a href="/faq">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 footer-right-product-links">
                        <div class="footer-right-nav-item">
                            <p>eButify is a curation of the best new products, every day. We are manually adding winning products on a daily basis. Stop wasting money on bad products. Wanna be a successful store owner? Subscribe now and get access to our full winning products list with detailed analytics.</p>
                        </div>
                    </div>
                </div>
                <div class="row eb-footer-bottom">
                    <div class="col-12 footer-left-copyright text-center">
                        <copyright>&copy All Right Reserved by eButify</copyright>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <div class="scroll-top" style="opacity: 1;">
        <a href="javascript::void()" ><i class="scroll-top-icon fas fa-chevron-up"></i></a>
    </div>


<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<!-- Bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>


<!-- slick slider -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<!-- Custom js -->
<script type="text/javascript" src="{{ asset('front/js/custom.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.slick-slider').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            responsive: [
                {
                  breakpoint: 767,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
            ]
        });

    });
</script>

</body>
</html>