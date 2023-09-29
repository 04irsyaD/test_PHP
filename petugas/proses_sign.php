<?php
if($_POST){
    $nama=$_POST['nama_petugas'];
    $username =$_POST['username'];
    $password = $_POST['password'];
    // $telepon= $_POST['telepon'];
    $role=$_POST['role'];

    include "koneksi.php";
  
    $insert=mysqli_query($conn,"INSERT INTO tb_petugas (nama_petugas, username, password,role) VALUES ('".$nama."','".$username."','".md5($password)."','".$role."')") or die(mysqli_error($conn));
    if($insert){
        echo "<script>alert('Sukses Menambahkan Akun');location.href='login.php';</script>";
    } else {
        echo "<script>alert('Gagal Menambahkan Akun');location.href='sign.php';</script>";
    }
}
?>