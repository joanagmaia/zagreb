<?php

  $servername = "localhost";
  $username = "root";
  $password = "projetoSI";
  $dbname = "zagreb_database";
  $sum = 0;
  $nrow =0;
  $loginVerif=array(0,0,0);
  $signupVerif=array(0,0);
  $register_boolean=false;
  $name="";
  $to="";
  $headers="From: ssaracome@gmail.com";
  $msg="";
  $hash="";

  session_start();
  $_SESSION['loggedin']=false;

  function createId() {

      $chars = "abcdefghijkmnopqrstuvwxyz023456789";
      srand((double)microtime()*1000000);
      $i = 0;
      $pass = '' ;

      while ($i <= 7) {
          $num = rand() % 33;
          $tmp = substr($chars, $num, 1);
          $pass = $pass . $tmp;
          $i++;
      }

      return $pass;

  }

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully". "<br>";

  $email = $_GET["email"];
  $password = $_GET["password"];

  //Check if fields are filled
  if(!isset($email) || trim($email) == '' || !isset($password) || trim($password) == '') {
    header('Location: '.'../views/authentication.php');
  }

  //Save username at localStorage
  echo "<script language='javascript'>
  localStorage.setItem('username', '".$email."');
  </script>";

  $sql = "SELECT * FROM utilizador";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $nrow+=1;
      //login
      //check if email is in database
      if (isset($_GET["submit_login"])) {
        if($row['email'] == $email && $row['password'] == $password && $row['active']==true){
          $loginVerif[0]=1;
        }
        if($row['email'] == $email && $row['password'] == $password && $row['active']==false){
          //alertar confirmar email
          echo "<script language='javascript'>
          alert('validate your account');
          </script>";
        }

        if($row['email'] == $email && $row['password'] != $password){
          $loginVerif[1]=1;
        }

        if($row['email'] != $email){
          $loginVerif[2]+=1;
        }
      }

      //sign up
      if (isset($_GET["submit_register"])) {
        $register_boolean=true;
        if($row['email'] == $email){
          $signupVerif[1]=1;
        }
        if($row['email'] != $email){

          //É AQUI O CÓDIGO PARA MANDAR O EMAIL. CRIAS UM ID E GUARDAS NA SESSION, ASSIM COMO O URL
          $signupVerif[0]+=1;
          $sum += 1;

        }
      }
    }
  }
  else {
    //empty table
    echo "0 results";
  }

  if($register_boolean) {
    $name = $_GET["name"];
    if($signupVerif[0]==$nrow) {
      $_SESSION['email']=$email;
      $hash = md5( rand(0,1000) );
      $to="ssaracome@gmail.com";
      $msg = 'Click on this link to verify your account

      Username: '.$name.'
      Password: '.$password.'

      http://localhost/zagreb/views/adminHomepage.php?email='.$email.'&hash='.$hash.'
      ';
      mail($to, "teste", $msg, $headers) or die ("mail error");
    }
    if($signupVerif[1]==1) {
      header('Location: '.'../views/authentication.php');
    }
  } else {
    if($loginVerif[0]==1) {

      $_SESSION['loggedin']=true;
      $_SESSION['email']=$email;
      $idd=createId();

      $_SESSION['id']=$idd;
      header('Location: '.'../views/adminHomepage.php?id='.$idd);

    }
    if($loginVerif[1]==1) {
      header('Location: '.'../views/authentication.php');
    }
    if($loginVerif[2]==$nrow) {
      header('Location: '.'../views/authentication.php');
    }
  }

  if($sum==$nrow) {
    $insert = "INSERT INTO utilizador (id,type_admin,name,email,password,cliente_saldo,active,id_activation)
    VALUES ($sum,0,'$name','$email','$password',0,0,'$hash');";

    if ($conn->query($insert) === TRUE) {
      echo "New connection successfull2";
    } else {
      echo "Error: " . $insert . "<br>" . $conn->error;
    }
  }

  $loginVerif[0]=0;
  $loginVerif[1]=0;
  $loginVerif[2]=0;

  $conn->close();
?>
