<?php
// include file koneksi database
include_once("../add_user/config.php");
?>

<?php
// menampilkan data pengguna yang dipilih berdasarkan id
// mendapatkan id dari url
$id_mahasiswa = $_GET['id_mahasiswa'];
 
// mengambil data pengguna berdasarkan parameter id
$result = mysqli_query($koneksi, "SELECT * FROM data_mahasiswa WHERE id_mahasiswa=$id_mahasiswa");
 
while($data = mysqli_fetch_array($result))
{
    $nm_mahasiswa = $data['nm_mahasiswa'];
    $nim = $data['nim'];
    $tpt_lahir = $data['tpt_lahir'];
    $tgl_lahir = $data['tgl_lahir'];
    $alamat = $data['alamat'];
    $nohp = $data['nohp'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $agama = $data['agama'];
    
}
?>

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
                <a class="btn btn-warning" href="daftar_mahasiswa.php">klik disini untuk memilih mahasiswa</a>
                <hr>

        <div class="control-group">
                <label>Id</label>
                <input readonly="" type="text" name="id_mahasiswa" class="form-control" value=<?php echo $id_mahasiswa;?>>
                <label>Nama Lengkap</label>
                <input readonly="" type="text" name="nm_mahasiswa" class="form-control" value=<?php echo $nm_mahasiswa;?>>
                <label>No. HP</label>
                <input readonly="" type="text" name="nohp" class="form-control" value=<?php echo $nohp;?>>
                <label>NIM</label>
                <input readonly="" type="text" name="nim" class="form-control" value=<?php echo $nim;?>>
                <label>Jenis Kelamin</label>
                <input readonly="" type="text" name="jenis_kelamin" class="form-control" value=<?php echo $jenis_kelamin;?>>
                <label>Tempat Lahir</label>
                <input readonly="" type="text" name="tpt_lahir" class="form-control" value=<?php echo $tpt_lahir;?>> 
                <label>Tanggal Lahir</label>
                <input readonly="" type="text" name="tgl_lahir" class="form-control" value=<?php echo $tgl_lahir;?>>
                <label>Alamat</label>
                <input readonly="" type="text" name="alamat" class="form-control" value=<?php echo $alamat;?>> 
                <label>Agama</label>
                <input readonly="" type="text" name="agama" class="form-control" value=<?php echo $agama;?>>
        </div>     
            <hr>
            <a class="btn btn-success" href='../data_krs/add_krs.php?<?php echo 'id_mahasiswa'.'='.$id_mahasiswa;?>'> lanjut untuk mengisi KRS</a>
            <a href="../login_signup/logout.php" class="btn btn-danger">Logout</a>   
            </form>
        </div>
    </div>    
</div>
    </body>
</html>