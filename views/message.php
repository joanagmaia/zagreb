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
    <?php include '../php/send_message.php'; ?>
      <header>
        <?php include '../php/menu.php';?>
      </header>
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
          <textarea name="message_content" placeholder="Insert your message here."></textarea>
          <input type="submit" value="Submit" name="message_submit" class="light-blue-bg">
        </div>
    </main>
  </body>
</html>
