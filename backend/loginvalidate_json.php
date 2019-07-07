<?php
	require 'connection.php';
	$obj = new stdClass();
	$json_obj = file_get_contents('php://input');
	$arr = json_decode($json_obj);
	$query = "SELECT * from `volunteer` where `phone`='".$arr->{'phone'}."' and `password`='".$arr->{'password'}."'";
	$res = array();
	$result  = mysqli_query($conn,$query);
	if($result)
	{
		if(mysqli_num_rows($result)>0)
		{
			$res = mysqli_fetch_assoc($result);
			echo json_encode($res);
		}
		else
		{
			$res->msg= "Invalid";
			echo json_encode($res);
		}
	}
	else
	{
		echo $query;
	}

?>