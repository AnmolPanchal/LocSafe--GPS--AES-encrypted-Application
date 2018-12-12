<?php
	$host = "localhost";
	$db_name = "id965168_lushcush_truststrivedb";
	$db_user = "id965168_lushcush_wendy";
	$db_password = "lushcush@@2126";
	
	$con = mysqli_connect($host,$db_user,$db_password,$db_name);
	if(!$con){
		//echo"Connection Error. ".mysqli_connect_error();
	}
	else{
		//echo"Database connection success.";
	}

?>