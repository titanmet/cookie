<?php
if ($_POST['first']) {
    setcookie('first', $_POST['first'], time() + 3600);
    setcookie('second', $_POST['second'], time() + 3600);
    header('Location: index.php');
}

?>


    <form action="" method="post">
        <input type="text" name="first" required>
        <input type="text" name="second" required>
        <button>Submit</button>
    </form>

<?php

echo $_COOKIE['first'] . ' ' . $_COOKIE['second'] . "<br/>";
var_dump($_COOKIE);
