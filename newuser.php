<?php

// Gets user input for creating a login
$user = $_POST["username"];
$pass = $_POST["password"];



// Connects to SQL database
$host = 'localhost';//enter hostname
$userName = 'root';//enter user name of DB
$Pass = 'pwd'; //enter password
$DB = 'equine'; //Enter database name
$mysqli = new mysqli($host, $userName,$Pass,$DB);

// Check for connection error
// If there is an error we will use $mysqli->connect_error
// to print the cause of the error
if ($mysqli->connect_errno) {
        echo "<p>Could not connect to database</p><br>";
        echo "Error: ". $mysqli->connect_error . "\n";
        exit;
}
else {
	// Check if userid already exists
	$sql=mysql_query("SELECT FROM Login (userid, password) WHERE userid=$user");
	if(mysql_num_rows($sql)>=1)
	{	
 ?> <p> <?php echo "Userid already exists"; ?> </p> <?php
	}
	// Insert into database
	$step1 = "INSERT INTO Login (userid, password) VALUES (?,?,?)";
	$step2 = mysqli_prepare($step1);
	$step2->bind_param("ss", $user, $pass);
	$step2->execute();

	if( !$step2 ){
		echo "Insertion Failed: ". $mysql->error. "\n";
	}
        
?>
