        
<?php

//Datenbankverbingdung wird aufgebaut
  error_reporting(0); //nötig für schöne Fehlerausgabe
        $db1 = new mysqli('localhost', 'root', 'root', 'happypets');

        $db1->set_charset('utf8'); //umlaute werden umgewandelt
        print_r ($db->connect_error); //nötig für schöne Fehlerausgabe

        if ($db1->connect_errno) {
            die('Sorry - gerade gibt es ein Problem');
        }



if (isset($_POST['login'])){ //Wenn sende-Button gedrückt wurde
   

    $benutzername = $_POST['username'];
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    $bild = $_POST['bild'];
    $user[] = [];
    $query;
    $eintragen = 0;
    
    //prüfen ob user schon vorhanden ist
    $erg3 = $db1->query("SELECT * FROM user") or die($db1->error);
    if ($erg3->num_rows) { //Wenn min. 1 Ergebnis zurückkommt
       while ($datensatz = $erg3->fetch_object()) {
	   $user[] = $datensatz;
     }
   }
   
   $gibtsschon = 0;
    
    foreach($user as $u){
      
        #echo $u-> benutzername . "----" . $benutzername . "  " . $u->email . "---" . $email ;
        if ($u->benutzername == $benutzername or $u->email == $email){ // username oder email existiert schon
          header('location:register.php');
         
            $gibtsschon =1;
            break;
       
        
        }
    }
        
    if ($gibtsschon == 0){
        $query ="INSERT INTO user (benutzername, email, passwort) VALUES ('$benutzername','$email', '$passwort')";
          
            
            $eintragen = mysqli_query($db1, $query );
    
            echo "eingetragen: " . $eintragen;
    }
        
 
   $user2[] =[];
    
    if($eintragen){ //wenn eintragen funktioniert hat, dann start session
       
       
        $query = "SELECT * FROM user WHERE benutzername='$benutzername'";
        
        $erg4 = $db1->query($query) or die($db1->error);
       
        if ($erg4->num_rows) { 
            echo inder2if;
           
            
            while ($datensatz = $erg4->fetch_object()) {
                $user2[] = $datensatz;
            }
           
           foreach($user2 as $u){

            session_start();
            $_SESSION['user_id'] = $u->user_id;
            $_SESSION['benutzername'] = $u->benutzername;
            $_SESSION['email'] =  $u->email;
            $_SESSION['eingeloggt'] = true;
           
           }
         }
      }
    
 
    }
    
    $db1->close();
    header('location:../index.php');
    $erg->free();
    ?>