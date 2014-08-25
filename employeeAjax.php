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
		global $db;
		if($_REQUEST['employeeid']=='new'){
			echo "new cannot be deleted";
		} else if (isset($_REQUEST['employeeid'])) {
			$sql="DELETE FROM moverAdmin.employees WHERE idemployees=?";
			query($sql,$_REQUEST['employeeid']);
			echo 'deleted employeeid: '.$_REQUEST['employeeid'];
		}
	}

	function saveEmp(){
		global $db;
		//print_r($_REQUEST);
		if($_REQUEST['employeeid']=='new'){
			$sql="INSERT INTO moverAdmin.employees (

				nickname
				,first
				,last
				,email
				,address

				,dailyRate
				,cellPhone
				,homePhone
				,empSince
				,CID

				,PVO
				,drugScreened
				,screenedDate
				,canDrive
				,license

				,licenseState
				,licenseClass
				,bobtailExp
				,bobtailYears
				,bobtailMiles

				,tractorExp
				,tractorYears
				,tractorMiles
				,picURI
				,skill

			) VALUES (?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?, ?,?,?,?,?);";
			print_r(query($sql
				,$_REQUEST['nickname']
				,$_REQUEST['first']
				,$_REQUEST['last']
				,$_REQUEST['email']
				,$_REQUEST['address']

				,$_REQUEST['dailyRate']
				,$_REQUEST['cellPhone']
				,$_REQUEST['homePhone']
				,$_REQUEST['empSince']
				,$_REQUEST['CID']

				,$_REQUEST['PVO']
				,$_REQUEST['drugScreened']
				,$_REQUEST['screenedDate']
				,$_REQUEST['canDrive']
				,$_REQUEST['license']

				,$_REQUEST['licenseState']
				,$_REQUEST['licenseClass']
				,$_REQUEST['bobtailExp']
				,$_REQUEST['bobtailYears']
				,$_REQUEST['bobtailMiles']

				,$_REQUEST['tractorExp']
				,$_REQUEST['tractorYears']
				,$_REQUEST['tractorMiles']
				,$_REQUEST['picURI']
				,$_REQUEST['skill']
			));
		} else {
			//save
			$sql="UPDATE moverAdmin.employees SET 
				nickname=?
				,first=?
				,last=?
				,email=?
				,address=?
				,dailyRate=?
				,cellPhone=?
				,homePhone=?
				,empSince=?
				,CID=?
				,PVO=?
				,drugScreened=?
				,screenedDate=?
				,canDrive=?
				,license=?
				,licenseState=?
				,licenseCLass=?
				,bobtailExp=?
				,bobtailYears=?
				,bobtailMiles=?
				,tractorExp=?
				,tractorYears=?
				,tractorMiles=?

				,skill=?
				WHERE idemployees=?;";
			query($sql
				,$_REQUEST['nickname']
				,$_REQUEST['first']
				,$_REQUEST['last']
				,$_REQUEST['email']
				,$_REQUEST['address']

				,$_REQUEST['dailyRate']
				,$_REQUEST['cellPhone']
				,$_REQUEST['homePhone']
				,$_REQUEST['empSince']
				,$_REQUEST['CID']

				,$_REQUEST['PVO']
				,$_REQUEST['drugScreened']
				,$_REQUEST['screenedDate']
				,$_REQUEST['canDrive']
				,$_REQUEST['license']

				,$_REQUEST['licenseState']
				,$_REQUEST['licenseClass']
				,$_REQUEST['bobtailExp']
				,$_REQUEST['bobtailYears']
				,$_REQUEST['bobtailMiles']

				,$_REQUEST['tractorExp']
				,$_REQUEST['tractorYears']
				,$_REQUEST['tractorMiles']
				//,$_REQUEST['picURI']
				,$_REQUEST['skill']
				,$_REQUEST['employeeid']
			);
			print_r($_REQUEST['employeeid']);
		}
	}
}
$employeeAjax=new employeeAjax();
