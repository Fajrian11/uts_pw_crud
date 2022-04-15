<?php
 
$databaseHost = 'localhost';
$databaseName = 'kampus_kelompok_5';
$databaseUsername = 'root';
$databasePassword = '';
 
$koneksi = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if($koneksi){
         //echo "koneksi ke database berhasil";
    }else{
        die(mysql_error("koneksi ke server mysql gagal"));
    }

?>
 