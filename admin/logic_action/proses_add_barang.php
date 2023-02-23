<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<?php
include "../../config/koneksi.php";

$id    = $_POST['id'];
$nama  = $_POST['Data1'];
$stock = $_POST['Data2'];
$ket   = $_POST['Data3'];


$query_simpanan = "insert into barang (id_barang, nama_barang, stock, keterangan )
                                        values('$id','$nama','$stock','$ket')";
$query_tampung = mysqli_query($koneksi, $query_simpanan);

if ($query_tampung) {
    echo "<script type='text/javascript'>
    setTimeout(function () { 
        swal({
            title: 'Data Peminjaman Berhasil Disimpan dan Jumlah Tabungan Sudah Terupdate, Silahkan Cek Tabungan Anda!',
            dangerMode: false,
            type: 'success',
            icon: 'success',
            timer: 5000,
            showConfirmButton: true
            });  
            },10); 
            window.setTimeout(function(){ 
                window.location.replace('../layout/data_barang.php');
                } ,5000); 
                </script>";
} 

?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
</script>