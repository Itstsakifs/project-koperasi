<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Koprasi Simpan Pinjam! | </title>
    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="assets/vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- toster -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo     "
      <script type='text/javascript'>
      setTimeout(function () { 
       swal({
        title: 'Username Atau Password Yang Anda Inputkan Salah!',
        dangerMode: true,
        type: 'danger',
        icon: 'warning',
        timer: 5000,
        showConfirmButton: true
        });  
        },10); 
        window.setTimeout(function(){ 
          window.location.replace('index.php');
          } ,3000); 
          </script>";
        }
    }
    ?>
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <h1>Sistem Koprasi Simpan Pinjam</h1>
                    <form action="validasi_login.php" method="POST">
                        <div>
                            <input type="text" name="username" class="form-control" placeholder="Username"
                                required="" />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="Password"
                                required="" />
                        </div>
                        <br />
                        <div>
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            </p>
                            <div class="clearfix"></div>
                            <br />
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
    </script>
</body>

</html>