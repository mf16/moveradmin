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

	function delEquip(){
		global$db;
		if($_REQUEST['equipmentid']=='new'){
			echo "new cannot be deleted";
		} else if (isset($_REQUEST['equipmentid'])) {
			$sql="DELETE FROM moverAdmin.equipment WHERE idequipment=?";
			query($sql,$_REQUEST['equipmentid']);
			echo 'deleted equipmentid: '.$_REQUEST['equipmentid'];
		}
	}

	function saveEquip(){
		global $db;
		//print_r($_REQUEST);
		if($_REQUEST['equipmentid']=='new'){
			$sql="INSERT INTO moverAdmin.equipment (manufacid,name,make,model,year,propertyType,mileage,picURI,type,isAvailable) VALUES (?,?,?,?,?,?,?,?,?,?);";
			print_r(query($sql,$_REQUEST['manufacid'],$_REQUEST['name'],$_REQUEST['make'],$_REQUEST['model'],$_REQUEST['year'],$_REQUEST['rentOwn'],$_REQUEST['mileage'],$_REQUEST['picture'],$_REQUEST['type'],$_REQUEST['isAvailable']));
		} else {
			//save
			$sql="UPDATE moverAdmin.equipment SET manufacid=?,name=?,make=?,model=?,year=?,propertyType=?,mileage=?,picURI=?,type=?,isAvailable=? WHERE idequipment=?;";
			query($sql,$_REQUEST['manufacid'],$_REQUEST['name'],$_REQUEST['make'],$_REQUEST['model'],$_REQUEST['year'],$_REQUEST['rentOwn'],$_REQUEST['mileage'],$_REQUEST['picture'],$_REQUEST['type'],$_REQUEST['isAvailable'],$_REQUEST['equipmentid']);
			print_r($_REQUEST['equipmentid']);
		}
	}
}
$equipmentAjax=new equipmentAjax();
