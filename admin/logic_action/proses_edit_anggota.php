<?php
include "../../config/koneksi.php";
$nik = $_POST['nik'];
$nama_anggota = $_POST['nama_anggota'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$total_tabungan = $_POST['total_tabungan'];
$a = "update anggota set nik='$nik', nama_anggota='$nama_anggota',jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', total_tabungan='$total_tabungan' where nik='$nik'";
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
                window.location.replace('../layout/data_anggota.php');
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
                            window.location.replace('../layout/data_anggota.php');
                            } ,3000); 
                            </script>";
}
?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>