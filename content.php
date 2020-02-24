<?php
session_start();
if (!$_SESSION['login'] && !$_SESSION['password']) {
    header("Location: login.php");
    die;
}

if ($_POST['unlogin']) {
    session_destroy();
    header("Location: login.php");
}

?>
<body style="font-size: 40px">
<p>Сайт для авторизованных пользователей !</p>
<?php echo "Hi , " . $_SESSION['login'] . "<br>"; ?>
    <div>
        <img src="img/monro.jpg" alt="picture" width="600" style="display: block">
    </div>
<form method="post" style="margin: 40px; font-size: 40px">
    <input style="font-size: 30px" type="submit" name="unlogin" value="НА СТРАНИЦУ АВТОРИЗАЦИИ">
</form>
</body>