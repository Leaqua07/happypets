<h1>meine erste Programm</h1>
<?php
if (session_id() === "")
{
    echo "Session existiert nicht";
}
else
{
    echo "session existiert";

}
session_start();

if (session_id() === "")
{
    echo "Session existiert nicht";
}
else
{
    echo "session existiert";
    $id = session_id();

    echo "\n" . "id:" . $id;

}
echo "Welcome " . $_SESSION['email'];
echo " <a href='logout.php' >logout</a>"session_

?>
