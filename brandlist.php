<?php
 session_start(); 
    include 'common/allauth.php';
    include 'common/getcurl.php';

    $getbrands = curlCall('/api/brands');

    $brands = json_decode($getbrands);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
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
          <h1>Brand List</h1>
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
                   <assets/js/main.js"></script>li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
             </div>
             <div class="card-body">
                <h5 class="card-title">Brands</h5>
                <table id="myTable" class="table table-striped table-borderless datatable">
                    <thead class="shadow-sm"> 
                      <tr>
                         <!-- <th><input type="checkbox" name="websitecheck" (click) = "checkuncheckall()"></th> -->
                         <th scope="col">Brand Name</th>
                         <th scope="col">Brand Image</th>
                         <th scope="col">Brand Description</th>
                        
                         <!-- <th scope="col">Action</th> -->
                      </tr>
                   </thead>
                   <tbody>
                   <?php
                                    for ($i=0; $i < count($brands) ; $i++) { 
                                       ?>
                      <tr>
                      <td><?=$brands[$i]->brandName?></td>
                      <td><?=$brands[$i]->brandImage?></td>
                      <td><?=$brands[$i]->brandDescription?></td>
                      
                  
                      </tr>
                      <?php
                                    }
                                ?>
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

  <script>
                $(document).ready( function () {
                    $('#myTable').DataTable();
                } );
        </script>  
</body>
</html>