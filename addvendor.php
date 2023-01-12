<?php
session_start();
 include 'common/allauth.php';
include 'common/adminauth.php';
include 'common/getcurl.php';
$getvendor = curlCall('/api/vendors');

$vendor = json_decode($getvendor);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Vendor</title>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CNunito:300,300i,400,400i,600,600i,700,700i%7CPoppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
                                        <h5 class="card-title">Add Vendor</h5>
                                        <form>
                                            <div class="row">
                                            <div class="col-md-6">
                                                    <label for="companyName" class="col-12 col-form-label">companyName</label>
                                                    <div class="col-12">
                                                        <select class="form-select"  name="companyName" id="companyName">
                                                            <?php 
                                                            for ($i=0; $i < count($vendor) ; $i++) { 
                                                                ?>
                                                                <option value = "<?=$vendor[$i]->_id?>"><?=$vendor[$i]->companyName.' '?></option>
                                                                <?php 
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <label for="vendorAddress" class="col-12 col-form-label">Vendor Address</label>
                                                    <div class="col-12"> <input type="text" class="form-control" name="vendorAddress" id="vendorAddress"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="vendorEmail" class="col-12 col-form-label">Vendor Email</label>
                                                    <div class="col-12"> <input type="email" class="form-control" name="vendorEmail" id="vendorEmail"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="vendorNumber" class="col-12 col-form-label">Vendor Contact Number</label>
                                                    <div class="col-12"> <input type="phone" class="form-control" name="vendorNumber" id="vendorContactNumber"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="website" class="col-12 col-form-label">Website</label>
                                                    <div class="col-12"> <input type="phone" class="form-control" name="website" id="website"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="GSTIN" class="col-12 col-form-label">Company GSTIN</label>
                                                    <div class="col-12"> <input type="text" class="form-control" name="GSTIN" id="GSTIN"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="contactPerson" class="col-12 col-form-label">Contact person name</label>
                                                    <div class="col-12"> <input type="text" class="form-control" name="contactPerson" id="contactPersonName"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="personEmail" class="col-12 col-form-label">Person Email</label>
                                                    <div class="col-12"> <input type="email" class="form-control" name="personEmail" id="emailAddress"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="workNumber" class="col-12 col-form-label">Person Work Number</label>
                                                    <div class="col-12"> <input type="phone" class="form-control" name="workNumber" id="workContactNumber"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="personalNumber" class="col-12 col-form-label">Person Personal Number</label>
                                                    <div class="col-12"> <input type="phone" class="form-control" name="personalNumber" id="personalContactNumber"></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="designation" class="col-12 col-form-label">Designation</label>
                                                    <div class="col-12"> <input type="phone" class="form-control" name="designation" id="designation"></div>
                                                </div>
                                                <!-- <div class="mt-3"> -->
                                                <!-- <button class="btn btn-primary me-3" id="submit" type="submit">Submit</button>
                                <a class="btn btn-outline-danger" type="submit" href="vendorslist.php">Close</a> -->
                                                <!-- </div> -->
                                                <div class="mt-3">
                                                    <button class="btn btn-primary me-3" onclick="addVendor()" type="button">Submit</button>
                                                    <a class="btn btn-outline-danger" type="button" href="vendorslist.php">Close</a>
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
            function addVendor() {
                var companyName = $('#companyName').val();
                var vendorAddress = $('#vendorAddress').val();
                var vendorEmail = $('#vendorEmail').val();
                var vendorContactNumber = $('#vendorContactNumber').val();
                var website = $('#website').val();
                var GSTIN = $('#GSTIN').val();
                var contactPersonName = $('#contactPersonName').val();
                var emailAddress = $('#emailAddress').val();
                var workContactNumber = $('#workContactNumber').val();
                var personalContactNumber = $('#personalContactNumber').val();
                var designation = $('#designation').val();

                $.ajax({
                    url: "common/action.php",
                    type: "POST",
                    data: {
                        action: 'add-vendors',
                        companyName: companyName,
                        vendorAddress: vendorAddress,
                        vendorEmail: vendorEmail,
                        vendorContactNumber: vendorContactNumber,
                        website: website,
                        GSTIN: GSTIN,
                        contactPersonName: contactPersonName,
                        emailAddress: emailAddress,
                        workContactNumber: workContactNumber,
                        personalContactNumber: personalContactNumber,
                        designation: designation
                    },
                    success: function(data) {
                        alert("Vendor added Successfully");
                        window.location = "vendorslist.php";
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