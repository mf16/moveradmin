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
		print_r($_REQUEST);
		if($_REQUEST['equipmentid']=='new'){
			$sql="INSERT INTO moverAdmin.equipment (manufacid,name,make,model,year,rentOwn,mileage,picURI,type,isAvailable) VALUES (?,?,?,?,?,?,?,?,?,?);";
			print_r(query($sql,$_REQUEST['manufacid'],$_REQUEST['name'],$_REQUEST['make'],$_REQUEST['model'],$_REQUEST['year'],$_REQUEST['rentOwn'],$_REQUEST['mileage'],$_REQUEST['picture'],$_REQUEST['type'],$_REQUEST['isAvailable']));
		} else {
			//save
			$sql="UPDATE moverAdmin.equipment SET 
				name=?
				,manufacid=?
				,type=?
				,make=?
				,model=?
				,year=?
				,mileage=?
				,length=?
				,heightFt=?
				,heightIn=?
				,GVW=?
				,rentOwn=?
				,billable=?
				,equipped=?
				,isAvailable=? 
				,picURI=?
				,damages=?
				,notes=?
				WHERE idequipment=?;";
			query($sql
				,$_REQUEST['name']
				,$_REQUEST['manufacid']
				,$_REQUEST['type']
				,$_REQUEST['make']
				,$_REQUEST['model']
				,$_REQUEST['year']
				,$_REQUEST['mileage']
				,$_REQUEST['length']
				,$_REQUEST['heightFt']
				,$_REQUEST['heightIn']
				,$_REQUEST['GVW']
				,$_REQUEST['rentOwn']
				,$_REQUEST['billable']
				,$_REQUEST['equipped']
				,$_REQUEST['isAvailable']
				,$_REQUEST['picture']
				,$_REQUEST['damages']
				,$_REQUEST['notes']
				,$_REQUEST['equipmentid']);
			print_r($_REQUEST['equipmentid']);
		}
	}
}
$equipmentAjax=new equipmentAjax();
