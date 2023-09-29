<?php
    $nama_barang = $_POST["nama_barang"];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga_awal'];
    $harga_akhir=0;
    
    $temp = $_FILES['foto']['tmp_name'];
    $type = $_FILES['foto']['type'];
    $size = $_FILES['foto']['size'];
    $name = rand(0,9999).$_FILES['foto']['name'];
    $folder = "../foto/";
    
    include "koneksi.php";

    if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png')){
        move_uploaded_file($temp, $folder . $name);
        $lama_buka = 7;
        $tgl_harus_tutup = date('Y-m-d', mktime(0,0,0,date('m'),date('d')+$lama_buka,date('Y')));

        $input = mysqli_query($conn, "INSERT INTO tb_barang 
        (nama_barang, harga_awal, harga_akhir,deskripsi, tanggal_awal, tanggal_ahkir, foto) VALUES 
        ('".$nama_barang."', '".$harga."','".$harga_akhir."','".$deskripsi."', '".date('Y-m-d')."', '".$tgl_harus_tutup."','".$name."')");

        if ($input) {
            echo "<script>alert('Berhasil');location.href='tampil_barang.php';</script>";
        }
        else {
            echo "<script>alert('Gagal');location.href='tampil_barang.php';</script>";
        }
    }
?>