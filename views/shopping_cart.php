<!DOCTYPE>
<html>
<head>
  <meta charset='utf-8'>
  <title>Message</title>
  <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="../stylesheets/basic.css">
  <link rel="stylesheet" href="../stylesheets/colors.css">
  <link rel="stylesheet" href="../stylesheets/header.css">
  <link rel="stylesheet" href="../stylesheets/album_page.css">
  <link rel="stylesheet" href="../stylesheets/shopping_cart.css">
</head>
<body>
  <?php include '../php/verify_login.php'; ?>
  <?php include '../php/shopping_cart_info.php'; ?>
  <nav class="navbar">
    <a href="dash_client.html"><p id="logo">ZAGREB</p></a>
    <ul id="menu">
      <?php
      if($_SESSION['type_admin']==0)
      echo "<li class='menu_titles' id='saldo'>saldo: ".$_SESSION['cliente_saldo']."</li>";
      ?>
      <a href="profile_client.html"><li class="menu_titles" id="username"><?php echo $_SESSION['user']?></li></a>
      <li class="menu_titles">Search</li>
      <li class="menu_titles">Message</li>
      <a href="authentication.html">
        <li id="logout" class="menu_titles">Logout</li>
      </a>
    </ul>
  </nav>
  <div class="header">
    <h3>Shopping cart</h3>
  </div>
  <main>
    <?php $total=""; ?>
    <?php
    for($i=0;$i<count($cart_album_id);$i++){
      ?>
      <div class="item-wrapper pale-brown-bg">
        <h3>nameeeee:<?php echo $cart_album_name[$i] ?></h3>
        <h3>id:<?php echo $cart_album_id[$i] ?></h3>
        <div class="album-general-info">
          <div class="image-info">
            <span>artisttt:<?php echo $cart_artist[$i] ?></span>
            <span>yearrrr:<?php echo $cart_year[$i] ?></span>
            <span>genreeee:<?php echo $cart_genre[$i] ?></span>
            <span>priceeeee:<?php echo $cart_price[$i] ?></span>
          </div>
          <div class="track">
          </div>
        </div>
        <div class="payment-album">
          <div class="quantity">
            <h3>quantityyyy:</h3>
            <span><?php echo $cart_quantity[$i] ?></span>
            <span>-</span>
            <span>+</span>
          </div>
          <div class="total">
            <h3>Total</h3>
            <?php $_SESSION['total_price']=$cart_quantity[$i]*$cart_price[$i];?>
            <span name="total_price"><?php echo $_SESSION['total_price']; ?></span>
          </div>
        </div>
      </div>

    <?php } ?>

    <form action="../php/payment.php?id=<?php echo $_SESSION['id']; ?>" method="post">
        <input type="submit" name="payment" id="payment_button" value="PAYMENT BITCHES">
    </form>
  </main>
</body>
</html>
