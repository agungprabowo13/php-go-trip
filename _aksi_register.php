<?php 
include("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,"INSERT INTO tb_users SET username='$username',password='$password'");
if ($query) {
    header('location:login.php');
    echo("<script>alert('User Berhasil Ditambahkan')</script>");
}

?>