<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>

</head>
<body>
    <?php
        include "header.php";
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>History lelang</h1>
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">TANGGAL LELANG</th>
                    <th scope="col">NAMA USER</th>
                    <th scope="col">NAMA BARANG</th>
                    <th scope="col">PENAWARAN</th>
                    <th scope="col">STATUS</th>
                    <!-- <th scope="col">AKSI</th> -->
                    
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include "koneksi.php";
                    $query_lelang = mysqli_query($conn, "SELECT * FROM tb_lelang  ORDER BY id_lelang DESC");
                    $no=0;
                    while($data_lelang=mysqli_fetch_array($query_lelang)){
                        $no++;
                    ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data_lelang['tgl_lelang']?></td>

                        <td>
                            <ol>
                            <?php
                            $query_history = mysqli_query($conn, "SELECT * FROM history_lelang d
                                            JOIN tb_masyarakat b ON b.id_user = d.id_user WHERE
                                            id_lelang = '".$data_lelang['id_lelang']."'");
                            while($data_history = mysqli_fetch_array($query_history)){
                                echo "".$data_history['username']."";
                            }
                            ?>
                            </ol>
                        </td>

                        <td>
                            <ol>
                            <?php
                            $query_history = mysqli_query($conn, "SELECT * FROM history_lelang d
                                            JOIN tb_barang b ON b.id_barang = d.id_barang WHERE
                                            id_lelang = '".$data_lelang['id_lelang']."'");
                            while($data_history = mysqli_fetch_array($query_history)){
                                echo "<li>".$data_history['nama_barang']."</li>";
                            }
                            ?>
                            </ol>
                        </td>

                        <td>
                            <ol>
                            <?php
                            $query_history = mysqli_query($conn, "SELECT * FROM history_lelang d
                                            JOIN tb_barang b ON b.id_barang = d.id_barang WHERE
                                            id_lelang = '".$data_lelang['id_lelang']."'");
                            while($data_history = mysqli_fetch_array($query_history)){
                                echo "RP.".$data_history['penawaran_harga']."";
                            }
                            ?>
                            </ol>
                        </td>

                        <?php
                        // $qry_data_hasil=mysqli_query($conn,"select * from history_lelang where id_user = '".$_SESSION['id_user']."'");
                        // $data_hasil=mysqli_fetch_array($qry_data_hasil);

                        // $qry_data=mysqli_query($conn,"select * from tb_barang");
                        // $data_barang=mysqli_fetch_array($qry_data);

                        $query_history = mysqli_query($conn, "SELECT * FROM history_lelang d
                                            JOIN tb_barang b ON b.id_barang = d.id_barang WHERE
                                            id_lelang = '".$data_lelang['id_lelang']."'");
                            $data_history = mysqli_fetch_array($query_history);
                        ?>
                        <?php
                    if ($data_history ['status'] == "dibuka"):
                        ?>
                                <td>MENGIKUTI</td>

                        <?php
                    elseif($data_history ['status'] == "ditutup"):
                        ?>
                                <?php
                            if ($data_history ['harga_akhir'] == $data_history['penawaran_harga']):
                                ?>

                                <td class='text-info'>MENANG</td>

                                <?php
                            elseif($data_history ['harga_akhir'] != $data_history['penawaran_harga']):
                                ?>

                                <td class='text-info'>KALAH</td>

                            <?php endif; ?>   

                    <?php endif; ?> 
                    </tr>
                    
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
<!-- dhqhkjahdkadkuwq -->
