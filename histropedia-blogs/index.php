<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="./assets/vendors/slick-carousel/slick.css">
    <link rel="stylesheet" href="./assets/vendors/slick-carousel/slick-theme.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/js/loader.js"></script>
</head>

<body>
    <div class="oleez-loader"></div>
    <header class="oleez-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php">Histropedia</a>
            <ul class="nav nav-actions d-lg-none ml-auto">
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#!" data-toggle="searchModal">
                        <img src="assets/images/search.svg" alt="search">
                    </a>
                </li> -->
                <!-- <li class="nav-item nav-item-cart">
                    <a class="nav-link" href="#!">
                        <span class="cart-item-count">0</span>
                        <img src="assets/images/shopping-cart.svg" alt="cart">
                    </a>
                </li> -->
                <!-- <li class="nav-item dropdown d-none d-sm-block">
                    <a class="nav-link dropdown-toggle" href="#!" id="languageDropdown" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">ENG</a>
                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
                        <a class="dropdown-item" href="#!">ARB</a>
                        <a class="dropdown-item" href="#!">FRE</a>
                    </div>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="#!" data-toggle="offCanvasMenu">
                        <img src="assets/images/social icon@2x.svg" alt="social-nav-toggle">
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#oleezMainNav"
                aria-controls="oleezMainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="oleezMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="portfolioDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Portfolio</a>
                        <div class="dropdown-menu" aria-labelledby="portfolioDropdown">
                            <a class="dropdown-item" href="portfolio-list.html">Portfolio list</a>
                            <a class="dropdown-item" href="portfolio.html">Portfolio grid</a>
                            <a class="dropdown-item" href="portfolio-masonry.html">Portfolio masonry</a>
                        </div>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#!" id="blogDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <div class="dropdown-menu" aria-labelledby="blogDropdown">
                            <!-- <a class="dropdown-item" href="blog-standard.php">Blog Standard</a> -->
                            <a class="dropdown-item" href="./blog-grid.php">Blog grid</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav d-none d-lg-flex">
                    <!-- <li class="nav-item">
                        <a class="nav-link nav-link-btn" href="#!" data-toggle="searchModal">
                            <img src="assets/images/search.svg" alt="search">
                        </a>
                    </li> -->
                    <!-- <li class="nav-item nav-item-cart">
                        <a class="nav-link nav-link-btn" href="#!">
                            <span class="cart-item-count">0</span>
                            <img src="assets/images/shopping-cart.svg" alt="cart">
                        </a>
                    </li> -->
                   
                    <li class="nav-item ml-5">
                        <a class="nav-link pr-0 nav-link-btn" href="#!" data-toggle="offCanvasMenu">
                            <img src="assets/images/social icon@2x.svg" alt="social-nav-toggle">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <div class="container wow fadeIn">
                <div id="oleezLandingCarousel" class="oleez-landing-carousel carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="assets/images/Ancient/hdancient1.jpg" alt="First slide" class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>Histropedia</span></h2>
                                <h2 data-animation="animated fadeInRight"><span>Digital Sol<sup>n</sup></span></h2>
                                <!-- <a href="#!" class="carousel-item-link" data-animation="animated fadeInRight">EXPLORE PROJECT</a> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/Ancient/ahdancient2.jpg" alt="Second slide" class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>Histropedia</span></h2>
                                <h2 data-animation="animated fadeInRight">Digital Sol<sup>n</sup></span></h2>
                                <!-- <a href="#!" class="carousel-item-link" data-animation="animated fadeInRight">EXPLORE PROJECT</a> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/Ancient/hdancient3.jpg" alt="Third slide" class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>Histropedia</span></h2>
                                <h2 data-animation="animated fadeInRight">Digital Sol<sup>n</sup></span></h2>
                                <!-- <a href="#!" class="carousel-item-link" data-animation="animated fadeInRight">EXPLORE PROJECT</a> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/Ancient/hdancient3.jpg" alt="Fourth slide" class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>Histropedia</span></h2>
                                <h2 data-animation="animated fadeInRight">Digital Sol<sup>n</sup></span></h2>
                                <!-- <a href="#!" class="carousel-item-link" data-animation="animated fadeInRight">EXPLORE PROJECT</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <br>

    <footer class="oleez-footer">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/logo.png" alt="histropedia" class="footer-logo">
                        <p class="footer-intro-text">Come one Come all, Get in touch with us lets remember the monuments,forts forever.</p>
                        <nav class="footer-social-links">
                            <a href="#!">Fb</a>
                            <a href="#!">Tw</a>
                            <a href="#!">In</a>
                            <a href="#!">Be</a>
                        </nav>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 footer-widget-text">
                                <h6 class="widget-title">MOBILE NO.</h6>
                                <p class="widget-content">+91 9764274862</p>
                            </div>
                            <div class="col-md-6 footer-widget-text">
                                <h6 class="widget-title">ENQUIRUES</h6>
                                <p class="widget-content">histopedia@gmail.com</p>
                            </div>
                            <div class="col-md-6 footer-widget-text">
                                <h6 class="widget-title">ADDRESS</h6>
                                <p class="widget-content"> Sandip University, <br> Nashik-422001</p>
                            </div>
                            <div class="col-md-6 footer-widget-text">
                                <h6 class="widget-title">WORK HOURS</h6>
                                <p class="widget-content">Weekdays: 09:00 - 18:00 <br> Weekends: 11:00 - 17:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-text">
                <p class="mb-md-0">©  2022, Histropedia Website. Made with passion by <a href="#" target="_blank" rel="noopener noreferrer" class="text-reset">Deepak & Yograj</a>.</p>
                <p class="mb-0">All right reserved.</p>
            </div>
        </div>
    </footer>

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
    <script src="assets/vendors/slick-carousel/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/landing.js"></script>
    <script>
        new WOW({mobile: false}).init();
    </script>
</body>


</html>