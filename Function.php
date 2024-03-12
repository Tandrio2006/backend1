<?php 
$conn =mysqli_connect("localhost","root","","oop_reglog");
function query($query){
	global $conn;
	$result =mysqli_query($conn ,$query); //lemari 

	$rows =[];//wadah kosong

	while ($row =mysqli_fetch_assoc($result)){//pengulangan
		$rows[] =$row;
	}
	return $rows;
}
function tambah($post){
	global $conn;
	$id = htmlspecialchars($post["id"]);
	$Judul = htmlspecialchars($post["Judul"]);
	$Penjelasan = htmlspecialchars($post["Penjelasan"]);
	$Foto = upload();

	 if(!$Foto){
		return false;
	 }

	$query ="INSERT INTO Tandrio VALUES('$id','$Judul','$Penjelasan','$Foto')";

	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
function upload(){
	global $conn;
	$namaFile = $_FILES['Foto']['name'];
	$ukuranFile = $_FILES['Foto']['size'];
	$error = $_FILES['Foto']['error'];
	$tmpName = $_FILES['Foto']['tmp_name'];

	//cek apakah tidak ada gambar yang diupload

	if($error === 4){
		echo"<script>
			alert('Pilih Gambar Terlebih Dahulu');
			</script>";
		return false;
	}

	//cek apakah yang diupload adalah gambar

	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){

		echo"<script>
			alert('Yang Anda Upload Bukan Gambar');
			</script>";
	}
	//cek jika ukurannya terlalu besar

	if($ukuranFile > 100000000){
		echo"<script>
			alert('Ukuran Gambar Terlalu Besar');
			</script>";
		return false;
	}
	//Gambar siap Upload
	//Generete nama Gambar Baru

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;
	move_uploaded_file($tmpName, 'img/'. $namaFileBaru);
	return $namaFileBaru;

}
function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM Tandrio WHERE id = $id");
	return mysqli_affected_rows($conn);
}
function update($post){
	global $conn;
	$id = $post["id"];
	$Judul = $post["Judul"];
	$Penjelasan = $post["Penjelasan"];
	$FotoLama = $post["FotoLama"];

	if($_FILES['Foto']['error']=== 4){
		$Foto = $FotoLama;

	}else{

		 $Foto = upload();

	}
	$query = "UPDATE Tandrio SET
				Judul = '$Judul',
				Penjelasan = '$Penjelasan',
				Foto = '$Foto'
				WHERE id = $id";
	mysqli_query($conn , $query);
	return mysqli_affected_rows($conn);

}
function register($post){
	global $conn;
	$username=strtolower(stripslashes($post['username']));
	$password = mysqli_escape_string($conn,$post['password']);
	$password2 = mysqli_escape_string($conn,$post['password2']);

	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)){
		echo "<script>
		alert('Username sudah terdaftar');
		</script>";
	return false;

	}
	if($password !== $password2){
		echo "<script>
		alert('Konfirmasi password tidak sesuai');
		</script>";

		return false;
	}
	$password = password_hash($password, PASSWORD_DEFAULT);
	mysqli_query($conn , "INSERT INTO user VALUES('','$username','$password','user')");

	return mysqli_affected_rows($conn);
}

?>