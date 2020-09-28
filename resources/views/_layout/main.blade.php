<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ url("/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css") }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url("/adminlte/bower_components/font-awesome/css/font-awesome.min.css") }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url("/adminlte/bower_components/Ionicons/css/ionicons.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url("/adminlte/dist/css/AdminLTE.min.css") }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ url("/adminlte/dist/css/skins/_all-skins.min.css") }}">

    <link rel="stylesheet" href="{{ url("/flag-icon-css/css/flag-icon.min.css") }}">

    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet"
        href="{{ url("/adminlte/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css") }}">

    <link rel="stylesheet" href="{{ url("/adminlte/bower_components/select2/dist/css/select2.min.css") }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- jQuery 3 -->
    <script src="{{ url("/adminlte/bower_components/jquery/dist/jquery.min.js") }}"></script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="{{ url("/") }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
            </nav>
        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>{{ session("email") }}</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="@yield('sidebar-menu-basic-active')">
                        <a href="{{url("/basic")}}">
                            <i class="fa fa-database"></i> <span>Basic Query</span>
                        </a>
                    </li>
                    <li class="@yield('sidebar-menu-accounts-active')">
                        <a href="{{url("/accounts")}}">
                            <i class="fa fa-user"></i> <span>Accounts</span>
                        </a>
                    </li>
                    <li class="@yield('sidebar-menu-countries-active')">
                        <a href="{{url("/countries")}}">
                            <i class="fa fa-globe"></i> <span>Countries</span>
                        </a>
                    </li>
                    <li class="@yield('sidebar-menu-awards-active')">
                        <a href="{{url("/awards")}}">
                            <i class="fa fa-certificate"></i> <span>Awards</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url("/logout")}}">
                            <i class="fa fa-power-off"></i> <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @section('content')

            @show
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.18
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
            reserved.
        </footer>
        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- Bootstrap 3.3.7 -->
    <script src="{{ url("/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js") }}"></script>
    <!-- SlimScroll -->
    <script src="{{ url("/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js") }}"></script>
    <!-- FastClick -->
    <script src="{{ url("/adminlte/bower_components/fastclick/lib/fastclick.js") }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url("/adminlte/dist/js/adminlte.min.js") }}"></script>

    <script src="{{ url("/adminlte/bower_components/select2/dist/js/select2.min.js") }}"></script>
    <!-- bootstrap color picker -->
    <script src="{{ url("/adminlte/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js") }} ">
    </script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url("/adminlte/dist/js/demo.js") }}"></script>
    <script>
        $(document).ready(function () {
            $('.sidebar-menu').tree()
            @if (session("welcome"))
            alert("Selamat datang {{ session("email") }}!");
            @endif
        });
    </script>
</body>

</html>
