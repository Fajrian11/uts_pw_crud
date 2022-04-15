<?php
// Create database connection using config file
include_once("../add_user/config.php");
 
// Fetch all users data from database
$result = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa  ORDER BY id_mahasiswa DESC");
?>
 
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
 
<body>
    <br>
<div class="container">    
    <div class="panel panel-default">
        <div class="panel-heading">Daftar Mahasiswa</div>
        <div class="panel-body">
        <a class="btn btn-success" href="add_mahasiswa.php">Tambah Mahasiswa</a><br/><br/>         
            <table class="table" width='80%' border=1>
         
            <tr>
                <th></th>
                <th>Nama Lengkap</th> 
                <th>NIM</th> 
                <th>Tempat Lahir</th> 
                <th>Tanggal Lahir</th> 
                <th>Alamat</th> 
                <th>No. HP</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
            </tr>
    <?php  
    while($data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td><a href='pilih_mahasiswa.php?id_mahasiswa=$data[id_mahasiswa]'>PILIH</a></td>";
        echo "<td>".$data['nm_mahasiswa']."</td>";
        echo "<td>".$data['nim']."</td>";
        echo "<td>".$data['tpt_lahir']."</td>";    
        echo "<td>".$data['tgl_lahir']."</td>";    
        echo "<td>".$data['alamat']."</td>";    
        echo "<td>".$data['nohp']."</td>";    
        echo "<td>".$data['jenis_kelamin']."</td>";    
        echo "<td>".$data['nohp']."</td>";    
        echo "<td><a href='edit_mahasiswa.php?id_mahasiswa=$data[id_mahasiswa]'>Edit</a> <a href='delete_mahasiswa.php?id_mahasiswa=$data[id_mahasiswa]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</div>
</div>
</div>
</body>
</html>