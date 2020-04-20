<h1>meine erste Programm</h1>
<?php
	session_start();
	echo "Welcome " . $_SESSION['email'];
	echo " <a href='logout.php' >logout</a>"
?>