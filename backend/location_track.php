<?php
	require 'connection.php';
	// $obj = new stdClass();
	// $obj->event_id = 1;
	// $obj->vol_id = 1;
	// $obj->latitude = 28.77;
	// $obj->longitude = 45.99;
	// $obj->curr_date ="2019-07-06";
	// $obj->curr_time = "5:00 PM";
	$json_obj = file_get_contents('php://input');
	//echo $json_obj;
	$arr = json_decode($json_obj);
	$latitude = $arr->{'latitude'};
	$longitude = $arr->{'longitude'};

	$geocodeFromLatLong = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng=$latitude,$longitude&sensor=true&key=AIzaSyDEKdwB_F7V9dYw07mkYbMiZLJ6f0iFcjU'); 
	$query = "INSERT INTO `location_track`(`vol_id`, `event_id`, `latitude`, `longitude`, `curr_date`, `curr_time`) VALUES (".$arr->{'vol_id'}.",".$arr->{'event_id'}.",".$arr->{'latitude'}.",".$arr->{'longitude'}.",'".$arr->{'curr_date'}."','".$arr->{'curr_time'}."')";
	$result  = mysqli_query($conn,$query);
	if($result)
	{
		echo $geocodeFromLatLong;
	}
	else
	{
		echo $json_obj;
	}

?>
