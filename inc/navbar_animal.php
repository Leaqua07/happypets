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