<?php
include_once "library/config.php";

//menghapus data sesuai id_surat yang dipilih
$q = "DELETE FROM surat_keluar WHERE id_surat_keluar='$_GET[id]'";
$query = mysqli_query($koneksi,$q);

if ($query){
// mod : menambah alert jika query berhasil
    echo "<script>
    window.alert('Data berhasil dihapus');
    window.location.href='?hal=keluar_tampil';
    </script>";
} else {
// mod : menambah alert jika query gagal
    echo "<script>
    window.alert('Data gagal dihapus');
    window.location.href='?hal=keluar_tampil';
    </script>";
}
?>