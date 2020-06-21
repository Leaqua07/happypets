<!DOCTYPE html>
<html lang="de">
    <?php 
        session_start();
        $title = "Unsere Tiere";
        include_once($_SERVER['DOCUMENT_ROOT'] . "/formular/happypets/inc/config.php");
        include('../inc/header_min.php');
    ?>

    <body id="page-top">
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
        <?php include('../inc/footer.php'); ?>

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