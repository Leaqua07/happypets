        
<?php
session_start();

//Datenbankverbingdung wird aufgebaut
  error_reporting(0); //nötig für schöne Fehlerausgabe
        $db1 = new mysqli('localhost', 'root', 'root', 'happypets');

        $db1->set_charset('utf8'); //umlaute werden umgewandelt
        print_r ($db->connect_error); //nötig für schöne Fehlerausgabe

        if ($db1->connect_errno) {
            die('Sorry - gerade gibt es ein Problem');
        }

if (isset($_POST['send'])){ //Wenn sende-Button gedrückt wurde
   
    //datenbankverbindungsaufbau
    echo hallo;
    $myuser_id = $_SESSION['user_id'];
    $mybenutzername =  $_SESSION['user_id'];
    $myemail =  $_SESSION['email'];
    $myeingeloggt = $_SESSION['eingeloggt'];
    $comment =  mysqli_real_escape_string($db1,$_POST['comment']);
    $tier_id =  $_POST['tierid'];
    
    $query ="INSERT INTO comments (user_id, comment, timestamp, tier_id) VALUES ('$myuser_id', '$comment',NOW(), '$tier_id')";
    $eintragen = mysqli_query($db1, $query );
    header('location: animal.php?tierid=' . $_POST['tierid']);
    }
    $erg->free();
    $db1->close();



    ?>