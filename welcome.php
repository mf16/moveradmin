<?php include_once "global.php";?>
<!DOCTYPE html>
<html class="no-js">

<!DOCTYPE html>
<html class="no-js">

<head>
	<style type="text/css">
	#pin{
		text-align: center;
	}
	</style>
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

<body class="bg-primary">
    <!-- App container area -->
    <div class="app-user">
        <div class="user-container">

            <div class="text-center">
                <img class="img-circle bd-b bd-r" src="img/avatar.jpg" alt="user">
                <span class="center-block pd-t-md">Matt Underwood</span>
                <small>Alexander's Mobility Services</small>
            </div>
            <div class="input-group col-xs-12 bg-white mg-b-md mg-t-lg">
                <input onkeyup="login();" type="password" class="form-control no-border" id="pin" placeholder="enter lock code">
            </div>
        </div>
    </div>
</body>
<script src="/vendor/jquery-1.11.1.min.js"></script>
<script>
function login(){
	var pin;
	pin=$('#pin').val();
	if (pin.length == 4){	
		var formData = new FormData();
		formData={
			pin		:pin
		}

		$.ajax({
			type:	'POST'
			,url:	'/welcomeAjax.php?action=login'
			,data: formData 
			,success: function(result){
				if(result=='fail'){
					alert('try again');
				} else if (result=='multiple') {
					alert('Multiple admins with that PIN. Please contact moverAdmin.');
				} else if(result=='success'){
					window.location.replace('/');
				} else if (result=='empty'){
					alert('please enter a pin');
				} else {
					alert ('unknown fail reason. Contact moverAdmin.');
				}
			}
			,fail: function(result){
				alert('fail');
			}
		});
	}
}
</script>
