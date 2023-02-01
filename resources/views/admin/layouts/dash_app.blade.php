<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/dash/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dash/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>

            </ul>


        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard" class="brand-link">
                <img src="/dash/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Dashboard</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/dash/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="" class="d-block">{{ Auth::user()->email }}</a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-link"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fas fa-link"></i>
                                <p>
                                    Website
                                </p>
                            </a>
                        </li>


                        <li class="nav-item menu-open">
                            <a href="" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Data Control
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="/types" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Titles Data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/clints" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Clint Data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/team" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Team Data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/services" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Services Data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/portfolios" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Portfolio Data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/pricing" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>prcing Data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/skills" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>skills Data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/pservice" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>prcing services Data</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/questions" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>questions Data</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/massages" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>messages Data</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/contacts" class="nav-link">
                                <i class="nav-icon fas fa-phone"></i>
                                <p>
                                    Contacts
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/logout" class="nav-link">
                                <i class="nav-icon fas fa-arrow-left"></i>
                                <p>
                                    LOGOUT
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title')</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <!-- /.col-md-6 -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="m-0">@yield('title')</h5>
                                </div>
                                <div class="card-body">

                                    @yield('content')
                                </div>
                            </div>

                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2022 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="/dash/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/dash/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dash/dist/js/adminlte.min.js"></script>
</body>

</html>
