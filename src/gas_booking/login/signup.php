<?php
                $firstname=$_REQUEST["fname"];//receiving name field value in $name variable  
               $lastname=$_REQUEST["lname"];
               $email=$_REQUEST["email"];
               $password=$_REQUEST["pass"];             
                
                                                     $hostname = 'localhost';  
                                    				$username = 'simpl426_iot';  
                                    				$password = 'inventeron7*';  
                                    				$dbname = 'simpl426_digitank';  
                                    				//require_once('config.php');
                                    			$conn = new mysqli($servername, $username, $password, $dbname);
                                                    // Check connection
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    } 
			  
				
				$sql ="INSERT into login(firstname,lastname,emailid,password) 
				VALUES ('$firstname','$lastname','$email','$password')";  
				if(mysqli_query($conn, $sql)){  
               echo  "Record inserted successfully";  
                header("location: http://emoney.missioniot.com"); // Redirecting To Other Page
                
				}else{  
                 echo "Could not insert record: ". mysqli_error($conn);  
                }
                 $conn->close();
?>