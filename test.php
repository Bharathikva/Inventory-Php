<?php
    
    /* API URL */
    $url = 'http://192.168.0.173:9000/api/category';
        
    /* Init cURL resource */
    $ch = curl_init($url);
        
    /* Array Parameter Data */
    $data = ['categoryDescription' => 'categoryDescription',
    'categoryName'=>  'categoryName',
    'categoryCode'=>  'categoryCode',
    'id' => 'id'
];
        
    /* pass encoded JSON string to the POST fields */
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        
    /* set the content type json */
    $headers = [];
    $headers[] = 'Content-Type:application/json';
    $token = "your_token";
    $headers[] = "Authorization: Bearer ".$token;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
    /* set return type json */
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
    /* execute request */
    $result = curl_exec($ch);
         
    /* close cURL resource */
    curl_close($ch);
  
?>