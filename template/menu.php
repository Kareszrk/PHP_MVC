<!doctype html>
<html lang="zxx">
<head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap.Min.CSS  -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Owl.Carousel.Min.CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Owl.Theme.Default.Min.CSS -->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Animate.CSS -->
		    <link rel="stylesheet" href="assets/css/animate.css">
        <!-- Flaticon.CSS -->
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <!-- Font-Awesome.CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!-- Magnific-Popup.CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">

        <!-- Style.CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive.CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon.jpg">

        <!-- TITLE -->
        <title>GalaxyCoin - Safest Anonymous CryptoCurrency System</title>
    </head>

    <body class="home-two-body" data-spy="scroll" data-offset="70">
        <!-- Start Preloader Section -->
        <div class="preloader">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
        <!-- End Preloader Section -->

        <!-- Start Navbar Area -->
        <nav class="navbar navbar-expand-lg navbar-light mein-navbar mein-navbar-two fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/?p=<?php echo $this->sites[0]; ?>">
                    GalaxyCoin
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                      <?php
                        for($a = 0; $a < count($this->sites); $a++){
                          echo '
                          <li class="nav-item">
                              <a class="nav-link'; if($_GET['p'] == $this->sites[$a]){echo' active';} echo '" href="?p='.$this->sites[$a].'">'.$this->sites[$a].'</a>
                          </li>
                          ';
                        }
                      ?>
                        <li class="nav-item buy-token">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal2"><i class="flaticon-menu-2"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar Area -->
