<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data masyarakat</title>
    <!--Css only-->
    <link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.mi
n.css" rel="stylesheet" integrity="sha384-
+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
crossorigin="anonymous">

</head>
<body>
    <?php
    include "header.php";
    ?>
   <br></br>
   <div class="container">
        <div class="card">
             <div class="card-header">
                <h1>Data masyarakat</h1>
                <form method="POST" action="tampil_masyarakat.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari"
                    placeholder="search" aria-label="search">
                <button class="btn btn-outline-success" type="submit">
                    Search
                </button>
                </form>
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID masyarakat</th>
                    <th scope="col">Username</th>
                    <th scope="col">Nama masyarakat</th>
                    <th scope="col">NO telp</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
        <tbody>
        <?php
            include "koneksi.php";
            if (isset($_POST['cari'])) {
                $cari = $_POST['cari'];
                $query_tb_masyarakat= mysqli_query($conn,
                "select * from tb_masyarakat where id_user= '$cari'or
                nama_tb_'$cari' or alamat like '%$cari%'");
            }
            else{
                $query_tb_masyarakat= mysqli_query($conn, "select * from tb_masyarakat");
            } 
            while($tb_masyarakat=mysqli_fetch_array($query_tb_masyarakat)){
        ?> 
            <tr>
                <td><?=$tb_masyarakat['id_user']?></td> 
                <td><?=$tb_masyarakat['username']?></td>
                <td><?=$tb_masyarakat['nama_lengkap']?></td>
                <td><?=$tb_masyarakat['telp']?></td>    
                <td>
                    <a href="ubah_user.php?id_user=
                    <?=$tb_masyarakat['id_user']?>" class="btn btn-success">Edit</a>
                    <a href="hapus_user.php?id_user=
                    <?=$tb_masyarakat['id_user']?>" class="btn btn-danger"
                    onlick="return confirm ('apakah anda yakin menghapus data ini?')">
                    hapus</a>
                </td>
            </tr>
        <?php
        }
    ?>
    </tbody>
    </table>
    <a href="tambah_masyarakat.php" type="button" class="btn btn-primary">tambah</a>
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