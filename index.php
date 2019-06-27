<?php

include "settings/init.php";
session_start();



if (@post('send')) {
    $query = $db->query("SELECT * FROM users", PDO::FETCH_ASSOC);
    $result = $query->fetch();
    $_SESSION['user'] = $result['user_email'];

    if (post('admin_username') == $result['user_email'] && post('admin_password') == $result['user_password']) {
        $_SESSION['user'] = $result['user_mail'];
        header("Location: language.php");
    } else {
        echo "<div class=\"alert alert-danger\"> 
               <strong>OppS!</strong> you have to fill in all fields!.
               </div> ";
    }

}

?>


<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="RealEstate, Admin, Dashboard, template, UI kit, RealEstate Admin, Bootstrap 4x">
    <meta name="author" content="Mehmet Kucuk Muart Web">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Sultan's Steak House :: Survey</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="light/assets/css/main.css">
    <link rel="stylesheet" href="light/assets/css/authentication.css">
    <link rel="stylesheet" href="light/assets/css/color_skins.css">
</head>

<body class="theme-purple authentication sidebar-collapse">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
    <div class="container">
        <div class="navbar-translate n_logo">
            <a class="navbar-brand" href="javascript:void(0);" title="" target="_blank">Sultan's Survey Login</a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" title="Follow us on Twitter" href="javascript:void(0);" target="_blank">
                        <i class="zmdi zmdi-twitter"></i>
                        <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Like us on Facebook" href="javascript:void(0);" target="_blank">
                        <i class="zmdi zmdi-facebook"></i>
                        <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Follow us on Instagram" href="javascript:void(0);" target="_blank">
                        <i class="zmdi zmdi-instagram"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="page-header">
    <div class="page-header-image" style="background-image:url(assets/images/login.jpg)"></div>
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" method="post" action="" name="">
                    <div class="header">
                        <div class="logo-container">
                            <img src="assets/sultans/logo.png"  alt="">
                        </div>
                        <h5>Wellcome To Sultan's Survey</h5>
                    </div>
                    <div class="content">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Username" name="admin_username">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group">
                            <input type="password" placeholder="Password" class="form-control" name="admin_password" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <button class="btn btn-primary btn-lg" name="send" type="submit" value="1">SIGN IN</button>



                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">

            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>,
                <span>Development  <a href="http://muart.net" target="_blank">Muart Web & Design</a></span>
            </div>
        </div>
    </footer>
</div>

<!-- Jquery Core Js -->
<script src="light/assets/bundles/libscripts.bundle.js"></script>
<script src="light/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script>
    $(".navbar-toggler").on('click',function() {
        $("html").toggleClass("nav-open");
    });
    //=============================================================================
    $('.form-control').on("focus", function() {
        $(this).parent('.input-group').addClass("input-group-focus");
    }).on("blur", function() {
        $(this).parent(".input-group").removeClass("input-group-focus");
    });
</script>
</body>


</html>




