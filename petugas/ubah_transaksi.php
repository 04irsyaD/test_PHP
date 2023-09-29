<?php
    include "header.php";
    include "koneksi.php";
    $query_barang = mysqli_query($conn, "select * from tb_status where id_barang='".$_GET['id_barang']."'");
    $data_barang = mysqli_fetch_array($query_barang);
?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah status</h1>
            <div class="card-body">
                <form method="POST" action="proses_ubah_transaksi.php">
    
                    <input type="hidden" name="id_barang" value="<?=$data_barang['id_barang']?>">
                    <label for="status">Pilih status:</label>
                        <select name="status" id="status">
                        <option value="ditutup">ditutup</option>
                        <option value="dibuka">dibuka</option>
                        
                        </select>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php
include "footer.php"
?>