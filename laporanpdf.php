<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container">
<br><br>
    <div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            <th>No</th>  
            <th>judul</th>
            <th>penjelasan</th>
            <th>foto</th>
 
            </tr>
        </thead>
        <body>
            <?php 
                include "database.php";
                $select = mysqli_query($koneksi, 'select * from tandrio');
                while($data = mysqli_fetch_array($select)){
            ?>
           <td><?php echo $d['judul']; ?></td>
 <td><?php echo $d['Penjelasan']; ?></td>
 <td><img src="img/<?php echo $row["Foto"]; ?>" width ="50"></td>

            </a></td>
            <?php } ?>
        </tbody>
    </table>
    </div>
</div>