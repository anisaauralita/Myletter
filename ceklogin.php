<?php
session_start();
include "library/config.php";
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['id_role'];

$query = mysqli_query($koneksi, "SELECT * FROM view_user WHERE 
                    username='$username' AND
                    password='$password' AND
                    id_role='$role'");
$data =mysqli_fetch_array($query);
$jml = mysqli_num_rows($query);
//mod-multiple-role
if ($jml > 0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['nama_role'] =$data['nama_role'];
    $_SESSION['role'] = $data['id_role'];
    header('location: index.php');
} else{
    echo "<script>
        window.alert('Innalillahi, username dan password anda salah');
        window.location.href='login.php';
        </script>";
    }
?>

























