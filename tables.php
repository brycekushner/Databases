<head>
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
.collapsible {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .collapsible:hover {
  background-color: #ccc;
}

/* Style the collapsible content. Note: hidden by default */
.content {
  padding: 0 18px;
  display: none;
  overflow-x: scroll;
  overflow-y: hidden;
  white-space: nowrap;
  background-color: #f1f1f1;
  .card {
    display: inline-block;
  }
  
}
.scrolling-wrapper {
  
}
</style>
</head>

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
$password = "";

$mysqli = mysqli_connect($host, $username, $password, $dbname);
$i = 1;
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

if(!$mysqli){
	echo "Dead Connection: ".mysqli_connect_error();
}
else{
$horses = mysqli_query($mysqli,"SELECT Horse.vdl FROM Horse;");
$horserows = mysqli_fetch_all($horses);
foreach( $horserows as $row){
  $x = $row[0];
  $horse = mysqli_query($mysqli,"SELECT * FROM Horse WHERE Horse.vdl=$x;");
  printTable($horse); ?>
  <button type="button" class="collapsible">Open Collapsible</button>
  <div class="content">
    <?php
    $hindlimb = mysqli_query($mysqli, "SELECT * FROM Hindlimb WHERE Hindlimb.vdl=$x;");
    printTable($hindlimb);
    $forelimb = mysqli_query($mysqli, "SELECT * FROM Forelimb WHERE Forelimb.vdl=$x;");
    printTable($forelimb);
    ?>
  </div> 
  <?php
}

}

mysqli_close($mysqli);
require "footer.php"; 
?>
<script>
  var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
} 
</script>