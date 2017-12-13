<!DOCTYPE>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Message</title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/basic.css">
    <link rel="stylesheet" href="../stylesheets/colors.css">
    <link rel="stylesheet" href="../stylesheets/header.css">
    <link rel="stylesheet" href="../stylesheets/dash_client.css">
    <link rel="stylesheet" href="../stylesheets/message_admin.css">
  </head>
  <body>
    <?php include '../php/verify_login.php'; ?>
      <header>
        <?php include '../php/menu.php';?>
      </header>
    <div class="header">
      <h3>Dashboard</h3>
      <span>Check your latest albums and more that you might like.</span>
    </div>
    <main>
      <div class="recent-albuns pale-brown-bg">
        <h2>Your recent purchases</h2>
      </div>
      <div class="recommended">
        <h2>You might be interested in</h2>
      </div>
      <div class="contact-us dark-brown-bg">
        <h2>Contact us</h2>
      </div>
    </main>
  </body>
</html>
