<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>

<?php
	$testemail = "tim@lala.de";
	$testpasswort = "1234";

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$pass = $_POST['passwort'];
		if($email == $testemail and $pass == $testpasswort){
			if(isset($_POST['remember'])){
				setcookie('email', $email ,time()+60*60*7);		
			}
			session_start();
			$_SESSION['email'] = $email;
			header("location: ../index.html");
		} else{
			echo "Email or Passwort incorrect";
		} 
	} else {
		header("location:login.php"); //verhindert, dass es möglich ist per link den Login zu übersprinen
	}

	?>

	</body>
	</html>