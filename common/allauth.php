<?php
include 'common/session.php';
$token = isset($_SESSION['token']) ? $_SESSION['token'] : '';
if($token == '')
{
    // header("Location: login.php"); 
    // exit();
}
