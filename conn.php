<?php
$con=mysqli_connect("localhost","root","#Mountain72");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
	echo 'success';
}

mysqli_close($con);
?>
