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
                    <h2>Add New Angota</h2>
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
                    <form action="../logic_action/proses_add_anggota.php" method="POST"
                        class="form-horizontal form-label-left" novalidate>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">NIK</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input type="text" name="nik" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input type="text" name="nama_anggota" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Jenis Kelamin</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <div class="form-control">
                                    <input type="radio" name="jenis_kelamin" value="Laki-laki"
                                        required="required">Laki-laki
                                    <input type="radio" name="jenis_kelamin" value="Perempuan"
                                        required="required">Perempuan
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Alamat</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">No Telp</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input type="text" name="no_hp" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Tabungan</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input type="number" name="total_tabungan" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i></button>
                                <button type="cancel" class="btn btn-danger"><i class="fa fa-close"></i>
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