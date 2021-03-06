@extends('layouts.master')
@section('title', 'CLUBLIST')
@section('content')

@section('meta')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="iThemesLab">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection
    {{--<!-- Favicons -->--}}
    {{--<link rel="shortcut icon" href="assets/favicon/favicon.ico">--}}
    {{--<link rel="apple-touch-icon" href="assets/favicon/apple-icon-57x57.png">--}}
    {{--<link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">--}}
    {{--<link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">--}}
    {{--<link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">--}}


@section('content')
    <!-- page title & breadcrumbs start -->
    <div class="bdcmb-bg1 page-head parallax overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>barcelona</h3>
                    </div>
                </div>
                <!-- /.colour-service-1-->
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">home</a></li>
                        <li>।</li>
                        <li>club list</li>
                        <li>।</li>
                        <li>barcelona</li>
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

    <!--club-list-area start-->
    <div class="club-list-area pad60">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-3">
                    <div class="club-authority">
                        <img src="assets/images/club-logo/logo/barcelona.png" alt="club logo">
                        <h4 class="mt30">fc barcelona</h4>
                        <p>football club</p>
                        <div class="authority-box mt30">
                            <p><strong>Established in</strong> : 1902</p>
                            <p><strong>Arena/Stadium</strong> : Camp Nou</p>
                            <p><strong>Manager</strong> : Ernesto Valverde</p>
                            <p><strong>Training ground</strong>: Ciutat Esportiva Joan Gamper </p>
                            <p><strong>Coach</strong> : Ernesto Valverde </p>
                            <p><strong>Leagues</strong> : UEFA Champions League, La Liga,Copa del Rey, Supercopa de España</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9">
                    <div class="club-history">
                        <div class="section-title mb30 xs-mt-30">
                            <h4><span>club history</span></h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium est, consequatur laudantium cum ab fugit inventore unde dolorem, ipsum dicta dolores aut libero fugiat hic ut nihil, cumque explicabo ducimus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit ducimus suscipit nulla libero corrupti totam dolores.</p> <br>
                        <p>Aenean accumsan vulputate erat sed sollicitudin. Donec porttitor rutrum justo a ullamcorper. Etiam venenatis condimentum metus sit amet dignissim. Morbi venenatis nisl lobortis neque cursus vehicula. Proin in convallis eros. Sed posuere, sapien sed tempus facilisis, arcu velit tincidunt nulla, at accumsan lacus ante accumsan tellus. In a condimentum dolor. Sed feugiat consectetur sapien, a feugiat nunc elementum ut. Mauris nisi felis, auctor et sem quis, condimentum condimentum odio. Aenean id eleifend nulla, nec blandit enim.</p>
                        <div class="history-img pad40">
                            <img class="img-fluid" src="assets/images/club-list/1.jpg" alt="club img">
                            <h3 class="mt20">Why would Neymar leave Barca? A look at why Neymar might leave Barcelona for Paris St-Germain, with expert analysis and opinion.</h3>
                        </div>
                    </div>
                    <div class="team-box">
                        <div class="tab-content mt40" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row">
                                    @foreach($clubs as $club)
                                        <div class="col-lg-4 col-md-12">
                                            <div class="team-mem mb30">
                                                <img class="full-width" src="{!! asset('file_uploads/'.$club->flag_img_path) !!}" alt="player img">
                                                <h5 class="mt10">{!! $club->team_name !!}</h5>
                                                <p>{{$club->continent_name}}</p>
                                                <p>{!! $groups[$club->group_id] !!}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/2.jpg" alt="player img">
                                            <h5 class="mt10">Wes Hoolahan</h5>
                                            <p>forward</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/3.jpg" alt="player img">
                                            <h5 class="mt10">james mcClean</h5>
                                            <p>midfielder</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/4.jpg" alt="player img">
                                            <h5 class="mt10">robbie brady</h5>
                                            <p>midfielder</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/5.jpg" alt="player img">
                                            <h5 class="mt10">Wes Hoolahan</h5>
                                            <p>forward</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/6.jpg" alt="player img">
                                            <h5 class="mt10">james mcClean</h5>
                                            <p>midfielder</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/7.jpg" alt="player img">
                                            <h5 class="mt10">robbie brady</h5>
                                            <p>midfielder</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/8.jpg" alt="player img">
                                            <h5 class="mt10">Wes Hoolahan</h5>
                                            <p>forward</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem mb30">
                                            <img class="full-width" src="assets/images/club-list/player/9.jpg" alt="player img">
                                            <h5 class="mt10">james mcClean</h5>
                                            <p>midfielder</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem">
                                            <img class="full-width" src="assets/images/club-list/player/10.jpg" alt="player img">
                                            <h5 class="mt10">Wes Hoolahan</h5>
                                            <p>forward</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="team-mem">
                                            <img class="full-width" src="assets/images/club-list/player/11.jpg" alt="player img">
                                            <h5 class="mt10">james mcClean</h5>
                                            <p>midfielder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--club-list-area end-->

@endsection


