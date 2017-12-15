<!DOCTYPE>
<html>
<head>
  <meta charset='utf-8'>
  <title>Shopping cart</title>
  <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="../stylesheets/basic.css">
  <link rel="stylesheet" href="../stylesheets/colors.css">
  <link rel="stylesheet" href="../stylesheets/header.css">
  <link rel="stylesheet" href="../stylesheets/album_page.css">
  <link rel="stylesheet" href="../stylesheets/shopping_cart.css">
</head>
<body>
  <?php include '../php/verify_login.php';
  $_SESSION['total_price']=array();
  $_SESSION['cart_id']=array();
  $_SESSION['quantidade']=array();
  $_SESSION['cart_name']=array();?>
  <?php include '../php/shopping_cart_info.php'; ?>
  <header>
    <?php include '../php/menu.php';?>
  </header>
  <div class="header">
    <h3>Shopping cart</h3>
  </div>
  <main>
    <?php $total=""; ?>
    <?php
    for($i=0;$i<count($cart_album_id);$i++){
      if($terminado[$i]==0){
      ?>
      <div class="item-wrapper pale-brown-bg">
        <h3><?php echo $cart_album_name[$i] ?></h3>
        <?php $_SESSION['cart_name'][]=$cart_album_name[$i] ?>
        <div class="album-general-info">
          <div class="image-info">
            <span>artist:<?php echo $cart_artist[$i] ?></span>
            <span>year:<?php echo $cart_year[$i] ?></span>
            <span>genre:<?php echo $cart_genre[$i] ?></span>
            <span>price:<?php echo $cart_price[$i] ?></span>
          </div>
        </div>
        <div class="payment-album">
          <div class="quantity">
            <h3>quantity:</h3>
            <h3><?php echo $cart_quantity[$i] ?></h3>
            <?php $_SESSION['quantidade'][]=$cart_quantity[$i] ?>
          </div>
          <div class="total">
            <h4>Total:</h4>
            <?php $_SESSION['total_price'][]=$cart_quantity[$i]*$cart_price[$i];
            $_SESSION['cart_id'][]=$cart_id[$i];?>
            <h4 name="total_price"><?php echo $cart_quantity[$i]*$cart_price[$i]; ?></h4>
          </div>
        </div>
      </div>

    <?php }} ?>
    <?php
    for($i=0;$i<count($cart_album_id);$i++){
      if($terminado[$i]==0){
      ?>
    <form action="../php/payment.php?id=<?php echo $_SESSION['id']; ?>" method="post">
        <input type="submit" name="payment" id="payment_button" value="PAYMENT">
    </form>
  <?php }} ?>
  </main>
</body>
</html>
