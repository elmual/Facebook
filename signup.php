<?php 

session_start();
require_once "config.php";

if ($_POST) {
    $login = $_POST['login'];
    $parol = $_POST['parol'];
    $email = $_POST['email'];

    $tap = mysqli_query($db, "select * from base where login = '$login'");

    $say = mysqli_num_rows($tap);

    if ($say > 0) {
        echo 'Bele user artiq movcuddur';
        die();
    }

    $insert = mysqli_query($db, "insert into base set login = '$login', parol = '$parol', email = '$email'") or die("Sorgu alinmadi");

    if ($insert) {
        $_SESSION['giris'] = true;
        $_SESSION['login'] = $login;
        $_SESSION['parol'] = $parol;

        header("location: success.php");
        
    }

} else {
    header("location: qeydiyyat.php");
}

?>

