<html>
<?php include('header.php'); ?>
<body>
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

function printTable($query, $table_headers = NULL)
{
  $fields = mysqli_fetch_fields($query);
  $rows = mysqli_fetch_all($query);
  echo "<h2>$f</h2>";
  echo "<table>";
  echo "<thead>";
  echo "<tr>";
  if (!is_null($table_headers)) {
    foreach ($fields as $field) {
      if (array_key_exists($field->name,$table_headers)) {
        $name = $table_headers[$field->name];
        echo "<th>$name</th>";
      }
      else {
        $name = $field->name;
        echo "<th>$name</th>";
      }
    }
  }
  else {
    foreach ($fields as $field) {
      $name = $field->name;
      echo "<th>$name</th>";
    }
  }
  echo "</tr>";
  echo "</thead>";


  foreach($rows as $row){
    echo "<tr>";
    foreach($row as $field => $value){
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
  }

  echo "</table>";
}


if(!$mysqli){
	echo "Dead Connection: ".mysqli_connect_error();
}
else{

/*	
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
 */
$result = mysqli_query($mysqli,"SELECT * FROM Forelimb");
printTable($result);
}

mysqli_close($mysqli);
require "footer.php"; 
?>
