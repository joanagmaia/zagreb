<?php
  $servername = "localhost";
  $username = "root";
  $password = "projetoSI";
  $dbname = "zagreb_database";
  $name = array();
  $artist = array();
  $year = array();
  $genre = array();
  $stock = array();
  $price = array();

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }


  $sql = "SELECT * FROM album";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $name[]=$row['name'];
      $artist[]=$row['artist'];
      $year[]=$row['year'];
      $genre[]=$row['genre'];
      $stock[]=$row['stock'];
      $price[]=$row['price'];
    }
  }
