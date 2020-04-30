
<?php include("_config/config.php");?>
<?php 
   $id = $_GET['id'];
   $sql = "DELETE FROM tb_ramadhan WHERE id = $id";
   $stmt = $con->prepare($sql);
   if($stmt->execute()){
 header("location:___isiAd.php");
   }
?>
