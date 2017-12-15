<!DOCTYPE>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Album page</title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/basic.css">
    <link rel="stylesheet" href="../stylesheets/colors.css">
    <link rel="stylesheet" href="../stylesheets/header.css">
    <link rel="stylesheet" href="../stylesheets/album_page.css">
  </head>
  <body>
    <?php include '../php/verify_login.php'; ?>
    <?php include '../php/album_info.php'; ?>
      <header>
        <?php include '../php/menu.php';?>
      </header>
    <div class="header">
      <h3><?php echo $album_name; ?></h3>
    </div>
    <main>
      <?php $_SESSION['album_name_selected']=$_GET['album_name']; ?>
      <div class="album-wrapper">
        <div class="album-image pale-brown-bg">
          <div class="add-to-cart">
          </div>
        </div>
        <div class="album-info">
          <div class="basic-info">
            <h3>Artist</h3>
            <p id="artist"><?php echo $artist; ?></p>
            <h3>Genre</h3>
            <p id="genre"><?php echo $genre; ?></p>
            <h3>Year</h3>
            <p id="year"><?php echo $year; ?></p>
            <h3>Price</h3>
            <p id="year"><?php echo $price; ?></p>
            <h3>Stock</h3>
            <p id="year"><?php echo $stock; ?></p>
          </div>
          <div class="tracklist">
            <h3>Tracklist</h3>
            <?php
            for($i=0;$i<count($tracks_name);$i++){
            ?>
            <div class="track dark-brown-bg">
              <p><?php echo $tracks_name[$i]; ?></p>
              <p><?php echo $tracks_duration[$i]; ?> minutes</p>
            </div>
          <?php } ?>
          </div>
        </div>

      </div>
      <?php
      $valid_id = $_SESSION['id'];
      ?>
      <form action="../php/album_info.php?id=<?php echo $valid_id; ?>" method="post">
          <input type="submit" class="light-blue-bg" name="shopping_cart" value="Add cart">
      </form>
      <?php include '../php/edit_album_form.php' ?>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../script/edit_wrapper.js"></script>
  </body>
</html>
