<?php
// include file koneksi database
include_once("../add_user/config.php");
 
// untuk cek apakah form dikirimkan untuk update pengguna
if(isset($_POST['update']))
{    
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nm_mahasiswa = $_POST['nm_mahasiswa'];
    $nim = $_POST['nim'];
    $tpt_lahir = $_POST['tpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
        
        
    // update data pengguna
    $result = mysqli_query($koneksi, "UPDATE data_mahasiswa SET nm_mahasiswa='$nm_mahasiswa',nim='$nim',tpt_lahir='$tpt_lahir',tgl_lahir='$tgl_lahir',alamat='$alamat',nohp='$nohp',jenis_kelamin='$jenis_kelamin',agama='$agama' WHERE id_mahasiswa=$id_mahasiswa");
    
    // untuk mengarahkan ulang ke halaman home
    header("Location: daftar_mahasiswa.php");
}
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

<html lang="en">
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
 
<body>
    <div class="container">           
        <div class="panel panel-default">
            <div class="panel-heading">Silahkan Edit Data Mahasiswa Anda</div>
            <div class="panel-body">
            <br>
                    <a class="btn btn-success" href="add_mahasiswa.php">Home</a>
                    <br/><br/>
                    
                    <form name="update_user" method="post" action="edit_mahasiswa.php">
                        <div class="control-group">
                             
                                <label>Nama Lengkap</label>
                                <input type="text" name="nm_mahasiswa" class="form-control" value=<?php echo $nm_mahasiswa;?>> 
                                <label>No. HP</label>
                                <input type="text" name="nohp" class="form-control" value=<?php echo $nohp;?>>  
                                <label>NIM</label>
                                <input type="text" name="nim" class="form-control" value=<?php echo $nim;?>> 
                                <label>Jenis Kelamin</label>
                                <input type="text" name="jenis_kelamin" class="form-control" value=<?php echo $jenis_kelamin;?>>  
                                <label>Tempat Lahir</label>
                                <input type="text" name="tpt_lahir" class="form-control" value=<?php echo $tpt_lahir;?>> 
                                <label>Tanggal Lahir</label>
                                <input type="text" name="tgl_lahir" class="form-control" value=<?php echo $tgl_lahir;?>>  
                                <label>Alamat</label>
                                <input type="text" name="alamat" class="form-control" value=<?php echo $alamat;?>> 
                                <label>Agama</label>
                                <input type="text" name="agama" class="form-control" value=<?php echo $agama;?>> 
                                <input type="hidden" name="id_mahasiswa" value=<?php echo $_GET['id_mahasiswa'];?>> 
                                <hr>
                                <input class="btn btn-success" type="submit" name="update" value="Update"> 
                        </div>
                    </form>
            </div>        
        </div>                
    </div>                
</body>
</html>