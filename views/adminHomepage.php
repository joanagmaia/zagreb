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
        <a href="add_album.php?id=<?php echo $valid_id; ?>" class="add_album">
          <p class="boxes_p">Add albums and all their tracks. Choose the best picture you have of it.</p>
          <img class="boxes_img" src="../public/add.png">
        </a>
        <a href="#" class="edit_album">
          <p class="boxes_p">Edit all your albums, change the price, their stock and their description.</p>
          <img class="boxes_img" src="../public/edit.png">
        </a>
        <a href="#" class="remove_album">
          <p class="boxes_p">Out of stock? Deactivate one of your albums.</p>
          <img class="boxes_img" src="../public/remove.png">
        </a>
      </div>
      <div class="right_column">
        <div class="number_clients">
          <p class="subtitle">Number of clients</p>
          <p class="number"><?php echo $nrowusers; ?></p>
        </div>
        <div class="number_stock">
          <p class="subtitle">Number of albums in stock</p>
          <p class="number"><?php echo $nrowstock; ?></p>
        </div>
        <div class="number_albums">
          <p class="subtitle">Number of albums</p>
          <p class="number"><?php echo $nrowalbums; ?></p>
        </div>
        <div class="number_rock">
          <p class="subtitle">Number of albums rock</p>
          <p class="number"><?php echo $nrowalbumsrock; ?></p>
        </div>
        <div class="number_folk">
          <p class="subtitle">Number of albums folk</p>
          <p class="number"><?php echo $nrowalbumsfolk; ?></p>
        </div>
        <div class="number_pop">
          <p class="subtitle">Number of albums pop</p>
          <p class="number"><?php echo $nrowalbumspop; ?></p>
        </div>
        <div class="number_metal">
          <p class="subtitle">Number of albums metal</p>
          <p class="number"><?php echo $nrowalbumsmetal; ?></p>
        </div>
        <div class="number_jazz">
          <p class="subtitle">Number of albums jazz</p>
          <p class="number"><?php echo $nrowalbumsjazz; ?></p>
        </div>
      </div>
    </main>
    <?php
    echo '
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>'
    ?>
  </body>
</html>
