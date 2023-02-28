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
                    <span class="info-box-text">SURAT MASUK </span>
                    <span class="info-box-number"><?= $jml_surat_masuk?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-upload"></i></span>

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
    <div class="col-md-15">
        <!-- Bar chart -->
        <div class="box box-default">
            <div class="box-header with-border">
                <i class="fa fa-bar-chart-o"></i>

                <h3 class="box-title">Letter Chart</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i><?= $jml_surat_masuk?>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i><?= $jml_surat_keluar?></button>
                </div>
            </div>
            <div class="box-body">
                <div id="letter-chart" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
        </div>
        <!-- /.box -->
</section>