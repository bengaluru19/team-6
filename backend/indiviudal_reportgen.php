<?php
	require 'connection.php';
	$vid=1;
	$query = "select A.event_id,B.name,B.time_from,B.time_to,B.date_from,B.date_to,TIMEDIFF(time_to,time_from) as hrs_worked from event_volunteers as A inner join events as B on A.event_id = B.id where A.status='Applied' and A.vol_id=$vid;";
	$result = mysqli_query($conn,$query);
	$rows = array();
	if($result)
	{
		while($r = mysqli_fetch_assoc($result)) {
			
		 	$rows[] = $r;
	 	}
	}
	$aa = json_encode($rows);
	$jsonDecoded = json_decode($aa, true);
	$csvFileName=strval(date("d-m-y"));
	$csvFileName.= '_volunteer'.$vid.'.csv'; 
	$fp = fopen($csvFileName, 'w+');
	$row = ["Event ID","Event Name","Time from","Time to","Date From","Date To","Hours_worked"];
	fputcsv($fp, $row);
	foreach($jsonDecoded as $row){

	    fputcsv($fp, $row);
	}
	fclose($fp);
?>