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
$dsn = "MySQL:host=$host;dbname=$dbname";
  try  {
    $connection = new PDO($dsn, $username, $password);
    $sql = "SELECT * 
            FROM Forelimb";
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
          <th>VDL</th>
          <th>ROOD</th>
          <th>Leg</th>
          <th>norm</th>
          <th>doe</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($result as $row) : ?>
        <tr>
          <td><?php echo escape($row["vdl"]); ?></td>
          <td><?php echo escape($row["rood"]); ?></td>
          <td><?php echo escape($row["leg"]); ?></td>
          <td><?php echo escape($row["norm"]); ?></td>
          <td><?php echo escape($row["doe"]); ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    <?php } else { ?>
      <blockquote>No results found
    <?php } ?> 

<h2>Find user based on location</h2>

<a href="index.php">Back to home</a>

<?php require "footer.php"; ?>