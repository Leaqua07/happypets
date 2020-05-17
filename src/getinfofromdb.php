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
		$erg->free();
		$db->close();

			//if(session_id() === "") ist session leer?
	?>