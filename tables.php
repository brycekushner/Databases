<html>
<body>
<h1>Equine Database</h1>
<?php
/**
 * Function to query information based on 
 * a parameter: in this case, location.
 *
 */
$host = "localhost";
$dbname= "equine";
$username  = "root";
$password = "pwd";
$mysqli = mysqli_connect($host, $username, $password, $dbname);

if(!$mysqli){
	echo "Dead Connection: ".mysqli_connect_error();
}
else{
?>
	<table width="700">
		<thead>	
			<tr>
				<th>Name</th><th> UK Case Number</th><th><th>Riddle Equine Case Number</th><th>Leg</th><th>Density Normalization?</th><th>Date</th>
			</tr>
		</thead>
	<tbody>
<?php
	$sql = "SELECT * FROM Forelimb";
	$result = mysqli_query($mysqli, $sql);
	while($row = mysqli_fetch_array($result)){
		echo "<tr><td width=70>".$row['name']."</td><td width=70>".$row['vdl']."</td><td width=70>".$row['rood']."</td><td width=70>".$row['leg']."</td><td width=70>".$row['norm']."</td><td width=70>".$row['doe']."</td>";
	}
}
?>	</tbody>
	</table>
<?php
mysqli_close($mysqli);
require "footer.php"; 
?>
