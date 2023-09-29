<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah masyarakat</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        include "header.php";
        include "koneksi.php";
        $query_tb_masyarakat = mysqli_query($conn, "select * from tb_masyarakat where id_user='".$_GET['id_user']."'");
        $data_tb_masyarakat = mysqli_fetch_array($query_tb_masyarakat);
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Ubah masyarakat</h1>
            <div class="card-body">
                <form method="POST" action="proses_ubah_user.php">
                    <input type="hidden" name="id_user" value="<?=$data_tb_masyarakat['id_user']?>">
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama masyarakat</label>
                        <input type="text" class="form-control" name="nama_lengkap" value="<?=$data_tb_masyarakat['nama_lengkap']?>" placeholder="Masukkan Nama masyarakat" required>
                    </div>
                                  
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="<?=$data_tb_masyarakat['nama_lengkap']?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="" required>
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">telp</label>
                        <input type="text" class="form-control" name="telp" value="<?=$data_tb_masyarakat['telp']?>" required>
                    </div>  
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>