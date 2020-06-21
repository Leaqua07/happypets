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

    <title>HappyPets - Willkommen</title>

    <!-- Bootstrap core CSS -->
    <?php echo'<link href="'. $path['vendor'] .'/bootstrap/css/bootstrap.min.css" rel="stylesheet">'?>

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" type="text/css" href="../css/happypets.css">
    <?php echo'<link href="'. $path['vendor'] .'/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">'?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
   <!-- <script src="jquery-3.5.0.min.js"></script> -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <?php echo'<link href="'. $path['css'] .'/agency.min.css" rel="stylesheet">'?>
    <?php echo'<link href="'. $path['css'] .'/agency.css" rel="stylesheet">'?>
    

</head>

<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <?php echo'<a class="navbar-brand js-scroll-trigger" href="'. $path['rel'] .'index.php">HappyPets</a>'?>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menü
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <?php
if (empty($_SESSION['eingeloggt']))
{
?>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="login.html">Login</a>
                        </li>
                    <?php
}
else
{ ?>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="logout.php" name="logout">Logout</a>
                        </li>
                    <?php
} ?>
                </ul>
            </div>
        </div>
    </nav>
    
    
    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <!--<div class="intro-lead-in">HappyPets</div>-->
                <div class="intro-heading text-uppercase">Neuzugänge:</div>
            </div>
        </div>
    </header>

    <style type="text/css">
        th {
            text-align: right;
        }

        h3 {
            text-align: center;
        }
    </style>
    
    <!-- Main Page -->
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-4 col-sm-3 col-md-2">
                <!-- Linke Seite -->
            </div>
            <div class="col-xs-4 col-sm-6 col-md-8">
                <div class="m-4 b-4"><hr></div>  
                <div class="card-deck">
            
                <div class="m-5 b-5"><hr></div>  
                    <div class="card text-center">
                        <?php include "getinfofromdb.php"; ?>
                        <form method="get" action="getinfofromdb.php">
                            <?php

foreach ($tiere as $t)
{
    if ($t->tier_id % 2 === 1)
    {
?>
                                <img class="card-img-top img-responsive img-fluid" src= " <?php echo $t->tierbild; ?> " alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase"><?php echo $t->name; ?></h5>

                                <dl class="row">
                                    <dt class="col-sm-3">Name</dt>
                                    <dd class="col-sm-9"><?php echo $t->name; ?></dd>

                                    <dt class="col-sm-3">Geboren am</dt>
                                    <dd class="col-sm-9">
                                        <p><?php echo $t->geburtstag; ?></p>
                                    </dd>

                                    <dt class="col-sm-3">Geschlecht</dt>
                                    <dd class="col-sm-9"><?php echo $t->geschlecht; ?></dd>

                                    <dt class="col-sm-3 text-truncate">Rasse</dt>
                                    <dd class="col-sm-9"><?php echo $t->rasse; ?></dd>
                                </dl>
                            </div>
                            <div class="card-footer">
                                 <a href="animal.php?tierid=<?php
                                    echo $t->tier_id; ?>" class="btn btn-primary">Zu <?php echo $t->name; ?></a>
                            </div>
                            <div class="m-5 b-5"><hr></div>  <!-- Spacer -->
                             <?php
    }
}
?>
                        </form>
                     
                    </div>
                    <div class="card text-center">
                        <?php

foreach ($tiere as $t2)
{
    if ($t2->tier_id % 2 === 0)
    {
?>
                            <img class="card-img-top img-responsive img-fluid" src= " <?php echo $t2->tierbild; ?> " alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase"><?php echo $t2->name; ?></h5>
                       
                            <dl class="row">
                                <dt class="col-sm-3">Name</dt>
                                <dd class="col-sm-9"><?php echo $t2->name; ?></dd>

                                <dt class="col-sm-3">Geboren am</dt>
                                <dd class="col-sm-9">
                                    <p><?php echo $t2->geburtstag; ?></p>
                                </dd>

                                <dt class="col-sm-3">Geschlecht</dt>
                                <dd class="col-sm-9"><?php echo $t2->geschlecht; ?></dd>

                                <dt class="col-sm-3 text-truncate">Rasse</dt>
                                <dd class="col-sm-9"><?php echo $t2->rasse; ?></dd>
                            </dl>
                        </div>
                        <div class="card-footer">
                             <a href="animal.php?tierid=<?php
                                 echo $t2->tier_id; ?>" class="btn btn-primary">Zu <?php echo $t2->name; ?></a>
                        </div>
                        <div class="m-5 b-5"><hr></div>  <!-- Spacer -->
                        <?php
    }
}
?>
                     
                    </div>
                </div>
                <div class="col-xs-4 col-sm-3 col-md-2">
                    <!-- Rechte Seite -->
                </div>
            </div>
        </div>
    </div>
    
    <!-- Main Page End -->
    
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
  

    <!-- Custom scripts for this template -->
    <!-- <script src="../js/agency.min.js"></script> -->

</body>
</html>
