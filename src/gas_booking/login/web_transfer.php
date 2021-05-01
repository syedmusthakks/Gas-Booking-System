<?php
                                                    $uid=$_REQUEST["uid"];
                                                    $data=$_REQUEST["data"];
                                                   
                                                    $hostname = 'localhost';  
                                    				$username = 'simpl426_iot';  
                                    				$password = 'inventeron7*';  
                                    				$dbname = 'simpl426_data_logger1';  
                                    				//require_once('config.php');
                                    			$conn = new mysqli($servername, $username, $password, $dbname);
                                                    // Check connection
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    } 
                                                    
                                                   
                                                          $sql = "UPDATE notifiy SET cmd=1 WHERE uid=$uid";
                                                        if ($conn->query($sql) === TRUE) {
                                                           // echo "Record updated successfully1";
                                                         
                                                        } 
                                                        
                                                    else {
                                                           // echo "Error updating record: " . $conn->error;
                                                           
                                                         }
        
                                                         $sql = "UPDATE users SET data=\"$data\" WHERE uid=$uid";
                                                        if ($conn->query($sql) === TRUE) {
                                                                echo "Record updated successfully2";
                                                                  ?>
                                                           <script>
                                                    		alert('uploaded succesful');
                                                            window.location.href='u1.php';
                                                            </script><?php
                                                            } 
                                                            else {
                                                                echo "Error updating record: " . $conn->error;
                                                                ?> <script>
                                                    		alert('error while uploading file');
                                                            window.location.href='u1.php';
                                                            </script><?php
                                                            }
                                                        
                                                    
                                                    
                                                    
                                                  
                                                    
                                                    $conn->close();
                                                    ?>
                                                    
                                                   