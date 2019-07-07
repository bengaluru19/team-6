<?php
	session_start();
	require 'connection.php';
	$eve_id=1;
	$vol_id=1;
	if(file_exists($_FILES['productimage']['tmp_name']) && is_uploaded_file($_FILES['productimage']['tmp_name']))
	{
	  $errors= array();
	  $file_name = $_FILES['productimage']['name'];
	  $file_size =$_FILES['productimage']['size'];
	  $file_tmp =$_FILES['productimage']['tmp_name'];
	  $file_type=$_FILES['productimage']['type'];
	  $tt = explode('.',$_FILES['productimage']['name']);
	  $file_ext=strtolower(end($tt));
	  $pre = "../$eve_id,$vol_id";
	  if (!file_exists($pre)) {
		    mkdir($pre, 0777, true);
		  }
	  $filenewname = $pre.$file_name;
	  $extensions= array("jpeg","jpg","png");
	  
	  if(in_array($file_ext,$extensions)=== false){
	     $errors[]="extension not allowed, please choose a JPG, JPEG or PNG file.";
	  }
	  
	  if($file_size > 1048576){
	     $errors[]='File size must be less than 1 MB';
	  }
	  
	  if(empty($errors)==true){
	  	
	     move_uploaded_file($file_tmp,$filenewname);

	  }else{
	  	echo '<script>alert("'.$errors[0].'");location.href="index.php"</script>';

	  }
	}
	else
	{
		echo "Not uploaded";
	}

	?>