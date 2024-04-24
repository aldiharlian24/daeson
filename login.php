<!doctype html>
<?php
ob_start();
include "koneksi.php";
?>
<html lang="en">

<!-- Head -->
<head>
  <!-- Page Meta Tags-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">

  <!-- Custom Google Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
    rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/logo.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/logo.png">
  <link rel="mask-icon" href="./assets/images/favicon/logo.png" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="./assets/css/theme.bundle.css" />

  <!-- Fix for custom scrollbar if JS is disabled-->
  <noscript>
    <style>
      /**
          * Reinstate scrolling for non-JS clients
          */
      .simplebar-content-wrapper {
        overflow: auto;
      }
    </style>
  </noscript>

  <!-- Page Title -->
  <title>DAESON | Waskat Karya Metal</title>

</head>
<body class=" bg-light">

    <!-- Main Section-->
    <section
        class="mt-0 overflow-hidden  vh-100 d-flex justify-content-center align-items-center p-4">
        <!-- Page Content Goes Here -->

        <!-- Login Form-->
        <div class="col col-md-8 col-lg-6 col-xxl-5">
            <div class="shadow-xl p-4 p-lg-5 bg-white">
                <!-- Logo-->
                <a class="navbar-brand fw-bold fs-3 flex-shrink-0 order-0 align-self-center justify-content-center d-flex mx-0 px-0" href="./index.php">
                  <div class="d-flex align-items-center">
                    <img src ="./assets/images/favicon/logopjg.png" svg class="f-w-40" viewBox="0 0 77.53 72.26"><path d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z" fill="currentColor" fill-rule="evenodd"/></svg>
                  </div>
                </a>
                <!-- / Logo-->
                <h1 class="text-center fw-bold mb-5 fs-3">Login</h1>
                 <form method="POST">
                 <div class="form-group">
                      <label class="form-label">Username</label>
                      <input type="text" class="form-control" name="username" placeholder="Input Username">
                    </div>
                    <!--<div class="form-group">
                      <label class="form-label">No Telp</label>
                      <input type="text" class="form-control" name="telp" placeholder="Enter Your Telp">
                    </div>
                    <div class="form-group">
                      <label class="form-label">Email address</label>
                      <input type="email" class="form-control" name="email" placeholder="name@email.com">
                    </div>-->
                    <div class="form-group">
                      <label class="form-label d-flex justify-content-between align-items-center">
                        Password
                        <a href="./forgotten-password.php" class="text-muted small">Forgot your password?</a>
                      </label>
                      <input type="password" class="form-control" name="pw" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-dark d-block w-100 my-4" name="login" value="LOGIN">Login</button>
                </form>
                <p class="d-block text-center text-muted">New customer? <a class="text-muted" href="./register.php">Sign up for an account</a></p>
            </div>

        </div>
        </section>
        <!-- / Login Form-->
<?php		
if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$pw=$_POST['pw'];
		
		$cek_user=mysqli_query($koneksi,"SELECT * FROM user
		
								WHERE username='$username'");
								
		$listuser=mysqli_num_rows($cek_user);
		
		$kolom_user=mysqli_fetch_array($cek_user);
		if($listuser ==0)
			{
				echo "USERNAME SALAH";
			}
			
		else{
				if($pw !== $kolom_user['pw'])
					{
						echo "PASSWORD SALAH";
					}
				else{
						$_SESSION['id'] = $kolom_user['id'];
						$_SESSION['username'] = $kolom_user['username'];

						header('location:./dist/index.php');

					}
			}
								
	}
?>

        

        <!-- /Page Content -->
    
    <!-- / Main Section-->


    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>
</body>

</html>