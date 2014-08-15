<?php
class newJobAjax {
	
	function __construct(){
		if(isset($_REQUEST['action'])){
			$action=$_REQUEST['action'];
			$this->$action();
		} else {
		}
	}

	function checkData($data){
		print_r($_REQUEST);
	}
}
$newJobAjax=new newJobAjax();
