<?php
include "header.php";
?>
<h2 align="center">Tambah Barang</h2>
<div class="container">
    <div class="card">
        <h1 class="card-header">
            <div class="card-body">
                <form method= "POST" action="proses_tambah_barang.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label"><h5>Nama Barang</h5></label>
                        <input type="text" class="form-control" name = "nama_barang" placeholder="Masukkan Judul Barang" required>
                    </div>

                    <div class="mb-3">
                        <label for="harga_awal" class="form-label"><h5>harga buka lelang</h5></label>
                        <input type="text" class="form-control" name = "harga_awal" placeholder="Masukkan harga_awal" required>
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi" class="form-label"><h5>Deskripsi</h5></label>
                        <textarea type="text" class="form-control" name = "deskripsi" placeholder="Masukkan deskripsi" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label"><h5>Foto</h5></label>
                        <input type="file" class="form-control" name = "foto" placeholder="Masukkan foto" required>
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