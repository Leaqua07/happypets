<?php
echo date("H:i:s");


error_reporting(0); //n�tig f�r sch�ne Fehlerausgabe
$db = new mysqli('localhost', 'root', 'root', 'happypets');

$db->set_charset('utf8'); //umlaute werden umgewandelt
print_r ($db->connect_error); //n�tig f�r sch�ne Fehlerausgabe

if ($db->connect_errno) {
    die('Sorry - gerade gibt es ein Problem');
}

$erg = $db->query("SELECT user_id, benutzername, email, passwort FROM user") or die($db->error); // or die($db->error); gibt SQL Fehler aus

//print_r($erg); //Dateninformationen

if ($erg->num_rows) {
	echo "<p>Daten vorhanden: Anzahl ";
	echo $erg->num_rows; // Anzahl der Datens�tze
}

//foreach($erg as $zeile) {
//	echo '<br>';
//	echo '<br>' . $zeile['user_id'] .' '. $zeile['benutzername'] ; 
	//}
//Daten aus Ergebnis bekommen
//$datensatz = $erg->fetch_assoc(); //gibt einen Datensatz
//$datensatz = $erg->fetch_all(); //gibt alle Datensatz
//print_r($datensatz); //Ausgabe mit Arrayindecies

//echo "<pre>"; //Datensatzinfoausgabe
//print_r($erg);
//echo "</pre>";

while ($zeile = $erg->fetch_object()) {
	echo '<br>'. $zeile->benutzername;
	}

	$erg->free();
$db->close();
?>