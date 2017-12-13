<?php

$servername = "localhost";
$username = "root";
$password = "projetoSI";
$dbname = "zagreb_database";
$cart_album_name=array();
$cart_artist=array();
$cart_year=array();
$cart_genre=array();
$cart_album_id=array();
$cart_quantity=array();
$cart_price=array();
$nrow=0;

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$carrinho_info = "SELECT * FROM carrinho";
$result_carrinho = $conn->query($carrinho_info);

if ($result_carrinho->num_rows > 0) {
  // output data of each row
  while($row = $result_carrinho->fetch_assoc()) {
    if($row['client_id']==$_SESSION['cliente_id']) {
      array_push($cart_album_id,$row['album_id']);
      array_push($cart_quantity,$row['quantidade']);
      array_push($cart_price,$row['price']);
    }
  }
}



for($i=0;$i<count($cart_album_id);$i++){
  $album_info = "SELECT * FROM album";
  $result_album = $conn->query($album_info);
  if ($result_album->num_rows > 0) {
    // output data of each row

    while($row = $result_album->fetch_assoc()) {
      if($row['id']==$cart_album_id[$i]) {
        array_push($cart_album_name,$row['name']);
        array_push($cart_artist,$row['artist']);
        array_push($cart_year,$row['year']);
        array_push($cart_genre,$row['genre']);
      }
      $nrow+=1;
    }
  }
}
?>
