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
    <link href="/css/chosen.min.css" rel="stylesheet"><!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
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

<style type="text/css">
    .label{
        text-align: right;
        padding-right: 15px;
        color: rgb(85, 85, 85);
        font-size: 15px;
        margin-bottom: 15px;
    }
    .mg-b-lg{
        margin-bottom: 75px;
    }
    h1{
        margin-bottom: 25px;
    }
    #submit{
        min-width: 52px;
        width: 50%;
    }
    #insuranceNo{
        margin-left: 25px;
        margin-right: 5px;
    }
    #insuranceYes{
        margin-right: 5px;
    }
    @media all and (max-width: 480px) and (min-width: 320px) {
      .clearfix{
        height: 15px;
      }
      .content-wrap>.col-md-12{
        padding: 0px;
      }
    }
</style>
<body>
    <?php include 'includes/header.php'; ?><!-- main content -->

    <section class="main-content">
        <!-- content wrapper -->
        <div class="content-wrap">
            <div class="col-md-12">
                <h1 class="no-mg-t">New Job</h1>
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
                    <label for="endDate">End Date</label> 
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="endDate" placeholder="05-15-2014" type="text"> 
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
                <div class="col-md-3 label">
                    <label for="otherDriverNotes">Other Driver Notes</label> 
                </div>
                <div class="col-md-8 mg-b-lg">
                    <input class="form-control" id="otherDriverNotes" placeholder="Other Driver Notes" type="text"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="regNumber">Reg Number</label> 
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="regNumber" placeholder="Reg Number" type="text"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="shipper">Shipper</label> 
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="shipper" placeholder="Shipper" type="text"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="phone">Phone Number</label> 
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="phone" placeholder="###-###-####" type="text"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="originAddr">Origin</label> 
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="originAddr" placeholder="Address" type="text"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="originSpecial">Origin Special Instructions</label> 
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="originSpecial" placeholder="Special Instructions" type="text"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="destination">Destination</label> 
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="destination" placeholder="Address" type="text"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="destinationSpecial">Destination Special Instructions</label> 
                </div>
                <div class="col-md-8 mg-b-lg">
                    <input class="form-control" id="destinationSpecial" placeholder="Special Instructions" type="text"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="weight">Weight</label> 
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="weight" placeholder="####" type="text"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="weightType">Weight Type</label> 
                </div>
                <div class="col-md-8">
                    <select class="form-control chosen-select" id="weightType" multiple>
                        <option>
                            Pounds
                        </option>
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

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="vault">Vault/Pack Order</label> 
                </div>
                <div class="col-md-8 mg-b-lg">
                    <input class="form-control" id="vault" placeholder="Type something" type="text">
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
                            $query="SELECT * FROM moverAdmin.employees WHERE (CDL>0 OR license>0);";
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
                    <input class="form-control" id="driverNotes" placeholder="Notes" type="text">
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

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="truckNo">Shuttle Truck Number</label> 
                </div>
                <div class="col-md-8">
                    <input class="form-control" id="truckNo" placeholder="##" type="text"> 
                </div>

                <div class="clearfix"></div>
                <div class="col-md-3 label">
                    <label for="insurance">Do daily insurance rates apply?</label><br>
                </div>
                <div class="col-md-8">
                    <input checked id="insuranceYes" name="insurance" type="radio" value="yes"> 
                    <label for="insuranceYes" onclick="">Yes</label> 
                    <input id="insuranceNo" name="insurance" type="radio" value="no"> 
                    <label for="insuranceNo" onclick="">No</label> 
                </div>
                <div class="clearfix"></div>
                <div class="col-md-8 col-md-offset-3 mg-b-lg mg-t">
                    <button class="btn btn-default" id="submit" type="submit">Add Job</button> <!-- /content wrapper -->
                </div>
            </div>
        </section>
        <!-- /main content -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script> <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> <script src="/js/chosen.jquery.min.js"></script> <!-- /core scripts -->
     <!-- theme scripts -->
     <script src="/js/global.js"></script> <script src="/js/off-canvas.js"></script> <script src="/vendor/jquery.placeholder.js"></script> <script src="/vendor/offline/offline.min.js"></script> <script src="/vendor/pace/pace.min.js"></script> <script src="/js/main.js"></script> <script src="/plugins/datepicker/js/bootstrap-datepicker.js"></script>
    <link href="http://jdewit.github.io/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet"><script src="/plugins/timepicker/timepicker.js"></script> <!-- /theme scripts -->
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
                date           :$('input[id=date]').val(),
                start          :$('input[id=startTime]').val(),
                onsite         :$('input[id=onsiteTime]').val(),
                moveType       :$('#moveType').val(), //this posts an array
                otherNotes     :$('input[id=otherDriverNotes]').val(),
                regNo          :$('input[id=regNumber]').val(),
                shipper        :$('input[id=shipper]').val(),
                phone          :$('input[id=phone]').val(),
                oAddr          :$('input[id=originAddr]').val(),
                oSpec          :$('input[id=originSpecial]').val(),
                dest           :$('input[id=destination]').val(),
                destSpec       :$('input[id=destinationSpecial]').val(),
                weight         :$('input[id=weight]').val(),
                weightType     :$('#weightType').val(), //this posts an array
                vault          :$('input[id=vault]').val(),
                drivers        :$('#drivers').val(), //this posts an array
                laborers       :$('#laborers').val(), //this posts an array
                driverNotes    :$('input[id=driverNotes]').val(),
                equipment      :$('#equipment').val(),
                truckNo        :$('input[id=truckNo]').val(),
                insurance      :$('input[name=insurance]:checked').val()
            };

            $.ajax({
                type: 'POST',
                url: 'jobAdd.php',
                data: formData,
                dataType: 'json',
                encode: true
            });
        });
    </script><!-- /body -->
     <script src="/vendor/jquery-1.11.1.min.js"></script> <script src="/bootstrap/js/bootstrap.js"></script> <script src="/js/chosen.jquery.min.js" type="text/javascript"></script> <!-- /core scripts -->
     <!-- page level scripts -->
     <!-- /page level scripts -->
</body>
</html>