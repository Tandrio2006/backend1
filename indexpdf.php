<!DOCTYPE html>
<html>
<head>
 <title> Cetak laporan PDF </title>
</head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 20px auto;
 border-collapse: collapse;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;

 }
 a{
 background: blue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
        <h1 class='tengah'>Cetak laporan PDF <br/> 
        <br/>
        <div class='tengah'>
 <a target="_blank" href="cetak.php">Cetak Laporan</a>
        </div>
 <table>
 <tr>
 <th>No</th>
 <th>judul</th>
 <th>penjelasan</th>
 <th>foto</th>
 
 </tr>
 <?php
 // koneksi database
 $koneksi = mysqli_connect("localhost","root","","oop_reglog");

 // menampilkan data Ujian
 $data = mysqli_query($koneksi,"select * from tandrio");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td style='text-align: center;'><?php echo $d['id'] ?></td>
 <td><?php echo $d['Judul']; ?></td>
 <td><?php echo $d['Penjelasan']; ?></td>
 <td><img src="img/<?php echo $row["Foto"]; ?>" width ="50"></td>
 
 </tr>
 <?php
 }
 ?>
 </table>
</body>
</html>