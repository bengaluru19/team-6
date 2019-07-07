<?php
	require 'connection.php';
	$obj = new stdClass();
	$json_obj = file_get_contents('php://input');
	$arr = json_decode($json_obj);
	$vol_id=$arr->{'vol_id'};
	$query = "select A.event_id,B.name,B.time_from,B.time_to,B.date_from,B.date_to,TIMEDIFF(time_to,time_from) as hrs_worked from event_volunteers as A inner join events as B on A.event_id = B.id where A.status='Applied' and A.vol_id=$vol_id;";
	$result  = mysqli_query($conn,$query);
	$json = array();
	if($result)
	{
		if(mysqli_num_rows($result)>0)
		{
			while ($row = mysqli_fetch_assoc($result)) {
				$json[] = $row;
			}
			echo json_encode($json);
		}
		else
		{
			$abc = array();
			echo json_encode($abc);
		}
	}
	else
	{
		echo $query;
	}

?>