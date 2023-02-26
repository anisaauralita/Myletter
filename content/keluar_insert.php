<?php

include "library/config.php";
//menampung nilai variable $_POST
$no_berkas = $_POST['no_berkas'];
$alamat_instansi = $_POST['alamat_instansi'];
$perihal = $_POST['perihal'];
$tanggal = $_POST['tanggal'];
$no_surat = $_POST['no_surat'];
$penerima = $_POST['penerima'];

$target_dir = "files/surat_keluar/";
$target_file = $target_dir . "surat_keluar-" . microtime () . "-" . basename($_FILES["bukti"]["name"]);
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["bukti"]["tmp_name"], $target_file);

//memasukkan data ke dalam database
$q="INSERT INTO surat_keluar SET
no_berkas='$no_berkas',
alamat_instansi='$alamat_instansi',
perihal='$perihal',
tanggal='$tanggal',
no_surat='$no_surat',
penerima='$penerima' ,
bukti = '$target_file'";

$query=mysqli_query($koneksi,$q);
//aksi jika query sukses maupun gagal
if ($query){
    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Data berhasil ditambah');
    window.location.href='?hal=keluar_tampil';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Data gagal ditambah');
    window.location.href='?hal=keluar_tampil';
    </script>";
}

?>