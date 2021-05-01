<?php
$dbhost = "localhost";
$dbuser = "simpl426_iot";
$dbpass = "inventeron7*";
$dbname = "simpl426_data_logger1";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('database selection problem');
?>