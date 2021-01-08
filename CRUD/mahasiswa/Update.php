<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Dosen</title>
    <!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>
<body>

    <!-- Mahasiswa -->
    <div class="container">
        <div class="alert alert-info">Update Data Mahasiswa</div>
        
        

        <?php
        require'../koneksi.php';

        if (isset($_GET['url-Nim'])) {

            $input_Nim =$_GET['url-Nim'] ;
            $query = "SELECT * FROM mahasiswa WHERE Nim ='$input_Nim'";
            $result = mysqli_query($link, $query);
            $isi = mysqli_fetch_object($result);
        
        }

        if (isset($_POST['simpan'])) {
            $input_Nim = $_POST['txtNIM'];
            $input_nama = $_POST['txtnama'];
            $input_alamat = $_POST['txtalamat'];
            $input_jenis_kelamin = $_POST['txtjenis_kelamin'];

            $query = "UPDATE mahasiswa SET Nama_Mahasiswa ='$input_nama', Alamat='$input_alamat', jenis_kelamin= '$input_jenis_kelamin'
                    WHERE Nim='$input_Nim'";
            

            $result = mysqli_query($link, $query);
            if ($result){
                header('location: index2.php');
            }else{
                echo 'Gagal Disimpan : ', mysqli_error($link);
            }
        }
        
        ?>

        <form action="" method="post">
            <div class="form-group">
                <label for="">Nim</label>
                <input type="text" class="form-control" name="txtNIM" value="<?= $isi->Nim; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="txtnama" value="<?= $isi->Nama_Mahasiswa; ?>">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="txtalamat" value="<?= $isi->Alamat; ?>">
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <input type="text" class="form-control" name="txtjenis_kelamin" value="<?= $isi->Jenis_Kelamin; ?>">
            </div>
           
        
            <input type="submit" class="btn btn-primary" name="simpan" 
                        value="Simpan Data">
            <a href="index2.php" class="btn btn-warning">Batal</a>
            

        </form>
    </div>

</body>
</html>