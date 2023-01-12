<?php
session_start();
// echo $_SESSION['token'];
// die();
include 'common/allauth.php';
include 'common/adminauth.php';
include 'common/getcurl.php';
$getmanufacturer = curlCall('/api/manufacturers');

$manufacturer = json_decode($getmanufacturer);

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
                                        <h5 class="card-title">Add Manufacturer</h5>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="inputCompany" class="col-12 col-form-label">CompanyName</label>
                                                    <div class="col-12"> <input type="text" class="form-control" name="companyName" id="companyName"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputLocation" class="col-12 col-form-label">Location</label>
                                                    <div class="col-12"> <input type="text" class="form-control" name="location" id="location"></div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="inputEmail" class="col-12 col-form-label">Email</label>
                                                    <div class="col-12"> <input type="email" class="form-control" name="email" id="email"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputwebsite" class="col-12 col-form-label">Website</label>
                                                    <div class="col-12"> <input type="text" class="form-control" name="website" id="website"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputEstablishment" class="col-12 col-form-label">Establishment</label>
                                                    <div class="col-12"> <input type="text" class="form-control" name="establishment" id="establishment"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputBrand" class="col-12 col-form-label">Brand</label>
                                                    <div class="col-12"> <input type="text" class="form-control" name="brand" id="brand"></div>
                                                </div>
                                                <div class="mt-3">
                                                    <button class="btn btn-primary me-3" onclick="addManufacturer()" type="button">Submit</button>
                                                    <a class="btn btn-outline-danger" type="button" href="manufacturerlist.php">Close</a>
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
            function addManufacturer() {
                var companyName = $('#companyName').val();
                var location = $('#location').val();
                var phone = $('#phone').val();
                var email = $('#email').val();
                var website = $('#website').val();
                var establishment = $('#establishment').val();
                var brand = $('#brand').val();
                $.ajax({
                    url: "common/action.php",
                    type: "POST",
                    data: {
                        action: 'add-manufacturer',
                        companyName: companyName,
                        location: location,
                        phone: phone,
                        email: email,
                        website: website,
                        establishment: establishment,
                        brand: brand
                    },
                    success: function(data) {
                        alert("Manufacturer added Successfully");
                        window.location = "manufacturerlist.php";
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