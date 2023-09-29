<?php
    $id_barang = $_POST["id_barang"];
    $nama_barang = $_POST["nama_barang"];
    $bid = $_POST["bid"];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST["harga_awal"];
    $status = $_POST["status"];
    
    include "koneksi.php";
    if ($_FILES['foto']['tmp_name']) {
        $temp = $_FILES['foto']['tmp_name'];
        $type = $_FILES['foto']['type'];
        $size = $_FILES['foto']['size'];
        $name = rand(0,9999).$_FILES['foto']['name'];
        $folder = "../foto/";

        if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png') or empty($size)){
            $query_foto = mysqli_query($conn, "select * from tb_barang where id_barang = '".$_POST['id_barang']."'");
            $data_foto = mysqli_fetch_array($query_foto);
            unlink('../foto/'.$data_foto['foto']);
            
            move_uploaded_file($temp, $folder . $name);
            $input = mysqli_query($conn, "update tb_barang set
            nama_barang= '".$nama_barang."', bid='".$bid."',
            deskripsi='".$deskripsi."', harga_awal='".$harga."', foto='".$name."'
            where id_barang='".$id_barang."'");
            
            if ($input) {
                echo "<script>alert('Berhasil');location.href='tampil_barang.php';</script>";
            }
            else {
                echo "<script>alert('Gagal');location.href='tampil_barang.php';</script>";
            }
        }

    }else{
        $input = mysqli_query($conn, "update tb_barang set
            nama_barang= '".$nama_barang."', bid='".$bid."',
            deskripsi='".$deskripsi."', harga_awal='".$harga."'
            where id_barang='".$id_barang."'");
            
            if ($input) {
                echo "<script>alert('Berhasil');location.href='barang.php';</script>";
            }
            else {
                echo "<script>alert('Gagal');location.href='barang.php';</script>";
            }
    }
?>

