<!DOCTYPE html>
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Conquer | UI Features - Modals</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="MobileOptimized" content="320">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="{{ asset('assets/css/style-conquer.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style-responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/themes/default.css') }}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />

    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />

    @yield('javascript')
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="page-header-fixed">
    <!-- BEGIN HEADER -->
    <div class="header navbar  navbar-fixed-top">
        <!-- BEGIN TOP NAVIGATION BAR -->
        <div class="header-inner">
            <!-- BEGIN LOGO -->
            <div class="page-logo">

                <a href="index.html">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="logo" />
                </a>
            </div>
            <form class="search-form search-form-header" role="form" action="index.html">

                <a href="{{ url('/admin') }}">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="logo" />
                </a>
        </div>
        {{-- <form class="search-form search-form-header" role="form" action="index.html">
            <div class="input-icon right">
                <i class="icon-magnifier"></i>
                <input type="text" class="form-control input-sm" name="query" placeholder="Search...">
            </div>

        </form>

        </form> --}}
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <img src="assets/img/menu-toggler.png" alt="" />
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <ul class="nav navbar-nav pull-right">
            <li class="devider">
                &nbsp;
            </li>
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                    data-close-others="true">
                    <img alt="" src="assets/img/avatar3_small.jpg" />
                    <span class="username">
                        @if (Auth::user())
                            {{ Auth::user()->name }} Email: {{ Auth::user()->email }}
                        @else
                            Anda belum login
                        @endif
                    </span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li>

                        <a href="extra_profile.html"><i class="fa fa-user"></i> My Profile</a>
                    </li>
                    <li>

                        <a href="{{ url('/admin') }}"><i class="fa fa-user"></i> Home</a>
                    </li>
                    {{-- <li>
                        <a href="page_calendar.html"><i class="fa fa-calendar"></i> My Calendar</a>
                    </li>
                    <li>
                        <a href="page_inbox.html"><i class="fa fa-envelope"></i> My Inbox <span class="badge badge-danger">
                        3 </span>
                        </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-tasks"></i> My Tasks <span class="badge badge-success">
                        7 </span>
                        </a>

                    </li>

                    </li> --}}
                    <li class="divider">
                    </li>
                    {{-- <li>
                        <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Logout">
                        </form>
                    </li> --}}
                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->
        </ul>
        <!-- END TOP NAVIGATION MENU -->

    </div>

    </div>
    <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <ul class="page-sidebar-menu">
                    <li class="sidebar-toggler-wrapper">
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        <div class="sidebar-toggler">
                        </div>
                        <div class="clearfix">
                        </div>
                        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    </li>

                    <li class="sidebar-search-wrapper">
                    <li class="start ">
                        <a href="{{ route('welcome') }}">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li class="start ">
                        <a href="{{ url('categories') }}">
                            <i class="fa fa-delicious"></i>
                            <span class="title">Categories</span>
                        </a>
                    </li>

                    <li class="start ">
                        <a href="{{ url('medicines') }}">
                            <i class="fa fa-slack"></i>
                            <span class="title">Medicines</span>
                        </a>
                    </li>

                    <li class="start ">
                        <a href="{{ url('products') }}">
                            <i class="fa fa-heart"></i>
                            <span class="title">Products</span>
                        </a>
                    </li>

                    <li class="start ">
                        <a href="{{ url('buyers') }}">
                            <i class="fa fa-slack"></i>
                            <span class="title">Buyer</span>
                        </a>
                    </li>

                    <li class="start ">
                        <a href="{{ url('report/obattermahal') }}">
                            <i class="fa fa-plus-square"></i>
                            <span class="title">Obat Termahal</span>
                        </a>
                    </li>



                    <li class="start ">
                        <a href="{{ url('report/obatbanyakbeli') }}">
                            <i class="fa fa-plus-square"></i>
                            <span class="title">Obat Terlaris</span>
                        </a>
                    </li>

                    <li class="start ">
                        <a href="{{ url('report/customerbanyakbeli') }}">
                            <i class="fa fa-plus-square"></i>
                            <span class="title">Customer Paling Banyak Belanja</span>
                        </a>
                    </li>

                    <li class="start">
                        <a href="{{ url('transactions') }}">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="title">Daftar Transaksi</span>
                        </a>
                    </li>

                    <li class="start">
                        <a href="{{ url('suppliers') }}">
                            <i class="fa fa-plus"></i>
                            <span class="title">Supplier</span>
                        </a>
                    </li>


                    <li class="start">

                        {{-- <li class="start">
				<a href="{{url('products')}}">
                    <i class="fa fa-truck"></i>
				<span class="title">Daftar Produk</span>
				</a>

			</li>

			</li> --}}
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="footer">
        <div class="footer-inner">
            {{ now()->year }} &copy; All rights reserved
        </div>
        <div class="footer-tools">
            <span class="go-top">
                <i class="fa fa-angle-up"></i>
            </span>
        </div>
    </div>
    <!-- END FOOTER -->
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <script src="assets/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery.editable.min.js') }}" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/scripts/app.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        jQuery(document).ready(function() {
            // initiate layout and plugins
            App.init();
        });
    </script>

    @yield('initialscript')
    <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
