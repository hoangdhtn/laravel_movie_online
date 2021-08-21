{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trang quản lý | Hova Online</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="{{asset('public/backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="{{asset('public/backend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="{{asset('public/backend/css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{asset('public/backend/ss/morris/morris.css')}}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{asset('public/backend/css/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <link href="{{asset('public/backend/css/fullcalendar/fullcalendar.css')}}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{asset('public/backend/css/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{asset('public/backend/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{asset('public/backend/css/AdminLTE.css')}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
      </head>
      <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Quản lý
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">

                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span>{{ Auth::user()->name }} <i class="caret"></i></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header bg-light-blue">
                                        <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                        <p>
                                            {{ Auth::user()->name }}
                                            <small>{{ Auth::user()->created_at }}</small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Thông tin người dùng</a>
                                        </div>
                                        <div class="pull-right">
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                                <input type="submit" class="btn btn-default btn-flat" name="" value="Đăng xuất">
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div class="wrapper row-offcanvas row-offcanvas-left">
                <!-- Left side column. contains the logo and sidebar -->
                <aside class="left-side sidebar-offcanvas">
                    <!-- sidebar: style can be found in sidebar.less -->
                    <section class="sidebar">
                        <!-- Sidebar user panel -->
                        <div class="user-panel">
                            <div class="pull-left image">
                                <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                            </div>
                            <div class="pull-left info">
                                <p>{{Auth::user()->name}}</p>

                                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                            </div>
                        </div>
                        <!-- search form -->
                        <form action="#" method="get" class="sidebar-form">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                <span class="input-group-btn">
                                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                        <!-- /.search form -->
                        <!-- sidebar menu: : style can be found in sidebar.less -->
                        <ul class="sidebar-menu">
                            <li class="active">
                                <a href="{{URL::to('/admin')}}">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>

                            <li class="treeview">
                                <a href="#">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span>Người dùng</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{route('management-user.index')}}"><i class="fa fa-angle-double-right"></i> Danh sách người dùng</a></li>
                                    <li><a href="{{route('management-user.create')}}"><i class="fa fa-angle-double-right"></i> Thêm người dùng</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="glyphicon glyphicon-book"></i>
                                    <span>Thể loại</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{route('theloai.index')}}"><i class="fa fa-angle-double-right"></i> Danh sách thể loại</a></li>
                                    <li><a href="{{route('theloai.create')}}"><i class="fa fa-angle-double-right"></i> Thêm thể loại</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="glyphicon glyphicon-adjust"></i>
                                    <span>Quốc gia</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{route('quocgia.index')}}"><i class="fa fa-angle-double-right"></i> Danh sách quốc gia</a></li>
                                    <li><a href="{{route('quocgia.create')}}"><i class="fa fa-angle-double-right"></i> Thêm quốc gia</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="glyphicon glyphicon-hdd"></i>
                                    <span>Phim</span>
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{route('phim.index')}}"><i class="fa fa-angle-double-right"></i> Danh sách phim</a></li>
                                    <li><a href="{{route('phim.create')}}"><i class="fa fa-angle-double-right"></i> Thêm phim</a></li>
                                </ul>
                            </li>


                        </ul>
                    </section>
                    <!-- /.sidebar -->
                </aside>

                <!-- Right side column. Contains the navbar and content of the page -->
                <aside class="right-side">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            Trang admin
                        </h1>
                    </section>

                    <!-- Main content -->
                    <section class="content">

                        @yield('content')


                    </section><!-- /.content -->
                </aside><!-- /.right-side -->
            </div><!-- ./wrapper -->

            <!-- add new calendar event modal -->


            <!-- jQuery 2.0.2 -->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            <!-- jQuery UI 1.10.3 -->
            <script src="{{asset('public/backend/js/jquery-ui-1.10.3.min.js')}}" type="text/javascript"></script>
            <!-- Bootstrap -->
            <script src="{{asset('public/backend/js/bootstrap.min.js')}}" type="text/javascript"></script>
            <!-- Morris.js charts -->
            <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
            <script src="{{asset('public/backend/js/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
            <!-- Sparkline -->
            <script src="{{asset('public/backend/js/plugins/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
            <!-- jvectormap -->
            <script src="{{asset('public/backend/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('public/backend/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
            <!-- fullCalendar -->
            <script src="{{asset('public/backend/js/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
            <!-- jQuery Knob Chart -->
            <script src="{{asset('public/backend/js/plugins/jqueryKnob/jquery.knob.js')}}" type="text/javascript"></script>
            <!-- daterangepicker -->
            <script src="{{asset('public/backend/js/plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
            <!-- Bootstrap WYSIHTML5 -->
            <script src="{{asset('public/backend/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
            <!-- iCheck -->
            <script src="{{asset('public/backend/js/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>

            <!-- AdminLTE App -->
            <script src="{{asset('public/backend/js/AdminLTE/app.js')}}" type="text/javascript"></script>

            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="{{asset('public/backend/js/AdminLTE/dashboard.js')}}" type="text/javascript"></script>
            <script src="{{asset('public/ckeditor/ckeditor.js')}}" type="text/javascript"></script> 
            <script>
                CKEDITOR.replace('ckeditor')
                CKEDITOR.replace('ckeditor1')
            </script>


        </body>
        </html>


