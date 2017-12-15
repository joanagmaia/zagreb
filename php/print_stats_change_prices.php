<?php
  $servername = "localhost";
  $username = "root";
  $password = "projetoSI";
  $dbname = "zagreb_database";
  $id = array();
  $data = array();
  $albumID = array();
  $album_name = array();
  $id_stats = array();
  $id_album = array();
  $stock = array();
  $total_buyed = array();
  $nrow = 0;
  $buyed_albums = 0;
  $var;
  $sql;
  $result;
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM stats";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $nrow+=1;
      $id[]=$row['id'];
      $data[]=$row['data'];
      $price[]=$row['new_price'];
      $id_album[]=$row['album_ID'];
    }
  }

  for($i=0;$i<count($id);$i++) {
    $get_name = "SELECT * from album WHERE id=$id_album[$i]";
    $get_n_query = $conn->query($get_name);
    while($row=$get_n_query->fetch_assoc()) {
      $album_name[]=count($row['name']);
    }
  }

  $n_total = 0;
  $sql3 = "SELECT id FROM carrinho WHERE terminado=1";
  $result_album3 = $conn->query($sql3);

  while($row = $result_album3->fetch_assoc()) {
    $n_total+=1;
  }
