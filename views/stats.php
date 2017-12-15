<!DOCTYPE>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Stats</title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/basic.css">
    <link rel="stylesheet" href="../stylesheets/header.css">
    <link rel="stylesheet" href="../stylesheets/colors.css">
  </head>
  <body>
    <?php include '../php/verify_login.php';?>
    <?php include '../php/print_stats_change_prices.php'; ?>

    <header>
      <?php include '../php/menu.php';?>
    </header>
    <div class="header">
      <h3>Changes of prices</h3>
    </div>
    <main>
      <div id="list_albums_page">
        <?php
        for($i=0;$i<count($id);$i++){
          ?>
          <div class="listed_album_page pale-brown-bg">
          <ul class="listed_album_page_info">
            <span>Album name</span>
            <h2 class="listed_album_page_name red"><?php echo $album_name[$i] ?></h2>
            <div class="more-info-wrapper">
              <li class="listed_album-page_price"><span>Changed Price: </span><h3><?php echo $price[$i] ?></h3></li>
              <li class="listed_album_page_stock"><span>Data: </span><h3><?php echo $data[$i] ?></h3></li>
            </div>
          </ul>
        </div>
      <?php } ?>
      <div class="final-cart">
        <span>Comprados</span>
        <span> Total: <?php echo $n_total ?> </span>
        <h2>por album</h2>

      </div>
    </main>
  </body>
</html>
