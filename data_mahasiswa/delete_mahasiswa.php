<?php
// include dfile koneksi database
include_once("../add_user/config.php");
 
// get id dari url untuk delete
$id_mahasiswa = $_GET['id_mahasiswa'];
 
// hapus row pengguna dari table berdasarkan id parameter
$result = mysqli_query($koneksi, "DELETE FROM data_mahasiswa WHERE id_mahasiswa=$id_mahasiswa");
 
// untuk kembali ke home
header("Location:daftar_mahasiswa.php");
?>