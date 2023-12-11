<?php 

session_start();

if ($_SESSION['giris'] != true) {
    header("location: login.php");
    die();
}

echo "Welcome<br><br>";
echo "<a href='close.php'>Sign out</a>"


?>