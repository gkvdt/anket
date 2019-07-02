<?php
include 'settings/init.php';

session_start();

$query = $db->query('SELECT * FROM users', PDO::FETCH_ASSOC);
$result = $query->fetch();
$_SESSION['user'] = $result['user_email'];

?>

<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="RealEstate, Admin, Dashboard, template, UI kit, RealEstate Admin, Bootstrap 4x">
    <meta name="author" content="Thememakker">

    <title>:: Sultan's :: Survey</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="light/assets/css/main.css">
    <link rel="stylesheet" href="light/assets/css/costum.css">
    <link rel="stylesheet" href="light/assets/css/color_skins.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"/>
</head>
<body class="theme-purple">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="https://thememakker.com/templates/oreo/realestate/html/assets/images/logo.svg" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
<nav class="navbar p-l-5 p-r-5">
    <ul class="nav navbar-nav navbar-left">
        <li>
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href=""><img src="assets/sultans/logo180.png" width="30" alt="Oreo"><span class="m-l-10">Sultan's Survey</span></a>
            </div>
        </li>


    </ul>
</nav>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">


    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image"><a href="profile.html"><img src="assets/sultans/logo180.png" alt="User"></a></div>
                            <div class="detail">

                            </div>

                        </div>
                    </li>


                    <div class="tab-pane stretchLeft" id="user">
                        <div class="menu">

                        </div>
                    </div>
            </div>
</aside>

<!-- Right Sidebar -->
<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">

            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">


            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card" style="background-image:url('assets/sultans/bodybg.jpg');">
                    <div class="body" >

