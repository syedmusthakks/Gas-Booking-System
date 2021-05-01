fmap<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>ICC</title>
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
					    <h1 class="std">E-Money</h1>
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
			
			<br/><br/>
<br/>



     <?php
// define variables and set to empty values
$id = $name = $acc_no = $rfid = $bal0 = $no_100 = $pin = "";
$team = $team2 = $id1 = $name1 = $acc_no1 = $rfid1 = $bal01 = 
$pin1 = $id_error = $name_error = $acc_no__error =
$rfid_error = $bal_error = $pin_error = $plrdel = "";

function test_input($data) {
		//$data = trim($data);
	//	$data = stripslashes($data);
		//$data = htmlspecialchars($data);
		return $data;
		}
if(isset($_POST['submit1']))
{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["id"])) {
			$id_error = "id is required";
		} else {
			$id1 = test_input($_POST["id"]);
			// check if name only contains letters and whitespace

		}
		
		if (empty($_POST["name"])) 
		{
			$name_error = "Account holder name is required";
		} 
		else
			{
			     $name1 = test_input($_POST["name"]);
				}
				
		if (empty($_POST["acc_no"])) 
		{
			$name_error = "A/c no is required";
		} 
		else
			{
			     $acc_no1 = test_input($_POST["acc_no"]);
				}
		
		if (empty($_POST["rfid"])) 
		{
			$name_error = "rfid is required";
		} 
		else
			{
			     $rfid1 = test_input($_POST["rfid"]);
				}
			
		
		if (empty($_POST["bal0"])) 
		{
			$name_error = "balance is required";
		} 
		else
			{
			     $bal01 = test_input($_POST["bal0"]);
				}	
		
		if (empty($_POST["pin"])) 
		{
			$name_error = "pin is required";
		} 
		else
			{
			     	$pin1 = test_input($_POST["pin"]);
				}	
		
		
			
			if (empty($_POST["id"])) {
				if (empty($_POST["name"])) {
				$team="eror with inputs"; }
				}
			else 
			{
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
				
				$sql ="INSERT INTO users(id,name,acc_no,rfid,bal,pin) 
				VALUES ('$id1','$name1','$acc_no1','$rfid1','$bal01','$pin1')";  
				if(mysqli_query($conn, $sql)){  
			//	$notify1 = "Record inserted successfully";  
				}else{  
				$notify2 = "Could not insert record: ". mysqli_error($conn);  
				}  
				
				
				
			}	
		}
		
		
		
}

			if(isset($_POST['submit2']))
			{
			$plrdel1 =  $_POST["plrdel"];
			$team2="succes";
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
			
			$sql ="delete from users where name='$plrdel1'";
			if(mysqli_query($conn, $sql)){  
			$notify1 = "Record inserted successfully";  
			}else{  
			$notify2 = "Could not insert record: ". mysqli_error($conn);  
			}  
			}
?>
	
<h2 class="stl">Add new users into the database</h2>
		<section class="container1">
			<div class="banner1">
			<form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
				<div class="formd">
				<p><span class="error">* required field.</span></p>
				<div class="col-md-4"><span class="error">*<?php echo $id_error;?></span>
					<input type="text" name="id" placeholder="USer Id" value="<?php echo $id;?>">
				</div>
				<div class="col-md-4"><span class="error">*<?php echo $name_error;?></span>
					<input type="text" name="name" placeholder="Account holder Name" value="<?php echo $name;?>">
				</div><br/>
				<div class="col-md-4"><span class="error">*<?php echo $acc_no_error;?></span>
					<input type="text" name="acc_no" placeholder="Account No" value="<?php echo $acc_no;?>">
				</div>
				<div class="col-md-4"><span class="error">*<?php echo $rfid_error;?></span>
					<input type="text" name="rfid" placeholder="RFID" value="<?php echo $rfid;?>">
				</div><br/>
				<div class="col-md-4"><span class="error">*<?php echo $bal_error;?></span>
					<input type="text" name="bal0" placeholder="Balance" value="<?php echo $bal0;?>">
				</div>
				<div class="col-md-4"><span class="error">*<?php echo $pin_error;?></span>
					<input type="text" name="pin" placeholder="Pin" value="<?php echo $pin;?>">
				</div></div>
  				<input type="submit" name="submit1" value="Submit">  
			</form><br/><br/>			
			</div>
			</section>
			<section class="container1">
			<h2 class="hidden1">Remove users from database</h2>
				<div class="banner2">
					<form id="contact-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
						<div class="formd2">
						<p><span class="error">* required field.</span></p>
						<div class="col-md-4">
							<input type="text"  placeholder="Enter Account holder name to delete account" name="plrdel" />
						</div>
					<input type="submit" name="submit2"  value="Submit" />		
					</form>
				</div>
			</section>
<table border='1' class="tab-align" >
					<tr>
						<th class="tabl">Id</th>
						<th class="tabl">Name</th>
						<th class="tabl">Account No</th>
						<th class="tabl">RFID</th>
						<th class="tabl">Balance</th>
						<th class="tabl">Pin</th>
					</tr>

<?php
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
			mysqli_close($conn);  				
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