<!DOCTYPE html>
<html lang="de">
    <?php
        session_start();
        $title = "Registriere dich hier:";
        include_once($_SERVER['DOCUMENT_ROOT'] . "/formular/happypets/inc/config.php");
        include('../inc/header.php');
    ?>

    <body id="page-top">
        <?php include('../inc/navbar_min.php'); ?>

        <style type="text/css">
            th {
                text-align: right;
            }

            h3 {
                text-align: center;
            }
        </style>

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

        <?php include('../inc/footer.php'); ?>

        <!-- Bootstrap core JavaScript -->
        <?php echo'<script src="'. $path['vendor'] .'/jquery/jquery.min.js"></script>'?>
        <?php echo'<script src="'. $path['vendor'] .'/bootstrap/js/bootstrap.bundle.min.js"></script>'?>

        <!-- Plugin JavaScript -->
        <?php echo'<script src="'. $path['vendor'] .'/jquery-easing/jquery.easing.min.js"></script>'?>

        <!-- Contact form JavaScript -->
        <?php echo'<script src="'. $path['js'] .'/jqBootstrapValidation.js"></script>'?>
        <?php echo'<script src="'. $path['js'] .'/contact_me.js"></script>'?>

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