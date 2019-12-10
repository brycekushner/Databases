<html>
<?php include('header.php'); ?>
<body>
<h1>Equine Database</h1>

<?php
	// Gets user input
	$user = $_POST["username"];
	$pass = $_POST["password"];
	$registerCheck = true;
	$loginOnly = true;
	// Connects to SQL database
	$host = 'localhost'; //enter hostname
	$userName = 'root'; //enter user name of DB
	$Pass = 'pwd'; //enter password
	$DB = 'equine'; //Enter database name
	$mysqli = mysqli_connect($host, $userName,$Pass,$DB);

	if(!$mysqli){
		echo "Dead Connection: ".mysqli_connect_error();
	}
		
	else{
		if($_POST["login"]){
		$registerCheck = false;
		$checkName = "SELECT userid,password FROM Login WHERE userid='$user' AND password='$pass'";
		$sqlNameCheck = mysqli_query($mysqli, $checkName);
		if(mysqli_num_rows($sqlNameCheck)>=1){
		?>
			<h3>Congrats! You Logged in!</h3>
	<?php }	else { ?>
			<h3>Incorrect login.</h3> <?php }				
	} elseif($_POST["register"]){
		$loginOnly = false;
		// Check if userid already exists
		$check = "SELECT userid FROM Login WHERE userid='$user'";
		$sql=mysqli_query($mysqli,$check);
		if(mysqli_num_rows($sql)>=1){
		       	$registerCheck = false;	
		}
                // Insert into database
		if($registerCheck){
			$sql2 = "INSERT INTO Login (userid, password) VALUES ('$user','$pass')";
			if(!(mysqli_query($mysqli,$sql2))){
				echo "Error: " . $sql2 . "<br>" . mysqli_error($mysqli);
			}
		}
	}
		mysqli_close($mysqli);
		if($registerCheck){
		?>
			<h3>You have registered!</h3>
			<p>Your username is: <?php echo $user; ?> </p>
			<p>Your password is: <?php echo $pass; ?> </p>
			<br> 
		<?php } elseif(!$loginOnly) { ?>
			<p>Username already exists.</p>
		<?php } 
		include('footer.php'); 
	} ?>
</body>
</html>

