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
                                                   
                                                    ?>

<!doctype html>


<html lang="en" class="no-js">
<head>
    <--meta http-equiv="refresh" content="7">
<title>Gas Valve Control & Leakage Detection</title>

<style>
 #map {
        height: 400px;
        width: 100%;
       }
.error {color: #FF0000;
.tabl{
	padding:10px 5px;
}
</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
						<h2 class="std1">Gas Valve Control & Leakage Detection
</h2>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="active" href="u1.php">Home</a></li>
							<li><a class="active" href="ClrLog.php">Clear Log</a></li>
							<li><a href="/2019/gasbooking/login/logout.php">Logout</a></li>
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
			

<h2 class="std">Gas Leakage Log Status</h2>

	<br>
			 <table border='1' class="tab-align" >
			 <tr>
			     <th class="tdx"><h4>Time</h4></th>
			     <th class="tdx"><h4>Gas in Air</h4></th> 
			 </tr>
			 
			<?php 
			    $sql = "SELECT * FROM Log";
                $result = $conn->query($sql);   
                
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row_2 = $result->fetch_assoc()) {
			    
            			echo "<tr>";
            			echo "<td class=\"tabl\">"; echo $row_2["time_stamp"]; echo "</td>";
                        echo "<td class=\"tabl\">"; echo $row_2["gas_in_air"]; echo "%</td>";
                        echo "</tr>";

            			
            		}
            		
                }
                
               $conn->close(); 
             ?>

		                   </table>
					<br>		
					

	</div>
	<!-- End Container -->
	
	<script type="text/javascript" src="plugins/js/jquery.min.js"></script>
	<script type="text/javascript" src="plugins/js/jquery.migrate.js"></script>
	<script type="text/javascript" src="plugins/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="plugins/js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="plugins/js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="plugins/js/script.js"></script>

</body>
</html>