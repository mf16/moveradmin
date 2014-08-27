<?php
$con=mysqli_connect("localhost","goaptitude","Chicheme2013");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
	echo 'success';
}

mysqli_close($con);
?>