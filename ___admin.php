<?php
include_once('___headerAd.php');

 session_start();
  if(isset($_SESSION['username'])){
   echo "".$_SESSION['username'];
   echo "<hr>";

  }else{
   header("location:index.php");
  }
 ?>

<h1>admin</h1>




<?php
include_once('___footerAd.php');
 ?>
