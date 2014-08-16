<?php
include_once "global.php";
class employeeAjax {
	
	function __construct(){
		if(isset($_REQUEST['action'])){
			$action=$_REQUEST['action'];
			$this->$action();
		} else {
		}
	}

	function delEmp(){
		global$db;
		if($_REQUEST['employeeid']=='new'){
			echo "new cannot be deleted";
		} else if (isset($_REQUEST['employeeid'])) {
			$sql="DELETE FROM moverAdmin.employees WHERE idemployees=?";
			query($sql,$_REQUEST['idemployees']);
			echo 'deleted employeeid: '.$_REQUEST['idemployees'];
		}
	}

	function saveEmp(){
		global $db;
		//print_r($_REQUEST);
		if($_REQUEST['employeeid']=='new'){
			$sql="INSERT INTO moverAdmin.employee (first,last,dailyRate,license,empSince,picURI,phone,skill) VALUES (?,?,?,?,?,?,?,?);";
			print_r(query($sql,$_REQUEST['first'],$_REQUEST['last'],$_REQUEST['rate'],$_REQUEST['license'],$_REQUEST['employeeStart'],$_REQUEST['picture'],$_REQUEST['phone'],$_REQUEST['skill']));
		} else {
			//save
			$sql="UPDATE moverAdmin.employees SET first=?,last=?,dailyRate=?,license=?,empSince=?,picURI=?,phone=?,skill=? WHERE idemployees=?;";
			query($sql,$_REQUEST['first'],$_REQUEST['last'],$_REQUEST['rate'],$_REQUEST['license'],$_REQUEST['employeeStart'],$_REQUEST['picture'],$_REQUEST['phone'],$_REQUEST['skill'],$_REQUEST['employeeid']);
			print_r($_REQUEST['employeeid']);
		}
	}
}
$employeeAjax=new employeeAjax();
