<?php
include_once "library/config.php";

//menampung nilai variable $_POST
$id_surat_keluar = $_POST['id_surat_keluar'];
$no_berkas = $_POST['no_berkas'];
$alamat_instansi = $_POST['alamat_instansi'];
$no_surat = $_POST['no_surat'];
$perihal = $_POST['perihal'];
$tanggal = $_POST['tanggal'];
$penerima = $_POST['penerima'];

if ($_FILES['bukti']['size'] == 0 || $_FILES['bukti']['error'] == 4){
    //memasukkan data ke dalam database
    $q="UPDATE surat_keluar SET
        no_berkas='$no_berkas',
        alamat_instansi='$alamat_instansi',
        perihal='$perihal',
        tanggal='$tanggal',
        no_surat='$no_surat',
        penerima='$penerima'
        WHERE id_surat_keluar= '$id_surat_keluar'                 
                   ";
}
else{
    $target_dir = "files/surat_keluar/";
    $target_file = $target_dir . "surat_keluar-" . microtime () . "-" . basename($_FILES["bukti"]["name"]);
    move_uploaded_file($_FILES["bukti"]["tmp_name"], $target_file);

    //memasukkan data ke dalam database
    $q="UPDATE surat_keluar SET
        no_berkas='$no_berkas',
        alamat_instansi='$alamat_instansi',
        perihal='$perihal',
        tanggal='$tanggal',
        no_surat='$no_surat',
        penerima='$penerima',
        bukti = '$target_file'
        WHERE id_surat_keluar= '$id_surat_keluar'                 
                   ";
}
var_dump($q);
$query =mysqli_query($koneksi,$q,);

//aksi jika query sukses maupun gagal
if ($query){
    //mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Data berhasil diperbarui');
    window.location.href='?hal=keluar_tampil';
    </script>";
} else {
//mod : menambah action alert jika query berhasil
    echo "<script>
    window.alert('Data gagal diperbarui');
    window.location.href='?hal=keluar_tampil';
    </script>";
}
?>
