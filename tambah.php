<?php
	require 'Function.php';
	if(isset($_POST["submit"])){
		if(tambah($_POST) > 0){
			echo"
			<script>
				alert('Data Berhasil di Tambahkan');
				document.location.href = 'WEBSITETAN.php';
			</script>
			";
		}else{
			echo"
			<script>
			alert('Data Gagal di Tambahkan');
			document.location.href ='WEBSITETAN.php';
			</script>
			";

		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah</title>
	<link rel="stylesheet" type="text/css" href="stylesheet4.css">
	<link rel="stylesheet" type="text/css" href="Responsive2.css">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<div class="P">
				<h1>Tambah Artikel baru</h1>
			</div>
			<div class="list">
				<li>
					<label for ="id">id :</label>
					<br>
					<input type="text" name="id" id="id" required>
				</li>
				<li>
					<label for ="Judul">Judul :</label>
					<br>
					<input type="text" name="Judul" id="Judul" required>
				</li>
				<li>
					<label for ="Penjelasan">Penjelasan :</label>
					<br>
					<input type="text" name="Penjelasan" id="Penjelasan" required>
				</li>
				<li>
					<label for ="Foto">Foto :</label>
					<br>
					<input type="file" name="Foto" id="Foto" required>
				</li>
			<div class ="tombol">
			<li>
				<button type="submit" name="submit">Tambah Artikel</button>
			</li>
			<a href="WEBSITETAN.php">Kembali</a>
			</div>
			</div>
		</ul>
		
	</form>

</body>
</html>