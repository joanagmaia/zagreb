<?php

  $servername = "localhost";
  $username = "root";
  $password = "projetoSI";
  $dbname = "zagreb_database";


  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM album";
  $result = $conn->query($sql);

  $album_name = $_GET['album_name'];
  $artist = "";
  $genre = "";
  $year = "";

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if (isset($album_name)) {
        if($row['name'] == $album_name) {
          $artist=$row['artist'];
          $genre=$row['genre'];
          $year=$row['year'];
        }
      }
    }
}

?>
