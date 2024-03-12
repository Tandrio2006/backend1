<?php

session_start();

require 'Function.php';

if(!isset($_SESSION["login"])){
  header("Location: login.php");
}

$mhs =query("SELECT * FROM Tandrio");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>navbar</title>
	<link rel="stylesheet" type="text/css" href="Stylesheet3.css">
  <link rel="stylesheet" type="text/css" href="Responsive.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	 <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>
<div class="nav1">
<div class ="header">
		<div class ="hubungi">
			<b>Hubungi kami = 0829-3810-2344</b>
		</div>
		<div class="hubungi1">
			<button><i class="ph ph-instagram-logo" ></i></button>
			<button><i class="ph ph-facebook-logo"></i></button>
			<button><i class="ph ph-whatsapp-logo"></i></button>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item" id="nav-item">
          <a class="nav-link active" aria-current="page" href="#">BERANDA</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            BERITA TERBARU
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PROFIL KAMI</a>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PILIHAN STUDI
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PEMBELAJARAN
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FASILITAS</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            HUBUNGI KAMI
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            X
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
	<div class ="header1">
		<div class="namasekolah">
			<h2>Sekolah Kejuaraan</h2>
		</div>
		<div class="paket">
			<ul>
				<li>Paket A |</li>
				<li> Paket B |</li>
				<li> Paket C |</li>
				<li> Home Schooling</li>
			</ul>
		</div>
    <div class="Login">
      <a href="logout.php"><button type="button" class="btn btn-outline-dark">Logout</button></a>
    </div>
			</div>
	</div>
	<div class="main">
		<div class="parallax-image parallax-image-01">
			<h1>PENDIDIKAN KEJUARAAN</h1>
			<p>Pendidikan :<!--  <a href=""> -->Paket A<!-- </a> --> | <!-- <a href=""> -->Paket B<!-- </a> --> | <!-- <a href=""> -->Paket C<!-- </a> --> | <!-- <a href=""> -->Home Schooling<!-- </a> --></p>
		 <ul>
			<li><a href=""><button type ="submit" name="Daftar">DAFTAR ONLINE</button></a></li>
		 </ul>
	</div>
</div>
        <section>
        	<div class ="kalimat">
            <b><p>Inspirasi hari ini</p></b>
            <hr/>
        	</div>     
            <div class="kalimat1">
            "Pendidikan adalah senjata paling mematikan di dunia,karena dengan <br>pendidikan, Anda dapat mengubah dunia" - Nelson Mandela</div>
            <div class="gambar">
            <img src="nelson.jpg">
        	  </div>
        </section>
        <div class="parallax-image parallax-image-02"><h1>E-Learning pkbm Dharma putri mandiri</h1>
        	<a href=""><button type ="submit" name="Mulai">Mulai</button></a></div>
        	<div class ="kalimat2">
            <b><p>Artikel baru</p></b>
            <hr/>
          </div>
<div class="Height">
  <section>
    
  <div class="Tambah1">
    <?php if(isset($_SESSION["admin"]) || isset($_SESSION["pengguna"])): ?>
      <a href ="tambah.php">Tambah Artikel</a>
        <a href ="indexpdf.php">Cetak Artikel</a>
    <?php endif; ?>
  </div>
  <table border= "2" cellpadding="9" cellspacing="0">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Penjelasan</th>
      <th scope="col">Foto</th>
      <th scope="col"></th>
    </tr>
  </thead>
    <?php $i =1;?>
    <?php foreach($mhs as $row) :?>
    <tbody>
    <tr>
      <br><td><?php echo $i; ?></td>  
      <td><?php echo $row["Judul"]; ?></td>
      <td><?php echo $row["Penjelasan"]; ?></td>
      <td><img src="img/<?php echo $row["Foto"]; ?>" width ="50"></td>
      <td>
        <?php if(isset($_SESSION["admin"]) || isset($_SESSION["pengguna"])): ?>
        <a href="update.php?id=<?php echo $row["id"] ;?>">Ubah</a>|
        <a href="hapus.php?id=<?php echo $row["id"] ;?>">Delete</a>
      </td>
      <?php endif; ?>
    </tr>   
    <?php $i++; ?>
    <?php endforeach; ?>
     </tbody>
  </table>
       </section>
    </div>

</div>
</div>
  <div class="footer">
      <div class="BELAJAR">
      <a href="">BELAJAR ONLINE
      <hr/>
      <img src="elearning.jpg"></a>
      </div>
      <div class="BELAJAR1">
      <a href="">UJIAN ONLINE
      <hr/>
      <img src="UjianOnline.jpg"></a>
      </div>
      <div class="BELAJAR2">
      <a href="">PERPUSTAKAAN
      <hr/>
      <img src="Perpustakaan.jpg"></a>
      </div>
      <div class="BELAJAR3">
      <a href="">DAFTAR ONLINE
      <hr/>
      <img src="DaftarOnline.jpg"></a>
      </div>
  </div>
    <div class="df1">
      <div class="BELAJAR4">
      <a href="">KERJASAMA
      <hr/>
      <img src="KerjaSama.jpg"></a>
      </div>
      <div class="BELAJAR5">
      <a href="">UNDUH FORMULIR
      <hr/>
      <img src="UnduhFormulir.jpg"></a>
      </div>
      <div class="BELAJAR6">
      <a href="">CEK NISN
      <hr/>
      <img src="CekNisn.jpg"></a>
      </div>
      <div class="BELAJAR7">
      <a href="">KEMDIKBUD
      <hr/>
      <img src="Kemdikbud.jpg"></a>
      </div>
    </div>
    <div class="Dharma">
      <div class="Dharma1">
          PKBM Dharma Putra Mandiri
        </div>
        <div class="garis">
          <hr/>
        </div>
        <div class="litrox">
          Llorix One Lite dipersembahkan oleh WordPress
        </div>
      </div>

</body>
</html>