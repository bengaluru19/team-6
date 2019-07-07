<?php
	require 'connection.php';
	$json_obj = file_get_contents('php://input');
	$query = "SELECT * from events";
	$result = mysqli_query($conn,$query);
	$rows = array();
	if($result)
	{
		while($r = mysqli_fetch_assoc($result)) {
		 	$rows[] = $r;
	 	}
	}

	echo json_encode($rows);

?>