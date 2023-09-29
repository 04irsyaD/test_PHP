<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lelang</title>


<!-- nav bootstrap -->
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="lelang.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css' />

</head>
<body>

<?php
include "koneksi.php";
    $qry_data=mysqli_query($conn,"select * from tb_barang");
    $no=0;
    while($data_barang=mysqli_fetch_array($qry_data)){
        $no++;
?>

<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="tile">
                    <div class="wrapper">
                        <div class="header"><?=$data_barang['nama_barang']?></div>

                        <div class="banner-img">
                        <img src="foto/<?=$data_barang['foto']?>">
                        </div>

                        <div class="dates">
                            <div class="start">
                                <strong>STARTS</strong> <?=$data_barang['tanggal_awal']?>
                                <span></span>
                            </div>
                            <div class="ends">
                                <strong>ENDS</strong> <?=$data_barang['tanggal_ahkir']?>
                            </div>
                        </div>

                        <div class="dates">
                                <strong>DESKRIPSI</strong> <?=$data_barang['deskripsi']?>
                                <span></span>
                        </div>

                        <div class="stats">
                            <div>
                                <strong>HARGA AWAL</strong> <?=$data_barang['harga_awal']?>
                            </div>

                            <div>
                                <strong>PENAWARAN TERTINGGI</strong> <?=$data_barang['harga_akhir']?>
                            </div>

                            <div>
                                <strong>STATUS</strong> <?=$data_barang['status']?>
                            </div>

                        </div>

                        <div class="footer ">
                            <?php
                            if ($data_barang['status'] == "dibuka"):
                            ?>
                                <center>
                                <a href="dt_bid.php?id_barang=<?=$data_barang['id_barang']?>" class="Cbtn Cbtn-danger">IKUT LELANG</a>
                            </center> 
                            <?php
                            elseif ($data_barang['status'] == "ditutup"):
                                ?>
                                <center>
                                <td class=''>DITUTUP</td>             
                            </center> 

                            <?php endif; ?>  


                           
                        </div>
                    </div>
                </div> 
            </div>
    <?php
 }
?>
</body>
</html>



