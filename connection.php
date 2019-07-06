<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "careworks";
	$conn = mysqli_connect($servername,$username,$password,$database);
	if($conn)
	{
		echo "";
	}
	else
	{
		echo mysqli_error($conn);
	}
?>