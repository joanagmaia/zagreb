<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "projetoSI";
$dbname = "zagreb_database";
$match=0;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



  if(isset($_GET['email']) && !empty($_GET['email']) && isset($_GET['hash']) && !empty($_GET['hash'])){
      // Verify data
      $email = $_GET['email']; // Set email variable
      $hash = $_GET['hash']; // Set hash variable

      $search = "SELECT * FROM utilizador WHERE email='$email' AND id_activation='$hash' AND active=0";

      $result = $conn->query($search);
      if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          $match++;
        }
      }
  }

  if($match > 0){
    echo "<script language='javascript'>
    alert('nioce');
    </script>";
    // We have a match, activate the account

    $activate="UPDATE utilizador SET active=1 WHERE email='$email' AND id_activation='$hash' AND active=0";
    if ($conn->query($activate) === TRUE) {
      echo "New connection successfullyyyyyyy";
    } else {
      echo "Error: " . $activate . "<br>" . $conn->error;
    }
}

$sql = "SELECT active FROM utilizador WHERE email=".$_SESSION['email'];
$result = $conn->query($sql);
  if($sql) {
    if($_SESSION['loggedin'] && $_GET['id']==$_SESSION['id']) {
    } else {
      header('Location: '.'../views/authentication.php');
    }
  }
  else {
    echo "<script language='javascript'>
    alert('valida mano');
    </script>";
  }

?>
