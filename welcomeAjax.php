<?php
include_once "global.php";
class welcomeAjax {
	
	function __construct(){
		if(isset($_REQUEST['action'])){
			$action=$_REQUEST['action'];
			$this->$action();
		} else {
		}
	}

	function login(){
		if(!isset($_REQUEST['pin']) || $_REQUEST['pin'] ==''){
			echo 'empty';
			return;
		}

		global $db;
		$sql="SELECT name,idadmins FROM moverAdmin.admins WHERE pin=?;";
		$results=query($sql,$_REQUEST['pin']);
		if(sizeof($results)>1){
			// multiple results for one pin
			echo 'multiple';
			return;
		} else if(sizeof($results)==1){
			echo 'success';
			$results=$results[0];
			$_SESSION['userid']=$results['idadmins'];
			return;
		} else {
			echo 'fail';
		}
		//print_r($results);
	}

}
$welcomeAjax=new welcomeAjax();
