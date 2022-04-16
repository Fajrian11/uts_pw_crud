<!DOCTYPE HTML>
<html lang="en">
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
    <body>
        <div class="container">           
        <div class="panel panel-default">
          <div class="panel-heading">Silahkan Mengisi Data Mahasiswa Anda</div>
            <div class="panel-body">
             <form method="POST" action="add_mahasiswa.php">
                <a class="btn btn-info" href="daftar_mahasiswa.php">klik disini untuk memilih mahasiswa</a>
                <a class="btn btn-warning" href="../index.html">Kembali Ke Home</a>
            <hr>

        <div class="control-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nm_mahasiswa" class="form-control">
                <label>No. HP</label>
                <input type="text" name="nohp" class="form-control">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control">
                <label>Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" class="form-control">
                <label>Tempat Lahir</label>
                <input type="text" name="tpt_lahir" class="form-control"> 
                <label>Tanggal Lahir</label>
                <input type="text" name="tgl_lahir" class="form-control">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control"> 
                <label>Agama</label>
                <input type="text" name="agama" class="form-control">
        </div>     
        <hr>
        <input type="submit" name="Submit" value="Submit"></td>
            <hr>
            </form>
        </div>
    </div>    
</div>

        <?php
 
    if(isset($_POST['Submit'])) {
        $nm_mahasiswa = $_POST['nm_mahasiswa'];
        $nohp = $_POST['nohp'];
        $nim = $_POST['nim'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tpt_lahir = $_POST['tpt_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $alamat = $_POST['alamat'];
        $agama = $_POST['agama'];
        
        include_once("../add_user/config.php");
                
        $result = mysqli_query($koneksi, "INSERT INTO data_mahasiswa(nm_mahasiswa,nohp,nim,jenis_kelamin,tpt_lahir,tgl_lahir,alamat,agama) VALUES('$nm_mahasiswa','$nohp','$nim','$jenis_kelamin','$tpt_lahir','$tgl_lahir','$alamat','$agama')");

        echo '<script type ="text/JavaScript">';  
        echo 'alert("Daftar Data Mahasiswa Berhasil")';  
        echo '</script>';  
    }  
    ?>

    </body>
</html>