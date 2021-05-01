<?php
 if(isset($_POST['submit1'])){        
            $Sw1 = $_REQUEST["Sw1"];

            
            $servername = 'localhost';  
			$username = 'invenlly_admin';  
			$password = 'inventeron7*';  
			$dbname = 'invenlly_gas_booking';  
			
		    $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
                 $sql = "UPDATE gas SET booking_mode=$Sw1  WHERE Id=1001";
                if ($conn->query($sql) === TRUE) {
                        //echo "Record updated successfully2";
                       header("location: u1.php");
                    } 
                    else {
                        echo "Error updating record: " . $conn->error;
                         header("location: u1.php");
                    }
            $conn->close();}
?>