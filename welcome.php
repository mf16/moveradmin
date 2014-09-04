<?php
include_once "global.php";
//print_r(query("SELECT * FROM moverAdmin.jobs;"));
echo 'welcome page';

?>
<script src="/vendor/jquery-1.11.1.min.js"></script>
<br/>
<br/>
PIN: <input id="pin" type="text">
<button onclick="login();">login</button>

<script>
function login(){
	var pin;
	pin=$('#pin').val();

	var formData = new FormData();
	formData={
		pin		:pin
	}
	//alert(formData);

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
			//console.log(result);
		}
		,fail: function(result){
			alert('fail');
		}
	});

}
</script>
