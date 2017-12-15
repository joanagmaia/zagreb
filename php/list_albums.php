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
  $id_selected = array();
  $nrow = 0;
  $new_nrow = 0;
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
    session_start();
    $remove_input = $_GET["remove-input"];
    for($i=0;$i<count($remove_input);$i++) {
      $id_database = $remove_input[$i];
          $session_name = $_SESSION['delete_name'][$id_database];
          $get_album_id = "SELECT id FROM album WHERE name='$session_name';";
          $get_album_result=$conn->query($get_album_id);
          while($row=$get_album_result->fetch_assoc()){
            $id_selected = $row['id'];
          }
          $remove_sql = "DELETE FROM album WHERE id='$id_selected'";
          if ($conn->query($remove_sql) === TRUE) {
          } else {
            echo "Error: " . $remove_sql . "<br>" . $conn->error;
          }
        }
      }





  if(isset($_GET["submit_inactive"])) {
    session_start();
    $remove_input = $_GET["remove-input"];
    for($i=0;$i<count($remove_input);$i++) {
      $id_database = $remove_input[$i];
      $inactive = "UPDATE album SET available=0 WHERE id=$id_database";
      if ($conn->query($inactive) === TRUE) {
        echo "album inactive";
      } else {
        echo "Error: " . $inactive . "<br>" . $conn->error;
      }
    }
    echo $id_database;

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
