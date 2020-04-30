<?php
include_once('___headerAd.php');

 session_start();
  if(isset($_SESSION['username'])){
   echo "Welcome : ".$_SESSION['username'];
   echo "<hr>";

  }else{
   header("location:index.php");
  }
 ?>

 
<div class="col-md-12">
<h3><center><u>Data Kegiatan Ramadhan</u></center></h3>
<div class="row">
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Tambah Data</button>

<!-- modal -->
<form action="___modalAd.php" method="post">
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title"><center><b>Tambah Data</b></center></h4>
      </div>
      <div class="modal-body">
        
      <div class="input-group mb-3">
          <input type="text" class="form-control" name="id" placeholder="ID" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nama_u" placeholder="Nama Ustad" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="nama_m" placeholder="Nama Masjid" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" class="form-control" name="alamat_m" placeholder="Alamat Masjid" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="date" class="form-control" name="tgl" placeholder="Tanggal Dakwah" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        


      </div>
      <div class="modal-footer">
      <input type="submit" name="modal" value="KIRIM"  class="btn btn-block btn-warning">
      
      </div>
      </form>
    </div>

  </div>
</div>
<!-- tutup modal -->

</div>
<br>
   <table class="table table-hover">
   <thead>
      <tr class="info">
         <th scope="col">No. </th>
         <th scope="col">ID</th>
         <th scope="col">Nama Ustad</th>
         <th scope="col">Nama Masjid</th>
         <th scope="col">Alamat Masjid</th>
         <th scope="col">Tanggal Dakwah</th>
          <th scope="col">Action</th>

      
      </tr>
   </thead>
   <tbody>
      
      <?php
      $no = "1";
      $stmt = $con->query('select * from tb_ramadhan');
      if($stmt->rowCount() > 0){
          while($row = $stmt->fetch(PDO::FETCH_OBJ)){
            ?>
            <tr class="table-active">
            <td><?= $no++?></td>
            <td><?= $row->id;?></td>
            <td><?= $row->nama_ustad;?></td>
            <td><?= $row->nama_masjid;?></td>
            <td><?= $row->alamat_masjid;?></td>
            <td><?= $row->tanggal_dakwah;?></td>
            
            <td>
               <a href=___viewRamAd.php?id=<?php echo $row->id;?> class="btn btn-success btn-xs" >View</a>
               <a href=___editRamAd.php?id=<?php echo $row->id;?> class="btn btn-info btn-xs">Edit</a>

               <a href=___prosesDelRamAd.php?id=<?= $row->id;?> class="btn btn-danger btn-xs">Delete</a>
               
            </td>
          </tr>
            <?php
          }

         } else {
            ?> 
            <tr>No record Found!</tr>
            <?php 

         }
         ?>

      
      </tr>
   </tbody>
   </table>
  
</div>



<?php
include_once('___footerAd.php');
 ?>
