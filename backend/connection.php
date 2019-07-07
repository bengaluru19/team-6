<?php 
	header("Access-Control-Allow-Origin: *");
	header('Access-Control-Allow-Methods: GET, POST');
	header("Access-Control-Allow-Headers: X-Requested-With,Origin,Content-Type ,Accept,Authorization");
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