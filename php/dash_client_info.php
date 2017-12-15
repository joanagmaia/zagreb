<?php
$album_id=array();
$album_name=array();
$album_price=array();
$album_quantity=array();
$cart_album_id=array();
$cart_album_name=array();
$cart_album_price=array();
$cart_album_quantity=array();
$client_id=$_SESSION['cliente_id'];

$get_purchases="SELECT * FROM carrinho WHERE client_id='$client_id' AND terminado=1;";
$result = $conn->query($get_purchases);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $album_id[]=$row['album_id'];
    $album_price[]=$row['price'];
    $album_quantity[]=$row['quantidade'];
  }
}
for($i=0;$i<count($album_id);$i++) {
  $get_album_name="SELECT name FROM album WHERE id='$album_id[$i]';";
  $result = $conn->query($get_album_name);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $album_name[]=$row['name'];
    }
  }
}

$get_cart="SELECT * FROM carrinho WHERE client_id='$client_id' AND terminado=0;";
$result = $conn->query($get_cart);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $cart_album_id[]=$row['album_id'];
    $cart_album_price[]=$row['price'];
    $cart_album_quantity[]=$row['quantidade'];
  }
}
for($i=0;$i<count($cart_album_id);$i++) {
  $get_album_name="SELECT name FROM album WHERE id='$cart_album_id[$i]';";
  $result = $conn->query($get_album_name);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $cart_album_name[]=$row['name'];
    }
  }
}
?>
