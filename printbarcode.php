<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barcode</title>
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
          <h1>Barcode</h1>
      </div>
  </div>
  
  <section class="section dashboard">
      <div class="col-12">
          <div class="card top-selling overflow-auto">
             <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                   <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                   </li>
                   <li><a class="dropdown-item" href="#">Today</a></li>
                   <li><a class="dropdown-item" href="#">This Month</a></li>
                   <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
             </div>
             <div class="card-body">
                <h5 class="card-title">Barcode</h5>
                <table class="table table-borderless datatable">
                   <thead>
                      <tr>
                         <!-- <th><input type="checkbox" name="websitecheck" (click) = "checkuncheckall()"></th> -->
                         <th scope="col">Name</th>
                         <th scope="col">SKU</th>
                         <th scope="col">Quantity</th>
                         <th scope="col">Barcode</th>
                         <th scope="col">Paper Size</th>
                         <th scope="col">Delete</th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <!-- <td scope="row"><input type="checkbox" name="websitecheck" [checked]="isChecked"></td>  -->
                         <!-- <td><img src="assets/img/product-2.jpg" alt="" width="50px"></td> -->
                         <td>Apple</td>
                         <td>45544545</td>
                         <td>sdsdds</td>
                         <td>654666554</td>
                         <td style="width: 300px;">
                         <div class="row d-flex">
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                <option selected>36mm (1.4 inch)</option>
                                <option>12mm (1 inch)</option>
                                </select>
                            </div>
                            <div class="col">
                            <a href="" class="btn btn-primary" type="submit">Submit</a> 
                            </div>
                         </div>
                         
                                   
                         </td>
                         <td><a href=""><span><i class="bi bi-trash-fill fs-4 text-danger"></i></span></a></td>
                      </tr>
                      
                   </tbody> 
                </table>
             </div>
          </div>
       </div>
  </section>
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