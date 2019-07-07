<?php
	require 'connection.php';
	$obj = new stdClass();
	$json_obj = file_get_contents('php://input');
	$arr = json_decode($json_obj);
	$query = "INSERT INTO `events`(`name`, `Description`, `date_from`, `date_to`, `time_from`, `time_to`, `candidate_limit`, `local_addr`, `city`, `state`, `status`,`coordinator_name`,`coordinator_phone`) VALUES ('".$arr->{'name'}."','".$arr->{'description'}."','".$arr->{'date_from'}."','".$arr->{'date_to'}."','".$arr->{'time_from'}."','".$arr->{'time_to'}."',".$arr->{'candidate_limit'}.",'".$arr->{'local_addr'}."','".$arr->{'city'}."','".$arr->{'state'}."','Incomplete','".$arr->{'coordinator_name'}."','".$arr->{'coordinator_phone'}."')";
	$result  = mysqli_query($conn,$query);
	if($result)
	{
		echo $query;
	}
	else
	{
		echo mysqli_error($conn);
	}

?>