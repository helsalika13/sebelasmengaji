<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-book"></i> <span>Sebelas Mengaji</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Profile</h3>
                            <ul class="nav side-menu">
                                <li><a href="{{route('sprofile')}}"><i class="fa fa-user"></i> Profile</a></li>
                                <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Log Out </a></li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Data</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-users"></i> Guru <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ route('dataguru') }}">Data Guru</a></li>
                                        <li><a href="{{route('addguru')}}">Tambah Guru</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-users"></i> Kelas <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{route('datakelas')}}">Data Kelas</a></li>
                                        <li><a href="{{route('addkelas')}}">Tambah Kelas</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </div>
            <!-- /top navigation -->