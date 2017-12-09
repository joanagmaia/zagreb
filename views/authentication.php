<!DOCTYPE>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Auth</title>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../stylesheets/authentication.css">
    <link rel="stylesheet" href="../stylesheets/colors.css">
    <link rel="stylesheet" href="../stylesheets/basic.css">
  </head>
  <body>
    <div class="auth-wrap">
      <div class="form-auth white-bg">
        <form method ="GET" action="../php/auth.php" name="auth_form">
          <input type="text" name="name" placeholder="name" class="sign-up-input">
          <br>
          <input type="email" name="email" placeholder="email">
          <br>
          <input type="password" name="password" placeholder="password">
          <br>
          <input class="dark-brown-bg login-input" type="submit" name="submit_login" value="sign in">
          <input class="dark-brown-bg sign-up-input" type="submit" name="submit_register" value="register">
        </form>
    </div>
    <div class="vinyl-button-wrapper">
      <div class="vinyl-wrapper-login">
        <div class="vinyl-login black-bg"></div>
        <img src="../images/vinyl_cover.png"/>
        <div class="vinyl-text-login"><h1>Login</h1></div>
      </div>
      <div class="vinyl-wrapper-register">
        <div class="vinyl-register black-bg"></div>
        <img src="../images/vinyl_cover.png"/>
        <div class="vinyl-text-register"><h1>Register</h1></div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../script/auth_script.js"></script>
  </body>
</html>
