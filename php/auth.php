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
    echo '
    <script language="javascript">
    alert("You did not fill out the required fields.");
    window.location.href="../views/authentication.html";
    </script>';
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
        if($row['email'] == $email && $row['password'] == $password){
          $loginVerif[0]=1;
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
    if($signupVerif[0]==$nrow) {
      echo '
      <script language="javascript">
      window.location.href="../views/adminHomepage.html";
      </script>';
    }
    if($signupVerif[1]==1) {
      echo '
      <script language="javascript">
      alert("user already exists!");
      window.location.href="../views/authentication.html";
      </script>';
    }
  } else {
    if($loginVerif[0]==1) {
      echo '
      <script language="javascript">
      alert("Youre in bro");
      window.location.href="../views/adminHomepage.html";
      </script>';
    }
    if($loginVerif[1]==1) {
      echo '
      <script language="javascript">
      alert("Wrong password");
      window.location.href="../views/authentication.html";
      </script>';
    }
    if($loginVerif[2]==$nrow) {
      echo '
      <script language="javascript">
      alert("Youre not registered in the plataform!");
      window.location.href="../views/authentication.html";
      </script>';
    }
  }

  if($sum==$nrow) {
    $insert = "INSERT INTO utilizador (id,type_admin,name,email,password,cliente_saldo)
    VALUES ($sum,0,'Sara Silva','$email','$password',0);";

    if ($conn->query($insert) === TRUE) {
      echo "New connection successfull";
    } else {
      echo "Error: " . $insert . "<br>" . $conn->error;
    }
  }

  $loginVerif[0]=0;
  $loginVerif[1]=0;
  $loginVerif[2]=0;

  $conn->close();
?>
