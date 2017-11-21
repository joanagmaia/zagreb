<?php
  $servername = "localhost";
  $username = "root";
  $password = "projetoSI";
  $dbname = "zagreb_database";
  $sum = 0;
  $nrow = 0;


  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully". "<br>";

  $name = $_GET["name"];
  $artist = $_GET["artist"];
  $year = $_GET["year"];
  $genre = $_GET["genre"];
  $ranking = $_GET["ranking"];
  $avaiable = $_GET["avaiable"];
  $stock = $_GET["stock"];
  $price = $_GET["price"];

  $sql_album = "SELECT * FROM album";
  $result = $conn->query($sql_album);

  if(!isset($name) || trim($name) == ''
  || !isset($artist) || trim($artist) == '' || !isset($year)
  || trim($year) == '' || !isset($genre) || trim($genre) == ''
  || !isset($ranking) || trim($ranking) == '' || !isset($avaiable) || trim($avaiable) == ''
  || !isset($stock) || trim($stock) == '' || !isset($price) || trim($price) == ''){
    echo '
    <script language="javascript">
    alert("You did not fill out the required fields.");
    window.location.href="../views/authentication.html";
    </script>';
  }
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $nrow+=1;
      if(isset($_GET["add_album"])) {
        if($row["name"] == $name) {
          echo '
          <script language="javascript">
          alert("Already added this album!");
          window.location.href="../views/authentication.html";
          </script>';
        }

        else {
          $sum+=1;
        }
      }
    }

  if($sum == $row) {
    if($avaiable=='on') {
      $insert = "INSERT INTO album (id,name,artist,year,genre,ranking,avaiable,stock,price)
      VALUES ($nrow, '$name', '$artist', '$year', '$genre', '$ranking', true, '$stock', '$price')";
    }
    else {
      $insert = "INSERT INTO album (id,name,artist,year,genre,ranking,avaiable,stock,price)
      VALUES ($nrow, '$name', '$artist', '$year', '$genre', '$ranking', false, '$stock', '$price')";
    }
  }
  if ($conn->query($insert) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $insert . "<br>" . $conn->error;
  }



?>
