<?php
	require 'connection.php';
	$obj = new stdClass();
	$obj->event_id = 1;
	$obj->vol_id = 1;
	$obj->status ="Applied";
	
	$json_obj = json_encode($obj);
	//echo $json_obj;
	$arr = json_decode($json_obj);
	//print_r($arr);
	$query = "INSERT INTO `event_volunteers`(`event_id`, `vol_id`, `status`) VALUES (".$arr->{'event_id'}.",".$arr->{'vol_id'}.",'".$arr->{'status'}."')";
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