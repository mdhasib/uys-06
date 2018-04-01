@extends('layouts.master')
@section('title', 'Sportzen - Sports club & magazine HTML template')

{{--<!-- Favicons -->--}}
{{--<link rel="shortcut icon" href="assets/favicon/favicon.ico">--}}
{{--<link rel="apple-touch-icon" href="assets/favicon/apple-icon-57x57.png">--}}
{{--<link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">--}}
{{--<link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">--}}
{{--<link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">--}}

@section('content')
    <!-- page title & breadcrumbs start -->
    <div class="bdcmb-bg4 page-head parallax overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>sports news</h3>
                    </div>
                </div>
                <!-- /.colour-service-1-->
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">home</a></li>
                        <li>।</li>
                        <li>sports news</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.page-header -->
    <!-- page title & breadcrumbs end -->

    <div class="news-area pad60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9">
                    <div class="sports-news mb60">
                        <div class="highlights-bg h-bg9 mini-bg overlay mb40">
                            <a class="mfp-iframe video-play-btn" href="https://www.youtube.com/watch?v=Kbg777rhMrA"><i class="fa fa-youtube-play"></i></a>
                        </div>
                        <div class="sports-title mb20">
                            <h3>Klopp stands firm on Coutinho.</h3>
                            <p>By <span>Michael Bonose</span> / 15/12/2015 / 3 Comments / Categories: <span>Sports/Meeting/Corporate</span></p>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ea id, voluptate, iusto, ullam quos maiores animi quo tempore laboriosam laborum magni aliquam molestias aperiam ut libero ipsam sequi harum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ipsum excepturi, ad unde laudantium voluptatum fugiat molestiae in tempore, deserunt hic quibusdam, non nam quaerat eligendi ipsam laboriosam. Facilis, excepturi.</p> <br>
                        <p>Sea posse velit eloquentiam ad, an vix elitr intellegat posidonium. Quo ex semper blandit, ei vidisse oporteat sit. Ei mea lobortis iracundia persecuti, eu putent mentitum vix. Te tale facer animal quo. Ex insolens gubergren mea, ius ea erroribus adipiscing dissentias, his te altera virtute. Sale idque tacimates vim ei, nullam tibique neglegentur nam ea. Has error clita conclusionemque ad, eum ignota persius ex. Mediocrem eloquentiam vel no. Sit cibo commune sensibus cu. Nam consulatu philosophia te, et his wisi justo veniam. Nihil adipisci ut vel, nec lorem altera ut, pro ea duis suavitate.</p>
                        <p>Eu volutpat corrumpit nam, noster fastidii necessitatibus eam in. Errem solet ridens nec ei, in equidem complectitur mel, quo te nemore denique concludaturque. Ad vidisse vituperata nec, dicat tritani percipit te has. Ea vis semper noluisse molestiae, elit eripuit nominati at est. Eos te tation tractatos aliquando, est cu appareat reprimique.</p>
                        <div class="sports-arrow mt60">
                            <a href="#">previous</a>
                            <a href="#">next</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="recent-news mt20">
                        <div class="section-title news-title">
                            <h4><span>recent news</span></h4>
                        </div>
                        <div class="comment-box mt30">
                            <img src="assets/images/sports-news/2.jpg" alt="sport img">
                            <div class="user-cmnt">
                                <a href="#"> <span>Lorem ipsum dolor sit amet, consectetur</span></a>
                                <p>Donec mi orci, vestibulum a auctor eu, tristique a diam.</p>
                            </div>
                        </div>
                        <div class="comment-box mt30">
                            <img src="assets/images/sports-news/4.jpg" alt="sport img">
                            <div class="user-cmnt">
                                <a href="#">Donec mi orci, vestibulum a auctor</a>
                                <p>Donec mi orci, vestibulum a auctor eu, tristique a diam.</p>
                            </div>
                        </div>
                        <div class="comment-box mt30">
                            <img src="assets/images/sports-news/7.jpg" alt="sport img">
                            <div class="user-cmnt">
                                <a href="#">Vestibulum cursus ut massa sed malesuada</a>
                                <p>Donec mi orci, vestibulum a auctor eu, tristique a diam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bnr-img mt50 zoom">
                        <img class="full-width" src="assets/images/bg-banner/bnr1.jpg" alt="banner img">
                    </div>
                    <div class="follow-us-area mt50">
                        <div class="section-title news-title">
                            <h4> <span>follow us</span></h4>
                        </div>
                        <div class="link-box mt30">
                            <a href="#"><i class="fa fa-facebook"></i>faceboook</a>
                            <a href="#"><i class="fa fa-twitter"></i>twitter</a>
                            <a href="#"><i class="fa fa-google-plus-official"></i>google plus</a>
                            <a href="#"><i class="fa fa-linkedin"></i>linkedin</a>
                            <a href="#"><i class="fa fa-instagram"></i>instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection