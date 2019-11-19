<html>
<body>
<h1>Equine Database</h1>
<?php
/**
 * Function to query information based on 
 * a parameter: in this case, location.
 *
 */
$host = 'localhost';
$userName = 'root';
$password = "";
$DB = 'equine';
$sql = "SELECT * 
            FROM Forelimb";
$mysqli = mysqli_connect($host, $userName, $password, $DB);
$query = mysqli_query($mysqli,$sql);
?>
<?php
  if ($query->num_rows > 0) { ?>
    <h2>Results</h2>
    <?php $rows = mysqli_fetch_all($query);?>
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
      <?php foreach ($rows as $row) : ?>
        <tr>
          <td><?php echo $row[0]; ?></td>
          <td><?php echo $row[1]; ?></td>
          <td><?php echo $row[2]; ?></td>
          <td><?php echo $row[3]; ?></td>
          <td><?php echo $row[4]; ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
    <?php } else { ?>
      <blockquote>No results found
    <?php } ?> 

<a href="index.php">Back to home</a>

<?php require "footer.php"; ?>
