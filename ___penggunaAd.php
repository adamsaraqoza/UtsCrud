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

<?php

?>

<div class="col-md-12">
<h3><center><u>Tabel Pengguna</u></center></h3>
<div class="row">
   
</div>
<br>
   <table class="table table-hover">
   <thead>
      <tr class="info">
         <th scope="col">No. </th>
         <th scope="col">NIK</th>
         <th scope="col">Nama Lengkap</th>
         <th scope="col">No Hp</th>
         <th scope="col">Alamat</th>
         <th scope="col">Email</th>
         <th scope="col">Username</th>
         <th scope="col">Password</th>
         <th scope="col">Level</th>
         <th scope="col">Action</th>

      
      </tr>
   </thead>
   <tbody>
      
      <?php
      $no = "1";
      $stmt = $con->query('select * from tb_pengguna');
      if($stmt->rowCount() > 0){
          while($row = $stmt->fetch(PDO::FETCH_OBJ)){
            ?>
            <tr class="table-active">
            <td><?= $no++?></td>
            <td><?= $row->nik;?></td>
            <td><?= $row->nama;?></td>
            <td><?= $row->no_hp;?></td>
            <td><?= $row->alamat;?></td>
            <td><?= $row->email;?></td>
            <td><?= $row->username;?></td>
            <td><?= $row->password;?></td>
            <td><?= $row->level;?></td>
            <td>
               <a href=view.php?id=<?php echo $row->nik;?> class="btn btn-success btn-xs" >View</a>
               <a href=edit.php?id=<?php echo $row->nik;?> class="btn btn-info btn-xs">Edit</a>
               <a href=delete.php?id=<?php echo $row->nik;?> class="btn btn-danger btn-xs">Delete</a>
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
