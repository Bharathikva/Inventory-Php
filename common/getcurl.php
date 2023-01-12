<?php
session_start();
function curlCall($url)
{
    $token = $_SESSION['token'];
    $curl = curl_init();

    curl_setopt_array($curl, array(
        // CURLOPT_URL => 'http://192.168.0.123:8080' . $url,
        CURLOPT_URL => 'http://192.168.0.173:9000'. $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: ' . $token
        ),
    ));
    $response = curl_exec($curl);
    return $response;
}
