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
	$aa = json_encode($rows);
	$jsonDecoded = json_decode($aa, true);
	$csvFileName=strval(date("d-m-y"));
	$csvFileName.= '_allevents.csv'; 
	$fp = fopen($csvFileName, 'w+');
	$row = ["Event ID","Event Name","Description","Date From","Date To","Time from","Time to","Volunteers","Local Address","City","State","Status"];
	fputcsv($fp, $row);
	foreach($jsonDecoded as $row){
	    //Write the row to the CSV file.
	    fputcsv($fp, $row);
	}
	 
	//Finally, close the file pointer.
	fclose($fp);
?>