<?php
include "header.php";
include "koneksi.php";
$qry_detail_barang=mysqli_query($conn,"select * from tb_barang where id_barang = '".$_GET['id_barang']."'");
$dt_barang=mysqli_fetch_array($qry_detail_barang);
?>
<h2>Lelang</h2>
<div class="row">
<div class="col-md-4">
<img src="../foto/<?=$dt_barang['foto']?>"
class="card-img-top img-responsive" style="height: 100%;">
</div>
<div class="col-md-8">
<form action="masuk_bid.php?id_barang=<?=$dt_barang['id_barang']?>" method="post">
<table class="table table-hover table-striped">
<thead>
<input type="hidden" class="form-control" name = "id_barang">
<tr>
<td>Nama barang</td><td><?=$dt_barang['nama_barang']?></td>
</tr>

<tr>
<td>Deskripsi</td><td><?=$dt_barang['deskripsi']?></td>
</tr>

<tr>
<td>Harga Buka Lelang</td><td><?=$dt_barang['harga_awal']?></td>
</tr>

<tr>
<td>Penawaran Tertinggi</td><td><?=$dt_barang['harga_akhir']?></td>
</tr>
<tr>
<td>Status</td><td><?=$dt_barang['status']?></td>
</tr>

<tr>
<td>Tawar Barang</td><td><input type="number" class="form-control" name = "penawaran" placeholder="Masukkan penawaran" required></td>
</tr>
    
<tr>
<td colspan="2"><input class="btn btn-success"
type="submit" value="IKUT LELANG"></td>
</tr>

</thead>
</table>
</form>
</div>
</div>
<!-- <?php
include "footer.php";
?> -->