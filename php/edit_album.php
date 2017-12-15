<?php
$servername = "localhost";
$username = "root";
$password = "projetoSI";
$dbname = "zagreb_database";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM album WHERE name='$album_name'";
$result = $conn->query($sql);

if(isset($_GET['submit_edit'])) {
  while($row=$result->fetch_assoc()) {
    if(isset($_GET['inactive_album'])) {
      if($row['available']===0) {
        $sql_available = "UPDATE album SET available=1 WHERE name='$album_name'";
        echo 'deu set disponivel';
      } else {
        $sql_available = "UPDATE album SET available=0 WHERE name='$album_name'";
        echo 'deu set indisponivel';
      }
    }
  }
}
 ?>
