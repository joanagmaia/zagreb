<!DOCTYPE>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/basic.css">
    <link rel="stylesheet" href="../stylesheets/colors.css">
    <link rel="stylesheet" href="../stylesheets/header.css">
  </head>
  <body>
    <?php include '../php/verify_login.php';?>
    <header>
      <?php include '../php/menu.php';?>
    </header>
    <div class="header">
      <h3>Contact Us</h3>
      <span>Have any question? Want to leave any opinion?</span>
      <br>This is the right place!</span>
    </div>
    <main>
      <form method="GET" action="../php/send_email.php" name="form_contact_us">
        <input type="text" name="subject_message" placeholder="Topic">
        <input type="text" name="content_message" placeholder="Your message">
        <input type="submit" name="submit_message" placeholder="Send">
      </form>
    </main>
  </body>
</html>
