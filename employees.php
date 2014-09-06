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
    <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/skins/palette.css" id="skin">
    <link rel="stylesheet" href="/css/fonts/style.1.css" id="font">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" href="/css/slider.css">
    <link rel="stylesheet" href="/vendor/offline/theme.css">
    <link rel="stylesheet" href="/css/employee.css">    
    <link href="/plugins/datepicker/css/datepicker.css" rel="stylesheet">
    <link href="/css/chosen.min.css" rel="stylesheet">
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
    .chosen-select{
        width: 100%;
    }
    .chosen-container-multi .chosen-choices li.search-field input[type=text]{
        height: auto;
    }
</style>

<?php
include 'includes/header.php';

    // Set vars
	$nickname='';
    $first='';
    $last='';
	$email='';
	$address='';

    $dailyRate='';
	$cellPhone='';
	$homePhone='';
    $empSince='';
	$CID='';

	$PVO='';
	$drugScreened='';
	$screenedDate='';
	$canDrive='';
    $license='';

	$licenseState='';
	$licenseClass='';
	$bobtailExp='';
	$bobtailYears='';
	$bobtailMiles='';

	$tractorExp='';
	$tractorYears='';
	$tractorMiles='';
    $picURI='';
    $skill='5';
	$endorsements=array();
    if(isset($_REQUEST['id'])){
    	$employeeid=$_REQUEST['id'];
    	global $db;
    	$sql="SELECT * from moverAdmin.employees WHERE idemployees=?";
    	$empInfo=query($sql,$employeeid)[0];
    	if(!isset($empInfo)){
    		$employeeid='new';
    		// do not set anything, that id does not exit
    	} else {

			// check if we have access
			$sql="SELECT adminid FROM moverAdmin.employees WHERE idemployees=?;";
			$results=query($sql,$employeeid);
			$results=$results[0];
			if($results['adminid']!=$_SESSION['userid']){
				$employeeid='new';
			} else {

				$nickname=$empInfo['nickname'];
				$first=$empInfo['first'];
				$last=$empInfo['last'];
				$email=$empInfo['email'];
				$address=$empInfo['address'];

				$dailyRate=$empInfo['dailyRate'];
				$cellPhone=$empInfo['cellPhone'];
				$homePhone=$empInfo['homePhone'];
				$empSince=$empInfo['empSince'];
				$CID=$empInfo['CID'];

				$PVO=$empInfo['PVO'];
				$drugScreened=$empInfo['drugScreened'];
				$screenedDate=$empInfo['screenedDate'];
				$canDrive=$empInfo['canDrive'];
				$license=$empInfo['license'];

				$licenseState=$empInfo['licenseState'];
				$licenseClass=$empInfo['licenseClass'];
				$bobtailExp=$empInfo['bobtailExp'];
				$bobtailYears=$empInfo['bobtailYears'];
				$bobtailMiles=$empInfo['bobtailMiles'];

				$tractorExp=$empInfo['tractorExp'];
				$tractorYears=$empInfo['tractorYears'];
				$tractorMiles=$empInfo['tractorMiles'];
				$picURI=$empInfo['picURI'];
				$skill=$empInfo['skill'];

				$sql="SELECT endorsement FROM moverAdmin.employeeEndorsements WHERE employeeid=?;";
				$results=query($sql,$employeeid);
				foreach($results as $key=>$result){
					$endorsements[]=$result['endorsement'];
				}
			}
    	}
    } else {
    	$employeeid='new';
    }
?>


<body>
   <?php 
	
	error_reporting(-1);
?>

            <!-- main content -->
            <section class="main-content">

                <!-- content wrapper -->
                <div class="content-wrap">
					<div class="col-md-12">
						<h1 class="no-mg-t">
<?php
if($employeeid=='new'){
	echo 'New ';
} else {
	echo 'Edit ';
}
?>
Employee</h1>
					</div>
					<div id="employeeidDiv" style="display:none;"><?php echo $employeeid;?></div>

                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="nickname">Nickname</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="nickname" class="form-control" placeholder="Nickname" value="<?php echo $nickname;?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="firstname">First Name</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="firstname" class="form-control" placeholder="First Name" value="<?php echo $first;?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="lastname">Last Name</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="lastname" class="form-control" placeholder="Last Name" value="<?php echo $last;?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="email" class="form-control" placeholder="Email" value="<?php echo $email;?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="address">Address</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="address" class="form-control" placeholder="Address" value="<?php echo $address;?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="rate">Regular Daily Rate</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="rate" class="form-control" placeholder="Regular Daily Rate" value="<?php echo $dailyRate;?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="cell">Cell Phone</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="cell" class="form-control" placeholder="###-###-####" value="<?php echo $cellPhone;?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="phone">Home Phone Number</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="phone" class="form-control" placeholder="###-###-####" value="<?php echo $homePhone;?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="empSince">Date Started Working</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="empSince" class="form-control" placeholder="5-15-2014" value="<?php if($empSince!=''){echo date('m/d/Y',strtotime($empSince));}?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="cid">CID Number</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="cid" class="form-control" placeholder="###" value="<?php echo $CID;?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="pvo">PVO Number</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="pvo" class="form-control" placeholder="###" value="<?php echo $PVO;?>">
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="rentOwn">Drug screened?</label><br>
                    </div>
<?php
					$drugYesCheckedString='';
					$drugNoCheckedString='';
					if(isset($drugScreened) && ($drugScreened>0)){
						$drugYesCheckedString=' checked';
					} else {
						$drugNoCheckedString=' checked';
					}
?>

                    <div class="col-md-8">
						<input id="drugScreenedYes" name="drugScreened" type="radio" value="1" <?php echo $drugYesCheckedString;?>> 
                        <label for="drugScreenedYes">Yes</label> 
                        <input id="drugScreenedNo" name="drugScreened" type="radio" value="0" <?php echo $drugNoCheckedString;?>>
                        <label for="drugScreenedNo">No</label>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="pvo">Last Screened Date</label>
                    </div>
                    <div class="col-md-8">
						<input type="text" id="drugScreenDate" class="form-control" value="<?php if($screenedDate!=''){echo date('m/d/Y',strtotime($screenedDate)); }?>">
                    </div>


                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="rentOwn">Can drive?</label><br>
                    </div>
<?php
					$driveYesCheckedString='';
					$driveNoCheckedString='';
					if(isset($canDrive) && ($canDrive>0)){
						$driveYesCheckedString=' checked';
					} else {
						$driveNoCheckedString=' checked';
					}
?>
                    <div class="col-md-8">
						<input id="driverYes" name="driver" type="radio" value="1" <?php echo $driveYesCheckedString;?>> 
                        <label for="driverYes">Yes</label> 
                        <input id="driverNo" name="driver" type="radio" value="0" <?php echo $driveNoCheckedString;?>>
                        <label for="driverNo">No</label>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="idNumber">License/ID Number</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="idNumber" class="form-control" placeholder="###" value="<?php echo $license;?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="stateIssued">State Issued</label>
                    </div>
                    <div class="col-md-8">
                        <select class="form-control" id="issueState">
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="idClass">Class</label>
                    </div>
                    <div class="col-md-8">
                        <select id="idClass" class="form-control">
                            <option value="pick">Pick One</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-3 label">Endorsements</div>
                    <div class="col-md-8">
                        <select class="form-control chosen-select" id="endorsements" multiple>
                            <option value="double/tripple">Double/Tripple</option>
                            <option value="tanker">Tanker</option>
                            <option value="hazmat">Hazmat</option>
                        </select>
                    </div>


                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="bobtailExperience">Bobtail Experience?</label><br>
                    </div>
<?php
					$bobtailYesCheckedString='';
					$bobtailNoCheckedString='';
					if(isset($bobtailExp) && ($bobtailExp>0)){
						$bobtailYesCheckedString=' checked';
					} else {
						$bobtailNoCheckedString=' checked';
					}
?>
                    <div class="col-md-8">
					<input id="bobtailExperienceYes" name="bobtailExperience" type="radio" value="1" <?php echo $bobtailYesCheckedString;?>> 
                        <label for="bobtailExperienceYes">Yes</label> 
                        <input id="bobtailExperienceNo" name="bobtailExperience" type="radio" value="0" <?php echo $bobtailNoCheckedString;?>>
                        <label for="bobtailExperienceNo">No</label>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="bobtailExperienceYears">Years Driver</label>
                    </div>
                    <div class="col-md-8">
						<input type="text" id="bobtailExperienceYears" class="form-control" placeholder="Years" value="<?php echo $bobtailYears;?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="bobtailExperienceMiles">Estimated Miles Driven</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="bobtailExperienceMiles" class="form-control" placeholder="Miles" value="<?php echo $bobtailMiles;?>">
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="tractorExperience">Tractor Experience?</label><br>
                    </div>
<?php
					$tractorYesCheckedString='';
					$tractorNoCheckedString='';
					if(isset($tractorExp) && ($tractorExp>0)){
						$tractorYesCheckedString=' checked';
					} else {
						$tractorNoCheckedString=' checked';
					}
?>
                    <div class="col-md-8">
					<input id="tractorExperienceYes" name="tractorExperience" type="radio" value="1" <?php echo $tractorYesCheckedString;?>> 
                        <label for="tractorExperienceYes">Yes</label> 
                        <input id="tractorExperienceNo" name="tractorExperience" type="radio" value="0" <?php echo $tractorNoCheckedString;?>>
                        <label for="tractorExperienceNo">No</label>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="tractorExperienceYears">Years Driver</label>
                    </div>
                    <div class="col-md-8">
						<input type="text" id="tractorExperienceYears" class="form-control" placeholder="Years" value="<?php echo $tractorYears;?>">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="tractorExperienceMiles">Estimated Miles Driven</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" id="tractorExperienceMiles" class="form-control" placeholder="Miles" value="<?php echo $tractorMiles;?>">
                    </div>





                    <div class="clearfix"></div>
                    <div class="col-md-3 label">
                        <label for="ex1">Laborer Skill Level</label>
                    </div>
                    <div class="col-md-8">
                        <input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-max="10" data-slider-step="1" data-slider-value="<?php echo $skill;?>"/>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3 label" style="display:none;">
                        <label>Photo Upload</label>
                    </div>
                    <div class="col-md-8">
                        <input type="file" name="picture" id="file" style="display:none;">
                    </div>
                    <div class="clearfix"></div>
<?php
					if(isset($employeeid) && $employeeid=='new'){
						$saveAddText='Add ';
					} else {
						$saveAddText='Save ';
					}
?>
                    <div class="col-md-8 col-md-offset-3 mg-b-lg">
						<button type="submit" class="btn btn-default" id="submit"><?php echo $saveAddText;?>Employee</button> 
                    </div>
                </div>
                <!-- /content wrapper -->
            </section>
            <!-- /main content -->
        </section>

    </div>

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
    <script src="/js/bootstrap-slider.js"></script>
    <script src="/js/jasny-bootstrap.min.js"></script>
    <script src="/js/main.js"></script> <script src="/plugins/datepicker/js/bootstrap-datepicker.js"></script>
    <script src="/js/chosen.jquery.min.js"></script>

					<script>
					// hack for loading currently saved state option and class 
					$("#issueState").val("<?php echo $licenseState; ?>");
					$("#idClass").val("<?php echo $licenseClass; ?>");

					//hack for loading endorsements
<?php 
					$endorsementsString='';
					foreach($endorsements as $key=>$endorsement){
						$endorsementsString.=','.$endorsement;
					}
?>
						$("#endorsements").val("<?php echo $endorsementsString; ?>".split(","));
<?php
?>
					</script>

    <script type="text/javascript">
        $(".chosen-select").chosen();

        $('#drugScreenDate').datepicker({
            todayBtn: "linked"
        });
        $('#empSince').datepicker({
            todayBtn: "linked"
        });
    	
        $('#ex1').slider({
    		formater: function(value) {
				return 'Current value: ' + value;
			}
	 	});
	 	
	 	$('#submit').click(function () {
            var formData = new FormData();
            formData = {
				employeeid			:$('#employeeidDiv').html(),
                nickname               :$('#nickname').val(),
	 			first				   :$('#firstname').val(),
	 			last				   :$('#lastname').val(),
                email                  :$('#email').val(),
                address                :$('#address').val(),
	 			dailyRate				   :$('#rate').val(),
                cellPhone                   :$('#cell').val(),
                homePhone                   :$('#phone').val(),
	 			empSince			   :$('#empSince').val(),
                CID                    :$('#cid').val(),
                PVO                    :$('#pvo').val(),
                drugScreened           :$('input[name=drugScreened]:checked').val(),
                screenedDate	:$('#drugScreenDate').val(),
                canDrive               :$('input[name=driver]:checked').val(),
                license					:$('#idNumber').val(),
                licenseState	:$('#issueState').val(),
                licenseClass           :$('#idClass').val(),
				endorsements           :$('#endorsements').val(),
                bobtailExp			:$('input[name=bobtailExperience]:checked').val(),
                bobtailYears		:$('#bobtailExperienceYears').val(),
                bobtailMiles		:$('#bobtailExperienceMiles').val(),
                tractorExp		:$('input[name=tractorExperience]:checked').val(),
                tractorYears		:$('#tractorExperienceYears').val(),
                tractorMiles		:$('#tractorExperienceMiles').val(),
                skill                  :$('input[id=ex1]').data('slider').getValue(),
	 			picURI		:$('#file').get(0).files[0]
	 		};
			console.log(formData);

	 		$.ajax({
                type: 'POST',
                url:    '/employeeAjax.php?action=saveEmp',
                data: formData,
                encode: true,
                success: function(result){
                    //alert(result);
                    //$('#submit').hide();
                    window.location.replace("/employees");
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
