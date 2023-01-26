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

        /* The Image Box */
        div.img {
            border: 1px solid #ccc;
        }

        div.img:hover {
            border: 1px solid #777;
        }

        /* The Image */
        div.img img {
            width: 100%;
            height: auto;
            cursor: pointer;
        }

        /* Description of Image */
        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        /* Add Responsiveness */
        .responsive {
            padding: 0 6px;
            float: left;
            width: 24.99999%;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */
        }



        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }


        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }



        /* Add Animation */
        .modal-content,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }


        @-webkit-keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0.1)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }


        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="oleez-loader"></div>
    <header class="oleez-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="./index.php">
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
                        <a class="nav-link " href="Geolocation.php?_id=<?php echo $_id ?>">Geolocation</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="features.php?_id=<?php echo $_id ?>">Features</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="purpose.php?_id=<?php echo $_id ?>">Purpose</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="technologyused.php?_id=<?php echo $_id ?>">Technology Used</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="speciality.php?_id=<?php echo $_id ?>">Speciality</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="refrences.php?_id=<?php echo $_id ?>">Refrences</a>
                    </li>
                    <li class="nav-item active">
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

                        <h4 class="post-title">Gallery</h4>

                        <article>


                            <?php _showallImages(_getSingleheritage($_id, '_heritagename')) ?>


                            <div class="clearfix"></div>

                            <!-- The Modal -->
                            <div id="myModal" class="modal">
                                <span class="close">×</span>
                                <img class="modal-content" id="img01">
                                <div id="caption"></div>
                            </div>


                        </article>

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

    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Get all images and insert the clicked image inside the modal
        // Get the content of the image description and insert it inside the modal image caption
        var images = document.getElementsByTagName('img');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        var i;
        for (i = 0; i < images.length; i++) {
            images[i].onclick = function() {
                modal.style.display = "block";
                modalImg.src = this.src;
                modalImg.alt = this.alt;
                captionText.innerHTML = this.nextElementSibling.innerHTML;
            }
        }
    </script>

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