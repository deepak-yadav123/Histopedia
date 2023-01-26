<?php

$_id = $_GET['_id'];
require('../includes/_functions.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <title> Histropedia - <?php echo _getSingleheritage($_id, '_heritagename'); ?> </title>
    <link rel="stylesheet" href="./assets/vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="./assets/vendors/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Capriola&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&family=Balsamiq+Sans&fa
mily=Comfortaa&family=Montserrat&family=Poppins&display=swap" rel="stylesheet">
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/js/loader.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <div class="oleez-loader"></div>
    <header class="oleez-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/index.php">
                <h3 style="font-family: 'Capriola', sans-serif ; color: #fd6839; ">Histropedia</h3>
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#oleezMainNav" aria-controls="oleezMainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="oleezMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="blog-standard.php?_id=<?php echo $_id ?>">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="Geolocation.php?_id=<?php echo $_id ?>">Geolocation</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="features.php?_id=<?php echo $_id ?>">Features</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="purpose.php?_id=<?php echo $_id ?>">Purpose</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="technologyused.php?_id=<?php echo $_id ?>">Technology Used</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="speciality.php?_id=<?php echo $_id ?>">Speciality</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="refrences.php?_id=<?php echo $_id ?>">Refrences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php?_id=<?php echo $_id ?>">Gallery</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>

    <main class="blog-standard">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInUp"><?php echo _getSingleheritage($_id, '_heritagename'); ?></h1>
            <div class="row">
                <div class="col-md-8">
                    <article class="blog-post wow fadeInUp">
                        <img src="../uploads/pics/<?php echo _getSingleImage(_getSingleheritage($_id, '_heritagename')) ?>" alt="blog post" class="post-thumbnail">

                        <h4 class="post-title">Technology Used</h4>
                        <p class="post-excerpt"><?php echo _getSingleheritage($_id, '_heritagetechnology') ?></p>

                    </article>
                </div>
                <div class="col-md-4">
                    <div class="sidebar-widget wow fadeInUp">
                        <h5 class="widget-title">Built In</h5>
                        <p><?php echo _getSingleheritage($_id, '_heritagebuiltin'); ?> </p>
                    </div>
                    <div class="sidebar-widget wow fadeInUp">
                        <h5 class="widget-title">Built By</h5>
                        <p><?php echo _getSingleheritage($_id, '_heritagebuiltby'); ?> </p>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- Modals -->
    <!-- Off canvas social menu -->
    <nav id="offCanvasMenu" class="off-canvas-menu">
        <button type="button" class="close" aria-label="Close" data-dismiss="offCanvasMenu">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul class="oleez-social-menu">
            <li>
                <a href="#!" class="oleez-social-menu-link">Facebook</a>
            </li>
            <li>
                <a href="#!" class="oleez-social-menu-link">Instagram</a>
            </li>
            <li>
                <a href="#!" class="oleez-social-menu-link">Behance</a>
            </li>
            <li>
                <a href="#!" class="oleez-social-menu-link">Dribbble</a>
            </li>
            <li>
                <a href="#!" class="oleez-social-menu-link">Email</a>
            </li>
        </ul>
    </nav>
    <!-- Full screen search box -->
    <div id="searchModal" class="search-modal">
        <button type="button" class="close" aria-label="Close" data-dismiss="searchModal">
            <span aria-hidden="true">&times;</span>
        </button>
        <form action="index.html" method="get" class="oleez-overlay-search-form">
            <label for="search" class="sr-only">Search</label>
            <input type="search" class="oleez-overlay-search-input" id="search" name="search" placeholder="Search here">
        </form>
    </div>
    <script src="assets/vendors/popper.js/popper.min.js"></script>
    <script src="assets/vendors/wowjs/wow.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/vendors/fancybox/jquery.fancybox.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        new WOW().init();
    </script>
</body>


</html>