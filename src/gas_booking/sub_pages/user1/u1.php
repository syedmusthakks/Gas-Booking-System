              <?php 
                                                    $servername = 'localhost';  
                                    				$username = 'invenlly_admin';  
                                    				$password = 'inventeron7*';  
                                    				$dbname = 'invenlly_gas_booking';  
                                    				//require_once('config.php');
                                    			$conn = new mysqli($servername, $username, $password, $dbname);
                                                    // Check connection
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    } 
                                                   
   				                                    $sql = "SELECT * FROM gas where Id=1001";
                                                    $result = $conn->query($sql);                             
                                                    if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while($row = $result->fetch_assoc()) {
                                                             $Sw1 = $row["booking_mode"];
                                                             $gas_detected = $row["gas_level"];
                                                        }
                                                    } else {
                                                        //echo "0 results";
                                                    }
                                                    
                                                    $W0 = 0;
                                                    $Wn = 30;
                                                    $Numer = $gas_detected - 0;
                                                    $Denom = 100;
                                                    $num_of_days = ($Numer/ $Denom)*($Wn-$W0)+$W0;


                                                    //$conn->close();
                                                    ?>

<!doctype html>


<html lang="en" class="no-js">
<head>
    <meta http-equiv="refresh" content="15">
<title>Gas Booking System</title>

<style>
/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link href='http://fonts.googleapis.com/css?family=Montserrat:300,400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
	
	
	<link rel="stylesheet" type="text/css" href="plugins/css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="plugins/css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="plugins/css/style.css" media="screen">
    


</head>
<body>
	<!-- Container -->
	<div id="container">
	
		<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="top-line">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<ul class="info-list">
								
								<!--	<li>
										<i class="fa fa-globe"></i>
										Language: <span>English</span>
									</li>
									<li>
										<i class="fa fa-phone"></i>
										Call us:
										<span>+1 223 334 3434</span>
									</li>
									<li>
										<i class="fa fa-clock-o"></i>
										working time:
										<span>08:00 - 19:00</span>
									</li> -->
								</ul>
							</div>	
							<div class="col-md-4">
								<ul class="social-icons">
									<!--li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="dribble" href="#"><i class="fa fa-dribbble"></i></a></li-->
								</ul>
							</div>	
						</div>
					</div>
				</div>
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h2 class="std1">Gas Booking System</h2>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="active" href="u1.php">Home</a></li>
							<li><a href="#top" onclick="openForm()">Book</a></li>
							<li><a class="active" href="ClrLog.php">Clear Bookings</a></li>
							<li><a href="/2019/gas_booking/login/logout.php">Logout</a></li>
							<!--<li><a href="services.html">Donations</a></li>
							<li><a href="blog.html">World Cup</a></li>
							<li><a href="contact.php">Team India</a></li>
							<li class="search"><a href="#" class="open-search"><i class="fa fa-search"></i></a>  -->
								<form class="form-search">
									<input type="search" placeholder="Search:"/>
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
		<!-- End Header -->


		<!-- contact section 
			================================================== -->
			

<h2 class="std">Current Value Status & Control</h2>

	<br>
			 <table border='1' class="tab-align" >
			 <tr>
			     <th class="tdx"><h4>Booking Mode</h4></th>
			     <th class="tdx"><h4>Gas Level</h4></th>
			     <!--<th class="tdx"><h4>Range</h4></th>-->
			 </tr>
			<tr><form action = "loc_update.php" method = "POST">
				<td class="tabl">  
				    <input type="radio" name="Sw1" value="2" <?php if($Sw1==2){echo "checked";} ?>>Auto<br>
				    <input type="radio" name="Sw1" value="1" <?php if($Sw1==1){echo "checked";} ?>>Manual<br>
                </td>
                
                <td class="tabl">
                    <div class="progress" style = "height:24px;width:200px">
                        <div name="progress" role="progressbar" id="boot" aria-valuenow="
                            <?php echo $gas_detected;?>" >
                        </div>
                    </div>
                </td>
                
			<!--	<td class="tabl"><?php echo $num_of_days;?> days</td>-->
                
			</tr>  
		    <tr><td class="tdx" colspan="5"><input type="submit" value="Submit" name="submit1"></form></td></tr>
		                   </table>
					<br>		
					
					
					<table border='1' class="tab-align" >
			 <tr>
			     <th class="tdx"><h4>Customer ID</h4></th>
			     <th class="tdx"><h4>Time</h4></th>
			     <th class="tdx"><h4>Booking Mode</h4></th> 
			 </tr>
			 
			<?php 
			    $sql = "SELECT * FROM booking_log";
                $result = $conn->query($sql);   
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row_2 = $result->fetch_assoc()) {
			    
            			echo "<tr>";
            			echo "<td class=\"tabl\">"; echo $row_2["c_id"]; echo "</td>";
            			echo "<td class=\"tabl\">"; echo $row_2["time_stamp"]; echo "</td>";
                        echo "<td class=\"tabl\">"; echo $row_2["booking_mode"]; echo "</td>";
                        echo "</tr>";

            			
            		}
            		
                }
                
               $conn->close(); 
             ?>

		                   </table>


	</div>
	<!-- End Container -->
	

	
<div class="form-popup" id="myForm" >
  <form action="booking_update.php" method = "POST" class="form-container">
    <h1>Booking</h1>

    <label for="email"><b>Customer ID</b></label>
    <input type="text" placeholder="Enter Customer Id" name="c_id" required>

    <!--label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required-->

    <button type="submit" class="btn" name="submit2" value="submit2">Submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
	
	
	<script type="text/javascript" src="plugins/js/jquery.min.js"></script>
	<script type="text/javascript" src="plugins/js/jquery.migrate.js"></script>
	<script type="text/javascript" src="plugins/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="plugins/js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="plugins/js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="plugins/js/script.js"></script>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script>
    var myVar = setInterval(inter, 1000);
    function inter() {
        document.getElementById("boot").style.width = 
            <?php echo $gas_detected; ?>+"%";
        document.getElementById("boot").innerHTML = 
            <?php echo $gas_detected; ?>+"%";
            if (
            <?php echo $gas_detected; ?> < 30)
            {
                document.getElementById("boot").className = "progress-bar progress-bar-danger";
            }
             else
             {
                document.getElementById("boot").className = "progress-bar progress-bar-success";
                }
    }

        function openForm() {
          document.getElementById("myForm").style.display = "block";
        }
        
        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }


    </script>

</body>
</html>