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
  $available = $_GET["available"];
  $stock = $_GET["stock"];
  $price = $_GET["price"];
  $name_track = $_GET["track_name"];
  $name_duration = $_GET["track_duration"];

  $sql_album = "SELECT * FROM album";
  $result = $conn->query($sql_album);

  if(!isset($name) || trim($name) == ''
  || !isset($artist) || trim($artist) == '' || !isset($year)
  || trim($year) == '' || !isset($genre) || trim($genre) == ''
  || !isset($ranking) || trim($ranking) == '' || !isset($available) || trim($available) == ''
  || !isset($stock) || trim($stock) == '' || !isset($price) || trim($price) == ''){
    echo '
    <script language="javascript">
    alert("You did not fill out the required fields.");
    window.location.href="../views/add_album.php";
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
          window.location.href="../views/add_album.php";
          </script>';
        }
        else {
          $sum+=1;
        }
      }
    }

  if($sum == $row) {
    if($available=='on') {
      $insert = "INSERT INTO album (id,name,artist,year,genre,ranking,available,stock,price)
      VALUES ($nrow, '$name', '$artist', '$year', '$genre', '$ranking', true, '$stock', '$price')";
    }
    else {
      $insert = "INSERT INTO album (id,name,artist,year,genre,ranking,available,stock,price)
      VALUES ($nrow, '$name', '$artist', '$year', '$genre', '$ranking', false, '$stock', '$price')";
    }
  }
  echo $sum;
  echo $row;

  if ($conn->query($insert) === TRUE) {
  } else {
    echo "Error: " . $insert . "<br>" . $conn->error;
  }

  for($i=0;$i<count($name_track);$i++){
    echo $i;

    $sql = "INSERT INTO faixa (name,duration,albumID,faixaID)
    VALUES ('$name_track[$i]','$name_duration[$i]',$nrow, $i)";

    if ($conn->query($sql) === TRUE) {
      echo "New faixa created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>
