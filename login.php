<?php

session_start();
require_once "config.php";

if (@$_SESSION['giris'] == true) {
   header('location: panel.php');
   die();
}

if ($_POST) {
    $login = $_POST['login'];
    $parol = $_POST['parol'];

    $yoxla = @mysqli_query($db, "select * from base where login = '$login' and parol = '$parol'") or die("Sorgu alinmadi");

    $say = mysqli_num_rows($yoxla);

    if ($say > 0) {
        $_SESSION['giris'] = true;
        $_SESSION['login'] = $login;
        $_SESSION['parol'] = $parol;

        header("location: panel.php");
    } else {
        header("location: wrong.php");
    }
} else {
    header("loaction: index.html");
}

?>


