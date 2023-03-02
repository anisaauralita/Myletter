<section class="content-header">
    <h1><center><b>Surat Keluar</b></center></h1>
</section>
<!-- Main content -->
<section class="content">
 <div class="row">
     <div class="col-xs-12">
         <div class="box">
            <div class="box-header">
<!--              <h3 class="box-title">Data Table With Full Features</h3>-->
                <a class="btn btn-md btn-info
                    <?php
                    //fungsi untuk menyembunyikan tombol aksi jika rolenya manager
                    if($_SESSION['role']==2 or $_SESSION['role']==3){
                        echo "hidden";
                    }
                    ?>
                "href="?hal=keluar_tambah"> Tambah Surat</a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No Berkas</th>
                    <th>Alamat Instansi</th>
                    <th>No Surat</th>
                    <th>Perihal</th>
                    <th>Tanggal</th>
                    <th>Penerima</th>
                    <th>Detail</th>
                      <th class="
<?php
//fungsi untuk menyembunyikan tombol aksi jika rolenya manager
if($_SESSION['role']==2 or $_SESSION['role']==3){
  echo "hidden";
}
?>
">Aksi</th>
                  </tr>
                </thead>
                <tbody>
<?php
$tampil1 = "SElECT * FROM surat_keluar";
$query = mysqli_query($koneksi,$tampil1);
$no=0;
while ($data = mysqli_fetch_array($query)) {
 //        var_dump($data);
 $no++;
?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $data['no_berkas']; ?></td>
                  <td><?= $data['alamat_instansi']; ?></td>
                  <td><?= $data['no_surat']; ?></td>
                  <td><?= $data['perihal']; ?></td>
                  <td><?= $data['tanggal']; ?></td>
                  <td><?= $data['penerima']; ?></td>
                  <td><a href="?hal=keluar_tampil_file&namafile=<?= $data['bukti']; ?>">Tampilkan</a></td>
                  <td class="
<?php
//fungsi untuk menyembunyikan tombol aksi jika rolenya manager
if($_SESSION['role']==2 or $_SESSION['role']==3){
  echo "hidden";
}
?>
                   ">
                     <!-- Modifikasi tombol edit dan hapus-->
                      <a class="btn btn-sm btn-warning" href="?hal=keluar_edit&id=<?= $data['id_surat_keluar'] ?>"> Edit </a>
                      <a class="btn btn-sm btn-danger" href="?hal=keluar_delete&id=<?= $data['id_surat_keluar'] ?>"> Hapus </a>
                  </td>
                </tr>
<?php
}
?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
     </div>
 </div>

</section>