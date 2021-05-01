<?php

include('config.php');

$conn = new mysqli($hostname, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 


if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $password=$_POST['password'];
  $user_type = $_POST['user_type'];

		  $sql = "select user_oid, display_name, last_modification_time,user_group_oid,link from employee_profile where email = '".$email."' and password = '".$password."';";
		  
		  $result = $conn->query($sql); 

		  
		  if ($result->num_rows > 0)
		  {
		  		$row = $result->fetch_assoc();
				session_start();
		  		$_SESSION['user_oid'] = $row['user_oid'];
		  		$_SESSION['display_name'] = $row['display_name'];
		  		$_SESSION['last_modification_time'] = $row['last_modification_time'];
		  		$_SESSION['user_group_oid']=$row['user_group_oid'];
		  		$link=$row['link'];
		  		$_SESSION['link']=$link;
		  		
				$sql = "update employee_profile set last_modification_time = now() where user_oid = '".$row['user_oid']."';";
				$conn->query($sql);
				header("Location: $link");
		  }
		  else 
		  {
			  
			header("Location: /2019/gas_booking/index.php?msg=Invalid Username/Password!");
		  }
	 /*}
	 else
	 {
			header("Location: index.php?msg=Usertype Not Defined Yet!");
	 }*/

}
?>