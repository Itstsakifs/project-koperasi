<?php
include "header.php";
include "../../config/koneksi.php";
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-10 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add New Peminjaman</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content" style="display: block;">
                    <br>
                    <form action="../logic_action/proses_add_peminjaman.php" method="POST"
                        class="form-horizontal form-label-left" novalidate>
                        <div class="form-group">
                            <label>Pilih Anggota</label>
                            <select name="id" class='form-control'>
                                <option value="">===== Pilih Nama Anggota? =====</option>
                                <?php
                                $query = mysqli_query($koneksi, "select * from anggota");
                                while ($data = mysqli_fetch_array($query)) {
                                    echo "<option  value='$data[nik]'>$data[nama_anggota] --- Total Tabungan $data[total_tabungan]</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="xdisplay_inputx form-group has-feedback">
                            <label for="">Pilih Tanggal Nabung</label>
                            <input type="text" name="tanggal_peminjaman" class="form-control has-feedback-left"
                                id="single_cal3" placeholder="First Name" aria-describedby="inputSuccess2Status3">
                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                            <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                        </div>
                        <div class="row">
                                <div class="col-md-8">
                                <select name="Data2" class='form-control'>
                                <option value="">===== Pilih Barang? =====</option>
                                <?php
                                $query = mysqli_query($koneksi, "select * from barang WHERE NOT stock ='0'");
                                while ($data = mysqli_fetch_array($query)) {
                                    echo "<option  value='$data[id_barang]'>$data[nama_barang] --- Stock Barang $data[stock]</option>";
                                }
                                ?>
                            </select>
                                </div>
                                <div class="col-md-4">
                                        <input type="number" name="Data3" class="form-control" placeholder="Masukan Stock">
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea name="Data4" id="" cols="25" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="Data5" value="Belum Dikembalikan">
                        </div>
                        <div class="form-group">
                            <div class="#">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i></button>
                                <a class="btn btn-danger" href="data_peminjaman.php" role="button"><i class="fa fa-close"> </i></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<?php
include "footer.php";
?>