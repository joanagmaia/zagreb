<!DOCTYPE>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Message</title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/basic.css">
    <link rel="stylesheet" href="../stylesheets/colors.css">
    <link rel="stylesheet" href="../stylesheets/header.css">
    <link rel="stylesheet" href="../stylesheets/message_admin.css">
  </head>
  <body>
    <?php include '../php/verify_login.php'; ?>
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
    <div class="header">
      <h3>Send a message</h3>
      <span>Send a message to all of your clients</span>
    </div>
    <main>
      <form method="POST" action="../php/send_message.php" name="send_message">
        <div class="message-wrapper">
          <label>Title</label>
          <input type="text" name="title_message" id="title">
          <label>Message</label>
          <textarea name="message_content">Insert your message here.</textarea>
          <input type="submit" value="Submit" name="message_submit" class="light-blue-bg">
        </div>
    </main>
  </body>
</html>
