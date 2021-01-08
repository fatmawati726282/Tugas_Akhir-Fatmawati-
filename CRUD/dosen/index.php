<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>
<body>

	<!-- Dosen -->
	<div class="container">
		<div class="alert alert-info">Data Dosen</div>
		
		<a href="create.php" class="btn btn-info">Tambah Data</a>
		<br><br>

		<table class="table table-bordered" cellpadding="10" cellspacing="0">
			<thead>
				<tr>
					<th>Nip</th>
					<th>Nama Dosen</th>
					<th>Alamat</th>
					<th>Jenis Kelamin</th>
					<th>Aksi</th>
				</tr>
			</thead>

			<tbody>
				<?php
					require '../koneksi.php';
					$query = "SELECT * FROM dosen";
					// Jalankan query di atas
					$result = mysqli_query($link, $query);
					$no =1;
					while ($isi = mysqli_fetch_object($result)) {
				?>

				<tr>
					
					<td><?= $isi->Nip; ?></td>
					<td><?= $isi->Nama_Dosen; ?></td>
					<td><?= $isi->Alamat; ?></td>
					<td><?= $isi->Jenis_Kelamin; ?></td>
					<td>
						<a href="update.php?url-Nip=<?php echo $isi->Nip;?>" 
								class="btn btn-warning">Edit</a>

						<a href="delete.php?Nip=<?php echo $isi->Nip;?>" 
								class="btn btn-danger">Delete</a>
					</td>
				</tr> 
				<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>