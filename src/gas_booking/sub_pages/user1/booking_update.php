<?php
    if(isset($_POST['submit2'])){        
        $c_id = $_REQUEST["c_id"];
    
        $TimeStamp = new DateTime("now", new DateTimeZone('Asia/Kolkata') );
        $TimeStamp =  $TimeStamp->format('Y-m-d h:i:s a');
                
        $servername = 'localhost';  
    	$username = 'invenlly_admin';  
    	$password = 'inventeron7*';  
    	$dbname = 'invenlly_gas_booking';  
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "update gas set sms = \"Customer ID 1001 Gas is booked manually\" where Id=$c_id";
        $result = $conn->query($sql);
        
        $sql = "INSERT INTO booking_log (time_stamp, c_id, booking_mode) VALUES (\"$TimeStamp\", $c_id, \"Manual\")";
        //$result = $conn->query($sql);
        
        
        //$sql = "UPDATE gas SET valve_cmd=$Sw1, valve_cmd_ack=$Sw1  WHERE Id=1";
        if ($conn->query($sql) === TRUE) {
                //echo "Record updated successfully2";
               header("location: u1.php");
            } 
        else {
            echo "Error updating record: " . $conn->error;
             header("location: u1.php");
        }
        $conn->close();
        
    }
?>