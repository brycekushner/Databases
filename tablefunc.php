<?php
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
?>
