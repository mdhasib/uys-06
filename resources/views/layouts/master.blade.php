<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('meta')
    <!-- Favicons -->
    <link rel="shortcut icon" href="{!! asset('assets/favicon/favicon.ico') !!}">
{{--
    <link rel="apple-touch-icon" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
--}}
<!--All Css Here-->

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="{!! asset('assets/css/vendor/bootstrap.min.css') !!}">
    <!--Font-Awesome Css-->
    <link rel="stylesheet" href="{!! asset('assets/css/vendor/font-awesome.min.css') !!}">
    <!--Owl-Carousel Css-->
    <link rel="stylesheet" href="{!! asset('assets/css/vendor/owl.carousel.min.css') !!}">
    <!--Animate Css-->
    <link rel="stylesheet" href="{!! asset('assets/css/vendor/animate.css') !!}">
    <!--magnific popup Css-->
    <link rel="stylesheet" href="{!! asset('assets/css/vendor/magnific-popup.css') !!}">
    <!--Jquery Ui Css-->
    <link rel="stylesheet" href="{!! asset('assets/css/vendor/jquery-ui.min.css') !!}">
    <!--Style Css-->
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
    <!--Responsive Css-->
    <link rel="stylesheet" href="{!! asset('assets/css/responsive.css') !!}">

    @yield('css')
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- preloader -->
<div class="preloader">
    <div class='loader'>
        <div class='loader--dot'></div>
        <div class='loader--dot'></div>
        <div class='loader--dot'></div>
        <div class='loader--dot'></div>
        <div class='loader--dot'></div>
        <div class='loader--dot'></div>
        <div class='loader--text'></div>
    </div>
</div>
<!-- preloader -->

<!--main-container-->
<div class="main-container">

    <!-- /.header start -->
    <header>
        <div class="nav-menu" id="sticky-menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="index.html"><img src="assets/images/logo/logo.png"  alt="BEFIT logo"></a>
                            <button class="navbar-toggler d-md-inlline d-xl-none" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fa fa-bars"></span>
                            </button>
                        </div>
                    </div>
                    <!--col end-->
                    <div class="col-lg-8">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav ml-auto">
                                    {{--<li class="nav-item dropdown active">
                                        <a class="nav-link dropdown-toggle" href="{!! url('/') !!}" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">home</a>
                                        <div class="dropdown-menu animation  slideUpIn">
                                            <a class="dropdown-item" href="index.html">home1</a>
                                            <a class="dropdown-item" href="home2.html">home2</a>
                                            <a class="dropdown-item" href="home3.html">home3</a>
                                        </div>
                                    </li>--}}
                                    <li class="nav-item">
                                        <a class="nav-link" href="{!! url(('/')) !!}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{!! url(('clublists')) !!}">Teams</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{!! url('fixtures') !!}">fixtures</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{!! url('results') !!}">results</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{!! url('point-tables') !!}">point table</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{!! url('index') !!}" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">sports</a>
                                        <div class="dropdown-menu animation  slideUpIn">
                                            <a class="dropdown-item" href="{!! url('sports') !!}">sports</a>
                                            <a class="dropdown-item" href="{!! url('sports2') !!}">sports 2</a>
                                            <a class="dropdown-item" href="{!! url('single-page') !!}">single page</a>
                                        </div>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link " href="#">more</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!--col end-->
                    <div class="col-lg-1">
                        <ul class="navbar-nav">
                            <li class="nav-item d-none d-lg-inline">
                                <div class="icon-menu">
                                    <ul>
                                        <li><a href="#" class="search-btn search-box-btn"><i class="fa fa-search"></i></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--col end-->
                </div>
                <!--row end-->
            </div>
        </div>
        @yield('slide')
    </header>
    <!--header end-->

    @yield('content')

    <footer>
        <div class="footer-area bg2 parallax overlay2 pad60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title ">
                            <h4> <span class="wht-txt">newsletter</span></h4>
                        </div>
                    </div>
                    <!--col end-->
                    <div class="col-md-12">
                        <div class="subscribe">
                            <form action="#">
                                <input class="name" type="text" placeholder="youremail@domain.com">
                            </form>
                            <a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!--col end-->
                </div>
                <!--row end-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-box pt60">
                            <div class="footer-content add">
                                <div class="footer-logo footer-content">
                                    <img src="assets/images/logo/logo.png" alt="footer logo">
                                </div>
                                <p class="pt30">Lorem ipsum dolor sit amet, ei ubique fastidii vim. Elitr feugait complectitur eu pro, sea audire ponderum eleifend cu. Vim at fuisset.</p>
                                <div class="add-info">
                                    <p><a href="#"><i class="fa fa-map-marker"></i></a>23 New Design Street, Melbourne</p>
                                    <p><a href="#"><i class="fa fa-location-arrow"></i></a><a href="http://sitetemplate.demo.ithemeslab.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b4c7c4dbc6c0cef4d3d9d5ddd89ad7dbd9">[email&#160;protected]</a></p>
                                    <p class="mb-0"><a href="#"><i class="fa fa-phone" ></i></a>+880-123-456-7890</p>
                                </div>
                            </div>
                            <div class="footer-content">
                                <div class="ftr-title xs-mt-40">
                                    <h4>partners</h4>
                                </div>
                                <div class="partners pt30">
                                    <a href="#">fantasy football</a>
                                    <a href="#">super 6</a>
                                    <a href="#">sky Sports Pub Finder</a>
                                    <a href="#">Living for Sport</a>
                                    <a href="#">Planet Rugby</a>
                                    <a href="#">Cricket365</a>
                                </div>
                            </div>
                            <div class="footer-content">
                                <div class="ftr-title xs-mt-40">
                                    <h4>latest post</h4>
                                </div>
                                <div class="news-info pt30">
                                    <div class="news-detail nws-bar zoom">
                                        <img src="assets/images/footer/1.jpg" alt="footer img">
                                        <p>Set yourself the challenge of doing the bare minimum.</p>
                                    </div>
                                    <div class="news-detail zoom">
                                        <img src="assets/images/footer/2.jpg" alt="footer img">
                                        <p>Body fat percentage: what does it really mean?</p>
                                    </div>
                                    <div class="news-detail zoom">
                                        <img src="assets/images/footer/3.jpg" alt="footer img">
                                        <p class="mb-0">This treatment sounded just what I was looking for.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-content">
                                <div class="ftr-title xs-mt-40">
                                    <h4>football</h4>
                                </div>
                                <div class="partners pt30">
                                    <a href="#">FIFA 2015</a>
                                    <a href="#">Copa 2015</a>
                                    <a href="#">UEFA Europa League</a>
                                    <a href="#">La Liga League</a>
                                    <a href="#">Uro 2014</a>
                                    <a href="#">Africa 2015</a>
                                </div>
                            </div>
                            <div class="footer-content">
                                <div class="ftr-title xs-mt-40">
                                    <h4>sportz channel</h4>
                                </div>
                                <div class="partners pt30">
                                    <a href="#">Sports Main Event</a>
                                    <a href="#">S. Sports Premier League</a>
                                    <a href="#">Sky Sports Football</a>
                                    <a href="#">Sky Sports Cricket</a>
                                    <a href="#">Sky Sports Golf</a>
                                    <a href="#">Sky Sports Action</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--col end-->
                </div>
                <!--row end-->
            </div>
        </div>
        <div class="copyright pad30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Copyright © 2018 designed by <span>iThemeslab.</span> All Rights Reserved</h4>
                    </div>
                    <!--col end-->
                </div>
                <!--row end-->
            </div>
        </div>
    </footer>

</div>
<!--main-container-->

<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="fa fa-close"></span></div>
    <div class="popup-inner">

        <div class="search-form">
            <form method="post" action="http://sitetemplate.demo.ithemeslab.com/sportzen/demo/index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
                        <input type="submit" value="Search" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
        </div>
    </div>
</div>
<!--End Search Popup-->

<!-- back to to btn start -->
<div id="back-to-top"></div>
<!-- back to to btn end -->


<!--All Js Here-->
<!-- jquery latest version -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
<!--Migrate Js-->
<script src="{!! asset('assets/js/vendor/jquery-migrate.js') !!}"></script>
<!--Popper Js-->
<script src="{!! asset('assets/js/vendor/popper-1.12.3.min.js') !!}"></script>
<!--Bootstrap Js-->
<script src="{!! asset('assets/js/vendor/bootstrap.min.js') !!}"></script>
<!--Owl-Carousel Js-->
<script src="{!! asset('assets/js/vendor/owl.carousel.min.js') !!}"></script>
<!--magnific-popup js-->
<script src="{!! asset('assets/js/vendor/jquery.magnific-popup.min.js') !!}"></script>
<!--countdown Js-->
<script src="{!! asset('assets/js/vendor/countdown.js') !!}"></script>
<!--counter Js-->
<script src="{!! asset('assets/js/vendor/jquery.counterup.min.js') !!}"></script>
<script src="{!! asset('assets/js/vendor/waypoints-jquery.js') !!}"></script>
<!--Jquery Ui Js-->
<script src="{!! asset('assets/js/vendor/jquery-ui.min.js') !!}"></script>
<!--Wow Js-->
<script src="{!! asset('assets/js/vendor/wow.min.js') !!}"></script>

<!-- template main js file -->
<script src="{!! asset('assets/js/main.js') !!}"></script>

@yield('script')

</body>
<!-- Mirrored from sitetemplate.demo.ithemeslab.com/sportzen/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Mar 2018 05:25:14 GMT -->
</html>
