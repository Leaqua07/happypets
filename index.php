<!DOCTYPE html>
<html lang="de">
    <?php
        session_start(); 
        $title = "Willkommen";
        include_once($_SERVER['DOCUMENT_ROOT'] . "/formular/happypets/inc/config.php");
        include("inc/header.php");
    ?>
    <body id="page-top">
        <?php include('inc/navbar.php'); ?>
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
                                    <?php echo'<img class="d-block w-100" src="'. $path['about'] .'/BettikumKatzenhausVerwaltung107Inet.jpg" alt="Bild konnte nicht geladen werden, sorry :/">'?>
                                </div>
                                <div class="carousel-item">
                                    <?php echo'<img class="d-block w-100" src="'. $path['about'] .'/ixkclzzju5og7prkxhai.jpg" alt="Bild konnte nicht geladen werden, sorry :/">'?>
                                </div>
                                <div class="carousel-item">
                                    <?php echo'<img class="d-block w-100" src="'. $path['about'] .'/kategorie-hunde.jpg" alt="Bild konnte nicht geladen werden, sorry :/">'?>
                                </div>
                                <div class="carousel-item">
                                    <?php echo'<img class="d-block w-100" src="'. $path['about'] .'/Tierheim-Katzen-Urlauberhaus-1-von-2.jpg" alt="Bild konnte nicht geladen werden, sorry :/">'?>
                                </div>
                                <div class="carousel-item">
                                    <?php echo'<img class="d-block w-100" src="'. $path['about'] .'/unnamed.jpg" alt="Bild konnte nicht geladen werden, sorry :/">'?>
                                </div>
                                <div class="carousel-item">
                                    <?php echo'<img class="d-block w-100" src="'. $path['about'] .'/15_1178723509_tierheim-1g.jpg" alt="Bild konnte nicht geladen werden, sorry :/">'?>
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

        <?php include('inc/footer.php'); ?>

        <!-- Bootstrap core JavaScript -->
        <?php echo'<script src="'. $path['vendor'] .'/jquery/jquery.min.js"></script>'?>
        <?php echo'<script src="'. $path['vendor'] .'/bootstrap/js/bootstrap.bundle.min.js"></script>'?>

        <!-- Plugin JavaScript -->
        <?php echo'<script src="'. $path['vendor'] .'/jquery-easing/jquery.easing.min.js"></script>'?>

        <!-- Contact form JavaScript -->
        <?php echo'<script src="'. $path['js'] .'/jqBootstrapValidation.js"></script>'?>
        <?php echo'<script src="'. $path['js'] .'/contact_me.js"></script>'?>

        <!-- Custom scripts for this template -->
        <?php echo'<script src="'. $path['js'] .'/agency.min.js"></script>'?>

    </body>
</html>