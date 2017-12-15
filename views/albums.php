<!DOCTYPE>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/basic.css">
    <link rel="stylesheet" href="../stylesheets/header.css">
    <link rel="stylesheet" href="../stylesheets/albuns.css">
    <link rel="stylesheet" href="../stylesheets/colors.css">
  </head>
  <body>
    <?php include '../php/verify_login.php';?>
    <?php include '../php/list_albums.php'; ?>
    <?php $_SESSION['filtered']=1; ?>
    <?php echo $_SESSION['filtered']; ?>
    <header>
      <?php include '../php/menu.php';?>
    </header>
    <main>
      <div id="list_albums_page">
        <?php
        for($i=0;$i<count($name);$i++){
          ?>
          <a href="album_page.php?id=<?php echo $_SESSION['id'];?>&album_name=<?php echo $name[$i];?>">

        <div class="listed_album_page pale-brown-bg">
          <h2 class="listed_album_page_name red"><?php echo $name[$i] ?></h2>

          <ul class="listed_album_page_info">
            <li class="listed_album_page_artist"></span><h4><?php echo $artist[$i] ?></h4></li>
            <div class="more-info-wrapper">
              <li class="listed_album_page_gender"><span>Gender:</span><h3><?php echo $genre[$i] ?></h3></li>
              <li class="listed_album_page_stock"><span>Stock: </span><h3><?php echo $stock[$i] ?></h3></li>
              <li class="listed_album-page_price"><span>Price: </span><h3><?php echo $price[$i] ?></h3></li>
            </div>
          </ul>
        </div>
      </a>
      <?php } ?>
      </div>
    </main>
  </body>
</html>
