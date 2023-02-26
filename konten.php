<?php
if (!defined('INDEX')) die("");

$halaman=[
    "dashboard",
    "tentang aplikasi",
    // menu surat_tampil_file.php masuk
    "surat_tampil",
    "surat_tambah",
    "surat_insert",
    "surat_edit",
    "surat_update",
    "surat_delete",
    "surat_upload",
    "surat_hapus",
    "surat_tampil_file",

    //menu surat_tampil_file.php keluar
    "keluar_tampil",
    "keluar_tambah",
    "keluar_insert",
    "keluar_edit",
    "keluar_update",
    "keluar_delete",
    "keluar_upload",
    "keluar_hapus",
    "keluar_tampil_file"
];

if(isset($_GET['hal'])) $hal = $_GET['hal'];
else $hal = "dashboard";


foreach($halaman as $h){
    if($hal == $h){
        include "content/$h.php";
        break;
    }
}
?>
