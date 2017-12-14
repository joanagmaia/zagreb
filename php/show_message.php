<?php
$servername = "localhost";
$username = "root";
$password = "projetoSI";
$dbname = "zagreb_database";
$title=array();
$message=array();
$admin=array();
$nrow=0;

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM mensagem";
$result = $conn->query($sql);

while($row=$result->fetch_assoc()) {
  $title[]=$row['title'];
  $message[]=$row['field'];
  $admin[]=$row['name_admin'];
  $nrow+=1;
}
 ?>
