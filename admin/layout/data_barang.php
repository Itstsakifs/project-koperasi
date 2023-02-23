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
                <legend style="text-align: center;">Data Barang</legend>
            </div>
            <div class="box-header">
                <a href="add_barang.php" title="Tambah Data" class="btn btn-primary">
                    <i class="fa fa-plus"></i></a>
            </div>
            <br>
            <table id="datatable" class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID barang</th>
                        <th>Nama Barang</th>
                        <th>Stock</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $sql = "select * from barang";
                            $query = mysqli_query($koneksi, $sql);
                            $jml = mysqli_num_rows($query);
                            $no = 1;
                            while ($a = mysqli_fetch_array($query)) {
                                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $a['id_barang']; ?></td>
                        <td><?php echo $a['nama_barang']; ?></td>
                        <td><?php echo $a['stock']; ?></td>
                        <td><?php echo $a['keterangan']; ?></td>
                        <td>
                            <a href="edit_barang.php?id=<?php echo $a['id_barang']; ?>" class="btn btn-info"
                                title="Ubah Data"><i class="fa fa-edit"></i></a>
                            <a href="javascript:if(confirm('Apa Anda Yakin Ingin Mengahapus Data Barang : <?php echo $a['nama_barang']; ?> ?'))
										{document.location='../logic_action/delete_barang.php?id=<?php echo $a['id_barang']; ?>';}"
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