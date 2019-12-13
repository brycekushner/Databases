<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
#simpleTable {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#simpleTable td, #simpleTable th {
  border: 1px solid #ddd;
  padding: 8px;
}

#simpleTable tr:nth-child(even){background-color: #f2f2f2;}

#simpleTable tr:hover {background-color: #ddd;}

#simpleTable th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<h1>Equine Database</h1>
	<hr>
	<a href="forms.php">Forms</a> | <a href="tables.php">Archive</a> | <a href="analytics.php">Analytics</a> | <a href="filter.html">Filter</a>
</head>
<?php
$host = "localhost";
$dbname= "equine";
$username  = "root";
$password = "pwd";
$conn = mysqli_connect($host, $username, $password, $dbname);
function printTable($query, $table_headers = NULL)
{
  $fields = mysqli_fetch_fields($query);
  $rows = mysqli_fetch_all($query);
  echo "<h2>$f</h2>";
  echo "<table id=\"simpleTable\">";
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
$query = 'SELECT * FROM HorseView WHERE name IS NOT NULL';

if (isset($_POST['name']) && trim($_POST['name']) !==""){
    $x = $_POST['name'];
    $query = $query . " AND name='$x'";
}
if (isset($_POST['vdl']) && trim($_POST['vdl']) !==""){
    $x = $_POST['vdl'];
    $query = $query . " AND vdl='$x'";
}
if (isset($_POST['rood']) && trim($_POST['rood']) !==""){
    $x = $_POST['rood'];
    $query = $query . " AND rood='$x'";
}
if ($_POST['filteron1'] !== '...' && $_POST['field1'] !== '...' && $_POST['comparison1'] !== '...' && $_POST['value1'] !== '...'){
    $table = $_POST['filteron1'];
    $field = $_POST['field1'];
    $comp = $_POST['comparison1'];
    $val = $_POST['value1'];
    $query = $query . " AND $field $comp '$val'";
}
if ($_POST['filteron2'] !== '...' && $_POST['field2'] !== '...' && $_POST['comparison2'] !== '...' && $_POST['value2'] !== '...'){
    $table = $_POST['filteron2'];
    $field = $_POST['field2'];
    $comp = $_POST['comparison2'];
    $val = $_POST['value2'];
    $query = $query . " AND $field $comp '$val'";
}
if ($_POST['filteron3'] !== '...' && $_POST['field3'] !== '...' && $_POST['comparison3'] !== '...' && $_POST['value3'] !== '...'){
    $table = $_POST['filteron3'];
    $field = $_POST['field3'];
    $comp = $_POST['comparison3'];
    $val = $_POST['value3'];
    $query = $query . " AND $field $comp '$val'";
}
$query = $query . ";";
echo $query;
printTable(mysqli_query($conn,$query))
?>
