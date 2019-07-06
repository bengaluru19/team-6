<?php
	require 'connection.php';
	$obj = new stdClass();
	$obj->phone = "9629000816";
	$obj->password = "Pword";
	$json_obj = json_encode($obj);
	$arr = json_decode($json_obj);
	$query = "SELECT * from `volunteer` where `phone`='".$arr->{'phone'}."' and `password`='".$arr->{'password'}."'";
	$result  = mysqli_query($conn,$query);
	if($result)
	{
		if(mysqli_num_rows($result)>0)
		{
			echo "Present";
		}
		else
		{
			echo "Not present";
		}
	}
	else
	{
		echo $query;
	}

?>