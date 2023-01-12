<?php
session_start();
    include 'common/allauth.php';
    // echo $_SESSION['token'];
    // die();
    include 'common/adminauth.php';
    include 'common/getcurl.php';
    $productsStr = curlCall('/api/products');

    $products = json_decode($productsStr);

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
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>

    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">

        <?php include 'sidemenu.php'; ?>
    </aside>
    <main class="main-wrap">
        <?php include 'header.php'; ?>

        <main id="main" class="main">
            <div class="container">
                <section class="section register max-vh-100 d-flex flex-column align-items-center justify-content-center py-6 mt-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12 d-flex flex-column align-items-center justify-content-center">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Add Product</h5>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="productName" class="col-12 col-form-label">Product Name</label>
                                                    <div class="col-12"> <input type="text" class="form-control" name="productName" id="productName"></div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="category" class="col-12 col-form-label">Category</label>
                                                    <div class="col-12">
                                                        <select class="form-select"  name="category" id="category">
                                                            <?php 
                                                            for ($i=0; $i < count($products) ; $i++) { 
                                                                ?>
                                                                <option value = "<?=$products[$i]->_id?>"><?=$products[$i]->category.' '?></option>
                                                                <?php 
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <label for="brand" class="col-12 col-form-label">brand</label>
                                                    <div class="col-12">
                                                        <select class="form-select"  name="brand" id="brand">
                                                            <?php 
                                                            for ($i=0; $i < count($products) ; $i++) { 
                                                                ?>
                                                                <option value = "<?=$products[$i]->_id?>"><?=$products[$i]->brand.' '?></option>
                                                                <?php 
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
            
                                                <div class="col-md-6">
                                                    <label for="sku" class="col-12 col-form-label">SKU</label>
                                                    <div class="col-12"> <input type="text" class="form-control" name="sku" id="sku"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="status" class="col-12 col-form-label">Status</label>
                                                    <div class="col-12">
                                                        <select class="form-select" aria-label="Default select example" name="status" id="status">
                                                            <option selected>Open</option>
                                                            <option>Closed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="description" class="col-12 col-form-label">Description</label>
                                                    <div class="col-12"> <textarea class="form-control" style="height: 10px" name="description" id="description"></textarea></div>
                                                </div>
                                                <div class="mt-3">
                                                    <button class="btn btn-primary me-3" onclick="addProduct()" type="button">Submit</button>
                                                    <a class="btn btn-outline-danger" type="button" href="productlist.php">Close</a>
                                                </div>
                                                <!-- <div class="col-12"> <button id="submit" type="button" class="btn btn-primary btn-submit" value="Submit">Submit</button></div> -->
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


<script>

function addProduct() {
        var productName = $('#productName').val();
        var category = $('#category').val();
        var brand = $('#brand').val();
        var sku = $('#sku').val();
        var description = $('#description').val();
        var status = $('#status').val();
        var productImage = $('#productImage').val();

    $.ajax({
        url : "common/action.php",
        type: "POST",
        data : {
            action: 'add-products',
            productName: productName,
            category: category,
            brand: brand,
            sku: sku,
            description: description,
            status: status,
            productImage: productImage,
        },
        success: function(data)
        {
            alert("Product added Successfully");
            window.location = "productlist.php";
        }
        });
}


</script>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
</body>

</html>