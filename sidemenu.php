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
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="productlist.php">
          <i class="bi bi-circle"></i><span>Product List</span>
        </a>
      </li>
      <li>
        <a href="categorylist.php">
          <i class="bi bi-circle"></i><span>Category List</span>
        </a>
      </li>
      <li>
        <a href="brandlist.php">
          <i class="bi bi-circle"></i><span>Brand List</span>
        </a>
      </li>
      <li>
        <a href="importproducts.php">
          <i class="bi bi-circle"></i><span>Import Products</span>
        </a>
      </li>
      <li>
        <a href="printbarcode.php">
          <i class="bi bi-circle"></i><span>Print Barcode</span>
        </a>
      </li>
    </ul>
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link " href="vendorslist.php">
    <i class="bi bi-person-check fs-5"></i>
      <span>Vendors</span>
    </a>
  </li><!-- End Vendors Nav -->

  <li class="nav-item">
    <a class="nav-link " href="manufacturerlist.php">
    <i class="bi bi-people fs-5"></i>
      <span>Manufacturer</span>
    </a>
  </li><!-- End Manufacturer Nav -->

  <li class="nav-item">
    <a class="nav-link " href="purchaselist.php">
    <i class="bi bi-bag-heart"></i>
      <span>Purchase</span>
    </a>
  </li><!-- End Purchase Nav -->
</ul>

</aside><!-- End Sidebar-->



  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>


