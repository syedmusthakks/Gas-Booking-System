 								<?php $servername = 'localhost';  
                                    				$username = 'invenlly_admin';  
                                    				$password = 'inventeron7*';  
                                    				$dbname = 'invenlly_gas_booking';  
                                    				//require_once('config.php');
                                    			$conn = new mysqli($servername, $username, $password, $dbname);
                                                    // Check connection
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    } ?>