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
$erg = $db->query("SELECT * FROM tiere") or die($db->error); // or die($db->error); gibt SQL Fehler aus

//print_r($erg); //Dateninformationen

if ($erg->num_rows) {
	//echo "<p>Daten vorhanden: Anzahl ";
	//echo $erg->num_rows; // Anzahl der Datens�tze

	while ($zeile = $erg->fetch_object()) {
			$tier_id = $zeile->tier_id;
			$name = $zeile->name;
			$geburtstag = $zeile->geburtstag;
			$geschlecht = $zeile->$geschlecht;
			$art = $zeile->$art;
			$rasse = $zeile->$rasse;
			$geimpft = $zeile->$geimpft;
			$vermittelt = $zeile->$vermittelt;
			$tierbild = $zeile->$tierbild;
	
			//echo $tier_id;
			//echo $name;
		}
	 
	}
		$erg->free();
		$db->close();

			//if(session_id() === "") ist session leer?
	?>