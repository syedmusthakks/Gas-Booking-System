<?php
                                         if(isset($_POST['submit1'])){        
                                                    $dir=$_REQUEST["dir"];
                                                    $servername = 'localhost';  
                                    				$username = 'invenlly_admin';  
                                    				$password = 'inventeron7*';  
                                    				$dbname = 'invenlly_selfdrive';  
                                    				//require_once('config.php');
                                    			$conn = new mysqli($servername, $username, $password, $dbname);
                                                    // Check connection
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    } 
                                                         $sql = "UPDATE gps SET dir=$dir,cmd=0 WHERE id=1";
                                                        if ($conn->query($sql) === TRUE) {
                                                                echo "Record updated successfully2";
                                                               // exit(header("Location: tank_cmd.php"));
                                                               header("location: u1.php");
                                                            } 
                                                            else {
                                                                echo "Error updating record: " . $conn->error;
                                                                 header("location: u1.php");
                                                            }
                                                    $conn->close();}
                                                    ?>