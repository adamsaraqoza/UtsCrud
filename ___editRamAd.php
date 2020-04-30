<?php include("___headerAd.php") ?>

<?php 
$id = $_GET['id'];
$stmt = $con->query("SELECT * FROM tb_ramadhan WHERE id = $id");
if($stmt->rowCount() > 0){
   while($row = $stmt->fetch(PDO::FETCH_OBJ)){
      $id = $row->id;
      $nama_ustad= $row->nama_ustad;
      $nama_masjid = $row->nama_masjid;
      $alamat_masjid = $row->alamat_masjid;
      $tanggal_dakwah= $row->tanggal_dakwah;
   }
}
?>

<div class="container">
<h3>Edit Data Ramadhan</h3>
  
   <div class="row">
   <a href="___isiAd.php" class="btn btn-warning btn-md"> Kembali</a>
   </div>
   <hr>
   <div class="row">
      <form class="form-horizontal" action="___updateRamAd.php" method="POST">
         <fieldset>
            <input type="hidden" name="id" value=<?= $id;?>>
            <div class="form-group">
               <label class="col-sm-12">Nama Ustad</label>
               <div class="col-sm-20">
                  <input type="text" name="nama_ustad" class="form-control" value=<?= $nama_ustad;?>>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-12">Nama Masjid</label>
               <div class="col-sm-20">
                  <input type="text" name="nama_masjid" class="form-control" value=<?= $nama_masjid ?>>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-12"> Alamat Masjid</label>
               <div class="col-sm-20">
                  <input type="text" name="alamat_masjid" class="form-control" value=<?= $alamat_masjid ?>>
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-12"> Tanggal Dakwah </label>
               <div class="col-sm-20">
                  <input type="date" id="tanggal_dakwah" value=<?= $tanggal_dakwah ?> name="tanggal_dakwah" class="form-control">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-4"></label>
               <div class="col-sm-20">
               <?php if(isset($_POST['edit'])): ?>
                  <div class="alert alert-dissmissible alert-warning">
                     <p><?php echo $error;?></p>
                  </div>
               <?php endif;?>
               </div>
            </div>
            <div class="form-group">
         
               <div class="col-sm-20">
                  <button type="submit" class="btn btn-success" name="edit">Kirim Edit</button>
               </div>
            </div>
         </fieldset>
      </form>

   </div>
</div>

<?php include("___footerAd.php") ?>