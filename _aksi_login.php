<?php
include("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,"SELECT * FROM tb_users");

while ($data = mysqli_fetch_array($query)) {
    if ($data['username'] == $username && $data['username'] != 'admin') {
        if ($data['password'] == $password) {
            header('location: index.php');
        }else{
            header('location: login.php');
        }
    }
    else if($data['username'] == 'admin'){
        if ($data['password'] == $password) {
            header('location: admin.php');
        }else{
            header('location: login.php');
        }
    }
}

?>