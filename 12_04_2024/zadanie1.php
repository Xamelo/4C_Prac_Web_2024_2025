<?php
if (!isset($_COOKIE['kamil'])) {
    $ile = 1;
} else {
    $ile = (int)$_COOKIE['kamil'];
    if ($ile < 1)
        $ile = 1;
    $ile++;
}
setcookie("kamil", $ile, time() + 3600);
?>

<html>
    <body>
        <?php
        //$str = $_COOKIE['kamil'];
        //echo $str;
        //setcookie("kamil", "skuty")
        //setcookie("kamil", "", time() - 3600)
        if ($ile > 5) {
            echo "Odwiedziłeś strone ponad 5 razy";
        }
        ?>
    </body>
</html> 