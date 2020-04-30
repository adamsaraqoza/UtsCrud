<?php
// include database connection file
require_once'../_config/config.php';
if(isset($_POST['daftar']))
{
// Posted Values
$nik=$_POST['nik'];
$nama=$_POST['namaa'];
$hp=$_POST['hp'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$username =$_POST['username'];
$password =$_POST['password'];
$level=$_POST['level'];
// Query for Insertion
$sql="INSERT INTO tb_pengguna(nik,nama,no_hp,alamat,email,username,password,level) VALUES(:niks,:namas,:hps,:alamats,:emails,:usernames,:passwords,:lvl)";
//Prepare Query for Execution
$query = $con->prepare($sql);
// Bind the parameters
$query->bindParam(':niks',$nik,PDO::PARAM_STR);
$query->bindParam(':namas',$nama,PDO::PARAM_STR);
$query->bindParam(':hps',$hp,PDO::PARAM_STR);
$query->bindParam(':alamats',$alamat,PDO::PARAM_STR);
$query->bindParam(':emails',$email,PDO::PARAM_STR);
$query->bindParam(':usernames',$username,PDO::PARAM_STR);
$query->bindParam(':passwords',$password,PDO::PARAM_STR);
$query->bindParam(':lvl',$level,PDO::PARAM_STR);

// Query Execution
$query->execute();
// Check that the insertion really worked. If the last inserted id is greater than zero, the insertion worked.
$lastInsertId = $con->lastInsertId();
if($lastInsertId)
{
// Message for successfull insertion
echo "<script>alert('Pendaftaran Gagal, Silahkan Daftar Kembali!!!');</script>";
echo "<script>window.location.href='daftar.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Proses Pendaftaran Berhasil, Silahkan Login');</script>";
echo "<script>window.location.href='../index.php'</script>";
}
}
?>
