<?php
	require 'connection.php';
	$json_obj = file_get_contents('php://input');
	$arr = json_decode($json_obj);
	$query = "select A.id,A.name,A.email,A.skillset,B.status from volunteer as A inner join event_volunteers as B on A.id=B.vol_id where B.event_id=".$arr->{'event_id'};
	$result  = mysqli_query($conn,$query);
	$rows = array();
	if($result)
	{
		while($r = mysqli_fetch_assoc($result)) {
			
		 	$rows[] = $r;
	 	}
	 	echo json_encode($rows);
	}
	else
	{
		echo $json_obj;
	}

?>