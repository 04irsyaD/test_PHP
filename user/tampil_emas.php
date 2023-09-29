<?php
include "header.php";
?>
<h2 align="center">Daftar Barang</h2>
<div class="row">
    <?php
    include "koneksi.php";
    $qry_barang=mysqli_query($conn,"select * from tb_barang");
    while($dt_barang=mysqli_fetch_array($qry_barang)){
    ?>
        <div class="col-md-3">
                <div class="card" >
        <img src="../foto/<?=$dt_barang['foto']?>"class="card-img-top" width="150px" height="350px" alt="image">
        
           
            <div class="card-body">
            <h5 class="card-title"><?=$dt_barang['nama_barang']?></h5>
            <p class="card-text">RP.<?=substr($dt_barang['harga_awal'],0,40)?></p>
            <div class="footer ">
                            <?php
                            if ($dt_barang['status'] == "dibuka"):
                            ?>
                                <center>
                                <a href="dt_bid.php?id_barang=<?=$dt_barang['id_barang']?>" input type="submit" name="login" class="btn btn-success" value="LOGIN">IKUT LELANG</a>
                            </center> 
                            <?php
                            elseif ($dt_barang['status'] == "ditutup"):
                                ?>
                                <center>
                                <td class='btn btn-danger'>DITUTUP</td>             
                            </center> 

                            <?php endif; ?>  
                        </div>

        
        
        </div>
        
        </div>

        </div>
                <?php
    }
    ?>
</div>
<?php
include "footer.php";
?>