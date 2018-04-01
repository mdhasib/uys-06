@extends('layouts.master')

@section('title','point-table')

{{--<!-- Favicons -->--}}
{{--<link rel="shortcut icon" href="assets/favicon/favicon.ico">--}}
{{--<link rel="apple-touch-icon" href="assets/favicon/apple-icon-57x57.png">--}}
{{--<link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">--}}
{{--<link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">--}}
{{--<link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">--}}

@section('content')
    <!-- page title & breadcrumbs start -->
    <div class="bdcmb-bg3 page-head parallax overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3>la liga point table</h3>
                    </div>
                </div>
                <!-- /.colour-service-1-->
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="index.html">home</a></li>
                        <li>।</li>
                        <li>point table</li>
                        <li>।</li>
                        <li>la liga </li>
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

    <div class="point-table pad60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">no</th>
                                <td colspan="4">team</td>
                                <th scope="col">p</th>
                                <th scope="col">w</th>
                                <th scope="col">d</th>
                                <th scope="col">l</th>
                                <th scope="col">GS</th>
                                <th scope="col">GA</th>
                                <th scope="col">+/-</th>
                                <th scope="col">PTS</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td colspan="4" class="team">
                                    <div class="team-box"><img class="xs-img" src="assets/images/club-logo/logo/barcelona.png" alt="">
                                        <span>barcelona</span></div>
                                </td>
                                <td>25</td>
                                <td>8</td>
                                <td>1</td>
                                <td>3</td>
                                <td>95</td>
                                <td>18</td>
                                <td>+75</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td colspan="4" class="team">
                                    <div class="team-box"><img class="xs-img" src="assets/images/club-logo/logo/realmadrid.png" alt="">
                                        <span>real madrid</span></div>
                                </td>
                                <td>25</td>
                                <td>8</td>
                                <td>1</td>
                                <td>3</td>
                                <td>95</td>
                                <td>18</td>
                                <td>+75</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="4" class="team">
                                    <div class="team-box"><img class="xs-img" src="assets/images/club-logo/logo/sevilla.png" alt="">
                                        <span>sevilla</span></div>
                                </td>
                                <td>25</td>
                                <td>8</td>
                                <td>1</td>
                                <td>3</td>
                                <td>95</td>
                                <td>18</td>
                                <td>+75</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td colspan="4" class="team">
                                    <div class="team-box"><img class="xs-img" src="assets/images/club-logo/logo/malaga.png" alt="">
                                        <span>malaga</span></div>
                                </td>
                                <td>25</td>
                                <td>8</td>
                                <td>1</td>
                                <td>3</td>
                                <td>95</td>
                                <td>18</td>
                                <td>+75</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td colspan="4" class="team">
                                    <div class="team-box"><img class="xs-img" src="assets/images/club-logo/logo/chelsea.png" alt="">
                                        <span>chelsea</span></div>
                                </td>
                                <td>25</td>
                                <td>8</td>
                                <td>1</td>
                                <td>3</td>
                                <td>95</td>
                                <td>18</td>
                                <td>+75</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td colspan="4" class="team">
                                    <div class="team-box"><img class="xs-img" src="assets/images/club-logo/logo/atletico.png" alt="">
                                        <span>athletico club</span></div>
                                </td>
                                <td>25</td>
                                <td>8</td>
                                <td>1</td>
                                <td>3</td>
                                <td>95</td>
                                <td>18</td>
                                <td>+75</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td colspan="4" class="team">
                                    <div class="team-box"><img class="xs-img" src="assets/images/club-logo/logo/alves.png" alt="">
                                        <span>alves</span></div>
                                </td>
                                <td>25</td>
                                <td>8</td>
                                <td>1</td>
                                <td>3</td>
                                <td>95</td>
                                <td>18</td>
                                <td>+75</td>
                                <td>82</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td colspan="4" class="team">
                                    <div class="team-box"><img class="xs-img" src="assets/images/club-logo/logo/arsenal.png" alt="">
                                        <span>arsenal</span></div>
                                </td>
                                <td>25</td>
                                <td>8</td>
                                <td>1</td>
                                <td>3</td>
                                <td>95</td>
                                <td>18</td>
                                <td>+75</td>
                                <td>82</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection