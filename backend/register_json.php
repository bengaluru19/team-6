<?php
	require 'connection.php';
	$json_obj = file_get_contents('php://input');
	// $obj = json_decode($json_obj);
	$arr = json_decode($json_obj);
	//print_r($arr);
	$query = "INSERT INTO `volunteer`(`name`, `phone`, `email`, `age`, `address`, `skillset`, `company`, `num_events`, `totalhrs`, `password`) VALUES ('".$arr->{'name'}."','".$arr->{'phone'}."','".$arr->{'email'}."',".$arr->{'age'}.",'".$arr->{'address'}."','".$arr->{'skillset'}."','".$arr->{'company'}."',".$arr->{'num_events'}.",".$arr->{'totalhrs'}.",'".$arr->{'password'}."')";
	$result  = mysqli_query($conn,$query);
	if($result)
	{
		echo "";
	}
	else
	{
		echo mysqli_error($conn);
	}

?>