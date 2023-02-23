  <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <?php
  session_start();
  include "../config/koneksi.php";
  $username = $_POST['username'];
  $password = $_POST['password'];

  $login = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password' ");
  $cek = mysqli_num_rows($login);

  if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);
    if ($data['level'] == "Admin") {
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "Admin";
      header("location:layout/data_anggota.php");
    } else if ($data['level'] == "Anggota") {
      $_SESSION['username'] = $username;
      $_SESSION['level'] = "Anggota";
      header("location:../anggota/layout/data_peminjaman.php");
    } else {
      header("location:index.php?pesan=gagal");
    }
  } else {
    header("location:index.php?pesan=gagal");
  }