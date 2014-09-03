<?php
include_once "../global.php";
class searchAjax {
	
	function __construct(){
		if(isset($_REQUEST['action'])){
			$action=$_REQUEST['action'];
			$this->$action();
		} else {
		}
	}

	function search(){
		global $db;
		//print_r($_REQUEST['searchTerm']);

		$results=array();
		// Search job destinations
		$sql="SELECT idjobs,startDate,destinationAddress,status,picURI FROM moverAdmin.jobs WHERE (
			destinationAddress LIKE ?
			OR destinationAptNum LIKE ?
			OR destinationCity LIKE ?
			OR destinationState LIKE ?
			OR destinationZip LIKE ?
		);";
		$results[]=query($sql
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%');

		// Search employee names
		$sql="SELECT idemployees,nickname,first,last,cellPhone,picURI FROM moverAdmin.employees WHERE (nickname LIKE ? OR first LIKE ? OR last LIKE ? OR concat(first,' ',last) LIKE ? OR concat(nickname,' ',last) LIKE ?);";
		$results[]=query($sql,'%'.$_REQUEST['searchTerm'].'%','%'.$_REQUEST['searchTerm'].'%','%'.$_REQUEST['searchTerm'].'%','%'.$_REQUEST['searchTerm'].'%','%'.$_REQUEST['searchTerm'].'%');

		// Search equipment names
		$sql="SELECT idequipment,name,type,year,isAvailable,picURI FROM moverAdmin.equipment WHERE name LIKE ?;";
		$results[]=query($sql,'%'.$_REQUEST['searchTerm'].'%');


		//search through jobs
		$sql="SELECT idjobs,startDate,destinationAddress,status,picURI FROM moverAdmin.jobs WHERE (

			notes LIKE ? 
			OR regNum LIKE ? 
			OR shipperName LIKE ? 
			OR shipperPhone LIKE ? 
			OR altShipperName LIKE ? 

			OR altPhone LIKE ? 
			OR originAddress LIKE ? 
			OR originAptNum LIKE ? 
			OR originCity LIKE ? 
			OR originState LIKE ? 

			OR originZip LIKE ? 
			OR originInstructions LIKE ? 
			OR destinationInstructions LIKE ? 
			OR status LIKE ? 
			OR status LIKE ? 

			OR confirmedBy LIKE ? 
			OR weight LIKE ? 
			OR weightType LIKE ? 
			OR vaultPackOrder LIKE ? 
			OR shuttleTruckNumber LIKE ?
		);";

		$results[]=query($sql

			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'

			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'

			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'

			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
		);

		//search through employees
		$sql="SELECT idemployees,nickname,first,last,cellPhone,picURI FROM moverAdmin.employees WHERE (

			email LIKE ? 
			OR address LIKE ? 
			OR dailyRate LIKE ?
			OR cellPhone LIKE ?
			OR homePhone LIKE ?

			OR license LIKE ?
			OR licenseState LIKE ?

		);";
		$results[]=query($sql

			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'

			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'

		);

		//search through equipment
		$sql="SELECT idequipment,name,type,year,isAvailable,picURI FROM moverAdmin.equipment WHERE (

			manufacid LIKE ?
			OR make LIKE ?
			OR model LIKE ?
			OR year LIKE ?
			OR mileage LIKE ?

			OR length LIKE ?
			OR heightFt LIKE ?
			OR heightIn Like ?
			OR GVW LIKE ?
			OR damages LIKE ?

			OR notes LIKE ?

		);";
		$results[]=query($sql

			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'

			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'
			,'%'.$_REQUEST['searchTerm'].'%'


			,'%'.$_REQUEST['searchTerm'].'%'

		);

		// strip null values and JSON encode
		echo json_encode(array_filter($results));
	}
}
$searchAjax=new searchAjax();
