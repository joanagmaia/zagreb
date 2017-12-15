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

  if(isset($_GET['save_general'])) {
    session_start();
    $sessao_email = $_SESSION['email'];
    $new_name = $_GET['name_edit'];
    $new_password = $_GET['password_edit'];

    $sql = "UPDATE utilizador SET name='$new_name', password='$new_password' WHERE email='$sessao_email'";
    if ($conn->query($sql) === TRUE) {
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>
