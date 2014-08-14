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
    <link rel="stylesheet" href="css/chosen.min.css">

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
    .chosen-select{
        width: 100%;
    }
    .chosen-container-multi .chosen-choices li.search-field input[type=text]{
        height: auto;
    }
</style>


<!--
<div class="form-group">
                            <div class="col-md-4 col-xs-12">
                                <select multiple class="chosen-select">
                                    <option>Test 1</option>
                                    <option>Tsfd</option>
                                </select>
                            </div>
                        </div>
-->                       


<body>
   <?php include 'includes/header.php'; ?>

            <!-- main content -->
            <section class="main-content">

                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="col-md-12">
                        <h1 class="no-mg-t">New Job</h1>
                    </div>
                    <div class="col-sm-12 form-container">
                        <!-- EDIT :datepicker this box -->
						     	<div class="col-sm-4 form-container">
                        	<div class="form-group has-error">
                            	<label for="date">Job Date</label>
                            	<input type="text" id="date" class="form-control" placeholder="05-15-2014">
                        	</div>
                        </div>
                        <div class="col-sm-4 form-container">
                        	<div class="form-group">
                            	<label for="startTime">Job Start time</label>
                            	<input type="text" id="startTime" class="form-control" placeholder="h:mm PM">
	                     	</div>
                        </div>
                        <div class="col-sm-4 form-container">
                        	<div class="form-group has-error">
                            	<label for="onsiteTime">On-site time</label>
                            	<input type="text" id="onsiteTime" class="form-control" placeholder="h:mm PM">
                        	</div>
                        </div>
                    </div>
                    
                    <div class="col-xs-12 form-container">
                   	 <div class="form-group has-error">
                   	 	<div class="col-xs-12">
								  <label for="moveType">Move Type</label>                         
                          <select multiple id="moveType" class="chosen-select">
                            <option>Left</option>
                            <option>Right</option>
                            <option>Up</option>
                            <option>Down</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-sm-12 form-container">
						     	<div class="col-sm-4 form-container">
                        	<div class="form-group has-error">
                            	<label for="regNumber">Reg Number</label>
                            	<input type="text" id="regNumber" class="form-control" placeholder="Reg Number">
                        	</div>
                        </div>
                        <div class="col-sm-4 form-container">
                        	<div class="form-group has-error">
                            	<label for="shipper">Shipper</label>
                            	<input type="text" id="shipper" class="form-control" placeholder="Shipper">
	                     	</div>
                        </div>
                        <div class="col-sm-4 form-container">
                        	<div class="form-group has-error">
                            	<label for="phone">Phone Number</label>
                            	<input type="text" id="phone" class="form-control" placeholder="###-###-####">                        	</div>
                        </div>
                    </div>
                    <div class="col-sm-12 form-container">
                    		<div class="col-sm-12 form-container">
                    			<div class="form-group has-error">
                         	   <label for="originAddr">Origin</label>
                         	   <input type="text" id="originAddr" class="form-control" placeholder="Address">
                       		</div>
                        </div>
                    </div>
                    <div class="col-sm-12 form-container">
                    		<div class="col-sm-12 form-container">
                    			<div class="form-group">
                           	 <label for="originSpecial">Origin Special Instructions</label>
                            	<input type="text" id="originSpecial" class="form-control" placeholder="Special Instructions">
                        	</div>
                        </div>
                    </div>
                    <div class="col-sm-12 form-container">
                    		<div class="col-sm-12 form-container">
                    			<div class="form-group has-error">
                         	   <label for="destination">Destination</label>
                         	   <input type="text" id="destination" class="form-control" placeholder="Address">
                       		</div>
                        </div>
                    </div>
                    <div class="col-sm-12 form-container">
                    		<div class="col-sm-12 form-container">
                    			<div class="form-group">
                           	 <label for="destinationSpecial">Destination Special Instructions</label>
                            	<input type="text" id="destinationSpecial" class="form-control" placeholder="Special Instructions">
                        	</div>
                        </div>
                    </div>
                    
					     <div class="col-sm-12 form-container">
						     	<div class="col-sm-6 form-container">
                        	<div class="form-group">
                            	<label for="weight">Weight</label>
                            	<input type="text" id="weight" class="form-control" placeholder="####">
                        	</div>
                        </div>
                        <div class="col-sm-6 form-container">
                        	<div class="form-group">
                            	<label for="weightType">Weight Type</label>
                            	<select multiple id="weightType" class="chosen-select">
                            		<option>Pounds</option>
                            		<option>Grams</option>
                            		<option>Ounces</option>
                            		<option>Tons</option>
                            	</select>
	                     	</div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 form-container">
                    		<div class="col-sm-12 form-container">
                    			<div class="form-group">
                           	 <label for="vault">Vault/Pack Order</label>
                            	<input type="text" id="vault" class="form-control" placeholder="Type something">
                        	</div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-12">
                        <h1 class="no-mg-t">Crew</h1>
                    </div>            
                    <div class="col-xs-12 form-container">
                   	 <div class="form-group">
                   	 	<div class="col-xs-12">
								  <label for="drivers">Driver(s)</label>                         
                          <select multiple id="drivers" class="chosen-select">
                            <option>Bill Nye</option>
                            <option>Earl of Bacon</option>
                            <option>Mr. T</option>
                            <option>George Washington</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 form-container">
                   	 <div class="form-group">
                   	 	<div class="col-xs-12">
								  <label for="laborers">Laborer(s)</label>                         
                          <select multiple id="laborers" class="chosen-select">
                            <option>Paco</option>
                            <option>Steve</option>
                            <option>Yolando</option>
                            <option>George Washington Carver</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 form-container">
                    		<div class="col-sm-12 form-container">
                    			<div class="form-group">
                         	   <label for="driverNotes">Driver Notes</label>
                         	   <input type="text" id="driverNotes" class="form-control" placeholder="Notes">
                       		</div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="col-md-12">
                        <h1 class="no-mg-t">Equipment</h1>
                    </div>      
                    <div class="col-xs-12 form-container">
                   	 <div class="form-group">
                   	 	<div class="col-xs-12">
								  <label for="equipment">Equipment</label>                         
                          <select multiple id="equipment" class="chosen-select">
                            <option>Hammer</option>
                            <option>Cotton Candy Machine</option>
                            <option>Walrus</option>
                            <option>Cheese Cutter</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 form-container">
						     	<div class="col-sm-6 form-container">
                        	<div class="form-group">
                            	<label for="truckNo">Shuttle Truck Number</label>
                            	<input type="text" id="truckNo" class="form-control" placeholder="##">
                        	</div>
                        </div>
                        <div class="col-sm-6 form-container">
                        	<div class="form-group">
                            	<label for="insurance">Do daily insurance rates apply?</label>
                            		<br><input id="insuranceYes" name="insurance" type="radio" checked>
  											<label for="insuranceYes" onclick="">Yes</label>
											<input id="insuranceNo" name="insurance" type="radio">
  											<label for="insuranceNo" onclick="">No</label>
	                     	</div>
                        </div>
                    </div>
                    
                    
                </div>
                <!-- /content wrapper -->
            </section>
            <!-- /main content -->

    </div>

    <!-- core scripts -->
    <script src="vendor/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/chosen.jquery.min.js"></script>
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
    <script type="text/javascript">
        $(".chosen-select").chosen();
    </script>
</body>
<!-- /body -->

</html>
