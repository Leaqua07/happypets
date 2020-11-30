<?php
session_start();
session_destroy();
#header('location:../index.php');
header('Location: ' . $_SERVER['HTTP_REFERER']);
if (isset($_POST['logout']))
{

    if (isset($_COOKIE['email']) and isset($_COOKIE['pass']))
    {
        $email = $_COOKIE['email'];
        $pass = $_COOKIE['pass'];
        setcookie('email', $email, time() - 1);
        setcookie('pass', $pass, time() - 1);
    }
    echo "You successfully logged out";

}
print_r($_SESSION);

?>
