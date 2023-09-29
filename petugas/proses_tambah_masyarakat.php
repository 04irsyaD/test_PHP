<?php
    $nama_lengkap = $_POST["nama_lengkap"];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST["telp"];
    
    
    include "koneksi.php";
    $input = mysqli_query($conn, "INSERT INTO tb_masyarakat 
    (nama_lengkap,  username, password, telp) VALUES 
    ('".$nama_lengkap."','".$username."','".md5($password)."', '".$telp."')");

    if ($input) {
        echo "<script>alert('Berhasil');location.href='tampil_masyarakat.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');location.href='tampil_masyarakat.php';</script>";
    }
?>