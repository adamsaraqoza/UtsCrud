<?php include_once('___headerAd.php');?>

<?php 
$id = $_GET['id'];
$stmt = $con->query("SELECT * FROM tb_ramadhan WHERE id = $id");
if($stmt->rowCount() > 0){
   while($row = $stmt->fetch(PDO::FETCH_OBJ)){
      $id = $row->id;
      $nama_ustad = $row->nama_ustad;
      $nama_masjid = $row->nama_masjid;
      $alamat_masjid = $row->alamat_masjid;
      $tanggal_dakwah= $row->tanggal_dakwah;
   }
}
?>
<div class="container">
<h3><center><u>Data Kegiatan Ramadhan</u></center></h3>
   
   <div class="row">
      <a href="___isiAd.php" class="btn btn-warning">Kembali</a>  <hr>
  
      <div class="col-lg-12">
         <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active"> </a>
            <p class="list-group-item list-group-item-action">ID Ramadhan :  <?php echo $id; ?></p>
            <p class="list-group-item list-group-item-action">Nama Ustad :  <?php echo $nama_ustad; ?></p>
            <p class="list-group-item list-group-item-action"> Nama Masjid :  <?php echo $nama_masjid; ?></p>
            <p class="list-group-item list-group-item-action">Alamat Masjid :  <?php echo $alamat_masjid; ?></p>
            <p class="list-group-item list-group-item-action">Tanggal Dakwah :  <?php echo $tanggal_dakwah; ?></p>

         </div>
      </div>
   </div>
</div>


<?php
include_once('___footerAd.php');
 ?>
