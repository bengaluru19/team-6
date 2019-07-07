<?php
	require 'connection.php';
	$json_obj = file_get_contents('php://input');
	$arr = json_decode($json_obj);
	$query = "UPDATE `event_volunteers` SET `feedback`='".$arr->{'feedback'}."' where event_id=".$arr->{'event_id'}." and vol_id=".$arr->{'vol_id'}."";
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