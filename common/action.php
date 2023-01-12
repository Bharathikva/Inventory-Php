<?php
session_start();
$curl = curl_init();
$action = $_REQUEST['action'];
switch ($action) {
    case 'login':

        $username      = $_POST['username'];
        $password   = $_POST['password'];
        $token = $_POST['token'];
        $data       = '{"username" : "' . $username . '","password" : "' . $password . '"}';
        $res        = curnCall($data, '/api/user/login', $token);
        $res       = json_decode($res);
        if ($res->token) {
            $_SESSION['username']      = $res->username;
            $_SESSION['token']      = $res->token;
            echo '{"status" : "success"}';
        } else {
            echo '{"status" : "fail", "message" : "Invalid credentials"}';
        }
        break;

    case 'add-products':

        $productName      = $_POST['productName'];
        $category      = $_POST['category'];
        $brand      = $_POST['brand'];
        $sku      = $_POST['sku'];
        $description      = $_POST['description'];
        $status      = $_POST['status'];
        $productImage      = $_POST['productImage'];

        $data       = '{"productName" : "' . $productName . '","category" : "' . $category . '","brand" : "' . $brand . '","sku" : "' . $sku . '","description" : "' . $description . '","status" : "' . $status . '"}';        
        $token = $_SESSION['token'];
        $res        = curnCall($data, '/api/product', $token);
        echo $res = '{"status" :"success" , "message" : "Product added Successfully"}';
        break;

    case 'add-categories':

        $categoryName      = $_POST['categoryName'];
        $categoryCode      = $_POST['categoryCode'];
        $description      = $_POST['description'];

        $data       = '{"categoryName" : "' . $categoryName . '","categoryCode" : "' . $categoryCode . '", "description" : "' . $description . '"}';
        $token = $_SESSION['token'];
        $res        = curnCall($data, '/api/category', $token);
        echo $res = '{"status" :"success" , "message" : "Category added Successfully"}';
        break;

    case 'add-manufacturer':

        $companyName      = $_POST['companyName'];
        $location      = $_POST['location'];
        $phone      = $_POST['phone'];
        $email      = $_POST['email'];
        $website      = $_POST['website'];
        $establishment      = $_POST['establishment'];
        $brand      = $_POST['brand'];

        $data       = '{"companyName" : "' . $companyName . '","location" : "' . $location . '","phone" : "' . $phone . '","email" : "' . $email . '","website" : "' . $website . '","establishment" : "' . $establishment . '","brand" : "' . $brand . '"}';
        $token = $_SESSION['token'];
        $res        = curnCall($data, '/api/manufacturer', $token);
        // var_dump($res);
        break;

    case 'add-vendors':

        $companyName      = $_POST['companyName'];
        $vendorAddress      = $_POST['vendorAddress'];
        $vendorEmail      = $_POST['vendorEmail'];
        $vendorContactNumber      = $_POST['vendorContactNumber'];
        $website      = $_POST['website'];
        $GSTIN      = $_POST['GSTIN'];
        $contactPersonName      = $_POST['contactPersonName'];
        $emailAddress      = $_POST['emailAddress'];
        $workContactNumber      = $_POST['workContactNumber'];
        $personalContactNumber      = $_POST['personalContactNumber'];
        $designation      = $_POST['designation'];
        $data       = '{"companyName" : "' . $companyName . '","vendorAddress" : "' . $vendorAddress . '","vendorEmail" : "' . $vendorEmail . '","vendorContactNumber" : "' . $vendorContactNumber . '","website" : "' . $website . '","GSTIN" : "' . $GSTIN . '","contactPersonName" : "' . $contactPersonName . '", "emailAddress" : "' . $emailAddress . '", "workContactNumber" : "' . $workContactNumber . '", "personalContactNumber" : "' . $personalContactNumber . '", "designation" : "' . $designation . '"}';
        $token = $_SESSION['token'];
        $res        = curnCall($data, '/api/vendor', $token);
        // echo $res = '{"status" :"success" , "message" : "Vendor added Successfully"}';
        break;

    case 'add-purchase':

        $companyName      = $_POST['companyName'];
        $location      = $_POST['location'];
        $phone      = $_POST['phone'];
        $email      = $_POST['email'];
        $website      = $_POST['website'];
        $establishment      = $_POST['establishment'];
        $brand      = $_POST['brand'];
        $data       = '{"companyName" : "' . $companyName . '","location" : "' . $location . '","phone" : "' . $phone . '","email" : "' . $email . '","website" : "' . $website . '","establishment" : "' . $establishment . '","brand" : "' . $brand . '"}';
        $token = $_SESSION['token'];
        $res        = curnCall($data, '/api/vendors', $token);
        // var_dump($res);
        // $_SESSION['token'] = $res . $token;

        break;
}

function curnCall($data, $url, $token)
{
    $header = ['Content-Type: application/json'];
    if ($token != "") {
        array_push($header, "Authorization:" . $token);
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://192.168.0.173:9000' . $url,
        // CURLOPT_URL => 'http://192.168.0.123:8080'.$url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => $header,
    ));

    $response = curl_exec($curl);
    return $response;
    // echo json_encode($response);
}
