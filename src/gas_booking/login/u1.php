
<?php
	require_once('dbconn.php');
		if(isset($_GET['action']) && $_GET['action'] =='del')
{
	$del_query = 'Delete from tbl_uploads where id='.trim($_GET['del_id']);
	mysql_query($del_query);
}
?>



<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>Digital Water Supply </title>
<style>
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
							
							</div>	
							<div class="col-md-4">
							
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
						<a class="navbar-brand" href="index.html"><img src="images/logo.jpg" alt=""></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					    <h1 class="std">Digital Water Supply </h1>
						<!--ul class="nav navbar-nav navbar-right">
						
							<li><a class="active" href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Donations</a></li>
							<li><a href="blog.html">World Cup</a></li>
							<li><a href="contact.php">Team India</a></li>
							<li class="search"><a href="#" class="open-search"><i class="fa fa-search"></i></a>
								<form class="form-search">
									<input type="search" placeholder="Search:"/>
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</li>
						</ul-->
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
		<!-- End Header -->


		<!-- contact section 
			================================================== -->
			

		<h2 class="hidden1">Send data to a user</h2>
				<div class="banner2">
					<form id="contact-form" action="web_transfer.php" method="get">
						<div class="formd2">
						<p><span class="error">* required field.</span></p>
						<div class="col-md-4">
							<input type="text"  placeholder="Enter Reciever UID" name="uid" />
						</div>
						<div class="col-md-4">
							<input type="text"  placeholder="Enter any TEXT" name="data" />
						</div>
					<input type="submit" name="submit"  value="Submit" />		
					</form>
				</div></div>
			</section>
			
			
			<h2 class="hidden1">File Upload</h2>
				<div class="banner2">
					<form id="contact-form" action="web_transfer.php" method="get">
						<div class="formd2">
						<p><span class="error">* required field.</span></p>
						<div class="col-md-4">
							<input type="text"  placeholder="Enter Reciever UID" name="uid" />
						</div>
						<div class="col-md-4">
							<input type="text"  placeholder="Enter any TEXT" name="data" />
						</div>
					<input type="submit" name="submit"  value="Submit" />		
					</form>
				</div></div>
			</section>
<!--<table border='1' class="tab-align" >
					<tr>
						<th class="tabl">Id</th>
						<th class="tabl">Name</th>
						<th class="tabl">Account No</th>
						<th class="tabl">RFID</th>
						<th class="tabl">Balance</th>
						<th class="tabl">Pin</th>
					</tr>-->

 <?php/*
					echo $team;
					echo "<br>";echo $team2;echo "<br>";echo $notify;echo "<br>";echo $notify1;
					echo "<br>";echo $notify2;
					echo "<br>";
			$hostname = 'localhost';  
                 $username = 'simpl426_iot';  
                 $password = 'inventeron7*';  
                 $dbname = 'simpl426_emoney1';  
                                    				//require_once('config.php');
                 $conn = new mysqli($servername, $username, $password, $dbname);
                                                    // Check connection
                 if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
                 } 
			//echo 'Connected successfully<br/>';  
			  
			$sql = 'SELECT * FROM users';  
			$retval=mysqli_query($conn, $sql);  
			  
			if(mysqli_num_rows($retval) > 0){  
			
			 while($row = mysqli_fetch_assoc($retval)){  
				echo "<tr>";
						echo "<td class=\"tdx\">" . $row['id'] . "</td>";
						echo "<td class=\"tdx\">" . $row['name'] . "</td>";
						echo "<td class=\"tdx\">" . $row['acc_no'] . "</td>";
						echo "<td class=\"tdx\">" . $row['rfid'] . "</td>";
						echo "<td class=\"tdx\">" . $row['bal'] . "</td>";
						echo "<td class=\"tdx\">" . $row['pin'] . "</td>";
				echo "</tr>"; 
				
			 } //end of while  
			 echo "</table></div>";
			}else{  
			echo "0 results";  
			}  
			mysqli_close($conn);  */			
?>

<br/><br/><br/><br/>
<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
					
						
					</div>
				</div>
			</div>
		</footer>
	
	<script type="text/javascript" src="plugins/js/jquery.min.js"></script>
	<script type="text/javascript" src="plugins/js/jquery.migrate.js"></script>
	<script type="text/javascript" src="plugins/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="plugins/js/jquery.imagesloaded.min.js"></script>
	<script type="text/javascript" src="plugins/js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="plugins/js/script.js"></script>

</body>
</html>