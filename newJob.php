<!DOCTYPE html>
<?php include_once "global.php";?>

<html class="no-js">
<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta content="Flat, Clean, Responsive, admin template built with bootstrap 3" name="description">
    <meta content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1" name="viewport">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=1, initial-scale=1, maximum-scale=1">

    <title>MoverAdmin | Simple Crew Management</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <!-- /bootstrap -->

    <title>MoverAdmin | Simple Crew Management</title><!-- bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"><!-- /bootstrap -->
    <!-- core styles -->
    <link href="/css/skins/palette.css" id="skin" rel="stylesheet">
    <link href="/css/fonts/style.1.css" id="font" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/vendor/offline/theme.css" rel="stylesheet">
    <link href="/css/chosen.min.css" rel="stylesheet"><!-- /core styles -->

    <link rel="stylesheet" href="/css/skins/palette.css" id="skin">
    <link rel="stylesheet" href="/css/fonts/style.1.css" id="font">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/vendor/offline/theme.css">
    <link rel="stylesheet" href="/css/chosen.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- load modernizer -->

    <script src="vendor/modernizr.js"></script>
    <style type="text/css">
.searchResults{
=======
    <script src="/vendor/modernizr.js"></script>
</head>

<!-- body -->
<style type="text/css">
    .col-sm-12.form-container{
        margin-top: 10px;
    }
    .searchResults{
>>>>>>> b5a668a86ae08e4d9c2c7ec251d71ef7a6f0a98a:newJob.php
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
</head><!-- body -->

<body>
    <?php include 'includes/header.php'; ?><!--ADD has-error class to all the elements that are required after the form is submitted-->
    <!-- main content -->

    <section class="main-content">
        <!-- content wrapper -->

        <div class="content-wrap">
            <div class="col-md-12">
                <h1 class="no-mg-t">New Job</h1>
            </div>
            <div class="col-sm-4 form-group">
                <label for="date">Job Date</label> 
                <input class="form-control" id="date" placeholder="05-15-2014" type="text">
            </div>

            <div class="col-sm-4 form-group">
                <label for="startTime">Job Start time</label> 
                <input class="form-control" id="startTime" placeholder="h:mm PM" type="text">
            </div>

            <div class="col-sm-4 form-group">
                <label for="onsiteTime">On-site time</label> 
                <input class="form-control" id="onsiteTime" placeholder="h:mm PM" type="text">
            </div>

            <div class="form-group col-sm-12">
                <label for="moveType">Move Type</label> 
                <select class="form-control chosen-select" id="moveType" multiple><option>Pack</option><option>Crate/Freight</option><option>Export Wrap</option><option>Unpack</option><option>Load</option><option>Deliver</option><option>Early Out</option><option>Release</option><option>Shuttle</option><option>DOS</option><option>SIT</option><option>APU</option><option>DPU</option><option>Mat'l Del</option><option>Mat'l P/U</option><option>Spot Trailer</option><option>Orig Svs</option><option>Dest Svs</option><option>Smart Move</option><option>Air</option><option>Surface</option><option>Military/GSA</option><option>Install (AMS)</option><option>Install (3P)</option><option>Rigging (3P)</option><option>PC Dis/Rec (3P)</option><option>Storage In</option><option>Storage Perm</option><option>Stage & Store</option><option>Day 1 of 2</option><option>Day 2 of 2</option><option>Day 1 of 3</option><option>Day 2 of 3</option><option>Day 3 of 3</option><option>Day 1 of 4</option><option>Day 2 of 4</option><option>Day 3 of 4</option><option>Day 4 of 4</option><option>Other-See Driver/Crew/Scope Notes</option></select>
            </div>

            <div class="col-sm-12 form-group">
                <label for="otherDriverNotes">Other Driver Notes</label> 
                <input class="form-control" id="otherDriverNotes" placeholder="Other Driver Notes" type="text">
            </div>

            <div class="col-sm-4 form-group">
                <label for="regNumber">Reg Number</label> 
                <input class="form-control" id="regNumber" placeholder="Reg Number" type="text">
            </div>

            <div class="col-sm-4 form-group">
                <label for="shipper">Shipper</label> 
                <input class="form-control" id="shipper" placeholder="Shipper" type="text">
            </div>

            <div class="col-sm-4 form-group">
                <label for="phone">Phone Number</label> 
                <input class="form-control" id="phone" placeholder="###-###-####" type="text">
            </div>

            <div class="col-sm-12 form-group">
                <label for="originAddr">Origin</label> 
                <input class="form-control" id="originAddr" placeholder="Address" type="text">
            </div>

            <div class="col-sm-12 form-group">
                <label for="originSpecial">Origin Special Instructions</label> 
                <input class="form-control" id="originSpecial" placeholder="Special Instructions" type="text">
            </div>

            <div class="col-sm-12 form-group">
                <label for="destination">Destination</label> 
                <input class="form-control" id="destination" placeholder="Address" type="text">
            </div>

            <div class="col-sm-12 form-group">
                <label for="destinationSpecial">Destination Special Instructions</label> 
                <input class="form-control" id="destinationSpecial" placeholder="Special Instructions" type="text">
            </div>

            <div class="col-sm-6 form-group">
                <label for="weight">Weight</label> 
                <input class="form-control" id="weight" placeholder="####" type="text">
            </div>

            <div class="col-sm-6 form-group">
                <label for="weightType">Weight Type</label> 
                <select class="form-control chosen-select" id="weightType" multiple>
                    <option>
                        Pounds
                   </option>
<body>
   <?php include 'includes/header.php'; ?>

            <!-- main content -->
            <section class="main-content">

                <!-- content wrapper -->
                <div class="content-wrap">
                    <div class="col-md-12">
                        <h1 class="no-mg-t">New Job</h1>
                    </div>
                          <div class="row">                    
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
                    </div>
                    
                    <div class="row">
                    <div class="col-sm-12 form-container">
                     <div class="form-group has-error">
                        <div class="col-sm-12 form-container">
                                  <label for="moveType">Move Type</label>                         
                          <select id="moveType" multiple class="form-control chosen-select">
                            <option>Pack</option>
                            <option>Crate/Freight</option>
                            <option>Export Wrap</option>
                            <option>Unpack</option>
                            <option>Load</option>
                            <option>Deliver</option>
                            <option>Early Out</option>
                            <option>Release</option>
                            <option>Shuttle</option>
                            <option>DOS</option>
                            <option>SIT</option>
                            <option>APU</option>
                            <option>DPU</option>
                            <option>Mat'l Del</option>
                            <option>Mat'l P/U</option>
                            <option>Spot Trailer</option>
                            <option>Orig Svs</option>
                            <option>Dest Svs</option>
                            <option>Smart Move</option>
                            <option>Air</option>
                            <option>Surface</option>
                            <option>Military/GSA</option>
                            <option>Install (AMS)</option>
                            <option>Install (3P)</option>
                            <option>Rigging (3P)</option>
                            <option>PC Dis/Rec (3P)</option>
                            <option>Storage In</option>
                            <option>Storage Perm</option>
                            <option>Stage & Store</option>
                            <option>Day 1 of 2</option>
                            <option>Day 2 of 2</option>
                            <option>Day 1 of 3</option>
                            <option>Day 2 of 3</option>
                            <option>Day 3 of 3</option>
                            <option>Day 1 of 4</option>
                            <option>Day 2 of 4</option>
                            <option>Day 3 of 4</option>
                            <option>Day 4 of 4</option>
                            <option>Other-See Driver/Crew/Scope Notes</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    </div>
                    
                    <div class="row">
                            <div class="col-sm-12 form-container">
                                <div class="col-sm-12 form-container">
                            <div class="form-group has-error">
                                <label for="otherDriverNotes">Other Driver Notes</label>
                                <input type="text" id="otherDriverNotes" class="form-control" placeholder="Other Driver Notes">
                            </div>
                        </div>
                            </div>
                    </div>
                    
                    <div class="row">
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
                                <input type="text" id="phone" class="form-control" placeholder="###-###-####">                          </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="col-sm-12 form-container">
                            <div class="col-sm-12 form-container">
                                <div class="form-group has-error">
                               <label for="originAddr">Origin</label>
                               <input type="text" id="originAddr" class="form-control" placeholder="Address">
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="col-sm-12 form-container">
                            <div class="col-sm-12 form-container">
                                <div class="form-group">
                             <label for="originSpecial">Origin Special Instructions</label>
                                <input type="text" id="originSpecial" class="form-control" placeholder="Special Instructions">
                            </div>
                        </div>
                    </div>
                    </div>
                    
                          <div class="row">
                    <div class="col-sm-12 form-container">
                            <div class="col-sm-12 form-container">
                                <div class="form-group has-error">
                               <label for="destination">Destination</label>
                               <input type="text" id="destination" class="form-control" placeholder="Address">
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="col-sm-12 form-container">
                            <div class="col-sm-12 form-container">
                                <div class="form-group">
                             <label for="destinationSpecial">Destination Special Instructions</label>
                                <input type="text" id="destinationSpecial" class="form-control" placeholder="Special Instructions">
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="row">
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
                                <select multiple id="weightType" class="form-control chosen-select">
                                    <option>Pounds</option>
                                    <option>Grams</option>
                                    <option>Ounces</option>
                                    <option>Tons</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="col-sm-12 form-container">
                            <div class="col-sm-12 form-container">
                                <div class="form-group">
                             <label for="vault">Vault/Pack Order</label>
                                <input type="text" id="vault" class="form-control" placeholder="Type something">
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    
                    <div class="col-md-12">
                        <h1 class="no-mg-t">Crew</h1>
                    </div>            
                          <div class="row">                    
                    <div class="col-sm-12 form-container">  
                     <div class="form-group">
                        <div class="col-sm-12 form-container">
                          <label for="drivers">Driver(s)</label>                         
                            <?php
                                $query="SELECT * FROM moverAdmin.employees WHERE (CDL>0 OR license>0);";
                                $drivers=query($query);
                            ?>
                          <select multiple id="drivers" class="form-control chosen-select">
                            <?php
                                foreach($drivers as $key=>$driver){
                                    echo '<option>'.$driver['first'].' '.$driver['last'].'</option>';
                                }
                            ?>
                            <option>Bill Nye</option>
                            <option>Earl of Bacon</option>
                            <option>Mr. T</option>
                            <option>George Washington</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="col-sm-12 form-container">
                     <div class="form-group">
                        <div class="col-sm-12 form-container">
                                  <label for="laborers">Laborer(s)</label>                         
                            <?php
                                $query="SELECT * FROM moverAdmin.employees;";
                                $laborers=query($query);
                            ?>
                          <select multiple id="laborers" class="form-control chosen-select">
                            <?php
                                foreach($laborers as $key=>$laborer){
                                    echo '<option>'.$laborer['first'].' '.$laborer['last'].'</option>';
                                }
                            ?>
                            <option>Paco</option>
                            <option>Steve</option>
                            <option>Yolando</option>
                            <option>George Washington Carver</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="col-sm-12 form-container">
                            <div class="col-sm-12 form-container">
                                <div class="form-group">
                               <label for="driverNotes">Driver Notes</label>
                               <input type="text" id="driverNotes" class="form-control" placeholder="Notes">
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    
                    
                    <div class="col-md-12">
                        <h1 class="no-mg-t">Equipment</h1>
                    </div>
                    <div class="row">     
                    <div class="col-sm-12 form-container">
                     <div class="form-group">
                                    <div class="col-sm-12 form-container">                        
                                        <label for="equipment">Equipment</label>                         
                                <select multiple id="equipment" class="form-control chosen-select">
                                    <option>Hammer</option>
                                    <option>Cotton Candy Machine</option>
                                    <option>Walrus</option>
                                   <option>Cheese Cutter</option>
                             </select>
                           </div>
                      </div>
                    </div>
                    </div>
                    
                    <div class="row">
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
                                    <br><input id="insuranceYes" name="insurance" type="radio" value="yes" checked>
                                            <label for="insuranceYes" onclick="">Yes</label>
                                            <input id="insuranceNo" name="insurance" type="radio" value="no">
                                            <label for="insuranceNo" onclick="">No</label>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    <div class="row">
                            <div class="col-sm-12 form-container">
                            <div class="col-sm-4 form-container"></div>
                            <div class="col-sm-4 form-container">
                                <div class="form-group">
                                        <button type="submit" class="btn btn-default" id="submit">Add Job</button>
                                </div>
                            </div>
                            <div class="col-sm-4 form-container"></div>
                            </div>
                           </div>
                    
                    
                </div>
                <!-- /content wrapper -->
            </section>
            <!-- /main content -->

    </div>
                    <option>
                        Grams
                   </option>

                    <option>
                        Ounces
                   </option>

                    <option>
                        Tons
                   </option>
                </select>
            </div>

            <div class=" col-sm-12 col-sm-12 form-group">
                <label for="vault">Vault/Pack Order</label> 
                <input class="form-control" id="vault" placeholder="Type something" type="text">
            </div>

            <div class="col-md-12">
                <h1 class="no-mg-t">Crew</h1>
            </div>

            <div class=" col-sm-12 form-group col-sm-12">
                <label for="drivers">Driver(s)</label> 
                <select class="form-control chosen-select" id="drivers" multiple>
                    <option>
                        Bill Nye
                   </option>

                    <option>
                        Earl of Bacon
                   </option>

                    <option>
                        Mr. T
                   </option>

                    <option>
                        George Washington
                   </option>
                </select>
            </div>

            <div class="col-sm-12 form-group">
                <label for="laborers">Laborer(s)</label> 
                <select class="form-control chosen-select" id="laborers" multiple>
                    <option>
                        Paco
                   </option>

                    <option>
                        Steve
                   </option>

                    <option>
                        Yolando
                   </option>

                    <option>
                        George Washington Carver
                   </option>
                </select>
            </div>

            <div class="col-sm-12 form-group">
                <label for="driverNotes">Driver Notes</label> 
                <input class="form-control" id="driverNotes" placeholder="Notes" type="text">
            </div>

            <div class="col-md-12">
                <h1 class="no-mg-t">Equipment</h1>
            </div>

            <div class="col-sm-12 form-group">
                <label for="equipment">Equipment</label> 
                <select class="form-control chosen-select" id="equipment" multiple>
                    <option>
                        Hammer
                   </option>

                    <option>
                        Cotton Candy Machine
                   </option>

                    <option>
                        Walrus
                   </option>

                    <option>
                        Cheese Cutter
                   </option>
                </select>
            </div>

            <div class="col-sm-6 form-group">
                <label for="truckNo">Shuttle Truck Number</label> 
                <input class="form-control" id="truckNo" placeholder="##" type="text">
            </div>

            <div class="col-sm-6 form-group">
                <label for="insurance">Do daily insurance rates apply?</label><br>
                <input checked id="insuranceYes" name="insurance" type="radio" value="yes"> 
                <label for="insuranceYes" onclick="">Yes</label> 
                <input id="insuranceNo" name="insurance" type="radio" value="no"> <label for="insuranceNo" onclick="">No</label>
            </div>

            <div class="col-sm-4 col-sm-offset-4 form-group">
                <button class="btn btn-default" id="submit" type="submit">Add Job</button>
            </div>

            <div class="col-sm-4"></div>
        </div><!-- /content wrapper -->
    </section><!-- /main content -->
    <!-- core scripts -->
    <script src="vendor/jquery-1.11.1.min.js"></script> <script src="bootstrap/js/bootstrap.js"></script> <script src="js/chosen.jquery.min.js" type="text/javascript"></script> <!-- /core scripts -->
     <!-- theme scripts -->
     <script src="js/global.js"></script> <script src="js/off-canvas.js"></script> 
     <script src="vendor/jquery.placeholder.js"></script> 
     <script src="vendor/offline/offline.min.js"></script> 
     <script src="vendor/pace/pace.min.js"></script> 
     <script src="js/main.js"></script> 
     <!-- /theme scripts -->
     <script type="text/javascript">
        $(".chosen-select").chosen();
        $('#submit').click(function() {
            var formData = {
                'date': $('input[id=date]').val(),
                'start': $('input[id=startTime]').val(),
                'onsite': $('input[id=onsiteTime]').val(),
                'moveType': $('#moveType').val(), //this posts an array
                'otherNotes': $('input[id=otherDriverNotes]').val(),
                'regNo': $('input[id=regNumber]').val(),
                'shipper': $('input[id=shipper]').val(),
                'phone': $('input[id=phone]').val(),
                'oAddr': $('input[id=originAddr]').val(),
                'oSpec': $('input[id=originSpecial]').val(),
                'dest': $('input[id=destination]').val(),
                'destSpec': $('input[id=destinationSpecial]').val(),
                'weight': $('input[id=weight]').val(),
                'weightType': $('#weightType').val(), //this posts an array
                'vault': $('input[id=vault]').val(),
                'drivers': $('#drivers').val(), //this posts an array
                'laborers': $('#laborers').val(), //this posts an array
                'driverNotes': $('input[id=driverNotes]').val(),
                'equipment': $('#equipment').val(),
                'truckNo': $('input[id=truckNo]').val(),
                'insurance': $('input[name=insurance]:checked').val()
            }
            console.log($('input[name=insurance]:checked').val());
            $.ajax({
                type: 'POST',
                url: 'jobAdd.php',
                data: formData,
                dataType: 'json',
                encode: true
            })
        });
    </script><!-- /body -->
    <script src="/vendor/jquery-1.11.1.min.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="/js/chosen.jquery.min.js"></script>
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
    <script type="text/javascript">
        
        $(".chosen-select").chosen();
        
        
        $('#submit').click(function () {
            var formData = {
                'date'              :$('input[id=date]').val(),
                'start'             :$('input[id=startTime]').val(),
                'onsite'                :$('input[id=onsiteTime]').val(),
                'moveType'          :$('#moveType').val(),      //this posts an array
                'otherNotes'        :$('input[id=otherDriverNotes]').val(),
                'regNo'             :$('input[id=regNumber]').val(),
                'shipper'           :$('input[id=shipper]').val(),
                'phone'             :$('input[id=phone]').val(),
                'oAddr'             :$('input[id=originAddr]').val(),
                'oSpec'             :$('input[id=originSpecial]').val(),
                'dest'              :$('input[id=destination]').val(),
                'destSpec'          :$('input[id=destinationSpecial]').val(),
                'weight'                :$('input[id=weight]').val(),
                'weightType'        :$('#weightType').val(),        //this posts an array
                'vault'             :$('input[id=vault]').val(),
                'drivers'           :$('#drivers').val(),       //this posts an array
                'laborers'          :$('#laborers').val(),      //this posts an array
                'driverNotes'       :$('input[id=driverNotes]').val(),
                'equipment'         :$('#equipment').val(),
                'truckNo'           :$('input[id=truckNo]').val(),
                'insurance'         :$('input[name=insurance]:checked').val()
            }
            console.log($('input[name=insurance]:checked').val());
            $.ajax({
                type: 'POST',
                url:    '/newJobAjax.php?action=checkData',
                data: formData,
                encode: true,
                success: function(result){
                    //successful. Do javascripty stuff here? I'll return the id.
                    console.log(result);
                },
                fail:function(result){
                    console.log(result);
                }
            });     
        });
    </script>
</body>
</html>
