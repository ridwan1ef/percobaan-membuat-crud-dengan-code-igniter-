<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Wisata Jepang</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url()?>template/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="<?php echo base_url()?>template/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="<?php echo base_url()?>template/css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo base_url()?>"> Home </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo base_url()?>index.php/Objek_Wisata/objek_wisata_user" id="navbarDropdown">Objek_Wisata </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo base_url()?>index.php/Artikel/artikel_user" id="navbarDropdown2"> Artikel </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo base_url()?>index.php/Gallery/gallery_user" id="navbarDropdown2"> Gallery </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    </div>
                                </li>
                            </ul>
                            <!-- Search btn -->
                            <div class="dorne-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
                            </div>
                            <!-- Signin btn -->
                            <div class="dorne-signin-btn">
                                <a href="<?php echo base_url()?>">Sign in  or Register</a>
                            </div>
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="<?php echo base_url()?>" id="navbarDropdown2"> Log Out </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    </div>
                                </li>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(<?php echo base_url()?>template/img/core-img/a.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2>Berbagai Macam Wisata Jepang</h2>
                        <h4>Kota-Kota Jepang</h4>
                    </div>
                    <!-- Hero Search Form -->
                    <div class="hero-search-form">
                        <!-- Tabs -->
                        <div class="nav nav-tabs" id="heroTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab" aria-controls="nav-places" aria-selected="true">Places</a>
                            <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false">Events</a>
                        </div>
                        <!-- Tabs Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
                                <h6>Kemana Tujuan Anda ?</h6>
                                <form action="#" method="get">
                                    <select class="custom-select">
                                        <option selected>Kota</option>
                                        <option value="1">Fuji</option>
                                        <option value="2">Osaka</option>
                                        <option value="3">Fuji Park</option>
                                        <option value="4">Sakura</option>
                                        <option value="5">Town City</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Alamat</option>
                                        <option value="1">Gunung Fuji</option>
                                        <option value="2">Taman Sakura</option>
                                        <option value="3">Arena Fuji</option>
                                        <option value="3">Osaka Castil Sakura</option>

                                    </select>
                                    <select class="custom-select">
                                        <option selected>Harga</option>
                                        <option value="1">$100 - $499</option>
                                        <option value="2">$500 - $999</option>
                                        <option value="3">$1000 - $4999</option>
                                    </select>
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                                <h6>What are you looking for?</h6>
                                <form action="#" method="get">
                                    <select class="custom-select">
                                        <option selected>Kota</option>
                                        <option value="1">Fuji</option>
                                        <option value="2">Osaka</option>
                                        <option value="3">Fuji Park</option>
                                        <option value="4">Sakura</option>
                                        <option value="5">Town City</option>
                                    </select>
                                    <select class="custom-select">
                                        <option selected>Alamat</option>
                                        <option value="1">Gunung Fuji</option>
                                        <option value="2">Taman Sakura</option>
                                        <option value="3">Arena Fuji</option>
                                        <option value="3">Osaka Castil Sakura</option>

                                    </select>
                                    <select class="custom-select">
                                        <option selected>Harga</option>
                                        <option value="1">$100 - $499</option>
                                        <option value="2">$500 - $999</option>
                                        <option value="3">$1000 - $4999</option>
                                    </select>
                                    
                                    <button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Social Btn -->
        <div class="hero-social-btn">
            <div class="social-title d-flex align-items-center">
                <h6>Follow us on Social Media</h6>
                <span></span>
            </div>
            <div class="social-btns">
                <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                <a href="https://web.facebook.com/ridwan.1ef"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->