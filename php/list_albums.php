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
  $id = array();
  $values = array();
  $nrow = 0;
  $var;

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
      $nrow+=1;
      $name[]=$row['name'];
      $artist[]=$row['artist'];
      $year[]=$row['year'];
      $genre[]=$row['genre'];
      $stock[]=$row['stock'];
      $price[]=$row['price'];
      $id[]=$row['id'];
      }
    }

    if(isset($_GET["submit_remove"])) {
      $remove_input = $_GET["remove-input"];
      for($i=0;$i<count($remove_input);$i++) {
        $id_database = $id[$i];
        $remove_sql = "DELETE FROM album WHERE id=$id_database";
        if ($conn->query($remove_sql) === TRUE) {
          echo "album deleted";
        } else {
          echo "Error: " . $remove_sql . "<br>" . $conn->error;
        }
      }
    }

    if(isset($_GET["submit_inactive"])) {
      $remove_input = $_GET["remove-input"];
      for($i=0;$i<count($remove_input);$i++) {
        $id_database = $id[$i];
        $inactive = "UPDATE album SET available=0 WHERE id=$id_database";
        if ($conn->query($inactive) === TRUE) {
          echo "album inactive";
        } else {
          echo "Error: " . $inactive . "<br>" . $conn->error;
        }
    }
  }
