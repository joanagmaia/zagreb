
<nav class="navbar">

  <?php if($_SESSION['type_admin']==1) {?>
    <a href="adminHomepage.php?id=<?php echo $_SESSION['id']; ?>"><p id="logo">ZAGREB-admin</p></a>
  <?php } if($_SESSION['type_admin']==0) {?>
    <a href="dash_client.php?id=<?php echo $_SESSION['id']; ?>"><p id="logo">ZAGREB-client</p></a>
  <?php } ?>

  <ul id="menu">
    <?php include 'show_message.php' ?>
    <?php if($_SESSION['type_admin']==1) {?>
      <a href="adminHomepage.php?id=<?php echo $_SESSION['id']; ?>"><p id="logo"><?php echo $_SESSION['user']?></p></a>
      <a href="search.php?id=<?php echo $_SESSION['id']; ?>"><li class="menu_titles">Search</li></a>
      <a href="albums.php?id=<?php echo $_SESSION['id']; ?>"><li class="menu_titles">Albums</li></a>
      <a href="#"><li class="menu_titles">Stats</li></a>
      <a href="message.php?id=<?php echo $_SESSION['id']; ?>"><li class="menu_titles">Message</li></a>
      <a href="authentication.php"> <li id="logout" class="menu_titles">Logout</li> </a>
    <?php } if($_SESSION['type_admin']==0) { ?>
      <a href="profile_client.php?id=<?php echo $_SESSION['id']; ?>"><p id="logo"><?php echo $_SESSION['user']?></p></a>
      <li class="menu_titles" id="messages"><p><?php echo $nrow ?></p></li>
      <a href="search.php?id=<?php echo $_SESSION['id']; ?>"><li class="menu_titles">Search</li></a>
      <a href="albums.php?id=<?php echo $_SESSION['id']; ?>"><li class="menu_titles">Albums</li></a>
      <a href="contact_us.php?id=<?php echo $_SESSION['id']; ?>"><li class="menu_titles">Contact us</li></a>
      <li class='menu_titles' id='saldo'>saldo: <?php echo $_SESSION['cliente_saldo']; ?></li>
      <a href="shopping_cart.php?id=<?php echo $_SESSION['id']; ?>"><li class='menu_titles'>cart</li></a>
      <a href="authentication.php"> <li id="logout" class="menu_titles">Logout</li> </a>
    <?php } ?>

  </ul>
</nav>
