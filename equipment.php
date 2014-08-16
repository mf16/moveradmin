<!DOCTYPE html>
<?php include_once "global.php"; ?>
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
					$name='';
					$manufacid='';
					$make='';
					$model='';
					$year='';
					$mileage='';
					$rentOwn='';
					$picture='';
					$rentChecked='';
					$ownChecked='';
					$type='';
					if(isset($_REQUEST['id'])){
						$equipmentid=$_REQUEST['id'];
						global $db;
						$sql="SELECT * from moverAdmin.equipment WHERE idequipment=?";
						$equipInfo=query($sql,$equipmentid)[0];
						if(!isset($equipInfo)){
							$equipmentid='new';
							// do not set anything, that id does not exit
						} else {
							$name=$equipInfo['name'];
							$manufacid=$equipInfo['manufacid'];
							$make=$equipInfo['make'];
							$model=$equipInfo['model'];
							$year=$equipInfo['year'];
							$mileage=$equipInfo['mileage'];
							$rentOwn=$equipInfo['propertyType'];
							$type=$equipInfo['type'];
							if($rentOwn=='rent'){
								$rentChecked=' checked';
							} else if ($rentOwn=='own'){
								$ownChecked=' checked';
							}
							$picture=$equipInfo['picture'];
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
                        <form action="/equipmentAjax.php?action=saveEquip" method="post" enctype="multipart/form-data">
                            <div id="equipmentidDiv"><?php echo $equipmentid; ?></div>
                            
                            <div class="col-xs-12 col-md-8 form-group">
                                <label for="name">Name</label> 
                                <input class="form-control" id="name" placeholder="Name" name="name" type="text" value="<?php echo $name;?>">
                            </div>

                            <div class="col-xs-12 col-md-8 form-group">
                                <label for="idNo">ID Number</label> 
                                <input class="form-control" id="idNo" placeholder="ID #" name="idNo" type="text" value="<?php echo $manufacid;?>">
                            </div>

                            <div class="clearfix"></div>

							<input type="hidden" name="type" id="type" value="<?php echo ucwords($type);?>"/>
                            <div class="dropdown col-xs-12 col-md-4">
                              <button class="btn btn-default dropdown-toggle" type="button" id="typeMenu" data-toggle="dropdown">
								<?php
								if(isset($type) && $type!=''){
									echo ucwords($type);
								} else {
									echo 'Type';
								}
								?>
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" role="menu" aria-labelledby="typeMenu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="typeText('Truck');">Truck</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="typeText('Trailer');">Trailer</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="typeText('Flatbed');">Flatbed</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="typeText('Other');">Other</a></li>
                              </ul>
                            </div>

                            <div class="clearfix"></div>

                            <div class="col-xs-12 col-md-8 form-group">
                                <label for="make">Make</label> 
                                <input class="form-control" id="make" name="make" placeholder="Ford" type="text" value="<?php echo $make;?>">
                            </div>

                            <div class="col-xs-12 col-md-8 form-group">
                                <label for="model">Model</label> 
                                <input class="form-control" id="model" name="model" placeholder="Escape" type="text" value="<?php echo $model;?>">
                            </div>

                            <div class="col-xs-12 col-md-8 form-group">
                                <label for="year">Year</label> 
                                <input class="form-control" id="year" name="year" placeholder="2008" type="text" value="<?php echo $year;?>">
                            </div>

                            <div class="col-xs-12 col-md-8 form-group">
                                <label for="mileage">Mileage</label> 
                                <input class="form-control" id="mileage" name="mileage" placeholder="32099" type="text" value="<?php echo $mileage;?>">
                            </div>

                            <div class="col-xs-12 col-md-8 form-group">
                                <label for="rentOwn">Do you rent or own?</label><br>
								<input id="rent" name="rentOwn" type="radio" value="rent" <?php echo $rentChecked;?>> 
                                <label for="rent">Rent</label> 
                                <input id="own" name="rentOwn" type="radio" value="own" <?php echo $ownChecked;?>>
                                <label for="own">Own</label>
                            </div>

                            <div class="col-xs-12 col-md-8 form-group">
                            <label>Photo Upload</label><br>
                            <input type="file" name="picture" id="file">
                            </div>
                        </form>

                        <div class="clearfix"></div>

                        <div class="col-xs-4 form-group">
                            <?php
                                $newAddString='';
                                if($equipmentid=='new'){
                                    $newAddString='Add ';
                                } else {
                                    $newAddString='Save ';
                                }
                            ?>
                            <button class="btn btn-default" onclick="validate()";><?php echo $newAddString;?>Equipment</button>
                        </div>
                    </div>
                </div><!-- /content wrapper -->
            </section>
            <!-- /main content -->
        </section>

    </div>
<form id='testForm'>
	
</form>

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
    function testytest(){
        var file=$('#file');

        console.log(file);
    }
        function typeText(text){
            $('#typeMenu').html(text + ' <span class="caret"></span>');
            text = text.toLowerCase();
            $('#type').val(text);
        }

        function validate(){
            var formData = new FormData();

            formData = {
                equipmentid       :$('#equipmentidDiv').html(),
                manufacid         :$('input[id=idNo]').val(),
                name			  :$('input[id=name]').val(),
                make              :$('input[id=make]').val(),
                model             :$('input[id=model]').val(),
                name              :$('input[id=name]').val(),
                year              :$('input[id=year]').val(),
                type              :$('input[id=type]').val(),
                mileage           :$('input[id=mileage]').val(),
                rentOwn           :$('input[name=rentOwn]:checked').val(),
                picture           :$('#file').get(0).files[0]
            };

            $.ajax({
                type: 'POST',
                url:    '/equipmentAjax.php?action=saveEquip',
                data: formData,
                encode: true,
                success: function(result){
                    //alert(result);
                    $('#submit').hide();
                    window.location.replace("/equipment/"+result);
                },
                fail: function(result){
                    alert('Request failed. Please reload the page and try again.');
                }
            });   
        }
    </script>
    <!-- /theme scripts -->

</body>
<!-- /body -->

</html>
