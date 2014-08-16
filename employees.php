<!DOCTYPE html>
<?php include_once "global.php";
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
    <link rel="stylesheet" href="/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" href="/css/slider.css">
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
	#ex1Slider .slider-selection {
		background: #BABABA;
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
    .white{
        color: white;
    }
    .tableRow{
        padding:15px;
    }
</style>

					<?php
					// Set vars
					$first='';
					$last='';
					$rate='';
					$license='';
					$empSince='';
					$picture='';
					$phone='';
					$skill='5';
					if(isset($_REQUEST['id'])){
						$employeeid=$_REQUEST['id'];
						global $db;
						$sql="SELECT * from moverAdmin.employees WHERE idemployees=?";
						$empInfo=query($sql,$employeeid)[0];
						if(!isset($empInfo)){
							$empInfo='new';
							// do not set anything, that id does not exit
						} else {
							$first=$empInfo['first'];
							$last=$empInfo['last'];
							$rate=$empInfo['dailyRate'];
							$license=$empInfo['license'];
							$empSince=$empInfo['empSince'];
							$picture=$empInfo['picture'];
							$phone=$empInfo['phone'];
							$skill=$empInfo['skill'];
						}
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
                    <a href="/profile.html">
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
                            <a href="/signin.html">Logout</a>
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

            <!-- main content -->
            <section class="main-content">

                <!-- content wrapper -->
                <div class="content-wrap">
							<div class="col-md-12">
								<h1 class="no-mg-t">New Employee</h1>
							</div>
							<div id="employeeidDiv"><?php echo $employeeid;?></div>
							<div class="row">
						   	<div class="col-sm-12 form-container">
							   	<div class="col-sm-6 form-container">
										<div class="form-group has-error">
											<label for="firstname">First Name</label>
											<input type="text" id="firstname" class="form-control" placeholder="First Name" value="<?php echo $first;?>">
										</div>
							   	</div>
							   	<div class="col-sm-6 form-container">
							   		<div class="form-group has-error">
							   			<label for="lastname">Last Name</label>
							   			<input type="text" id="lastname" class="form-control" placeholder="Last Name" value="<?php echo $last;?>">
							   		</div>
							   	</div>

                                <div class="col-sm-6 form-container">
                                    <div class="form-group has-error">
                                        <label for="rate">Daily Rate</label>
                                        <input type="text" id="rate" class="form-control" placeholder="Regular Daily Rate" value="<?php echo $rate;?>">
                                    </div>
                                </div>
						   	</div>
						   </div>
						   
						   <div class="row">
								<div class="col-sm-12 form-container">
									<div class="col-sm-6 form-container">
										<div class="form-group has-error">
											<label for="phone">Phone Number</label>
											<input type="text" id="phone" class="form-control" placeholder="###-###-####" value="<?php echo $phone;?>">
										</div>
									</div>
									<div class="col-sm-6 form-container">
										<div class="form-group has-error">
											<label for="empSince">Date Started Working</label>
											<input type="text" id="empSince" class="form-control" placeholder="5-15-2014" value="<?php print_r($empSince);?>">
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
											<div class="col-xs-12 col-md-8 form-group">
                                            <label>Photo Upload</label><br>
                                            <input type="file" name="picture" id="file">
                                            </div>									
										</div>
									</div>
								</div>
						   </div>
<?php
							$CDLSelected='';
							$dlSelected='';
							$noneSelected=' checked ';
							if(!isset($license) && $license<1){
							} else if ($license >2){
								$CDLSelected=' checked ';
								$noneSelected='';
							} else if ($license ==2){
								$dlSelected=' checked ';
								$noneSelected='';
							}
?>
                           <div class="col-xs-12 col-md-8 form-group">
                                <label for="rentOwn">Driver Type?</label><br>
								<input id="CDL" name="license" type="radio" value="2" <?php echo $CDLSelected;?>> 
                                <label for="CDL">CDL</label>
                                <input id="dl" name="license" type="radio" value="1" <?php echo $dlSelected;?>> 
                                <label for="dl">Drivers License</label> 
                                <input id="dlNone" name="license" type="radio" value="0" <?php echo $noneSelected;?>>
                                <label for="dlNone">None</label>
                            </div>
						   
						   
						   <div class="row">
						   	<div class="col-sm-12 form-container">
							   	<div class="form-group">
						   			<label for="ex1">Skill Level</label>
									<input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="<?php echo $skill;?>"/>
							   	</div>
						   	</div>
						   </div>
						   
						   <div class="row">
						   	<div class="col-sm-12 form-container">
						   	<div class="col-sm-4 form-container"></div>
						   	<div class="col-sm-4 form-container">
							   	<div class="form-group">
										<button type="submit" class="btn btn-default" id="submit">Add Employee</button>
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
    <script src="/js/bootstrap-slider.js"></script>
    <script src="/js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript">
    	$('#ex1').slider({
    		formater: function(value) {
				return 'Current value: ' + value;
			}
	 	});
	 	
	 	$('#submit').click(function () {
            var formData = new FormData();

            formData = {
				employeeid			:$('#employeeidDiv').html(),
	 			first				:$('input[id=firstname]').val(),
	 			last				:$('input[id=lastname]').val(),
	 			rate				:$('input[id=rate]').val(),
	 			license		        :$('input[name=license]:checked').val(),
	 			phone			    :$('input[id=phone]').val(),
	 			empSince			:$('input[id=empSince]').val(),
                skill               :$('input[id=ex1]').data('slider').getValue(),
	 			picture			    :$('#file').get(0).files[0]
	 		};

	 		$.ajax({
                type: 'POST',
                url:    '/employeeAjax.php?action=saveEmp',
                data: formData,
                encode: true,
                success: function(result){
                    alert(result);
                    $('#submit').hide();
                    window.location.replace("/employees/"+result);
                },
                fail: function(result){
                    alert('Request failed. Please reload the page and try again.');
                }
            });	 		
	 	});
    </script>
    
    <!-- /theme scripts -->

</body>
<!-- /body -->

</html>