    <script src="/vendor/jquery-1.11.1.min.js"></script>

 <div id="searchResults" class="searchResults">
        <div class="col-xs-12 searchResult">
            <div class="col-xs-12 col-md-1">
                <img src="img/photo.jpg">
            </div>
            <div class="col-xs-12 col-md-3 title">Tyler Slater</div>
            <div class="col-xs-12 col-md-8">Employee</div>
        </div>
        <div class="col-xs-12 searchResult">
            <div class="col-xs-12 col-md-1">
                <img src="/img/flatbed.jpg">
            </div>
            <div class="col-xs-12 col-md-3 title">FA659DE</div>
            <div class="col-xs-12 col-md-8">Flatbed Truck</div>
        </div>

    </div>


    <div class="app">
        <!-- top header -->
        <header class="header header-fixed navbar">

            <div class="brand">
<script>
//$('#searchResults').show();
</script>
                <a href="javascript:;" class="fa fa-bars off-left visible-xs" data-toggle="off-canvas" data-move="ltr"></a>

                <a href="/" class="navbar-brand text-white">
                    <i class="fa fa-stop mg-r-sm"></i>
                    <span class="heading-font">
                        Mover<b>ADMIN</b> 
                    </span>
                </a>
            </div>

            <form class="navbar-form navbar-left hidden-xs" role="search">
                <div class="form-group">
                    <button class="btn no-border no-margin bg-none no-pd-l" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                    <input type="text" class="form-control no-border no-padding search" placeholder="Search Workspace" onkeyup="searchSite()">
                </div>
            </form>

            <ul class="nav navbar-nav navbar-right off-right">
                <li class="hidden-xs">
                    <a href="profile.html">
                        +Matt Underwood
                    </a>
                </li>
                <li class="quickmenu mg-r-md">
                    <a href="javascript:;" data-toggle="dropdown">
                        <img src="/img/avatar.jpg" class="avatar pull-left img-circle" alt="user" title="user">
                        <i class="caret mg-l-xs hidden-xs no-margin"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right mg-r-xs">
                        <li>
                            <a href="javascript:;">
                                <div class="pd-t-sm">
                                    importb18@gmail.com
                                    <br>
                                    
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="profile.html">Settings</a>
                        </li>
                        <li>
                            <a href="javascript:;">Notifications
                                <div class="badge bg-danger pull-right"></div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="signin.html">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        <!-- /top header -->

        <section class="layout">
            <!-- sidebar menu -->
            <aside class="sidebar canvas-left">
                <!-- main navigation -->
                <nav class="main-navigation">
                    <ul>
                        <li>
                            <a href="/jobs">
                                <i class="fa fa-tasks"></i>
                                <span>Jobs List</span>
                            </a>
                        </li>
                        <li>
                            <a href="/employees">
                                <i class="fa fa-users"></i>
                                <span>Employees</span>
                            </a>
                        </li>
                        <li>
                            <a href="/equipment">
                                <i class="fa fa-truck"></i>
                                <span>Equipment</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /main navigation -->


                <!-- footer -->
                <footer>
                    <div class="about-app pd-md animated pulse">
                        <a href="javascript:;">
                            <img src="/img/about.png" alt="">
                        </a>
                        <span>
                            <b>MoverAdmin</b>&#32;is a web based management tool for contractors within the transportation industry.
                            <a href="javascript:;">
                                <b>Find out more</b>
                            </a>
                        </span>
                    </div>

                    <div class="footer-toolbar pull-left">
                        <a href="javascript:;" class="pull-left help">
                            <i class="fa fa-question-circle"></i>
                        </a>

                        <a href="javascript:;" class="toggle-sidebar pull-right hidden-xs">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </div>
                </footer>
                <!-- /footer -->
            </aside>
            <!-- /sidebar menu -->
