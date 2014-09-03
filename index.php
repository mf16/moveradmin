<!DOCTYPE html>
<?php
include_once "global.php";
?>
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
    <link rel="stylesheet" href="/css/skins/palette.css" id="skin">
    <link rel="stylesheet" href="/css/fonts/style.1.css" id="font">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/vendor/offline/theme.css">
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
.today{
	border:1px solid orange;
}
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
                    <!--
                    <div class="col-md-3 col-xs-12">
                        <h1 class="mg-b-lg">Daily Report</h1>
                        <div class="col-xs-12">
                            <section class="panel position-relative">
<a href="/job/1">
                                <div class="ribbon ribbon-danger">
                                    <div class="banner">
                                        <div class="text">Missing Man</div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <a href="javascript:;" class="pull-left mg-r-md">
                                        <img src="img/emp/tyler.jpg" class="avatar avatar-sm img-circle" alt="">
                                    </a>
                                    <div>Tyler Slater</div>
                                    <small>Driver</small><br>
                                    <small>
                                        <i class="fa fa-circle text-primary mg-t-lg mg-r-xs"></i>Mitch (Mitchell Facer) has reported a man missing from this job.</small>
                                    <p class="mg-xs"></p>
                                </div>
</a>
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
                                        <img src="img/emp/mitch.jpg" class="avatar avatar-sm img-circle" alt="">
                                    </a>
                                    <div>Mitch (Mitchell Facer)</div>
                                    <small>Driver</small><br>
                                    <small>
                                        <i class="fa fa-circle text-primary mg-t-lg mg-r-xs"></i>This job is on schedule.</small>
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
                                        <img src="img/emp/superman.jpg" class="avatar avatar-sm img-circle" alt="">
                                    </a>
                                    <div>Superman (Clark Kent)</div>
                                    <small>Driver</small><br>

                                    <small>
                                        <i class="fa fa-circle text-primary mg-t-lg mg-r-xs"></i>This job is complete.</small>
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
                                        <img src="img/emp/tyler.jpg" class="avatar avatar-sm img-circle" alt="">
                                    </a>
                                    <div>Tyler Slater</div>
                                    <small>Driver</small><br>
                                    <small>
                                        <i class="fa fa-circle text-primary mg-t-lg mg-r-xs"></i>Tyler Slater has reported an unusual amount of Traffic.</small>
                                    <p class="mg-xs"></p>
                                </div>
                            </section>
                        </div>
                    </div>-->

                    <div class="col-xs-12">
                        <div class="row">
                            <section class="col-md-6 mg-b-lg">
                                <h1 class="mg-b-lg">Weekly Overview</h1>
                            </section>
                            <section class="col-md-6 text-right mg-t-lg mg-b-lg">
                                <a href="/job/new"><button type="button" class="btn btn-primary">New Job</button></a>
                            </section>
                        </div>

                        <div class="row seven-cols">
<?php
							for($i=-1;$i<6;$i++){
								$day=time()+60*60*24*$i;
								$todayString='';
								if($i==0){
									$todayString=' today';
								}
								echo '
								<div class="col-md-1 col-sm-12">
									<section class="panel no-border overflow-hidden'.$todayString.'">';
								if($i==0){
									$dangerString=' bg-danger';
									$bg_whiteString='';
									$dayStringText='Today';
									$fontColor=' white';
								} else {
									$dangerString='';
									$bg_whiteString='bg-white ';
									$dayStringText=date('l j',$day).'<sup>'.date('S',$day).'</sup>';
									$fontColor='';
								}
										echo '<div class="'.$bg_whiteString.' pd-md clearfix '.$dangerString.'">
											<div class="h4 mg-t-xs mg-b-xs '.$fontColor.'">';
												echo $dayStringText;
											echo ' </div>
										</div>
										<div class="list-group">
										';
								$sqlDate=date('Y-m-d',$day);
								$sql="SELECT * FROM moverAdmin.jobs WHERE `startDate` = ?;";
								$result=query($sql,$sqlDate);
								foreach($result as $keys=>$job){
									echo '
											<a href="/job/'.$job['idjobs'].'" class="list-group-item">
											   '.$job['destinationAddress'].' - '.$job['weight'].'lbs
											</a>
									';
								}
								echo '
										</div>
									</section>
								</div>
								';
							}
?>
                        </div>
                    </div>


                    
                </div>
                <!-- /content wrapper -->
            </section>
            <!-- /main content -->
        </section>

    </div>

    <!-- core scripts -->
    <script src="/vendor/jquery-1.11.1.min.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
    <!-- /core scripts -->

    <!-- page level scripts -->
    <!-- /page level scripts -->

    <!-- theme scripts -->
    <script src="/js/global.js"></script>
    <script src="/js/off-canvas.js"></script>
    <script src="/vendor/jquery.placeholder.js"></script>
    <script src="/vendor/offline/offline.min.js"></script>
    <script src="/vendor/pace/pace.min.js"></script>
    <script src="/js/main.js"></script>
    <!-- /theme scripts -->

</body>
<!-- /body -->

</html>
