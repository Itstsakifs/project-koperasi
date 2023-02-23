<?php
error_reporting(0);
session_start();
if ($_SESSION['level'] == "Admin") {
    include "header.php";
    include "../../config/koneksi.php";
    ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="x_panel">
            <div class="box-title">
                <legend style="text-align: center;">Data Anggota</legend>
            </div>
            <div class="box-header">
                <a href="add_anggota.php" title="Tambah Data" class="btn btn-primary">
                    <i class="fa fa-plus"></i></a>
            </div>
            <br>
            <table id="datatable" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No Telfon</th>
                        <th>Tabungan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $sql = "select * from anggota";
                            $query = mysqli_query($koneksi, $sql);
                            $jml = mysqli_num_rows($query);
                            $no = 1;
                            while ($a = mysqli_fetch_array($query)) {
                                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $a['nik']; ?></td>
                        <td><?php echo $a['nama_anggota']; ?></td>
                        <td><?php echo $a['jenis_kelamin']; ?></td>
                        <td><?php echo $a['alamat']; ?></td>
                        <td><?php echo $a['no_hp']; ?></td>
                        <td><?php echo "Rp " . number_format($a['total_tabungan']); ?></td>
                        <td>
                            <a href="edit_anggota.php?nik=<?php echo $a['nik']; ?>" class="btn btn-info"
                                title="Ubah Data"><i class="fa fa-edit"></i></a>
                            <a href="javascript:if(confirm('Apa Anda Yakin Ingin Mengahapus Anggota Dengan Nama : <?php echo $a['nama_anggota']; ?> ?'))
										{document.location='../logic_action/delete_anggota.php?nik=<?php echo $a['nik']; ?>';}"
                                class="btn btn-danger" title="Hapus Data"><i class="fa fa-trash-o fa-fw"></i></a>
                        </td>
                    </tr>
                    <?php $no++;
                            } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
    include "footer.php";
} else {
    echo "<script>
		alert('Anda Tidak Memiliki Hak Akses!');
		document.location='../index.php';
		</script>";
}
?>