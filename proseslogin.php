<?php
session_start();
include_once('_config/config.php');

if(isset($_POST["login"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $admin ="admin";
    $pengguna = "pengguna";
    $pegawai = "pegawai";
    if(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["level"])){
        echo "<script>alert('Username dan Password tidak boleh Kosong!!!');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }elseif(($_POST["username"]) && ($_POST["password"]) && ($_POST['level'] == $admin)){
        $query = "SELECT * FROM tb_pengguna WHERE username =:username AND password =:password AND level=:level";
        $statement = $con->prepare($query);
        $statement->execute(
            array(
                'username' => $_POST["username"],
                'password' => $_POST["password"],
                'level' =>$_POST['level']
            )
            );
        $count = $statement->rowCount();
        if($count > 0 ){
            $_SESSION["username"] = $_POST["username"];
            echo "<script>window.location.href='___penggunaAd.php'</script>";

        }else{
            echo "<script>alert('Username dan Password Salah!!!');</script>";
             echo "<script>window.location.href='index.php'</script>";
        }
    }elseif(($_POST["username"]) && ($_POST["password"]) && ($_POST['level'] == $pengguna)){
        $query = "SELECT * FROM tb_pengguna WHERE username =:username AND password =:password AND level=:level";
        $statement = $con->prepare($query);
        $statement->execute(
            array(
                'username' => $_POST["username"],
                'password' => $_POST["password"],
                'level' =>$_POST['level']
            )
            );
        $count = $statement->rowCount();
        if($count > 0 ){
            $_SESSION["username"] = $_POST["username"];
            echo "<script>window.location.href='_____pengguna.php'</script>";

        }else{
            echo "<script>alert('Username dan Password Salah!!!');</script>";
             echo "<script>window.location.href='index.php'</script>";
        }
    }elseif(($_POST["username"]) && ($_POST["password"]) && ($_POST['level'] == $pegawai)){
        $query = "SELECT * FROM tb_pengguna WHERE username =:username AND password =:password AND level=:level";
        $statement = $con->prepare($query);
        $statement->execute(
            array(
                'username' => $_POST["username"],
                'password' => $_POST["password"],
                'level' =>$_POST['level']
            )
            );
        $count = $statement->rowCount();
        if($count > 0 ){
            $_SESSION["username"] = $_POST["username"];
            echo "<script>window.location.href='___pegawai.php'</script>";

        }else{
            echo "<script>alert('Username dan Password Salah!!!');</script>";
             echo "<script>window.location.href='index.php'</script>";
        }
      }


}
?>
