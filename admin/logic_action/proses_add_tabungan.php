<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<?php
include "../../config/koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('Y-m-d h:i:s', time());
$nominal = $_POST['nominal_simpanan'];
$keterangan = $_POST['keterangan'];
$nik = $_POST['nik'];

$query_simpanan = "insert into simpanan(id_simpanan, tanggal_menabung, nominal_simpanan, keterangan, nik)
                                        values(NULL,'$tanggal','$nominal','$keterangan','$nik')";
$query_tampung = mysqli_query($koneksi, $query_simpanan);
if ($query_tampung) {
    echo "<script type='text/javascript'>
    setTimeout(function () { 
        swal({
            title: 'Data Simpanan Berhasil Disimpan dan Jumlah Tabungan Sudah Terupdate, Silahkan Cek Tabungan Anda!',
            dangerMode: false,
            type: 'success',
            icon: 'success',
            timer: 5000,
            showConfirmButton: true
            });  
            },10); 
            window.setTimeout(function(){ 
                window.location.replace('../layout/data_tabungan.php');
                } ,3000); 
                </script>";
} else {
    echo "<script type='text/javascript'>
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
                window.location.replace('../layout/data_tabungan.php');
                } ,3000); 
                </script>";
}
$query_anggota = mysqli_query($koneksi, "select total_tabungan from anggota where nik='$nik'");
$data_anggota = mysqli_fetch_array($query_anggota);

$tabungan_anggota = $data_anggota['total_tabungan'];
$hitung = $nominal + $tabungan_anggota;
$update_tabungan_anggota = "update anggota set total_tabungan='$hitung' where nik='$nik'";
$query_hitung = mysqli_query($koneksi, $update_tabungan_anggota);
?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
</script>