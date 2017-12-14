<?php
$servername = "localhost";
$username = "root";
$password = "projetoSI";
$dbname = "zagreb_database";
$message="";
$title="";
$nrow=0;
$insert_into=0;

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM mensagem";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  $nrow+=1;
  if(isset($_POST['message_submit'])) {
    $title = $_POST['title_message'];
    $message = $_POST['message_content'];
    $insert_into+=1;
  }
}

if($nrow==$insert_into) {
  session_start();
  $name = $_SESSION['user'];
  $sql_insert = "INSERT INTO mensagem (id, name_admin, field, title)
  VALUES ($nrow, '$name','$message','$title')";
  if ($conn->query($sql_insert) === TRUE) {
    echo 'deu';
  } else {
    echo "Error: " . $sql_insert . "<br>" . $conn->error;
  }
}

 ?>
