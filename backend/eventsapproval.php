<?php
	require 'connection.php';
	$obj->event_id = 6;
	$obj->vol_id = 1;
	$obj->status ="Applied";
	
	$json_obj = json_encode($obj);
	//echo $json_obj;
	$arr = json_decode($json_obj);
	//print_r($arr);
	$query = "UPDATE `event_volunteers` SET `status`='".$arr->{'status'}."' where event_id=".$arr->{'event_id'}." and vol_id=".$arr->{'vol_id'}."";
	$result  = mysqli_query($conn,$query);
	if($result)
	{
		echo "Updated";
	}
	else
	{
		echo mysqli_error($conn);
	}

?>