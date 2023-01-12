<?php
include 'common/session.php';
$token = isset($_SESSION['token']) ? $_SESSION['token'] : '';
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
if ($token == '' || $username != "") {
    // header("Location: login.php"); 
    // exit();
}
