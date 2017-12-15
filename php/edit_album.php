<?php
$servername = "localhost";
$username = "root";
$password = "projetoSI";
$dbname = "zagreb_database";
$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
$lastID=0;
$date = date("Y.m.d");
$id='';



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
        $sql_get_albumID = "SELECT id FROM album WHERE name='$album_name'";
        $sql_albumID = $conn->query($sql_get_albumID);
        while($row = $sql_albumID->fetch_assoc()) {
          $id=$row['id'];
        }


        $sql_stats_db = "SELECT * from stats";
        $sql_stats_db_result =$conn->query($sql_stats_db);
        while($row=$sql_stats_db_result->fetch_assoc()) {
          $lastID = $row['id']+=1;
        }

        $sql_add_new_price = "INSERT INTO stats (id, data, album_ID, new_price) VALUES ($lastID, '$date', '$id', '$new_price');";
        if ($conn->query($sql_add_new_price) === TRUE) {
        } else {
          echo "Error: " . $sql_add_new_price . "<br>" . $conn->error;
        }
        if ($conn->query($sql_price_stock) === TRUE) {
        } else {
          echo "Error: " . $sql_price_stock . "<br>" . $conn->error;
        }
      }

    }
    ?>
