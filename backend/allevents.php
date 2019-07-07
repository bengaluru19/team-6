<?php
	require 'connection.php';
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