<?php
//konfigurasi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "suratku";

//mencoba koneksi ke database
$koneksi = mysqli_connect($host,$user,$pass,$db);

if (mysqli_connect_errno()) {
    echo "Koneksi Gagal: " . mysqli_connect_error();
}
//    echo " Koneksi Anda Berhasil ;
?>