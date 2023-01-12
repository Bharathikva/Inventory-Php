<?php

session_start();

echo $_SESSION['token'];
include 'common/allauth.php';
include 'common/getcurl.php';

$getproducts = curlCall('/api/products');

$name   = $_GET['productName'];
$id     = $_GET['category'];
$Brand   = $_GET['brand'];
$Uniqueid     = $_GET['uniqueid'];
$Sku   = $_GET['sku'];
$Description     = $_GET['description'];
$Status     = $_GET['status'];
$ProductImage     = $_GET['productImage'];
$token = $_GET['token'];
// var_dump($name);

$products = json_decode($getproducts);
?>


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
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">

        <?php include 'sidemenu.php'; ?>
    </aside>
    <main class="main-wrap">
        <?php include 'header.php'; ?>
        <main id="main" class="main">
            <div class="row mb-3 mt-3">
                <div class="col-md-6 pagetitle">
                    <h1>Product List</h1>
                </div>
                <div class="col-md-6 text-end">
                    <a type="button" class="btn btn-outline-danger rounded" href="addproduct.php">
                        <span> <i class="bi bi-plus-circle-fill me-2"></i> </span> <span>Add New Product</span></a>
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
                            <h5 class="card-title">Products</h5>
                            <table id="myTable" class="table table-striped table-borderless datatable">
                    <thead class="shadow-sm"> 
                                    <tr>
                                        <th scope="col">ProductName</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Brand</th>
                                        <th scope="col">Uniqueid</th>
                                        <th scope="col">Sku</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">ProductImage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($i = 0; $i < count($products); $i++) {
                                    ?>

                                        <tr>
                                            <td><?= $products[$i]->productName ?></td>
                                            <td><?= $products[$i]->category ?></td>
                                            <td><?= $products[$i]->brand ?></td>
                                            <td><?= $products[$i]->uniqueid ?></td>
                                            <td><?= $products[$i]->sku ?></td>
                                            <td><?= $products[$i]->description ?></td>
                                            <td><?= $products[$i]->status ?></td>
                                            <td><?= $products[$i]->productImage ?></td>

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
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
</body>

</html>