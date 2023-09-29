<?php
    $id_user = $_POST['id_user'];
    $nama_lengkap = $_POST["nama_lengkap"];
    $username = $_POST['username'];
    $telp = $_POST['telp'];
    
    
    
    include "koneksi.php";
    $input = mysqli_query($conn, "UPDATE tb_masyarakat SET nama_lengkap='".$nama_lengkap."', 
    telp='".$telp."',username='".$username."', password='".md5($password)."' 
    where id_user = '".$id_user."'");

    if ($input) {
        echo "<script>alert('Berhasil');location.href='tampil_masyarakat.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');location.href='tampil_masyarakat.php';</script>";
    }
?>