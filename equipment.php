<!DOCTYPE html>
<?php include_once "global.php"?>
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
    <link rel="stylesheet" href="/css/jasny-bootstrap.min.css">
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
	.col-sm-12.form-container{
		margin-top: 10px;
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
					<?php
					// Set vars
					$manufacid='';
					$make='';
					$model='';
					$year='';
					$mileage='';
					$rentOwn='';
					$picture='';
					$rentChecked='';
					$ownChecked='';
					if(isset($_REQUEST['id'])){
						$equipmentid=$_REQUEST['id'];
						global $db;
						$sql="SELECT * from moverAdmin.equipment WHERE idequipment=?";
						$equipInfo=query($sql,$equipmentid)[0];
						$manufacid=$equipInfo['manufacid'];
						$make=$equipInfo['make'];
						$model=$equipInfo['model'];
						$year=$equipInfo['year'];
						$mileage=$equipInfo['mileage'];
						$rentOwn=$equipInfo['propertyType'];
						if($rentOwn=='rent'){
							$rentChecked=' checked';
						} else if ($rentOwn=='own'){
							$ownChecked=' checked';
						}
						$picture=$equipInfo['picture'];
					} else {
						$equipmentid='new';
					}
					?>

<body>
    <div class="searchResults">
        <div class="col-xs-12 searchResult">
            <div class="col-xs-12 col-md-1">
                <img src="/img/photo.jpg">
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
                            <a href="index.html">
                                <i class="fa fa-tasks"></i>
                                <span>Jobs List</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="fa fa-users"></i>
                                <span>Employees</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
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

            <!-- main content -->
            <section class="main-content">

                <!-- content wrapper -->
                <div class="content-wrap">
                	 <div class="col-md-12">
						<?php
						$newEditString='';
						if($equipmentid=='new'){
							$newEditString='New ';
						} else {
							$newEditString='Edit ';
						}
						?>
						<h1 class="no-mg-t"><?php echo $newEditString;?>Equipment</h1>
                   </div>
                   <div class="row">                    
				   equipmentid: <div id="equipmentidDiv"><?php echo $equipmentid; ?></div>
                    		<div class="col-sm-12 form-container">
						     		<div class="col-sm-4 form-container">
                        		<div class="form-group has-error">
                           	 	<label for="idNo">ID Number</label>
								<input type="text" id="idNo" class="form-control" placeholder="ID #" value="<?php echo $manufacid;?>">
                        		</div>
                       		 </div>
                        	 <div class="col-sm-4 form-container">
                        		<div class="form-group has-error">
                           		<label for="make">Make</label>
                           		<input type="text" id="make" class="form-control" placeholder="Ford" value="<?php echo $make;?>">
	                     	 	</div>
                        	 </div>
                        	<div class="col-sm-4 form-container">
                        		<div class="form-group has-error">
                           		<label for="model">Model</label>
                            		<input type="text" id="model" class="form-control" placeholder="Escape" value="<?php echo $model;?>">
                        		</div>
                        	</div>
                    		</div>
                    </div>
                    
                    <div class="row">                    
                    		<div class="col-sm-12 form-container">
						     		<div class="col-sm-4 form-container">
                        		<div class="form-group has-error">
                           	 	<label for="year">Year</label>
								<input type="text" id="year" class="form-control" placeholder="2008" value="<?php echo $year;?>">
                        		</div>
                       		 </div>
                        	 <div class="col-sm-4 form-container">
                        		<div class="form-group has-error">
                           		<label for="mileage">Mileage</label>
                           		<input type="text" id="mileage" class="form-control" placeholder="32099" value="<?php echo $mileage;?>">
	                     	 	</div>
                        	 </div>
                        	<div class="col-sm-4 form-container">
                        		<div class="form-group has-error">
                           		<label for="rentOwn">Do you rent or own?</label>
								<br><input id="rent" name="rentOwn" type="radio" value="rent" <?php echo $rentChecked;?>>
  											<label for="rent">Rent</label>
											<input id="own" name="rentOwn" type="radio" value="own" <?php echo $ownChecked;?>>
  											<label for="own">Own</label>
                        		</div>
                        	</div>
                    		</div>
                    </div>
                    
                    <div class="row">
						   	<div class="col-sm-12 form-container">
						   		<label>Photo Upload</label>
						   	</div>
						   </div>
						   <div class="row">
						   	<div class="col-sm-12 form-container">
						   		<div class="col-sm-12 form-container">
										<div class="form-group">
											<div class="fileinput fileinput-new" data-provides="fileinput">
  												<span class="btn btn-default btn-file">
  													<span class="fileinput-new">Select file</span>
  													<span class="fileinput-exists">Change</span>
  													<input type="file" name="...">
  												</span>
  												<span class="fileinput-filename"></span>
  												<a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
											</div>										
										</div>
									</div>
								</div>
						   </div>
						   
						   <div class="row">
						   	<div class="col-sm-12 form-container">
						   	<div class="col-sm-4 form-container"></div>
						   	<div class="col-sm-4 form-container">
							   	<div class="form-group">
						<?php
						$newAddString='';
						if($equipmentid=='new'){
							$newAddString='Add ';
						} else {
							$newAddString='Save ';
						}
						?>
							<button type="submit" class="btn btn-default" id="submit"><?php echo $newAddString;?>Equipment</button>
							   	</div>
						   	</div>
						   	<div class="col-sm-4 form-container"></div>
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
    <script src="/js/jasny-bootstrap.min.js"></script>
    
    
    <script type="text/javascript">
    	$('#submit').click(function () {
	 		var formData = {
				'equipmentid'		:$('#equipmentidDiv').html(),
	 			'manufacid'				:$('input[id=idNo]').val(),
	 			'make'				:$('input[id=make]').val(),
	 			'model'				:$('input[id=model]').val(),
	 			'year'				:$('input[id=year]').val(),
	 			'mileage'			:$('input[id=mileage]').val(),
	 			'rentOwn'			:$('input[name=rentOwn]:checked').val(),
	 			'picture'			:$('span[class=fileinput-filename]').html()
	 		}
	 		
	 		$.ajax({
	 			type: 'POST',
	 			url:	'/equipmentAjax.php?action=saveEquip',
	 			data: formData,
				encode: true,
				success: function(result){
					$('#submit').hide();
					window.location.replace("/equipment/"+result);
				},
				fail: function(result){
					alert('fail');
				}
	 		});	 		
	 	});
    </script>
    <!-- /theme scripts -->

</body>
<!-- /body -->

</html>
