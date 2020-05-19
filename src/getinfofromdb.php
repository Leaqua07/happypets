<?php
//---------Datenbankverbundung--------------------
error_reporting(0); //nötig für schöne Fehlerausgabe
$db = new mysqli('localhost', 'root', 'root', 'happypets');

$db->set_charset('utf8'); //umlaute werden umgewandelt
print_r ($db->connect_error); //nötig für schöne Fehlerausgabe

if ($db->connect_errno) {
    die('Sorry - gerade gibt es ein Problem');
}
//-------------Datenbankabfrage----------------------------

$erg = $db->query("SELECT * FROM tiere") or die($db->error); // or die($db-
$erg2 = $db->query("SELECT * FROM tierinfo") or die($db->error);
$erg3 = $db->query("SELECT * FROM user") or die($db->error);
$erg4 = $db->query("SELECT * FROM comments") or die($db->error);
$erg5 = $db->query("SELECT * FROM comments as c, user as u WHERE u.user_id = c.user_id ") or die($db->error);
if ($erg->num_rows) { //Wenn min. 1 Ergebnis zurückkommt

//------Ergebnismapping-------------
    
   
		while ($datensatz = $erg->fetch_object()) {
			$tiere[] = $datensatz;
		}
	
	/* while ($zeile = $erg->fetch_object()) { // test ausgabe
			$tier_id = $zeile->tier_id;
			$name = $zeile->name;
			$geburtstag = $zeile->geburtstag;
			$geschlecht = $zeile->$geschlecht;
			$art = $zeile->$art;
			$rasse = $zeile->$rasse;
			$geimpft = $zeile->$geimpft;
			$vermittelt = $zeile->$vermittelt;
			$tierbild = $zeile->$tierbild;
           // print($name);
		}
   */
	 
	}



if ($erg2->num_rows) { //Wenn min. 1 Ergebnis zurückkommt

//------Ergebnismapping-------------
    
   
		while ($datensatz = $erg2->fetch_object()) {
			$tierinfo[] = $datensatz;
		}
	
	}
//-------USER
if ($erg3->num_rows) { //Wenn min. 1 Ergebnis zurückkommt
while ($datensatz = $erg3->fetch_object()) {
	   $user[] = $datensatz;
    }
}
//----Für Comments
if ($erg4->num_rows) { //Wenn min. 1 Ergebnis zurückkommt
while ($datensatz = $erg4->fetch_object()) {
	   $comments[] = $datensatz;
    }
}
//---Für Comments und ihre User
if ($erg5->num_rows) { //Wenn min. 1 Ergebnis zurückkommt
while ($datensatz = $erg5->fetch_object()) {
	   $userandcomments[] = $datensatz;
    }
}

		$erg->free();
		$db->close();

			//if(session_id() === "") ist session leer?
	?>