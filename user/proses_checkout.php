<?php
    session_start();
    include "koneksi.php";
    $cart = @$_SESSION['cart'];
    if (count($cart) > 0) {
        
        $query_tb_lelang = mysqli_query($conn, "INSERT INTO tb_lelang (id_user, tgl_lelang )
        VALUES ('".$_SESSION['id_user']."', '".date('Y-m-d')."')");

        if ($query_tb_lelang) {
            $id = mysqli_insert_id($conn);
            foreach ($cart as $key => $value) {
                mysqli_query($conn, "INSERT INTO history_lelang (id_lelang,id_user, id_barang, penawaran_harga )
                VALUES ('".$id."', '".$value['id_barang']."','".$value['id_user']."', '".$value['penawaran_harga']."')");
            }

            unset($_SESSION['cart']);
            echo "<script>alert('Anda Berhasil membeli barang');location.href='histori_transaksi.php'</script>";
        }
        
    }
?>