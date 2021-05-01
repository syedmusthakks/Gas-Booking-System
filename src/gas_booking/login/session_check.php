<?php
session_start();
if(isset($_SESSION['user_oid'])) 
{
	$user_oid = $_SESSION['user_oid'];
	$display_name = $_SESSION['display_name'];
	$last_modification_time = $_SESSION['last_modification_time'];
	$user_group_id=$_SESSION['user_group_oid'];
}
else 
{
	 ?>
                                                           <script>
                                                    		alert('relogin');
                                                            window.location.href='/2019/homeauto/index.php';
                                                            </script><?php
}
?>