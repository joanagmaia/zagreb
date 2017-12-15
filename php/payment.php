<?php
$servername = "localhost";
$username = "root";
$password = "projetoSI";
$dbname = "zagreb_database";
session_start();
$cliente_saldo=$_SESSION['cliente_saldo'];
$sum=0;
$total_price="";
$cart_idd;

for($j=0;$j<count($_SESSION['total_price']);$j++) {
  $total_price += $_SESSION['total_price'][$j];
}

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

  for($j=0;$j<count($_SESSION['cart_id']);$j++) {
    $cart_idd=$_SESSION['cart_id'][$j];
    $update_terminado ="UPDATE carrinho SET terminado=true WHERE id='$cart_idd';";
    if ($conn->query($update_terminado) === TRUE) {
      echo "New connection successfull2";
    } else {
      echo "Error: " . $update_terminado . "<br>" . $conn->error;
    }
  }
  for($j=0;$j<count($_SESSION['cart_name']);$j++) {
    $quantidade=$_SESSION['quantidade'][$j];
    $name_stock=$_SESSION['cart_name'][$j];
    $update_stock = "UPDATE album SET stock=stock-$quantidade WHERE name='$name_stock';";
    if ($conn->query($update_stock) === TRUE) {
      echo "New connection successfull2";
    } else {
      echo "Error: " . $update_stock . "<br>" . $conn->error;
    }
    $get_stock = "SELECT stock FROM album WHERE name='$name_stock';";
    $result_available = $conn->query($get_stock);
    if ($result_available->num_rows > 0) {
      // output data of each row
      while($row = $result_available->fetch_assoc()) {
        if($row['stock']<=0) {
          $update_available = "UPDATE album SET available=0 WHERE name='$name_stock';";
          $result_update = $conn->query($update_available);
        }
      }
    }
  }


} else {
  echo "<script language='javascript'>
  alert('you dont have money');
  </script>";
}

header('Location: '.'../views/shopping_cart.php?id='.$_SESSION['id']);



?>
