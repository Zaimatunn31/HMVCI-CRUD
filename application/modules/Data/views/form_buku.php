<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Belajar CRUD</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1><?=$tipe?> Buku</h1>
		
		<form method="post" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2">
					Judul Buku
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="judul" value="<?=isset($default['judul'])? $default['judul'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Tanggal Terbit				
				</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" name="tanggal" value="<?=isset($default['tanggal'])? $default['tanggal'] : ""?>">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Pengarang					
				</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="karang" value="<?=isset($default['karang'])? $default['karang'] : ""?>">
				</div>
			</div>
			<center>
				<button name="tombol_submit" class="btn btn-primary">
					Simpan
				</button>
			</center>


		</form>
	</div>
</body>
</html>