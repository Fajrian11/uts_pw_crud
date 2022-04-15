<?php
$username   = $_POST['username'];
$password   = $_POST['password'];

include '../add_user/config.php';

$user = mysqli_query($koneksi,"select * from pengguna where username='$username' and password='$password'");
$chek = mysqli_num_rows($user);


if($chek>0)
{
    session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['username'] = $row['username'];
    header("location:../data_mahasiswa/add_mahasiswa.php");
}else
{
    header("location:login.php");
}
?>