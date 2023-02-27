<?php
include "library/config.php";

//mengambil data surat dari database
$query = mysqli_query($koneksi,
    "SELECT * FROM surat_keluar WHERE id_surat_keluar='$_GET[id]'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Surat</title>
</head>
<body>
<section class="content-header">
    <h1>Edit Surat ku</h1>
</section>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-ungu">
                <div class="box-header with-border">
                    <!--                        <h3 class="box-title">Quick Example</h3>-->
                </div>
                <!-- /.box-header -->
                <!-- form start </section>
            <section class="content">
    -->
                <form action="?hal=keluar_update" method="post" role="form" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="id_surat_keluar">Id Surat</label>
                        <input type="text" class="form-control" name="id_surat_keluar" id="id_surat_keluar" placeholder="Id Surat" value="<?=$data["id_surat_keluar"];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="no_berkas">No. Berkas</label>
                        <input type="text" class="form-control" name="no_berkas" id="no_berkas" placeholder="No. Berkas" value="<?=$data["no_berkas"];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat_instansi">Alamat Instansi</label>
                        <input type="text" class="form-control" name="alamat_instansi" id="alamat_instansi" placeholder="Alamat_Instansi" value="<?=$data["alamat_instansi"];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="no_surat">No. Surat</label>
                        <input type="text" class="form-control" name="no_surat" id="no_surat" placeholder="No. Surat" value="<?=$data["no_surat"];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="perihal">Perihal</label>
                        <input type="text" class="form-control" name="perihal" id="perihal" placeholder="Perihal" value="<?=$data["perihal"];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?=$data["tanggal"];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="penerima">Penerima</label>
                        <input type="text" class="form-control" name="penerima" id="penerima" placeholder="Penerima" value="<?=$data["penerima"];?>" required>
                    </div>
                    <div class="form-group">
                        <label for="bukti">Bukti</label>
                        <input type="file" class="form-control" name="bukti" id="bukti" placeholder="Bukti" accept="application/pdf" >
                    </div>

                     <div class="box-footer">
                         <button type="submit" class="btn btn-success">Simpan</button>
                         <button type="reset" class="btn btn-warning">Reset</button>
                        <a class="btn btn-danger" href="?hal=keluar_tampil">Batal</a>
                     </div>
                </div>
                </form>
             </div>
        </div>
    </div>
</section>
</body>
</html>