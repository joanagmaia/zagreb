<!DOCTYPE>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/basic.css">
    <link rel="stylesheet" href="../stylesheets/header.css">
    <link rel="stylesheet" href="../stylesheets/list_albums.css">
  </head>
  <body>
    <?php include '../php/verify_login.php';?>
    <?php include '../php/list_albums.php';?>
    <header>
      <nav class="navbar">
        <p id="logo">ZAGREB</p>
        <ul id="menu">
          <?php
            if($_SESSION['type_admin']==0)
              echo "<li class='menu_titles' id='saldo'>saldo: ".$_SESSION['cliente_saldo']."</li>";
              $valid_id = $_SESSION['id'];
          ?>
          <a href="adminHomepage.php?id=<?php echo $valid_id; ?>"><p id="logo"><?php echo $_SESSION['user']?></p></a>
          <li class="menu_titles">Search</li>
          <li class="menu_titles">Message</li>
          <a href="authentication.php">
            <li id="logout" class="menu_titles">Logout</li>
          </a>
        </ul>
      </nav>
    </header>
    <main>
      <div class="search_bar">
        <input type="search" name="search bar" placeholder="search the album name">
      </div>
      <?php
      for($i=0;$i<count($name);$i++){
      ?>
      <a href="#" id="fds">
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
        <input id="remove-album" type="submit" name="submit_remove" value="remove">
        <input id="inactive-button" type="submit" name="submit_inactive" value="inactive">
      </form>
      </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../script/info_url.js"></script>
    <script src="../script/remove_album.js"></script>
  </body>
</html>
