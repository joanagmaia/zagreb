<!DOCTYPE>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Profile</title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/basic.css">
    <link rel="stylesheet" href="../stylesheets/colors.css">
    <link rel="stylesheet" href="../stylesheets/header.css">
    <link rel="stylesheet" href="../stylesheets/profile_client.css">
    <link rel="stylesheet" href="../stylesheets/message_admin.css">
  </head>
  <body>
    <?php include '../php/verify_login.php'; ?>
    <?php include '../php/show_message.php'; ?>
    <?php echo $_SESSION['email']; ?>
    <header>
      <?php include '../php/menu.php';?>
    </header>
    <div class="header">
      <h3>Profile</h3>
      <span>Check albuns you've purchased and edit your basic info.</span>
    </div>
    <main>
      <div class="basic-info">
        <h2>Basic info</h2>
        <form method="GET" action="../php/change_basic.php" name="basic_info_form">
          <input type="text" name="name_edit"  placeholder="<?php echo $_SESSION['user']; ?>" required>
          <input type="password" name="password_edit" placeholder="<?php echo $_SESSION['password']; ?>" required>
          <input type="submit" name="save_general" placeholder="<?php echo $_SESSION['user']; ?>">
        </form>
      </div>
        <div class="new-messages">
          <h2>Latest messages</h2>
          <?php for($i=0;$i<count($title);$i++) { ?>
          <h3><?php echo $title[$i] ?></h3>
          <p><?php echo $message[$i] ?></p>
          <span>From: <?php echo $admin[$i] ?></span>
        <?php } ?>
        </div>
      
    </main>
  </body>
</html>
