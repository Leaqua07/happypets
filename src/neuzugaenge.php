<!DOCTYPE html>
<html lang="de">

<head>
    <?php 
        session_start(); 
        include_once($_SERVER['DOCUMENT_ROOT'] . "/formular/happypets/inc/config.php");
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HeppyPets - Willkommen</title>

    <!-- Bootstrap core CSS -->
    <?php echo'<link href="'. $path['vendor'] .'/bootstrap/css/bootstrap.min.css" rel="stylesheet">'?>

    <!-- Custom fonts for this template -->
    <?php echo'<link href="'. $path['vendor'] .'/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">'?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <?php echo'<link href="'. $path['css'] .'/agency.min.css" rel="stylesheet">'?>
    <?php echo'<link href="'. $path['css'] .'/agency.css" rel="stylesheet">'?>

</head>

<body id="page-top">
    
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <?php echo'<a class="navbar-brand js-scroll-trigger" href="'. $path['rel'] .'index.php">HappyPets</a>'?>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Men�
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <?php 
                        if(empty($_SESSION['eingeloggt'])) { 
                    ?>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="login.html">Login</a>
                        </li>
                    <?php
                        } else { ?>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="logout.php" name="logout">Logout</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

 <?php  include "getinfofromdb.php";?>

    <!--Content here-->
    <header class="underhead">
        <div class="container">
            <div class="intro-text">
                <h1> Kennen wir uns schon? </h1>
            </div>
        </div>
    </header>
    <div class="box1">

        <img src="../img/sexy_fish.jpg" width=90px height=90px align="left">

    </div>
    <!-- ********Datenbanksätze anzeigen lassen*******************-->
    <form method="get" action="getinfofromdb.php">
        <div class="box2">
            
            <div id="ueberschrift">
                <?php 
                 foreach ($tiere as $t) {
                ?>
                <tr>
                    <td>
                        <?php echo $t->name; ?>
                    </td>           
                </tr>
                 <?php
               } ?>

            </div>
            
            <div id="textcontent">
            </div>
        </div>
        </form>

<!-- *******************************************************************-->

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
                                <?php echo'<a href="'. $path['src'] .'/privacypolicy.php">Privacy Policy</a>'?>
                            </li>
                            <li class="list-inline-item">
                                <?php echo'<a href="'. $path['src'] .'/termsofuse.php">Terms of Use</a>'?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>



        <!-- Bootstrap core JavaScript -->
        <?php echo'<script src="'. $path['vendor'] .'/jquery/jquery.min.js"></script>'?>
        <?php echo'<script src="'. $path['vendor'] .'/bootstrap/js/bootstrap.bundle.min.js"></script>'?>

        <!-- Plugin JavaScript -->
        <?php echo'<script src="'. $path['vendor'] .'/jquery-easing/jquery.easing.min.js"></script>'?>

        <!-- Contact form JavaScript -->
        <?php echo'<script src="'. $path['js'] .'/jqBootstrapValidation.js"></script>'?>
        <?php echo'<script src="'. $path['js'] .'/contact_me.js"></script>'?>

        <!-- Custom scripts for this template -->
        <script src="../js/agency.min.js"></script>

</body>

</html>