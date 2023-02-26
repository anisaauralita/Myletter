<?php

include "library/config.php";
//menampung nilai variable $_POST
$no_berkas = $_POST['no_berkas'];
$alamat_instansi = $_POST['alamat_instansi'];
$no_surat = $_POST['no_surat'];
$perihal = $_POST['perihal'];
$tanggal = $_POST['tanggal'];

$target_dir = "files/surat_masuk/";
$target_file = $target_dir . "surat_masuk-" . microtime () . "-" . basename($_FILES["bukti"]["name"]);
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["bukti"]["tmp_name"], $target_file);

//memasukkan data ke dalam database
$q="INSERT INTO surat_masuk SET
no_berkas='$no_berkas',
alamat_instansi='$alamat_instansi',
no_surat='$no_surat',
perihal='$perihal',
tanggal='$tanggal',
bukti = '$target_file'";

$query=mysqli_query($koneksi,$q);
//aksi jika query sukses maupun gagal
if ($query){
    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Data berhasil ditambah');
    window.location.href='?hal=surat_tampil';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Data gagal ditambah');
    window.location.href='?hal=surat_tampil';
    </script>";
}

?>
