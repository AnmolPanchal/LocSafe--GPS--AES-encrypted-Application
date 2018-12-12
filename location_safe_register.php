<?php

	require "location_safe_init.php";

	//$user_name = "Wendy";
    //$user_email = "wendy123@gmail.com";
	//$user_password = "wendy123";
	//$user_mobile = 1234234523;
	//$user_company = "capgemini";


	$user_name = $_POST["user_name"];
	$user_email = $_POST["user_email"];
	$user_password = $_POST["user_password"];
	$user_mobile = $_POST["user_mobile"];
	$user_company = $_POST["user_company"];
	
	$sql_query = "insert into user_details(user_name,user_email,user_password,user_mobile,user_company) values('$user_name','$user_email','$user_password','$user_mobile','$user_company');";
	if(mysqli_query($con,$sql_query)){
		//echo"<h3> Data insertion success</h3>";
	}
	else{
		//echo "Data insertion error. ".mysqli_error($con);
	}

?>