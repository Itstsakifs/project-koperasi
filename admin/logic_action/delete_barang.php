<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<?php
	include "../../config/koneksi.php";
    $id = $_GET["id"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM barang WHERE id_barang='$id' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if ($hasil_query) {
        echo "<script type='text/javascript'>setTimeout(function () { 
        swal({
            title: 'Data Berhasil Dihapus!',
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
        echo "<script type='text/javascript'>setTimeout(function () { 
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
 </script>
