<?php
session_start();
ini_set('session.gc_maxlifetime', 3600);
$connection = new PDO('mysql:host=localhost; dbname=academy; charset=utf8', 'root', 'root');
$login = $connection->query('SELECT * FROM login');

if ($_POST['login']) {
    foreach ($login as $log) {
        if ($_POST['login'] == $log['login'] && $_POST['password'] == $log['password']) {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
            header("Location: content.php");
        }
    }

    echo "Not correct login or password !!!";
}
?>

<style>
    body {
        margin: 200px 300px
    }

    input, p {
        font-size: 30px;
        margin: 10px;
    }
</style>

<form method="post">
    <p>Авторизуйтесь</p>
    <input type="text" name="login" required placeholder="Login"> <br>
    <input type="password" name="password" required placeholder="Password"> <br>
    <input type="submit">
</form>
