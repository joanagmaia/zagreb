<!DOCTYPE>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Message</title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/basic.css">
    <link rel="stylesheet" href="../stylesheets/colors.css">
    <link rel="stylesheet" href="../stylesheets/header.css">
    <link rel="stylesheet" href="../stylesheets/profile_client.css">
    <link rel="stylesheet" href="../stylesheets/message_admin.css">
  </head>
  <body>
    <?php include '../php/verify_login.php'; ?>
    <nav class="navbar">
      <a href="dash_client.php"><p id="logo">ZAGREB</p></a>
      <ul id="menu">
        <?php
          if($_SESSION['type_admin']==0)
            echo "<li class='menu_titles' id='saldo'>saldo: ".$_SESSION['cliente_saldo']."</li>"
        ?>
        <a href="profile_client.php"><li class="menu_titles" id="username"><?php echo $_SESSION['user']?></li></a>
        <li class="menu_titles">Search</li>
        <li class="menu_titles">Message</li>
        <a href="authentication.php">
          <li id="logout" class="menu_titles">Logout</li>
        </a>
      </ul>
    </nav>
    <div class="header">
      <h3>Profile</h3>
      <span>Check albuns you've purchased and edit your basic info.</span>
    </div>
    <main>
      <div class="basic-info">
        <h2>Basic info</h2>
        <form method="GET" action="" name="basic_info_form">
          <input type="text" name="name" value="">
          <input type="text" name="email" value="">
          <input type="text" name="password" value="">
        </form>
      </div>
      <div class="new-messages">
        <h2>Latest messages</h2>
        <div class="message-received">
          <span>Title</span>
        </div>
      </div>
      <div class="your-albuns pale-brown-bg">
        <h2>Your albuns</h2>
        <div class="albuns-wrapper">
          <div class="albuns"></div>
          <div class="filter">
            <h3>Order by</h3>
            <ul>
              <li>Genre</li>
              <li>Band</li>
              <li>Year</li>
            </ul>
            <form action="GET" action="" name="album-name">
              <input type="text" name="name" value="search">
              <input type="submit" class="dark-brown-bg" name="submit-album-name" value="go">
            </form>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
