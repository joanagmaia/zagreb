<!DOCTYPE>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/basic.css">
    <link rel="stylesheet" href="../stylesheets/colors.css">
    <link rel="stylesheet" href="../stylesheets/header.css">
    <link rel="stylesheet" href="../stylesheets/dash_client.css">
    <link rel="stylesheet" href="../stylesheets/message_admin.css">
  </head>
  <body>
    <?php include '../php/verify_login.php';
    include '../php/dash_client_info.php';
    ?>
      <header>
        <?php include '../php/menu.php';?>
      </header>
    <div class="header">
      <h3>Dashboard</h3>
      <span>Check your latest albums and more that you might like.</span>
    </div>
    <main>
      <div class="recent-albuns pale-brown-bg">
          <h2>Your recent purchases</h2>
        <div class="all_albuns">
        <?php for($i=0;$i<count($album_id);$i++) {?>
          <div class="purchased_albums">
            <h3><?php echo $album_name[$i];?></h3>
            <h4>Price: <?php echo $album_price[$i]; ?></h3>
            <h4>Quantity: <?php echo $album_quantity[$i]; ?></h3>
          </div>
        <?php } ?>
      </div>
      </div>
      <div class="recommended">
        <div class="title">
          <h2>In your cart</h2>
          <a href="shopping_cart.php?id=<?php echo $_SESSION['id']; ?>">
            <h4>Go to cart</h4>
          </a>
        </div>
        <?php for($i=0;$i<count($cart_album_id);$i++) {?>
          <div class="cart_albums">
            <h3><?php echo $cart_album_name[$i];?></h3>
            <h4>Price: <?php echo $cart_album_price[$i]; ?></h3>
            <h4>Quantity: <?php echo $cart_album_quantity[$i]; ?></h3>
          </div>
        <?php } ?>
      </div>
    </main>
  </body>
</html>
