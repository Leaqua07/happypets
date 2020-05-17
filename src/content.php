<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HappyPets - Willkommen</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" type="text/css" href="../css/happypets.css">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
   <!-- <script src="jquery-3.5.0.min.js"></script> -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/agency.min.css" rel="stylesheet">
    <link href="../css/agency.css" rel="stylesheet">
    

</head>

<body>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <!--<div class="intro-lead-in">HappyPets</div>-->
                <div class="intro-heading text-uppercase">Content Page:</div>
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
                <div class="m-4 b-4"><hr></div>  <!-- Spacer -->
                <div class="card-deck">
                    
                    <!--Lala
                   
            -->
                <!--Leas Blödsinn ab hier*************************-->
                <div class="m-5 b-5"><hr></div>  
                <div class="card-deck">
                    <div class="card text-center">
                        
                        <?php  include "getinfofromdb.php";?>
                        <form method="get" action="getinfofromdb.php">
                        <?php 
                            foreach ($tiere as $t) {
                        ?>
                            <img class="card-img-top img-responsive img-fluid" src= " <?php $t->tierbild; ?> " alt="Card image cap">
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
                            <a href="#" class="btn btn-primary">Zu <?php echo $t->name; ?></a>
                        </div>
                   
                    
                    
                    
                 <?php
               } ?>
                        </form>
                        
                        <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
                       
                    <div class="card text-center">
                        <img class="card-img-top img-responsive img-fluid" src="../img/Tara-blick-gestempelt-gross.jpg" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title text-uppercase">Nino</h5>
                        <!--<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
                        <dl class="row">
                            <dt class="col-sm-3">Name</dt>
                            <dd class="col-sm-9">Nino</dd>

                            <dt class="col-sm-3">Alter</dt>
                            <dd class="col-sm-9">
                                <p>1 Jahr.</p>
                                <p>Geboren Mai 2019</p>
                            </dd>

                            <dt class="col-sm-3">Geschlecht</dt>
                            <dd class="col-sm-9">Männlich</dd>

                            <dt class="col-sm-3 text-truncate">Rasse</dt>
                            <dd class="col-sm-9">American Foxhound</dd>
                            
                            <dt class="col-sm-3 text-truncate">Wohnt in</dt>
                            <dd class="col-sm-9">Babenhausen</dd>
                            
                            <!--<dt class="col-sm-3">Nesting</dt>
                            <dd class="col-sm-9">
                                <dl class="row">
                                    <dt class="col-sm-4">Nested definition list</dt>
                                    <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                </dl>
                            </dd>-->
                        </dl>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Zu Nino</a>
                        </div>
                    </div>
                </div>
                <div class="m-5 b-5"><hr></div>  <!-- Spacer -->
            </div>
            <div class="col-xs-4 col-sm-3 col-md-2">
                <!-- Rechte Seite -->
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
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <!-- <script src="../js/agency.min.js"></script> -->

</body>
</html>