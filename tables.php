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
  try  {
    $connection = new PDO($dsn, $username, $password, $options);
    $sql = "SELECT * 
            FROM Horse";
    $statement = $connection->prepare($sql);
    $statement->execute();
    $result = $statement->fetchAll();
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }

?>
<?php
  if ($result && $statement->rowCount() > 0) { ?>
    <h2>Results</h2>

    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Date of Birth</th>
          <th>Breed</th>
          <th>Gender</th>
          <th>VDL</th>
          <th>ROOD</th>
          <th>Outside</th>
          <th>Race Train</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($result as $row) : ?>
        <tr>
          <td><?php echo escape($row["name"]); ?></td>
          <td><?php echo escape($row["dob"]); ?></td>
          <td><?php echo escape($row["breed"]); ?></td>
          <td><?php echo escape($row["gender"]); ?></td>
          <td><?php echo escape($row["vdl"]); ?></td>
          <td><?php echo escape($row["rood"]); ?></td>
          <td><?php echo escape($row["outside"]); ?> </td>
          <td><?php echo escape($row["racetrain"]); ?> </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    <?php } else { ?>
      <blockquote>No results found
    <?php } 
} ?> 

<h2>Find user based on location</h2>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>