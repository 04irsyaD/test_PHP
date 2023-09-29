<?php
        include "header.php";
        include "koneksi.php";
        $qry_barang = mysqli_query($conn, "select * from tb_barang where id_barang='".$_GET['id_barang']."'");
        $data_barang = mysqli_fetch_array($qry_barang);

?>

<h2 align="center">ubah Barang</h2>
<div class="container">
    <div class="card">
        <h1 class="card-header">
            <div class="card-body">
                <form method= "POST" action="proses_status.php" enctype="multipart/form-data">
                <input type="hidden" name="id_barang" value="<?=$data_barang['id_barang']?>">
                    <div class="mb-3">
                        <label for="status"><h5>Pilih Status:</h5></label>
                        <select name="status" class="dropdown" style="font-size: 15px;" id="status">
                            <option value="dibuka">dibuka</option>
                            <option value="ditutup">ditutup</option>
                        </select>
                    </div>
                    <input type="submit" name="simpan" class="btn btn-primary" value="SIMPAN">
                </form>
            </div>
        </h1>
    </div>
</div>
<!-- <?php
include "footer_admin.php";
?> -->