<?php

require_once('_config/config.php');

if(isset($_POST['edit'])){
	$iduser = $_POST['id'];
  $screenname = $_POST['screenname'];
  $sourcetweet = $_POST['sourcetweet'];
  $ar = $_POST['ar'];
  $usiaakun = $_POST['usiaakun'];
  $rataantweet = $_POST['rataantweet'];
  $hashtag = $_POST['hashtag'];
  $mention = $_POST['mention'];
  $url = $_POST['url'];
  $label = $_POST['label'];
}else if (isset($_POST['del'])) {
  # code...
  $id = $_POST['id'];
  $hapus = $con->prepare("DELETE FROM `tb_pengguna` where nik = '$id'");
	$hapus->execute();
  if(!$hapus ){
    // echo "<script>alert('Gagal di Hapus!');history.go(-1);</script>";
  } else{
    echo "<script>alert('Data berhasil di hapus!');history.go(-1);</script>";
  }

}
 ?>
