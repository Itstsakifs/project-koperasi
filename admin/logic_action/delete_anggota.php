 <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
 <?php
	include "../../config/koneksi.php";
	//mengambil data dari URL
	if (isset($_GET['nik'])) {
		$nik = $_GET['nik'];
		$a = mysqli_query($koneksi, "delete from anggota where 
 		nik='$nik'");
		if ($a) {
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
 					window.location.replace('../layout/data_anggota.php');
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
 								window.location.replace('../layout/data_anggota.php');
 								} ,3000); 
 								</script>";
		}
	} else {
		echo "<h2>Anda Tidak Berhak mengakses halaman ini, silahkan <a href='../layout/index.php'>login</a> dahulu</h2>";
	}
	?>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
 </script>