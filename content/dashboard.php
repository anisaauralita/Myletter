<?php
if (!defined( 'INDEX')) die("");
$jml_surat_masuk = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM surat_masuk"));
?>
<?php
if (!defined( 'INDEX')) die("");
$jml_surat_keluar = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM surat_keluar"));
?>

<section class="content-header">
<h1>Dashboard</h1>
</section>
<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-download"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">SURAT </span>
                    <span class="info-box-number"><?= $jml_surat_masuk?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-upload"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">SURAT KELUAR</span>
                    <span class="info-box-number"><?= $jml_surat_keluar?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>