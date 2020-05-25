<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
     <?php
    //session_start();
    ?>

<?php
error_reporting(0); //nötig für schöne Fehlerausgabe
$db = new mysqli('localhost', 'root', 'root', 'happypets');

$db->set_charset('utf8'); //umlaute werden umgewandelt
print_r ($db->connect_error); //nötig für schöne Fehlerausgabe

if ($db->connect_errno) {
    die('Sorry - gerade gibt es ein Problem');
}
//-----------------------------------------

//
    
$erg = $db->query("SELECT * FROM user") or die($db->error); // or die($db->error); gibt SQL Fehler aus

//print_r($erg); //Dateninformationen

if ($erg->num_rows) {
	//echo "<p>Daten vorhanden: Anzahl ";
	//echo $erg->num_rows; // Anzahl der Datensätze
   
}

	
	if(isset($_POST['login'])){
        
		$email = $_POST['email'];
		$pass = $_POST['passwort'];
		//-DB----------------------
		while ($zeile = $erg->fetch_object()) {
            
		$testemail =$zeile->email;
		$testpasswort = $zeile->passwort;
	
			if($email == $testemail and $pass == $testpasswort){ //Passwortabgleich mit Datenbank
				if(isset($_POST['remember'])){
					setcookie('email', $email ,time()+24*60*60*7);	
				}
               
                
                $user_id = $zeile->user_id;
                $benutzername = $zeile->benutzername;
                
				session_start();
                $_SESSION['user_id'] = $user_id;
                $_SESSION['benutzername'] = $benutzername;
				$_SESSION['email'] =  $email;
                $_SESSION['eingeloggt'] = true;
                echo true;
               
				header('Location: ' . $_SERVER['HTTP_REFERER']); //Eingeloggte Weiterleitungsseite
			} else{
				echo "Email or Passwort incorrect";
			} 
		}
	} else {
		header("location:login.php"); //verhindert, dass es möglich ist per link den Login zu übersprinen
	}
    
    print_r($_SESSION);
		$erg->free();
		$db->close();
			//if(session_id() === "") ist session leer?
	?>


	</body>
	</html>