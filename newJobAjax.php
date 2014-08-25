<?php
include_once "global.php";
class newJobAjax {
	
	function __construct(){
		if(isset($_REQUEST['action'])){
			$action=$_REQUEST['action'];
			$this->$action();
		} else {
		}
	}

	function delJob(){
		global $db;
		if($_REQUEST['jobid']=='new'){
			echo "new cannot be deleted";
		} else if (isset($_REQUEST['jobid'])) {
			$sql="DELETE FROM moverAdmin.jobs WHERE idjobs=?";
			query($sql,$_REQUEST['jobid']);
			echo 'deleted jobid: '.$_REQUEST['jobid'];
		}
	}
	
	function saveJob(){
		global $db;
		if($_REQUEST['jobid']=='new'){
			$sql="INSERT INTO moverAdmin.jobs (

				startDate
				,startTime
				,onsiteTime
				,notes
				,regNum

				,shipperName
				,shipperPhone
				,altShipperName
				,altPhone
				,originAddress

				,originShuttle
				,originInstructions
				,destinationAddress
				,destinationShuttle
				,destinationInstructions

				,status
				,confirmedBy
				,weight
				,weightType
				,vaultPackOrder

				,shuttleTruckNumber
				,insuranceChargesApply

			) VALUES (?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?);";
			print_r(query($sql
				,$_REQUEST['startDate']
				,$_REQUEST['startTIme']
				,$_REQUEST['onsiteTime']
				,$_REQUEST['notes']
				,$_REQUEST['regNum']

				,$_REQUEST['shipperName']
				,$_REQUEST['shipperPhone']
				,$_REQUEST['altShipperName']
				,$_REQUEST['altPhone']
				,$_REQUEST['originAddress']

				,$_REQUEST['originShuttle']
				,$_REQUEST['originInstructions']
				,$_REQUEST['destinationAddress']
				,$_REQUEST['destinationShuttle']
				,$_REQUEST['destinationInstructions']

				,$_REQUEST['status']
				,$_REQUEST['confirmedBy']
				,$_REQUEST['weight']
				,$_REQUEST['weightType']
				,$_REQUEST['vaultPackOrder']

				,$_REQUEST['shuttleTruckNumber']
				,$_REQUEST['insuranceChargesApply']
			));
		} else {
			// save
			$sql="UPDATE moverAdmin.jobs SET 
				startDate=?
				,startTime=?
				,onsiteTime=?
				,notes=?
				,regNum=?

				,shipperName=?
				,shipperPhone=?
				,altShipperName=?
				,altPhone=?
				,originAddress=?

				,originShuttle=?
				,originInstructions=?
				,destinationAddress=?
				,destinationShuttle=?
				,destinationInstructions=?

				,status=?
				,confirmedBy=?
				,weight=?
				,weightType=?
				,vaultPackOrder=?

				,shuttleTruckNumber=?
				,insuranceChargesApply=?
			WHERE idjobs=?;";
			query($sql
				,$_REQUEST['startDate']
				,$_REQUEST['startTIme']
				,$_REQUEST['onsiteTime']
				,$_REQUEST['notes']
				,$_REQUEST['regNum']

				,$_REQUEST['shipperName']
				,$_REQUEST['shipperPhone']
				,$_REQUEST['altShipperName']
				,$_REQUEST['altPhone']
				,$_REQUEST['originAddress']

				,$_REQUEST['originShuttle']
				,$_REQUEST['originInstructions']
				,$_REQUEST['destinationAddress']
				,$_REQUEST['destinationShuttle']
				,$_REQUEST['destinationInstructions']

				,$_REQUEST['status']
				,$_REQUEST['confirmedBy']
				,$_REQUEST['weight']
				,$_REQUEST['weightType']
				,$_REQUEST['vaultPackOrder']

				,$_REQUEST['shuttleTruckNumber']
				,$_REQUEST['insuranceChargesApply']
				,$_REQUEST['jobid']);
			print_r($_REQUEST['jobid']);
		}
	}

	function checkData($data){
		print_r($_REQUEST);
	}
}
$newJobAjax=new newJobAjax();
