<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HappyPets - Willkommen</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <?php session_start(); ?>
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.html">HappyPets</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menü
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Über Uns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Kontakt</a>
                    </li>
                    <?php 
                        if(empty($_SESSION['eingeloggt'])) { 
                    ?>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="src/login.html">Login</a>
                        </li>
                    <?php
                        } else { ?>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="src/logout.php" name="logout">Logout</a>
                        </li>
                    <?php } ?> 
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <!--<div class="intro-lead-in">HappyPets</div>-->
                <div class="intro-heading text-uppercase">Willkommen</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="src/content.php">Unsere Neuzugänge</a>
            </div>
        </div>
    </header>

    <!-- About -->
    <section class="page-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Über Uns</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Image Slider -->
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/about/BettikumKatzenhausVerwaltung107Inet.jpg" alt="Bild konnte nicht geladen werden, sorry :/">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/about/ixkclzzju5og7prkxhai.jpg" alt="Bild konnte nicht geladen werden, sorry :/">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/about/kategorie-hunde.jpg" alt="Bild konnte nicht geladen werden, sorry :/">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/about/Tierheim-Katzen-Urlauberhaus-1-von-2.jpg" alt="Bild konnte nicht geladen werden, sorry :/">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/about/unnamed.jpg" alt="Bild konnte nicht geladen werden, sorry :/">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/about/15_1178723509_tierheim-1g.jpg" alt="Bild konnte nicht geladen werden, sorry :/">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Vorige</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Nächste</span>
                        </a>
                    </div>
                    <div class="m-5 b-5"><hr></div>  <!-- Spacer -->
                    <div class="d-flex justify-content-center">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2516.644490921741!2d7.459512114470286!3d50.893289875629904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41718716098c975d%3A0xeb5d04f50661ba1e!2sHappyPets%20Much!5e0!3m2!1sde!2sde!4v1590186312631!5m2!1sde!2sde" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Kontaktiere Uns</h2><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Dein Name *" required="required" data-validation-required-message="Bitte trage deinen Namen ein.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Deine Email *" required="required" data-validation-required-message="Bitte trage deine E-Mail Adresse ein.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Deine Telefonnummer *">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Deine Nachricht *" required="required" data-validation-required-message="Bitte gib eine Nachricht ein."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Nachricht senden</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; HappyPets 2020</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="src/privacypolicy.php">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="src/termsofuse.php">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>



</body>

</html>