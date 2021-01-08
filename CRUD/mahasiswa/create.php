<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahsiswa</title>
	<!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>
<body>

	<!-- Dosen -->
	<div class="container">
		<div class="alert alert-info">Tambah Data Mahasiswa</div>
		
		

        <?php
        require'../koneksi.php';

        if (isset($_POST['simpan'])) {
            $input_Nim = $_POST['txtNim'];
            $input_nama = $_POST['txtnama'];
            $input_alamat = $_POST['txtalamat'];
            $input_Jk = $_POST['txtjk'];

            $query = "INSERT INTO mahasiswa VALUES
            ('$input_Nim', '$input_nama', '$input_alamat','$input_Jk')";

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
                <input type="text" class="form-control" name="txtNim">
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="txtnama">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="txtalamat">
            </div>
            <div class="form-group">
                <label for="">Jenis_Kelamin</label>
                <input type="text" class="form-control" name="txtjk">
            </div>
        
            <input type="submit" class="btn btn-primary" name="simpan" 
                        value="Simpan Data">
            <a href="index2.php" class="btn btn-warning">Batal</a>
            

        </form>
    </div>

</body>
</html>