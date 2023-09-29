<?php
    session_start();
    $id_barang = $_POST['id_barang'];
    $status = $_POST['status'];


    include "koneksi.php";
    $input = mysqli_query($conn, "UPDATE tb_barang SET status='".$status."' where id_barang='".$id_barang."'");

    if ($input) {
        echo "<script>alert('Berhasil');location.href='histori_transaksi.php';</script>";
    }
    else {
        echo "<script>alert('Gagal');location.href='tampil_pelanggan.php';</script>";
    }
?>