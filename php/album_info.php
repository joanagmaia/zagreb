<?php
$servername = "localhost";
$username = "root";
$password = "projetoSI";
$dbname = "zagreb_database";
$refresh=false;

if(!isset($_SESSION))
{
  session_start();
}



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (!isset($_POST["shopping_cart"])) {

  $sql = "SELECT * FROM album";
  $result = $conn->query($sql);

  $album_name = $_GET['album_name'];
  $artist = "";
  $genre = "";
  $year = "";

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if (isset($album_name)) {
        if($row['name'] == $album_name) {
          $album_id=$row['id'];
          $artist=$row['artist'];
          $genre=$row['genre'];
          $year=$row['year'];
          $price=$row['price'];
        }
      }
    }
  }

  $_SESSION['album_name']=$album_name;
  $_SESSION['album_id']=$album_id;
  $_SESSION['artist']=$artist;
  $_SESSION['genre']=$genre;
  $_SESSION['year']=$year;
  $_SESSION['price']=$price;

}



if (isset($_POST["shopping_cart"])) {

  $existe = false;
  $data= date("y.d.m");
  $album_name=$_SESSION['album_name'];
  $album_id=$_SESSION['album_id'];
  $artist=$_SESSION['artist'];
  $genre=$_SESSION['genre'];
  $year=$_SESSION['year'];
  $price=$_SESSION['price'];
  $client_id=$_SESSION['cliente_id'];
  $cliente_saldo=$_SESSION['cliente_saldo'];

  $sum = 0;
  $verify_cart_rows = "SELECT * FROM carrinho";
  $result_verify_rows = $conn->query($verify_cart_rows);

  if ($result_verify_rows->num_rows > 0) {
    // output data of each row
    while($row = $result_verify_rows->fetch_assoc()) {
      $sum+=1;
      if($album_id==$row['album_id']) {
        $existe=true;
      }
    }
  }

  echo "album_id".$album_id;



  $user = $_SESSION['user'];
    if(!$existe){
      echo "nao existe";
      $insert = "INSERT INTO carrinho (id, data_transition,price,quantidade,album_id,client_id)
      VALUES ('$sum','$data','$price',1,'$album_id','$client_id');";

      if ($conn->query($insert) === TRUE) {
        echo "New connection successfull2";
      } else {
        echo "Error: " . $insert . "<br>" . $conn->error;
      }



    } else{
      echo "existe";
      $update_quantidade = "UPDATE carrinho
      SET quantidade=quantidade+1
      WHERE album_id=$album_id;";
      if ($conn->query($update_quantidade) === TRUE) {
        echo "New connection successfull2";
      } else {
        echo "Error: " . $update_quantidade . "<br>" . $conn->error;
      }
    }

header('Location: '.'../views/album_page.php?id='.$_SESSION['id'].'&album_name='.$_SESSION['album_name']);

}

?>
