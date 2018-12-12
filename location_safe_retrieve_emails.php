<?php
	require "location_safe_init.php";
	$key="password";
      //  $user_group = "milestone";
      // $user_group = $_POST["user_group"];
       //$user_email = "wendy123@gmail.com";
       $user_email = $_POST["user_email"];
	//$sql_query = "select user_email from user_groups where user_group like '$user_group';";
	//$result_email = mysqli_query($con,$sql_query);
	//$emails = array();
        $result = array();
	//if(mysqli_num_rows($result_email)>0){
	//   while($row = mysqli_fetch_array($result_email)){
	   	//array_push($emails,$row[0]);
                $sql_query_new = "SELECT user_name,user_latitude,user_longitude FROM user_details WHERE user_email='$user_email';";
	       $res = mysqli_query($con,$sql_query_new);
               if(mysqli_num_rows($res)>0){
                 while($rows = mysqli_fetch_array($res)){
                // $timenew=$rows[3];   
                // $start_date = date('d/m/Y H:i:s', strtotime($timenew));
 array_push($result,array('email'=>$user_email,'name'=>$rows[0],'latitude'=>openssl_decrypt($rows[1],"AES-128-ECB",$key),'longitude'=>openssl_decrypt($rows[2],"AES-128-ECB",$key)));
                }
             }
             else{ echo "false";}
             //echo json_encode(array("result"=>$result));$decrypted_string=openssl_decrypt($rows[2],"AES-128-ECB",$password);
     //    }
         echo json_encode(array("result"=>$result));
    //  }
	//else{
	//	echo "false";
	//}
        mysqli_close($con);
?>