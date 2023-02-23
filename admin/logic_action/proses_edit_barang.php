<?php
include "../../config/koneksi.php";

$id    = $_POST['id'];
$nama  = $_POST['Data1'];
$stock = $_POST['Data2'];
$ket   = $_POST['Data3'];

$a = "update barang set nama_barang='$nama', stock='$stock',keterangan='$ket' where id_barang='$id'";
$b = mysqli_query($koneksi, $a);
if ($b) {
    echo     "
    <script type='text/javascript'>
    setTimeout(function () { 
        swal({
            title: 'Data Berhasil Diubah!',
            dangerMode: false,
            type: 'success',
            icon: 'success',
            timer: 5000,
            showConfirmButton: true
            });  
            },10); 
            window.setTimeout(function(){ 
                window.location.replace('../layout/data_barang.php');
                } ,3000); 
                </script>";
} else {
    echo     "
                <script type='text/javascript'>
                setTimeout(function () { 
                    swal({
                        title: 'Data Gagal Disimpan!',
                        dangerMode: true,
                        type: 'danger',
                        icon: 'warning',
                        timer: 5000,
                        showConfirmButton: true
                        });  
                        },10); 
                        window.setTimeout(function(){ 
                            window.location.replace('../layout/data_barang.php');
                            } ,3000); 
                            </script>";
}
?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>