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
    <nav class="navbar">
      <a href="dash_client.html"><p id="logo">ZAGREB</p></a>
      <ul id="menu">
        <a href="profile_client.html"><li class="menu_titles" id="username">username</li></a>
        <li class="menu_titles">Search</li>
        <li class="menu_titles">Message</li>
        <a href="authentication.html">
          <li id="logout" class="menu_titles">Logout</li>
        </a>
      </ul>
    </nav>
    <div class="header">
      <h3>Shopping cart</h3>
    </div>
    <main>
      <div class="item-wrapper pale-brown-bg">
        <h3>Album name</h3>
        <div class="album-general-info">
          <div class="image-info">
            <span>Artist name</span>
            <span>Year</span>
            <span>genre</span>
          </div>
          <div class="track">
          </div>
        </div>
        <div class="payment-album">
          <div class="quantity">
            <h3>Quantity</h3>
            <span>4</span>
            <span>-</span>
            <span>+</span>
          </div>
          <div class="total">
            <h3>Total</h3>
            <span>30</span>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
