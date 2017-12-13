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
  $id_faixa = array();
  $values = array();
  $nrow = 0;
  $var;
  $sql;
  $result;

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
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
  //echo $_SESSION['filtered'];
  if($_SESSION['filtered']===1) {
    $sql = "SELECT * FROM album";
    $result = $conn->query($sql);
  }

  if($_SESSION['filtered']===2) {
    $input = $_SESSION['input'];
    $sql = "SELECT * FROM album WHERE name LIKE'%$input%'";
    $result = $conn->query($sql);
  }

  if($_SESSION['filtered']===3) {
    $input = $_SESSION['input'];
    $sql = "SELECT * FROM album WHERE genre LIKE '%$input%'";
    $result = $conn->query($sql);
  }

  /*if($_SESSION['filtered']===4) {
    $input = $_SESSION['input'];
    $sql_faixa = "SELECT * FROM faixa WHERE name='$input'";
    $result_faixa = $conn->query($sql_faixa);
    if ($result_faixa->num_rows > 0) {
      $_SESSION['album_ID']=$row['albumID'];
    }
    for($i=0;$i<count($_SESSION['album_ID']);$i++) {
      $album_id_selected = $_SESSION['album_ID'][$i];
      $sql = "SELECT * FROM album WHERE albumID='$album_id_selected'";
      $result = $conn->query($sql);
    }
  }*/

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

  if(isset($_GET["submit_search"])==true) {
    session_start();
    $_SESSION['input']=$_GET['search_bar'];
    if(isset($_GET["search_album_name"])==true){
      $_SESSION['filtered']=2;
    }

    if(isset($_GET["search_genre"])==true){
      $_SESSION['filtered']=3;
    }

    if(isset($_GET["search_track"])==true) {
      $_SESSION['filtered']=4;
    }
    header('Location: '.'../views/search.php?id='.$_SESSION['id']);
  }
    //echo count($name

  if(isset($_GET["submit_show_all"])==true) {
    session_start();
    $_SESSION['filtered']=1;
    header('Location: '.'../views/search.php?id='.$_SESSION['id']);
  }
