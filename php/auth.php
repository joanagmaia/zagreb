<?php

  $servername = "localhost";
  $username = "root";
  $password = "projetoSI";
  $dbname = "zagreb_database";
  $sum = 0;
  $nrow =0;


  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully". "<br>";

  $email = $_GET["email"];
  $password = $_GET["password"];

  if(!isset($email) || trim($email) == '' || !isset($password) || trim($password) == '') {
    echo '
    <script language="javascript">
    alert("You did not fill out the required fields.");
    window.location.href="../views/authentication.html";
    </script>';
  }


  $sql = "SELECT * FROM utilizador";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
      $nrow+=1;
      echo $nrow;
      //check if email is in database
      if (isset($_GET["submit_login"])) {
        // btnDelete

      if($row['email'] == $email && $row['password'] == $password){
      echo '
      <script language="javascript">
      alert("Youre in bro");
      window.location.href="../views/authentication.html";
      </script>';
      }

      if($row['email'] == $email && $row['password'] != $password){
      echo '
      <script language="javascript">
      alert("Wrong password");
      window.location.href="../views/authentication.html";
      </script>';
      }

      if($row['email'] != $email){
      echo '
      <script language="javascript">
      alert("Youre not registered in the plataform!");
      window.location.href="../views/authentication.html";
      </script>';
      }

  } if (isset($_GET["submit_register"])) {
      if($row['email'] == $email){
        echo '
        <script language="javascript">
        alert("user already exists!");
        window.location.href="../views/authentication.html";
        </script>';
      }
      if($row


      ['email'] != $email){
        $sum += 1;
echo $sum;
  }
}
}
}
else {
    echo "0 results";
}

if($sum==$nrow) {
  $insert = "INSERT INTO utilizador (id,type_admin,name,email,password,cliente_saldo)

  VALUES ($sum,0,'Sara Silva','$email','$password',0);";
  if ($conn->query($insert) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $insert . "<br>" . $conn->error;
  }
}




echo "email: " . $email . '<br>';
echo "password: " . $password;

$conn->close();
?>
