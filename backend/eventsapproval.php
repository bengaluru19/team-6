<?php
	require 'connection.php';
	$vol_id = $_GET['vol_id'];
	$event_id = $_GET['event_id'];
	$status = $_GET['status'];
	$query = "UPDATE `event_volunteers` SET `status`=$status where event_id=".$event_id." and vol_id=".$vol_id."";
	$result  = mysqli_query($conn,$query);
	if($result)
	{
		echo "Updated";
	}
	else
	{
		echo $query;
	}

?>