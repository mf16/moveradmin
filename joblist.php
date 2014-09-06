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
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
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
    <script src="/vendor/modernizr.js"></script>
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
    <?php include 'includes/header.php';?>

            <!-- main content -->
            <section class="main-content">

                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="col-md-12">
                        <section class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="white">Jobs</h4>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="/job/new"><button class="btn btn-white">New Job</button></a>
                                    </div>
                                </div>
                            </div>
<?php
							global $db;
							$sql="SELECT * FROM moverAdmin.jobs WHERE adminid=?;";
							$jobs=query($sql,$_SESSION['userid']);
							foreach($jobs as $key=>$job){
?>

							<div class="row tableRow" id="eachJobRow<?php echo $job['idjobs'];?>">
                                <div class="hidden-xs col-sm-2 col-md-1">
                                    <span class="pull-left mg-t-xs">
										<img src="/img/jobs/<?php echo $job['picURI'];?>" class="avatar avatar-sm img-circle" alt="">
                                    </span>
                                </div>
                                <div class="col-xs-6 col-sm-8 col-md-5">
									<?php echo $job['destinationCity'];?>
									<br>
                                    <!--<small class="text-muted">ID # 45E2SD</small>-->
                                </div>
                                <div class="col-xs-3 mg-t-xs text-center"><button class="btn btn-danger btn-outline">Issue</button></div>
                                
                                <div class="col-xs-3 text-right">
									<a href="/job/<?php echo $job['idjobs'];?>"><button class="btn btn-primary">Edit</button></a>
									<button onclick="delJob(<?php echo $job['idjobs'];?>);" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
<?php
							}
?>
<!--
                             <div class="row tableRow">
                                <div class="hidden-xs col-sm-2 col-md-2">
                                    <span class="pull-left mg-t-xs">
                                        <img src="/img/jobs/house2.jpg" class="avatar avatar-sm img-circle" alt="">
                                    </span>
                                </div>
                                <div class="col-xs-6 col-sm-8 col-md-4">
                                    Forest Hill, MD<br>
                                    <small class="text-muted">ID # 45E2SD</small>
                                </div>
                                <div class="col-xs-3 mg-t-xs text-center"><button class="btn btn-success btn-outline">Good</button></div>
                                <div class="col-xs-3 text-right">
                                    <button class="btn btn-primary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
-->
                        </section>
                    </div>
                </div>
                <!-- /content wrapper -->
            </section>
            <!-- /main content -->
        </section>

    </div>
	<script>
		function delJob(jobid){
			alert('Are you sure you want to delete this?\n\nToo bad you only have one answer... blame the front end guy..');
			$.ajax({
				type: 'POST',
				url: '/newJobAjax.php?action=delJob&jobid='+jobid,
				success:function(result){
					//alert('success');
					$('#eachJobRow'+jobid).remove();
				}
			});
		}
	</script>


    <!-- core scripts -->
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
