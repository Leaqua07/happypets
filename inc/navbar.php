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
                        <?php echo'<a class="nav-link js-scroll-trigger" href="'. $path['src'] .'/login.html">Login</a>'?>
                    </li>
                <?php
                    }
                    else
                    { ?>
                    <li class="nav-item">
                        <?php echo'<a class="nav-link js-scroll-trigger" href="'. $path['src'] .'/logout.php" name="logout">Logout</a>'?>
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