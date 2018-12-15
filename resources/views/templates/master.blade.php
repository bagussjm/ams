<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title> @yield('title')</title>

    <!-- Favicons-->
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->
    <link href="{{ asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="{{ asset('css/custom/custom-style.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="{{asset('js/plugins/prism/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{asset('js/plugins/perfect-scrollbar/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="{{ asset('js/plugins/chartist-js/chartist.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body style="position: relative">

    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">

                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Eksplor"/>
                    </div>
                    <ul class="right hide-on-med-and-down">

                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>

                            </a>
                        </li>

                    </ul>

                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                        <li>
                            <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                        </li>
                        <li>
                            <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                        </li>
                        <li>
                            <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                        </li>
                        <li>
                            <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                        </li>
                        <li>
                            <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START MAIN -->
        <div id="main">
            <!-- START WRAPPER -->
            <div class="wrapper">

                <!-- START LEFT SIDEBAR NAV-->
                <aside id="left-sidebar-nav">

                    <ul id="slide-out" class="side-nav fixed leftside-navigation">

                        <li class="user-details cyan darken-2">
                            <div class="row">

                                <div class="col col s4 m4 l4" >
                                    <img src="{{ asset('images/gallary/4.jpg') }}" alt="user profile" class="circle responsive-img valign profile-image" style="height: 56px!important;">
                                </div>

                                {{-- start user setting control --}}
                                <div class="col col s8 m8 l8">
                                    <ul id="profile-dropdown" class="dropdown-content">
                                        <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                        </li>
                                        <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                        </li>
                                        <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                        </li>
                                        <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                        </li>
                                    </ul>
                                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">Admin Delmanika<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                    <p class="user-roal">Administrator</p>
                                </div>
                                {{-- end user setting control --}}

                            </div>
                        </li>

                        {{-- start dashboard --}}
                        <li class="bold">
                            <a href="{{ route('welcome') }}" class="waves-effect waves-cyan">
                                <i class="mdi-action-dashboard"></i>
                                Dashboard
                            </a>
                        </li>
                        {{-- end dashboard --}}

                        <!-- menu data master -->
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-view-carousel"></i>Master</a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li>
                                                <a href="{{ action('AssetController@index') }}">
                                                    <i class="material-icons">business</i>Aset
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pergudangan.html">
                                                    <i class="material-icons">store</i>Pergudangan
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ action('LocationController@index') }}">
                                                    <i class="material-icons">place</i>Lokasi
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pemasok.html">
                                                    <i class="material-icons">store</i>Pemasok
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pusatbiaya.html">
                                                    <i class="material-icons">monetization_on</i>Pusat Biaya
                                                </a>
                                            </li>
                                            <li>
                                                <a href="petugas.html">
                                                    <i class="material-icons">person_pin</i>Petugas
                                                </a>
                                            </li>
                                            <li>
                                                <a href="tipeaset.html">
                                                    <i class="material-icons">tonality</i>Tipe Aset
                                                </a>
                                            </li>
                                            <li>
                                                <a href="produk.html">
                                                    <i class="material-icons">style</i>Produk
                                                </a>
                                            </li>
                                            <li>
                                                <a href="depresiasi.html">
                                                    <i class="material-icons">trending_down</i>Depresiasi
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end menu data master -->

                        <!-- menu Modul Barkode -->
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan"><i class="material-icons">scanner</i>
                                        Modul Barcode
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="printbarcode.html"><i class="material-icons">print</i> Cetak Barcode</a>
                                            </li>
                                            <li><a href="imporbarcode.html"><i class="material-icons">file_upload</i> Impor Barcode</a>
                                            </li>
                                            <li><a href="eksporbarcode.html"><i class="material-icons">file_download</i> Ekspor Barcode</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end menu Modul Barkode -->

                        <!-- menu modul Perawatan -->
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan"><i class="material-icons">developer_mode</i>
                                        Modul Perawatan
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="layout-fullscreen.html">Full Screen</a>
                                            </li>
                                            <li><a href="layout-horizontal-menu.html">Horizontal Menu</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end modul Perawatan -->

                        <!-- menu modul Depresiasi -->
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan"><i class="material-icons">devices</i>
                                        Modul Depresiasi
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="layout-fullscreen.html">Full Screen</a>
                                            </li>
                                            <li><a href="layout-horizontal-menu.html">Horizontal Menu</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end modul Depresiasi -->

                        <!-- menu Transaksi -->
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan"><i class="material-icons">shopping_cart</i>
                                        Transaksi
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="layout-fullscreen.html">Full Screen</a>
                                            </li>
                                            <li><a href="layout-horizontal-menu.html">Horizontal Menu</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end menu Transaksi -->

                        <!-- menu Pelaporan -->
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan"><i class="material-icons">report</i>
                                        Pelaporan
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="layout-fullscreen.html">Full Screen</a>
                                            </li>
                                            <li><a href="layout-horizontal-menu.html">Horizontal Menu</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end menu Pelaporan -->

                        <!-- menu import data -->
                        <li class="no-padding">
                            <ul class="collapsible collapsible-accordion">
                                <li class="bold">
                                    <a class="collapsible-header waves-effect waves-cyan">
                                        <i class="material-icons">import_export</i>
                                        Import Data
                                    </a>
                                    <div class="collapsible-body">
                                        <ul>
                                            <li><a href="layout-fullscreen.html">Full Screen</a>
                                            </li>
                                            <li><a href="layout-horizontal-menu.html">Horizontal Menu</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end menu import data -->

                    </ul>

                    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
                </aside>
                <!-- END LEFT SIDEBAR NAV-->

                <!-- //////////////////////////////////////////////////////////////////////////// -->
                <!-- START CONTENT -->
                <section id="content">

                        <!--start container-->
                        <div class="container">
                            <!--breadcrumbs start-->
                            <div id="breadcrumbs-wrapper">

                                <!-- Search for small screen -->
                                <!-- <div class="header-search-wrapper grey hide-on-large-only">
                                    <i class="mdi-action-search active"></i>
                                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                                </div> -->

                                <!-- <div class="container">
                                  <div class="row">
                                    <div class="col s12 m12 l12">
                                      <h5 class="breadcrumbs-title">Blank Page</h5>
                                      <ol class="breadcrumbs">
                                          <li><a href="index.html">Dashboard</a></li>
                                          <li><a href="#">Pages</a></li>
                                          <li class="active">Blank Page</li>
                                      </ol>
                                    </div>
                                  </div>
                                </div> -->
                            </div>
                            <!--breadcrumbs end-->

                            {{-- start konten dinamis--}}
                            @yield('content')
                            {{-- end konten dinamis --}}

                        </div>
                        <!--end container-->

                </section>
                <!-- END CONTENT -->

                <!-- //////////////////////////////////////////////////////////////////////////// -->

            </div>
            <!-- END WRAPPER -->

        </div>
        <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer" style="position: absolute;left: 0;bottom: -500;width: 100%">
        <div class="footer-copyright">
            <div class="container">
                <span>Copyright © 2015 <a class="grey-text text-lighten-4" href="#" target="_blank">DELMANIKA</a> All rights reserved.</span>
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">Tim DELMANIKA</a></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ asset('js/plugins/jquery-1.11.2.min.js') }}"></script>
    <!--materialize js-->
    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <!--prism
    <script type="text/javascript" src="js/prism/prism.js"></script>-->
    <!--scrollbar-->
    <script type="text/javascript" src="{{ asset('js/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <!-- chartist -->
    <script type="text/javascript" src="{{ asset('js/plugins/chartist-js/chartist.min.js') }}"></script>

    <!-- chartist -->
    {{--<script type="text/javascript" src="js/plugins/chartist-js/chartist.js"></script>--}}

    <!-- chartjs -->
    <script type="text/javascript" src="{{asset('js/plugins/chartjs/chart.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/chartjs/chart-script.js') }}"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{asset('js/custom-script.js')}}"></script>
    <script src="{{asset('js/jstree/jstree.min.js')}}" charset="utf-8"></script>

    <script type="text/javascript">
        $(document).ready(function(){
        //    material initialization
            $('.tabs').tabs();
            $('.select').formSelect();
        //    end material initialization
        });
    </script>

    {{-- scripts tambahan--}}
    @yield('scripts')
    {{-- end scripts --}}

</body>

</html>
