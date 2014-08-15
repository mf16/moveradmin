<?php
include_once "global.php";
class equipmentAjax {
	
	function __construct(){
		if(isset($_REQUEST['action'])){
			$action=$_REQUEST['action'];
			$this->$action();
		} else {
		}
	}

	function saveEquip(){
		/*
		print_r($_REQUEST);
		print_r($_FILES);
		 */
		global $db;
		if($_REQUEST['equipmentid']=='new'){
			$sql="INSERT INTO moverAdmin.equipment (manufacid,name,make,model,year,propertyType,mileage,picURI) VALUES (?,?,?,?,?,?,?,?);";
			print_r(query($sql,$_REQUEST['manufacid'],'name here',$_REQUEST['make'],$_REQUEST['model'],$_REQUEST['year'],$_REQUEST['rentOwn'],$_REQUEST['mileage'],$_REQUEST['picture']));
		} else {
			//save
			$sql="UPDATE moverAdmin.equipment SET manufacid=?,name=?,make=?,model=?,year=?,propertyType=?,mileage=?,picURI=? WHERE idequipment=?;";
			query($sql,$_REQUEST['manufacid'],'name here',$_REQUEST['make'],$_REQUEST['model'],$_REQUEST['year'],$_REQUEST['rentOwn'],$_REQUEST['mileage'],$_REQUEST['picture'],$_REQUEST['equipmentid']);
			print_r($_REQUEST['equipmentid']);
		}
	}
}
$equipmentAjax=new equipmentAjax();
