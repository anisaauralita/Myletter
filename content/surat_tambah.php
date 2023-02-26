<section class="content-header">
    <h1>Tambah Surat</h1>
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-ungu">
                <div class="box-header with-border">
                    <!--<h3 class="box-title">Quick Example</h3>-->
                </div>
                <!-- /.box-header -->
                <!-- form start </section>
<section class="content">
    -->
                    <form action="?hal=surat_insert" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="no_berkas">No. Berkas</label>
                                <input type="text" class="form-control" name="no_berkas" id="no_berkas" placeholder="No. Berkas" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat_instansi">Alamat Instansi</label>
                                <input type="text" class="form-control" name="alamat_instansi" id="alamat_instansi" placeholder="Alamat_Instansi" required>
                            </div>
                             <div class="form-group">
                                <label for="no_surat">No. Surat</label>
                                <input type="text" class="form-control" name="no_surat" id="no_surat" placeholder="No. Surat" required>
                            </div>
                            <div class="form-group">
                                <label for="perihal">Perihal</label>
                                <input type="text" class="form-control" name="perihal" id="perihal" placeholder="Perihal" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" required>
                            </div>
                            <div class="form-group">
                                <label for="bukti">Bukti</label>
                                <input type="file" class="form-control" name="bukti" id="bukti" placeholder="Bukti"  accept="application/pdf" required>
                            </div>
                        </div>

                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <a class="btn btn-danger" href="?hal=surat_tampil">Batal</a>
                        </div>

                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
</section>