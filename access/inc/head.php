<?php
require '../directories.php';

if (isset($_GET['logout'])) {
    if (isset($_SESSION['isLoggedIn'])) {
        unset($_SESSION['isLoggedIn']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_id']);

        redirect('access/login.php');
    }
}


// if (!isset($_SESSION['isLoggedIn'])) {
//   redirect('login.php');
// }


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="courier Logistics Shipping Transport Air Land ">
    <?php include "links.php"; ?>
    <title>
        <?= SITENAME ?> - Invoice
    </title>
</head>

<body class="bg-white content">