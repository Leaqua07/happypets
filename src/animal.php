<!DOCTYPE html>
<html lang="de"> 
    <?php
        session_start();
        $title = "Tiere";
        include_once($_SERVER['DOCUMENT_ROOT'] . "/formular/happypets/inc/config.php");
        include('../inc/header.php');
    ?>

    <body id="page-top">
        <?php include('../inc/navbar_animal.php'); ?>
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

        <?php include('../inc/footer.php'); ?>

    </body>
</html>