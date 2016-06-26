<html>
    <head>

        <title>Fast Forward Gaming</title>
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap-theme.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/AdminLTE.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/skins/skin-blue.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0-beta.1/jquery-ui.min.js"></script>
        <script src="{{ URL::asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('assets/js/app.min.js') }}"></script>
    </head>
    <body class="skin-blue sidebar-mini">
        @if ($user)

            <header class="main-header">
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="https://openclipart.org/image/2400px/svg_to_png/130795/Trollface.png" class="user-image" alt="User Image">
                                <span class="hidden-xs">{{ $user->username }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="https://openclipart.org/image/2400px/svg_to_png/130795/Trollface.png" class="img-circle" alt="User Image">
                                    <p>
                                        {{ $user->username }}
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="/profile" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>

            </nav>
            </header>
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="https://openclipart.org/image/2400px/svg_to_png/130795/Trollface.png" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>{{ $user->username }}</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="/search" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                        </div>
                    </form>
                    <ul class="sidebar-menu">
                        <li class="header">Fast Forward Gaming</li>
                        <li><a href="/"><i class="fa fa-dashboard"></i><span>    Dashboard</span></a></li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-child"></i>    <span>Players</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/players"><i class="fa fa-circle-o"></i>    All</a></li>
                                <li><a href="/players/civilian"><i class="fa fa-circle-o"></i>    Civilians</a></li>
                                <li><a href="/players/cops"><i class="fa fa-circle-o"></i>    Cops</a></li>
                                <li><a href="/players/fd"><i class="fa fa-circle-o"></i>    Medics</a></li>
                            </ul>
                        </li>
                        <li><a href="/vehicles"><i class="fa fa-car"></i><span>    Vehicles</span></a></li>
                        <li><a href="/houses"><i class="fa fa-home"></i><span>    Houses</span></a></li>
                        <li><a href="/gangs"><i class="fa fa-sitemap"></i><span>    Gangs</span></a></li>
                        <li><a href="/server"><i class="fa fa-server"></i><span>    Server</span></a></li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-server"></i>    <span>Admin</span> <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="/admin/users"><i class="fa fa-user"></i>    Users</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </aside>
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        {{ Base::getTitle() }}
                        <small>{{ Base::getSmallTitle() }}</small>
                    </h1>
                </section>
                <div class="content">
        @endif

        @if (count($errors) > 0)
            @foreach($errors as $error)
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <p style="text-align: center;">{{ $error }}</p>
                </div>
            @endforeach
        @endif
        @if (isset($notification))
            @if (count($notification) > 0)
                @foreach($notification as $message)
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <p style="text-align: center">{{ $message }}</p>
                    </div>
                @endforeach
            @endif
        @endif

        @yield('content')

        @if ($user)
                </div>
            </div>
        @endif
    </body>
</html>