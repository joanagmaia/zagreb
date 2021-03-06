<!DOCTYPE>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/basic.css">
    <link rel="stylesheet" href="../stylesheets/adminHomepage.css">
    <link rel="stylesheet" href="../stylesheets/header.css">
  </head>
  <body>
    <?php include '../php/verify_login.php'; ?>
    <?php include '../php/statistics.php'; ?>
    <header>
      <?php include '../php/menu.php';?>
    </header>
    <main>
      <div class="left_column">
        <a href="add_album.php?id=<?php echo $_SESSION['id']; ?>" class="add_album">
          <p class="boxes_p">Add albums and all their tracks. Choose the best picture you have of it.</p>
          <img class="boxes_img" src="../public/add.png">
        </a>
        <a href="albums.php?id=<?php echo $_SESSION['id']; ?>" class="edit_album">
          <p class="boxes_p">Edit all your albums, change the price, their stock and their description.</p>
          <img class="boxes_img" src="../public/edit.png">
        </a>
        <a href="search.php?id=<?php echo $_SESSION['id']; ?>" class="remove_album">
          <p class="boxes_p">Out of stock? Deactivate one of your albums.</p>
          <img class="boxes_img" src="../public/remove.png">
        </a>
      </div>
      <div class="right_column">
        <div class="number">
          <p class="subtitle">Clients</p>
          <p class="number"><?php echo $nrowusers; ?></p>
        </div>
        <div class="number">
          <p class="subtitle">Albums in stock</p>
          <p class="number"><?php echo $nrowstock; ?></p>
        </div>
        <div class="number">
          <p class="subtitle">Total of albums</p>
          <p class="number"><?php echo $nrowalbums; ?></p>
        </div>
        <div class="number">
          <p class="subtitle">Rock albums</p>
          <p class="number"><?php echo $nrowalbumsrock; ?></p>
        </div>
        <div class="number">
          <p class="subtitle">Folk albums</p>
          <p class="number"><?php echo $nrowalbumsfolk; ?></p>
        </div>
        <div class="number">
          <p class="subtitle">Pop albums</p>
          <p class="number"><?php echo $nrowalbumspop; ?></p>
        </div>
        <div class="number">
          <p class="subtitle">Metal albums</p>
          <p class="number"><?php echo $nrowalbumsmetal; ?></p>
        </div>
        <div class="number">
          <p class="subtitle">Jazz albums</p>
          <p class="number"><?php echo $nrowalbumsjazz; ?></p>
        </div>
        <div class="number">
          <p class="subtitle">Tracks</p>
          <p class="number"><?php echo $nrowtracks; ?></p>
        </div>
      </div>
    </main>
    <?php
    echo '
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>'
    ?>
  </body>
</html>
