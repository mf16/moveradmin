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
		$sql="SELECT idjobs,startDate,destinationAddress,destinationCity,weight,startDate,status,picURI FROM moverAdmin.jobs WHERE (
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

		// exclude previously found jobs
		$excludeString='';
		$ids=array();
		foreach($results as $key=>$result2){
			foreach($result2 as $key=>$result){
				if(array_key_exists('idjobs',$result)){
					$ids[]=$result['idjobs'];
				}
			}
		}
		if($ids){
			foreach($ids as $key=>$id){
				$excludeString.=' AND idjobs != '.$id;
			}
		}

		$sql="SELECT idjobs,startDate,destinationAddress,destinationCity,weight,startDate,status,picURI FROM moverAdmin.jobs WHERE (

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
		)".$excludeString;

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

		// exclude previously found employees
		$excludeString='';
		$ids=array();
		foreach($results as $key=>$result2){
			foreach($result2 as $key=>$result){
				if(array_key_exists('idemployees',$result)){
					$ids[]=$result['idemployees'];
				}
			}
		}
		if($ids){
			foreach($ids as $key=>$id){
				$excludeString.=' AND idemployees != '.$id;
			}
		}

		$sql="SELECT idemployees,nickname,first,last,cellPhone,picURI FROM moverAdmin.employees WHERE (

			email LIKE ? 
			OR address LIKE ? 
			OR dailyRate LIKE ?
			OR cellPhone LIKE ?
			OR homePhone LIKE ?

			OR license LIKE ?
			OR licenseState LIKE ?

		)".$excludeString;
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

		// exclude previously found employees
		$excludeString='';
		$ids=array();
		foreach($results as $key=>$result2){
			foreach($result2 as $key=>$result){
				if(array_key_exists('idequipment',$result)){
					$ids[]=$result['idequipment'];
				}
			}
		}
		if($ids){
			foreach($ids as $key=>$id){
				$excludeString.=' AND idequipment != '.$id;
			}
		}

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

		)".$excludeString;
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
