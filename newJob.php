<!DOCTYPE html>
<?php include_once "global.php";?>

<html class="no-js">
<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta content="Flat, Clean, Responsive, admin template built with bootstrap 3" name="description">
    <meta content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1" name="viewport">
    <meta content="Flat, Clean, Responsive, admin template built with bootstrap 3" name="description">
    <meta content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1" name="viewport">

    <title>MoverAdmin | Simple Crew Management</title><!-- bootstrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet"><!-- /bootstrap -->

    <title>MoverAdmin | Simple Crew Management</title><!-- bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"><!-- /bootstrap -->
    <!-- core styles -->
    <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <link href="/css/skins/palette.css" id="skin" rel="stylesheet">
    <link href="/css/fonts/style.1.css" id="font" rel="stylesheet">
    <link href="/plugins/datepicker/css/datepicker.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/vendor/offline/theme.css" rel="stylesheet">
    <link href="/css/chosen.min.css" rel="stylesheet"><!-- /core styles -->
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/vendor/offline/theme.css" rel="stylesheet">
    <link href="/css/job.css" rel="stylesheet"><!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- load modernizer -->

    <script src="/vendor/modernizr.js"></script>
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
    .chosen-select{
        width: 100%;
    }
    .chosen-container-multi .chosen-choices li.search-field input[type=text]{
        height: auto;
    }

    </style>

    <style type="text/css">
    .bootstrap-timepicker-hour, .bootstrap-timepicker-minute, .bootstrap-timepicker-meridian{
            border: none;
        }
    </style>
</head><!-- body -->

<?php
	//set vars
	$startDate='';
	$startTime='';
	$onsiteTime='';
	$notes='';
	$regNum='';

	$shipperName='';
	$shipperPhone='';
	$altShipperName='';
	$altPhone='';
	$originAddress='';

	$originShuttle=0;
	$originInstructions='';
	$destinationAddress='';
	$destinationShuttle=0;
	$destinationInstructions='';

	$status='';
	$confirmedBy='';
	$weight='';
	$weightType='';
	$vaultPackOrder='';

	$shuttleTruckNumber='';
	$insuranceChargesApply=0;

	if(isset($_REQUEST['id'])){
		$jobid=$_REQUEST['id'];
		global $db;
		$sql="SELECT * FROM moverAdmin.jobs WHERE idjobs=?";
		$jobInfo=query($sql,$jobid)[0];
		if(!isset($jobInfo)){
			$jobid='new';
		} else {
			$startDate=$jobInfo['startDate'];
			$startTime=$jobInfo['startTime'];
			$onsiteTime=$jobInfo['onsiteTime'];
			$notes=$jobInfo['notes'];
			$regNum=$jobInfo['regNum'];

			$shipperName=$jobInfo['shipperName'];
			$shipperPhone=$jobInfo['shipperPhone'];
			$altShipperName=$jobInfo['altShipperName'];
			$altPhone=$jobInfo['altPhone'];
			$originAddress=$jobInfo['originAddress'];

			$originShuttle=$jobInfo['originShuttle'];
			$originInstructions=$jobInfo['originInstructions'];
			$destinationAddress=$jobInfo['destinationAddress'];
			$destinationShuttle=$jobInfo['destinationShuttle'];
			$destinationInstructions=$jobInfo['destinationInstructions'];

			$status=$jobInfo['status'];
			$confirmedBy=$jobInfo['confirmedBy'];
			$weight=$jobInfo['weight'];
			$weightType=$jobInfo['weightType'];
			$vaultPackOrder=$jobInfo['vaultPackOrder'];

			$shuttleTruckNumber=$jobInfo['shuttleTruckNumber'];
			$insuranceChargesApply=$jobInfo['insuranceChargesApply'];
		}
	} else {
		$jobid='new';
	}

?>
<body>
    <?php include 'includes/header.php'; ?><!-- main content -->

    <section class="main-content">
        <!-- content wrapper -->
        <div class="content-wrap">
            <div class="col-md-12">
				<h1 class="no-mg-t">
<?php
	if($jobid=='new'){
		echo 'New ';
	} else {
		echo 'Edit ';
	}
?>
Job</h1>
            </div>

            <div class="col-md-12">
                <div class="col-md-3 label">
                    <label for="startDate">Job Start Date</label> 
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="startDate" placeholder="05-15-2014" type="text"> 
                </div>
                
                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="startTime">Job Start time</label> 
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="startTime" placeholder="h:mm PM" type="text"> 
                </div>
                
                <div class="clearfix"></div>
                <div class="col-md-3 label">
                   <label for="onsiteTime">On-site time</label> 
                </div>
                <div class="col-md-8 mg-b-lg">
                    <input class="form-control" id="onsiteTime" placeholder="h:mm PM" type="text"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="moveType">Move Type</label> 
                </div>
                <div class="col-md-8">
                    <select class="form-control chosen-select" id="moveType" multiple>
                        <option>
                            HHG-Atlas
                        </option>
                        <option>
                            HHG-Intra
                        </option>
                        <option>
                            HHG-Local
                        </option>
                        <option>
                            O&I-Local
                        </option>
                        <option>
                            O&I-Intra
                        </option>
                        <option>
                            O&I-Interstate
                        </option>
                        <option>
                            O&I-Move on Premises
                        </option>
                        <option>
                            SP
                        </option>
                        <option>
                            SmartMove
                        </option>
                        <option>
                            Crate/Frgt
                        </option>
                        <option>
                            INTL
                        </option>
                        <option>
                            Other-See Driver/Crew/Scope Notes
                        </option>
                    </select> 
                </div>
                
                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="serviceType">Service Type</label> 
                </div>
                <div class="col-md-8">
                    <select class="form-control chosen-select" id="serviceType" multiple>
                        <option>
                            Pack
                        </option>
                        <option>
                            Crate/Freight
                        </option>
                        <option>
                            Export Wrap
                        </option>
                        <option>
                            Unpack
                        </option>
                        <option>
                            Load
                        </option>
                        <option>
                            Deliver
                        </option>
                        <option>
                            Early Out
                        </option>
                        <option>
                            Release
                        </option>
                        <option>
                            Shuttle
                        </option>
                        <option>
                            DOS
                        </option>
                        <option>
                            SIT
                        </option>
                        <option>
                            APU
                        </option>
                        <option>
                            DPU
                        </option>
                        <option>
                            Mat'l Del
                        </option>
                        <option>
                            Mat'l P/U
                        </option>
                        <option>
                            Spot Trailer
                        </option>
                        <option>
                            Orig Svs
                        </option>
                        <option>
                            Dest Svs
                        </option>
                        <option>
                            Smart Move
                        </option>
                        <option>
                            Air
                        </option>
                        <option>
                            Surface
                        </option>
                        <option>
                            Military/GSA
                        </option>
                        <option>
                            Install (AMS)
                        </option>
                        <option>
                            Install (3P)
                        </option>
                        <option>
                            Rigging (3P)
                        </option>
                        <option>
                            PC Dis/Rec (3P)
                        </option>
                        <option>
                            Storage In
                        </option>
                        <option>
                            Storage Perm
                        </option>
                        <option>
                            Stage & Store
                        </option>
                        <option>
                            Day 1 of 2
                        </option>
                        <option>
                            Day 2 of 2
                        </option>
                        <option>
                            Day 1 of 3
                        </option>
                        <option>
                            Day 2 of 3
                        </option>
                        <option>
                            Day 3 of 3
                        </option>
                        <option>
                            Day 1 of 4
                        </option>
                        <option>
                            Day 2 of 4
                        </option>
                        <option>
                            Day 3 of 4
                        </option>
                        <option>
                            Day 4 of 4
                        </option>
                        <option>
                            Other-See Driver/Crew/Scope Notes
                        </option>
                    </select>
                </div>

                <div class="clearfix"></div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="regNumber">Reg Number</label> 
                </div>
                <div class="col-md-8">
					<input class="form-control" id="regNumber" placeholder="Reg Number" type="text" value="<?php echo $regNum;?>"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="shipperName">Shipper Name</label> 
                </div>
                <div class="col-md-8">
					<input class="form-control" id="shipperName" placeholder="Shipper name" type="text" value="<?php echo $shipperName;?>"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="phone">Phone Number</label> 
                </div>
                <div class="col-md-8">
					<input class="form-control" id="phone" placeholder="###-###-####" type="text" value="<?php echo $shipperPhone;?>"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="altShipperName">Alternate Shipper Name</label> 
                </div>
                <div class="col-md-8">
					<input class="form-control" id="altShipperName" placeholder="Shipper name" type="text" value="<?php echo $altShipperName;?>" > 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="altPhone">Alternate Phone Number</label> 
                </div>
                <div class="col-md-8">
					<input class="form-control" id="altPhone" placeholder="###-###-####" type="text" value="<?php echo $altPhone; ?>"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="originAddr">Origin</label> 
                </div>
                <div class="col-md-8">
					<input class="form-control" id="originAddr" placeholder="Address" type="text" value="<?php echo $originAddress;?>"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="originShuttle">Origin Shuttle?</label><br>
                </div>
<?php
					$originShuttleYesCheckedString='';
					$originShuttleNoCheckedString='';
					if(isset($originShuttle) && ($originShuttle>0)){
						$originShuttleYesCheckedString=' checked';
					} else {
						$originShuttleNoCheckedString=' checked';
					}
?>

                <div class="col-md-8">
					<input id="originShuttleYes" name="originShuttle" type="radio" value="1" <?php echo $originShuttleYesCheckedString;?>> 
                    <label for="originShuttleYes">Yes</label> 
                    <input id="originShuttleNo" name="originShuttle" type="radio" value="0" <?php echo $originShuttleNoCheckedString;?>>
                    <label for="originShuttleNo">No</label>
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="originSpecial">Origin Special Instructions</label> 
                </div>
                <div class="col-md-8">
					<input class="form-control" id="originSpecial" placeholder="Special Instructions" type="text" value="<?php echo $originInstructions;?>"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="destination">Destination</label> 
                </div>
                <div class="col-md-8">
					<input class="form-control" id="destination" placeholder="Address" type="text" value="<?php echo $destinationAddress;?>"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="destinationShuttle">Destination Shuttle?</label><br>
                </div>
<?php
					$destinationShuttleYesCheckedString='';
					$destinationShuttleNoCheckedString='';
					if(isset($destinationShuttle) && ($destinationShuttle>0)){
						$destinationShuttleYesCheckedString=' checked';
					} else {
						$destinationShuttleNoCheckedString=' checked';
					}
?>
                <div class="col-md-8">
					<input id="destinationShuttleYes" name="destinationShuttle" type="radio" value="1" <?php echo $destinationShuttleYesCheckedString;?>> 
                    <label for="destinationShuttleYes">Yes</label> 
                    <input id="destinationShuttleNo" name="destinationShuttle" type="radio" value="0" <?php echo $destinationShuttleNoCheckedString;?>>
                    <label for="destinationShuttleNo">No</label>
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="destinationSpecial">Destination Special Instructions</label> 
                </div>
                <div class="col-md-8 mg-b-lg">
                    <input class="form-control" id="destinationSpecial" placeholder="Special Instructions" type="text" value="<?php echo $destinationInstructions;?>"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">Status</div>
                <div class="col-md-8">
                    <select class="form-control" id="status">
                        <option>Not confirmed</option>
                        <option>Confirmed</option>
                        <option>Left voice mail</option>
                        <option>No answer</option>
                        <option>Busy signal</option>
                        <option>Confirmed by CSR</option>
                        <option>Do Not Call</option>
                        <option>Confirmed by dispatch</option>
                    </select> 
                </div>
                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="destination">Confirmed By</label> 
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="confirmedBy" placeholder="Confirmed by" type="text" value="<?php echo $confirmedBy;?>"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="weight">Weight</label> 
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="weight" placeholder="####" type="text" value="<?php echo $weight;?>"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="weightType">Weight Type</label> 
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="weightType" type="text" value="<?php echo $weightType;?>"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="vault">Vault/Pack Order</label> 
                </div>
                <div class="col-md-8 mg-b-lg">
                    <input class="form-control" id="vault" placeholder="Type something" type="text" value="<?php echo $vaultPackOrder;?>">
                </div>
            </div>
            <div class="col-md-12">
                <h1 class="no-mg-t">Crew</h1>
            </div>
            <div class="col-md-12">

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="drivers">Driver(s)</label> 
                </div>
                <div class="col-md-8">
                    <select class="form-control chosen-select" id="drivers" multiple>
                        <?php
                            $query="SELECT * FROM moverAdmin.employees WHERE canDrive>0;";
                            $drivers=query($query);
                            foreach($drivers as $key=>$driver){
                                echo '<option>'.$driver['first'].' '.$driver['last'].'</option>';
                            }
                        ?>
                    </select> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="laborers">Laborer(s)</label> 
                </div>
                <div class="col-md-8">
                    <select class="form-control chosen-select" id="laborers" multiple>
                    <?php
                        $query="SELECT * FROM moverAdmin.employees;";
                        $laborers=query($query);
                        foreach($laborers as $key=>$laborer){
                            echo '<option>'.$laborer['first'].' '.$laborer['last'].'</option>';
                        }
                    ?>
                    </select> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="driverNotes">Driver Notes</label> 
                </div>
                <div class="col-md-8 mg-b-lg">
					<input class="form-control" id="driverNotes" placeholder="Notes" type="text" value="<?php echo $notes;?>">
                </div>
            </div>
            <div class="col-md-12">
                <h1 class="no-mg-t">Equipment</h1>
            </div>
            <div class="col-md-12">    
                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="equipment">Equipment</label> 
                </div>
                <div class="col-md-8">
                    <select class="form-control chosen-select" id="equipment" multiple>
                    <?php
                        $query="SELECT * FROM moverAdmin.equipment;";
                        $equipments=query($query);
                        foreach($equipments as $key=>$equipment){
                            echo '<option>'.$equipment['name'].'</option>';
                        }
                    ?>
                    </select> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="shuttleTruckNumber">Shuttle Truck Number</label> 
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="shuttleTruckNumber" placeholder="##" type="text" value="<?php echo $shuttleTruckNumber;?>"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="insurance">Do daily insurance rates apply?</label><br>
                </div>
<?php
					$dailyInsYesCheckedString='';
					$dailyInsNoCheckedString='';
					if(isset($insuranceChargesApply) && ($insuranceChargesApply>0)){
						$dailyInsYesCheckedString=' checked';
					} else {
						$dailyInsNoCheckedString=' checked';
					}
?>
                <div class="col-md-8">
					<input checked id="insuranceYes" name="insurance" type="radio" value="1" <?php echo $dailyInsYesCheckedString;?>> 
                    <label for="insuranceYes" onclick="">Yes</label> 
                    <input id="insuranceNo" name="insurance" type="radio" value="0" <?php echo $dailyInsNoCheckedString;?>> 
                    <label for="insuranceNo" onclick="">No</label> 
                </div>
                <div class="clearfix"></div>
                <div class="col-md-8 col-md-offset-3 mg-b-lg mg-t">
					<button class="btn btn-default" id="submit" type="submit">
<?php
	if($jobid=='new'){
		echo 'Add ';
	} else {
		echo 'Save ';
	}
?>
Job</button> <!-- /content wrapper -->
                </div>
            </div>
        </section>
        <!-- /main content -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
     <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script> 
     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
     <script src="/js/chosen.jquery.min.js"></script> <!-- /core scripts -->
     <!-- theme scripts -->
     <script src="/js/global.js"></script> <script src="/js/off-canvas.js"></script> 
     <script src="/vendor/jquery.placeholder.js"></script> 
     <script src="/vendor/offline/offline.min.js"></script> <script src="/vendor/pace/pace.min.js"></script> 
     <script src="/js/main.js"></script> <script src="/plugins/datepicker/js/bootstrap-datepicker.js"></script>
     <link href="http://jdewit.github.io/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet">
    <script src="/plugins/timepicker/timepicker.js"></script> <!-- /theme scripts -->
     <script type="text/javascript">
    $("#phone").keyup(function(){
            var text = $("#phone").val(); 
            text = text.replace(/(\d{3})(\d{3})(\d{4})/, "$1-$2-$3");
            $("#phone").val(text)
        });


        $('#startDate').datepicker({
            todayBtn: "linked"
        });
        $('#endDate').datepicker({
            todayBtn: "linked"
        });

        $( "#startDate" ).change(function() {
          if($('#endDate').val() == ''){
            $('#endDate').val($('#startDate').val());
          }
        });


        $('#startTime').click(function(){
            console.log('this');
            //Convert bootstrap 2 timpicker to 3
            if ( $(this).hasClass('icon-chevron-up') ) {
                $(this).removeClass('icon-chevron-up').addClass('glyphicon glyphicon-chevron-up');
            }
            if ( $(this).hasClass('icon-chevron-down') ) {
                $(this).removeClass('icon-chevron-down').addClass('glyphicon glyphicon-chevron-down');
            }
        });

        $('#startTime').timepicker();
        $('#onsiteTime').timepicker();
        $(".chosen-select").chosen();

        $('#submit').click(function() {
            var formData = new FormData();

            var formData = {
				jobid:'<?php echo $jobid;?>',
                startDate                     :$('#startDate').val(),
                startTime                    :$('#startTime').val(),
                onsiteTime                   :$('#onsiteTime').val(),
                regNum                :$('#regNumber').val(),
                shipperName              :$('#shipperName').val(),
                shipperPhone             :$('#phone').val(),
                altShipperName           :$('#altShipperName').val(),
                altPhone          :$('#altPhone').val(),
                originAddress            :$('#originAddr').val(),
                originShuttle            :$('input[name=originShuttle]:checked').val(),
                originInstructions       :$('#originSpecial').val(),
                destinationAddress       :$('#destination').val(),
                destinationShuttle       :$('input[name=destinationShuttle]:checked').val(),
                destinationInstructions  :$('#destinationSpecial').val(),
                status                   :$('#status').val(),
                confirmedBy              :$('#confirmedBy').val(),
                weight                   :$('#weight').val(),
                weightType               :$('#weightType').val(), //this posts an array or "undefined if nothing is selected"
                vaultPackOrder                    :$('#vault').val(),
                notes              :$('#driverNotes').val(),
                shuttleTruckNumber       :$('#shuttleTruckNumber').val(),
                insuranceChargesApply :$('input[name=insurance]:checked').val()
            };

            console.log(formData);
	 		$.ajax({
                type: 'POST',
                url:    '/newJobAjax.php?action=saveJob',
                data: formData,
                encode: true,
                success: function(result){
                    //alert(result);
                    //$('#submit').hide();
                    window.location.replace("/jobs");
                },
                fail: function(result){
                    alert('Request failed. Please reload the page and try again.');
                }
            });		
			
        });
    </script><!-- /body -->
     <!-- page level scripts -->
     <!-- /page level scripts -->
</body>
</html>
