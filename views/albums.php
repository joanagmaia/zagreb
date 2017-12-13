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
    <?php include '../php/verify_login.php';?>
    <?php include '../php/list_albums.php'; ?>
    <header>
      <?php include '../php/menu.php';?>
    </header>
    <main>
      <div id="list_albums_page">
        <?php
        for($i=0;$i<count($name);$i++){
          ?>
        <div class="listed_album_page">
          <p class="listed_album_page_name">Album name: <?php echo $name[$i] ?></p>
          <ul class="listed_album_page_info">
            <li class="listed_album_page_gender"><span>Gender:</span><?php echo $genre[$i] ?> </li>
            <li class="listed_album_page_artist"><span>Artist: </span><?php echo $artist[$i] ?> </li>
            <li class="listed_album_page_stock"><span>Stock: </span><?php echo $stock[$i] ?> </li>
            <li class="listed_album-page_price"><span>Price: </span><?php echo $price[$i] ?> </li>
          </ul>
        </div>
      <?php } ?>
      </div>
    </main>
  </body>
</html>
