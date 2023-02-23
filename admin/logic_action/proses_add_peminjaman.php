<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<?php
include "../../config/koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d h:i:s', time());
$barang = $_POST['Data2'];
$stock = $_POST['Data3'];
$keterangan = $_POST['Data4'];
$status = $_POST['Data5'];
$nik = $_POST['id'];

$query_simpanan = "insert into peminjaman (id_peminjaman, tanggal_peminjaman, barang_pinjaman, keterangan, status, nik,stock)
                                        values(NULL,'$tanggal','$barang','$keterangan', '$status','$nik','$stock')";
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
                window.location.replace('../layout/data_peminjaman.php');
                } ,5000); 
                </script>";
} 

$query_anggota = mysqli_query($koneksi, "select * from barang where id_barang ='$barang'");
$stock_barang = mysqli_fetch_array($query_anggota);

$total_stock = $stock_barang['stock'];
$hitung = $total_stock - $stock;

$update_stock_barang = "update barang set stock ='$hitung' where id_barang='$barang'";
$query_hitung = mysqli_query($koneksi, $update_stock_barang);
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
</script>