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
                                        <h4 class="white">Equipment</h4>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <a href="/equipment/new"><button class="btn btn-white">New Equipment</button></a>
                                    </div>
                                </div>
                            </div>
							<?php
							global $db;
							$sql="SELECT * FROM moverAdmin.equipment ORDER BY isAvailable DESC;";
							$equipments=query($sql);
							foreach($equipments as $key=>$equipment){
								if(isset($equipment['isAvailable']) && $equipment['isAvailable']>0){
									$isAvailableString='<div class="col-xs-3 mg-t-xs text-center"><button class="btn btn-success btn-outline">Available</button></div>';
								} else {
									$isAvailableString='<div class="col-xs-3 mg-t-xs text-center"><button class="btn btn-danger btn-outline">Unavailable</button></div>';
								}
								echo '<div class="row tableRow" id="eachEquipmentRow'.$equipment['idequipment'].'">
									<div class="hidden-xs col-sm-2 col-md-1">
										<span class="pull-left mg-t-xs">
											<img src="/img/equip/'.$equipment['picURI'].'" class="avatar avatar-sm img-circle" alt="">
										</span>
									</div>
									<div class="col-xs-4 col-sm-5 col-md-3" style="margin-top:11px;">
										'.$equipment['name'].'
									</div>
									'.$isAvailableString.'
									<div class="col-xs-2 col-sm-3 col-md-2">Type: '.$equipment['type'].'<br>
										<small class="text-muted">'.$equipment['manufacid'].'</small>
									</div>
									<div class="col-xs-3 text-right">
										<a href="/equipment/'.$equipment['idequipment'].'"><button class="btn btn-primary">Edit</button></a>
										<button onclick="delEquip('.$equipment['idequipment'].');" class="btn btn-danger">Delete</button>
									</div>
								</div>';
							}
							?>
                        </section>
                    </div>
                </div>
                <!-- /content wrapper -->
            </section>
            <!-- /main content -->
        </section>

    </div>

	<script>
		function delEquip(equipmentid){
			alert('Are you sure you want to delete this?\n\nToo bad you only have one answer... blame the front end guy..');
			$.ajax({
				type: 'POST',
				url: '/equipmentAjax.php?action=delEquip&equipmentid='+equipmentid,
				success:function(result){
					//alert('success');
					$('#eachEquipmentRow'+equipmentid).remove();
				}
			});
		}
	</script>
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
