<?php
	require 'connection.php';
	$json_obj = file_get_contents('php://input');
	$arr = json_decode($json_obj);
	//print_r($arr);
	$query = "INSERT INTO `event_volunteers`(`event_id`, `vol_id`, `status`) VALUES (".$arr->{'event_id'}.",".$arr->{'vol_id'}.",'Applied')";
	$result  = mysqli_query($conn,$query);
	if($result)
	{
		echo "Inserted";
	}
	else
	{
		echo mysqli_error($conn);
	}

?>