<!DOCTYPE>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/basic.css">
    <link rel="stylesheet" href="../stylesheets/header.css">
    <link rel="stylesheet" href="../stylesheets/colors.css">
    <link rel="stylesheet" href="../stylesheets/list_albums.css">
  </head>
  <body>
    <?php include '../php/verify_login.php';?>
    <?php include '../php/list_albums.php';?>
    <header>
     <?php include '../php/menu.php';?>
    </header>
    <main>
      <div class="search_bar">
        <form method="GET" id="filter-form" action="../php/list_albums.php" name="form-search">
          <input type="search" name="search_bar" placeholder="search the album name">
          <div class="search-type">
            <div class="search-type-inputs">
              <div class="filter">
                <label>Album name</label>
                <input type="checkbox" name="search_album_name" value="Album name">
              </div>
              <div class="filter">
                <label>Genre</label>
                <input type="checkbox" name="search_genre" value="Genre">
              </div>
            </div>
            <input id="submit-search" type="submit" name="submit_search" value="Go">
        </div>
      </form>
      </div>
      <form method="GET" id="show-all" action="../php/list_albums.php" name="form-search-all">
        <input type="submit" name="submit_show_all" value="Show all">
      </form>
      <?php
      for($i=0;$i<count($name);$i++){
      ?>
      <a href="album_page.php?id=<?php echo $_SESSION['id'];?>&album_name=<?php echo $name[$i];?>">
      <div id="list_albums">
        <div class="listed_album">
          <div>
            <p class="listed_album_name">
            <?php echo $name[$i] ?></p>
            <ul class="listed_album_info">
              <li class="listed_album_gender"><span>Genre: </span><?php echo $genre[$i] ?></li>
              <li class="listed_album_artist"><span>Artist: </span><?php echo $artist[$i] ?></li>
              <li class="listed_album_stock"><span>Stock: </span><?php echo $stock[$i] ?></li>
              <li class="listed_album_price"><span>Price: </span><?php echo $price[$i] ?></li>
            </ul>
          </div>
          <input class="operation_checkbox" type="checkbox">
        </div>
      </a>
      <?php } ?>
      <form method="GET" action="../php/list_albums.php" name="form_remove" id="remove-form">
        <input id="remove-album" class="red-bg" type="submit" name="submit_remove" value="remove">
        <input id="inactive-button" class="light-blue-bg" type="submit" name="submit_inactive" value="inactive">
      </form>
      </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../script/remove_album.js"></script>
  </body>
  </html>
