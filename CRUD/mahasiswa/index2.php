<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

	

</head>
<body>

	<!-- Mahasiswa -->
	<div class="container">
		<div class="alert alert-info">Data Mahasiswa</div>
		<!-- <br> -->
		<!-- <a href="../tambah.php" class="btn btn-primary">Tambah Data Mahasiswa</a>
		<br><br> -->
		<a href="create.php" class="btn btn-info">Tambah Data</a>
		<br><br>

		<table class="table table-bordered" cellpadding="10" cellspacing="0">
            
			<thead>
				<tr>
					<th>NIM</th>
					<th>Nama_Mahasiswa</th>
					<th>Alamat</th>
					<th>Jenis_Kelamin</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php
					require '../koneksi.php';
					$query = "SELECT * FROM mahasiswa";
					// Jalankan query di atas
					$result = mysqli_query($link, $query);
					$no =1;
					while ($isi = mysqli_fetch_object($result)) {
				?>

				<tr>
					<td><?= $isi->Nim; ?></td>
					<td><?= $isi->Nama_Mahasiswa; ?></td>
					<td><?= $isi->Alamat; ?></td>
					<td><?= $isi->Jenis_Kelamin; ?></td>

					<td>

						<a href="Update.php?url-Nim=<?php echo $isi->Nim;?>" 
								class="btn btn-warning">Edit</a>

						<a href="delete.php?Nim=<?php echo $isi->Nim;?>" 
								class="btn btn-danger">Delete</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>