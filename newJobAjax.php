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

		// Fix job start date
		 print_r($_REQUEST);
		if($_REQUEST['startDate']!=''){
			$_REQUEST['startDate']=date('Y-m-d',strtotime($_REQUEST['startDate']));
		}

		//fix startTime
		$startHours=substr($_REQUEST['startTime'],0,strpos($_REQUEST['startTime'],':'));
		$startMinutes=substr($_REQUEST['startTime'],strpos($_REQUEST['startTime'],':')+1,2);
		if(substr($_REQUEST['startTime'],-2,2)=='PM'){
			$startHours=($startHours+12);
		}
		$_REQUEST['startTime']=$startHours.':'.$startMinutes.':00';

		//fix onsiteTime
		$onsiteHours=substr($_REQUEST['onsiteTime'],0,strpos($_REQUEST['onsiteTime'],':'));
		$onsiteMinutes=substr($_REQUEST['onsiteTime'],strpos($_REQUEST['onsiteTime'],':')+1,2);
		if(substr($_REQUEST['onsiteTime'],-2,2)=='PM'){
			$onsiteHours=($onsiteHours+12);
		}
		$_REQUEST['onsiteTime']=$onsiteHours.':'.$onsiteMinutes.':00';

		echo '.'.$_REQUEST['startTime'].'.';
		echo '.'.$_REQUEST['onsiteTime'].'.';

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
				,originAptNum
				,originCity
				,originState

				,originZip
				,destinationAptNum
				,destinationCity
				,destinationState
				,destinationZip

			) VALUES (?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?,?,?,? ,?,?);";
			$jobid=(query($sql
				,$_REQUEST['startDate']
				,$_REQUEST['startTime']
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
				,$_REQUEST['originAptNum']
				,$_REQUEST['originCity']
				,$_REQUEST['originState']

				,$_REQUEST['originZip']
				,$_REQUEST['destinationAptNum']
				,$_REQUEST['destinationCity']
				,$_REQUEST['destinationState']
				,$_REQUEST['destinationZip']
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
				,originAptNum=?
				,originCity=?
				,originState=?

				,originZip=?
				,destinationAptNum=?
				,destinationCity=?
				,destinationState=?
				,destinationZip=?

			WHERE idjobs=?;";
			query($sql
				,$_REQUEST['startDate']
				,$_REQUEST['startTime']
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
				,$_REQUEST['originAptNum']
				,$_REQUEST['originCity']
				,$_REQUEST['originState']

				,$_REQUEST['originZip']
				,$_REQUEST['destinationAptNum']
				,$_REQUEST['destinationCity']
				,$_REQUEST['destinationState']
				,$_REQUEST['destinationZip']

				,$_REQUEST['jobid']);
			$jobid=$_REQUEST['jobid'];
		}
		print_r($jobid);

		//
		// All the multiselects
		$multiselects=array('moveTypes','serviceTypes','drivers','laborers','equipment');
		foreach($multiselects as $multiselect){
			//del all rows
			$sql="DELETE FROM moverAdmin.".$multiselect."ForJob WHERE jobid=?;";
			query($sql,$jobid);

			//add each row
			foreach($_REQUEST[$multiselect] as $key=>${$multiselect}){
				if(${$multiselect}!=''){
					$sql="INSERT INTO moverAdmin.".$multiselect."ForJob (jobid,".$multiselect."id) VALUES (?,?);";
					query($sql,$jobid,${$multiselect});
				}
			}
		}

	}

	function checkData($data){
		print_r($_REQUEST);
	}
}
$newJobAjax=new newJobAjax();
