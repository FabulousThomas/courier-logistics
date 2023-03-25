<?php
require  '../directories.php';

if (isset($_GET['logout'])) {
    if (isset($_SESSION['isLoggedIn'])) {
        unset($_SESSION['isLoggedIn']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_id']);

        redirect('login.php');
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="courier Logistics Shipping Transport Air Land ">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap-5.2.3.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flat-icons@1.0.0/creative.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/dashboard.css" />
    <link rel="stylesheet" href="./assets/css/print.css" media="print">

    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo/logo.png">
    <title><?= SITENAME ?> - Invoice</title>
</head>

<body class="bg-white content">