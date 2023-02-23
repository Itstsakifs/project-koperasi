 <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

 <?php
	include "../../config/koneksi.php";
	$nik = $_POST['nik'];
	$nama_anggota = $_POST['nama_anggota'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	$total_tabungan = $_POST['total_tabungan'];
	if (empty($nama_anggota)) {
		echo "<div class='alert alert-warning alert-dismissable'>
 	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
 	Nama_anggota nama_anggota Harus diisi!
 	</div>";
	} else {
		$a = mysqli_query($koneksi, "select * from anggota where 
 		nama_anggota='$nama_anggota'");
		$b = mysqli_num_rows($a);
		$sql = "insert into anggota (nik, nama_anggota, jenis_kelamin, alamat, no_hp, total_tabungan)
 	values('$nik','$nama_anggota','$jenis_kelamin','$alamat','$no_hp','$total_tabungan')";
		$query = mysqli_query($koneksi, $sql);
		if ($query) {
			echo     "
 		<script type='text/javascript'>
 		setTimeout(function () { 
 			swal({
 				title: 'Data Berhasil Disimpan!',
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
	}
	mysqli_query($query)
	?>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
 </script>