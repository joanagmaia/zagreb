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
    <?php include '../php/list_albums.php';?>
    <header>
      <nav class="navbar">
        <p id="logo">ZAGREB</p>
        <ul id="menu">
          <li class="menu_titles" id="username">username</li>
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
      <div id="list_albums">
        <?php
        for($i=0;$i<count($name);$i++){
        ?>
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
          <input type="checkbox" name="operation_checkbox" class="operation_checkbox">
        </div>
      <?php } ?>
      </div>
      <button class="remove-album">Remove Album</button>
    </main>
  </body>
</html>
