<?php
session_start();
    include 'allauth.php';
    // echo $_SESSION['token'];
    // die();
?>
<script>
    function newClick(){
        
        console.log(window.localStorage.getItem('token'));
        
    }
    //   <button onclick="newClick()">button</button>
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    
<div class="screen-overlay"></div>
        <aside class="navbar-aside" id="offcanvas_aside">
            
            <?php include 'sidemenu.php';?>
  </aside>
        <main class="main-wrap">
        <?php include 'header.php';?>

        <main id="main" class="main">
        <div class="pagetitle">
          <h1>Dashboard</h1>
          <p>Welcome to Dashboard</p>
          
        </div><!-- End Page Title -->
        </main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>