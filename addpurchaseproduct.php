
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Purchase product</title>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CNunito:300,300i,400,400i,600,600i,700,700i%7CPoppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- Main CSS File -->
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
    <div class="container">
        <section class="section register max-vh-100 d-flex flex-column align-items-center justify-content-center py-6 mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center">
                    <div class="card mb-3">
                        <div class="card-body">
                        <h5 class="card-title">Add Purchase Product</h5>
                    <form>
                        <div class="row">
                             
                             <div class="col-md-6">
                                <label for="productName" class="col-12 col-form-label">Product name</label>
                                <div class="col-12"> <input type="text" class="form-control" name="productName" id="productName"></div>
                             </div>
                             <div class="col-md-6">
                                <label for="quantity" class="col-12 col-form-label">Quantity</label>
                                <div class="col-12"> <input type="text" class="form-control" name="quantity" id="quantity"></div>
                             </div>
                             <div class="col-md-6">
                                <label for="unit" class="col-12 col-form-label">Unit</label>
                                <div class="col-12"> <input type="text" class="form-control" name="unit" id="unit"></div>
                             </div>
                             <div class="col-md-6">
                                <label for="price" class="col-12 col-form-label">Price</label>
                                <div class="col-12"> <input type="text" class="form-control" name="price" id="price"></div>
                             </div>
                             <div class="col-md-6">
                                <label for="total" class="col-12 col-form-label">Total</label>
                                <div class="col-12"> <input type="text" class="form-control" name="total" id="total"></div>
                             </div>
                             <div class="col-md-6">
                                <label for="description" class="col-12 col-form-label">Description</label>
                                <div class="col-12">  <textarea class="form-control" style="height: 10px" name="description" id="description"></textarea></div>
                             </div>
                             <div class="mt-3">
                                <button class="btn btn-primary me-3" type="submit">Submit</button>
                                <a class="btn btn-outline-danger" type="submit" href="purchaselist.php">Cancel</a>
                            </div>
                        </div>
                    </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </main>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>