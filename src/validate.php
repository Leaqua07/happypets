<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>

<?php
error_reporting(0); //n�tig f�r sch�ne Fehlerausgabe
$db = new mysqli('localhost', 'root', 'root', 'happypets');

$db->set_charset('utf8'); //umlaute werden umgewandelt
print_r ($db->connect_error); //n�tig f�r sch�ne Fehlerausgabe

if ($db->connect_errno) {
    die('Sorry - gerade gibt es ein Problem');
}
//-----------------------------------------

//
$erg = $db->query("SELECT email, passwort FROM user") or die($db->error); // or die($db->error); gibt SQL Fehler aus

//print_r($erg); //Dateninformationen

if ($erg->num_rows) {
	//echo "<p>Daten vorhanden: Anzahl ";
	//echo $erg->num_rows; // Anzahl der Datens�tze
}



	//$testemail = "tim@lala.de";
	//$testpasswort = "1234";

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$pass = $_POST['passwort'];
		//-DB----------------------
		while ($zeile = $erg->fetch_object()) {
		$testemail =$zeile->email;
		$testpasswort = $zeile->passwort;
	
			if($email == $testemail and $pass == $testpasswort){
				if(isset($_POST['remember'])){
					setcookie('email', $email ,time()+60*60*7);	
				}
				session_start();
				$_SESSION['email'] = $email;
				header("location: ../index.html"); //Eingeloggte Weiterleitungsseite, evtl noch �ndern
			} else{
				echo "Email or Passwort incorrect";
			} 
		}
	} else {
		header("location:login.php"); //verhindert, dass es m�glich ist per link den Login zu �bersprinen
	}
		$erg->free();
		$db->close();

	?>

	</body>
	</html>