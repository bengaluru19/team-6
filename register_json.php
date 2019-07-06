<?php
	require 'connection.php';
	$obj = new stdClass();
	$obj->name = "Akshat";
	$obj->email = "example@gmail.com";
	$obj->phone = "9629000816";
	$obj->age = 18;
	$obj->address = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem doloremque enim soluta eligendi";
	$obj->skillset = "painting,teaching,maths,science";
	$obj->company = "ABC company";
	$obj->num_events = 0;
	$obj->totalhrs = 0;
	

	$json_obj = json_encode($obj);
	//echo $json_obj;
	$arr = json_decode($json_obj);
	//print_r($arr);
	$query = "INSERT INTO `volunteer`(`name`, `phone`, `email`, `age`, `address`, `skillset`, `company`, `num_events`, `totalhrs`, `password`) VALUES ('".$arr->{'name'}."','".$arr->{'phone'}."','".$arr->{'email'}."',".$arr->{'age'}.",'".$arr->{'address'}."','".$arr->{'skillset'}."','".$arr->{'company'}."',".$arr->{'num_events'}.",".$arr->{'totalhrs'}.",'".$arr->{'password'}."')";
	$result  = mysqli_query($conn,$query);
	if($result)
	{
		echo "Inserted";
	}
	else
	{
		echo mysqli_error($conn);
	}

?>