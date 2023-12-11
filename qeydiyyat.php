<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
        session_start();

        if (@$_SESSION['giris'] == true) {
            header('location: panel.php');
            die();
        } 
    ?>

    <div class="header header2">
        <div class="login">
            <h1 class="fbh1 fbh2">facebook</h1>
            <div class="loginbox login2 signup">
                <form action="signup.php" method="post">
                    <h3 style="text-align: center; margin-top:0px;">Qeydiyyatdan keçin</h3>
                    <input type="text" placeholder="İstifadəçi adı" name="login" required><br><br>
                    <input type="password" placeholder="Parol" name="parol" required><br><br>
                    <input type="email" placeholder="Email ünvanınızı yazın" name="email" required><br><br>
                    <input type="submit" value="Sign up" id="signup">
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <p class="foot">Русский Azərbaycan dili Türkçe English (US) العربية Deutsch Français (France) فارسی ქართული Español
            Português (Brasil)
        </p>
        <hr>
        <p class="foot">
            РегистрацияВходMessengerFacebook LiteВидеоМестаИгрыMarketplaceMeta PayMeta StoreMeta QuestInstagramThreadsБлаготворительные акцииУслугиЦентр информации о выборахПолитика конфиденциальностиЦентр конфиденциальностиГруппыИнформацияСоздать рекламуСоздать СтраницуРазработчикамВакансииФайлы cookieРекламные предпочтенияУсловия использованияСправкаЗагрузка контактов и лица, не являющиеся пользователямиНастройки
        </p>
        <p class="foot">
            Meta &copy; 2023
        </p>
    </div>

</body>

</html>