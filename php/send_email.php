<?php
  $headers="";
  $msg="";
  $subject="";

  if(isset($_GET['submit_message'])) {
    session_start();
    if(!isset($_GET['subject_message']) || trim($_GET['subject_message']) == ''
    || !isset($_GET['content_message']) || trim($_GET['content_message']) == '') {
      echo "Preenche os campos";
      header('Location: '.'../views/contact_us.php?id='.$_SESSION['id']);
    }
    $to="zagrebappemail@gmail.com";
    echo $headers="From: zagrebappemail@gmail.com";
    echo $msg=$_GET['content_message'].'<p>'.$_SESSION['email'];
    mail($to, $subject, $msg, $headers) or die ("Erro no envio");
    echo $subject=$_GET['subject_message'];
    header('Location: '.'../views/contact_us.php?id='.$_SESSION['id']);
  }
 ?>
