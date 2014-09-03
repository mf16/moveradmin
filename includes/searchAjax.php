<?php
var_dump(include_once "../global.php");
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

		// Search through job destinations
		$sql="SELECT idjobs,startDate,destinationAddress,status,picURI FROM moverAdmin.jobs WHERE destinationAddress LIKE ?;";
		$results=query($sql,'%'.$_REQUEST['searchTerm'].'%');
		echo json_encode($results);

		// Search through employee names
		$sql="SELECT idemployees,nickname,first,last,cellPhone,picURI FROM moverAdmin.employees WHERE (nickname LIKE ? OR first LIKE ? OR last LIKE ? OR concat(first,' ',last) LIKE ? OR concat(nickname,' ',last) LIKE ?);";
		$results=query($sql,'%'.$_REQUEST['searchTerm'].'%','%'.$_REQUEST['searchTerm'].'%','%'.$_REQUEST['searchTerm'].'%','%'.$_REQUEST['searchTerm'].'%','%'.$_REQUEST['searchTerm'].'%');
		echo json_encode($results);

		// Search through equipment names
		$sql="SELECT idequipment,name,type,year,isAvailable,picURI FROM moverAdmin.employees WHERE (nickname LIKE ? OR first LIKE ? OR last LIKE ? OR concat(first,' ',last) LIKE ? OR concat(nickname,' ',last) LIKE ?);";
		$results=query($sql,'%'.$_REQUEST['searchTerm'].'%','%'.$_REQUEST['searchTerm'].'%','%'.$_REQUEST['searchTerm'].'%','%'.$_REQUEST['searchTerm'].'%','%'.$_REQUEST['searchTerm'].'%');
		echo json_encode($results);
	}
}
$searchAjax=new searchAjax();
