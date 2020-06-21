<!DOCTYPE html>
<html lang="de">

<head>

	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HappyPets - Willkommen</title>

    <!-- Bootstrap core CSS -->
    <?php echo'<link href="'. $path['vendor'] .'/bootstrap/css/bootstrap.min.css" rel="stylesheet">'?>

    <!-- Custom fonts for this template -->
    <?php echo'<link href="'. $path['vendor'] .'/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">'?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php echo'<script src="'. $path['vendor'] .'/bootstrap/js/bootstrap.js"></script>'?>

    <!-- Custom styles for this template -->
    <?php echo'<link href="'. $path['css'] .'/agency.min.css" rel="stylesheet">'?>

</head>

<body id="page-top">


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
    
        <!--Daten-GET-->
           <?php include "getinfofromdb.php"; ?>
                
                <?php

//Varriablendefinitionen
$tier_id;
$name;
$geburtstag;
$geschlecht;
$art;
$rasse;
$geimpftt;
$vermittelt;
$tierbild;

$futter;
$ausstattung;
$aufwand;
$pflege;

foreach ($tiere as $t)
{ //den datenbanksatz durchgehen
    if ($t->tier_id == $_GET['tierid'])
    { //Daten für das Tier raussuchen
        $tier_id = $t->tier_id;
        $name = $t->name;
        $geburtstag = $t->geburtstag;
        $geschlecht = $t->geschlecht;
        $art = $t->art;
        $rasse = $t->rasse;
        $geimpft = $t->geimpft;
        $vermittelt = $t->vermittelt;
        $tierbild = $t->tierbild;

    }

}

foreach ($tierinfo as $ti)
{

    if ($rasse == $ti->rasse)
    { //Daten für das Tier raussuchen
        $futter = $ti->futter;
        $ausstattung = $ti->ausstattung;
        $aufwand = $ti->aufwand;
        $pflege = $ti->pflege;

    }
}

?>
                    
                    <!--DATEN-GET-ENDE-->

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-heading text-uppercase"><?php echo $name; ?></div>
            </div>
        </div>
    </header>

    <!-- Main Page -->
    <section class="page-section" id="animal">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-4 col-sm-3 col-md-2">
                <!-- Linke Seite -->
            </div>
            <div class="col-xs-4 col-sm-6 col-md-8">
                <div class="">
                    <img class="img-fluid" src="<?php echo $tierbild; ?>" alt="Bild konnte nicht geladen werden, sorry :/">       
                </div>         
                <div class="m-5 b-5"><hr></div>  <!-- Spacer -->
                
                <!-- Info Box -->
              
              
                  
                    
                <dl class="row">
                    <dt class="col-sm-3">Name</dt>
                    <dd class="col-sm-9"><?php echo $name; ?></dd>

                    <dt class="col-sm-3">Geboren am</dt>
                    <dd class="col-sm-9">
                        <p><?php echo $geburtstag; ?></p>
                    </dd>

                    <dt class="col-sm-3">Geschlecht</dt>
                    <dd class="col-sm-9"><?php echo $geschlecht; ?></dd>

                    <dt class="col-sm-3 text-truncate">Rasse</dt>
                    <dd class="col-sm-9"><?php echo $rasse; ?></dd>
                    
                    <br><br><br>
                    
                    <dt class="col-sm-3">Futter</dt>
                    <dd class="col-sm-9"><?php echo $futter; ?></dd>

                    <dt class="col-sm-3">Ausstattung</dt>
                    <dd class="col-sm-9">
                        <p><?php echo $ausstattung; ?></p>
                    </dd>

                    <dt class="col-sm-3">Aufwand</dt>
                    <dd class="col-sm-9"><?php echo $aufwand; ?></dd>

                    <dt class="col-sm-3 text-truncate">Pflege</dt>
                    <dd class="col-sm-9"><?php echo $pflege; ?></dd>

                </dl>
                
                <!-- Comments -->
                <div class="row bootstrap snippets">
                    <div class="col-md-10 col-md-offset-2 col-sm-12">
                        <div class="comment-wrapper">
                            <div class="panel panel-info">
                                <div class="panel-body">
                                    <!-- Ist User angemeldet, dann zeige Kommentarfeld an   -->
                                    <?php
if (!empty($_SESSION['eingeloggt']))
{
?>
                                   
                                     <form class="form-signin" method="post" action="postcomment.php">
                                    
                                            <textarea class="form-control" name="comment" placeholder="Schreibe ein Kommentar ..." rows="3"></textarea>
                                            <br>
                                        
                                            <input name= "tierid" value="<?php echo $tier_id ?>" type="hidden" />
                                            <button type="submit" name="send" class="btn btn-primary pull-right">Senden</button>
                                   
                                    </form>
                                    <?php
}
?>
                                   
                                    <div class="clearfix"></div>
                                    <hr>
                                      <ul class="media-list">
                         <!--Kommentaranzeige -->
                                    <?php
$benutzername;
$user_id;
$email;
$bild;

foreach ($comments as $c)
{
    foreach ($user as $u)
    {
        if ($c->user_id == $u->user_id)
        {
            $benutzername = $u->benutzername;
            $user_id = $u->user_id;
            $email = $u->email;
            $bild = $u->bild;

        }

    }
    if ($c->tier_id == $tier_id)
    {
?>
                                  
                                        <li class="media">
                                            <a href="#" class="pull-left">
                                                <img src="<?php echo $bild ?>" alt="no pic" class="img-circle">
                                            </a>
                                            <div class="media-body">
                                                <span class="text-muted pull-right">
                                                     <small class="text-muted"> <?php echo $c->timestamp; ?></small>
                                                    
                                                    
                                                </span>
                                                <strong class="text-success">@<?php echo $benutzername ?> </strong>
                                                <p>
                                                    <?php echo $c->comment; ?>
                                                    
                                                </p>
                                            </div>
                                        </li>
                                          
                                          <?php
    }
} ?>
 
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End of Comments -->
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2">
                <!-- Rechte Seite -->
            </div>
        </div>
    </div>
                 
   
    
    <!-- Main Page End -->          
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

  


</body>

</html>
