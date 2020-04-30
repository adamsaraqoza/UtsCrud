<?php
// include database connection file
require_once'_config/config.php';
if(isset($_POST['modal']))
{
// Posted Values
$id=$_POST['id'];
$nama_u=$_POST['nama_u'];
$nama_m=$_POST['nama_m'];
$alamat_m=$_POST['alamat_m'];
$tgl=$_POST['tgl'];

// Query for Insertion
$sql="INSERT INTO tb_ramadhan(id,nama_ustad,nama_masjid,alamat_masjid,tanggal_dakwah) VALUES(:id,:nama_u,:nama_m,:alamat_m,:tgl)";
//Prepare Query for Execution
$query = $con->prepare($sql);
// Bind the parameters
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->bindParam(':nama_u',$nama_u,PDO::PARAM_STR);
$query->bindParam(':nama_m',$nama_m,PDO::PARAM_STR);
$query->bindParam(':alamat_m',$alamat_m,PDO::PARAM_STR);
$query->bindParam(':tgl',$tgl,PDO::PARAM_STR);


// Query Execution
$query->execute();
// Check that the insertion really worked. If the last inserted id is greater than zero, the insertion worked.
$lastInsertId = $con->lastInsertId();
if($lastInsertId)
{
// Message for successfull insertion
echo "<script>alert('Input Gagal, Silahkan coba Kembali!!!');</script>";
echo "<script>window.location.href='___isiAd.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Input Berhasil !!!!');</script>";
echo "<script>window.location.href='___isiAd.php'</script>";
}
}
?>
