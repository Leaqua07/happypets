<head>
    <?php 
        include_once($_SERVER['DOCUMENT_ROOT'] . "/formular/happypets/inc/config.php");
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--<title>HappyPets - Willkommen</title>-->
    <title>HappyPets - <?php echo $title; ?></title>

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
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Über Uns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Kontakt</a>
                    </li>
                    <?php
                        if (empty($_SESSION['eingeloggt']))
                        {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="src/login.html">Login</a>
                        </li>
                    <?php
                        }
                        else
                        { ?>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="src/logout.php" name="logout">Logout</a>
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
                <div class="intro-heading text-uppercase"><?php echo $title; ?></div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="src/content.php">Unsere Neuzugänge</a>
            </div>
        </div>
    </header>
</body>