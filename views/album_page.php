<!DOCTYPE>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Message</title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/basic.css">
    <link rel="stylesheet" href="../stylesheets/colors.css">
    <link rel="stylesheet" href="../stylesheets/header.css">
    <link rel="stylesheet" href="../stylesheets/album_page.css">
  </head>
  <body>
    <?php include '../php/verify_login.php'; ?>
    <<nav class="navbar">
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
    <div class="header">
      <h3>Album name</h3>
    </div>
    <main>
      <div class="album-wrapper">
        <div class="album-image pale-brown-bg">
          <div class="add-to-cart">
          </div>
        </div>
        <div class="album-info">
          <div class="basic-info">
            <h3>Artist</h3>
            <p>a</p>
            <h3>Genre</h3>
            <p>a</p>
            <h3>Year</h3>
            <p>a</p>
          </div>
          <div class="tracklist">
            <h3>Tracklist</h3>
            <div class="track dark-brown-bg">
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
