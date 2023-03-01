<?php
if (!defined( 'INDEX')) die("");
$jml_surat_masuk = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM surat_masuk"));
?>
<?php
if (!defined( 'INDEX')) die("");
$jml_surat_keluar = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM surat_keluar"));
?>

<section class="content-header">
<h1>
Dashboard
</h1>
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
<!--    <div class="col-md-12">
        <!-- Bar chart -->
        <!--<div class="box box-primary">
            <div class="box-header with-border">
                <i class="fa fa-bar-chart-o"></i>

                <h3 class="box-title">Bar Chart</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div id="bar-chart" style="height: 300px; padding: 0px; position: relative;"></div>
                <canvas class="flot-base" width="514" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 514px; height: 300px;"></canvas>
                <div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                    <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;">
                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 282px; left: 23px; text-align: center;">Januari</div>
                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 282px; left: 107px; text-align: center;">Februari</div>
                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 282px; left: 199px; text-align: center;">Maret</div>
                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 282px; left: 288px; text-align: center;">April</div>
                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 282px; left: 375px; text-align: center;">Mei</div>
                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 282px; left: 459px; text-align: center;">Juni</div>
                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 282px; left: 459px; text-align: center;">Juli</div>
                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 282px; left: 459px; text-align: center;">Agustus</div>
                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 282px; left: 459px; text-align: center;">September</div>
                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 282px; left: 459px; text-align: center;">Oktober</div>
                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 282px; left: 459px; text-align: center;">November</div>
                        <div class="flot-tick-label tickLabel" style="position: absolute; max-width: 84px; top: 282px; left: 459px; text-align: center;">Desember</div>
                        <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;">
                        <div class="flot-tick-label tickLabel" style="position: absolute; top: 269px; left: 7px; text-align: right;">0</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 202px; left: 7px; text-align: right;">5</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 135px; left: 1px; text-align: right;">10</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 68px; left: 1px; text-align: right;">15</div>
                            <div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 1px; text-align: right;">20</div>
                        </div>
                        <canvas class="flot-overlay" width="514" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 514px; height: 300px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->          <!-- /.box -->
</section>