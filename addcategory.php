<?php
session_start();
// echo $_SESSION['token'];
include 'common/adminauth.php';
include 'common/allauth.php';
include 'common/getcurl.php';

$getcategory = curlCall('/api/categories');

$category = json_decode($getcategory);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
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
                                        <h5 class="card-title">Add Category</h5>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="categoryname" class="col-12 col-form-label">Category Name</label>
                                                    <div class="col-12"> <input type="text" class="form-control" name="categoryname" id="categoryname"></div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="categorycode" class="col-12 col-form-label">Category Code</label>
                                                    <div class="col-12"> <input type="text" class="form-control" name="categorycode" id="categorycode"></div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="description" class="col-12 col-form-label">Description</label>
                                                    <div class="col-12"> <textarea class="form-control" style="height: 10px" name="description" id="description"></textarea></div>
                                                </div>
                                                <div class="mt-3">
                                                    <button class="btn btn-primary me-3" onclick="addCategory()" type="submit">Submit</button>
                                                    <a class="btn btn-outline-danger" type="button" href="categorylist.php">Close</a>
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

        <script>
            function addCategory() {
                var categoryName = $('#categoryName').val();
                var categoryCode = $('#categoryCode').val();
                var description = $('#description').val();

                $.ajax({
                    url: "common/action.php",
                    type: "POST",
                    data: {
                        action: 'add-categories',
                        categoryName: categoryName,
                        categoryCode: categoryCode,
                        description: description,
                    },
                    success: function(data) {
                        alert("Category added Successfully");
                        window.location = "categorylist.php";
                    }
                });
            }
        </script>

        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/main.js"></script>
</body>

</html>