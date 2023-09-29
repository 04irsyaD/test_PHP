<?php
    session_start();
    include "koneksi.php";
    $penawaran=$_POST['penawaran'];
    if ($_POST) {
        $query_beli = mysqli_query($conn, "INSERT INTO tb_lelang (id_user, id_barang, id_petugas, tgl_lelang)
        VALUES ('".$_SESSION['id_user']."','".$_GET['id_barang']."', '2','".date('Y-m-d')."')");

        if ($query_beli) {
            $id = mysqli_insert_id($conn);
                mysqli_query($conn, "INSERT INTO history_lelang (id_lelang, id_barang, id_user, penawaran_harga)
                VALUES ('".$id."', '".$_GET['id_barang']."','".$_SESSION['id_user']."','".$penawaran."')");
            echo "<script>alert('Anda Berhasil ');location.href='histori_transaksi.php'</script>";
        }
        else{
            echo "<script>alert('Gagal menawar ');location.href='deskripsi_barang.php'</script>";
        }
  }
?>