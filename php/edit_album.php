<?php
$servername = "localhost";
$username = "root";
$password = "projetoSI";
$dbname = "zagreb_database";
$conn = new mysqli($servername, $username, $password, $dbname);
session_start();



// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_GET['submit_edit'])) {
  $album_name=$_SESSION['album_name'];
  $sql = "SELECT * FROM album WHERE name='$album_name'";
  $result = $conn->query($sql);
  while($row=$result->fetch_assoc()) {
    if(($_GET['inactive_album'])=='no') {
        $sql_not_available = "UPDATE album SET available=0 WHERE name='$album_name'";
        if ($conn->query($sql_not_available) === TRUE) {
        } else {
          echo "Error: " . $insert . "<br>" . $conn->error;
        }
      }
      if(($_GET['inactive_album'])=='yes') {
          $sql_available = "UPDATE album SET available=1 WHERE name='$album_name'";
          if ($conn->query($sql_available) === TRUE) {
          } else {
            echo "Error: " . $insert . "<br>" . $conn->error;
          }
        }
        $new_price = $_GET['price_album'];
        $new_stock = $_GET['stock_album'];
        $sql_price_stock = "UPDATE album SET price='$new_price', stock='$new_stock' WHERE name='$album_name'";
        if ($conn->query($sql_price_stock) === TRUE) {
        } else {
          echo "Error: " . $sql_price_stock . "<br>" . $conn->error;
        }
      }
    }
    ?>
