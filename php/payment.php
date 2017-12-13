<?php
$servername = "localhost";
$username = "root";
$password = "projetoSI";
$dbname = "zagreb_database";
session_start();
$cliente_saldo=$_SESSION['cliente_saldo'];
$total_price = $_SESSION['total_price'];
$refresh = false;
$user=$_SESSION['user'];
$novo_saldo = $cliente_saldo-$total_price;
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($novo_saldo>=0) {
  $update = "UPDATE utilizador SET cliente_saldo=$novo_saldo WHERE name='$user';";
  if ($conn->query($update) === TRUE) {
    echo "New connection successfull2";
  } else {
    echo "Error: " . $update . "<br>" . $conn->error;
  }
  $_SESSION['cliente_saldo']=$novo_saldo;

} else {
  echo "<script language='javascript'>
  alert('you dont have money');
  </script>";
}
  header('Location: '.'../views/shopping_cart.php?id='.$_SESSION['id']);




?>
