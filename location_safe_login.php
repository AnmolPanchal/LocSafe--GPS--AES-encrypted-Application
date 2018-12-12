<?php

	require "location_safe_init.php";
	//$user_email = "wendy123@gmail.com";
    $user_email = $_POST["user_email"];
	
	$sql_query = "select user_name from user_details where user_email like '$user_email';";
	$result = mysqli_query($con,$sql_query);
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		$user_name = $row["user_name"];
		echo"".$user_name;
	}
	else{
		echo "false";
	}

?>