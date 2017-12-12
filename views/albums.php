<!DOCTYPE>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/basic.css">
    <link rel="stylesheet" href="../stylesheets/header.css">
  </head>
  <body>
    <? php include '../php/list_albums.php'; ?>
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
      <div id="list_albums_page">
        <div class="listed_album_page">
          <p class="listed_album_page_name">Album name</p>
          <ul class="listed_album_page_info">
            <li class="listed_album_page_gender"><span>Gender: </span>Pop</li>
            <li class="listed_album_page_artist"><span>Artist: </span>The Beatles</li>
            <li class="listed_album_page_stock"><span>Stock: </span>3</li>
            <li class="listed_album-page_price"><span>Price: </span>19,99€</li>
          </ul>
        </div>
      </div>
    </main>
  </body>
</html>
