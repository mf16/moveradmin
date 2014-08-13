<!DOCTYPE html>
<html class="no-js">

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1">

    <title>MoverAdmin | Simple Crew Management</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- /bootstrap -->

    <!-- core styles -->
    <link rel="stylesheet" href="css/skins/palette.css" id="skin">
    <link rel="stylesheet" href="css/fonts/style.1.css" id="font">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="vendor/offline/theme.css">
    <!-- /core styles -->

    <!-- page level styles -->
    <!-- /page level styles -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- load modernizer -->
    <script src="vendor/modernizr.js"></script>
</head>

<!-- body -->
<style type="text/css">
    .searchResults{
        position: absolute;
        background-color: white;
        z-index: 1;
        display: none;
        top: 50px;
    }
    .searchResult{
        cursor: pointer;
        border-top: solid 1px rgb(180, 180, 180);
        line-height: 70px;
    }
    .searchResult:hover{
        background-color: #EEEEEE;
    }
    .searchResult>div>img{
        width: 50px;
        -webkit-border-radius: 25px; 
        -moz-border-radius: 25px; 
        border-radius: 25px; 
    }
    .searchResult>.title{
        font-size: 20px;
    }
</style>

<body>
    <?php include 'includes/header.php'; ?>

            <!-- main content -->
            <section class="main-content">

                <!-- content wrapper -->
                <div class="content-wrap">
                    <h1 class="mg-b-lg">Daily Report</h1>
                    <div class="col-md-3 col-xs-12">
                        <div class="col-xs-12">
                            <section class="panel position-relative">
                                <div class="ribbon ribbon-danger">
                                    <div class="banner">
                                        <div class="text">Missing Man</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <a href="javascript:;" class="pull-left mg-r-md">
                                        <img src="img/avatar.jpg" class="avatar avatar-sm img-circle" alt="">
                                    </a>
                                    <div>Gary Stone</div>
                                    <small>Driver</small><br>
                                    <small>
                                        <i class="fa fa-circle text-primary mg-t-lg mg-r-xs"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a dictum nibh. Vestibulum tempor orci vel sem eleifend, id volutpat quam congue. Maecenas pharetra feugiat molestie. homepage.</small>
                                    <p class="mg-xs"></p>
                                </div>
                            </section>
                        </div>
                        <div class="col-xs-12">
                            <section class="panel position-relative">
                                <div class="ribbon ribbon-primary">
                                    <div class="banner">
                                        <div class="text">On Schedule</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <a href="javascript:;" class="pull-left mg-r-md">
                                        <img src="img/avatar.jpg" class="avatar avatar-sm img-circle" alt="">
                                    </a>
                                    <div>Gary Stone</div>
                                    <small>Driver</small><br>
                                    <small>
                                        <i class="fa fa-circle text-primary mg-t-lg mg-r-xs"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a dictum nibh. Vestibulum tempor orci vel sem eleifend, id volutpat quam congue. Maecenas pharetra feugiat molestie. homepage.</small>
                                    <p class="mg-xs"></p>
                                </div>
                            </section>
                        </div>
                        <div class="col-xs-12">
                            <section class="panel position-relative">
                                <div class="ribbon ribbon-success">
                                    <div class="banner">
                                        <div class="text">Complete</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <a href="javascript:;" class="pull-left mg-r-md">
                                        <img src="img/avatar.jpg" class="avatar avatar-sm img-circle" alt="">
                                    </a>
                                    <div>Gary Stone</div>
                                    <small>Driver</small><br>

                                    <small>
                                        <i class="fa fa-circle text-primary mg-t-lg mg-r-xs"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a dictum nibh. Vestibulum tempor orci vel sem eleifend, id volutpat quam congue. Maecenas pharetra feugiat molestie. homepage.</small>
                                    <p class="mg-xs"></p>
                                </div>
                            </section>
                        </div>
                        <div class="col-xs-12">
                            <section class="panel position-relative">
                                <div class="ribbon ribbon-danger">
                                    <div class="banner">
                                        <div class="text">Extended</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <a href="javascript:;" class="pull-left mg-r-md">
                                        <img src="img/avatar.jpg" class="avatar avatar-sm img-circle" alt="">
                                    </a>
                                    <div>Gary Stone</div>
                                    <small>Driver</small><br>
                                    <small>
                                        <i class="fa fa-circle text-primary mg-t-lg mg-r-xs"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a dictum nibh. Vestibulum tempor orci vel sem eleifend, id volutpat quam congue. Maecenas pharetra feugiat molestie. homepage.</small>
                                    <p class="mg-xs"></p>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="col-sm-9 col-xs-12">
                        <div class="row">
                            <section class="col-md-6 mg-b-lg">
                                <h1 class="no-mg-t">Weekly Overview</h1>
                            </section>
                            <section class="col-md-6 text-right mg-b-lg">
                                <a href="job.php"><button type="button" class="btn btn-primary">New Job</button></a>
                            </section>
                        </div>

                        <div class="row seven-cols">
                            <div class="col-md-1 col-sm-12">
                                <section class="panel no-border overflow-hidden">
                                    <div class="bg-white pd-md clearfix">
                                        <div class="h4 mg-t-xs mg-b-xs">
                                            Yesterday
                                        </div>
                                    </div>
                                    <div class="list-group">
                                        <a href="javascript:;" class="list-group-item">
                                           Silver Springs - APU 4,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                           Bel Air - APU 12,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                            Pennsylvania - Pack and Load 15,000lbs
                                        </a>
                                         <a href="javascript:;" class="list-group-item">
                                           Silver Springs - APU 4,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                           Bel Air - APU 12,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                            Pennsylvania - Pack and Load 15,000lbs
                                        </a>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-1 col-sm-12">
                                <section class="panel no-border overflow-hidden">
                                    <div class="bg-danger pd-md clearfix">
                                        <div class="h4 mg-t-xs mg-b-xs white">
                                            Today
                                        </div>
                                    </div>
                                    <div class="list-group">
                                         <a href="javascript:;" class="list-group-item">
                                           Silver Springs - APU 4,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                           Bel Air - APU 12,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                            Pennsylvania - Pack and Load 15,000lbs
                                        </a>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-1 col-sm-12">
                                <section class="panel no-border overflow-hidden">
                                    <div class="bg-white pd-md clearfix">
                                        <div class="h4 mg-t-xs mg-b-xs">
                                            Friday 6<sup>th</sup>
                                        </div>
                                    </div>
                                    <div class="list-group">
                                         <a href="javascript:;" class="list-group-item">
                                           Silver Springs - APU 4,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                           Bel Air - APU 12,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                            Pennsylvania - Pack and Load 15,000lbs
                                        </a>
                                         <a href="javascript:;" class="list-group-item">
                                           Silver Springs - APU 4,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                           Bel Air - APU 12,000lbs
                                        </a>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-1 col-sm-12">
                                <section class="panel no-border overflow-hidden">
                                    <div class="bg-white pd-md clearfix">
                                        <div class="h4 mg-t-xs mg-b-xs">
                                            Saturday 7<sup>th</sup>
                                        </div>
                                    </div>
                                    <div class="list-group">
                                         <a href="javascript:;" class="list-group-item">
                                           Silver Springs - APU 4,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                           Bel Air - APU 12,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                            Pennsylvania - Pack and Load 15,000lbs
                                        </a>
                                         <a href="javascript:;" class="list-group-item">
                                           Silver Springs - APU 4,000lbs
                                        </a>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-1 col-sm-12">
                                <section class="panel no-border overflow-hidden">
                                    <div class="bg-white pd-md clearfix">
                                        <div class="h4 mg-t-xs mg-b-xs">
                                            Sunday 8<sup>th</sup>
                                        </div>
                                    </div>
                                    <div class="list-group">
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-1 col-sm-12">
                                <section class="panel no-border overflow-hidden">
                                    <div class="bg-white pd-md clearfix">
                                        <div class="h4 mg-t-xs mg-b-xs">
                                            Monday 9<sup>th</sup>
                                        </div>
                                    </div>
                                    <div class="list-group">
                                         <a href="javascript:;" class="list-group-item">
                                           Silver Springs - APU 4,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                           Bel Air - APU 12,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                            Pennsylvania - Pack and Load 15,000lbs
                                        </a>
                                    </div>
                                </section>
                            </div>
                            <div class="col-md-1 col-sm-12">
                                <section class="panel no-border overflow-hidden">
                                    <div class="bg-white pd-md clearfix">
                                        <div class="h4 mg-t-xs mg-b-xs">
                                            Tuesday 10<sup>th</sup>
                                        </div>
                                    </div>
                                    <div class="list-group">
                                         <a href="javascript:;" class="list-group-item">
                                           Silver Springs - APU 4,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                           Bel Air - APU 12,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                            Pennsylvania - Pack and Load 15,000lbs
                                        </a>
                                         <a href="javascript:;" class="list-group-item">
                                           Silver Springs - APU 4,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                           Bel Air - APU 12,000lbs
                                        </a>
                                        <a href="javascript:;" class="list-group-item">
                                            Pennsylvania - Pack and Load 15,000lbs
                                        </a>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>


                    
                </div>
                <!-- /content wrapper -->
            </section>
            <!-- /main content -->
        </section>

    </div>

    <!-- core scripts -->
    <script src="vendor/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <!-- /core scripts -->

    <!-- page level scripts -->
    <!-- /page level scripts -->

    <!-- theme scripts -->
    <script src="js/global.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="vendor/jquery.placeholder.js"></script>
    <script src="vendor/offline/offline.min.js"></script>
    <script src="vendor/pace/pace.min.js"></script>
    <script src="js/main.js"></script>
    <!-- /theme scripts -->

</body>
<!-- /body -->

</html>