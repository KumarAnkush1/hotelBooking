<?php 
  session_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Royal Hotel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="image/Logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item "><a class="nav-link" href="index.php">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="accomodation.php">Accomodation</a></li>
                            <li class="nav-item "><a class="nav-link" href="gallery.php">Gallery</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-single.php">Blog Details</a></li>
                                </ul>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="elements.php">Elemests</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                                           <?php 
                                 if(isset($_SESSION["email"]))
                                 {
                              ?>
                                 <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Logout</a>
                                 </li>
                              <?php
                                 }
                                 else{
                              ?>
                               <li class="nav-item">
                                 <a class="nav-link" href="login.php">Login</a>
                              </li>
                              <?php
                                 }
                              ?>
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        