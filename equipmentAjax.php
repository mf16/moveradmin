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
		global $db;
		//print_r($_REQUEST);
		if($_REQUEST['equipmentid']=='new'){
			$sql="INSERT INTO moverAdmin.equipment (manufacid,name,make,model,year,propertyType,mileage,picURI,type) VALUES (?,?,?,?,?,?,?,?,?);";
			print_r(query($sql,$_REQUEST['manufacid'],$_REQUEST['name'],$_REQUEST['make'],$_REQUEST['model'],$_REQUEST['year'],$_REQUEST['rentOwn'],$_REQUEST['mileage'],$_REQUEST['picture'],$_REQUEST['type']));
		} else {
			//save
			$sql="UPDATE moverAdmin.equipment SET manufacid=?,name=?,make=?,model=?,year=?,propertyType=?,mileage=?,picURI=?,type=? WHERE idequipment=?;";
			query($sql,$_REQUEST['manufacid'],$_REQUEST['name'],$_REQUEST['make'],$_REQUEST['model'],$_REQUEST['year'],$_REQUEST['rentOwn'],$_REQUEST['mileage'],$_REQUEST['picture'],$_REQUEST['type'],$_REQUEST['equipmentid']);
			print_r($_REQUEST['equipmentid']);
		}
	}
}
$equipmentAjax=new equipmentAjax();
