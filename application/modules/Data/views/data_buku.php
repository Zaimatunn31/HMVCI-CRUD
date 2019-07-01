<!doctype html>
<html lang="en">
<head>
	 <!-- <base href="<?=base_url()?>"> -->
	<meta charset="UTF-8">
	<title>Belajar CRUD</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<h1>Belajar CRUD</h1>

	<a href="data/add" class="btn btn-primary">Tambah Data Buku</a> <!-- data/add artinya kembali ke form karena setelah -->

	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Judul Buku</th>
				<th>Tanggal Keluar</th>
				<th>Pembuat</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<!-- ISI DATA AKAN MUNCUL DISINI -->
			<?php
			$no = 1; //untuk menampilkan no
			//foreach untuk menampilkan data di database
			foreach($list_buku as $row){ 
				echo "
				<tr>
					<td>$no</td>
					<td>$row[nama_buku]</td>
					<td>$row[tanggaL_terbit]</td>
					<td>$row[pengarang]</td>
					<td>				
						<a href='data/edit/$row[id_buku]' class='btn btn-sm btn-info'>Update</a>
						<a href='data/delete/$row[id_buku]' class='btn btn-sm btn-danger'>Hapus</a>
					</td>
				</tr>
				";
				$no++;
			}
			?>
		</tbody>
	</table>
</div>
	
</body>
</html>
