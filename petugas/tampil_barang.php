<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data barang</title>
    <!--Css only-->
    <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.mi
n.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">

</head>
<body>
<?php
if(['role']== 'admin'){
    ?>
    
    <?php
}
    ?>
    <?php
    include "header.php";
    ?>
   <br></br>
   <div class="container">
        <div class="card">
             <div class="card-header">
                <h1><center>Data barang</center></h1>
                <form method="POST" action="tampil_barang.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari"
                    placeholder="search by id barang and harga awal" aria-label="search">
                <button class="btn btn-outline-success" type="submit">
                    Search 
                </button>
                </form>
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID barang</th>
                    <th scope="col">Nama barang</th>
                    <th scope="col">harga_awal</th>
                    <th scope="col">Username</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
        <tbody>
        <?php
            include "koneksi.php";
            if (isset($_POST['cari'])) {
                $cari = $_POST['cari'];
                $query_tb_barang = mysqli_query($conn,
                "select * from tb_barang where id_barang= '$cari'or
                nama_barang like '$cari' or harga_awal like '%$cari%'");
            }
            else{
                $query_tb_barang = mysqli_query($conn, "select * from tb_barang");
            } 
            while($tb_barang=mysqli_fetch_array($query_tb_barang)){
        ?> 
            <tr>
                <td><?=$tb_barang['id_barang']?></td> 
                <td><?=$tb_barang['nama_barang']?></td> 
                <td><?=$tb_barang['harga_awal']?></td>
                <td><?=$tb_barang['deskripsi']?></td>  
                <td><?=$tb_barang['status']?></td>
                    
                <td>
                    <a href="ubah_barang.php?id_barang=
                    <?=$tb_barang['id_barang']?>" class="btn btn-success">Edit</a>
                    <a href="hapus_barang.php?id_barang=
                    <?=$tb_barang['id_barang']?>" class="btn btn-warning"
                    onlick="return confirm ('apakah anda yakin menghapus data ini?')">
                    hapus</a>
                    <?php
                    if($_SESSION['role']== 'petugas'){
                    ?>
                      <?php 
                                if($tb_barang['status']== 'dibuka'){
                                ?>
                            <form method= "POST" action="proses_status.php" enctype="multipart/form-data">
                                <input type="hidden" name="id_barang" value="<?=$tb_barang['id_barang']?>">
                                <input type="hidden" name="status" value="ditutup">
                                
                                <input type="submit" name="simpan" class="btn btn-danger" value="tutup" >
                            
                            </form>
                        <?php
                        }else{
                        ?>
                        <br>
                        
                            
                        <?php
                        }
                        ?>

                            <?php 
                            }
                            ?>
                    <?php
                    }
                    ?>
                    
                </td>
            </tr>
        <?php
        
    ?>
    </tbody>
    </table>
    <a href="tambah_barang.php" type="button" class="btn btn-primary">tambah</a>
    </div>
</div>
    </div>
<!--javaScript bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bund
le.min.js" integrity="sha384-
gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
crossorigin="anonymous"></script>
    





</body>
</html>