<?php
	require 'connection.php';
	$obj = new stdClass();
	$obj->name = "Event1";
	$obj->description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem doloremque enim soluta eligendi";
	$obj->date_from = "1998-12-16";
	$obj->date_to = "1999-01-16";
	$obj->time_from = "3:00 PM";
	$obj->time_to = "5:00 PM";
	$obj->candidate_limit = 20;
	$obj->local_addr = "hjfdbghbfgbjfb";
	$obj->city = "Bengaluru";
	$obj->state = "Karnataka";
	$obj->status = "Completed";
	$json_obj = json_encode($obj);
	$arr = json_decode($json_obj);
	$query = "INSERT INTO `events`(`name`, `Description`, `date_from`, `date_to`, `time_from`, `time_to`, `candidate_limit`, `local_addr`, `city`, `state`, `status`) VALUES ('".$arr->{'name'}."','".$arr->{'description'}."','".$arr->{'date_from'}."','".$arr->{'date_to'}."','".$arr->{'time_from'}."','".$arr->{'time_to'}."',".$arr->{'candidate_limit'}.",'".$arr->{'local_addr'}."','".$arr->{'city'}."','".$arr->{'state'}."','".$arr->{'status'}."')";
	$result  = mysqli_query($conn,$query);
	if($result)
	{
		echo "Inserted";
	}
	else
	{
		echo $query;
	}

?>