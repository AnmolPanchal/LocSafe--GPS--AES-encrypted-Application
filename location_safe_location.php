<?php

	require "location_safe_init.php";
	$key="password";
	//$user_email = "wendy123@gmail.com";
	//$user_latitude ="0.31221";
	//$user_longitude = "545.212";
	

	$user_email = $_POST["user_email"];
	$latitude = $_POST["user_latitude"];
	$user_latitude=openssl_encrypt($latitude,"AES-128-ECB",$key);
	$longitude = $_POST["user_longitude"];
	$user_longitude=openssl_encrypt($longitude,"AES-128-ECB",$key);
        
       $sql_query = "UPDATE `user_details` SET `user_latitude`='$user_latitude',`user_longitude`='$user_longitude' WHERE `user_email`='$user_email';";
	if(mysqli_query($con,$sql_query)){
		echo"<h3> Data insertion success</h3>";
	}
	else{
		echo "Data insertion error. ".mysqli_error($con);
	}

?>