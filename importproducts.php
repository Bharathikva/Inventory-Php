<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Products</title>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
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
       <div class="row mb-3 mt-3">
       <div class="col-md-6 pagetitle">
           <h1>Import Products</h1>
       </div>
       <div class="col-md-6 text-end">
       <button type="button" class="btn btn-outline-danger rounded">
           <span> <i class="bi bi-cloud-download-fill me-2"></i> </span> <span>Download Sample</span></button>
       </div>

       <div class="col-md-12 mt-3" >
       <div class="card p-3" style="text-align: -webkit-center;">
         <div class="card-body">
          <div class="drag-area">

        <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>

        <header>Drag & Drop to Upload File</header>

        <span>OR</span>

        <button>Browse File</button>

        <input type="file" hidden>

        </div>  
         </div>
         
       </div>
       <button type="button" class="btn btn-primary rounded me-3">
           <span> </span> <span>Submit</span></button>
       
       </div>

</div>

</main>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>