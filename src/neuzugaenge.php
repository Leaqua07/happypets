<!DOCTYPE html>
<html lang="de">
    <?php
        session_start();
        $title = "Neuzugänge";
        include_once($_SERVER['DOCUMENT_ROOT'] . "/formular/happypets/inc/config.php");
        include('../inc/header_min.php');
    ?>

    <body id="page-top">
        <?php 
            include('../inc/navbar_min.php');
            include "getinfofromdb.php";
        ?>

        <!--Content here-->
        <header class="underhead">
            <div class="container">
                <div class="intro-text">
                    <h1> Kennen wir uns schon? </h1>
                </div>
            </div>
        </header>
        <div class="box1">
            <img src="../img/sexy_fish.jpg" width=90px height=90px align="left">
        </div>
        <!-- ********Datenbanksätze anzeigen lassen*******************-->
        <form method="get" action="getinfofromdb.php">
            <div class="box2">

                <div id="ueberschrift">
                    <?php 
                     foreach ($tiere as $t) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $t->name; ?>
                        </td>           
                    </tr>
                     <?php
                   } ?>

                </div>

                <div id="textcontent">
                </div>
            </div>
        </form>

        <!-- *******************************************************************-->

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
        <script src="../js/agency.min.js"></script>

    </body>
</html>