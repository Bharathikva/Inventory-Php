<?php
session_start();
// echo $_SESSION['token'];

include 'common/allauth.php';
include 'common/getcurl.php';

$getmanufacturer = curlCall('/api/manufacturers');
$manufacturer = json_decode($getmanufacturer);
?>
<div class="screen-overlay"></div>
<aside class="navbar-aside" id="offcanvas_aside">
   <?php include 'sidemenu.php'; ?>
</aside>
<main class="main-wrap">
   <?php include 'header.php'; ?>
   <main id="main" class="main">
      <div class="row mb-3 mt-3">
         <div class="col-md-6 pagetitle">
            <h1>Manufacturer List</h1>
         </div>
         <div class="col-md-6 text-end">
            <a type="button" class="btn btn-outline-danger rounded" href="addmanufacturer.php">
               <span> <i class="bi bi-plus-circle-fill me-2"></i> </span> <span>Add Manufacturer</span></a>
         </div>
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
                  <h5 class="card-title">Manufacturer list</h5>
                  <table id="myTable" class="table table-striped table-borderless datatable">
                    <thead class="shadow-sm"> 
                        <tr>
                           <th scope="col">Company Name</th>
                           <th scope="col">Location</th>
                           <th scope="col">Phone Number</th>
                           <th scope="col">Email</th>
                           <!-- <th scope="col">Action</th> -->
                        </tr>
                     </thead>
                     <tbody>
                     <?php
                                    for ($i=0; $i < count($manufacturer) ; $i++) { 
                                       ?>
                        <tr>
                        <td><?=$manufacturer[$i]->companyName?></td>
                      <td><?=$manufacturer[$i]->location?></td>
                      <td><?=$manufacturer[$i]->phone?></td>
                      <td><?=$manufacturer[$i]->email?></td>
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