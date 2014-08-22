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
    <link rel="stylesheet" href="/css/equipment.css">
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
    #submit{
        min-width: 52px;
        width: 50%;
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
    $isAvailable=false;
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
            $isAvailable=$equipInfo['isAvailable'];
        }
    } else {
        $equipmentid='new';
    }
?>

<body>
    <?php include '/includes/header.php';?>

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
                                
                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label for="name">Name</label> 
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" id="name" placeholder="Name" name="name" type="text" value="<?php echo $name;?>">
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label for="idNumber">ID Number</label> 
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" id="idNumber" placeholder="ID #" name="idNumber" type="text" value="<?php echo $manufacid;?>">
                            </div>


                            <input type="hidden" name="type" id="type" value="<?php echo ucwords($type);?>"/>
                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label for="typeMenu">Type</label>
                            </div>
                            <div class="col-md-8">
                                <button class="btn btn-default dropdown-toggle" type="button" id="typeMenu" data-toggle="dropdown">
                                    <?php
                                        if(isset($type) && $type!=''){
                                        echo ucwords($type);
                                        } else {
                                        echo 'Select Type';
                                        }
                                    ?>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="typeMenu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="typeText('Bobtail');">Bobtail</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="typeText('Car');">Car</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="typeText('Flatbed');">Flatbed</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="typeText('Overseas Container');">Overseas Container</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="typeText('Pickup Truck');">Pickup Truck</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="typeText('Tractor');">Tractor</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="typeText('Trailer');">Trailer</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="typeText('Van');">Van</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#" onclick="typeText('Other');">Other</a></li>
                                </ul>
                            </div>
                            
                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label for="make">Make</label> 
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" id="make" name="make" placeholder="Ford" type="text" value="<?php echo $make;?>">
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label for="model">Model</label> 
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" id="model" name="model" placeholder="Escape" type="text" value="<?php echo $model;?>">
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label for="year">Year</label> 
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" id="year" name="year" placeholder="2008" type="text" value="<?php echo $year;?>">
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label for="mileage">Mileage</label> 
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" id="mileage" name="mileage" placeholder="32099" type="text" value="<?php echo $mileage;?>">
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label for="length">Length (ft)</label> 
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" id="length" name="length" placeholder="32099" type="text" value="">
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label for="heightFeet">Height (ft - in)</label> 
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" id="heightFeet" name="heightFeet" placeholder="Feet" type="text" value="">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" id="heightInches" name="heightInches" placeholder="Inches" type="text" value="">
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label for="gvw">GVW (lbs)</label> 
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" id="gvw" name="gvw" placeholder="32099" type="text" value="">
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label for="rentOwn">Do you rent or own?</label><br>
                            </div>
                            <div class="col-md-8">
                                <input id="rent" name="rentOwn" type="radio" value="rent" <?php echo $rentChecked;?>> 
                                <label for="rent">Rent</label> 
                                <input id="own" name="rentOwn" type="radio" value="own" <?php echo $ownChecked;?>>
                                <label for="own">Own</label>
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label for="billable">Billable?</label><br>
                            </div>
                            <div class="col-md-8">
                                <input id="billableYes" name="billable" type="radio" value="1"> 
                                <label for="billableYes">Yes</label> 
                                <input id="billableNo" name="billable" type="radio" value="0">
                                <label for="billableNo">No</label>
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label for="equipped">Is it equipped?</label><br>
                            </div>
                            <div class="col-md-8">
                                <input id="equippedYes" name="equipped" type="radio" value="1"> 
                                <label for="equippedYes">Yes</label> 
                                <input id="equippedNo" name="equipped" type="radio" value="0">
                                <label for="equippedNo">No</label>
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label for="isEquipAvailable">Check if available</label>
                            </div>
                            <div class="col-md-8">
                                <?php
                                    $isAvailableChecked='';
                                    if(isset($isAvailable) && $isAvailable>0){
                                        $isAvailableChecked=' checked';
                                    }
                                ?>
                                <input type="checkbox" id = "isEquipAvailable" <?php echo $isAvailableChecked;?>> Available to use
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label for="damages">Damages</label> 
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" id="damages" name="damages" placeholder="Damages" type="text" value="">
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label for="notes">Notes</label> 
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" id="notes" name="notes" placeholder="Notes" type="text" value="">
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-3 label">
                                <label>Photo Upload</label>
                            </div>
                            <div class="col-md-8">
                                <input type="file" name="picture" id="file">
                            </div>
        
                            <div class="clearfix"></div>
                        </form>
                            <div class="col-md-8 col-md-offset-3">
                                <?php
                                    $newAddString='';
                                    if($equipmentid=='new'){
                                        $newAddString='Add ';
                                    } else {
                                        $newAddString='Save ';
                                    }
                                ?>
                            <button class="btn btn-default mg-b-lg" onclick="validate()";><?php echo $newAddString;?>Equipment</button>
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
            console.log('test');
            var formData = new FormData();
            
            var isEquipAvailable = '0';
            if($("#isEquipAvailable").prop('checked') == true){
                isEquipAvailable = '1';
            }

            formData = {
                name              :$('#name').val(),
                equipmentid       :$('#idNumber').html(),
                type              :$('#type').val(),
                make              :$('#make').val(),
                model             :$('#model').val(),
                year              :$('#year').val(),
                mileage           :$('#mileage').val(),
                length            :$('#length').val(),
                heightFeet        :$('#heightFeet').val(),
                heightInches      :$('#heightInches').val(),
                GVW               :$('#gvw').val(),
                rentOwn           :$('input[name=rentOwn]:checked').val(),
                billable          :$('input[name=billable]:checked').val(),
                equipped          :$('input[name=equipped]:checked').val(),
                isAvailable       :isEquipAvailable,
                damages           :$('#damages').val(),
                notes             :$('#notes').val(),
                picture           :$('#file').get(0).files[0]

            };

            console.log(formData);
            $.ajax({
                type: 'POST',
                url:    '/equipmentAjax.php?action=saveEquip',
                data: formData,
                encode: true,
                success: function(result){
                    //alert(result);
                    $('#submit').hide();
                    window.location.replace("/equipment");
                    // reloads current editing window including id
                    //window.location.replace("/equipment/"+result);
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