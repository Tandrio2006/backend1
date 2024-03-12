<?php
require 'Function.php';

$id = $_GET["id"];

$Tandrio= query("SELECT * FROM Tandrio WHERE id = $id")[0];

if (isset($_POST["submit"])){
	if( update ($_POST) > 0){
		echo"
		<script>
			alert('Data Berhasil di Update ');
			document.location.href = 'WEBSITETAN.php';
		</script>
		";

	}else{
		echo"
		<script>
			alert('Data Gagal di Update');
			document.location.href = 'WEBSITETAN.php';
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
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="stylesheet2.css">
	<link rel="stylesheet" type="text/css" href="responsive1.css">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $Tandrio ["id"];?>">
		<input type="hidden" name="FotoLama" value="<?= $Tandrio ["Foto"];?>">
		
		<ul>
			<div class="List">
			<h1>Update Artikel</h1>
			<li>
				<label for ="id">id : </label>
				<br>
				<input type="text" name="id" id="id" required value = "<?php echo $Tandrio["id"]; ?>">
			</li>
			<li>
			<li>
				<label for ="Judul">Judul : </label>
				<br>
				<input type="text" name="Judul" id="Judul" required value = "<?php echo $Tandrio["Judul"]; ?>">
			</li>
			<li>
				<label for="Penjelasan">Penjelasan : </label>
				<br>
				<input type="text" name="Penjelasan" id="Penjelasan" required value = "<?php echo $Tandrio["Penjelasan"];?>">
			</li>
			<li>
				<label for ="Foto">Foto : </label>
				<br>
				<img src="img/<?php echo $Tandrio["Foto"];?>" width = "20%">
				<br>
				<input type="file" name="Foto" id="Foto">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
			<a href="WEBSITETAN.php">Kembali</a>
			</div>
		</ul>
	
	</form>
</body>
</html>