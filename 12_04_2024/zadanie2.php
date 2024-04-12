<?php
$birthday = $_POST['birthday'];

if (isset($_POST['birthday'])) {
    setcookie("user", $birthday, time() + 86400 * 30, "/");
}

if ($_COOKIE["user"] == 3) {
    echo "najlepszego";
}
?>

<html>
    <body>
        <form method="post">
            <input type="text" name="birthday">
            <input type="submit" value="wyslij">
        </form>
    </body>
</html>