<?php include("_config/config.php")?>


<?php 
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama_ustad= $_POST['nama_ustad'];
    $nama_masjid = $_POST['nama_masjid'];
    $alamat_masjid = $_POST['alamat_masjid'];
    $tanggal_dakwah= $_POST['tanggal_dakwah'];
     
  
      
      
      /*$data = array(
         'no' => $no, 
         'provinsi' => $provinsi,
         'jumlahkasus' => $jumlahkasus,
         'meninggal' => $meninggal,
         'published_on'=> $published_date
         
      );

      echo '<pre>';
            print_r($data);
      echo '</pre>';
      exit();*/

      if($nama_ustad != "" && $nama_masjid != "" && $alamat_masjid !="" && $tanggal_dakwah != ""){
        $sql = "UPDATE tb_ramadhan SET nama_ustad= '$nama_ustad', nama_masjid='$nama_masjid', alamat_masjid='$alamat_masjid', tanggal_dakwah='$tanggal_dakwah' WHERE id =$id";
     
       
         $stmt = $con->prepare($sql);
         if($stmt ->execute()){
               header("location:___isiAd.php");
         } else {
               echo "Maaf, gagal mengupdate data";
         }
      } else {
            $error  = "Mohon isi semua data!";
      }
   
   }
   ?>
