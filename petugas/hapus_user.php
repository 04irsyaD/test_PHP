<?php
    if ($_GET['id_user']) {
        include "koneksi.php";
        $query_hapus = mysqli_query($conn, "DELETE FROM tb_masyarakat where id_user = '".$_GET['id_user']."'");
        if ($query_hapus) {
            // echo "berhasil";
            echo "<script> alert('Berhasil dihapus'); location.href='tampil_masyarakat.php'; </script>";
        }
        else{
            // echo "gagal";
            echo "<script> alert ('Gagal dihapus'); location.href='tampil_masyarakat.php'; </script>";
        }
    }
    else{
        echo "id_tidak ada";
    }
?>