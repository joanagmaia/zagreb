<?php
$servername = "localhost";
$username = "root";
$password = "projetoSI";
$dbname = "zagreb_database";
$nrowusers=0;
$nrowstock=0;
$nrowalbums=0;
$nrowalbumsrock=0;
$nrowalbumspop=0;
$nrowalbumsfolk=0;
$nrowalbumsmetal=0;
$nrowalbumsjazz=0;

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//total de users - check
//total de discos - check
// valor total dos discos em stock - check
//valor total das vendas - verificar variavel boolean de comprado na tabela carrinho
// total de discos por género musical - check

  $number_users = "SELECT * FROM utilizador";
  $result = $conn->query($number_users);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $nrowusers+=1;
    }
  }

  $number_albums = "SELECT * FROM album";
  $result2 = $conn->query($number_albums);

  if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
      $nrowalbums+=1;
      if($row['stock']!=0){
        $nrowstock+=1;
      }
      if($row['genre']=="rock"){
        $nrowalbumsrock+=1;
      }
      if($row['genre']=="Folk"){
        $nrowalbumsfolk+=1;
      }
      if($row['genre']=="pop"){
        $nrowalbumspop+=1;
      }
      if($row['genre']=="metal"){
        $nrowalbumsmetal+=1;
      }
      if($row['genre']=="jazz"){
        $nrowalbumsjazz+=1;
      }
    }
  }
?>
