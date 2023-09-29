<?php
    if ($_GET['id_barang']) {
        include "koneksi.php";
        $query_hapus = mysqli_query($conn, "DELETE FROM tb_barang where id_barang = '".$_GET['id_barang']."'");
        if ($query_hapus) {
            // echo "berhasil";
            echo "<script> alert('Berhasil dihapus'); location.href='tampil_barang.php'; </script>";
        }
        else{
            // echo "gagal";
            echo "<script> alert ('Gagal dihapus'); location.href='tampil_barang.php'; </script>";
        }
    }
    else{
        echo "id_tidak ada";
    }
?>