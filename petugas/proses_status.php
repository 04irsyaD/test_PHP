<?php
include "koneksi.php";
$qry_detail_barang=mysqli_query($conn,"select * from tb_barang where id_barang = '".$_POST['id_barang']."'");
$dt_barang=mysqli_fetch_array($qry_detail_barang);

$status=$_POST['status'];
$id_barang=$_POST['id_barang'];
                if ($status=='ditutup'){
                    mysqli_query($conn, "update tb_barang set status = '".$status."'
                    where id_barang='".$id_barang."'");
                    echo "<script>alert('ditutup');location.href='tampil_barang.php';</script>";
                }else{
                    echo "<script>alert('gagal');location.href='tampil_barang.php';</script>";
                }

?>


