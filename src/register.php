<!DOCTYPE html>
<html lang="de">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HappyPets - Registrieren</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../css/agency.min.css" rel="stylesheet">
    <link href="../css/agency.css" rel="stylesheet">

</head>

<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="../index.php">HappyPets</a>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <!--<div class="intro-lead-in">HappyPets</div>-->
                <div class="intro-heading text-uppercase">Registriere dich hier:</div>
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

    <!-- <table cellpaddig="5" cellspacing="10" align="center">
    <form method="post" action="validate.php">
        <tr><th>Email</th><td><input type="text" name="email"></td></tr>
        <tr><th>Passwort</th><td><input type="text" name="passwort"></td></tr>

        <tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me</td></tr>
        <tr><td colspan="2" align="right"><input type="submit" value="Login" name="login"></td></tr>
    </form>
    </table>-->

    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Registrieren</h5>
                        <!-- Registerdata -->
                         <?php include "getinfofromdb.php"; ?>
                        <form class="form-signin" method="post" action="pushregisterdatatodb.php">
                            <div class="form-label-group">
                                <input type="username" name="username" id="inputUsername" class="form-control" placeholder="Benutzername" required autofocus>
                                <label for="inputUsername">Benutzername</label>
                            </div>
                            
                            <div class="form-label-group">
                                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="E-Mail Adresse" required>
                                <label for="inputEmail">E-Mail Adresse</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" name="passwort" id="inputPassword" class="form-control" placeholder="Passwort" required>
                                <label for="inputPassword">Passwort</label>
                            </div>
                            
                            <div class="form-label-group">
                                <input type="password" name="passwortWiederholen" id="inputPasswordConfirm" class="form-control" placeholder="Passwort wiederholen" required>
                                <label for="inputPasswordConfirm">Passwort wiederholen</label>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" name="remember" value="1" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Passwort merken</label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="login">Registrieren</button>
                        </form>
                        <!-- END Register Data-->
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                            <a href="privacypolicy.php">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="termsofuse.php">Terms of Use</a>
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
    
    <script>
        var password = document.getElementById("inputPassword")
          , confirm_password = document.getElementById("inputPasswordConfirm");

        function validatePassword(){
          if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwörter stimmen nicht überein!");
          } else {
            confirm_password.setCustomValidity('');
          }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>

</body>
</html>
